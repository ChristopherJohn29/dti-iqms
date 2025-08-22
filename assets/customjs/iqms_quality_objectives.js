(function($){
  'use strict';

  $(function(){
    // Read context from hidden fields if present, else fallback to defaults
    var moduleCode = $('#iqmsModuleCode').val() || 'QUALITY_OBJECTIVES';
    var officeId   = $('#iqmsOfficeId').val()   || 10;
    var processId  = $('#iqmsProcessId').val()  || 1;
    var fiscalYear = $('#iqmsFiscalYear').val() || '2025';

    var base = (window.BASE_URL || '/');
    if(base.slice(-1) !== '/') base += '/';
    var ENDPOINT={
      ENSURE:  base+'admin/iqms-data/ensure',
      LIST:    base+'admin/iqms-data/list',
      SAVE:    base+'admin/iqms-data/save',
      DEL:     base+'admin/iqms-data/delete',
      CHILDREN:base+'admin/iqms-data/children',
      DEL_CHILDREN: base+'admin/iqms-data/delete-children'
    };

    var analysisId=null;

    function esc(s){return String(s||'').replace(/[&<>"']/g,function(m){return {'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;','\'':'&#39;'}[m];});}

    function ensureAnalysis(){
      return $.post(ENDPOINT.ENSURE,{module_code:moduleCode,office_id:officeId,process_id:processId,fiscal_year:fiscalYear},function(r){analysisId=r.id;},'json');
    }

    function loadObjectives(){
      return $.getJSON(ENDPOINT.LIST,{table:'iqms_quality_objectives',analysis_id:analysisId},function(rows){renderObjectives(rows);});
    }

    function renderObjectives(rows){
      var $tb=$('#objectivesTbody').empty();
      $.each(rows,function(_,o){
        var statusCls=(o.objective_status||'Not Started').toLowerCase().replace(/\s+/g,'-');
        var $tr=$('<tr/>').attr('data-owner',(o.process_owner||'').toLowerCase());
        $tr.append('<td>'+(o.objective_code||('QO-'+o.id))+'</td>')
           .append('<td>'+esc(o.quality_objective||'')+'</td>')
           .append('<td>'+esc(o.target||'')+'</td>')
           .append('<td class="qo-action-plan">Loading...</td>')
           .append('<td class="qo-timeline">-</td>')
           .append('<td class="qo-responsibility">-</td>')
           .append('<td><span class="iqms-status '+statusCls+'">'+esc(o.objective_status||'Not Started')+'</span></td>')
           .append('<td class="text-center"><div class="iqms-action-btns">\
              <button class="iqms-btn iqms-btn-warning iqms-btn-sm" data-id="'+o.id+'" data-act="edit"><i class="fe-edit"></i></button>\
              <button class="iqms-btn iqms-btn-danger iqms-btn-sm" data-id="'+o.id+'" data-act="del"><i class="fe-trash"></i></button>\
           </div></td>');
        $tb.append($tr);
        // Load and render all action plans inline (Stakeholders-like layout)
        $.getJSON(ENDPOINT.CHILDREN,{table:'iqms_quality_objective_action_plans',fk:'objective_id',id:o.id},function(plans){
          if(!plans || !plans.length){ $tr.find('.qo-action-plan').html('<em>-</em>'); $tr.find('.qo-timeline').text('-'); return; }
          var html='';
          $.each(plans,function(i,p){
            html += '<div class="qo-ap-row">'
                 +   '<div class="qo-ap-text">'+esc(p.action_text||'')+'</div>'
                 +   '<div class="qo-ap-meta">'
                 +     '<span class="qo-ap-timeline"><strong>Timeline:</strong> '+esc(p.timeline||'-')+'</span>'
                 +     ' &middot; '
                 +     '<span class="qo-ap-resp"><strong>Responsibility:</strong> '+esc(p.responsibility||'-')+'</span>'
                 +     ' &middot; '
                 +     '<span class="qo-ap-status"><strong>Status:</strong> '+esc(p.action_status||'-')+'</span>'
                 +   '</div>'
                 + '</div>';
          });
          $tr.find('.qo-action-plan').html(html);
          // Leave timeline and responsibility columns with first plan values for filtering convenience
          var first = plans[0] || {};
          $tr.find('.qo-timeline').text(first.timeline||'-');
          $tr.find('.qo-responsibility').text(first.responsibility || (o.process_owner||'-'));
          // Update Status column to first plan status when available
          if(first.action_status){
            var apCls = String(first.action_status).toLowerCase().replace(/\s+/g,'-');
            $tr.find('.iqms-status').text(first.action_status).attr('class','iqms-status '+apCls);
          }

        });
      });
      $('#objectivesTbody [data-act]').off('click').on('click',function(){
        var id=$(this).data('id'),act=$(this).data('act');
        if(act==='edit') openEdit(id);
        else if(act==='view') openView(id);
        else if(act==='del') delObjective(id);
      });
    }

    function loadObjectiveIntoForm(id, cb){
      $.getJSON(ENDPOINT.LIST,{table:'iqms_quality_objectives',analysis_id:analysisId},function(rows){
        var o=(rows||[]).find(function(x){return x.id==id;});
        if(!o) return;
        $('#qualityObjective').val(o.quality_objective||'');
        $('#target').val(o.target||'');
        $('#outputIndicator').val(o.output_indicator||'');
        $('#processOwner').val(o.process_owner||'');
        $('#objectiveStatus').val(o.objective_status||'Not Started');
        $.getJSON(ENDPOINT.CHILDREN,{table:'iqms_quality_objective_action_plans',fk:'objective_id',id:id},function(plans){
          window.populateActionPlans($.map(plans||[],function(p){return {text:p.action_text,timeline:p.timeline,responsibility:p.responsibility,resources:p.resources_needed,references:p.references,status:p.action_status};}));
          cb&&cb();
        });
        $('#objectiveStatus').val(o.objective_status||'Not Started');
      });
    }

    function openEdit(id){ $('#modalTitleText').text('Edit Quality Objective'); $('#objectiveId').val(id); loadObjectiveIntoForm(id,function(){ $('#objectiveModal').css('display','flex'); $('body').css('overflow','hidden'); }); }
    function openView(id){ openEdit(id); setTimeout(function(){ $('#objectiveForm input, #objectiveForm textarea, #objectiveForm select').prop('disabled', true); $('#objectiveForm .mt-4').hide(); $('.iqms-remove-action-plan').hide(); $('#addActionPlanBtn').hide(); },0); }
    function delObjective(id){ if(!confirm('Delete this quality objective?')) return; $.post(ENDPOINT.DEL,{table:'iqms_quality_objectives',id:id},function(){loadObjectives();}); }

    // Expose open/close for external triggers
    window.openObjectiveModal=function(){ $('#modalTitleText').text('Add New Quality Objective'); $('#objectiveId').val(''); $('#objectiveForm')[0].reset(); window.resetActionPlans(); $('#objectiveModal').css('display','flex'); $('body').css('overflow','hidden'); };
    window.closeObjectiveModal=function(){ $('#objectiveModal').hide(); $('body').css('overflow','auto'); $('#objectiveForm input, #objectiveForm textarea, #objectiveForm select').prop('disabled', false); $('#objectiveForm .mt-4').show(); $('.iqms-remove-action-plan').show(); $('#addActionPlanBtn').show(); };

    // Save objective to backend
    $('#objectiveForm').off('submit').on('submit',function(e){ e.preventDefault(); window.saveObjective(); });

    function getNextObjectiveCode(cb){
      $.getJSON(ENDPOINT.LIST,{table:'iqms_quality_objectives',analysis_id:analysisId},function(rows){
        var max=0; (rows||[]).forEach(function(r){ var c=r.objective_code||''; var m=c.match(/(\d+)/g); if(m){ var n=parseInt(m.pop(),10)||0; if(n>max) max=n; }});
        var code='QO-'+String(max+1).padStart(3,'0'); cb(code);
      });
    }

    window.saveObjective=function(){
      var id=$('#objectiveId').val()||null;
      function doSave(objCode){
        var data={table:'iqms_quality_objectives',id:id,analysis_id:analysisId,quality_objective:$('#qualityObjective').val(),target:$('#target').val(),output_indicator:$('#outputIndicator').val(),process_owner:$('#processOwner').val(),objective_status:($('#objectiveStatus').val()||'Not Started')};
        if(!id && objCode){ data.objective_code=objCode; }
        $.post(ENDPOINT.SAVE,data,function(resp){ var objId=id||resp.id; $.post(ENDPOINT.DEL_CHILDREN,{table:'iqms_quality_objective_action_plans',fk:'objective_id',id:objId},function(){ var aps=[]; $('#actionPlansContainer .iqms-action-plan-container').each(function(){ aps.push({table:'iqms_quality_objective_action_plans',objective_id:objId,action_text:$(this).find('.action-plan-text').val(),timeline:$(this).find('.action-plan-timeline').val(),responsibility:$(this).find('.action-plan-responsibility').val(),resources_needed:$(this).find('.action-plan-resources').val(),references:$(this).find('.action-plan-references').val(),action_status:$(this).find('.action-plan-status').val()});}); var i=0;(function next(){ if(i>=aps.length){ alert('Quality objective saved successfully!'); window.closeObjectiveModal(); return loadObjectives(); } $.post(ENDPOINT.SAVE,aps[i++],function(){ next(); }); })(); }); },'json');
      }
      if(!id){ getNextObjectiveCode(doSave); } else { doSave(); }
    };

    // Search & filter
    $('#searchObjectives').on('input',function(){var term=this.value.toLowerCase(); $('#objectivesTable tbody tr').each(function(){var txt=$(this).text().toLowerCase(); $(this).toggle(txt.indexOf(term)!==-1);});});
    $('#statusFilter,#timelineFilter,#ownerFilter').on('change',function(){var s=$('#statusFilter').val(),t=$('#timelineFilter').val().toLowerCase(),o=$('#ownerFilter').val().toLowerCase(); $('#objectivesTable tbody tr').each(function(){var status=$(this).find('.iqms-status').text().toLowerCase().replace(' ','-'); var timeline=$(this).find('td').eq(4).text().toLowerCase(); var owner=$(this).find('td').eq(5).text().toLowerCase(); var show=true; if(s&&status.indexOf(s)===-1) show=false; if(t&&timeline.indexOf(t)===-1) show=false; if(o&&owner.indexOf(o.replace('-',' '))===-1) show=false; $(this).toggle(show);});});

    // Close modal when clicking outside
    $(window).on('click',function(e){ var $modal=$('#objectiveModal'); if(e.target=== $modal.get(0)) window.closeObjectiveModal(); });

    // Initialize
    ensureAnalysis().then(loadObjectives);
  });

  // UI helper functions (exposed globally)
  window.updateActionPlanTitles = function(){ $('.iqms-action-plan-container').each(function(i){ $(this).find('.iqms-action-plan-title').text('Action Plan #'+(i+1)); }); };

  window.addActionPlan = function(){
    var $container = $('#actionPlansContainer');
    var count = $container.find('.iqms-action-plan-container').length + 1;
    var $plan = $('<div class="iqms-action-plan-container"/>');
    $plan.append(
      '<div class="iqms-action-plan-header">'+
      '  <div class="iqms-action-plan-title">Action Plan #'+count+'</div>'+
      '  <button type="button" class="iqms-remove-action-plan" onclick="removeActionPlan(this)"><i class="fe-x"></i></button>'+
      '</div>'+
      '<div class="iqms-form-group">'+
      '  <label class="iqms-form-label">Action Plan:</label>'+
      '  <textarea class="iqms-form-control action-plan-text" rows="3" required></textarea>'+
      '</div>'+
      '<div class="iqms-form-row">'+
      '  <div class="iqms-form-group">'+
      '    <label class="iqms-form-label">Timeline:</label>'+
      '    <select class="iqms-form-control action-plan-timeline" required>'+ 
      '      <option value="">Select Timeline</option>'+ 
      '      <option value="Annually">Annually</option>'+ 
      '      <option value="Semi-annually">Semi-annually</option>'+ 
      '      <option value="Quarterly">Quarterly</option>'+ 
      '      <option value="Monthly">Monthly</option>'+ 
      '      <option value="Every conduct of training">Every conduct of training</option>'+ 
      '    </select>'+ 
      '  </div>'+ 
      '  <div class="iqms-form-group">'+
      '    <label class="iqms-form-label">Responsibility:</label>'+
      '    <input type="text" class="iqms-form-control action-plan-responsibility" required>'+ 
      '  </div>'+ 
      '</div>'+ 
      '<div class="iqms-form-row">'+ 
      '  <div class="iqms-form-group">'+
      '    <label class="iqms-form-label">Resources (Budget):</label>'+
      '    <input type="text" class="iqms-form-control action-plan-resources">'+
      '  </div>'+ 
      '  <div class="iqms-form-group">'+
      '    <label class="iqms-form-label">References (Documented Info):</label>'+
      '    <input type="text" class="iqms-form-control action-plan-references">'+
      '  </div>'+ 
      '</div>'+ 
      '<div class="iqms-form-group">'+ 
      '  <label class="iqms-form-label">Status:</label>'+ 
      '  <select class="iqms-form-control action-plan-status" required>'+ 
      '    <option value="Not Started">Not Started</option>'+ 
      '    <option value="In Progress">In Progress</option>'+ 
      '    <option value="Completed">Completed</option>'+ 
      '  </select>'+ 
      '</div>'
    );
    $container.append($plan);
    window.updateActionPlanTitles();
  };

  window.removeActionPlan = function(btn){ var $container=$(btn).closest('.iqms-action-plan-container'); var $all=$('.iqms-action-plan-container'); if($all.length>1){ $container.remove(); window.updateActionPlanTitles(); } else { alert('At least one action plan is required.'); } };

  window.resetActionPlans = function(){ var $container=$('#actionPlansContainer'); var $plans=$container.find('.iqms-action-plan-container'); $plans.slice(1).remove(); var $first=$plans.first(); if($first.length){ $first.find('input, textarea, select').val('').prop('disabled', false); } window.updateActionPlanTitles(); };

  window.populateActionPlans = function(actionPlans){ var $container=$('#actionPlansContainer'); $container.empty(); $.each(actionPlans||[], function(i,plan){ window.addActionPlan(); var $el=$container.children().eq(i); $el.find('.action-plan-text').val(plan.text||''); $el.find('.action-plan-timeline').val(plan.timeline||''); $el.find('.action-plan-responsibility').val(plan.responsibility||''); $el.find('.action-plan-resources').val(plan.resources||''); $el.find('.action-plan-references').val(plan.references||''); $el.find('.action-plan-status').val(plan.status||''); }); };

})(jQuery);


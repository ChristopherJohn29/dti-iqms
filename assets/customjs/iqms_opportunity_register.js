(function($){
  'use strict';

  $(function(){
    // Context from hidden fields
    var moduleCode = $('#iqmsModuleCode').val() || 'OPPORTUNITY_REGISTER';
    var officeId   = $('#iqmsOfficeId').val()   || 10;
    var processId  = $('#iqmsProcessId').val()  || 1;
    var fiscalYear = $('#iqmsFiscalYear').val() || '2025';

    // Build endpoints using global BASE_URL if provided
    var base = (window.BASE_URL || '/');
    if(base.slice(-1) !== '/') base += '/';
    var ENDPOINT = {
      ENSURE:   base+'admin/iqms-data/ensure',
      LIST:     base+'admin/iqms-data/list',
      SAVE:     base+'admin/iqms-data/save',
      DEL:      base+'admin/iqms-data/delete',
      CHILDREN: base+'admin/iqms-data/children'
    };

    var analysisId = null;

    function esc(s){ return String(s||'').replace(/[&<>"']/g,function(m){return {'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;','\'':'&#39;'}[m];}); }

    function ensureAnalysis(){
      return $.post(ENDPOINT.ENSURE,
        { module_code: moduleCode, office_id: officeId, process_id: processId, fiscal_year: fiscalYear },
        function(r){ analysisId = r.id; },
        'json'
      );
    }

    function computeScore(prob, si, se, fi, ri){
      var totalImpact = Math.round(((parseInt(si)||0) + (parseInt(se)||0) + (parseInt(fi)||0) + (parseInt(ri)||0)) / 4);
      return (parseInt(prob)||0) + totalImpact;
    }

    function priorityBadge(score){
      if(score >= 5) return '<span class="badge bg-danger">1st Priority</span>';
      if(score >= 3) return '<span class="badge bg-warning">2nd Priority</span>';
      return '<span class="badge bg-success">3rd Priority</span>';
    }

    // ------- Opportunity Register -------
    function loadOpportunities(){
      return $.getJSON(ENDPOINT.LIST, { table:'iqms_opportunity_register', analysis_id: analysisId }, function(rows){
        renderOpportunitiesTable(rows);
        populateOpportunityDropdowns(rows);
        loadMonitoringTable(rows);
        loadTreatmentsFromOpportunities(rows);
      });
    }

    function renderOpportunitiesTable(rows){
      var $tbody = $('#opportunitiesTable tbody').empty();
      $.each(rows, function(_, o){
        var score = computeScore(o.probability, o.strategic_impact, o.service_impact, o.financial_impact, o.reputation_impact);
        var $tr = $('<tr/>')
          .append('<td>'+(o.opportunity_id || ('OR-'+o.id))+'</td>')
          .append('<td>'+esc(o.opportunity_description||'')+'</td>')
          .append('<td>'+(o.probability||'')+'</td>')
          .append('<td>'+Math.round(o.overall_score||0)+'</td>')
          .append('<td>'+score+'</td>')
          .append('<td>'+priorityBadge(score)+'</td>')
          .append('<td>'+
                    '<button class="btn btn-warning btn-sm" onclick="editOpportunity('+o.id+')"><i class="fe-edit"></i></button> '+
                    '<button class="btn btn-danger btn-sm" onclick="deleteOpportunity('+o.id+')"><i class="fe-trash"></i></button>'+
                  '</td>');
        $tbody.append($tr);
      });
    }

    function populateOpportunityDropdowns(rows){
      var $selCreate = $('#treatmentOpportunityId').empty().append('<option value="">Select Opportunity</option>');
      var $selFilter = $('#treatmentOpportunityFilter').empty().append('<option value="">All Opportunities</option>');
      $.each(rows, function(_, o){
        var text = (o.opportunity_id || ('OR-'+o.id));
        $('<option/>',{ value:o.id, text:text }).appendTo($selCreate);
        $('<option/>',{ value:o.id, text:text }).appendTo($selFilter);
      });
    }

    // Expose modal helpers globally for existing onclick handlers
    window.openOpportunityModal = function(){
      $('#opportunityModalTitle').text('Add New Opportunity');
      $('#opportunityId').val('');
      $('#opportunityForm')[0].reset();
      $('#opportunityModal').show();
    };
    window.closeOpportunityModal = function(){ $('#opportunityModal').hide(); };

    window.editOpportunity = function(id){
      $('#opportunityModalTitle').text('Edit Opportunity');
      $('#opportunityId').val(id);
      $.getJSON(ENDPOINT.LIST, { table:'iqms_opportunity_register', analysis_id: analysisId }, function(rows){
        var o = (rows||[]).find(function(x){ return x.id == id; });
        if(!o) return;
        $('#opportunityDescription').val(o.opportunity_description||'');
        $('#opportunityProbability').val(o.probability||'');
        $('#strategicImpact').val(o.strategic_impact||'');
        $('#serviceImpact').val(o.service_impact||'');
        $('#financialImpact').val(o.financial_impact||'');
        $('#reputationImpact').val(o.reputation_impact||'');
        $('#actions').val(o.actions||'');
        $('#responsibility').val(o.opportunity_owner||'');
        $('#timeline').val(o.target_implementation_date||'');
        $('#indicator').val(o.effectiveness_indicator||'');
        $('#opportunityModal').show();
      });
    };

    window.deleteOpportunity = function(id){
      if(!confirm('Are you sure you want to delete this opportunity?')) return;
      $.post(ENDPOINT.DEL, { table:'iqms_opportunity_register', id:id }, function(){
        loadOpportunities();
      });
    };

    window.saveOpportunity = function(){
      var id = $('#opportunityId').val() || null;
      var data = {
        table:'iqms_opportunity_register',
        id: id,
        analysis_id: analysisId,
        opportunity_description: $('#opportunityDescription').val(),
        probability: $('#opportunityProbability').val(),
        strategic_impact: $('#strategicImpact').val(),
        service_impact: $('#serviceImpact').val(),
        financial_impact: $('#financialImpact').val(),
        reputation_impact: $('#reputationImpact').val(),
        opportunity_owner: $('#responsibility').val(),
        target_implementation_date: $('#timeline').val(),
        effectiveness_indicator: $('#indicator').val()
      };
      $.post(ENDPOINT.SAVE, data, function(){
        alert('Opportunity saved successfully!');
        closeOpportunityModal();
        loadOpportunities();
      });
    };

    // ------- Treatments -------
    function loadTreatments(){
      // Join-style load: actions filtered by analysis via backend special-case
      $.getJSON(ENDPOINT.LIST, { table:'iqms_opportunity_actions', analysis_id: analysisId }, function(rows){
        var $tbody = $('#treatmentTable tbody').empty();
        $.each(rows||[], function(_, t){
          var tr = '<tr>'+
            '<td>'+(t.opportunity_id ? ('OR-'+t.opportunity_id) : '')+'</td>'+
            '<td>'+esc((t.treatment_type||'').toLowerCase())+'</td>'+
            '<td>'+esc(t.action_description||'')+'</td>'+
            '<td>'+esc(t.responsibility||'')+'</td>'+
            '<td>'+formatDate(t.target_date)+'</td>'+
            '<td>'+formatDate(t.completion_date)+'</td>'+
            '<td>'+(t.progress||'')+'%</td>'+
            '<td>'+esc(t.action_status||'')+'</td>'+
            '<td><button class="btn btn-warning btn-sm" onclick="editTreatment('+t.id+')"><i class="fe-edit"></i></button></td>'+
          '</tr>';
          $tbody.append(tr);
        });
      });
    }

    window.openTreatmentModal = function(){
      $('#treatmentModalTitle').text('Add Treatment Plan');
      $('#treatmentId').val('');
      $('#treatmentForm')[0].reset();
      $('#treatmentModal').show();
    };
    window.closeTreatmentModal = function(){ $('#treatmentModal').hide(); };

    window.editTreatment = function(id){
      $('#treatmentModalTitle').text('Edit Treatment Plan');
      $('#treatmentId').val(id);
      $.getJSON(ENDPOINT.LIST, { table:'iqms_opportunity_actions', analysis_id: analysisId }, function(rows){
        var t = (rows||[]).find(function(x){ return x.id == id; });
        if(!t) return;
        $('#treatmentOpportunityId').val(t.opportunity_id);
        $('#treatmentAction').val((t.treatment_type||'').toLowerCase());
        $('#treatmentDescription').val(t.action_description||'');
        $('#treatmentResponsible').val(t.responsibility||'');
        $('#treatmentProgress').val(t.progress||0);
        $('#treatmentStartDate').val(t.target_date||'');
        $('#treatmentDueDate').val(t.completion_date||'');
        $('#treatmentStatus').val((t.action_status||'').toLowerCase());
        $('#treatmentModal').show();
      });
    };

    window.saveTreatment = function(){
      var id = $('#treatmentId').val() || null;
      var data = {
        table:'iqms_opportunity_actions',
        id: id,
        opportunity_id: $('#treatmentOpportunityId').val(),
        treatment_type: $('#treatmentAction').val(),
        action_description: $('#treatmentDescription').val(),
        responsibility: $('#treatmentResponsible').val(),
        progress: $('#treatmentProgress').val(),
        target_date: $('#treatmentStartDate').val(),
        completion_date: $('#treatmentDueDate').val(),
        action_status: $('#treatmentStatus').val()
      };
      $.post(ENDPOINT.SAVE, data, function(){
        alert('Treatment plan saved successfully!');
        closeTreatmentModal();
        loadTreatments();
      });
    };

    // ------- Monitoring -------
    function loadMonitoringTable(opportunities){
      var $tbody = $('#monitoringTable tbody').empty();
      $.each(opportunities, function(_, o){
        $.getJSON(ENDPOINT.CHILDREN, { table:'iqms_opportunity_monitoring', fk:'opportunity_id', id:o.id }, function(ms){
          var q = {Q1:'N',Q2:'N',Q3:'N',Q4:'N'};
          $.each(ms||[], function(_, m){ q[m.quarter] = m.monitoring_result; });
          var row = '<tr>'+
            '<td class="text-center">'+(o.opportunity_id || ('OR-'+o.id))+'</td>'+
            '<td>'+esc(o.effectiveness_indicator||'')+'</td>'+
            '<td class="text-center">'+q.Q1+'</td>'+
            '<td class="text-center">'+q.Q2+'</td>'+
            '<td class="text-center">'+q.Q3+'</td>'+
            '<td class="text-center">'+q.Q4+'</td>'+
            '<td class="text-center"><button class="btn btn-primary btn-sm" onclick="openMonitoringModal('+o.id+')"><i class="fe-edit"></i> Update</button></td>'+
          '</tr>';
          $tbody.append(row);
        });
      });
    }

    window.openMonitoringModal = function(oppId){
      var $m = $('#monitoringModal');
      $('#monitoringForm')[0].reset();
      $('#monitoringOpportunityId').val(oppId);
      $.getJSON(ENDPOINT.CHILDREN, { table:'iqms_opportunity_monitoring', fk:'opportunity_id', id:oppId }, function(ms){
        var map = {};
        $.each(ms||[], function(_, m){ map[m.quarter] = m; });
        $('#monitoringIndicator').val(''); // indicator could be filled from register if needed
        $('#q1Status').val(map.Q1 ? map.Q1.monitoring_result : 'N');
        $('#q2Status').val(map.Q2 ? map.Q2.monitoring_result : 'N');
        $('#q3Status').val(map.Q3 ? map.Q3.monitoring_result : 'N');
        $('#q4Status').val(map.Q4 ? map.Q4.monitoring_result : 'N');
        $m.show();
      });
    };
    window.closeMonitoringModal = function(){ $('#monitoringModal').hide(); };

    window.saveMonitoringStatus = function(){
      var oppId = $('#monitoringOpportunityId').val();
      var quarters = ['Q1','Q2','Q3','Q4'];
      var i = 0;
      (function next(){
        if(i >= quarters.length){
          alert('Monitoring status updated successfully!');
          closeMonitoringModal();
          return ensureAnalysis().then(loadOpportunities);
        }
        var q = quarters[i++];
        var val = $('#'+q.toLowerCase()+'Status').val();
        $.getJSON(ENDPOINT.CHILDREN, { table:'iqms_opportunity_monitoring', fk:'opportunity_id', id:oppId, extra_key:'quarter', extra_val:q }, function(rows){
          var payload = { table:'iqms_opportunity_monitoring', opportunity_id: oppId, quarter: q, monitoring_result: val };
          if((rows||[]).length){ payload.id = rows[0].id; }
          $.post(ENDPOINT.SAVE, payload, function(){ next(); });
        });
      })();
    };

    function formatDate(d){
      if(!d) return '';
      try{
        var dt = new Date(d);
        return dt.toLocaleDateString('en-US',{ year:'numeric', month:'short', day:'numeric' });
      }catch(e){ return d; }
    }


    // Search filter (jQuery)
    $('#searchOpportunities').off('input').on('input', function(){
      var term = ($(this).val()||'').toLowerCase();
      $('#opportunitiesTable tbody tr').each(function(){
        var text = $(this).text().toLowerCase();
        $(this).toggle(text.indexOf(term) !== -1);
      });
    });

    // Initialize
    ensureAnalysis().then(function(){
      loadOpportunities();
      loadTreatments();
      // Near real-time sync while Treatment tab visible
      var _oppTreatPoll=null;
      $('a[data-bs-toggle="tab"]').on('shown.bs.tab', function(e){ if(e.target && e.target.id==='treatment-tab'){ loadTreatments(); if(!_oppTreatPoll){ _oppTreatPoll=setInterval(function(){ if($('#treatment').hasClass('active')||$('#treatment').hasClass('show')) loadTreatments(); }, 15000); } } });
      $('a[data-bs-toggle="tab"]').on('hidden.bs.tab', function(e){ if(e.target && e.target.id==='treatment-tab'){ if(_oppTreatPoll){ clearInterval(_oppTreatPoll); _oppTreatPoll=null; } } });
    });
  });
})(jQuery);


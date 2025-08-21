<div class="content">
    <!-- Start Content-->
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title"><?=$title?></h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <!-- IQMS Header -->
        <div class="iqms-header">
            <div class="form-info">
                <div class="info-row">
                    <span class="info-label">FORM CODE:</span>
                    <span class="info-value">FM-QO-01</span>
                </div>
                <div class="info-row">
                    <span class="info-label">REVISION:</span>
                    <span class="info-value">2</span>
                </div>
                <div class="info-row">
                    <span class="info-label">DATE:</span>
                    <span class="info-value">01-Jun-25</span>
                </div>
            </div>

            <div class="process-info">
                <div class="info-row">
                    <span class="info-label">BUREAU/REGIONS/OFFICE:</span>
                    <span class="info-value">DTI-10 REGIONAL OFFICE</span>
                </div>
                <div class="info-row">
                    <span class="info-label">PROCESS:</span>
                    <span class="info-value">CONDUCT OF TRAINING</span>
                </div>
                <div class="info-row">
                    <span class="info-label">PROCESS OWNER:</span>
                    <span class="info-value">Training Coordinator</span>
                </div>
            </div>
        </div>

<input type="hidden" id="iqmsModuleCode" value="QUALITY_OBJECTIVES">
<input type="hidden" id="iqmsOfficeId" value="10">
<input type="hidden" id="iqmsProcessId" value="1">
<input type="hidden" id="iqmsFiscalYear" value="2025">




        <!-- Search and Filter Toolbar -->
        <div class="row mb-3">
            <div class="col-md-6">
                <div class="iqms-search-container">
                    <i class="fe-search"></i>
                    <input type="text" class="iqms-search-bar" placeholder="Search objectives..." id="searchObjectives">
                </div>
            </div>
            <div class="col-md-6 text-right">
                <button class="iqms-btn iqms-btn-success" onclick="openObjectiveModal()">
                    <i class="fe-plus"></i> Add Quality Objective
                </button>
                <button class="iqms-btn iqms-btn-secondary">
                    <i class="fe-filter"></i> Filter
                </button>
                <button class="iqms-btn iqms-btn-secondary">
                    <i class="fe-download"></i> Export
                </button>
            </div>
        </div>

        <!-- Filters Section -->
        <div class="row mb-3">
            <div class="col-md-4">
                <div class="iqms-filter-group">
                    <span class="iqms-filter-label">Status</span>
                    <select class="iqms-form-control" id="statusFilter">
                        <option value="">All Status</option>
                        <option value="completed">Completed</option>
                        <option value="in-progress">In Progress</option>
                        <option value="not-started">Not Started</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="iqms-filter-group">
                    <span class="iqms-filter-label">Timeline</span>
                    <select class="iqms-form-control" id="timelineFilter">
                        <option value="">All Timeframes</option>
                        <option value="annually">Annually</option>
                        <option value="semi-annually">Semi-annually</option>
                        <option value="quarterly">Quarterly</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="iqms-filter-group">
                    <span class="iqms-filter-label">Process Owner</span>
                    <select class="iqms-form-control" id="ownerFilter">
                        <option value="">All Owners</option>
                        <option value="training-coordinator">Training Coordinator</option>
                        <option value="industry-focal">Industry Focal Person</option>
                        <option value="nc-counselor">NC Counselor</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Quality Objectives Table -->
        <div class="table-responsive">
            <table class="iqms-table" id="objectivesTable">
                <thead>
                    <tr>
                        <th style="width: 8%;">ID</th>
                        <th style="width: 25%;">Quality Objective</th>
                        <th style="width: 20%;">Target</th>
                        <th style="width: 20%;">Action Plan</th>
                        <th style="width: 10%;">Timeline</th>
                        <th style="width: 12%;">Responsibility</th>
                        <th style="width: 8%;">Status</th>
                        <th style="width: 7%;">Actions</th>
                    </tr>
                </thead>
                <tbody id="objectivesTbody">
                </tbody>
            </table>
        </div>
    </div>
    <!-- container -->
</div>
<!-- content -->


<!-- Modal for Add/Edit Objective -->
<div id="objectiveModal" class="iqms-modal">
    <div class="iqms-modal-content" style="max-width: 900px; max-height: 90vh; overflow-y: auto;">
        <div class="iqms-modal-header">
            <h3 class="iqms-modal-title" id="objectiveModalTitle">
                <i class="fe-target"></i>
                <span id="modalTitleText">Add New Quality Objective</span>
            </h3>
            <span class="iqms-close" onclick="closeObjectiveModal()">&times;</span>
        </div>

        <form class="iqms-form" id="objectiveForm">
            <input type="hidden" id="objectiveId">

            <!-- Objective Information Section -->
            <div class="iqms-form-section">
                <h4 class="iqms-section-title">
                    <i class="fe-info"></i>
                    Objective Information
                </h4>

                <div class="iqms-form-row">
                    <div class="iqms-form-group">
                        <label class="iqms-form-label" for="qualityObjective">Quality Objective:</label>
                        <input type="text" class="iqms-form-control" id="qualityObjective" required>
                    </div>

                    <div class="iqms-form-group">
                        <label class="iqms-form-label" for="target">Target:</label>
                        <textarea class="iqms-form-control" id="target" rows="3" required></textarea>
                    </div>
                </div>

                <div class="iqms-form-row">
                    <div class="iqms-form-group">
                        <label class="iqms-form-label" for="outputIndicator">Output Indicator:</label>
                        <input type="text" class="iqms-form-control" id="outputIndicator" required>
                    </div>

                    <div class="iqms-form-group">
                        <label class="iqms-form-label" for="processOwner">Process Owner:</label>
                        <select class="iqms-form-control" id="processOwner" required>
                            <option value="">Select Process Owner</option>
                            <option value="Training Coordinators">Training Coordinators</option>
                            <option value="Industry Focal Person">Industry Focal Person</option>
                            <option value="NC Counselor">NC Counselor</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Action Plans Section -->
            <div class="iqms-form-section">
                <h4 class="iqms-section-title">
                    <i class="fe-list"></i>
                    Action Plans
                </h4>

                <div id="actionPlansContainer">
                    <!-- Action Plan 1 -->
                    <div class="iqms-action-plan-container">
                        <div class="iqms-action-plan-header">
                            <div class="iqms-action-plan-title">Action Plan #1</div>
                            <button type="button" class="iqms-remove-action-plan" onclick="removeActionPlan(this)">
                                <i class="fe-x"></i>
                            </button>
                        </div>

                        <div class="iqms-form-group">
                            <label class="iqms-form-label">Action Plan:</label>
                            <textarea class="iqms-form-control action-plan-text" rows="3" required></textarea>
                        </div>

                        <div class="iqms-form-row">
                            <div class="iqms-form-group">
                                <label class="iqms-form-label">Timeline:</label>
                                <select class="iqms-form-control action-plan-timeline" required>
                                    <option value="">Select Timeline</option>
                                    <option value="Annually">Annually</option>
                                    <option value="Semi-annually">Semi-annually</option>
                                    <option value="Quarterly">Quarterly</option>
                                    <option value="Monthly">Monthly</option>
                                    <option value="Every conduct of training">Every conduct of training</option>
                                </select>
                            </div>

                            <div class="iqms-form-group">
                                <label class="iqms-form-label">Responsibility:</label>
                                <input type="text" class="iqms-form-control action-plan-responsibility" required>
                            </div>
                        </div>

                        <div class="iqms-form-row">
                            <div class="iqms-form-group">
                                <label class="iqms-form-label">Resources (Budget):</label>
                                <input type="text" class="iqms-form-control action-plan-resources">
                            </div>

                            <div class="iqms-form-group">
                                <label class="iqms-form-label">References (Documented Info):</label>
                                <input type="text" class="iqms-form-control action-plan-references">
                            </div>
                        </div>

                        <div class="iqms-form-group">
                            <label class="iqms-form-label">Status:</label>
                            <select class="iqms-form-control action-plan-status" required>
                                <option value="Not Started">Not Started</option>
                                <option value="In Progress">In Progress</option>
                                <option value="Completed">Completed</option>
                            </select>
                        </div>
                    </div>
                </div>

                <button type="button" class="iqms-btn iqms-btn-secondary" id="addActionPlanBtn" onclick="addActionPlan()">
                    <i class="fe-plus"></i> Add Another Action Plan
                </button>
            </div>

            <div class="mt-4">
                <button type="submit" class="iqms-btn iqms-btn-primary">Save Objective</button>
                <button type="button" class="iqms-btn iqms-btn-secondary" onclick="closeObjectiveModal()">Cancel</button>
            </div>
        </form>
    </div>
</div>

<script>
$(function(){
  var ENDPOINT={
    ENSURE:'<?=base_url('admin/iqms-data/ensure')?>',LIST:'<?=base_url('admin/iqms-data/list')?>',SAVE:'<?=base_url('admin/iqms-data/save')?>',DEL:'<?=base_url('admin/iqms-data/delete')?>',CHILDREN:'<?=base_url('admin/iqms-data/children')?>',DEL_CHILDREN:'<?=base_url('admin/iqms-data/delete-children')?>'
  };
  var moduleCode='QUALITY_OBJECTIVES', officeId=10, processId=1, fiscalYear='2025';
  var analysisId=null;
  function ensureAnalysis(){return $.post(ENDPOINT.ENSURE,{module_code:moduleCode,office_id:officeId,process_id:processId,fiscal_year:fiscalYear},function(r){analysisId=r.id;},'json');}

  function loadObjectives(){return $.getJSON(ENDPOINT.LIST,{table:'iqms_quality_objectives',analysis_id:analysisId},function(rows){renderObjectives(rows)});}

  function renderObjectives(rows){var $tb=$('#objectivesTbody').empty();
    $.each(rows,function(_,o){var statusCls=(o.objective_status||'Not Started').toLowerCase().replace(/\s+/g,'-');
      var $tr=$('<tr/>');
      $tr.append('<td>'+(o.objective_code||('QO-'+o.id))+'</td>')
         .append('<td>'+esc(o.quality_objective||'')+'</td>')
         .append('<td>'+esc(o.target||'')+'</td>')
         .append('<td class="qo-action-plan">Loading...</td>')
         .append('<td class="qo-timeline"></td>')
         .append('<td>'+esc(o.process_owner||'')+'</td>')
         .append('<td><span class="iqms-status '+statusCls+'">'+esc(o.objective_status||'Not Started')+'</span></td>')
         .append('<td class="text-center"><div class="iqms-action-btns">\
            <button class="iqms-btn iqms-btn-warning iqms-btn-sm" data-id="'+o.id+'" data-act="edit"><i class="fe-edit"></i></button>\
            <button class="iqms-btn iqms-btn-info iqms-btn-sm" data-id="'+o.id+'" data-act="view"><i class="fe-eye"></i></button>\
            <button class="iqms-btn iqms-btn-danger iqms-btn-sm" data-id="'+o.id+'" data-act="del"><i class="fe-trash"></i></button>\
         </div></td>');
      $tb.append($tr);
      $.getJSON(ENDPOINT.CHILDREN,{table:'iqms_quality_objective_action_plans',fk:'objective_id',id:o.id},function(plans){if(!plans.length){$tr.find('.qo-action-plan').text('-');return;}var p=plans[0];$tr.find('.qo-action-plan').text(p.action_text||'');$tr.find('.qo-timeline').text(p.timeline||'');});
    });
    $('#objectivesTbody [data-act]').off('click').on('click',function(){var id=$(this).data('id'),act=$(this).data('act'); if(act==='edit') openEdit(id); else if(act==='view') openView(id); else if(act==='del') delObjective(id);});
  }

  function loadObjectiveIntoForm(id, cb){
    $.getJSON(ENDPOINT.LIST,{table:'iqms_quality_objectives',analysis_id:analysisId},function(rows){var o=rows.find(function(x){return x.id==id;}); if(!o) return; $('#qualityObjective').val(o.quality_objective||''); $('#target').val(o.target||''); $('#outputIndicator').val(o.output_indicator||''); $('#processOwner').val(o.process_owner||'');
      $.getJSON(ENDPOINT.CHILDREN,{table:'iqms_quality_objective_action_plans',fk:'objective_id',id:id},function(plans){populateActionPlans(plans.map(function(p){return {text:p.action_text,timeline:p.timeline,responsibility:p.responsibility,resources:p.resources_needed,references:p.references,status:p.action_status};})); cb&&cb();});
    });
  }

  function openEdit(id){ $('#modalTitleText').text('Edit Quality Objective'); $('#objectiveId').val(id); loadObjectiveIntoForm(id,function(){ $('#objectiveModal').css('display','flex'); $('body').css('overflow','hidden'); }); }
  function openView(id){ openEdit(id); setTimeout(function(){ $('#objectiveForm input, #objectiveForm textarea, #objectiveForm select').prop('disabled', true); $('#objectiveForm .mt-4').hide(); $('.iqms-remove-action-plan').hide(); $('#addActionPlanBtn').hide(); },0); }
  function delObjective(id){ if(!confirm('Delete this quality objective?')) return; $.post(ENDPOINT.DEL,{table:'iqms_quality_objectives',id:id},function(){loadObjectives();}); }

  window.openObjectiveModal=function(){ $('#modalTitleText').text('Add New Quality Objective'); $('#objectiveId').val(''); $('#objectiveForm')[0].reset(); resetActionPlans(); $('#objectiveModal').css('display','flex'); $('body').css('overflow','hidden'); };
  window.closeObjectiveModal=function(){ $('#objectiveModal').hide(); $('body').css('overflow','auto'); $('#objectiveForm input, #objectiveForm textarea, #objectiveForm select').prop('disabled', false); $('#objectiveForm .mt-4').show(); $('.iqms-remove-action-plan').show(); $('#addActionPlanBtn').show(); };

  $('#objectiveForm').off('submit').on('submit',function(e){e.preventDefault(); saveObjective();});
  window.saveObjective=function(){ var id=$('#objectiveId').val()||null; var data={table:'iqms_quality_objectives',id:id,analysis_id:analysisId,objective_code:(id?undefined:null),quality_objective:$('#qualityObjective').val(),target:$('#target').val(),output_indicator:$('#outputIndicator').val(),process_owner:$('#processOwner').val(),objective_status:'Not Started'}; $.post(ENDPOINT.SAVE,data,function(resp){var objId=id||resp.id; $.post(ENDPOINT.DEL_CHILDREN,{table:'iqms_quality_objective_action_plans',fk:'objective_id',id:objId},function(){ var aps=[]; $('#actionPlansContainer .iqms-action-plan-container').each(function(){ aps.push({table:'iqms_quality_objective_action_plans',objective_id:objId,action_text:$(this).find('.action-plan-text').val(),timeline:$(this).find('.action-plan-timeline').val(),responsibility:$(this).find('.action-plan-responsibility').val(),resources_needed:$(this).find('.action-plan-resources').val(),references:$(this).find('.action-plan-references').val(),action_status:$(this).find('.action-plan-status').val()});}); var i=0;(function next(){ if(i>=aps.length){ alert('Quality objective saved successfully!'); closeObjectiveModal(); return loadObjectives(); } $.post(ENDPOINT.SAVE,aps[i++],function(){ next(); }); })(); });},'json'); };

  // Preserve existing search/filter behavior
  $('#searchObjectives').on('input',function(){var term=this.value.toLowerCase(); $('#objectivesTable tbody tr').each(function(){var txt=$(this).text().toLowerCase(); $(this).toggle(txt.indexOf(term)!==-1);});});
  $('#statusFilter,#timelineFilter,#ownerFilter').on('change',function(){var s=$('#statusFilter').val(),t=$('#timelineFilter').val().toLowerCase(),o=$('#ownerFilter').val().toLowerCase(); $('#objectivesTable tbody tr').each(function(){var status=$(this).find('.iqms-status').text().toLowerCase().replace(' ','-'); var timeline=$(this).find('td').eq(4).text().toLowerCase(); var owner=$(this).find('td').eq(5).text().toLowerCase(); var show=true; if(s&&status.indexOf(s)===-1) show=false; if(t&&timeline.indexOf(t)===-1) show=false; if(o&&owner.indexOf(o.replace('-',' '))===-1) show=false; $(this).toggle(show);});});

  function esc(s){return String(s||'').replace(/[&<>"']/g,function(m){return {'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;','\'':'&#39;'}[m];});}

  // Action plan helper functions preserved from original UI below
});
</script>

<script>
$(function(){
  // Using jQuery data store to maintain sample objectives (placeholder; real data loads from backend)
  window.objectivesData = [
    {
        id: 'QO-001',
        qualityObjective: 'Build Productivity and Efficiency of MSMEs',
        target: '50% of trainings conducted as scheduled/planned per semester based on the approved Annual Work and Financial Plan',
        outputIndicator: 'No. of Trainings Conducted',
        processOwner: 'Training Coordinators',
        actionPlans: [
            {
                text: 'Conduct Training of Trainers to broaden the pool of skilled in-house trainers',
                timeline: 'Annually',
                responsibility: 'Industry Focal Person/NC Counselor / Training Coordinator',
                resources: 'Work and Financial Plan',
                references: 'Project Procurement Management Plan',
                status: 'In Progress'
            }
        ]
    },
    {
        id: 'QO-002',
        qualityObjective: 'Build Productivity and Efficiency of MSMEs',
        target: '50% of trainings conducted as scheduled/planned per semester based on the approved Annual Work and Financial Plan',
        outputIndicator: 'No. of Trainings Conducted',
        processOwner: 'Industry Focal Person',
        actionPlans: [
            {
                text: 'Develop database of competent pool of resource persons',
                timeline: 'Annually',
                responsibility: 'Industry Focal Person/NC Counselor',
                resources: 'Database of in-house speakers',
                references: '',
                status: 'Not Started'
            }
        ]
    }
];

window.openObjectiveModal = function(){ $('#modalTitleText').text('Add New Quality Objective'); $('#objectiveId').val(''); $('#objectiveForm')[0].reset(); resetActionPlans(); $('#objectiveModal').css('display','flex'); $('body').css('overflow','hidden'); };

window.closeObjectiveModal = function(){ $('#objectiveModal').hide(); $('body').css('overflow','auto'); };

window.editObjective = function(id){ var objective=(window.objectivesData||[]).find(function(o){return o.id===id;}); if(!objective) return; $('#modalTitleText').text('Edit Quality Objective'); $('#objectiveId').val(id); $('#qualityObjective').val(objective.qualityObjective||''); $('#target').val(objective.target||''); $('#outputIndicator').val(objective.outputIndicator||''); $('#processOwner').val(objective.processOwner||''); populateActionPlans(objective.actionPlans||[]); $('#objectiveModal').css('display','flex'); $('body').css('overflow','hidden'); };

window.viewObjective = function(id){ window.editObjective(id); $('#modalTitleText').text('View Quality Objective'); $('#objectiveForm input, #objectiveForm textarea, #objectiveForm select').prop('disabled', true); $('#objectiveForm .mt-4').hide(); $('.iqms-remove-action-plan').hide(); $('#addActionPlanBtn').hide(); };

window.deleteObjective = function(id){ if(confirm('Are you sure you want to delete this quality objective?')){ window.objectivesData=(window.objectivesData||[]).filter(function(o){return o.id!==id;}); alert('Quality objective deleted successfully!'); }}

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
  updateActionPlanTitles();
}

window.removeActionPlan = function(btn){ var $container=$(btn).closest('.iqms-action-plan-container'); var $all=$('.iqms-action-plan-container'); if($all.length>1){ $container.remove(); updateActionPlanTitles(); } else { alert('At least one action plan is required.'); } }

window.updateActionPlanTitles = function(){ $('.iqms-action-plan-container').each(function(i){ $(this).find('.iqms-action-plan-title').text('Action Plan #'+(i+1)); }); }

window.resetActionPlans = function(){ var $container=$('#actionPlansContainer'); var $plans=$container.find('.iqms-action-plan-container'); $plans.slice(1).remove(); var $first=$plans.first(); if($first.length){ $first.find('input, textarea, select').val('').prop('disabled', false); } updateActionPlanTitles(); }

window.populateActionPlans = function(actionPlans){ var $container=$('#actionPlansContainer'); $container.empty(); $.each(actionPlans||[], function(i,plan){ addActionPlan(); var $el=$container.children().eq(i); $el.find('.action-plan-text').val(plan.text||''); $el.find('.action-plan-timeline').val(plan.timeline||''); $el.find('.action-plan-responsibility').val(plan.responsibility||''); $el.find('.action-plan-resources').val(plan.resources||''); $el.find('.action-plan-references').val(plan.references||''); $el.find('.action-plan-status').val(plan.status||''); }); }

// Form submission with jQuery
$('#objectiveForm').off('submit').on('submit',function(e){ e.preventDefault(); var formData={ id:$('#objectiveId').val(), qualityObjective:$('#qualityObjective').val(), target:$('#target').val(), outputIndicator:$('#outputIndicator').val(), processOwner:$('#processOwner').val(), actionPlans:[] };
  $('.iqms-action-plan-container').each(function(){ formData.actionPlans.push({ text:$(this).find('.action-plan-text').val(), timeline:$(this).find('.action-plan-timeline').val(), responsibility:$(this).find('.action-plan-responsibility').val(), resources:$(this).find('.action-plan-resources').val(), references:$(this).find('.action-plan-references').val(), status:$(this).find('.action-plan-status').val() }); });
  if(formData.id){ var idx=(window.objectivesData||[]).findIndex(function(o){return o.id===formData.id;}); if(idx!==-1){ window.objectivesData[idx]=formData; } }
  else { formData.id='QO-'+String(((window.objectivesData||[]).length)+1).padStart(3,'0'); (window.objectivesData=window.objectivesData||[]).push(formData); }
  alert('Quality objective saved successfully!'); closeObjectiveModal(); $('#objectiveForm input, #objectiveForm textarea, #objectiveForm select').prop('disabled', false); $('#objectiveForm .mt-4').show(); $('.iqms-remove-action-plan').show(); $('#addActionPlanBtn').show();
});

// Search functionality
$('#searchObjectives').on('input',function(){ var term=$(this).val().toLowerCase(); $('#objectivesTable tbody tr').each(function(){ var txt=$(this).text().toLowerCase(); $(this).toggle(txt.indexOf(term)!==-1); }); });

// Filter functionality
$('#statusFilter, #timelineFilter, #ownerFilter').on('change',function(){ var s=$('#statusFilter').val(); var t=$('#timelineFilter').val().toLowerCase(); var o=$('#ownerFilter').val().toLowerCase(); $('#objectivesTable tbody tr').each(function(){ var status=$(this).find('.iqms-status').text().toLowerCase().replace(' ','-'); var timeline=$(this).find('td').eq(4).text().toLowerCase(); var owner=$(this).find('td').eq(5).text().toLowerCase(); var show=true; if(s && status.indexOf(s)===-1) show=false; if(t && timeline.indexOf(t)===-1) show=false; if(o && owner.indexOf(o.replace('-',' '))===-1) show=false; $(this).toggle(show); }); });

// Close modal when clicking outside
$(window).on('click',function(e){ var $modal=$('#objectiveModal'); if(e.target=== $modal.get(0)) closeObjectiveModal(); });
</script>

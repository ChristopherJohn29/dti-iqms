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
                    <span class="info-value">FM-PL-02</span>
                </div>
                <div class="info-row">
                    <span class="info-label">REVISION:</span>
                    <span class="info-value">3</span>
                </div>
                <div class="info-row">
                    <span class="info-label">DATE:</span>
                    <span class="info-value">01-Apr-25</span>
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


<input type="hidden" id="iqmsModuleCode" value="STAKEHOLDERS">
<input type="hidden" id="iqmsOfficeId" value="10">
<input type="hidden" id="iqmsProcessId" value="1">
<input type="hidden" id="iqmsFiscalYear" value="2025">



        <!-- Search and Add Button -->
        <div class="row mb-3">
            <div class="col-md-8">
                <input type="text" class="form-control" placeholder="Search stakeholders..." id="searchStakeholders">
            </div>
            <div class="col-md-4 text-right">
                <button class="btn btn-success waves-effect waves-light" onclick="openStakeholderModal()">
                    <i class="fe-plus"></i> Add New Stakeholder Entry
                </button>
            </div>
        </div>

        <!-- Stakeholders Section -->
        <div class="iqms-section-header">
            INTERESTED PARTY - NEEDS & EXPECTATIONS
        </div>

        <!-- Stakeholders Table -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table dt-responsive nowrap w-100" id="stakeholdersTable">
                <thead>
                    <tr>
                        <th style="width: 18%;">STAKEHOLDER</th>
                        <th style="width: 22%;">NEEDS & EXPECTATIONS</th>
                        <th style="width: 18%;">POTENTIAL RISKS</th>
                        <th style="width: 18%;">POTENTIAL OPPORTUNITIES</th>
                        <th style="width: 10%;">TO BE CONSIDERED</th>
                        <th style="width: 9%;">REFERENCE / LINKS</th>
                        <th style="width: 5%;">ACTIONS</th>
                    </tr>
                </thead>
                <tbody id="stakeholdersTbody">
                    <!-- Data populated dynamically via jQuery -->
                </tbody>
            </table>
                    </div>
                    <!-- end card body-->
                </div>
                <!-- end card -->
            </div>
            <!-- end col-->
        </div>
        <!-- end row -->
    </div>
    <!-- container -->
</div>
<!-- content -->

<!-- Modal for Add/Edit Stakeholder -->
<div id="stakeholderModal" class="iqms-modal">
    <div class="iqms-modal-content">
        <div class="iqms-modal-header">
            <h3 class="iqms-modal-title" id="modalTitle">Add New Stakeholder Entry</h3>
            <span class="iqms-close" onclick="closeStakeholderModal()">&times;</span>
        </div>

        <h5>DEPARTMENT OF TRADE AND INDUSTRY - PROCESS STAKEHOLDERS ANALYSIS</h5>

        <form class="iqms-form" id="stakeholderForm">
            <input type="hidden" id="stakeholderId">

            <h6>Basic Information</h6>
            <div class="mb-3">
                <label class="form-label" for="process">Process:</label>
                <input type="text" class="form-control" id="process" value="CONDUCT OF TRAINING" readonly>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label" for="processOwner">Process Owner:</label>
                        <input type="text" class="form-control" id="processOwner" value="Training Coordinators">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label" for="office">Office:</label>
                        <input type="text" class="form-control" id="office" value="DTI-10 Regional Office">
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label" for="fiscalYear">Fiscal Year:</label>
                <input type="text" class="form-control" id="fiscalYear" value="2025">
            </div>

            <h6>Stakeholder Details</h6>
            <div class="mb-3">
                <label class="form-label" for="interestedParty">Interested Party:</label>
                <select class="form-control" id="interestedParty">
                    <option value="">Select Interested Party</option>
                    <option value="business_persons">1. Business Persons</option>
                    <option value="development_partners">4. Development Partners</option>
                    <option value="dti_staff">10. DTI-10 Staff/Contractual Services</option>
                    <option value="other">Other (specify)</option>
                </select>
            </div>

            <div id="analysisSets">
                <div class="analysis-set">
                    <h6>Set #1</h6>
                    <h6>Needs & Expectations</h6>
                    <div class="mb-3">
                        <label class="form-label" for="needs1">What does the interested party need or expect from DTI related to the process?</label>
                        <textarea class="form-control" id="needs1" rows="3"></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="potentialRisk1">Potential Risk</label>
                        <p style="font-size: 0.9em; color: #666;">What potential NEGATIVE incident/event can happen if requirements are not met?</p>
                        <textarea class="form-control" id="potentialRisk1" rows="3"></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="potentialOpportunity1">Potential Opportunity</label>
                        <p style="font-size: 0.9em; color: #666;">What potential POSITIVE incident/event can happen if requirements are met or exceeded?</p>
                        <textarea class="form-control" id="potentialOpportunity1" rows="3"></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="toBeConsidered1">To Be Considered</label>
                        <select class="form-control" id="toBeConsidered1">
                            <option value="">Select Option</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">References</label>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="riskReference1" placeholder="Risk Reference # e.g., RR-1">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="opportunityReference1" placeholder="Opportunity Reference # e.g., OR-1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button type="button" class="btn btn-success mb-3" id="addAnalysisSet">
                <i class="fe-plus"></i> Add Analysis Set
            </button>

            <div class="mt-4">
                <button type="button" class="btn btn-primary" onclick="saveStakeholder()">Save Entry</button>
                <button type="button" class="btn btn-light" onclick="closeStakeholderModal()">Cancel</button>
            </div>
        </form>
    </div>
</div>

<style>
.analysis-set {
    background-color: #f8f9fa;
    padding: 20px;
    margin-bottom: 20px;
    border-radius: 8px;
    border: 1px solid #dee2e6;
    position: relative;
}

.analysis-set h6 {
    color: #495057;
    font-weight: 600;
    margin-bottom: 15px;
}

.analysis-set:not(:first-child) {
    border-top: 2px solid #007bff;
}

/* Fix all form labels in the modal */
.iqms-modal .form-label {
    background: none !important;
    color: #495057 !important;
    font-weight: 600 !important;
    padding: 0 !important;
    margin-bottom: 8px !important;
    display: block !important;
    border: none !important;
    font-size: 14px !important;
    width: 100% !important;
    white-space: normal !important;
    word-wrap: break-word !important;
    line-height: 1.4 !important;
    text-align: left !important;
    letter-spacing: normal !important;
}

/* Fix all h6 elements in the modal */
.iqms-modal h6 {
    color: #495057 !important;
    font-weight: 600 !important;
    margin-bottom: 15px !important;
    font-size: 16px !important;
    background: none !important;
    padding: 0 !important;
    border: none !important;
    display: block !important;
    width: 100% !important;
    text-align: left !important;
}

/* Fix all h5 elements in the modal */
.iqms-modal h5 {
    color: #495057 !important;
    font-weight: 600 !important;
    margin-bottom: 20px !important;
    font-size: 18px !important;
    background: none !important;
    padding: 0 !important;
    border: none !important;
    display: block !important;
    width: 100% !important;
    text-align: left !important;
}

.analysis-set .mb-3 {
    margin-bottom: 1rem !important;
}

/* Ensure no text centering in form */
.iqms-modal .iqms-form {
    text-align: left !important;
}

.iqms-modal .iqms-form p {
    text-align: left !important;
    margin-bottom: 8px !important;
}

.remove-set-btn {
    position: absolute;
    top: 10px;
    right: 15px;
    background: #dc3545;
    color: white;
    border: none;
    border-radius: 50%;
    width: 30px;
    height: 30px;
    font-size: 16px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
}

.remove-set-btn:hover {
    background: #c82333;
}
</style>

<script>
$(function(){
  var ENDPOINT = {
    ENSURE: '<?=base_url('admin/iqms-data/ensure')?>',
    LIST:   '<?=base_url('admin/iqms-data/list')?>',
    SAVE:   '<?=base_url('admin/iqms-data/save')?>',
    DEL:    '<?=base_url('admin/iqms-data/delete')?>',
    EXPORT: '<?=base_url('admin/iqms-data/export')?>'
  };

  var setCount = 1;
  var moduleCode = $('#iqmsModuleCode').val();
  var officeId   = parseInt($('#iqmsOfficeId').val(),10) || null;
  var processId  = $('#iqmsProcessId').val() ? parseInt($('#iqmsProcessId').val(),10) : null;
  var fiscalYear = $('#iqmsFiscalYear').val() || (new Date().getFullYear());
  var analysisId = null;

  var dynamicCategories = {};
  var dynamicCategoriesByCode = {};

  function loadCategories(){
    return $.getJSON('<?=base_url('admin/iqms-data/categories')?>', function(rows){
      dynamicCategories = {}; dynamicCategoriesByCode = {};
      // Rebuild dropdown options (all categories by id)
      var $sel = $('#interestedParty');
      var keepSelection = $sel.val();
      $sel.empty().append('<option value="">Select Interested Party</option>');

      rows.forEach(function(c){
        dynamicCategories[c.id] = c; dynamicCategoriesByCode[c.category_code] = c;
        var label = (c.category_number ? (c.category_number+'. ') : '') + c.category_name;
        $sel.append('<option value="'+c.id+'">'+label+'</option>');
      });

      $sel.append('<option value="other">Other (specify)</option>');
      if(keepSelection){ $sel.val(keepSelection); }
    });
  }

  function ensureAnalysis(){
    return $.post(ENDPOINT.ENSURE, {
      module_code: moduleCode,
      office_id: officeId,
      process_id: processId,
      fiscal_year: fiscalYear
    }, function(resp){ analysisId = resp.id; }, 'json');
  }

  function loadStakeholders(){
    return loadCategories().then(function(){
      return $.getJSON(ENDPOINT.LIST, { table:'iqms_stakeholder_entries', analysis_id: analysisId }, renderStakeholders);
    });
  }

  function renderStakeholders(rows){
    var $tbody = $('#stakeholdersTbody').empty();
    var grouped = {};
    $.each(rows, function(_, r){
      var cid = parseInt(r.category_id,10); (grouped[cid] = grouped[cid] || []).push(r);
    });
    $.each(Object.keys(grouped).sort(function(a,b){return a-b;}), function(_, cid){
      var items = grouped[cid];
      var catRow = dynamicCategories[cid];
      var label = catRow ? ((catRow.category_number? (catRow.category_number+'. '):'') + catRow.category_name) : ('Category '+cid);
      $.each(items, function(i, r){
        var $tr = $('<tr/>');
        if(i===0){ $tr.append($('<td/>',{rowspan: items.length, html:'<strong>'+label+'</strong>'})); }
        $tr.append($('<td/>').text(r.needs_expectations||'-'));
        $tr.append($('<td/>').text(r.potential_risks||'-'));
        $tr.append($('<td/>').text(r.potential_opportunities||'-'));
        $tr.append($('<td/>',{'class':'text-center'}).text(r.to_be_considered||'-'));
        var refs = $.grep([r.risk_reference, r.opportunity_reference], Boolean).join(', ') || '-';
        $tr.append($('<td/>',{'class':'text-center'}).text(refs));
        $tr.append($('<td/>',{'class':'text-center'}).html(
          '<div class="btn-group">'+
          '<button class="btn btn-warning btn-sm" title="Edit" onclick="openStakeholderModal('+cid+','+r.id+')"><i class="fe-edit"></i></button>'+
          '<button class="btn btn-danger btn-sm" title="Delete" onclick="deleteStakeholderEntry('+r.id+')"><i class="fe-trash"></i></button>'+
          '</div>'
        ));
        $tbody.append($tr);
      });
    });
  }

  window.openStakeholderModal = function(categoryId, rowId){
    $('#modalTitle').text(rowId ? 'Edit Stakeholder Entry' : 'Add New Stakeholder Entry');
    $('#stakeholderId').val(rowId || '');
    $('#stakeholderForm')[0].reset();
    resetAnalysisSets();

    if(rowId){
      // Load existing row and populate Set #1 for editing
      $.getJSON(ENDPOINT.LIST, { table:'iqms_stakeholder_entries', analysis_id: analysisId }, function(rows){
        var r = rows.find(function(x){ return x.id == rowId; });
        if(r){
          var cid = String(r.category_id);
          // Try to select by id; if category is unknown, fall back to 'other'
          if($('#interestedParty option[value="'+cid+'"]').length){
            $('#interestedParty').val(cid).trigger('change');
          } else {
            $('#interestedParty').val('other').trigger('change');
            var $parent = $('#interestedParty').parent();
            var $inp = $('#otherPartyInput');
            if(!$inp.length){ $inp = $('<input/>',{type:'text',id:'otherPartyInput','class':'form-control mt-2',placeholder:'Specify interested party'}).appendTo($parent); }
            $inp.val(r.custom_category_name||'');
          }
          $('#needs1').val(r.needs_expectations||'');
          $('#potentialRisk1').val(r.potential_risks||'');
          $('#potentialOpportunity1').val(r.potential_opportunities||'');
          $('#toBeConsidered1').val(r.to_be_considered||'');
          $('#riskReference1').val(r.risk_reference||'');
          $('#opportunityReference1').val(r.opportunity_reference||'');
        }
        $('#stakeholderModal').show();
      });
    } else {
      // Preselect interested party when adding via category button
      if(categoryId){ $('#interestedParty').val(String(categoryId)); }
      $('#stakeholderModal').show();
    }
  };

  window.closeStakeholderModal = function(){
    $('#stakeholderModal').hide();
    resetAnalysisSets();
  };

  function resetAnalysisSets(){
    var $analysisSets = $('#analysisSets');
    while($analysisSets.children().length > 1){ $analysisSets.children().last().remove(); }
    setCount = 1;
    $('#needs1').val('');
    $('#potentialRisk1').val('');
    $('#potentialOpportunity1').val('');
    $('#toBeConsidered1').val('');
    $('#riskReference1').val('');
    $('#opportunityReference1').val('');
  }

  window.deleteStakeholderEntry = function(id){
    if(!confirm('Delete this entry?')) return;
    $.post(ENDPOINT.DEL, { table:'iqms_stakeholder_entries', id:id }, function(){ loadStakeholders(); });
  };

  window.deleteStakeholder = function(categoryId){
    var cid = parseInt(categoryId,10) || 0;
    if(!cid){ alert('Unknown category'); return; }
    if(!confirm('Delete all entries for this stakeholder category?')) return;
    $.getJSON(ENDPOINT.LIST, { table:'iqms_stakeholder_entries', analysis_id: analysisId }, function(rows){
      var ids = $.map(rows, function(r){ return (parseInt(r.category_id,10)===cid) ? r.id : null; });
      var i=0; (function next(){ if(i>=ids.length) return loadStakeholders(); $.post(ENDPOINT.DEL, {table:'iqms_stakeholder_entries', id:ids[i++]}, next); })();
    });
  };

  window.saveStakeholder = function(){
    var id = $('#stakeholderId').val();
    var party = $('#interestedParty').val();
    if(!party){ alert('Please select an interested party'); return; }
    if(party==='other' && !$.trim($('#otherPartyInput').val()||'')){ alert('Please specify the Interested Party'); return; }
    if(!$('#needs1').val()){ alert('Please enter needs and expectations for Set #1'); return; }
    var cid = (party==='other') ? null : parseInt(party,10) || null;
    var otherName = $.trim($('#otherPartyInput').val()||'');

    // If editing, update only the current row using Set #1 fields
    if(id){
      function doUpdate(resolvedCid){
        var updateData = {
          table:'iqms_stakeholder_entries',
          id: id,
          analysis_id: analysisId,
          category_id: resolvedCid,
          custom_category_name: (party==='other') ? otherName : '',
          needs_expectations: ($('#needs1').val()||'').trim(),
          potential_risks: ($('#potentialRisk1').val()||'').trim(),
          potential_opportunities: ($('#potentialOpportunity1').val()||'').trim(),
          to_be_considered: $('#toBeConsidered1').val()||'',
          risk_reference: ($('#riskReference1').val()||'').trim(),
          opportunity_reference: ($('#opportunityReference1').val()||'').trim(),
          analysis_set_number: 1
        };
        $.post(ENDPOINT.SAVE, updateData, function(){ alert('Stakeholder entry updated successfully!'); closeStakeholderModal(); loadStakeholders(); });
      }
      if(party==='other'){
        $.post('<?=base_url('admin/iqms-data/ensure-category')?>', { category_code: otherName.toLowerCase().replace(/\s+/g,'_'), category_name: otherName }, function(cat){
          var resolvedCid = cat && cat.id ? cat.id : null;
          if(!resolvedCid){ alert('Unable to resolve category for Other'); return; }
          doUpdate(resolvedCid);
        }, 'json');
      } else {
        var resolvedCid = parseInt(party,10) || null;
        if(!resolvedCid){ alert('Invalid category'); return; }
        doUpdate(resolvedCid);
      }
      return;
    }

    // Adding: support multiple analysis sets
    var $sets = $('#analysisSets .analysis-set');

    function ensureOtherCategoryIfNeeded(cb){
      if(party !== 'other') return cb(null);
      $.post('<?=base_url('admin/iqms-data/ensure-category')?>', { category_code: otherName.toLowerCase().replace(/\s+/g,'_'), category_name: otherName }, function(cat){
        cb(cat && cat.id ? cat.id : null);
      }, 'json');
    }

    function saveOne(n, done){
      function doSave(resolvedCid){
        var data = {
          table:'iqms_stakeholder_entries',
          analysis_id: analysisId,
          category_id: resolvedCid || cid,
          custom_category_name: (party==='other') ? otherName : '',
          needs_expectations: ($('#needs'+n).val()||'').trim(),
          potential_risks: ($('#potentialRisk'+n).val()||'').trim(),
          potential_opportunities: ($('#potentialOpportunity'+n).val()||'').trim(),
          to_be_considered: $('#toBeConsidered'+n).val()||'',
          risk_reference: ($('#riskReference'+n).val()||'').trim(),
          opportunity_reference: ($('#opportunityReference'+n).val()||'').trim(),
          analysis_set_number: n
        };
        $.post(ENDPOINT.SAVE, data, function(){ done(); });
      }
      ensureOtherCategoryIfNeeded(doSave);
    }

    var i=1, total=$sets.length; (function next(){ if(i>total){ alert('Stakeholder entry saved successfully!'); closeStakeholderModal(); return loadStakeholders(); } saveOne(i++, next); })();
  };

  // Add new analysis set
  $('#addAnalysisSet').on('click', function(){
    setCount++;
    var html = ''+
    '<div class="analysis-set">'+
    '  <button type="button" class="remove-set-btn" onclick="removeAnalysisSet(this)" title="Remove this set">×</button>'+
    '  <h6>Set #'+setCount+'</h6>'+
    '  <h6>Needs & Expectations</h6>'+
    '  <div class="mb-3">'+
    '    <label class="form-label" for="needs'+setCount+'">What does the interested party need or expect from DTI related to the process?</label>'+
    '    <textarea class="form-control" id="needs'+setCount+'" rows="3"></textarea>'+
    '  </div>'+
    '  <div class="mb-3">'+
    '    <label class="form-label" for="potentialRisk'+setCount+'">Potential Risk</label>'+
    '    <p style="font-size: 0.9em; color: #666;">What potential NEGATIVE incident/event can happen if requirements are not met?</p>'+
    '    <textarea class="form-control" id="potentialRisk'+setCount+'" rows="3"></textarea>'+
    '  </div>'+
    '  <div class="mb-3">'+
    '    <label class="form-label" for="potentialOpportunity'+setCount+'">Potential Opportunity</label>'+
    '    <p style="font-size: 0.9em; color: #666;">What potential POSITIVE incident/event can happen if requirements are met or exceeded?</p>'+
    '    <textarea class="form-control" id="potentialOpportunity'+setCount+'" rows="3"></textarea>'+
    '  </div>'+
    '  <div class="mb-3">'+
    '    <label class="form-label" for="toBeConsidered'+setCount+'">To Be Considered</label>'+
    '    <select class="form-control" id="toBeConsidered'+setCount+'">'+
    '      <option value="">Select Option</option>'+
    '      <option value="Yes">Yes</option>'+
    '      <option value="No">No</option>'+
    '    </select>'+
    '  </div>'+
    '  <div class="mb-3">'+
    '    <label class="form-label">References</label>'+
    '    <div class="row">'+
    '      <div class="col-md-6">'+
    '        <input type="text" class="form-control" id="riskReference'+setCount+'" placeholder="Risk Reference # e.g., RR-1">'+
    '      </div>'+
    '      <div class="col-md-6">'+
    '        <input type="text" class="form-control" id="opportunityReference'+setCount+'" placeholder="Opportunity Reference # e.g., OR-1">'+
    '      </div>'+
    '    </div>'+
    '  </div>'+
    '</div>';
    $('#analysisSets').append(html);
  });

  // Keep your existing "Other" handling logic
  $('#interestedParty').on('change', function(){
    var $existing = $('#otherPartyInput'); if($existing.length){ $existing.remove(); }
    if(this.value==='other'){
      $('<input/>',{type:'text',id:'otherPartyInput','class':'form-control mt-2',placeholder:'Specify interested party'}).appendTo($(this).parent());
    }
  });

  window.removeAnalysisSet = function(button){
    if(!confirm('Are you sure you want to remove this analysis set?')) return;
    var $set = $(button).closest('.analysis-set');
    $set.remove();
    var $sets = $('.analysis-set');
    $sets.each(function(idx){
      var n = idx+1; var $s = $(this);
      var $head = $s.find('h6').first(); if($head.text().indexOf('Set #')===0){ $head.text('Set #'+n); }
      var baseText = ['needs','potentialRisk','potentialOpportunity'];
      $s.find('textarea').each(function(i){ if(baseText[i]) $(this).attr('id', baseText[i]+n); });
      $s.find('select').first().attr('id','toBeConsidered'+n);
      var baseInputs = ['riskReference','opportunityReference'];
      $s.find('input[type="text"]').each(function(i){ if(baseInputs[i]) $(this).attr('id', baseInputs[i]+n); });
    });
    setCount = $sets.length;
  };

  // Search filter preserved
  $('#searchStakeholders').on('input', function(){
    var term = this.value.toLowerCase();
    $('#stakeholdersTable tbody tr').each(function(){
      var txt = $(this).text().toLowerCase();
      $(this).toggle(txt.indexOf(term) >= 0);
    });
  });

  // Click outside to close preserved
  $(window).on('click', function(e){ if(e.target === document.getElementById('stakeholderModal')) closeStakeholderModal(); });

  // Initialize
  ensureAnalysis().then(loadStakeholders);
});
</script>

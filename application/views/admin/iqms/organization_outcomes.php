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
                    <span class="info-value">FM-OO-01</span>
                </div>
                <div class="info-row">
                    <span class="info-label">REVISION:</span>
                    <span class="info-value">1</span>
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
                    <span class="info-label">FISCAL YEAR:</span>
                    <span class="info-value">2025</span>
                </div>
                <div class="info-row">
                    <span class="info-label">STATUS:</span>
                    <span class="info-value status-active">ACTIVE</span>
                </div>
            </div>
        </div>


<input type="hidden" id="iqmsModuleCode" value="ORGANIZATION_OUTCOMES">
<input type="hidden" id="iqmsOfficeId" value="10">
<input type="hidden" id="iqmsProcessId" value="1">
<input type="hidden" id="iqmsFiscalYear" value="2025">



        <!-- Instructions -->
        <div class="instructions">
            <h4>Instructions:</h4>
            <ol>
                <li>Process Owners shall determine the Outcomes related to the process. Sheet No. 4 of the Strategic Plan MS Excel Template will be used.</li>
                <li>These outcomes are organizational/provincial objectives of specific office that are indirect results of the Core Processes.</li>
                <li>While these are reviewed and monitored semi-annually upon submission to DBM, if these targets are not achieved, the Process Owner will review the process to determine what improvement needs to be made.</li>
                <li>Baseline means accomplishment of the previous year; Target – current year.</li>
            </ol>
        </div>

        <!-- Add New Outcome Button and Search -->
        <div class="row mb-3">
            <div class="col-md-6">
                <input type="text" class="iqms-search-bar" placeholder="Search organization outcomes..." id="searchOutcomes">
            </div>
            <div class="col-md-3">
                <select class="iqms-form-control" id="filter-year">
                    <option value="2025" selected>2025</option>
                    <option value="2024">2024</option>
                    <option value="2023">2023</option>
                </select>
            </div>
            <div class="col-md-3 text-right">
                <button class="iqms-btn iqms-btn-success" onclick="openOutcomeModal()">
                    <i class="fe-plus"></i> Add New Outcome
                </button>
                <button class="iqms-btn iqms-btn-secondary" onclick="openReportsModal()">
                    <i class="fe-file-text"></i> Reports
                </button>
            </div>
        </div>

        <!-- Organization Outcomes Table -->
        <div class="table-responsive">
            <table class="iqms-table" id="outcomesTable">
                <thead>
                    <tr>
                        <th style="width: 10%;">OO Code</th>
                        <th style="width: 30%;">Organizational Outcome</th>
                        <th style="width: 25%;">Measure</th>
                        <th style="width: 10%;">Baseline</th>
                        <th style="width: 10%;">Target</th>
                        <th style="width: 8%;">Status</th>
                        <th style="width: 7%;">Actions</th>
                    </tr>
                </thead>
                    <tbody id="outcomesTbody">
                        <!-- Data populated dynamically -->
                    </tbody>
            </table>
        </div>
    </div>
    <!-- container -->
</div>
<!-- content -->

<!-- Modal for Add/Edit Outcome -->
<div id="outcomeModal" class="iqms-modal">
    <div class="iqms-modal-content" style="max-width: 800px;">
        <div class="iqms-modal-header">
            <h3 class="iqms-modal-title" id="outcomeModalTitle">Add New Organizational Outcome</h3>
            <span class="iqms-close" onclick="closeOutcomeModal()">&times;</span>
        </div>

        <form class="iqms-form" id="outcomeForm">
            <input type="hidden" id="outcomeId">

            <div class="iqms-form-row">
                <div class="iqms-form-group">
                    <label class="iqms-form-label" for="ooCode">OO Code:</label>
                    <input type="text" class="iqms-form-control" id="ooCode" required>
                </div>
                <div class="iqms-form-group">
                    <label class="iqms-form-label" for="fiscalYear">Fiscal Year:</label>
                    <select class="iqms-form-control" id="fiscalYear" required>
                        <option value="">Select Year</option>
                        <option value="2025" selected>2025</option>
                        <option value="2026">2026</option>
                        <option value="2027">2027</option>
                    </select>
                </div>
            </div>

            <div class="iqms-form-group">
                <label class="iqms-form-label" for="outcomeTitle">Organizational Outcome:</label>
                <input type="text" class="iqms-form-control" id="outcomeTitle" required>
            </div>

            <div class="iqms-form-group">
                <label class="iqms-form-label" for="measure">Measure:</label>
                <input type="text" class="iqms-form-control" id="measure" required>
            </div>

            <div class="iqms-form-row">
                <div class="iqms-form-group">
                    <label class="iqms-form-label" for="baseline">Baseline (Previous Year):</label>
                    <input type="text" class="iqms-form-control" id="baseline" required>
                </div>
                <div class="iqms-form-group">
                    <label class="iqms-form-label" for="target">Target (Current Year):</label>
                    <input type="text" class="iqms-form-control" id="target" required>
                </div>
            </div>

            <div class="iqms-form-group">
                <label class="iqms-form-label" for="notes">Notes/Instructions:</label>
                <textarea class="iqms-form-control" id="notes" rows="3" placeholder="Enter any additional notes or instructions..."></textarea>
            </div>

            <div class="mt-4">
                <button type="button" class="iqms-btn iqms-btn-primary" onclick="saveOutcome()">Save Outcome</button>
                <button type="button" class="iqms-btn iqms-btn-secondary" onclick="closeOutcomeModal()">Cancel</button>
            </div>
        </form>
    </div>
</div>

<!-- Modal for Reports -->
<div id="reportsModal" class="iqms-modal">
    <div class="iqms-modal-content" style="max-width: 700px;">
        <div class="iqms-modal-header">
            <h3 class="iqms-modal-title">Organizational Outcomes Reports</h3>
            <span class="iqms-close" onclick="closeReportsModal()">&times;</span>
        </div>

        <div class="iqms-form">
            <div class="iqms-form-row">
                <div class="iqms-form-group">
                    <label class="iqms-form-label" for="reportType">Report Type:</label>
                    <select class="iqms-form-control" id="reportType">
                        <option value="annual">Annual Progress Report</option>
                        <option value="semi-annual">Semi-Annual Review</option>
                        <option value="achievement">Target Achievement</option>
                    </select>
                </div>
                <div class="iqms-form-group">
                    <label class="iqms-form-label" for="reportYear">Fiscal Year:</label>
                    <select class="iqms-form-control" id="reportYear">
                        <option value="2025">2025</option>
                        <option value="2024">2024</option>
                        <option value="2023">2023</option>
                    </select>
                </div>
            </div>

            <div class="mt-4">
                <button class="iqms-btn iqms-btn-primary" onclick="generateReport()">Generate Report</button>
                <button class="iqms-btn iqms-btn-secondary" onclick="exportToExcel()">Export to Excel</button>
            </div>

            <div id="reportResults" class="mt-4">
                <p>Select report parameters and click "Generate Report" to view results.</p>
            </div>
        </div>
    </div>
</div>

<script>
$(function(){
  var ENDPOINT = {
    ENSURE: '<?=base_url('admin/iqms-data/ensure')?>',
    LIST:   '<?=base_url('admin/iqms-data/list')?>',
    SAVE:   '<?=base_url('admin/iqms-data/save')?>',
    DEL:    '<?=base_url('admin/iqms-data/delete')?>'
  };
  var moduleCode='ORGANIZATION_OUTCOMES', officeId=10, processId=1, fiscalYear='2025';
  var analysisId=null;

  function ensureAnalysis(){ return $.post(ENDPOINT.ENSURE,{module_code:moduleCode,office_id:officeId,process_id:processId,fiscal_year:fiscalYear}, function(r){analysisId=r.id;}, 'json'); }

  function loadOutcomes(){ return $.getJSON(ENDPOINT.LIST,{table:'iqms_organization_outcomes',analysis_id:analysisId}, renderOutcomes); }

  function renderOutcomes(rows){
    var $tbody=$('#outcomesTbody').empty();
    $.each(rows,function(_,o){ var badge = o.outcome_status==='Active'? 'bg-success': (o.outcome_status==='Completed'? 'bg-primary': 'bg-secondary');
      var $tr=$('<tr/>').html(
        '<td>'+escape(o.outcome_code||'')+'</td>'+
        '<td>'+escape(o.organizational_outcome||'')+'</td>'+
        '<td>'+escape(o.measure||'')+'</td>'+
        '<td>'+escape(o.baseline||'')+'</td>'+
        '<td>'+escape(o.target||'')+'</td>'+
        '<td><span class="badge '+badge+'">'+escape(o.outcome_status||'Active')+'</span></td>'+
        '<td class="text-center">'+
          '<div class="iqms-action-btns">'+
          '  <button class="iqms-btn iqms-btn-warning iqms-btn-sm" onclick="editOutcome('+o.id+')"><i class="fe-edit"></i></button>'+
          '  <button class="iqms-btn iqms-btn-danger iqms-btn-sm" onclick="deleteOutcome('+o.id+')"><i class="fe-trash"></i></button>'+
          '</div>'+
        '</td>'
      ); $tbody.append($tr); });
  }

  window.openOutcomeModal = function(){ $('#outcomeModalTitle').text('Add New Organizational Outcome'); $('#outcomeId').val(''); $('#outcomeForm')[0].reset(); $('#outcomeModal').show(); };
  window.closeOutcomeModal = function(){ $('#outcomeModal').hide(); };
  window.openReportsModal = function(){ $('#reportsModal').show(); };
  window.closeReportsModal = function(){ $('#reportsModal').hide(); };

  window.editOutcome = function(id){ $('#outcomeModalTitle').text('Edit Organizational Outcome'); $('#outcomeId').val(id);
    $.getJSON(ENDPOINT.LIST,{table:'iqms_organization_outcomes',analysis_id:analysisId}, function(rows){ var o=rows.find(function(x){return x.id==id;}); if(!o) return; $('#ooCode').val(o.outcome_code||''); $('#fiscalYear').val(fiscalYear); $('#outcomeTitle').val(o.organizational_outcome||''); $('#measure').val(o.measure||''); $('#baseline').val(o.baseline||''); $('#target').val(o.target||''); $('#notes').val(o.remarks||''); $('#outcomeModal').show(); }); };

  window.deleteOutcome = function(id){ if(!confirm('Delete this outcome?')) return; $.post(ENDPOINT.DEL,{table:'iqms_organization_outcomes',id:id}, function(){ loadOutcomes(); }); };

  window.saveOutcome = function(){ var id=$('#outcomeId').val()||null; var data={ table:'iqms_organization_outcomes', id:id, analysis_id:analysisId,
    outcome_code: $('#ooCode').val(), organizational_outcome: $('#outcomeTitle').val(), measure: $('#measure').val(), baseline: $('#baseline').val(), target: $('#target').val(), remarks: $('#notes').val(), outcome_status: 'Active' };
    if(!data.outcome_code || !data.organizational_outcome || !data.measure){ alert('Please fill in all required fields.'); return; }
    $.post(ENDPOINT.SAVE, data, function(){ alert('Organizational Outcome saved successfully!'); closeOutcomeModal(); loadOutcomes(); }); };

  function escape(s){ return String(s||'').replace(/[&<>"']/g, function(m){ return ({'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;','\'':'&#39;'}[m]); }); }

  ensureAnalysis().then(loadOutcomes);
});
</script>

function generateReport() {
    const reportType = document.getElementById('reportType').value;
    const reportYear = document.getElementById('reportYear').value;

    // In a real application, this would generate the actual report
    document.getElementById('reportResults').innerHTML = `
        <div class="alert alert-info">
            <h5>Report Generated</h5>
            <p><strong>Type:</strong> ${reportType}</p>
            <p><strong>Year:</strong> ${reportYear}</p>
            <p>Report generation functionality would be implemented here.</p>
        </div>
    `;
}

function exportToExcel() {
    alert('Excel export functionality would be implemented here.');
}

// Search functionality
document.getElementById('searchOutcomes').addEventListener('input', function() {
    const searchTerm = this.value.toLowerCase();
    const table = document.getElementById('outcomesTable');
    const rows = table.getElementsByTagName('tbody')[0].getElementsByTagName('tr');

    for (let i = 0; i < rows.length; i++) {
        const row = rows[i];
        const text = row.textContent.toLowerCase();
        if (text.includes(searchTerm)) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    }
});

// Filter functionality
const filterYear = document.getElementById('filter-year');
if (filterYear) {
    filterYear.addEventListener('change', function() {
        // In a real application, this would filter the table data
        console.log('Filtering by year:', this.value);
        alert('Filter by year: ' + this.value + ' - This would filter the table data in a real application.');
    });
}

// Close modal when clicking outside
window.onclick = function(event) {
    const outcomeModal = document.getElementById('outcomeModal');
    const reportsModal = document.getElementById('reportsModal');

    if (event.target == outcomeModal) {
        closeOutcomeModal();
    }
    if (event.target == reportsModal) {
        closeReportsModal();
    }
}
</script>

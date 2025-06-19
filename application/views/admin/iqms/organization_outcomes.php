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
                    <tbody>
                        <tr>
                            <td>OO1</td>
                            <td>EXPORTS AND INVESTMENT DEVELOPED</td>
                            <td>Amount of Exports</td>
                            <td>c/o Head Office</td>
                            <td>c/o Head Office</td>
                            <td><span class="badge bg-success">Active</span></td>
                            <td class="text-center">
                                <div class="iqms-action-btns">
                                    <button class="iqms-btn iqms-btn-warning iqms-btn-sm" onclick="editOutcome(1)">
                                        <i class="fe-edit"></i>
                                    </button>
                                    <button class="iqms-btn iqms-btn-secondary iqms-btn-sm" onclick="viewHistory(1)">
                                        <i class="fe-clock"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>OO1</td>
                            <td>EXPORTS AND INVESTMENT DEVELOPED</td>
                            <td>Amount of Approved Investments</td>
                            <td>c/o Head Office</td>
                            <td>c/o Head Office</td>
                            <td><span class="badge bg-success">Active</span></td>
                            <td class="text-center">
                                <div class="iqms-action-btns">
                                    <button class="iqms-btn iqms-btn-warning iqms-btn-sm" onclick="editOutcome(2)">
                                        <i class="fe-edit"></i>
                                    </button>
                                    <button class="iqms-btn iqms-btn-secondary iqms-btn-sm" onclick="viewHistory(2)">
                                        <i class="fe-clock"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>OO2</td>
                            <td>INDUSTRIES DEVELOPED</td>
                            <td>Employment Generated from the Industry Increased Annually</td>
                            <td>c/o Head Office</td>
                            <td>c/o Head Office</td>
                            <td><span class="badge bg-success">Active</span></td>
                            <td class="text-center">
                                <div class="iqms-action-btns">
                                    <button class="iqms-btn iqms-btn-warning iqms-btn-sm" onclick="editOutcome(3)">
                                        <i class="fe-edit"></i>
                                    </button>
                                    <button class="iqms-btn iqms-btn-secondary iqms-btn-sm" onclick="viewHistory(3)">
                                        <i class="fe-clock"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>OO3</td>
                            <td>MSME ASSISTED AND DEVELOPED</td>
                            <td>Percentage of MSMEs assisted to the total number of MSMEs in manufacturing, retail trade, construction and services sectors</td>
                            <td>79%</td>
                            <td>70%</td>
                            <td><span class="badge bg-success">Active</span></td>
                            <td class="text-center">
                                <div class="iqms-action-btns">
                                    <button class="iqms-btn iqms-btn-warning iqms-btn-sm" onclick="editOutcome(4)">
                                        <i class="fe-edit"></i>
                                    </button>
                                    <button class="iqms-btn iqms-btn-secondary iqms-btn-sm" onclick="viewHistory(4)">
                                        <i class="fe-clock"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>OO4</td>
                            <td>CONSUMER WELFARE ENHANCED</td>
                            <td>Consumer Resolution Rate</td>
                            <td>100%</td>
                            <td>99%</td>
                            <td><span class="badge bg-success">Active</span></td>
                            <td class="text-center">
                                <div class="iqms-action-btns">
                                    <button class="iqms-btn iqms-btn-warning iqms-btn-sm" onclick="editOutcome(5)">
                                        <i class="fe-edit"></i>
                                    </button>
                                    <button class="iqms-btn iqms-btn-secondary iqms-btn-sm" onclick="viewHistory(5)">
                                        <i class="fe-clock"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>OO4</td>
                            <td>CONSUMER WELFARE ENHANCED</td>
                            <td>Level of Consumer Awareness Increased</td>
                            <td>88%</td>
                            <td>80%</td>
                            <td><span class="badge bg-success">Active</span></td>
                            <td class="text-center">
                                <div class="iqms-action-btns">
                                    <button class="iqms-btn iqms-btn-warning iqms-btn-sm" onclick="editOutcome(6)">
                                        <i class="fe-edit"></i>
                                    </button>
                                    <button class="iqms-btn iqms-btn-secondary iqms-btn-sm" onclick="viewHistory(6)">
                                        <i class="fe-clock"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
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
// Modal Functions
function openOutcomeModal() {
    document.getElementById('outcomeModalTitle').textContent = 'Add New Organizational Outcome';
    document.getElementById('outcomeId').value = '';
    document.getElementById('outcomeForm').reset();
    document.getElementById('outcomeModal').style.display = 'block';
}

function closeOutcomeModal() {
    document.getElementById('outcomeModal').style.display = 'none';
}

function openReportsModal() {
    document.getElementById('reportsModal').style.display = 'block';
}

function closeReportsModal() {
    document.getElementById('reportsModal').style.display = 'none';
}

function editOutcome(id) {
    // Get the row data
    const row = event.target.closest('tr');
    const cells = row.querySelectorAll('td');

    // Get data from the row
    const ooCode = cells[0].textContent;
    const outcomeTitle = cells[1].textContent;
    const measure = cells[2].textContent;
    const baseline = cells[3].textContent;
    const target = cells[4].textContent;

    // Fill the form with this data
    document.getElementById('ooCode').value = ooCode;
    document.getElementById('outcomeTitle').value = outcomeTitle;
    document.getElementById('measure').value = measure;
    document.getElementById('baseline').value = baseline;
    document.getElementById('target').value = target;

    // Set modal title and ID for editing
    document.getElementById('outcomeModalTitle').textContent = 'Edit Organizational Outcome';
    document.getElementById('outcomeId').value = id;

    // Open the modal
    document.getElementById('outcomeModal').style.display = 'block';
}

function saveOutcome() {
    // Get form values
    const ooCode = document.getElementById('ooCode').value;
    const fiscalYear = document.getElementById('fiscalYear').value;
    const outcomeTitle = document.getElementById('outcomeTitle').value;
    const measure = document.getElementById('measure').value;
    const baseline = document.getElementById('baseline').value;
    const target = document.getElementById('target').value;
    const notes = document.getElementById('notes').value;
    const outcomeId = document.getElementById('outcomeId').value;

    // Validate required fields
    if (!ooCode || !fiscalYear || !outcomeTitle || !measure || !baseline || !target) {
        alert('Please fill in all required fields.');
        return;
    }

    // Here you would typically send this data to a server
    console.log('Form submitted:', {
        outcomeId,
        ooCode,
        fiscalYear,
        outcomeTitle,
        measure,
        baseline,
        target,
        notes
    });

    // Show success message
    alert('Organizational Outcome saved successfully!');

    // Close modal and reset form
    closeOutcomeModal();
    document.getElementById('outcomeForm').reset();
}

function viewHistory(id) {
    alert('History functionality would be implemented here for outcome ID: ' + id);
}

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

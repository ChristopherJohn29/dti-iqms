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
                    <span class="info-value">FIA-PL-06</span>
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

        <!-- Controls -->
        <div class="row mb-3">
            <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Search objectives or targets..." id="searchInput">
            </div>
            <div class="col-md-6 text-right">
                <button class="btn btn-success waves-effect waves-light" onclick="openObjectiveModal()">
                    <i class="fe-plus"></i> Add New
                </button>
                <button class="btn btn-info waves-effect waves-light" onclick="saveData()">
                    <i class="fe-save"></i> Save Data
                </button>
                <button class="btn btn-secondary waves-effect waves-light" onclick="exportToExcel()">
                    <i class="fe-download"></i> Export
                </button>
                <button class="btn btn-danger waves-effect waves-light" onclick="resetData()">
                    <i class="fe-refresh-cw"></i> Reset
                </button>
            </div>
        </div>

        <!-- Process Performance Monitoring Table -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="monitoringTable">
                                <thead>
                                    <tr>
                                        <th rowspan="3">No</th>
                                        <th rowspan="3">Quality Objective Statement</th>
                                        <th rowspan="3">Quality Target = Quality Indicator/Output Indicator</th>

                                        <!-- Annual Monitoring Header -->
                                        <th colspan="7" style="background-color: #2c3e50; color: white; text-align: center; font-weight: bold;">Annual Monitoring</th>

                                        <!-- Monthly Monitoring Header -->
                                        <th colspan="12" style="background-color: #2c3e50; color: white; text-align: center; font-weight: bold;">Monthly Monitoring</th>

                                        <th rowspan="3">Actions</th>
                                    </tr>
                                    <tr>
                                        <!-- Annual Monitoring Sub-columns -->
                                        <th>Annual</th>
                                        <th>Q1</th>
                                        <th>Q2</th>
                                        <th>1st Sem</th>
                                        <th>Q3</th>
                                        <th>Q4</th>
                                        <th>2nd Sem</th>

                                        <!-- Monthly Monitoring Sub-columns -->
                                        <th>Jan</th>
                                        <th>Feb</th>
                                        <th>Mar</th>
                                        <th>Apr</th>
                                        <th>May</th>
                                        <th>Jun</th>
                                        <th>Jul</th>
                                        <th>Aug</th>
                                        <th>Sep</th>
                                        <th>Oct</th>
                                        <th>Nov</th>
                                        <th>Dec</th>
                                    </tr>
                                </thead>
                                <tbody id="tableBody">
                                    <!-- Table rows will be dynamically added here -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- container -->
</div>
<!-- content -->

<!-- Modal for Add/Edit Objective -->
<div id="objectiveModal" class="iqms-modal">
    <div class="iqms-modal-content" style="max-width: 1000px;">
        <div class="iqms-modal-header">
            <h3 class="iqms-modal-title" id="objectiveModalTitle">Add New Objective</h3>
            <span class="iqms-close" onclick="closeObjectiveModal()">&times;</span>
        </div>

        <form class="iqms-form" id="objectiveForm">
            <input type="hidden" id="objectiveId">

            <div class="iqms-form-group">
                <label class="iqms-form-label" for="objectiveNumber">No.:</label>
                <input type="text" class="iqms-form-control" id="objectiveNumber" placeholder="Enter objective number" required>
            </div>

            <div class="iqms-form-group">
                <label class="iqms-form-label" for="objectiveStatement">Objective Statement:</label>
                <textarea class="iqms-form-control" id="objectiveStatement" rows="2" placeholder="Enter objective statement..." required></textarea>
            </div>

            <div class="iqms-form-group">
                <label class="iqms-form-label" for="qualityTarget">Quality Target:</label>
                <textarea class="iqms-form-control" id="qualityTarget" rows="2" placeholder="Enter quality target..." required></textarea>
            </div>

            <!-- Annual Targets Section -->
            <div class="iqms-form-section">
                <h4>Annual Targets</h4>
                <div class="iqms-form-row">
                    <div class="iqms-form-group">
                        <label class="iqms-form-label" for="annualTarget">Annual:</label>
                        <input type="number" class="iqms-form-control" id="annualTarget" value="0" min="0">
                    </div>
                    <div class="iqms-form-group">
                        <label class="iqms-form-label" for="q1Target">Q1:</label>
                        <input type="number" class="iqms-form-control" id="q1Target" value="0" min="0">
                    </div>
                    <div class="iqms-form-group">
                        <label class="iqms-form-label" for="q2Target">Q2:</label>
                        <input type="number" class="iqms-form-control" id="q2Target" value="0" min="0">
                    </div>
                    <div class="iqms-form-group">
                        <label class="iqms-form-label" for="sem1Target">1st Sem:</label>
                        <input type="number" class="iqms-form-control" id="sem1Target" value="0" min="0">
                    </div>
                </div>
                <div class="iqms-form-row">
                    <div class="iqms-form-group">
                        <label class="iqms-form-label" for="q3Target">Q3:</label>
                        <input type="number" class="iqms-form-control" id="q3Target" value="0" min="0">
                    </div>
                    <div class="iqms-form-group">
                        <label class="iqms-form-label" for="q4Target">Q4:</label>
                        <input type="number" class="iqms-form-control" id="q4Target" value="0" min="0">
                    </div>
                    <div class="iqms-form-group">
                        <label class="iqms-form-label" for="sem2Target">2nd Sem:</label>
                        <input type="number" class="iqms-form-control" id="sem2Target" value="0" min="0">
                    </div>
                </div>
            </div>

            <!-- Monthly Targets Section -->
            <div class="iqms-form-section">
                <h4>Monthly Targets</h4>
                <div class="iqms-form-row">
                    <div class="iqms-form-group">
                        <label class="iqms-form-label" for="janTarget">Jan:</label>
                        <input type="number" class="iqms-form-control" id="janTarget" value="0" min="0">
                    </div>
                    <div class="iqms-form-group">
                        <label class="iqms-form-label" for="febTarget">Feb:</label>
                        <input type="number" class="iqms-form-control" id="febTarget" value="0" min="0">
                    </div>
                    <div class="iqms-form-group">
                        <label class="iqms-form-label" for="marTarget">Mar:</label>
                        <input type="number" class="iqms-form-control" id="marTarget" value="0" min="0">
                    </div>
                    <div class="iqms-form-group">
                        <label class="iqms-form-label" for="aprTarget">Apr:</label>
                        <input type="number" class="iqms-form-control" id="aprTarget" value="0" min="0">
                    </div>
                </div>
                <div class="iqms-form-row">
                    <div class="iqms-form-group">
                        <label class="iqms-form-label" for="mayTarget">May:</label>
                        <input type="number" class="iqms-form-control" id="mayTarget" value="0" min="0">
                    </div>
                    <div class="iqms-form-group">
                        <label class="iqms-form-label" for="junTarget">Jun:</label>
                        <input type="number" class="iqms-form-control" id="junTarget" value="0" min="0">
                    </div>
                    <div class="iqms-form-group">
                        <label class="iqms-form-label" for="julTarget">Jul:</label>
                        <input type="number" class="iqms-form-control" id="julTarget" value="0" min="0">
                    </div>
                    <div class="iqms-form-group">
                        <label class="iqms-form-label" for="augTarget">Aug:</label>
                        <input type="number" class="iqms-form-control" id="augTarget" value="0" min="0">
                    </div>
                </div>
                <div class="iqms-form-row">
                    <div class="iqms-form-group">
                        <label class="iqms-form-label" for="sepTarget">Sep:</label>
                        <input type="number" class="iqms-form-control" id="sepTarget" value="0" min="0">
                    </div>
                    <div class="iqms-form-group">
                        <label class="iqms-form-label" for="octTarget">Oct:</label>
                        <input type="number" class="iqms-form-control" id="octTarget" value="0" min="0">
                    </div>
                    <div class="iqms-form-group">
                        <label class="iqms-form-label" for="novTarget">Nov:</label>
                        <input type="number" class="iqms-form-control" id="novTarget" value="0" min="0">
                    </div>
                    <div class="iqms-form-group">
                        <label class="iqms-form-label" for="decTarget">Dec:</label>
                        <input type="number" class="iqms-form-control" id="decTarget" value="0" min="0">
                    </div>
                </div>
            </div>

            <div class="mt-4">
                <button type="button" class="btn btn-primary" onclick="saveObjective()">Save</button>
                <button type="button" class="btn btn-secondary" onclick="closeObjectiveModal()">Cancel</button>
            </div>
        </form>
    </div>
</div>

<script>
// Sample data for objectives
let objectives = [
    {
        id: 1,
        number: "1",
        statement: "Build Productivity and Efficiency of MSMEs",
        target: "90% of trainings conducted as scheduled/planned per semester based on the approved Annual Work and Financial Plan",
        targets: {
            annual: 0, q1: 0, q2: 0, sem1: 0, q3: 0, q4: 0, sem2: 0,
            jan: 0, feb: 0, mar: 0, apr: 0, may: 0, jun: 0,
            jul: 0, aug: 0, sep: 0, oct: 0, nov: 0, dec: 0
        },
        isObjective: true
    },
    {
        id: 2,
        number: "",
        statement: "",
        target: "Number of trainings conducted as scheduled based on the approved Annual Work and Financial Plan",
        targets: {
            annual: 0, q1: 0, q2: 0, sem1: 0, q3: 0, q4: 0, sem2: 0,
            jan: 0, feb: 0, mar: 0, apr: 0, may: 0, jun: 0,
            jul: 0, aug: 0, sep: 0, oct: 0, nov: 0, dec: 0
        },
        isObjective: false
    },
    {
        id: 3,
        number: "",
        statement: "",
        target: "Number of trainings scheduled/planned based on the approved Annual Work and Financial Plan",
        targets: {
            annual: 0, q1: 0, q2: 0, sem1: 0, q3: 0, q4: 0, sem2: 0,
            jan: 0, feb: 0, mar: 0, apr: 0, may: 0, jun: 0,
            jul: 0, aug: 0, sep: 0, oct: 0, nov: 0, dec: 0
        },
        isObjective: false
    },
    {
        id: 4,
        number: "",
        statement: "",
        target: "100% of MSMEs (participants) who rate the conduct of training process as satisfactory or better",
        targets: {
            annual: 0, q1: 0, q2: 0, sem1: 0, q3: 0, q4: 0, sem2: 0,
            jan: 0, feb: 0, mar: 0, apr: 0, may: 0, jun: 0,
            jul: 0, aug: 0, sep: 0, oct: 0, nov: 0, dec: 0
        },
        isObjective: false,
        isHighlighted: true
    }
];

document.addEventListener('DOMContentLoaded', function() {
    renderTable();

    // Search functionality
    const searchInput = document.getElementById('searchInput');
    if (searchInput) {
        searchInput.addEventListener('keyup', function() {
            const searchTerm = this.value.toLowerCase();
            const rows = document.querySelectorAll('#monitoringTable tbody tr');

            rows.forEach(row => {
                const text = row.textContent.toLowerCase();
                if (text.includes(searchTerm)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    }
});

function renderTable() {
    const tableBody = document.getElementById('tableBody');
    if (!tableBody) return;

    tableBody.innerHTML = '';

    objectives.forEach((objective, index) => {
        const row = document.createElement('tr');

        if (objective.isObjective) {
            row.style.fontWeight = 'bold';
            row.style.backgroundColor = '#e7f1ff';
        } else {
            row.style.paddingLeft = '30px';
        }

        if (objective.isHighlighted) {
            row.style.backgroundColor = '#ffc107';
        }

        row.innerHTML = `
            <td>${objective.number}</td>
            <td>${objective.statement}</td>
            <td>${objective.target}</td>
            <td><input type="number" class="form-control input-cell" value="${objective.targets.annual}" data-id="${objective.id}" data-field="annual" style="width: 60px; text-align: center;"></td>
            <td><input type="number" class="form-control input-cell" value="${objective.targets.q1}" data-id="${objective.id}" data-field="q1" style="width: 60px; text-align: center;"></td>
            <td><input type="number" class="form-control input-cell" value="${objective.targets.q2}" data-id="${objective.id}" data-field="q2" style="width: 60px; text-align: center;"></td>
            <td><input type="number" class="form-control input-cell" value="${objective.targets.sem1}" data-id="${objective.id}" data-field="sem1" style="width: 60px; text-align: center;"></td>
            <td><input type="number" class="form-control input-cell" value="${objective.targets.q3}" data-id="${objective.id}" data-field="q3" style="width: 60px; text-align: center;"></td>
            <td><input type="number" class="form-control input-cell" value="${objective.targets.q4}" data-id="${objective.id}" data-field="q4" style="width: 60px; text-align: center;"></td>
            <td><input type="number" class="form-control input-cell" value="${objective.targets.sem2}" data-id="${objective.id}" data-field="sem2" style="width: 60px; text-align: center;"></td>
            <td><input type="number" class="form-control input-cell" value="${objective.targets.jan}" data-id="${objective.id}" data-field="jan" style="width: 60px; text-align: center;"></td>
            <td><input type="number" class="form-control input-cell" value="${objective.targets.feb}" data-id="${objective.id}" data-field="feb" style="width: 60px; text-align: center;"></td>
            <td><input type="number" class="form-control input-cell" value="${objective.targets.mar}" data-id="${objective.id}" data-field="mar" style="width: 60px; text-align: center;"></td>
            <td><input type="number" class="form-control input-cell" value="${objective.targets.apr}" data-id="${objective.id}" data-field="apr" style="width: 60px; text-align: center;"></td>
            <td><input type="number" class="form-control input-cell" value="${objective.targets.may}" data-id="${objective.id}" data-field="may" style="width: 60px; text-align: center;"></td>
            <td><input type="number" class="form-control input-cell" value="${objective.targets.jun}" data-id="${objective.id}" data-field="jun" style="width: 60px; text-align: center;"></td>
            <td><input type="number" class="form-control input-cell" value="${objective.targets.jul}" data-id="${objective.id}" data-field="jul" style="width: 60px; text-align: center;"></td>
            <td><input type="number" class="form-control input-cell" value="${objective.targets.aug}" data-id="${objective.id}" data-field="aug" style="width: 60px; text-align: center;"></td>
            <td><input type="number" class="form-control input-cell" value="${objective.targets.sep}" data-id="${objective.id}" data-field="sep" style="width: 60px; text-align: center;"></td>
            <td><input type="number" class="form-control input-cell" value="${objective.targets.oct}" data-id="${objective.id}" data-field="oct" style="width: 60px; text-align: center;"></td>
            <td><input type="number" class="form-control input-cell" value="${objective.targets.nov}" data-id="${objective.id}" data-field="nov" style="width: 60px; text-align: center;"></td>
            <td><input type="number" class="form-control input-cell" value="${objective.targets.dec}" data-id="${objective.id}" data-field="dec" style="width: 60px; text-align: center;"></td>
            <td>
                ${objective.isObjective ? `<button class="btn btn-warning btn-sm" onclick="editObjective(${objective.id})">Edit</button>` : ''}
                <button class="btn btn-danger btn-sm" onclick="deleteObjective(${objective.id})">Delete</button>
            </td>
        `;

        tableBody.appendChild(row);
    });

    // Add event listeners to all input cells
    document.querySelectorAll('.input-cell').forEach(input => {
        input.addEventListener('change', function() {
            const id = parseInt(this.getAttribute('data-id'));
            const field = this.getAttribute('data-field');
            const value = parseInt(this.value) || 0;

            const objective = objectives.find(obj => obj.id === id);
            if (objective) {
                objective.targets[field] = value;
            }
        });
    });
}

function openObjectiveModal() {
    document.getElementById('objectiveModalTitle').textContent = 'Add New Objective';
    document.getElementById('objectiveId').value = '';
    document.getElementById('objectiveForm').reset();
    document.getElementById('objectiveModal').style.display = 'block';
}

function closeObjectiveModal() {
    document.getElementById('objectiveModal').style.display = 'none';
}

function editObjective(id) {
    const objective = objectives.find(obj => obj.id === id);
    if (objective) {
        document.getElementById('objectiveModalTitle').textContent = 'Edit Objective';
        document.getElementById('objectiveId').value = objective.id;
        document.getElementById('objectiveNumber').value = objective.number;
        document.getElementById('objectiveStatement').value = objective.statement;
        document.getElementById('qualityTarget').value = objective.target;

        // Annual Monitoring
        document.getElementById('annualTarget').value = objective.targets.annual;
        document.getElementById('q1Target').value = objective.targets.q1;
        document.getElementById('q2Target').value = objective.targets.q2;
        document.getElementById('sem1Target').value = objective.targets.sem1;
        document.getElementById('q3Target').value = objective.targets.q3;
        document.getElementById('q4Target').value = objective.targets.q4;
        document.getElementById('sem2Target').value = objective.targets.sem2;

        // Monthly Monitoring
        document.getElementById('janTarget').value = objective.targets.jan;
        document.getElementById('febTarget').value = objective.targets.feb;
        document.getElementById('marTarget').value = objective.targets.mar;
        document.getElementById('aprTarget').value = objective.targets.apr;
        document.getElementById('mayTarget').value = objective.targets.may;
        document.getElementById('junTarget').value = objective.targets.jun;
        document.getElementById('julTarget').value = objective.targets.jul;
        document.getElementById('augTarget').value = objective.targets.aug;
        document.getElementById('sepTarget').value = objective.targets.sep;
        document.getElementById('octTarget').value = objective.targets.oct;
        document.getElementById('novTarget').value = objective.targets.nov;
        document.getElementById('decTarget').value = objective.targets.dec;

        document.getElementById('objectiveModal').style.display = 'block';
    }
}

function deleteObjective(id) {
    if (confirm('Are you sure you want to delete this item?')) {
        objectives = objectives.filter(obj => obj.id !== id);
        renderTable();
        alert('Item deleted successfully!');
    }
}

function saveObjective() {
    const id = document.getElementById('objectiveId').value ? parseInt(document.getElementById('objectiveId').value) : Date.now();
    const isNew = !document.getElementById('objectiveId').value;

    const newObjective = {
        id: id,
        number: document.getElementById('objectiveNumber').value,
        statement: document.getElementById('objectiveStatement').value,
        target: document.getElementById('qualityTarget').value,
        targets: {
            annual: parseInt(document.getElementById('annualTarget').value) || 0,
            q1: parseInt(document.getElementById('q1Target').value) || 0,
            q2: parseInt(document.getElementById('q2Target').value) || 0,
            sem1: parseInt(document.getElementById('sem1Target').value) || 0,
            q3: parseInt(document.getElementById('q3Target').value) || 0,
            q4: parseInt(document.getElementById('q4Target').value) || 0,
            sem2: parseInt(document.getElementById('sem2Target').value) || 0,
            jan: parseInt(document.getElementById('janTarget').value) || 0,
            feb: parseInt(document.getElementById('febTarget').value) || 0,
            mar: parseInt(document.getElementById('marTarget').value) || 0,
            apr: parseInt(document.getElementById('aprTarget').value) || 0,
            may: parseInt(document.getElementById('mayTarget').value) || 0,
            jun: parseInt(document.getElementById('junTarget').value) || 0,
            jul: parseInt(document.getElementById('julTarget').value) || 0,
            aug: parseInt(document.getElementById('augTarget').value) || 0,
            sep: parseInt(document.getElementById('sepTarget').value) || 0,
            oct: parseInt(document.getElementById('octTarget').value) || 0,
            nov: parseInt(document.getElementById('novTarget').value) || 0,
            dec: parseInt(document.getElementById('decTarget').value) || 0
        },
        isObjective: true
    };

    if (isNew) {
        objectives.push(newObjective);
    } else {
        const index = objectives.findIndex(obj => obj.id === id);
        if (index !== -1) {
            objectives[index] = newObjective;
        }
    }

    renderTable();
    closeObjectiveModal();
    alert(`Objective ${isNew ? 'added' : 'updated'} successfully!`);
}

function saveData() {
    alert('Data saved successfully!');
}

function exportToExcel() {
    alert('Exporting to Excel...');
    setTimeout(() => {
        alert('Export completed!');
    }, 1500);
}

function resetData() {
    if (confirm('Are you sure you want to reset all values to zero?')) {
        objectives.forEach(obj => {
            Object.keys(obj.targets).forEach(key => {
                obj.targets[key] = 0;
            });
        });
        renderTable();
        alert('All values have been reset.');
    }
}

// Modal click outside to close
window.onclick = function(event) {
    const modal = document.getElementById('objectiveModal');
    if (event.target == modal) {
        closeObjectiveModal();
    }
}
</script>

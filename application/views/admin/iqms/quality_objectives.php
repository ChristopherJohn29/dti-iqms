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



        <!-- Search and Filter Toolbar -->
        <div class="row mb-3">
            <div class="col-md-6">
                <div class="iqms-search-container">
                    <i class="fe-search"></i>
                    <input type="text" class="iqms-search-bar" placeholder="Search objectives..." id="searchObjectives">
                </div>
            </div>
            <div class="col-md-6 text-right">
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
                <tbody>
                    <tr>
                        <td>QO-001</td>
                        <td>Build Productivity and Efficiency of MSMEs</td>
                        <td>50% of trainings conducted as scheduled per semester</td>
                        <td>Conduct Training of Trainers</td>
                        <td>Annually</td>
                        <td>Training Coordinator</td>
                        <td><span class="iqms-status in-progress">In Progress</span></td>
                        <td class="text-center">
                            <div class="iqms-action-btns">
                                <button class="iqms-btn iqms-btn-warning iqms-btn-sm" onclick="editObjective('QO-001')" title="Edit">
                                    <i class="fe-edit"></i>
                                </button>
                                <button class="iqms-btn iqms-btn-info iqms-btn-sm" onclick="viewObjective('QO-001')" title="View">
                                    <i class="fe-eye"></i>
                                </button>
                                <button class="iqms-btn iqms-btn-danger iqms-btn-sm" onclick="deleteObjective('QO-001')" title="Delete">
                                    <i class="fe-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>QO-002</td>
                        <td>Build Productivity and Efficiency of MSMEs</td>
                        <td>50% of trainings conducted as scheduled per semester</td>
                        <td>Develop database of resource persons</td>
                        <td>Annually</td>
                        <td>Industry Focal Person</td>
                        <td><span class="iqms-status not-started">Not Started</span></td>
                        <td class="text-center">
                            <div class="iqms-action-btns">
                                <button class="iqms-btn iqms-btn-warning iqms-btn-sm" onclick="editObjective('QO-002')" title="Edit">
                                    <i class="fe-edit"></i>
                                </button>
                                <button class="iqms-btn iqms-btn-info iqms-btn-sm" onclick="viewObjective('QO-002')" title="View">
                                    <i class="fe-eye"></i>
                                </button>
                                <button class="iqms-btn iqms-btn-danger iqms-btn-sm" onclick="deleteObjective('QO-002')" title="Delete">
                                    <i class="fe-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>QO-003</td>
                        <td>Build Productivity and Efficiency of MSMEs</td>
                        <td>100% satisfactory training ratings</td>
                        <td>Conduct Training Effectiveness monitoring</td>
                        <td>Semi-annually</td>
                        <td>NC Counselor</td>
                        <td><span class="iqms-status completed">Completed</span></td>
                        <td class="text-center">
                            <div class="iqms-action-btns">
                                <button class="iqms-btn iqms-btn-warning iqms-btn-sm" onclick="editObjective('QO-003')" title="Edit">
                                    <i class="fe-edit"></i>
                                </button>
                                <button class="iqms-btn iqms-btn-info iqms-btn-sm" onclick="viewObjective('QO-003')" title="View">
                                    <i class="fe-eye"></i>
                                </button>
                                <button class="iqms-btn iqms-btn-danger iqms-btn-sm" onclick="deleteObjective('QO-003')" title="Delete">
                                    <i class="fe-trash"></i>
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

<!-- Floating Add Button -->
<button class="iqms-floating-btn" id="addObjectiveBtn" onclick="openObjectiveModal()">
    <i class="fe-plus"></i>
</button>

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
// Sample data for demonstration
let objectivesData = [
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

function openObjectiveModal() {
    document.getElementById('modalTitleText').textContent = 'Add New Quality Objective';
    document.getElementById('objectiveId').value = '';
    document.getElementById('objectiveForm').reset();

    // Reset action plans to show only one empty plan
    resetActionPlans();

    document.getElementById('objectiveModal').style.display = 'flex';
    document.body.style.overflow = 'hidden';
}

function closeObjectiveModal() {
    document.getElementById('objectiveModal').style.display = 'none';
    document.body.style.overflow = 'auto';
}

function editObjective(id) {
    const objective = objectivesData.find(obj => obj.id === id);
    if (!objective) return;

    document.getElementById('modalTitleText').textContent = 'Edit Quality Objective';
    document.getElementById('objectiveId').value = id;

    // Populate form fields
    document.getElementById('qualityObjective').value = objective.qualityObjective;
    document.getElementById('target').value = objective.target;
    document.getElementById('outputIndicator').value = objective.outputIndicator;
    document.getElementById('processOwner').value = objective.processOwner;

    // Populate action plans
    populateActionPlans(objective.actionPlans);

    document.getElementById('objectiveModal').style.display = 'flex';
    document.body.style.overflow = 'hidden';
}

function viewObjective(id) {
    editObjective(id);
    document.getElementById('modalTitleText').textContent = 'View Quality Objective';

    // Make form read-only
    const inputs = document.querySelectorAll('#objectiveForm input, #objectiveForm textarea, #objectiveForm select');
    inputs.forEach(input => input.disabled = true);

    // Hide action buttons
    document.querySelector('#objectiveForm .mt-4').style.display = 'none';
    document.querySelectorAll('.iqms-remove-action-plan').forEach(btn => btn.style.display = 'none');
    document.getElementById('addActionPlanBtn').style.display = 'none';
}

function deleteObjective(id) {
    if (confirm('Are you sure you want to delete this quality objective?')) {
        objectivesData = objectivesData.filter(obj => obj.id !== id);
        alert('Quality objective deleted successfully!');
        // In a real app, you would refresh the table here
    }
}

function addActionPlan() {
    const container = document.getElementById('actionPlansContainer');
    const existingPlans = container.querySelectorAll('.iqms-action-plan-container');
    const newPlanNumber = existingPlans.length + 1;

    const newPlan = document.createElement('div');
    newPlan.className = 'iqms-action-plan-container';
    newPlan.innerHTML = `
        <div class="iqms-action-plan-header">
            <div class="iqms-action-plan-title">Action Plan #${newPlanNumber}</div>
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
    `;

    container.appendChild(newPlan);
    updateActionPlanTitles();
}

function removeActionPlan(button) {
    const container = button.closest('.iqms-action-plan-container');
    const allPlans = document.querySelectorAll('.iqms-action-plan-container');

    // Don't allow removing if it's the only plan
    if (allPlans.length > 1) {
        container.remove();
        updateActionPlanTitles();
    } else {
        alert('At least one action plan is required.');
    }
}

function updateActionPlanTitles() {
    const plans = document.querySelectorAll('.iqms-action-plan-container');
    plans.forEach((plan, index) => {
        plan.querySelector('.iqms-action-plan-title').textContent = `Action Plan #${index + 1}`;
    });
}

function resetActionPlans() {
    const container = document.getElementById('actionPlansContainer');
    const plans = container.querySelectorAll('.iqms-action-plan-container');

    // Remove all but the first plan
    for (let i = 1; i < plans.length; i++) {
        plans[i].remove();
    }

    // Clear the first plan
    const firstPlan = container.querySelector('.iqms-action-plan-container');
    if (firstPlan) {
        firstPlan.querySelectorAll('input, textarea, select').forEach(input => {
            input.value = '';
            input.disabled = false;
        });
    }

    updateActionPlanTitles();
}

function populateActionPlans(actionPlans) {
    const container = document.getElementById('actionPlansContainer');

    // Clear existing plans
    container.innerHTML = '';

    // Add each action plan
    actionPlans.forEach((plan, index) => {
        addActionPlan();
        const planElement = container.children[index];

        planElement.querySelector('.action-plan-text').value = plan.text;
        planElement.querySelector('.action-plan-timeline').value = plan.timeline;
        planElement.querySelector('.action-plan-responsibility').value = plan.responsibility;
        planElement.querySelector('.action-plan-resources').value = plan.resources;
        planElement.querySelector('.action-plan-references').value = plan.references;
        planElement.querySelector('.action-plan-status').value = plan.status;
    });
}

// Form submission
document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('objectiveForm').addEventListener('submit', function(e) {
        e.preventDefault();

        // Collect form data
        const formData = {
            id: document.getElementById('objectiveId').value,
            qualityObjective: document.getElementById('qualityObjective').value,
            target: document.getElementById('target').value,
            outputIndicator: document.getElementById('outputIndicator').value,
            processOwner: document.getElementById('processOwner').value,
            actionPlans: []
        };

        // Collect action plans
        const actionPlanContainers = document.querySelectorAll('.iqms-action-plan-container');
        actionPlanContainers.forEach(container => {
            const actionPlan = {
                text: container.querySelector('.action-plan-text').value,
                timeline: container.querySelector('.action-plan-timeline').value,
                responsibility: container.querySelector('.action-plan-responsibility').value,
                resources: container.querySelector('.action-plan-resources').value,
                references: container.querySelector('.action-plan-references').value,
                status: container.querySelector('.action-plan-status').value
            };
            formData.actionPlans.push(actionPlan);
        });

        // Save or update objective
        if (formData.id) {
            // Update existing
            const index = objectivesData.findIndex(obj => obj.id === formData.id);
            if (index !== -1) {
                objectivesData[index] = formData;
            }
        } else {
            // Add new
            formData.id = 'QO-' + String(objectivesData.length + 1).padStart(3, '0');
            objectivesData.push(formData);
        }

        alert('Quality objective saved successfully!');
        closeObjectiveModal();

        // Reset form state
        document.querySelectorAll('#objectiveForm input, #objectiveForm textarea, #objectiveForm select').forEach(input => {
            input.disabled = false;
        });
        document.querySelector('#objectiveForm .mt-4').style.display = 'block';
        document.querySelectorAll('.iqms-remove-action-plan').forEach(btn => btn.style.display = 'block');
        document.getElementById('addActionPlanBtn').style.display = 'block';
    });
});

// Search functionality
document.getElementById('searchObjectives').addEventListener('input', function() {
    const searchTerm = this.value.toLowerCase();
    const table = document.getElementById('objectivesTable');
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
document.getElementById('statusFilter').addEventListener('change', function() {
    filterTable();
});

document.getElementById('timelineFilter').addEventListener('change', function() {
    filterTable();
});

document.getElementById('ownerFilter').addEventListener('change', function() {
    filterTable();
});

function filterTable() {
    const statusFilter = document.getElementById('statusFilter').value;
    const timelineFilter = document.getElementById('timelineFilter').value;
    const ownerFilter = document.getElementById('ownerFilter').value;

    const rows = document.querySelectorAll('#objectivesTable tbody tr');

    rows.forEach(row => {
        const status = row.querySelector('.iqms-status').textContent.toLowerCase().replace(' ', '-');
        const timeline = row.cells[4].textContent.toLowerCase();
        const owner = row.cells[5].textContent.toLowerCase();

        let showRow = true;

        if (statusFilter && !status.includes(statusFilter)) showRow = false;
        if (timelineFilter && !timeline.includes(timelineFilter)) showRow = false;
        if (ownerFilter && !owner.includes(ownerFilter.replace('-', ' '))) showRow = false;

        row.style.display = showRow ? '' : 'none';
    });
}

// Close modal when clicking outside
window.onclick = function(event) {
    const modal = document.getElementById('objectiveModal');
    if (event.target == modal) {
        closeObjectiveModal();
    }
}
</script>

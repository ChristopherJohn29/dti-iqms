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
                    <span class="info-value">FM-PL-07</span>
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

        <!-- Tab Navigation -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-tabs nav-bordered" id="opportunityTabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="register-tab" data-bs-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="true">
                                    Opportunity Register
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="assessment-tab" data-bs-toggle="tab" href="#assessment" role="tab" aria-controls="assessment" aria-selected="false">
                                    Assessment Criteria
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="treatment-tab" data-bs-toggle="tab" href="#treatment" role="tab" aria-controls="treatment" aria-selected="false">
                                    Opportunity Treatment
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="monitoring-tab" data-bs-toggle="tab" href="#monitoring" role="tab" aria-controls="monitoring" aria-selected="false">
                                    Opportunity Monitoring
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content" id="opportunityTabContent">
                            <!-- Opportunity Register Tab -->
                            <div class="tab-pane fade show active" id="register" role="tabpanel" aria-labelledby="register-tab">
                                <!-- Search and Add Button -->
                                <div class="row mb-3 mt-3">
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" placeholder="Search opportunities..." id="searchOpportunities">
                                    </div>
                                    <div class="col-md-3">
                                        <select class="form-control" id="priorityFilter">
                                            <option value="">All Priorities</option>
                                            <option value="1">1st Priority</option>
                                            <option value="2">2nd Priority</option>
                                            <option value="3">3rd Priority</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <select class="form-control" id="scoreFilter">
                                            <option value="">All Scores</option>
                                            <option value="6">Score: 6</option>
                                            <option value="5">Score: 5</option>
                                            <option value="4">Score: 4</option>
                                            <option value="3">Score: 3</option>
                                            <option value="2">Score: 2</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2 text-right">
                                        <button class="btn btn-success waves-effect waves-light" onclick="openOpportunityModal()">
                                            <i class="fe-plus"></i> Add New
                                        </button>
                                    </div>
                                </div>

                                <!-- Opportunity Register Table -->
                                <table class="table dt-responsive nowrap w-100" id="opportunitiesTable">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Opportunity</th>
                                            <th>Probability</th>
                                            <th>Impact</th>
                                            <th>Score</th>
                                            <th>Priority</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Data will be populated by JavaScript -->
                                    </tbody>
                                </table>
                            </div>

                            <!-- Assessment Criteria Tab -->
                            <div class="tab-pane fade" id="assessment" role="tabpanel" aria-labelledby="assessment-tab">
                                <div class="mt-3">
                                    <h5>Probability Criteria</h5>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Score</th>
                                                <th>Probability</th>
                                                <th>Description</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>3</td>
                                                <td>High (10-50%)</td>
                                                <td>Known occurrence within a 2 year period</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Medium (10-50%)</td>
                                                <td>Known occurrence more than 3 years ago</td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Low (<10%)</td>
                                                <td>Never happened before</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <h5 class="mt-4">Impact Criteria</h5>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Score</th>
                                                <th>Impact Area</th>
                                                <th>Description</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>3</td>
                                                <td>Service Delivery</td>
                                                <td>Critical service enhancement affecting objectives</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Financial</td>
                                                <td>Significant positive effect on budget optimization</td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Reputation</td>
                                                <td>Positive customer feedback and satisfaction</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <h5 class="mt-4">Opportunity Evaluation Rating</h5>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Total Score</th>
                                                <th>Priority Rating</th>
                                                <th>Recommended Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>6</td>
                                                <td>1st Priority</td>
                                                <td>Immediate Implementation</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>1st Priority</td>
                                                <td>Opportunity Development</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>2nd Priority</td>
                                                <td>Opportunity Development</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>2nd Priority</td>
                                                <td>Opportunity Monitoring</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>3rd Priority</td>
                                                <td>Opportunity Monitoring</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!-- Opportunity Treatment Tab -->
                            <div class="tab-pane fade" id="treatment" role="tabpanel" aria-labelledby="treatment-tab">
                                <div class="row mb-3 mt-3">
                                    <div class="col-md-6">
                                        <select class="form-control" id="treatmentOpportunityFilter">
                                            <option value="">All Opportunities</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <select class="form-control" id="treatmentStatusFilter">
                                            <option value="">All Statuses</option>
                                            <option value="not-started">Not Started</option>
                                            <option value="in-progress">In Progress</option>
                                            <option value="completed">Completed</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2 text-right">
                                        <button class="btn btn-success waves-effect waves-light" onclick="openTreatmentModal()">
                                            <i class="fe-plus"></i> Add Treatment
                                        </button>
                                    </div>
                                </div>

                                <table class="table dt-responsive nowrap w-100" id="treatmentTable">
                                    <thead>
                                        <tr>
                                            <th>Opportunity ID</th>
                                            <th>Action</th>
                                            <th>Description</th>
                                            <th>Responsible</th>
                                            <th>Start Date</th>
                                            <th>Due Date</th>
                                            <th>Progress</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Data will be populated by JavaScript -->
                                    </tbody>
                                </table>
                            </div>

                            <!-- Opportunity Monitoring Tab -->
                            <div class="tab-pane fade" id="monitoring" role="tabpanel" aria-labelledby="monitoring-tab">
                                <div class="mt-3">
                                    <table class="table table-bordered" id="monitoringTable">
                                        <thead>
                                            <tr>
                                                <th rowspan="2">Opportunity ID</th>
                                                <th rowspan="2">Effectiveness Indicator (M)</th>
                                                <th colspan="4">Y/N (N)</th>
                                                <th rowspan="2">Actions</th>
                                            </tr>
                                            <tr>
                                                <th>Q1</th>
                                                <th>Q2</th>
                                                <th>Q3</th>
                                                <th>Q4</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- Data will be populated by JavaScript -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- container -->
</div>
<!-- content -->

<!-- Modal for Add/Edit Opportunity -->
<div id="opportunityModal" class="iqms-modal">
    <div class="iqms-modal-content" style="max-width: 900px;">
        <div class="iqms-modal-header">
            <h3 class="iqms-modal-title" id="opportunityModalTitle">Add New Opportunity</h3>
            <span class="iqms-close" onclick="closeOpportunityModal()">&times;</span>
        </div>

        <form class="iqms-form" id="opportunityForm">
            <input type="hidden" id="opportunityId">

            <div class="iqms-form-group">
                <label class="iqms-form-label" for="opportunityDescription">Opportunity Description:</label>
                <textarea class="iqms-form-control" id="opportunityDescription" rows="3" placeholder="Enter detailed opportunity description..." required></textarea>
            </div>

            <div class="iqms-form-row">
                <div class="iqms-form-group">
                    <label class="iqms-form-label" for="opportunityProbability">Probability Score:</label>
                    <select class="iqms-form-control" id="opportunityProbability" required>
                        <option value="">Select Probability</option>
                        <option value="3">High (10-50%) - Known occurrence within 2 years</option>
                        <option value="2">Medium (10-50%) - Known occurrence >3 years ago</option>
                        <option value="1">Low (<10%) - Never happened before</option>
                    </select>
                </div>
                <div class="iqms-form-group">
                    <label class="iqms-form-label" for="opportunityImpact">Impact Score:</label>
                    <select class="iqms-form-control" id="opportunityImpact" required>
                        <option value="">Select Impact</option>
                        <option value="3">High - Critical enhancement to objectives</option>
                        <option value="2">Medium - Significant positive financial impact</option>
                        <option value="1">Low - Minor positive reputation impact</option>
                    </select>
                </div>
            </div>

            <div class="iqms-form-row">
                <div class="iqms-form-group">
                    <label class="iqms-form-label" for="opportunityScore">Opportunity Score:</label>
                    <input type="text" class="iqms-form-control" id="opportunityScore" readonly>
                </div>
                <div class="iqms-form-group">
                    <label class="iqms-form-label" for="opportunityPriority">Priority:</label>
                    <input type="text" class="iqms-form-control" id="opportunityPriority" readonly>
                </div>
            </div>

            <div class="iqms-form-row">
                <div class="iqms-form-group">
                    <label class="iqms-form-label" for="opportunityOwner">Opportunity Owner:</label>
                    <input type="text" class="iqms-form-control" id="opportunityOwner" placeholder="Enter responsible person/department">
                </div>
                <div class="iqms-form-group">
                    <label class="iqms-form-label" for="opportunityStatus">Status:</label>
                    <select class="iqms-form-control" id="opportunityStatus">
                        <option value="open">Open</option>
                        <option value="in-progress">In Progress</option>
                        <option value="closed">Closed</option>
                    </select>
                </div>
            </div>

            <div class="iqms-form-group">
                <label class="iqms-form-label" for="effectivenessIndicator">Effectiveness Indicator (M):</label>
                <input type="text" class="iqms-form-control" id="effectivenessIndicator" placeholder="Enter effectiveness indicator" required>
            </div>

            <div class="mt-4">
                <button type="button" class="btn btn-primary" onclick="saveOpportunity()">Save Opportunity</button>
                <button type="button" class="btn btn-light" onclick="closeOpportunityModal()">Cancel</button>
            </div>
        </form>
    </div>
</div>

<!-- Modal for Add/Edit Treatment -->
<div id="treatmentModal" class="iqms-modal">
    <div class="iqms-modal-content" style="max-width: 900px;">
        <div class="iqms-modal-header">
            <h3 class="iqms-modal-title" id="treatmentModalTitle">Add Treatment Plan</h3>
            <span class="iqms-close" onclick="closeTreatmentModal()">&times;</span>
        </div>

        <form class="iqms-form" id="treatmentForm">
            <input type="hidden" id="treatmentId">

            <div class="iqms-form-row">
                <div class="iqms-form-group">
                    <label class="iqms-form-label" for="treatmentOpportunityId">Opportunity ID:</label>
                    <select class="iqms-form-control" id="treatmentOpportunityId" required>
                        <option value="">Select Opportunity</option>
                    </select>
                </div>
                <div class="iqms-form-group">
                    <label class="iqms-form-label" for="treatmentAction">Action:</label>
                    <select class="iqms-form-control" id="treatmentAction" required>
                        <option value="">Select Action</option>
                        <option value="development">Opportunity Development</option>
                        <option value="implementation">Immediate Implementation</option>
                        <option value="monitoring">Opportunity Monitoring</option>
                    </select>
                </div>
            </div>

            <div class="iqms-form-group">
                <label class="iqms-form-label" for="treatmentDescription">Description:</label>
                <textarea class="iqms-form-control" id="treatmentDescription" rows="3" placeholder="Enter treatment description..." required></textarea>
            </div>

            <div class="iqms-form-row">
                <div class="iqms-form-group">
                    <label class="iqms-form-label" for="treatmentResponsible">Responsible:</label>
                    <input type="text" class="iqms-form-control" id="treatmentResponsible" placeholder="Enter responsible person" required>
                </div>
                <div class="iqms-form-group">
                    <label class="iqms-form-label" for="treatmentProgress">Progress (%):</label>
                    <input type="number" class="iqms-form-control" id="treatmentProgress" min="0" max="100" placeholder="0" required>
                </div>
            </div>

            <div class="iqms-form-row">
                <div class="iqms-form-group">
                    <label class="iqms-form-label" for="treatmentStartDate">Start Date:</label>
                    <input type="date" class="iqms-form-control" id="treatmentStartDate" required>
                </div>
                <div class="iqms-form-group">
                    <label class="iqms-form-label" for="treatmentDueDate">Due Date:</label>
                    <input type="date" class="iqms-form-control" id="treatmentDueDate" required>
                </div>
            </div>

            <div class="iqms-form-group">
                <label class="iqms-form-label" for="treatmentStatus">Status:</label>
                <select class="iqms-form-control" id="treatmentStatus" required>
                    <option value="not-started">Not Started</option>
                    <option value="in-progress">In Progress</option>
                    <option value="completed">Completed</option>
                </select>
            </div>

            <div class="mt-4">
                <button type="button" class="btn btn-primary" onclick="saveTreatment()">Save Treatment</button>
                <button type="button" class="btn btn-light" onclick="closeTreatmentModal()">Cancel</button>
            </div>
        </form>
    </div>
</div>

<script>
// Sample data for opportunities
const opportunities = [
    {
        id: "OR-1",
        description: "Enhanced training delivery through digital platforms",
        probability: 2,
        impact: 3,
        score: 6,
        priority: "1st",
        status: "open",
        owner: "Training Coordinator",
        effectivenessIndicator: "100% digital platform utilization",
        monitoring: { q1: "", q2: "", q3: "", q4: "" }
    },
    {
        id: "OR-2",
        description: "Partnership opportunities with private sector",
        probability: 2,
        impact: 2,
        score: 4,
        priority: "2nd",
        status: "in-progress",
        owner: "Training Coordinator",
        effectivenessIndicator: "Number of partnerships established",
        monitoring: { q1: "", q2: "", q3: "", q4: "" }
    }
];

// Sample data for treatments
const treatments = [
    {
        id: 1,
        opportunityId: "OR-1",
        action: "development",
        description: "Develop comprehensive digital training platform",
        responsible: "Training Coordinator",
        startDate: "2025-05-01",
        dueDate: "2025-08-30",
        progress: 25,
        status: "in-progress"
    }
];

// Initialize the application
document.addEventListener('DOMContentLoaded', function() {
    renderOpportunitiesTable();
    renderTreatmentsTable();
    renderMonitoringTable();
    populateOpportunityDropdowns();

    // Add event listeners for score calculation
    const probabilitySelect = document.getElementById('opportunityProbability');
    const impactSelect = document.getElementById('opportunityImpact');

    if (probabilitySelect) probabilitySelect.addEventListener('change', calculateOpportunityScore);
    if (impactSelect) impactSelect.addEventListener('change', calculateOpportunityScore);
});

function renderOpportunitiesTable() {
    const tbody = document.querySelector('#opportunitiesTable tbody');
    if (!tbody) return;

    tbody.innerHTML = '';
    opportunities.forEach(opportunity => {
        const row = document.createElement('tr');

        let priorityBadge = '';
        if (opportunity.priority === '1st') {
            priorityBadge = '<span class="badge bg-danger">1st Priority</span>';
        } else if (opportunity.priority === '2nd') {
            priorityBadge = '<span class="badge bg-warning">2nd Priority</span>';
        } else {
            priorityBadge = '<span class="badge bg-success">3rd Priority</span>';
        }

        let statusBadge = '';
        if (opportunity.status === 'open') {
            statusBadge = '<span class="badge bg-danger">Open</span>';
        } else if (opportunity.status === 'in-progress') {
            statusBadge = '<span class="badge bg-warning">In Progress</span>';
        } else {
            statusBadge = '<span class="badge bg-success">Closed</span>';
        }

        row.innerHTML = `
            <td>${opportunity.id}</td>
            <td>${opportunity.description}</td>
            <td>${opportunity.probability}</td>
            <td>${opportunity.impact}</td>
            <td>${opportunity.score}</td>
            <td>${priorityBadge}</td>
            <td>
                <button class="btn btn-warning btn-sm" onclick="editOpportunity('${opportunity.id}')">
                    <i class="fe-edit"></i>
                </button>
                <button class="btn btn-danger btn-sm" onclick="deleteOpportunity('${opportunity.id}')">
                    <i class="fe-trash"></i>
                </button>
            </td>
        `;

        tbody.appendChild(row);
    });
}

function renderTreatmentsTable() {
    const tbody = document.querySelector('#treatmentTable tbody');
    if (!tbody) return;

    tbody.innerHTML = '';
    treatments.forEach(treatment => {
        const opportunity = opportunities.find(o => o.id === treatment.opportunityId);
        const row = document.createElement('tr');

        let statusBadge = '';
        if (treatment.status === 'not-started') {
            statusBadge = '<span class="badge bg-secondary">Not Started</span>';
        } else if (treatment.status === 'in-progress') {
            statusBadge = '<span class="badge bg-warning">In Progress</span>';
        } else {
            statusBadge = '<span class="badge bg-success">Completed</span>';
        }

        row.innerHTML = `
            <td>${treatment.opportunityId}</td>
            <td>${treatment.action}</td>
            <td>${treatment.description}</td>
            <td>${treatment.responsible}</td>
            <td>${formatDate(treatment.startDate)}</td>
            <td>${formatDate(treatment.dueDate)}</td>
            <td>${treatment.progress}%</td>
            <td>${statusBadge}</td>
            <td>
                <button class="btn btn-warning btn-sm" onclick="editTreatment(${treatment.id})">
                    <i class="fe-edit"></i>
                </button>
            </td>
        `;

        tbody.appendChild(row);
    });
}

function renderMonitoringTable() {
    const tbody = document.querySelector('#monitoringTable tbody');
    if (!tbody) return;

    tbody.innerHTML = '';
    opportunities.forEach(opportunity => {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${opportunity.id}</td>
            <td>${opportunity.effectivenessIndicator}</td>
            <td>${opportunity.monitoring.q1}</td>
            <td>${opportunity.monitoring.q2}</td>
            <td>${opportunity.monitoring.q3}</td>
            <td>${opportunity.monitoring.q4}</td>
            <td>
                <button class="btn btn-primary btn-sm" onclick="openMonitoringModal('${opportunity.id}')">
                    Update
                </button>
            </td>
        `;
        tbody.appendChild(row);
    });
}

function populateOpportunityDropdowns() {
    const treatmentSelect = document.getElementById('treatmentOpportunityId');
    const filterSelect = document.getElementById('treatmentOpportunityFilter');

    if (treatmentSelect) {
        treatmentSelect.innerHTML = '<option value="">Select Opportunity</option>';
        opportunities.forEach(opportunity => {
            const option = document.createElement('option');
            option.value = opportunity.id;
            option.textContent = opportunity.id;
            treatmentSelect.appendChild(option);
        });
    }

    if (filterSelect) {
        filterSelect.innerHTML = '<option value="">All Opportunities</option>';
        opportunities.forEach(opportunity => {
            const option = document.createElement('option');
            option.value = opportunity.id;
            option.textContent = opportunity.id;
            filterSelect.appendChild(option);
        });
    }
}

function calculateOpportunityScore() {
    const probability = parseInt(document.getElementById('opportunityProbability').value) || 0;
    const impact = parseInt(document.getElementById('opportunityImpact').value) || 0;
    const score = probability * impact;

    document.getElementById('opportunityScore').value = score;

    let priority = '';
    if (score >= 5) {
        priority = '1st Priority';
    } else if (score >= 3) {
        priority = '2nd Priority';
    } else {
        priority = '3rd Priority';
    }

    document.getElementById('opportunityPriority').value = priority;
}

function openOpportunityModal() {
    document.getElementById('opportunityModalTitle').textContent = 'Add New Opportunity';
    document.getElementById('opportunityId').value = '';
    document.getElementById('opportunityForm').reset();
    document.getElementById('opportunityModal').style.display = 'block';
}

function closeOpportunityModal() {
    document.getElementById('opportunityModal').style.display = 'none';
}

function openTreatmentModal() {
    document.getElementById('treatmentModalTitle').textContent = 'Add Treatment Plan';
    document.getElementById('treatmentId').value = '';
    document.getElementById('treatmentForm').reset();
    document.getElementById('treatmentModal').style.display = 'block';
}

function closeTreatmentModal() {
    document.getElementById('treatmentModal').style.display = 'none';
}

function editOpportunity(id) {
    document.getElementById('opportunityModalTitle').textContent = 'Edit Opportunity';
    document.getElementById('opportunityId').value = id;

    const opportunity = opportunities.find(o => o.id === id);
    if (opportunity) {
        document.getElementById('opportunityDescription').value = opportunity.description;
        document.getElementById('opportunityProbability').value = opportunity.probability;
        document.getElementById('opportunityImpact').value = opportunity.impact;
        document.getElementById('opportunityOwner').value = opportunity.owner;
        document.getElementById('opportunityStatus').value = opportunity.status;
        document.getElementById('effectivenessIndicator').value = opportunity.effectivenessIndicator;
        calculateOpportunityScore();
    }

    document.getElementById('opportunityModal').style.display = 'block';
}

function editTreatment(id) {
    document.getElementById('treatmentModalTitle').textContent = 'Edit Treatment Plan';
    document.getElementById('treatmentId').value = id;

    const treatment = treatments.find(t => t.id === id);
    if (treatment) {
        document.getElementById('treatmentOpportunityId').value = treatment.opportunityId;
        document.getElementById('treatmentAction').value = treatment.action;
        document.getElementById('treatmentDescription').value = treatment.description;
        document.getElementById('treatmentResponsible').value = treatment.responsible;
        document.getElementById('treatmentStartDate').value = treatment.startDate;
        document.getElementById('treatmentDueDate').value = treatment.dueDate;
        document.getElementById('treatmentProgress').value = treatment.progress;
        document.getElementById('treatmentStatus').value = treatment.status;
    }

    document.getElementById('treatmentModal').style.display = 'block';
}

function deleteOpportunity(id) {
    if (confirm('Are you sure you want to delete this opportunity?')) {
        alert('Opportunity deleted successfully!');
        renderOpportunitiesTable();
    }
}

function saveOpportunity() {
    alert('Opportunity saved successfully!');
    closeOpportunityModal();
    renderOpportunitiesTable();
}

function saveTreatment() {
    alert('Treatment plan saved successfully!');
    closeTreatmentModal();
    renderTreatmentsTable();
}

function formatDate(dateString) {
    const date = new Date(dateString);
    return date.toLocaleDateString('en-US', {
        year: 'numeric',
        month: 'short',
        day: 'numeric'
    });
}

// Search functionality
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchOpportunities');
    if (searchInput) {
        searchInput.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            const table = document.getElementById('opportunitiesTable');
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
    }
});

// Modal click outside to close
window.onclick = function(event) {
    const opportunityModal = document.getElementById('opportunityModal');
    const treatmentModal = document.getElementById('treatmentModal');

    if (event.target == opportunityModal) {
        closeOpportunityModal();
    }
    if (event.target == treatmentModal) {
        closeTreatmentModal();
    }
}
</script>

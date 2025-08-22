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


<input type="hidden" id="iqmsModuleCode" value="OPPORTUNITY_REGISTER">
<input type="hidden" id="iqmsOfficeId" value="10">
<input type="hidden" id="iqmsProcessId" value="1">
<input type="hidden" id="iqmsFiscalYear" value="2025">

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
                                        <button class="iqms-btn iqms-btn-success" onclick="openOpportunityModal()">
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
                                    <h5>Opportunity Assessment Criteria</h5>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h6 class="card-title">Probability / Likelihood</h6>
                                                    <p><strong>HIGH (Score = 3)</strong>: 70-100% chance of success. Organization has more than enough resources.</p>
                                                    <p><strong>MEDIUM (Score = 2)</strong>: 20-69% chance of success. Barely sufficient resources.</p>
                                                    <p><strong>LOW (Score = 1)</strong>: 0-19% chance of success. Need to source resources.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h6 class="card-title">Strategic Impact</h6>
                                                    <p><strong>HIGH (Score = 3)</strong>: Complete alignment with Vision, Mission, Goals. Major progress.</p>
                                                    <p><strong>MEDIUM (Score = 2)</strong>: Substantial alignment. Major progress on a goal.</p>
                                                    <p><strong>LOW (Score = 1)</strong>: Minor alignment. Minor progress.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-3">
                                        <div class="col-md-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h6 class="card-title">Service Delivery Impact</h6>
                                                    <p><strong>HIGH (Score = 3)</strong>: Transformative improvement.</p>
                                                    <p><strong>MEDIUM (Score = 2)</strong>: Substantial improvement.</p>
                                                    <p><strong>LOW (Score = 1)</strong>: Minor improvement.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h6 class="card-title">Financial Impact</h6>
                                                    <p><strong>HIGH (Score = 3)</strong>: >10% budget increase possible.</p>
                                                    <p><strong>MEDIUM (Score = 2)</strong>: <10% budget increase possible.</p>
                                                    <p><strong>LOW (Score = 1)</strong>: No effect on funds.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-3">
                                        <div class="col-md-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h6 class="card-title">Reputation Impact</h6>
                                                    <p><strong>HIGH (Score = 3)</strong>: Long-term reputation enhancement.</p>
                                                    <p><strong>MEDIUM (Score = 2)</strong>: Short-term reputation enhancement.</p>
                                                    <p><strong>LOW (Score = 1)</strong>: No lasting effect.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <h5 class="mt-4">Opportunity Evaluation Rating Score = Probability + Impact</h5>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Total Score</th>
                                                <th>Priority Rating</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>5-6</td>
                                                <td>1st Priority</td>
                                                <td>Prioritize and pursue actions</td>
                                            </tr>
                                            <tr>
                                                <td>3-4</td>
                                                <td>2nd Priority</td>
                                                <td>Consider for future action</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>3rd Priority</td>
                                                <td>Last to be pursued or not at all</td>
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
                                        <!-- Add Treatment removed: opportunities are created in Register tab -->
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
                                    <!-- Status Summary Table -->
                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title">Quarterly Status Summary</h5>
                                                    <table class="table table-bordered" id="statusSummaryTable">
                                                        <thead>
                                                            <tr>
                                                                <th>Status</th>
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

                                    <!-- Charts Container -->
                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title">Quarterly Status Distribution</h5>
                                                    <div class="pie-charts-container">
                                                        <div class="pie-chart-wrapper">
                                                            <h6>Q1 Status Distribution</h6>
                                                            <canvas id="q1PieChart" width="200" height="200"></canvas>
                                                        </div>
                                                        <div class="pie-chart-wrapper">
                                                            <h6>Q2 Status Distribution</h6>
                                                            <canvas id="q2PieChart" width="200" height="200"></canvas>
                                                        </div>
                                                        <div class="pie-chart-wrapper">
                                                            <h6>Q3 Status Distribution</h6>
                                                            <canvas id="q3PieChart" width="200" height="200"></canvas>
                                                        </div>
                                                        <div class="pie-chart-wrapper">
                                                            <h6>Q4 Status Distribution</h6>
                                                            <canvas id="q4PieChart" width="200" height="200"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Monitoring Table -->
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title">Opportunity Monitoring Details</h5>
                                                    <table class="table table-bordered" id="monitoringTable">
                                                        <thead>
                                                            <tr>
                                                                <th rowspan="2" class="text-center">Opportunity ID</th>
                                                                <th rowspan="2" class="text-center">Effectiveness Indicator (M)</th>
                                                                <th colspan="4" class="text-center">Y/N (N)</th>
                                                                <th rowspan="2" class="text-center">Actions</th>
                                                            </tr>
                                                            <tr>
                                                                <th class="text-center">Q1</th>
                                                                <th class="text-center">Q2</th>
                                                                <th class="text-center">Q3</th>
                                                                <th class="text-center">Q4</th>
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
                </div>
            </div>
        </div>

    </div>
    <!-- container -->
</div>
<!-- content -->

<!-- Chart.js Library -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0/dist/chartjs-plugin-datalabels.min.js"></script>

<!-- Chart Styles -->
<style>
.pie-charts-container {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
    max-width: 800px;
    margin: 0 auto 20px;
}

.pie-chart-wrapper {
    text-align: center;
}

.pie-chart-wrapper canvas {
    max-width: 200px;
    max-height: 200px;
    margin: 0 auto;
}

.pie-chart-wrapper h6 {
    margin-bottom: 10px;
    color: #495057;
    font-size: 14px;
    font-weight: 600;
}

#statusSummaryTable .status-yes {
    color: #27ae60;
    font-weight: bold;
}

#statusSummaryTable .status-no {
    color: #e74c3c;
    font-weight: bold;
}

@media (max-width: 768px) {
    .pie-charts-container {
        grid-template-columns: 1fr;
    }
}
</style>

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

            <div class="iqms-form-group">
                <label class="iqms-form-label" for="opportunityProbability">Probability (1-3):</label>
                <select class="iqms-form-control" id="opportunityProbability" required>
                    <option value="">Select probability</option>
                    <option value="3">High (3) - 70-100% chance</option>
                    <option value="2">Medium (2) - 20-69% chance</option>
                    <option value="1">Low (1) - 0-19% chance</option>
                </select>
            </div>

            <div class="iqms-form-group">
                <label class="iqms-form-label">Impact Assessment:</label>

                <div class="iqms-form-row">
                    <div class="iqms-form-group">
                        <label class="iqms-form-label" for="strategicImpact">Strategic Impact (1-3):</label>
                        <select class="iqms-form-control" id="strategicImpact" required>
                            <option value="">Select impact level</option>
                            <option value="3">High (3) - Complete alignment</option>
                            <option value="2">Medium (2) - Substantial alignment</option>
                            <option value="1">Low (1) - Minor alignment</option>
                        </select>
                    </div>
                    <div class="iqms-form-group">
                        <label class="iqms-form-label" for="serviceImpact">Service Delivery Impact (1-3):</label>
                        <select class="iqms-form-control" id="serviceImpact" required>
                            <option value="">Select impact level</option>
                            <option value="3">High (3) - Transformative</option>
                            <option value="2">Medium (2) - Substantial</option>
                            <option value="1">Low (1) - Minor</option>
                        </select>
                    </div>
                </div>

                <div class="iqms-form-row">
                    <div class="iqms-form-group">
                        <label class="iqms-form-label" for="financialImpact">Financial Impact (1-3):</label>
                        <select class="iqms-form-control" id="financialImpact" required>
                            <option value="">Select impact level</option>
                            <option value="3">High (3) - >10% budget increase</option>
                            <option value="2">Medium (2) - <10% budget increase</option>
                            <option value="1">Low (1) - No effect</option>
                        </select>
                    </div>
                    <div class="iqms-form-group">
                        <label class="iqms-form-label" for="reputationImpact">Reputation Impact (1-3):</label>
                        <select class="iqms-form-control" id="reputationImpact" required>
                            <option value="">Select impact level</option>
                            <option value="3">High (3) - Long-term enhancement</option>
                            <option value="2">Medium (2) - Short-term enhancement</option>
                            <option value="1">Low (1) - No lasting effect</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="iqms-form-group">
                <label class="iqms-form-label" for="actions">Actions to Address Opportunity:</label>
                <textarea class="iqms-form-control" id="actions" rows="3" placeholder="Enter actions to address opportunity..." required></textarea>
            </div>

            <div class="iqms-form-row">
                <div class="iqms-form-group">
                    <label class="iqms-form-label" for="responsibility">Responsibility:</label>
                    <input type="text" class="iqms-form-control" id="responsibility" placeholder="Enter responsible person" required>
                </div>
                <div class="iqms-form-group">
                    <label class="iqms-form-label" for="timeline">Timeline:</label>
                    <input type="text" class="iqms-form-control" id="timeline" placeholder="Enter timeline" required>
                </div>
            </div>

            <div class="iqms-form-group">
                <label class="iqms-form-label" for="indicator">Effectiveness Indicator:</label>
                <input type="text" class="iqms-form-control" id="indicator" placeholder="Enter effectiveness indicator" required>
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

<!-- Modal for Update Monitoring Status -->
<div id="monitoringModal" class="iqms-modal">
    <div class="iqms-modal-content" style="max-width: 600px;">
        <div class="iqms-modal-header">
            <h3 class="iqms-modal-title" id="monitoringModalTitle">Update Monitoring Status</h3>
            <span class="iqms-close" onclick="closeMonitoringModal()">&times;</span>
        </div>

        <form class="iqms-form" id="monitoringForm">
            <input type="hidden" id="monitoringOpportunityId">

            <div class="iqms-form-group">
                <label class="iqms-form-label" for="monitoringIndicator">Effectiveness Indicator:</label>
                <input type="text" class="iqms-form-control" id="monitoringIndicator" readonly>
            </div>

            <div class="iqms-form-row">
                <div class="iqms-form-group">
                    <label class="iqms-form-label" for="q1Status">Q1 Status:</label>
                    <select class="iqms-form-control" id="q1Status" required>
                        <option value="Y">Yes (Y)</option>
                        <option value="N">No (N)</option>
                    </select>
                </div>
                <div class="iqms-form-group">
                    <label class="iqms-form-label" for="q2Status">Q2 Status:</label>
                    <select class="iqms-form-control" id="q2Status" required>
                        <option value="Y">Yes (Y)</option>
                        <option value="N">No (N)</option>
                    </select>
                </div>
            </div>

            <div class="iqms-form-row">
                <div class="iqms-form-group">
                    <label class="iqms-form-label" for="q3Status">Q3 Status:</label>
                    <select class="iqms-form-control" id="q3Status" required>
                        <option value="Y">Yes (Y)</option>
                        <option value="N">No (N)</option>
                    </select>
                </div>
                <div class="iqms-form-group">
                    <label class="iqms-form-label" for="q4Status">Q4 Status:</label>
                    <select class="iqms-form-control" id="q4Status" required>
                        <option value="Y">Yes (Y)</option>
                        <option value="N">No (N)</option>
                    </select>
                </div>
            </div>

            <div class="mt-4">
                <button type="button" class="btn btn-primary" onclick="saveMonitoringStatus()">Update Status</button>
                <button type="button" class="btn btn-light" onclick="closeMonitoringModal()">Cancel</button>
            </div>
        </form>
    </div>
</div>

<script src="<?=base_url('assets/customjs/iqms_opportunity_register.js')?>"></script>

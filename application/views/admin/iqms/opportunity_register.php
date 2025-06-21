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

<script>
// Sample data for opportunities
const opportunities = [
    {
        id: "OR-1",
        description: "Effective and efficient conduct of relevant trainings",
        probability: 3,
        strategicImpact: 3,
        serviceImpact: 3,
        financialImpact: 3,
        reputationImpact: 3,
        actions: "1.1 Ensure to conduct TNA and profiling of participants and communication in advance to the resource person",
        responsibility: "Training Coordinator",
        timeline: "every conduct of training",
        indicator: "Client satisfaction feedback/rating"
    },
    {
        id: "OR-2",
        description: "Increased participant's retention and pleasant learning experience",
        probability: 2,
        strategicImpact: 2,
        serviceImpact: 2,
        financialImpact: 2,
        reputationImpact: 2,
        actions: "2.1 Ensure comfortable and conducive training environment be considered in selecting a venue",
        responsibility: "Training Coordinator",
        timeline: "every conduct of training",
        indicator: "Post Training effectiveness rating"
    },
    {
        id: "OR-3",
        description: "Efficient resource allocation and availability of competent Resource Speakers",
        probability: 3,
        strategicImpact: 2,
        serviceImpact: 2,
        financialImpact: 2,
        reputationImpact: 2,
        actions: "3.1 Maximising partnerships through collaboration and harmonization",
        responsibility: "Training Coordinator",
        timeline: "Annual",
        indicator: "MOA/MOU established"
    },
    {
        id: "OR-5",
        description: "Efficient resource utilization",
        probability: 3,
        strategicImpact: 3,
        serviceImpact: 3,
        financialImpact: 3,
        reputationImpact: 3,
        actions: "5.1 Proper planning and prompt submission of pertinent documents and reports for faster liquidation and payments to stakeholders",
        responsibility: "Training Coordinator",
        timeline: "Annual",
        indicator: "at least 95% Fund Utilization Report"
    },
    {
        id: "OR-6",
        description: "Pool of in-house resource persons to conduct the training effectively and efficiently",
        probability: 2,
        strategicImpact: 3,
        serviceImpact: 3,
        financialImpact: 3,
        reputationImpact: 2,
        actions: "6.1 Provide capability building activities and trainings applicable to OTU staff",
        responsibility: "Training Coordinator",
        timeline: "every conduct of training",
        indicator: "Fund Utilization"
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

// Sample monitoring data
const monitoringStatuses = [
    { opportunityId: "OR-1", indicator: "Client satisfaction feedback/rating", q1: "Y", q2: "Y", q3: "N", q4: "Y" },
    { opportunityId: "OR-2", indicator: "Post Training effectiveness rating", q1: "Y", q2: "N", q3: "Y", q4: "N" },
    { opportunityId: "OR-3", indicator: "MOA/MOU established", q1: "N", q2: "Y", q3: "Y", q4: "Y" },
    { opportunityId: "OR-5", indicator: "at least 95% Fund Utilization Report", q1: "Y", q2: "Y", q3: "Y", q4: "Y" },
    { opportunityId: "OR-6", indicator: "Fund Utilization", q1: "N", q2: "N", q3: "Y", q4: "N" }
];

// Chart variables
let pieCharts = [];

// Initialize the application
document.addEventListener('DOMContentLoaded', function() {
    // Register Chart.js plugins
    if (typeof Chart !== 'undefined' && typeof ChartDataLabels !== 'undefined') {
        Chart.register(ChartDataLabels);
    }

    renderOpportunitiesTable();
    renderTreatmentsTable();
    renderMonitoringTable();
    renderStatusSummary();
    renderStatusCharts();
    populateOpportunityDropdowns();
});

function renderOpportunitiesTable() {
    const tbody = document.querySelector('#opportunitiesTable tbody');
    if (!tbody) return;

    tbody.innerHTML = '';
    opportunities.forEach(opportunity => {
        const row = document.createElement('tr');

        // Calculate total impact and score
        const totalImpact = (opportunity.strategicImpact + opportunity.serviceImpact +
                           opportunity.financialImpact + opportunity.reputationImpact) / 4;
        const score = opportunity.probability + Math.round(totalImpact);

        let priorityBadge = '';
        if (score >= 5) {
            priorityBadge = '<span class="badge bg-danger">1st Priority</span>';
        } else if (score >= 3) {
            priorityBadge = '<span class="badge bg-warning">2nd Priority</span>';
        } else {
            priorityBadge = '<span class="badge bg-success">3rd Priority</span>';
        }

        row.innerHTML = `
            <td>${opportunity.id}</td>
            <td>${opportunity.description}</td>
            <td>${opportunity.probability}</td>
            <td>${Math.round(totalImpact)}</td>
            <td>${score}</td>
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
        const monitoring = monitoringStatuses.find(m => m.opportunityId === opportunity.id);
        const row = document.createElement('tr');
        row.innerHTML = `
            <td class="text-center">${opportunity.id}</td>
            <td>${opportunity.indicator}</td>
            <td class="text-center">${monitoring ? monitoring.q1 : 'N'}</td>
            <td class="text-center">${monitoring ? monitoring.q2 : 'N'}</td>
            <td class="text-center">${monitoring ? monitoring.q3 : 'N'}</td>
            <td class="text-center">${monitoring ? monitoring.q4 : 'N'}</td>
            <td class="text-center">
                <button class="btn btn-primary btn-sm" onclick="openMonitoringModal('${opportunity.id}')">
                    <i class="fe-edit"></i> Update
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

// Process monitoring data for charts
function processChartData() {
    const quarters = ['q1', 'q2', 'q3', 'q4'];
    const counts = {
        Y: [0, 0, 0, 0],
        N: [0, 0, 0, 0]
    };

    quarters.forEach((quarter, index) => {
        monitoringStatuses.forEach(status => {
            if (status[quarter] === 'Y') {
                counts.Y[index]++;
            } else {
                counts.N[index]++;
            }
        });
    });

    return {
        labels: ['Q1', 'Q2', 'Q3', 'Q4'],
        datasets: [
            {
                label: 'Yes (Y)',
                data: counts.Y,
                backgroundColor: 'rgba(39, 174, 96, 0.7)',
                borderColor: 'rgba(39, 174, 96, 1)',
                borderWidth: 1
            },
            {
                label: 'No (N)',
                data: counts.N,
                backgroundColor: 'rgba(231, 76, 60, 0.7)',
                borderColor: 'rgba(231, 76, 60, 1)',
                borderWidth: 1
            }
        ]
    };
}

// Render status summary table
function renderStatusSummary() {
    const summaryTableBody = document.querySelector('#statusSummaryTable tbody');
    if (!summaryTableBody) return;

    const chartData = processChartData();

    summaryTableBody.innerHTML = `
        <tr>
            <td><span class="status-yes">Yes (Y)</span></td>
            <td class="status-yes">${chartData.datasets[0].data[0]}</td>
            <td class="status-yes">${chartData.datasets[0].data[1]}</td>
            <td class="status-yes">${chartData.datasets[0].data[2]}</td>
            <td class="status-yes">${chartData.datasets[0].data[3]}</td>
        </tr>
        <tr>
            <td><span class="status-no">No (N)</span></td>
            <td class="status-no">${chartData.datasets[1].data[0]}</td>
            <td class="status-no">${chartData.datasets[1].data[1]}</td>
            <td class="status-no">${chartData.datasets[1].data[2]}</td>
            <td class="status-no">${chartData.datasets[1].data[3]}</td>
        </tr>
    `;
}

// Render pie charts with percentage labels
function renderStatusCharts() {
    if (typeof Chart === 'undefined') {
        console.warn('Chart.js not loaded');
        return;
    }

    // Destroy existing charts if any
    pieCharts.forEach(chart => chart.destroy());
    pieCharts = [];

    const chartData = processChartData();
    const quarters = ['Q1', 'Q2', 'Q3', 'Q4'];
    const canvases = [
        document.getElementById('q1PieChart'),
        document.getElementById('q2PieChart'),
        document.getElementById('q3PieChart'),
        document.getElementById('q4PieChart')
    ];

    quarters.forEach((quarter, index) => {
        const canvas = canvases[index];
        if (!canvas) return;

        const total = chartData.datasets[0].data[index] + chartData.datasets[1].data[index];
        const data = {
            labels: ['Yes (Y)', 'No (N)'],
            datasets: [{
                data: [chartData.datasets[0].data[index], chartData.datasets[1].data[index]],
                backgroundColor: [
                    'rgba(39, 174, 96, 0.7)',
                    'rgba(231, 76, 60, 0.7)'
                ],
                borderColor: [
                    'rgba(39, 174, 96, 1)',
                    'rgba(231, 76, 60, 1)'
                ],
                borderWidth: 1
            }]
        };

        const chart = new Chart(canvas, {
            type: 'pie',
            data: data,
            options: {
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: {
                            padding: 10,
                            font: {
                                size: 12
                            }
                        }
                    },
                    datalabels: {
                        formatter: (value, ctx) => {
                            const total = ctx.dataset.data.reduce((a, b) => a + b, 0);
                            const percentage = total > 0 ? Math.round((value / total) * 100) : 0;
                            return percentage > 0 ? percentage + '%' : '';
                        },
                        color: '#fff',
                        font: {
                            weight: 'bold',
                            size: 14
                        }
                    }
                },
                responsive: true,
                maintainAspectRatio: false
            }
        });

        pieCharts.push(chart);
    });
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
        document.getElementById('strategicImpact').value = opportunity.strategicImpact;
        document.getElementById('serviceImpact').value = opportunity.serviceImpact;
        document.getElementById('financialImpact').value = opportunity.financialImpact;
        document.getElementById('reputationImpact').value = opportunity.reputationImpact;
        document.getElementById('actions').value = opportunity.actions;
        document.getElementById('responsibility').value = opportunity.responsibility;
        document.getElementById('timeline').value = opportunity.timeline;
        document.getElementById('indicator').value = opportunity.indicator;
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

function openMonitoringModal(opportunityId) {
    const opportunity = opportunities.find(o => o.id === opportunityId);
    const monitoring = monitoringStatuses.find(m => m.opportunityId === opportunityId);

    if (opportunity) {
        document.getElementById('monitoringModalTitle').textContent = `Update Monitoring Status - ${opportunityId}`;
        document.getElementById('monitoringOpportunityId').value = opportunityId;
        document.getElementById('monitoringIndicator').value = opportunity.indicator;

        if (monitoring) {
            document.getElementById('q1Status').value = monitoring.q1;
            document.getElementById('q2Status').value = monitoring.q2;
            document.getElementById('q3Status').value = monitoring.q3;
            document.getElementById('q4Status').value = monitoring.q4;
        } else {
            document.getElementById('q1Status').value = 'N';
            document.getElementById('q2Status').value = 'N';
            document.getElementById('q3Status').value = 'N';
            document.getElementById('q4Status').value = 'N';
        }

        document.getElementById('monitoringModal').style.display = 'block';
    }
}

function closeMonitoringModal() {
    document.getElementById('monitoringModal').style.display = 'none';
}

function saveMonitoringStatus() {
    const opportunityId = document.getElementById('monitoringOpportunityId').value;
    const q1 = document.getElementById('q1Status').value;
    const q2 = document.getElementById('q2Status').value;
    const q3 = document.getElementById('q3Status').value;
    const q4 = document.getElementById('q4Status').value;

    // Find existing monitoring record or create new one
    let monitoring = monitoringStatuses.find(m => m.opportunityId === opportunityId);
    if (monitoring) {
        monitoring.q1 = q1;
        monitoring.q2 = q2;
        monitoring.q3 = q3;
        monitoring.q4 = q4;
    } else {
        const opportunity = opportunities.find(o => o.id === opportunityId);
        monitoringStatuses.push({
            opportunityId: opportunityId,
            indicator: opportunity.indicator,
            q1: q1,
            q2: q2,
            q3: q3,
            q4: q4
        });
    }

    // Refresh displays
    renderMonitoringTable();
    renderStatusSummary();
    renderStatusCharts();
    closeMonitoringModal();

    alert('Monitoring status updated successfully!');
}

function formatDate(dateString) {
    const date = new Date(dateString);
    return date.toLocaleDateString('en-US', {
        year: 'numeric',
        month: 'short',
        day: 'numeric'
    });
}

// Tab switching functionality with chart refresh
document.addEventListener('DOMContentLoaded', function() {
    const tabLinks = document.querySelectorAll('#opportunityTabs .nav-link');
    tabLinks.forEach(tab => {
        tab.addEventListener('shown.bs.tab', function(e) {
            const targetTab = e.target.getAttribute('href');
            if (targetTab === '#monitoring') {
                // Refresh charts when monitoring tab is shown
                setTimeout(() => {
                    renderStatusCharts();
                }, 100);
            }
        });
    });
});

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
    const monitoringModal = document.getElementById('monitoringModal');

    if (event.target == opportunityModal) {
        closeOpportunityModal();
    }
    if (event.target == treatmentModal) {
        closeTreatmentModal();
    }
    if (event.target == monitoringModal) {
        closeMonitoringModal();
    }
}
</script>

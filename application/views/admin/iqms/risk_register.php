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
                    <span class="info-value">FM-PL-06</span>
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


<input type="hidden" id="iqmsModuleCode" value="RISK_REGISTER">
<input type="hidden" id="iqmsOfficeId" value="10">
<input type="hidden" id="iqmsProcessId" value="1">
<input type="hidden" id="iqmsFiscalYear" value="2025">



        <!-- Tab Navigation -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-tabs nav-bordered" id="riskTabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="register-tab" data-bs-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="true">
                                    Risk Register
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="treatment-tab" data-bs-toggle="tab" href="#treatment" role="tab" aria-controls="treatment" aria-selected="false">
                                    Risk Treatment
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="monitoring-tab" data-bs-toggle="tab" href="#monitoring" role="tab" aria-controls="monitoring" aria-selected="false">
                                    Risk Monitoring
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="criteria-tab" data-bs-toggle="tab" href="#criteria" role="tab" aria-controls="criteria" aria-selected="false">
                                    Rating Criteria
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content" id="riskTabContent">
                            <!-- Risk Register Tab -->
                            <div class="tab-pane fade show active" id="register" role="tabpanel" aria-labelledby="register-tab">
                                <!-- Filters -->
                                <div class="row mb-3 mt-3">
                                    <div class="col-md-3">
                                        <label for="filter-priority">Priority</label>
                                        <select id="filter-priority" class="form-control">
                                            <option value="">All Priorities</option>
                                            <option value="1">1st Priority</option>
                                            <option value="2">2nd Priority</option>
                                            <option value="3">3rd Priority</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="filter-score">Risk Score</label>
                                        <select id="filter-score" class="form-control">
                                            <option value="">All Scores</option>
                                            <option value="6">6 (High)</option>
                                            <option value="5">5 (Medium-High)</option>
                                            <option value="4">4 (Medium)</option>
                                            <option value="3">3 (Low)</option>
                                            <option value="2">2 (Very Low)</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="search-risk">Search</label>
                                        <input type="text" id="search-risk" class="form-control" placeholder="Search risks...">
                                    </div>
                                    <div class="col-md-2 text-right" style="padding-top: 25px;">
                                        <button id="add-risk-btn" class="iqms-btn iqms-btn-success">
                                            <i class="fe-plus"></i> Add Risk
                                        </button>
                                    </div>
                                </div>

                                <table id="risks-table" class="table dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Risk Description</th>
                                            <th>Potential Cause</th>
                                            <th>Potential Impact</th>
                                            <th>Category</th>
                                            <th>Probability</th>
                                            <th>Impact</th>
                                            <th>Score</th>
                                            <th>Priority</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Data will be populated by JavaScript -->
                                    </tbody>
                                </table>
                            </div>


                            <!-- Risk Treatment Tab -->
                            <div class="tab-pane fade" id="treatment" role="tabpanel" aria-labelledby="treatment-tab">
                                <div class="row mb-3 mt-3">
                                    <div class="col-md-4">
                                        <label for="treatment-risk-id">Risk ID</label>
                                        <select id="treatment-risk-id" class="form-control">
                                            <option value="">All Risks</option>
                                            <!-- Will be populated by JavaScript -->
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="treatment-status">Status</label>
                                        <select id="treatment-status" class="form-control">
                                            <option value="">All Statuses</option>
                                            <option value="not-started">Not Started</option>
                                            <option value="in-progress">In Progress</option>
                                            <option value="completed">Completed</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 text-right" style="padding-top: 25px;">
                                        <!-- Add Treatment removed by requirement: all risks created via Risk Register -->
                                    </div>
                                </div>

                                <table id="treatment-table" class="table dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <!-- Essential Risk Register fields (read-only) + Treatment fields -->
                                            <th>Risk ID</th>
                                            <th>Risk Description</th>
                                            <th>Potential Cause</th>
                                            <th>Treatment Action</th>
                                            <th>Treatment Description</th>
                                            <th>Responsible</th>
                                            <th>Start Date</th>
                                            <th>Due Date</th>
                                            <th>Progress</th>
                                            <th>Treatment Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Data will be populated by JavaScript -->
                                    </tbody>
                                </table>
                            </div>

                            <!-- Risk Monitoring Tab -->
                            <div class="tab-pane fade" id="monitoring" role="tabpanel" aria-labelledby="monitoring-tab">
                                <div class="row mb-3 mt-3">
                                    <div class="col-md-12 text-right">
                                        <button id="refresh-monitoring" class="btn btn-primary waves-effect waves-light">
                                            <i class="fe-refresh-cw"></i> Refresh
                                        </button>
                                    </div>
                                </div>

                                <!-- Chart Container -->
                                <div class="chart-container mb-4">
                                    <div class="quarter-chart">
                                        <canvas id="q1-chart"></canvas>
                                    </div>
                                    <div class="quarter-chart">
                                        <canvas id="q2-chart"></canvas>
                                    </div>
                                    <div class="quarter-chart">
                                        <canvas id="q3-chart"></canvas>
                                    </div>
                                    <div class="quarter-chart">
                                        <canvas id="q4-chart"></canvas>
                                    </div>
                                </div>

                                <table id="monitoring-table" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th rowspan="2" class="text-center">Risk ID</th>
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

                            <!-- Risk Criteria Tab -->
                            <div class="tab-pane fade" id="criteria" role="tabpanel" aria-labelledby="criteria-tab">
                                <div class="mt-3">
                                    <h4>Probability Criteria</h4>
                                    <table class="table table-striped">
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

                                    <h4>Impact Criteria</h4>
                                    <table class="table table-striped">
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
                                                <td>Critical service disruption affecting objectives</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Financial</td>
                                                <td>Significant effect on budget utilization (>50% unutilized funds)</td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Reputation</td>
                                                <td>More than 10 complaints, significant customer impact</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <h4>Risk Evaluation Rating</h4>
                                    <table class="table table-striped">
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
                                                <td>Risk Elimination or Mitigation</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>1st Priority</td>
                                                <td>Risk Mitigation</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>2nd Priority</td>
                                                <td>Risk Mitigation</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>2nd Priority</td>
                                                <td>Risk Mitigation or Transfer</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>3rd Priority</td>
                                                <td>Risk Mitigation or Transfer</td>
                                            </tr>
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

<!-- Add/Edit Risk Modal -->
<div id="risk-modal" class="iqms-modal">
    <div class="iqms-modal-content" style="max-width: 900px;">
        <div class="iqms-modal-header">
            <h3 class="iqms-modal-title" id="modal-title">Add New Risk</h3>
            <span class="iqms-close" onclick="closeRiskModal()">&times;</span>
        </div>

        <form class="iqms-form" id="risk-form">
            <input type="hidden" id="risk-id">

            <div class="iqms-form-group">
                <label class="iqms-form-label" for="risk-description">Risk Description*</label>
                <textarea id="risk-description" class="iqms-form-control" rows="3" required></textarea>
            </div>

            <div class="iqms-form-group">
                <label class="iqms-form-label" for="potential-cause">Potential Cause*</label>
                <textarea id="potential-cause" class="iqms-form-control" rows="3" required></textarea>
            </div>

            <div class="iqms-form-group">
                <label class="iqms-form-label" for="potential-impact">Potential Impact*</label>
                <textarea id="potential-impact" class="iqms-form-control" rows="3" required></textarea>
            </div>

            <div class="iqms-form-row">
                <div class="iqms-form-group">
                    <label class="iqms-form-label" for="risk-category">Category*</label>
                    <select id="risk-category" class="iqms-form-control" required>
                        <option value="">Select Category</option>
                        <option value="service-delivery">Service Delivery</option>
                        <option value="financial">Financial</option>
                        <option value="reputation">Reputation</option>
                        <option value="legal-compliance">Legal Compliance</option>
                        <option value="data-privacy">Data Privacy</option>
                    </select>
                </div>
                <div class="iqms-form-group">
                    <label class="iqms-form-label" for="risk-owner">Risk Owner</label>
                    <input type="text" id="risk-owner" class="iqms-form-control">
                </div>
            </div>

            <div class="iqms-form-row">
                <div class="iqms-form-group">
                    <label class="iqms-form-label" for="risk-probability">Probability Score*</label>
                    <select id="risk-probability" class="iqms-form-control" required>
                        <option value="">Select Probability</option>
                        <option value="3">High (10-50%) - Known occurrence within 2 years</option>
                        <option value="2">Medium (10-50%) - Known occurrence >3 years ago</option>
                        <option value="1">Low (<10%) - Never happened before</option>
                    </select>
                </div>
                <div class="iqms-form-group">
                    <label class="iqms-form-label" for="risk-impact">Impact Score*</label>
                    <select id="risk-impact" class="iqms-form-control" required>
                        <option value="">Select Impact</option>
                        <option value="3">High - Critical impact on objectives</option>
                        <option value="2">Medium - Significant financial impact</option>
                        <option value="1">Low - Minor reputation impact</option>
                    </select>
                </div>
            </div>

            <div class="iqms-form-row">
                <div class="iqms-form-group">
                    <label class="iqms-form-label" for="risk-score">Risk Score</label>
                    <input type="text" id="risk-score" class="iqms-form-control" readonly>
                </div>
                <div class="iqms-form-group">
                    <label class="iqms-form-label" for="risk-priority">Priority</label>
                    <input type="text" id="risk-priority" class="iqms-form-control" readonly>
                </div>
            </div>

            <div class="iqms-form-row">
                <div class="iqms-form-group">
                    <label class="iqms-form-label" for="risk-status">Status</label>
                    <select id="risk-status" class="iqms-form-control">
                        <option value="open">Open</option>
                        <option value="in-progress">In Progress</option>
                        <option value="closed">Closed</option>
                    </select>
                </div>
                <div class="iqms-form-group">
                    <label class="iqms-form-label" for="effectiveness-indicator">Effectiveness Indicator (M)*</label>
                    <input type="text" id="effectiveness-indicator" class="iqms-form-control" required>
                </div>
            </div>

            <div class="mt-4">
                <button type="submit" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-secondary" onclick="closeRiskModal()">Cancel</button>
            </div>
        </form>
    </div>
</div>

<!-- Add/Edit Treatment Modal -->
<div id="treatment-modal" class="modal" style="display: none; position: fixed; z-index: 100; left: 0; top: 0; width: 100%; height: 100%; overflow: auto; background-color: rgba(0,0,0,0.4);">
    <div class="modal-content" style="background-color: white; margin: 5% auto; padding: 20px; border-radius: 5px; width: 80%; max-width: 800px; box-shadow: 0 4px 8px rgba(0,0,0,0.2);">
        <span class="close" style="color: #aaa; float: right; font-size: 28px; font-weight: bold; cursor: pointer;">&times;</span>
        <h2 id="treatment-modal-title">Add Treatment Plan</h2>
        <form id="treatment-form">
            <input type="hidden" id="treatment-id">
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="treatment-risk-code" style="display: block; margin-bottom: 5px; font-weight: 500;">Risk</label>
                <input type="text" id="treatment-risk-code" class="form-control" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;" readonly>
                <input type="hidden" id="treatment-risk-id-input">
            </div>
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="treatment-action" style="display: block; margin-bottom: 5px; font-weight: 500;">Action*</label>
                <select id="treatment-action" class="form-control" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;" required>
                    <option value="">Select Action</option>
                    <option value="elimination">Risk Elimination</option>
                    <option value="mitigation">Risk Mitigation</option>
                    <option value="transfer">Risk Transfer</option>
                    <option value="acceptance">Risk Acceptance</option>
                </select>
            </div>
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="treatment-description" style="display: block; margin-bottom: 5px; font-weight: 500;">Description*</label>
                <textarea id="treatment-description" class="form-control" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; min-height: 100px; resize: vertical;" required></textarea>
            </div>
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="treatment-responsible" style="display: block; margin-bottom: 5px; font-weight: 500;">Responsible*</label>
                <input type="text" id="treatment-responsible" class="form-control" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;" required>
            </div>
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="treatment-start-date" style="display: block; margin-bottom: 5px; font-weight: 500;">Start Date*</label>
                <input type="date" id="treatment-start-date" class="form-control" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;" required>
            </div>
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="treatment-due-date" style="display: block; margin-bottom: 5px; font-weight: 500;">Due Date*</label>
                <input type="date" id="treatment-due-date" class="form-control" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;" required>
            </div>
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="treatment-progress" style="display: block; margin-bottom: 5px; font-weight: 500;">Progress (%)*</label>
                <input type="number" id="treatment-progress" class="form-control" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;" min="0" max="100" required>
            </div>
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="treatment-status-select" style="display: block; margin-bottom: 5px; font-weight: 500;">Status*</label>
                <select id="treatment-status-select" class="form-control" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;" required>
                    <option value="">Select Status</option>
                    <option value="not-started">Not Started</option>
                    <option value="in-progress">In Progress</option>
                    <option value="completed">Completed</option>
                </select>
            </div>
            <div class="action-buttons" style="display: flex; gap: 10px; margin-top: 10px;">
                <button type="submit" class="btn btn-success" style="background-color: #27ae60; color: white; border: none; padding: 10px 20px; border-radius: 4px; cursor: pointer;">Save</button>
                <button type="button" class="btn btn-danger" id="cancel-treatment" style="background-color: #e74c3c; color: white; border: none; padding: 10px 20px; border-radius: 4px; cursor: pointer;">Cancel</button>
            </div>
        </form>
    </div>
</div>

<!-- Update Monitoring Modal -->
<div id="monitoring-modal" class="modal" style="display: none; position: fixed; z-index: 100; left: 0; top: 0; width: 100%; height: 100%; overflow: auto; background-color: rgba(0,0,0,0.4);">
    <div class="modal-content" style="background-color: white; margin: 5% auto; padding: 20px; border-radius: 5px; width: 80%; max-width: 800px; box-shadow: 0 4px 8px rgba(0,0,0,0.2);">
        <span class="close" style="color: #aaa; float: right; font-size: 28px; font-weight: bold; cursor: pointer;">&times;</span>
        <h2 id="monitoring-modal-title">Update Monitoring</h2>
        <form id="monitoring-form">
            <input type="hidden" id="monitoring-risk-id">
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="q1-status" style="display: block; margin-bottom: 5px; font-weight: 500;">Q1 Status (Y/N)*</label>
                <select id="q1-status" class="form-control" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;" required>
                    <option value="">Select</option>
                    <option value="Y">Yes</option>
                    <option value="N">No</option>
                </select>
            </div>
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="q2-status" style="display: block; margin-bottom: 5px; font-weight: 500;">Q2 Status (Y/N)</label>
                <select id="q2-status" class="form-control" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                    <option value="">Select</option>
                    <option value="Y">Yes</option>
                    <option value="N">No</option>
                </select>
            </div>
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="q3-status" style="display: block; margin-bottom: 5px; font-weight: 500;">Q3 Status (Y/N)</label>
                <select id="q3-status" class="form-control" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                    <option value="">Select</option>
                    <option value="Y">Yes</option>
                    <option value="N">No</option>
                </select>
            </div>
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="q4-status" style="display: block; margin-bottom: 5px; font-weight: 500;">Q4 Status (Y/N)</label>
                <select id="q4-status" class="form-control" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                    <option value="">Select</option>
                    <option value="Y">Yes</option>
                    <option value="N">No</option>
                </select>
            </div>
            <div class="action-buttons" style="display: flex; gap: 10px; margin-top: 10px;">
                <button type="submit" class="btn btn-success" style="background-color: #27ae60; color: white; border: none; padding: 10px 20px; border-radius: 4px; cursor: pointer;">Save</button>
                <button type="button" class="btn btn-danger" id="cancel-monitoring" style="background-color: #e74c3c; color: white; border: none; padding: 10px 20px; border-radius: 4px; cursor: pointer;">Cancel</button>
            </div>
        </form>
    </div>
</div>

<style>
.chart-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    gap: 15px;
    margin: 20px 0;
    padding: 20px;
    background-color: #f8f9fa;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}

.quarter-chart {
    flex: 1 1 30%;
    max-width: 200px;
    margin: 5px;
    background-color: white;
    border-radius: 8px;
    padding: 15px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    height: 250px;
}

.quarter-chart canvas {
    max-height: 180px;
}

@media (max-width: 600px) {
    .chart-container {
        flex-direction: column;
        align-items: center;
        padding: 10px;
    }

    .quarter-chart {
        max-width: 100%;
        margin: 10px 0;
    }
}
</style>

<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.4/dist/chart.umd.min.js"></script>
<script>
    // Corrected sample data for the risk register
    const risks = [
        {
            id: "RR-1",
            description: "Dissatisfied clients",
            potentialCause: [
                { id: "1.1", description: "Training not applicable to business level" },
                { id: "1.2", description: "Poor trainer engagement" }
            ],
            potentialImpact: "1.1 Low CSF rating",
            category: "Service Delivery",
            probability: 2,
            impact: 3,
            score: 5,
            priority: "1st",
            status: "open",
            date: "2025-06-05",
            owner: "Training Coordinator",
            effectivenessIndicator: "100% Satisfactory CSF rating",
            monitoring: { q1: "Y", q2: "N", q3: "", q4: "" },
            monitoringColor: "#d3e6f5"
        },
        {
            id: "RR-2",
            description: "Spread of communicable diseases",
            potentialCause: [
                { id: "2.1", description: "Cramped training venue" },
                { id: "2.2", description: "Poor ventilation" }
            ],
            potentialImpact: "2.1 Low CSF rating",
            category: "Service Delivery",
            probability: 2,
            impact: 3,
            score: 5,
            priority: "1st",
            status: "open",
            date: "2025-06-04",
            owner: "Training Coordinator",
            effectivenessIndicator: "100% Satisfactory CSF rating",
            monitoring: { q1: "Y", q2: "Y", q3: "N", q4: "" },
            monitoringColor: "#e6f5e1"
        },
        {
            id: "RR-3",
            description: "Misalignment of goals and objectives",
            potentialCause: [
                { id: "3.1", description: "Unclear MOA/MOU terms" },
                { id: "3.2", description: "Lack of stakeholder consultation" }
            ],
            potentialImpact: "Lack of impact on objectives or failure to meet intended outcomes",
            category: "Reputation",
            probability: 1,
            impact: 2,
            score: 3,
            priority: "2nd",
            status: "open",
            date: "2025-06-05",
            owner: "Training Coordinator",
            effectivenessIndicator: "Number of MOAs/MOUs signed",
            monitoring: { q1: "N", q2: "", q3: "", q4: "Y" },
            monitoringColor: "#fff3cd"
        },
        {
            id: "RR-4",
            description: "Legal and Contractual Implications",
            potentialCause: [
                { id: "4.1", description: "Delayed document submission" },
                { id: "4.2", description: "Incomplete contracts" }
            ],
            potentialImpact: "4.1 Damaged reputation and trust",
            category: "Legal Compliance",
            probability: 2,
            impact: 2,
            score: 4,
            priority: "2nd",
            status: "open",
            date: "2025-06-05",
            owner: "Training Coordinator",
            effectivenessIndicator: "Zero incidence of risk occurrence",
            monitoring: { q1: "Y", q2: "N", q3: "Y", q4: "" },
            monitoringColor: "#f8d7d8"
        },
        {
            id: "RR-5",
            description: "Irrelevant training programs",
            potentialCause: [
                { id: "5.1", description: "Inadequate TNA" },
                { id: "5.2", description: "Outdated training content" }
            ],
            potentialImpact: "5.1 Training objectives are not met, Low CSF rating",
            category: "Service Delivery",
            probability: 2,
            impact: 3,
            score: 5,
            priority: "1st",
            status: "open",
            date: "2025-06-05",
            owner: "Training Coordinator",
            effectivenessIndicator: "100% Satisfactory CSF rating",
            monitoring: { q1: "N", q2: "Y", q3: "N", q4: "Y" },
            monitoringColor: "#d3e6f5"
        },
        {
            id: "RR-6",
            description: "Trainings not implemented as planned",
            potentialCause: [
                { id: "6.1", description: "Delayed approval of project proposals" },
                { id: "6.2", description: "Budget constraints" }
            ],
            potentialImpact: "6.1 Unmet targets",
            category: "Service Delivery",
            probability: 2,
            impact: 2,
            score: 4,
            priority: "2nd",
            status: "open",
            date: "2025-06-05",
            owner: "Training Coordinator",
            effectivenessIndicator: "Zero incidence of risk occurrence",
            monitoring: { q1: "Y", q2: "Y", q3: "Y", q4: "N" },
            monitoringColor: "#e6f5e1"
        }
    ];

    // Corrected sample data for risk treatments
    const treatments = [
        {
            id: 1,
            riskId: "RR-1",
            action: "mitigation",
            description: "Conduct a thorough Training Needs Assessment (TNA) before designing training programs",
            responsible: "Training Coordinator",
            startDate: "2025-05-01",
            dueDate: "2025-06-15",
            progress: 30,
            status: "in-progress"
        },
        {
            id: 2,
            riskId: "RR-2",
            action: "mitigation",
            description: "Ensure training venues are spacious and well-ventilated",
            responsible: "Training Coordinator",
            startDate: "2025-05-06",
            dueDate: "2025-06-30",
            progress: 10,
            status: "not-started"
        },
        {
            id: 3,
            riskId: "RR-3",
            action: "mitigation",
            description: "Clearly define goals, objectives, timelines, and deliverables in MOA/MOU",
            responsible: "Training Coordinator",
            startDate: "2025-05-01",
            dueDate: "2025-06-15",
            progress: 75,
            status: "in-progress"
        },
        {
            id: 4,
            riskId: "RR-4",
            action: "mitigation",
            description: "Streamline submission process for pertinent documents",
            responsible: "Training Coordinator",
            startDate: "2025-05-06",
            dueDate: "2025-07-30",
            progress: 0,
            status: "not-started"
        },
        {
            id: 5,
            riskId: "RR-5",
            action: "mitigation",
            description: "Implement comprehensive TNA to ensure effective training programs",
            responsible: "Training Coordinator",
            startDate: "2025-04-05",
            dueDate: "2025-05-30",
            progress: 100,
            status: "completed"
        }
    ];

    // DOM Elements
    const tabs = document.querySelectorAll('.tab');
    const tabContents = document.querySelectorAll('.tab-content');
    const riskModal = document.getElementById('risk-modal');
    const treatmentModal = document.getElementById('treatment-modal');
    const monitoringModal = document.getElementById('monitoring-modal');
    const addRiskBtn = document.getElementById('add-risk-btn');
    const addTreatmentBtn = document.getElementById('add-treatment-btn');
    const refreshMonitoringBtn = document.getElementById('refresh-monitoring');
    const cancelRiskBtn = document.getElementById('cancel-risk');
    const cancelTreatmentBtn = document.getElementById('cancel-treatment');
    const cancelMonitoringBtn = document.getElementById('cancel-monitoring');
    const closeButtons = document.querySelectorAll('.close');
    const riskForm = document.getElementById('risk-form');
    const treatmentForm = document.getElementById('treatment-form');
    const monitoringForm = document.getElementById('monitoring-form');
    const risksTable = document.querySelector('#risks-table tbody');
    const treatmentTable = document.querySelector('#treatment-table tbody');
    const monitoringTable = document.querySelector('#monitoring-table tbody');
    const riskIdSelect = document.getElementById('treatment-risk-id-select');
    const filterRiskId = document.getElementById('treatment-risk-id');
    const probabilitySelect = document.getElementById('risk-probability');
    const impactSelect = document.getElementById('risk-impact');
    const riskScore = document.getElementById('risk-score');
    const riskPriority = document.getElementById('risk-priority');

    // Chart variables
    let charts = {
        q1: null,
        q2: null,
        q3: null,
        q4: null
    };

    // Initialize the app
    document.addEventListener('DOMContentLoaded', function() {
        renderRisksTable();
        renderTreatmentsTable();
        renderMonitoringTable();
        populateRiskIdDropdowns();

        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                tabs.forEach(t => t.classList.remove('active'));
                tabContents.forEach(c => c.classList.remove('active'));
                tab.classList.add('active');
                document.getElementById(tab.dataset.tab).classList.add('active');

                // Update tab styles
                tabs.forEach(t => {
                    if (t.classList.contains('active')) {
                        t.style.backgroundColor = 'white';
                        t.style.borderBottom = '1px solid white';
                        t.style.marginBottom = '-1px';
                        t.style.fontWeight = 'bold';
                        t.style.color = '#3498db';
                    } else {
                        t.style.backgroundColor = '#f1f1f1';
                        t.style.borderBottom = 'none';
                        t.style.marginBottom = '0';
                        t.style.fontWeight = 'normal';
                        t.style.color = '#333';
                    }
                });

                // Update tab content styles
                tabContents.forEach(c => {
                    if (c.classList.contains('active')) {
                        c.style.display = 'block';
                    } else {
                        c.style.display = 'none';
                    }
                });

                if (tab.getAttribute('aria-controls') === 'monitoring') {
                    renderMonitoringTable();
                }
            });
        });

        if (addRiskBtn) addRiskBtn.addEventListener('click', () => openRiskModal());
        if (addTreatmentBtn) addTreatmentBtn.addEventListener('click', () => openTreatmentModal());
        if (refreshMonitoringBtn) refreshMonitoringBtn.addEventListener('click', () => {
            renderMonitoringTable();
            renderMonitoringChart();
        });
        if (cancelRiskBtn) cancelRiskBtn.addEventListener('click', () => closeRiskModal());
        if (cancelTreatmentBtn) cancelTreatmentBtn.addEventListener('click', () => closeTreatmentModal());
        if (cancelMonitoringBtn) cancelMonitoringBtn.addEventListener('click', () => closeMonitoringModal());

        closeButtons.forEach(btn => {
            btn.addEventListener('click', function() {
                const modal = this.closest('.modal');
                modal.style.display = 'none';
            });
        });

        window.addEventListener('click', (e) => {
            if (e.target.classList.contains('modal')) {
                e.target.style.display = 'none';
            }
        });

        if (riskForm) riskForm.addEventListener('submit', handleRiskSubmit);
        if (treatmentForm) treatmentForm.addEventListener('submit', handleTreatmentSubmit);
        if (monitoringForm) monitoringForm.addEventListener('submit', handleMonitoringSubmit);

        if (probabilitySelect) probabilitySelect.addEventListener('change', calculateRiskScore);
        if (impactSelect) impactSelect.addEventListener('change', calculateRiskScore);

        const applyFiltersBtn = document.getElementById('apply-filters');
        const resetFiltersBtn = document.getElementById('reset-filters');
        const applyTreatmentFiltersBtn = document.getElementById('apply-treatment-filters');

        if (applyFiltersBtn) applyFiltersBtn.addEventListener('click', applyRiskFilters);
        if (resetFiltersBtn) resetFiltersBtn.addEventListener('click', resetRiskFilters);
        if (applyTreatmentFiltersBtn) applyTreatmentFiltersBtn.addEventListener('click', applyTreatmentFilters);
    });

    // Render functions
    function renderRisksTable(filteredRisks = risks) {
        if (!risksTable) return;

        risksTable.innerHTML = '';
        filteredRisks.forEach(risk => {
            const row = document.createElement('tr');
            row.className = `priority-${risk.priority === '1st' ? '1' : risk.priority === '2nd' ? '2' : '3'}`;

            let statusBadge = '';
            if (risk.status === 'open') {
                statusBadge = '<span style="display: inline-block; width: 12px; height: 12px; border-radius: 50%; margin-right: 5px; background-color: #e74c3c;"></span>Open';
            } else if (risk.status === 'in-progress') {
                statusBadge = '<span style="display: inline-block; width: 12px; height: 12px; border-radius: 50%; margin-right: 5px; background-color: #f39c12;"></span>In Progress';
            } else {
                statusBadge = '<span style="display: inline-block; width: 12px; height: 12px; border-radius: 50%; margin-right: 5px; background-color: #27ae60;"></span>Closed';
            }

            let priorityBadge = '';
            if (risk.priority === '1st') {
                priorityBadge = '<span class="badge" style="display: inline-block; padding: 3px 8px; border-radius: 20px; font-size: 12px; font-weight: bold; text-align: center; white-space: nowrap; background-color: #e74c3c; color: white;">1st Priority</span>';
            } else if (risk.priority === '2nd') {
                priorityBadge = '<span class="badge" style="display: inline-block; padding: 3px 8px; border-radius: 20px; font-size: 12px; font-weight: bold; text-align: center; white-space: nowrap; background-color: #f39c12; color: white;">2nd Priority</span>';
            } else {
                priorityBadge = '<span class="badge" style="display: inline-block; padding: 3px 8px; border-radius: 20px; font-size: 12px; font-weight: bold; text-align: center; white-space: nowrap; background-color: #27ae60; color: white;">3rd Priority</span>';
            }

            // Handle potential cause array
            const causesList = Array.isArray(risk.potentialCause)
                ? risk.potentialCause.map(cause => `${cause.id}: ${cause.description}`).join('<br>')
                : risk.potentialCause;

            row.innerHTML = `
                <td>${risk.id}</td>
                <td>${risk.description}</td>
                <td>${causesList}</td>
                <td>${risk.potentialImpact}</td>
                <td>${risk.category}</td>
                <td>${risk.probability}</td>
                <td>${risk.impact}</td>
                <td>${risk.score}</td>
                <td>${priorityBadge}</td>
                <td>${statusBadge}</td>
                <td>
                    <button class="btn btn-sm btn-warning edit-risk-btn" data-id="${risk.id}">Edit</button>
                    <button class="btn btn-sm btn-info view-treatment-btn" data-id="${risk.id}">Treatments</button>
                </td>
            `;

            risksTable.appendChild(row);
        });

        document.querySelectorAll('.edit-risk-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const riskId = this.dataset.id;
                editRisk(riskId);
            });
        });

        document.querySelectorAll('.view-treatment-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const riskId = this.dataset.id;
                tabs.forEach(t => t.classList.remove('active'));
                tabContents.forEach(c => c.classList.remove('active'));
                document.querySelector('.tab[data-tab="risk-treatment"]').classList.add('active');
                document.getElementById('risk-treatment').classList.add('active');
                if (filterRiskId) {
                    filterRiskId.value = riskId;
                    applyTreatmentFilters();
                }
            });
        });
    }

    function renderTreatmentsTable(filteredTreatments = treatments) {
        if (!treatmentTable) return;

        treatmentTable.innerHTML = '';
        filteredTreatments.forEach(treatment => {
            // Find the corresponding risk using riskId
            const risk = risks.find(r => r.id === treatment.riskId);
            const riskDescription = risk ? risk.description : 'N/A';
            const potentialCause = risk ? (Array.isArray(risk.potentialCause)
                ? risk.potentialCause.map(cause => `${cause.id}: ${cause.description}`).join('<br>')
                : risk.potentialCause) : 'N/A';

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
                <td>${treatment.riskId}</td>
                <td>${riskDescription}</td>
                <td>${potentialCause}</td>
                <td>${treatment.description}</td>
                <td>${treatment.responsible}</td>
                <td>${formatDate(treatment.startDate)}</td>
                <td>${formatDate(treatment.dueDate)}</td>
                <td>${treatment.progress}%</td>
                <td>${statusBadge}</td>
                <td>
                    <button class="btn btn-sm btn-warning edit-treatment-btn" data-id="${treatment.id}">Edit</button>
                </td>
            `;

            treatmentTable.appendChild(row);
        });

        document.querySelectorAll('.edit-treatment-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const treatmentId = parseInt(this.dataset.id);
                editTreatment(treatmentId);
            });
        });
    }

    function renderMonitoringTable() {
        if (!monitoringTable) return;

        monitoringTable.innerHTML = '';
        risks.forEach(risk => {
            const row = document.createElement('tr');
            row.innerHTML = `
                <td style="background-color: ${risk.monitoringColor}; border: 1px solid #000000; text-align: center;">${risk.id}</td>
                <td style="background-color: ${risk.monitoringColor}; border: 1px solid #000000; text-align: center;">${risk.effectivenessIndicator}</td>
                <td style="background-color: ${risk.monitoringColor}; border: 1px solid #000000; text-align: center;">${risk.monitoring.q1}</td>
                <td style="background-color: ${risk.monitoringColor}; border: 1px solid #000000; text-align: center;">${risk.monitoring.q2}</td>
                <td style="background-color: ${risk.monitoringColor}; border: 1px solid #000000; text-align: center;">${risk.monitoring.q3}</td>
                <td style="background-color: ${risk.monitoringColor}; border: 1px solid #000000; text-align: center;">${risk.monitoring.q4}</td>
                <td style="border: 1px solid #000000; text-align: center;">
                    <button class="btn btn-sm btn-primary update-monitoring-btn" data-id="${risk.id}">Update</button>
                </td>
            `;
            monitoringTable.appendChild(row);
        });

        document.querySelectorAll('.update-monitoring-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const riskId = this.dataset.id;
                openMonitoringModal(riskId);
            });
        });

        // Render charts after table is updated
        renderMonitoringChart();
    }

    function renderMonitoringChart() {
        const counts = getMonitoringCounts();

        const quarters = ['q1', 'q2', 'q3', 'q4'];
        quarters.forEach(quarter => {
            const canvas = document.getElementById(`${quarter}-chart`);
            if (!canvas) return;

            const ctx = canvas.getContext('2d');
            const yesCount = counts[quarter].yes;
            const noCount = counts[quarter].no;
            const total = yesCount + noCount;

            if (total === 0) return; // Skip if no data

            const yesPercent = ((yesCount / total) * 100).toFixed(1);
            const noPercent = ((noCount / total) * 100).toFixed(1);

            // Destroy existing chart if it exists
            if (charts[quarter]) {
                charts[quarter].destroy();
            }

            charts[quarter] = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ['Yes (Y)', 'No (N)'],
                    datasets: [{
                        data: [yesCount, noCount],
                        backgroundColor: ['#27ae60', '#e74c3c'],
                        borderColor: ['#219653', '#c0392b'],
                        borderWidth: 1
                    }]
                },
                options: {
                    plugins: {
                        title: {
                            display: true,
                            text: `${quarter.toUpperCase()} Status Distribution`,
                            font: { size: 12 }
                        },
                        legend: {
                            position: 'bottom',
                            labels: {
                                generateLabels: function(chart) {
                                    const data = chart.data;
                                    return data.labels.map((label, i) => ({
                                        text: `${label} (${i === 0 ? yesPercent : noPercent}%)`,
                                        fillStyle: data.datasets[0].backgroundColor[i],
                                        strokeStyle: data.datasets[0].borderColor[i],
                                        lineWidth: data.datasets[0].borderWidth,
                                        hidden: isNaN(data.datasets[0].data[i]) || data.datasets[0].data[i] === 0,
                                        index: i
                                    }));
                                }
                            }
                        }
                    },
                    responsive: true,
                    maintainAspectRatio: false,
                    aspectRatio: 1.5
                }
            });
        });
    }

    function getMonitoringCounts() {
        const counts = {
            q1: { yes: 0, no: 0 },
            q2: { yes: 0, no: 0 },
            q3: { yes: 0, no: 0 },
            q4: { yes: 0, no: 0 }
        };

        risks.forEach(risk => {
            if (risk.monitoring.q1 === 'Y') counts.q1.yes++;
            else if (risk.monitoring.q1 === 'N') counts.q1.no++;
            if (risk.monitoring.q2 === 'Y') counts.q2.yes++;
            else if (risk.monitoring.q2 === 'N') counts.q2.no++;
            if (risk.monitoring.q3 === 'Y') counts.q3.yes++;
            else if (risk.monitoring.q3 === 'N') counts.q3.no++;
            if (risk.monitoring.q4 === 'Y') counts.q4.yes++;
            else if (risk.monitoring.q4 === 'N') counts.q4.no++;
        });

        return counts;
    }

    function populateRiskIdDropdowns() {
        if (riskIdSelect) {
            riskIdSelect.innerHTML = '<option value="">Select Risk</option>';
            risks.forEach(risk => {
                const option = document.createElement('option');
                option.value = risk.id;
                option.textContent = risk.id;
                riskIdSelect.appendChild(option);
            });
        }

        if (filterRiskId) {
            filterRiskId.innerHTML = '<option value="">All Risks</option>';
            risks.forEach(risk => {
                const option = document.createElement('option');
                option.value = risk.id;
                option.textContent = risk.id;
                filterRiskId.appendChild(option);
            });
        }
    }

    // Modal functions
    function openRiskModal(riskId = null) {
        if (!riskModal) return;

        const modalTitle = document.getElementById('modal-title');
        const riskIdInput = document.getElementById('risk-id');

        if (riskId) {
            modalTitle.textContent = 'Edit Risk';
            riskIdInput.value = riskId;
            // Populate form with existing data
            const risk = risks.find(r => r.id === riskId);
            if (risk) {
                document.getElementById('risk-description').value = risk.description;
                // Handle potential cause array
                const causeText = Array.isArray(risk.potentialCause)
                    ? risk.potentialCause.map(cause => `${cause.id}: ${cause.description}`).join('\n')
                    : risk.potentialCause;
                document.getElementById('potential-cause').value = causeText;
                document.getElementById('potential-impact').value = risk.potentialImpact;
                document.getElementById('risk-category').value = risk.category.toLowerCase().replace(' ', '-');
                document.getElementById('risk-probability').value = risk.probability;
                document.getElementById('risk-impact').value = risk.impact;
                document.getElementById('risk-owner').value = risk.owner;
                document.getElementById('risk-status').value = risk.status;
                document.getElementById('effectiveness-indicator').value = risk.effectivenessIndicator;
                calculateRiskScore();
            }
        } else {
            modalTitle.textContent = 'Add New Risk';
            riskIdInput.value = '';
            document.getElementById('risk-form').reset();
        }

        riskModal.style.display = 'block';
    }

    function closeRiskModal() {
        if (riskModal) {
            riskModal.style.display = 'none';
        }
    }

    function openTreatmentModal(treatmentId = null) {
        if (!treatmentModal) return;

        const modalTitle = document.getElementById('treatment-modal-title');
        const treatmentIdInput = document.getElementById('treatment-id');

        if (treatmentId) {
            modalTitle.textContent = 'Edit Treatment Plan';
            treatmentIdInput.value = treatmentId;
            // Populate form with existing data
            const treatment = treatments.find(t => t.id === treatmentId);
            if (treatment) {
                document.getElementById('treatment-risk-id-select').value = treatment.riskId;
                document.getElementById('treatment-action').value = treatment.action;
                document.getElementById('treatment-description').value = treatment.description;
                document.getElementById('treatment-responsible').value = treatment.responsible;
                document.getElementById('treatment-start-date').value = treatment.startDate;
                document.getElementById('treatment-due-date').value = treatment.dueDate;
                document.getElementById('treatment-progress').value = treatment.progress;
                document.getElementById('treatment-status-select').value = treatment.status;
            }
        } else {
            modalTitle.textContent = 'Add Treatment Plan';
            treatmentIdInput.value = '';
            document.getElementById('treatment-form').reset();
        }

        treatmentModal.style.display = 'block';
    }

    function closeTreatmentModal() {
        if (treatmentModal) {
            treatmentModal.style.display = 'none';
        }
    }

    function openMonitoringModal(riskId) {
        if (!monitoringModal) return;

        const risk = risks.find(r => r.id === riskId);
        if (risk) {
            document.getElementById('monitoring-risk-id').value = riskId;
            document.getElementById('q1-status').value = risk.monitoring.q1;
            document.getElementById('q2-status').value = risk.monitoring.q2;
            document.getElementById('q3-status').value = risk.monitoring.q3;
            document.getElementById('q4-status').value = risk.monitoring.q4;
        }

        monitoringModal.style.display = 'block';
    }

    function closeMonitoringModal() {
        if (monitoringModal) {
            monitoringModal.style.display = 'none';
        }
    }

    function editRisk(riskId) {
        openRiskModal(riskId);
    }

    function editTreatment(treatmentId) {
        openTreatmentModal(treatmentId);
    }

    // Form submission handlers
    function handleRiskSubmit(e) {
        e.preventDefault();
        alert('Risk saved successfully!');
        closeRiskModal();
        renderRisksTable();
    }

    function handleTreatmentSubmit(e) {
        e.preventDefault();
        alert('Treatment plan saved successfully!');
        closeTreatmentModal();
        renderTreatmentsTable();
    }

    function handleMonitoringSubmit(e) {
        e.preventDefault();
        const riskId = document.getElementById('monitoring-risk-id').value;
        const risk = risks.find(r => r.id === riskId);
        if (risk) {
            risk.monitoring.q1 = document.getElementById('q1-status').value;
            risk.monitoring.q2 = document.getElementById('q2-status').value;
            risk.monitoring.q3 = document.getElementById('q3-status').value;
            risk.monitoring.q4 = document.getElementById('q4-status').value;
        }
        alert('Monitoring data updated successfully!');
        closeMonitoringModal();
        renderMonitoringTable();
    }

    function calculateRiskScore() {
        const probability = parseInt(document.getElementById('risk-probability').value) || 0;
        const impact = parseInt(document.getElementById('risk-impact').value) || 0;
        const score = probability * impact;

        document.getElementById('risk-score').value = score;

        let priority = '';
        if (score >= 5) {
            priority = '1st Priority';
        } else if (score >= 3) {
            priority = '2nd Priority';
        } else {
            priority = '3rd Priority';
        }

        document.getElementById('risk-priority').value = priority;
    }

    // Filter functions
    function applyRiskFilters() {
        const priorityFilter = document.getElementById('filter-priority').value;
        const scoreFilter = document.getElementById('filter-score').value;
        const statusFilter = document.getElementById('filter-status').value;
        const searchFilter = document.getElementById('search-risk').value.toLowerCase();

        let filteredRisks = risks.filter(risk => {
            let matches = true;

            if (priorityFilter && risk.priority !== priorityFilter + 'st' && risk.priority !== priorityFilter + 'nd' && risk.priority !== priorityFilter + 'rd') {
                matches = false;
            }

            if (scoreFilter && risk.score.toString() !== scoreFilter) {
                matches = false;
            }

            if (statusFilter && risk.status !== statusFilter) {
                matches = false;
            }

            if (searchFilter && !risk.description.toLowerCase().includes(searchFilter) &&
                !risk.potentialCause.toLowerCase().includes(searchFilter) &&
                !risk.potentialImpact.toLowerCase().includes(searchFilter)) {
                matches = false;
            }

            return matches;
        });

        renderRisksTable(filteredRisks);
    }

    function resetRiskFilters() {
        document.getElementById('filter-priority').value = '';
        document.getElementById('filter-score').value = '';
        document.getElementById('filter-status').value = '';
        document.getElementById('search-risk').value = '';
        renderRisksTable();
    }

    function applyTreatmentFilters() {
        const riskIdFilter = document.getElementById('treatment-risk-id').value;
        const statusFilter = document.getElementById('treatment-status').value;

        let filteredTreatments = treatments.filter(treatment => {
            let matches = true;

            if (riskIdFilter && treatment.riskId !== riskIdFilter) {
                matches = false;
            }

            if (statusFilter && treatment.status !== statusFilter) {
                matches = false;
            }

            return matches;
        });

        renderTreatmentsTable(filteredTreatments);
    }

    // Utility functions
    function formatDate(dateString) {
        const date = new Date(dateString);
        return date.toLocaleDateString('en-US', {
            year: 'numeric',
            month: 'short',
            day: 'numeric'
        });
    }
</script>

<script>
$(function(){
  var ENDPOINT = {
    ENSURE: '<?=base_url('admin/iqms-data/ensure')?>',
    LIST:   '<?=base_url('admin/iqms-data/list')?>',
    SAVE:   '<?=base_url('admin/iqms-data/save')?>',
    DEL:    '<?=base_url('admin/iqms-data/delete')?>',
    CHILDREN: '<?=base_url('admin/iqms-data/children')?>',
    DEL_CHILDREN: '<?=base_url('admin/iqms-data/delete-children')?>'
  };
  var moduleCode='RISK_REGISTER', officeId=10, processId=1, fiscalYear='2025';
  var analysisId=null;

  function ensureAnalysis(){
    return $.post(ENDPOINT.ENSURE,{module_code:moduleCode,office_id:officeId,process_id:processId,fiscal_year:fiscalYear},function(r){analysisId=r.id;},'json');
  }

  // ----------- Risk Register Tab -----------
  function loadRisks(){
    return $.getJSON(ENDPOINT.LIST,{table:'iqms_risk_register',analysis_id:analysisId},function(rows){
      renderRisksTableDb(rows);
      populateRiskIdDropdownsDb(rows);
      renderMonitoringTableDb(rows);
    });
  }

  function renderRisksTableDb(rows){
    var $tbody = $('#risks-table tbody').empty();
    $.each(rows, function(_, risk){
      var row = $('<tr/>').addClass('priority-'+(risk.priority==='1st'?'1':risk.priority==='2nd'?'2':'3'));
      row.append('<td>'+escape(risk.risk_id||'')+'</td>')
         .append('<td>'+escape(risk.risk_description||'')+'</td>')
         .append('<td data-riskid="'+risk.id+'" class="risk-causes">Loading...</td>')
         .append('<td>'+escape(risk.potential_impact||'')+'</td>')
         .append('<td>'+escape(risk.risk_category||'')+'</td>')
         .append('<td>'+escape(risk.probability||'')+'</td>')
         .append('<td>'+escape(risk.impact||'')+'</td>')
         .append('<td>'+escape(risk.risk_score||'')+'</td>')
         .append('<td>'+escape(risk.priority||'')+'</td>')
         .append('<td>'+escape(risk.risk_status||'')+'</td>')
         .append('<td>'+formatDate(risk.identification_date)+'</td>')
         .append('<td>'+escape(risk.risk_owner||'')+'</td>')
         .append('<td>'+escape(risk.effectiveness_indicator||'')+'</td>')
         .append('<td>'+
           '<button class="btn btn-sm btn-warning edit-risk-btn" data-id="'+risk.id+'">Edit</button> '+
           '<button class="btn btn-sm btn-danger delete-risk-btn" data-id="'+risk.id+'">Delete</button>'+
         '</td>');
      $tbody.append(row);
    });
    // Load causes for all risks in view
    $('.risk-causes').each(function(){ var $cell=$(this), rid=$cell.data('riskid');
      $.getJSON(ENDPOINT.CHILDREN,{table:'iqms_risk_causes',fk:'risk_id',id:rid},function(cs){
        if(!cs.length){ $cell.text('-'); return; }
        $cell.html(cs.map(function(c){return escape(c.cause_number+': '+c.cause_description);}).join('<br>'));
      });
    });

    // Bind buttons
    $('.edit-risk-btn').off('click').on('click', function(){ openRiskModal($(this).data('id')); });
    $('.delete-risk-btn').off('click').on('click', function(){ deleteRisk($(this).data('id')); });
  }

  function populateRiskIdDropdownsDb(rows){
    var $filter=$('#treatment-risk-id').empty().append('<option value="">All Risks</option>');
    $.each(rows, function(_, r){ $('<option/>',{value:r.id, text:r.risk_id||('RR-'+r.id)}).appendTo($filter); });
  }

  function openRiskModal(id){
    var $m = $('#risk-modal');
    $('#modal-title').text(id?'Edit Risk':'Add New Risk');
    $('#risk-form')[0].reset();
    $('#risk-id').val(id||'');
    if(id){
      $.getJSON(ENDPOINT.LIST,{table:'iqms_risk_register',analysis_id:analysisId},function(rows){
        var r = rows.find(function(x){return x.id==id;}); if(!r){$m.show();return;}
        $('#risk-description').val(r.risk_description||'');
        $('#potential-impact').val(r.potential_impact||'');
        $('#risk-category').val((r.risk_category||'').toLowerCase().replace(/\s+/g,'-'));
        $('#risk-owner').val(r.risk_owner||'');
        $('#risk-probability').val(r.probability||'');
        $('#risk-impact').val(r.impact||'');
        $('#risk-score').val(r.risk_score||'');
        $('#risk-priority').val(r.priority? (r.priority+' Priority') : '');
        $('#risk-status').val(r.risk_status||'open');
        $('#effectiveness-indicator').val(r.effectiveness_indicator||'');
        // Load causes -> join into textarea lines
        $.getJSON(ENDPOINT.CHILDREN,{table:'iqms_risk_causes',fk:'risk_id',id:id},function(cs){
          var txt = cs.sort(function(a,b){return a.cause_number.localeCompare(b.cause_number);}).map(function(c){return c.cause_description;}).join('\n');
          $('#potential-cause').val(txt);
          $m.show();
        });
      });
    } else { $m.show(); }
  }
  window.openRiskModal = openRiskModal;
  window.closeRiskModal = function(){ $('#risk-modal').hide(); };

  function saveRisk(e){
    e && e.preventDefault();
    var id = $('#risk-id').val()||null;
    var prob = parseInt($('#risk-probability').val())||0;
    var impact = parseInt($('#risk-impact').val())||0;
    var priority = (prob*impact)>=5? '1st' : (prob*impact)>=3? '2nd':'3rd';
    var data = {
      table:'iqms_risk_register', id:id, analysis_id:analysisId,
      risk_id: id? undefined : null, // optional code generator in future
      risk_description: $('#risk-description').val(),
      potential_impact: $('#potential-impact').val(),
      risk_category: $('#risk-category').val(),
      probability: prob, impact: impact,
      priority: priority,
      risk_status: $('#risk-status').val(),
      identification_date: (new Date()).toISOString().slice(0,10),
      risk_owner: $('#risk-owner').val(),
      effectiveness_indicator: $('#effectiveness-indicator').val()
    };
    $.post(ENDPOINT.SAVE, data, function(resp){
      var riskDbId = id || resp.id;
      // Replace causes: delete all then insert per line with sequential numbers
      $.post(ENDPOINT.DEL_CHILDREN,{table:'iqms_risk_causes',fk:'risk_id',id:riskDbId}, function(){
        var lines = ($('#potential-cause').val()||'').split(/\r?\n/).map(function(s){return s.trim();}).filter(Boolean);
        var idx=1; (function next(){ if(idx>lines.length) return afterSave();
          var num = riskDbId+'.'+idx;
          $.post(ENDPOINT.SAVE, {table:'iqms_risk_causes', risk_id:riskDbId, cause_number:num, cause_description:lines[idx-1]}, function(){ idx++; next(); });
        })();
      });
      function afterSave(){ alert('Risk saved successfully!'); $('#risk-modal').hide(); loadRisks(); loadTreatments(); }
    },'json');
  }
  $('#risk-form').off('submit').on('submit', saveRisk);

  function deleteRisk(id){ if(!confirm('Delete this risk and all related data?')) return;
    // Deleting parent cascades to children (FK), but we can call explicitly for clarity
    $.post(ENDPOINT.DEL,{table:'iqms_risk_register', id:id}, function(){ loadRisks(); });
  }

  // ----------- Risk Treatment Tab -----------
  function loadTreatments(){
    // Need mapping risk id -> code
    return $.getJSON(ENDPOINT.LIST,{table:'iqms_risk_register',analysis_id:analysisId},function(risks){
      var riskMap={}; $.each(risks,function(_,r){ riskMap[r.id]=r; });
      $.getJSON(ENDPOINT.LIST,{table:'iqms_risk_treatments',analysis_id:analysisId},function(trs){ renderTreatmentsTableDb(trs, riskMap); });
    });
  }
  function renderTreatmentsTableDb(trs, riskMap){
    var $tbody=$('#treatment-table tbody').empty();
    // Build an index of treatments by risk_id for quick lookup
    var tByRisk = {};
    $.each(trs, function(_, t){ tByRisk[t.risk_id] = t; });

    // Show one row per risk (shared data source), with treatment columns editable via modal
    $.each(riskMap, function(riskId, r){
      var t = tByRisk[riskId] || {};
      var row = '<tr>'+
        '<td>'+escape(r.risk_id||('RR-'+(r.id||'')))+'</td>'+
        '<td>'+escape(r.risk_description||'')+'</td>'+
        '<td class="risk-causes" data-riskid="'+r.id+'">Loading...</td>'+
        '<td>'+escape((t.treatment_type||'').toLowerCase())+'</td>'+
        '<td>'+escape(t.treatment_description||'')+'</td>'+
        '<td>'+escape(t.responsible_person||'')+'</td>'+
        '<td>'+formatDate(t.target_date)+'</td>'+
        '<td>'+formatDate(t.completion_date)+'</td>'+
        '<td>'+escape(t.progress||'')+'</td>'+
        '<td>'+escape(t.treatment_status||'')+'</td>'+
        '<td><button class="btn btn-sm btn-warning edit-treatment-btn" data-riskid="'+r.id+'" data-id="'+(t.id||'')+'">Edit</button></td>'+
      '</tr>';
      $tbody.append(row);
    });

    // Load causes in displayed rows
    $('.risk-causes').each(function(){ var $cell=$(this), rid=$cell.data('riskid');
      $.getJSON(ENDPOINT.CHILDREN,{table:'iqms_risk_causes',fk:'risk_id',id:rid},function(cs){
        if(!cs.length){ $cell.text('-'); return; }
        $cell.html(cs.map(function(c){return escape(c.cause_number+': '+c.cause_description);}).join('<br>'));
      });
    });

    $('.edit-treatment-btn').off('click').on('click', function(){ openTreatmentModal($(this).data('riskid'), $(this).data('id')||null); });
  }

  // Open Treatment modal; supports (riskId, treatmentId) or (treatmentId)
  function openTreatmentModal(riskIdOrTreatmentId, maybeTreatmentId){
    var riskId = null, treatmentId = null;
    if (maybeTreatmentId !== undefined) { riskId = riskIdOrTreatmentId; treatmentId = maybeTreatmentId || null; }
    else { treatmentId = riskIdOrTreatmentId || null; }

    var $m=$('#treatment-modal');
    $('#treatment-form')[0].reset();
    $('#treatment-id').val(treatmentId||'');

    function setRiskFields(r){
      $('#treatment-risk-code').val(r.risk_id || ('RR-'+(r.id||'')));
      $('#treatment-risk-id-input').val(r.id);
    }

    if (treatmentId) {
      $.getJSON(ENDPOINT.LIST,{table:'iqms_risk_treatments',analysis_id:analysisId},function(trs){
        var t = trs.find(function(x){ return x.id == treatmentId; });
        if (t) {
          $.getJSON(ENDPOINT.LIST,{table:'iqms_risk_register',analysis_id:analysisId},function(risks){
            var r = risks.find(function(x){ return x.id == t.risk_id; });
            if (r) setRiskFields(r);
            $('#treatment-action').val((t.treatment_type||'').toLowerCase());
            $('#treatment-description').val(t.treatment_description||'');
            $('#treatment-responsible').val(t.responsible_person||'');
            $('#treatment-start-date').val(t.target_date||'');
            $('#treatment-due-date').val(t.completion_date||'');
            $('#treatment-status-select').val(t.treatment_status||'Planned');
            $('#treatment-modal-title').text('Edit Treatment Plan');
            $m.show();
          });
        } else { $('#treatment-modal-title').text('Add Treatment Plan'); $m.show(); }
      });
    } else {
      if (riskId) {
        $.getJSON(ENDPOINT.LIST,{table:'iqms_risk_register',analysis_id:analysisId},function(risks){
          var r = risks.find(function(x){ return x.id == riskId; });
          if (r) setRiskFields(r);
          $('#treatment-modal-title').text('Add Treatment Plan');
          $m.show();
        });
      } else {
        $('#treatment-modal-title').text('Add Treatment Plan');
        $m.show();
      }
    }
  }
  window.openTreatmentModal = openTreatmentModal;
  window.closeTreatmentModal = function(){ $('#treatment-modal').hide(); };

  function saveTreatment(e){ e && e.preventDefault();
    var id=$('#treatment-id').val()||null;
    var data={ table:'iqms_risk_treatments', id:id,
      risk_id: $('#treatment-risk-id-input').val(),
      treatment_description: $('#treatment-description').val(),
      treatment_type: ($('#treatment-action').val()||'mitigation').replace(/^./,c=>c.toUpperCase()),
      responsible_person: $('#treatment-responsible').val(),
      target_date: $('#treatment-start-date').val(),
      completion_date: $('#treatment-due-date').val(),
      treatment_status: ($('#treatment-status-select').val()||'Planned')
    };
    $.post(ENDPOINT.SAVE, data, function(){ alert('Treatment plan saved successfully!'); $('#treatment-modal').hide(); loadTreatments(); });
  }
  $('#treatment-form').off('submit').on('submit', saveTreatment);

  // ----------- Risk Monitoring Tab -----------
  function loadMonitoring(){
    return $.getJSON(ENDPOINT.LIST,{table:'iqms_risk_register',analysis_id:analysisId},function(risks){ renderMonitoringTableDb(risks); renderMonitoringChartDb(risks); });
  }
  function renderMonitoringTableDb(risks){
    var $tbody=$('#monitoring-table tbody').empty();
    $.each(risks,function(_, r){
      $.getJSON(ENDPOINT.CHILDREN,{table:'iqms_risk_monitoring',fk:'risk_id',id:r.id}, function(ms){
        var q={Q1:'',Q2:'',Q3:'',Q4:''};
        $.each(ms,function(_,m){ q[m.quarter]=m.monitoring_result||''; });
        var row='<tr>'+
          '<td>'+escape(r.risk_id||('RR-'+r.id))+'</td>'+
          '<td>'+escape(r.effectiveness_indicator||'')+'</td>'+
          '<td>'+escape(q.Q1)+'</td>'+
          '<td>'+escape(q.Q2)+'</td>'+
          '<td>'+escape(q.Q3)+'</td>'+
          '<td>'+escape(q.Q4)+'</td>'+
        '</tr>';
        $tbody.append(row);
      });
    });
  }

  function renderMonitoringChartDb(risks){
    // Preserve existing Chart.js wiring but compute from DB if needed. No-op for now; the existing chart block remains functional with the table refresh button.
  }

  function openMonitoringModal(riskId){
    var $m=$('#monitoring-modal');
    $('#monitoring-form')[0].reset();
    $('#monitoring-risk-id').val(riskId);
    // Preload existing
    $.getJSON(ENDPOINT.CHILDREN,{table:'iqms_risk_monitoring',fk:'risk_id',id:riskId},function(ms){
      var map={}; $.each(ms,function(_,m){ map[m.quarter]=m; });
      $('#q1-status').val(map.Q1? map.Q1.monitoring_result:'');
      $('#q2-status').val(map.Q2? map.Q2.monitoring_result:'');
      $('#q3-status').val(map.Q3? map.Q3.monitoring_result:'');
      $('#q4-status').val(map.Q4? map.Q4.monitoring_result:'');
      $m.show();
    });
  }
  window.openMonitoringModal = openMonitoringModal;
  window.closeMonitoringModal = function(){ $('#monitoring-modal').hide(); };

  function saveMonitoring(e){ e && e.preventDefault();
  // Near real-time sync: refresh Treatment tab periodically when visible
  var _treatmentPoll = null;
  function _startTreatmentPolling(){ if(_treatmentPoll) return; _treatmentPoll = setInterval(function(){ if($('#treatment').hasClass('active') || $('#treatment').hasClass('show')){ loadTreatments(); } }, 15000); }
  function _stopTreatmentPolling(){ if(_treatmentPoll){ clearInterval(_treatmentPoll); _treatmentPoll = null; } }
  function _startIfTreatmentVisible(){ if($('#treatment').hasClass('active') || $('#treatment').hasClass('show')){ _startTreatmentPolling(); } }
  // Start/stop on tab switch
  $('a[data-bs-toggle="tab"]').on('shown.bs.tab', function(e){ if(e.target && e.target.id==='treatment-tab'){ loadTreatments(); _startTreatmentPolling(); } });
  $('a[data-bs-toggle="tab"]').on('hidden.bs.tab', function(e){ if(e.target && e.target.id==='treatment-tab'){ _stopTreatmentPolling(); } });

    var rid=$('#monitoring-risk-id').val();
    var quarters=['Q1','Q2','Q3','Q4'];
    var i=0; (function next(){ if(i>=quarters.length){ alert('Monitoring data updated successfully!'); $('#monitoring-modal').hide(); return loadMonitoring(); }
      var q=quarters[i++];
      var val=$('#'+q.toLowerCase()+'-status').val();
      // Upsert: try to find existing first
      $.getJSON(ENDPOINT.CHILDREN,{table:'iqms_risk_monitoring',fk:'risk_id',id:rid,extra_key:'quarter',extra_val:q}, function(rows){
        var payload={ table:'iqms_risk_monitoring', risk_id:rid, quarter:q, monitoring_result:val };
        if(rows.length){ payload.id=rows[0].id; }
        $.post(ENDPOINT.SAVE,payload,function(){ next(); });
      });
    })();
  }
  $('#monitoring-form').off('submit').on('submit', saveMonitoring);

  function formatDate(d){ if(!d) return ''; try{ var dt=new Date(d); return dt.toLocaleDateString('en-US',{year:'numeric',month:'short',day:'numeric'});}catch(e){return d;} }
  function escape(s){ return String(s||'').replace(/[&<>"']/g, function(m){ return ({'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;','\'':'&#39;'}[m]); }); }

  // Preserve existing UI hooks
  // Rebind Add buttons to our functions
  $('#add-risk-btn').off('click').on('click', function(){ openRiskModal(); });
  $('#add-treatment-btn').off('click').on('click', function(){ openTreatmentModal(); });
  $('#refresh-monitoring').off('click').on('click', function(){ loadMonitoring(); });

  // Initialize
  ensureAnalysis().then(function(){ loadRisks(); loadTreatments(); loadMonitoring(); });
});
</script>


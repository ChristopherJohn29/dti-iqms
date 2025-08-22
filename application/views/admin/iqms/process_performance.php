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


<input type="hidden" id="iqmsModuleCode" value="PROCESS_PERFORMANCE">
<input type="hidden" id="iqmsOfficeId" value="10">
<input type="hidden" id="iqmsProcessId" value="1">
<input type="hidden" id="iqmsFiscalYear" value="2025">

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

<!-- Separated JS for Process Performance -->
<script src="<?=base_url('assets/customjs/iqms_process_performance.js')?>"></script>

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

<!-- Monitoring Modal -->
<div id="monitoringModal" class="iqms-modal">
  <div class="iqms-modal-content" style="max-width: 720px;">
    <div class="iqms-modal-header">
      <h3 class="iqms-modal-title">Update Monitoring</h3>
      <span class="iqms-close" onclick="closeMonitoring()">&times;</span>
    </div>
    <input type="hidden" id="monitoringPerformanceId">
    <div class="iqms-form iqms-form-section">
      <h4>Annual</h4>
      <div class="iqms-form-row">
        <div class="iqms-form-group"><label>Annual</label><input type="number" class="iqms-form-control" id="annualVal"></div>
        <div class="iqms-form-group"><label>Q1</label><input type="number" class="iqms-form-control" id="q1Val"></div>
        <div class="iqms-form-group"><label>Q2</label><input type="number" class="iqms-form-control" id="q2Val"></div>
        <div class="iqms-form-group"><label>1st Sem</label><input type="number" class="iqms-form-control" id="sem1Val"></div>
      </div>
      <div class="iqms-form-row">
        <div class="iqms-form-group"><label>Q3</label><input type="number" class="iqms-form-control" id="q3Val"></div>
        <div class="iqms-form-group"><label>Q4</label><input type="number" class="iqms-form-control" id="q4Val"></div>
        <div class="iqms-form-group"><label>2nd Sem</label><input type="number" class="iqms-form-control" id="sem2Val"></div>
      </div>
    </div>
    <div class="iqms-form iqms-form-section">
      <h4>Monthly</h4>
      <div class="iqms-form-row">
        <div class="iqms-form-group"><label>Jan</label><input type="number" class="iqms-form-control" id="janVal"></div>
        <div class="iqms-form-group"><label>Feb</label><input type="number" class="iqms-form-control" id="febVal"></div>
        <div class="iqms-form-group"><label>Mar</label><input type="number" class="iqms-form-control" id="marVal"></div>
        <div class="iqms-form-group"><label>Apr</label><input type="number" class="iqms-form-control" id="aprVal"></div>
      </div>
      <div class="iqms-form-row">
        <div class="iqms-form-group"><label>May</label><input type="number" class="iqms-form-control" id="mayVal"></div>
        <div class="iqms-form-group"><label>Jun</label><input type="number" class="iqms-form-control" id="junVal"></div>
        <div class="iqms-form-group"><label>Jul</label><input type="number" class="iqms-form-control" id="julVal"></div>
        <div class="iqms-form-group"><label>Aug</label><input type="number" class="iqms-form-control" id="augVal"></div>
      </div>
      <div class="iqms-form-row">
        <div class="iqms-form-group"><label>Sep</label><input type="number" class="iqms-form-control" id="sepVal"></div>
        <div class="iqms-form-group"><label>Oct</label><input type="number" class="iqms-form-control" id="octVal"></div>
        <div class="iqms-form-group"><label>Nov</label><input type="number" class="iqms-form-control" id="novVal"></div>
        <div class="iqms-form-group"><label>Dec</label><input type="number" class="iqms-form-control" id="decVal"></div>
      </div>
    </div>
    <div class="mt-3">
      <button class="btn btn-primary" onclick="saveMonitoring()">Save</button>
      <button class="btn btn-secondary" onclick="closeMonitoring()">Cancel</button>
    </div>
  </div>
</div>

</div>








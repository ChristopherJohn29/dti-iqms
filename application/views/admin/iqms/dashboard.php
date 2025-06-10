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
            <div class="header-main">
                <div class="agency-title">
                    <h1>DEPARTMENT OF TRADE AND INDUSTRY</h1>
                    <h2>INTEGRATED QUALITY MANAGEMENT SYSTEM</h2>
                    <div class="fiscal-year">FY<span class="year-box">2025</span></div>
                </div>
                
                <div class="form-details">
                    <table class="form-table">
                        <tr>
                            <td rowspan="4" class="form-label">I<br>Q<br>M<br>S</td>
                            <td class="detail-label">Version</td>
                            <td class="detail-value">1.0</td>
                        </tr>
                        <tr>
                            <td class="detail-label">Rev.</td>
                            <td class="detail-value">1</td>
                        </tr>
                        <tr>
                            <td class="detail-label"></td>
                            <td class="detail-value"></td>
                        </tr>
                        <tr>
                            <td class="detail-label">Date</td>
                            <td class="detail-value">01-Jun-25</td>
                        </tr>
                    </table>
                </div>
            </div>
            
            <div class="process-info">
                <div class="info-row">
                    <span class="info-label">BUREAU/REGIONS/OFFICE:</span>
                    <span class="info-value">DTI-10 REGIONAL OFFICE</span>
                </div>
                <div class="info-row">
                    <span class="info-label">SYSTEM STATUS:</span>
                    <span class="info-value status-active">ACTIVE</span>
                </div>
                <div class="info-row">
                    <span class="info-label">LAST UPDATED:</span>
                    <span class="info-value">June 10, 2025</span>
                </div>
            </div>
        </div>

        <!-- Dashboard Cards -->
        <div class="row">
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="iqms-dashboard-card">
                    <i class="fe-users text-primary" style="font-size: 3rem; margin-bottom: 15px;"></i>
                    <h3>Stakeholders Analysis</h3>
                    <p>Manage and analyze process stakeholders, their needs and expectations</p>
                    <a href="<?=base_url('admin/iqms/stakeholders')?>" class="btn btn-primary btn-sm">View Details</a>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-4">
                <div class="iqms-dashboard-card">
                    <i class="fe-grid text-primary" style="font-size: 3rem; margin-bottom: 15px;"></i>
                    <h3>SWOT Analysis</h3>
                    <p>Strengths, Weaknesses, Opportunities, and Threats analysis</p>
                    <a href="<?=base_url('admin/iqms/swot')?>" class="btn btn-primary btn-sm">View Details</a>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-4">
                <div class="iqms-dashboard-card">
                    <i class="fe-target text-primary" style="font-size: 3rem; margin-bottom: 15px;"></i>
                    <h3>Organization Outcomes</h3>
                    <p>Track and manage organizational outcomes and performance</p>
                    <a href="<?=base_url('admin/iqms/organization_outcomes')?>" class="btn btn-primary btn-sm">View Details</a>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-4">
                <div class="iqms-dashboard-card">
                    <i class="fe-award text-primary" style="font-size: 3rem; margin-bottom: 15px;"></i>
                    <h3>Quality Objectives</h3>
                    <p>Define and monitor quality objectives and targets</p>
                    <a href="<?=base_url('admin/iqms/quality_objectives')?>" class="btn btn-primary btn-sm">View Details</a>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-4">
                <div class="iqms-dashboard-card">
                    <i class="fe-alert-triangle text-danger" style="font-size: 3rem; margin-bottom: 15px;"></i>
                    <h3>Risk Register</h3>
                    <p>Identify, assess, and manage organizational risks</p>
                    <a href="<?=base_url('admin/iqms/risk_register')?>" class="btn btn-primary btn-sm">View Details</a>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-4">
                <div class="iqms-dashboard-card">
                    <i class="fe-trending-up text-success" style="font-size: 3rem; margin-bottom: 15px;"></i>
                    <h3>Opportunity Register</h3>
                    <p>Capture and manage opportunities for improvement</p>
                    <a href="<?=base_url('admin/iqms/opportunity_register')?>" class="btn btn-primary btn-sm">View Details</a>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-4">
                <div class="iqms-dashboard-card">
                    <i class="fe-activity text-info" style="font-size: 3rem; margin-bottom: 15px;"></i>
                    <h3>Process Performance</h3>
                    <p>Monitor and measure process performance indicators</p>
                    <a href="<?=base_url('admin/iqms/process_performance')?>" class="btn btn-primary btn-sm">View Details</a>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-4">
                <div class="iqms-dashboard-card">
                    <i class="fe-arrow-up-circle text-warning" style="font-size: 3rem; margin-bottom: 15px;"></i>
                    <h3>Improvement Action</h3>
                    <p>Plan and track improvement actions and initiatives</p>
                    <a href="<?=base_url('admin/iqms/improvement_action')?>" class="btn btn-primary btn-sm">View Details</a>
                </div>
            </div>
        </div>

        <!-- Summary Statistics -->
        <div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">IQMS Overview</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3 text-center">
                                <h2 class="text-primary">25</h2>
                                <p class="text-muted">Active Stakeholders</p>
                            </div>
                            <div class="col-md-3 text-center">
                                <h2 class="text-danger">8</h2>
                                <p class="text-muted">Risk Items</p>
                            </div>
                            <div class="col-md-3 text-center">
                                <h2 class="text-success">12</h2>
                                <p class="text-muted">Opportunities</p>
                            </div>
                            <div class="col-md-3 text-center">
                                <h2 class="text-warning">5</h2>
                                <p class="text-muted">Improvement Actions</p>
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

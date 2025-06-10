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



        <!-- Search and Add Button -->
        <div class="row mb-3">
            <div class="col-md-8">
                <input type="text" class="iqms-search-bar" placeholder="Search performance indicators..." id="searchIndicators">
            </div>
            <div class="col-md-4 text-right">
                <button class="iqms-btn iqms-btn-success" onclick="openIndicatorModal()">
                    <i class="fe-plus"></i> Add New Indicator
                </button>
            </div>
        </div>

        <!-- Performance Indicators Table -->
        <div class="table-responsive">
            <table class="iqms-table" id="indicatorsTable">
                <thead>
                    <tr>
                        <th style="width: 5%;">No.</th>
                        <th style="width: 25%;">Performance Indicator</th>
                        <th style="width: 15%;">Measure</th>
                        <th style="width: 10%;">Target</th>
                        <th style="width: 10%;">Actual</th>
                        <th style="width: 10%;">Variance</th>
                        <th style="width: 10%;">Status</th>
                        <th style="width: 15%;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">1</td>
                        <td>Training Satisfaction Rate</td>
                        <td>Average rating</td>
                        <td class="text-center">4.5/5.0</td>
                        <td class="text-center">4.3/5.0</td>
                        <td class="text-center text-warning">-0.2</td>
                        <td class="text-center"><span class="badge bg-warning text-dark">Below Target</span></td>
                        <td class="text-center">
                            <div class="iqms-action-btns">
                                <button class="iqms-btn iqms-btn-info iqms-btn-sm" onclick="viewTrend(1)" title="View Trend">
                                    <i class="fe-trending-up"></i>
                                </button>
                                <button class="iqms-btn iqms-btn-warning iqms-btn-sm" onclick="editIndicator(1)">
                                    <i class="fe-edit"></i>
                                </button>
                                <button class="iqms-btn iqms-btn-danger iqms-btn-sm" onclick="deleteIndicator(1)">
                                    <i class="fe-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">2</td>
                        <td>Training Completion Rate</td>
                        <td>Percentage</td>
                        <td class="text-center">90%</td>
                        <td class="text-center">95%</td>
                        <td class="text-center text-success">+5%</td>
                        <td class="text-center"><span class="badge bg-success">Above Target</span></td>
                        <td class="text-center">
                            <div class="iqms-action-btns">
                                <button class="iqms-btn iqms-btn-info iqms-btn-sm" onclick="viewTrend(2)" title="View Trend">
                                    <i class="fe-trending-up"></i>
                                </button>
                                <button class="iqms-btn iqms-btn-warning iqms-btn-sm" onclick="editIndicator(2)">
                                    <i class="fe-edit"></i>
                                </button>
                                <button class="iqms-btn iqms-btn-danger iqms-btn-sm" onclick="deleteIndicator(2)">
                                    <i class="fe-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">3</td>
                        <td>Average Training Duration</td>
                        <td>Hours</td>
                        <td class="text-center">8 hrs</td>
                        <td class="text-center">7.5 hrs</td>
                        <td class="text-center text-success">-0.5</td>
                        <td class="text-center"><span class="badge bg-success">On Target</span></td>
                        <td class="text-center">
                            <div class="iqms-action-btns">
                                <button class="iqms-btn iqms-btn-info iqms-btn-sm" onclick="viewTrend(3)" title="View Trend">
                                    <i class="fe-trending-up"></i>
                                </button>
                                <button class="iqms-btn iqms-btn-warning iqms-btn-sm" onclick="editIndicator(3)">
                                    <i class="fe-edit"></i>
                                </button>
                                <button class="iqms-btn iqms-btn-danger iqms-btn-sm" onclick="deleteIndicator(3)">
                                    <i class="fe-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">4</td>
                        <td>Number of Participants per Training</td>
                        <td>Count</td>
                        <td class="text-center">25</td>
                        <td class="text-center">22</td>
                        <td class="text-center text-warning">-3</td>
                        <td class="text-center"><span class="badge bg-warning text-dark">Below Target</span></td>
                        <td class="text-center">
                            <div class="iqms-action-btns">
                                <button class="iqms-btn iqms-btn-info iqms-btn-sm" onclick="viewTrend(4)" title="View Trend">
                                    <i class="fe-trending-up"></i>
                                </button>
                                <button class="iqms-btn iqms-btn-warning iqms-btn-sm" onclick="editIndicator(4)">
                                    <i class="fe-edit"></i>
                                </button>
                                <button class="iqms-btn iqms-btn-danger iqms-btn-sm" onclick="deleteIndicator(4)">
                                    <i class="fe-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">5</td>
                        <td>Training Resource Utilization</td>
                        <td>Percentage</td>
                        <td class="text-center">85%</td>
                        <td class="text-center">88%</td>
                        <td class="text-center text-success">+3%</td>
                        <td class="text-center"><span class="badge bg-success">Above Target</span></td>
                        <td class="text-center">
                            <div class="iqms-action-btns">
                                <button class="iqms-btn iqms-btn-info iqms-btn-sm" onclick="viewTrend(5)" title="View Trend">
                                    <i class="fe-trending-up"></i>
                                </button>
                                <button class="iqms-btn iqms-btn-warning iqms-btn-sm" onclick="editIndicator(5)">
                                    <i class="fe-edit"></i>
                                </button>
                                <button class="iqms-btn iqms-btn-danger iqms-btn-sm" onclick="deleteIndicator(5)">
                                    <i class="fe-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Performance Summary Dashboard -->
        <div class="row mt-4">
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h3 class="text-success">3</h3>
                        <p>Above/On Target</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h3 class="text-warning">2</h3>
                        <p>Below Target</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h3 class="text-info">5</h3>
                        <p>Total Indicators</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h3 class="text-primary">80%</h3>
                        <p>Overall Performance</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- container -->
</div>
<!-- content -->

<!-- Modal for Add/Edit Indicator -->
<div id="indicatorModal" class="iqms-modal">
    <div class="iqms-modal-content" style="max-width: 800px;">
        <div class="iqms-modal-header">
            <h3 class="iqms-modal-title" id="indicatorModalTitle">Add New Performance Indicator</h3>
            <span class="iqms-close" onclick="closeIndicatorModal()">&times;</span>
        </div>
        
        <form class="iqms-form" id="indicatorForm">
            <input type="hidden" id="indicatorId">
            
            <div class="iqms-form-group">
                <label class="iqms-form-label" for="indicatorName">Performance Indicator:</label>
                <input type="text" class="iqms-form-control" id="indicatorName" placeholder="Enter performance indicator name...">
            </div>
            
            <div class="iqms-form-row">
                <div class="iqms-form-group">
                    <label class="iqms-form-label" for="indicatorMeasure">Measure:</label>
                    <input type="text" class="iqms-form-control" id="indicatorMeasure" placeholder="e.g., Percentage, Count, Rating">
                </div>
                <div class="iqms-form-group">
                    <label class="iqms-form-label" for="indicatorTarget">Target:</label>
                    <input type="text" class="iqms-form-control" id="indicatorTarget" placeholder="e.g., 90%, 25, 4.5/5.0">
                </div>
            </div>
            
            <div class="iqms-form-row">
                <div class="iqms-form-group">
                    <label class="iqms-form-label" for="indicatorActual">Actual:</label>
                    <input type="text" class="iqms-form-control" id="indicatorActual" placeholder="Enter current actual value">
                </div>
                <div class="iqms-form-group">
                    <label class="iqms-form-label" for="indicatorFrequency">Monitoring Frequency:</label>
                    <select class="iqms-form-control" id="indicatorFrequency">
                        <option value="">Select Frequency</option>
                        <option value="Daily">Daily</option>
                        <option value="Weekly">Weekly</option>
                        <option value="Monthly">Monthly</option>
                        <option value="Quarterly">Quarterly</option>
                        <option value="Annually">Annually</option>
                    </select>
                </div>
            </div>
            
            <div class="iqms-form-group">
                <label class="iqms-form-label" for="indicatorDescription">Description:</label>
                <textarea class="iqms-form-control" id="indicatorDescription" rows="3" placeholder="Enter detailed description of the indicator..."></textarea>
            </div>
            
            <div class="iqms-form-row">
                <div class="iqms-form-group">
                    <label class="iqms-form-label" for="indicatorOwner">Responsible Person:</label>
                    <input type="text" class="iqms-form-control" id="indicatorOwner" placeholder="Enter responsible person/department">
                </div>
                <div class="iqms-form-group">
                    <label class="iqms-form-label" for="dataSource">Data Source:</label>
                    <input type="text" class="iqms-form-control" id="dataSource" placeholder="Enter data source">
                </div>
            </div>
            
            <div class="mt-4">
                <button type="button" class="iqms-btn" onclick="saveIndicator()">Save Indicator</button>
                <button type="button" class="iqms-btn iqms-btn-secondary" onclick="closeIndicatorModal()">Cancel</button>
            </div>
        </form>
    </div>
</div>

<script>
function openIndicatorModal() {
    document.getElementById('indicatorModalTitle').textContent = 'Add New Performance Indicator';
    document.getElementById('indicatorId').value = '';
    document.getElementById('indicatorForm').reset();
    document.getElementById('indicatorModal').style.display = 'block';
}

function closeIndicatorModal() {
    document.getElementById('indicatorModal').style.display = 'none';
}

function editIndicator(id) {
    document.getElementById('indicatorModalTitle').textContent = 'Edit Performance Indicator';
    document.getElementById('indicatorId').value = id;
    document.getElementById('indicatorModal').style.display = 'block';
}

function deleteIndicator(id) {
    if (confirm('Are you sure you want to delete this performance indicator?')) {
        alert('Performance indicator deleted successfully!');
    }
}

function saveIndicator() {
    alert('Performance indicator saved successfully!');
    closeIndicatorModal();
}

function viewTrend(id) {
    alert('Trend analysis feature coming soon!');
}

// Search functionality
document.getElementById('searchIndicators').addEventListener('input', function() {
    const searchTerm = this.value.toLowerCase();
    const table = document.getElementById('indicatorsTable');
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

window.onclick = function(event) {
    const modal = document.getElementById('indicatorModal');
    if (event.target == modal) {
        closeIndicatorModal();
    }
}
</script>

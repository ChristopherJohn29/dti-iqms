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
                <input type="text" class="form-control" placeholder="Search opportunities..." id="searchOpportunities">
            </div>
            <div class="col-md-4 text-right">
                <button class="btn btn-success waves-effect waves-light" onclick="openOpportunityModal()">
                    <i class="fe-plus"></i> Add New Opportunity
                </button>
            </div>
        </div>

        <!-- Opportunity Register Table -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table dt-responsive nowrap w-100" id="opportunitiesTable">
                <thead>
                    <tr>
                        <th style="width: 8%;">Opp. ID</th>
                        <th style="width: 30%;">Opportunity Description</th>
                        <th style="width: 12%;">Category</th>
                        <th style="width: 10%;">Priority</th>
                        <th style="width: 20%;">Action Plan</th>
                        <th style="width: 10%;">Status</th>
                        <th style="width: 10%;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">OR-1</td>
                        <td>Leverage experienced trainers for advanced training modules</td>
                        <td>Human Resource</td>
                        <td class="text-center"><span class="badge bg-warning text-dark">Medium</span></td>
                        <td>Develop specialized training tracks utilizing expert trainers</td>
                        <td class="text-center"><span class="badge bg-info">In Progress</span></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button class="btn btn-warning btn-sm" onclick="editOpportunity('OR-1')">
                                    <i class="fe-edit"></i>
                                </button>
                                <button class="btn btn-danger btn-sm" onclick="deleteOpportunity('OR-1')">
                                    <i class="fe-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">OR-2</td>
                        <td>Partner with private sector for training sponsorship</td>
                        <td>Strategic</td>
                        <td class="text-center"><span class="badge bg-success">High</span></td>
                        <td>Identify potential partners and develop partnership agreements</td>
                        <td class="text-center"><span class="badge bg-warning text-dark">Planned</span></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button class="btn btn-warning btn-sm" onclick="editOpportunity('OR-2')">
                                    <i class="fe-edit"></i>
                                </button>
                                <button class="btn btn-danger btn-sm" onclick="deleteOpportunity('OR-2')">
                                    <i class="fe-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">OR-3</td>
                        <td>Implement digital training platforms for wider reach</td>
                        <td>Technology</td>
                        <td class="text-center"><span class="badge bg-success">High</span></td>
                        <td>Develop online training infrastructure and content</td>
                        <td class="text-center"><span class="badge bg-info">In Progress</span></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button class="btn btn-warning btn-sm" onclick="editOpportunity('OR-3')">
                                    <i class="fe-edit"></i>
                                </button>
                                <button class="btn btn-danger btn-sm" onclick="deleteOpportunity('OR-3')">
                                    <i class="fe-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">OR-4</td>
                        <td>Create training certification programs</td>
                        <td>Service Enhancement</td>
                        <td class="text-center"><span class="badge bg-warning text-dark">Medium</span></td>
                        <td>Design certification framework and assessment criteria</td>
                        <td class="text-center"><span class="badge bg-warning text-dark">Planned</span></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button class="btn btn-warning btn-sm" onclick="editOpportunity('OR-4')">
                                    <i class="fe-edit"></i>
                                </button>
                                <button class="btn btn-danger btn-sm" onclick="deleteOpportunity('OR-4')">
                                    <i class="fe-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">OR-5</td>
                        <td>Expand training to rural areas through mobile training units</td>
                        <td>Service Delivery</td>
                        <td class="text-center"><span class="badge bg-success">High</span></td>
                        <td>Establish mobile training logistics and schedule</td>
                        <td class="text-center"><span class="badge bg-success">Active</span></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button class="btn btn-warning btn-sm" onclick="editOpportunity('OR-5')">
                                    <i class="fe-edit"></i>
                                </button>
                                <button class="btn btn-danger btn-sm" onclick="deleteOpportunity('OR-5')">
                                    <i class="fe-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
                    </div>
                    <!-- end card body-->
                </div>
                <!-- end card -->
            </div>
            <!-- end col-->
        </div>
        <!-- end row -->

        <!-- Opportunity Summary -->
        <div class="row mt-4">
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h3 class="text-success">3</h3>
                        <p>High Priority</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h3 class="text-warning">2</h3>
                        <p>Medium Priority</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h3 class="text-info">0</h3>
                        <p>Low Priority</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h3 class="text-primary">5</h3>
                        <p>Total Opportunities</p>
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
            
            <div class="iqms-form-row">
                <div class="iqms-form-group">
                    <label class="iqms-form-label" for="opportunityReference">Opportunity ID:</label>
                    <input type="text" class="iqms-form-control" id="opportunityReference" placeholder="e.g., OR-6">
                </div>
                <div class="iqms-form-group">
                    <label class="iqms-form-label" for="opportunityCategory">Category:</label>
                    <select class="iqms-form-control" id="opportunityCategory">
                        <option value="">Select Category</option>
                        <option value="Strategic">Strategic</option>
                        <option value="Technology">Technology</option>
                        <option value="Human Resource">Human Resource</option>
                        <option value="Service Delivery">Service Delivery</option>
                        <option value="Service Enhancement">Service Enhancement</option>
                        <option value="Process Improvement">Process Improvement</option>
                    </select>
                </div>
            </div>
            
            <div class="iqms-form-group">
                <label class="iqms-form-label" for="opportunityDescription">Opportunity Description:</label>
                <textarea class="iqms-form-control" id="opportunityDescription" rows="3" placeholder="Enter detailed opportunity description..."></textarea>
            </div>
            
            <div class="iqms-form-row">
                <div class="iqms-form-group">
                    <label class="iqms-form-label" for="opportunityPriority">Priority:</label>
                    <select class="iqms-form-control" id="opportunityPriority">
                        <option value="">Select Priority</option>
                        <option value="Low">Low</option>
                        <option value="Medium">Medium</option>
                        <option value="High">High</option>
                    </select>
                </div>
                <div class="iqms-form-group">
                    <label class="iqms-form-label" for="opportunityStatus">Status:</label>
                    <select class="iqms-form-control" id="opportunityStatus">
                        <option value="Planned">Planned</option>
                        <option value="In Progress">In Progress</option>
                        <option value="Active">Active</option>
                        <option value="Completed">Completed</option>
                        <option value="On Hold">On Hold</option>
                    </select>
                </div>
            </div>
            
            <div class="iqms-form-group">
                <label class="iqms-form-label" for="actionPlan">Action Plan:</label>
                <textarea class="iqms-form-control" id="actionPlan" rows="3" placeholder="Enter action plan to realize this opportunity..."></textarea>
            </div>
            
            <div class="iqms-form-row">
                <div class="iqms-form-group">
                    <label class="iqms-form-label" for="opportunityOwner">Opportunity Owner:</label>
                    <input type="text" class="iqms-form-control" id="opportunityOwner" placeholder="Enter responsible person/department">
                </div>
                <div class="iqms-form-group">
                    <label class="iqms-form-label" for="targetDate">Target Date:</label>
                    <input type="date" class="iqms-form-control" id="targetDate">
                </div>
            </div>
            
            <div class="mt-4">
                <button type="button" class="btn btn-primary" onclick="saveOpportunity()">Save Opportunity</button>
                <button type="button" class="btn btn-light" onclick="closeOpportunityModal()">Cancel</button>
            </div>
        </form>
    </div>
</div>

<script>
function openOpportunityModal() {
    document.getElementById('opportunityModalTitle').textContent = 'Add New Opportunity';
    document.getElementById('opportunityId').value = '';
    document.getElementById('opportunityForm').reset();
    document.getElementById('opportunityModal').style.display = 'block';
}

function closeOpportunityModal() {
    document.getElementById('opportunityModal').style.display = 'none';
}

function editOpportunity(id) {
    document.getElementById('opportunityModalTitle').textContent = 'Edit Opportunity';
    document.getElementById('opportunityId').value = id;
    document.getElementById('opportunityModal').style.display = 'block';
}

function deleteOpportunity(id) {
    if (confirm('Are you sure you want to delete this opportunity?')) {
        alert('Opportunity deleted successfully!');
    }
}

function saveOpportunity() {
    alert('Opportunity saved successfully!');
    closeOpportunityModal();
}

// Search functionality
document.getElementById('searchOpportunities').addEventListener('input', function() {
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

window.onclick = function(event) {
    const modal = document.getElementById('opportunityModal');
    if (event.target == modal) {
        closeOpportunityModal();
    }
}
</script>

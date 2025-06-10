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
                <input type="text" class="iqms-search-bar" placeholder="Search improvement actions..." id="searchActions">
            </div>
            <div class="col-md-4 text-right">
                <button class="iqms-btn iqms-btn-success" onclick="openActionModal()">
                    <i class="fe-plus"></i> Add New Action
                </button>
            </div>
        </div>

        <!-- Improvement Actions Table -->
        <div class="table-responsive">
            <table class="iqms-table" id="actionsTable">
                <thead>
                    <tr>
                        <th style="width: 5%;">Action ID</th>
                        <th style="width: 25%;">Improvement Action</th>
                        <th style="width: 12%;">Category</th>
                        <th style="width: 10%;">Priority</th>
                        <th style="width: 10%;">Responsible</th>
                        <th style="width: 10%;">Due Date</th>
                        <th style="width: 8%;">Progress</th>
                        <th style="width: 10%;">Status</th>
                        <th style="width: 10%;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">IA-1</td>
                        <td>Improve training venue facilities and equipment</td>
                        <td>Infrastructure</td>
                        <td class="text-center"><span class="badge bg-danger">High</span></td>
                        <td>Admin Team</td>
                        <td class="text-center">2025-08-15</td>
                        <td class="text-center">75%</td>
                        <td class="text-center"><span class="badge bg-info">In Progress</span></td>
                        <td class="text-center">
                            <div class="iqms-action-btns">
                                <button class="iqms-btn iqms-btn-warning iqms-btn-sm" onclick="editAction('IA-1')">
                                    <i class="fe-edit"></i>
                                </button>
                                <button class="iqms-btn iqms-btn-danger iqms-btn-sm" onclick="deleteAction('IA-1')">
                                    <i class="fe-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">IA-2</td>
                        <td>Develop standardized training materials and modules</td>
                        <td>Process</td>
                        <td class="text-center"><span class="badge bg-warning text-dark">Medium</span></td>
                        <td>Training Team</td>
                        <td class="text-center">2025-07-30</td>
                        <td class="text-center">90%</td>
                        <td class="text-center"><span class="badge bg-success">Completed</span></td>
                        <td class="text-center">
                            <div class="iqms-action-btns">
                                <button class="iqms-btn iqms-btn-warning iqms-btn-sm" onclick="editAction('IA-2')">
                                    <i class="fe-edit"></i>
                                </button>
                                <button class="iqms-btn iqms-btn-danger iqms-btn-sm" onclick="deleteAction('IA-2')">
                                    <i class="fe-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">IA-3</td>
                        <td>Implement participant feedback system</td>
                        <td>Technology</td>
                        <td class="text-center"><span class="badge bg-danger">High</span></td>
                        <td>IT Support</td>
                        <td class="text-center">2025-09-15</td>
                        <td class="text-center">45%</td>
                        <td class="text-center"><span class="badge bg-info">In Progress</span></td>
                        <td class="text-center">
                            <div class="iqms-action-btns">
                                <button class="iqms-btn iqms-btn-warning iqms-btn-sm" onclick="editAction('IA-3')">
                                    <i class="fe-edit"></i>
                                </button>
                                <button class="iqms-btn iqms-btn-danger iqms-btn-sm" onclick="deleteAction('IA-3')">
                                    <i class="fe-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">IA-4</td>
                        <td>Establish trainer certification program</td>
                        <td>Human Resource</td>
                        <td class="text-center"><span class="badge bg-warning text-dark">Medium</span></td>
                        <td>HR Department</td>
                        <td class="text-center">2025-10-31</td>
                        <td class="text-center">25%</td>
                        <td class="text-center"><span class="badge bg-warning text-dark">Planning</span></td>
                        <td class="text-center">
                            <div class="iqms-action-btns">
                                <button class="iqms-btn iqms-btn-warning iqms-btn-sm" onclick="editAction('IA-4')">
                                    <i class="fe-edit"></i>
                                </button>
                                <button class="iqms-btn iqms-btn-danger iqms-btn-sm" onclick="deleteAction('IA-4')">
                                    <i class="fe-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">IA-5</td>
                        <td>Create mobile training unit for rural areas</td>
                        <td>Service Delivery</td>
                        <td class="text-center"><span class="badge bg-success">Low</span></td>
                        <td>Operations Team</td>
                        <td class="text-center">2025-12-15</td>
                        <td class="text-center">10%</td>
                        <td class="text-center"><span class="badge bg-secondary">Not Started</span></td>
                        <td class="text-center">
                            <div class="iqms-action-btns">
                                <button class="iqms-btn iqms-btn-warning iqms-btn-sm" onclick="editAction('IA-5')">
                                    <i class="fe-edit"></i>
                                </button>
                                <button class="iqms-btn iqms-btn-danger iqms-btn-sm" onclick="deleteAction('IA-5')">
                                    <i class="fe-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Action Summary -->
        <div class="row mt-4">
            <div class="col-md-2">
                <div class="card text-center">
                    <div class="card-body">
                        <h3 class="text-success">1</h3>
                        <p>Completed</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card text-center">
                    <div class="card-body">
                        <h3 class="text-info">2</h3>
                        <p>In Progress</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card text-center">
                    <div class="card-body">
                        <h3 class="text-warning">1</h3>
                        <p>Planning</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card text-center">
                    <div class="card-body">
                        <h3 class="text-secondary">1</h3>
                        <p>Not Started</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card text-center">
                    <div class="card-body">
                        <h3 class="text-danger">2</h3>
                        <p>High Priority</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card text-center">
                    <div class="card-body">
                        <h3 class="text-primary">5</h3>
                        <p>Total Actions</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- container -->
</div>
<!-- content -->

<!-- Modal for Add/Edit Action -->
<div id="actionModal" class="iqms-modal">
    <div class="iqms-modal-content" style="max-width: 900px;">
        <div class="iqms-modal-header">
            <h3 class="iqms-modal-title" id="actionModalTitle">Add New Improvement Action</h3>
            <span class="iqms-close" onclick="closeActionModal()">&times;</span>
        </div>
        
        <form class="iqms-form" id="actionForm">
            <input type="hidden" id="actionId">
            
            <div class="iqms-form-row">
                <div class="iqms-form-group">
                    <label class="iqms-form-label" for="actionReference">Action ID:</label>
                    <input type="text" class="iqms-form-control" id="actionReference" placeholder="e.g., IA-6">
                </div>
                <div class="iqms-form-group">
                    <label class="iqms-form-label" for="actionCategory">Category:</label>
                    <select class="iqms-form-control" id="actionCategory">
                        <option value="">Select Category</option>
                        <option value="Infrastructure">Infrastructure</option>
                        <option value="Process">Process</option>
                        <option value="Technology">Technology</option>
                        <option value="Human Resource">Human Resource</option>
                        <option value="Service Delivery">Service Delivery</option>
                        <option value="Quality">Quality</option>
                    </select>
                </div>
            </div>
            
            <div class="iqms-form-group">
                <label class="iqms-form-label" for="actionDescription">Improvement Action:</label>
                <textarea class="iqms-form-control" id="actionDescription" rows="3" placeholder="Enter detailed improvement action description..."></textarea>
            </div>
            
            <div class="iqms-form-row">
                <div class="iqms-form-group">
                    <label class="iqms-form-label" for="actionPriority">Priority:</label>
                    <select class="iqms-form-control" id="actionPriority">
                        <option value="">Select Priority</option>
                        <option value="Low">Low</option>
                        <option value="Medium">Medium</option>
                        <option value="High">High</option>
                    </select>
                </div>
                <div class="iqms-form-group">
                    <label class="iqms-form-label" for="actionStatus">Status:</label>
                    <select class="iqms-form-control" id="actionStatus">
                        <option value="Not Started">Not Started</option>
                        <option value="Planning">Planning</option>
                        <option value="In Progress">In Progress</option>
                        <option value="Completed">Completed</option>
                        <option value="On Hold">On Hold</option>
                        <option value="Cancelled">Cancelled</option>
                    </select>
                </div>
            </div>
            
            <div class="iqms-form-row">
                <div class="iqms-form-group">
                    <label class="iqms-form-label" for="actionResponsible">Responsible Person/Team:</label>
                    <input type="text" class="iqms-form-control" id="actionResponsible" placeholder="Enter responsible person or team">
                </div>
                <div class="iqms-form-group">
                    <label class="iqms-form-label" for="actionDueDate">Due Date:</label>
                    <input type="date" class="iqms-form-control" id="actionDueDate">
                </div>
            </div>
            
            <div class="iqms-form-row">
                <div class="iqms-form-group">
                    <label class="iqms-form-label" for="actionProgress">Progress (%):</label>
                    <input type="number" class="iqms-form-control" id="actionProgress" min="0" max="100" placeholder="0-100">
                </div>
                <div class="iqms-form-group">
                    <label class="iqms-form-label" for="actionBudget">Budget (if applicable):</label>
                    <input type="text" class="iqms-form-control" id="actionBudget" placeholder="Enter budget amount">
                </div>
            </div>
            
            <div class="iqms-form-group">
                <label class="iqms-form-label" for="actionNotes">Notes/Comments:</label>
                <textarea class="iqms-form-control" id="actionNotes" rows="3" placeholder="Enter any additional notes or comments..."></textarea>
            </div>
            
            <div class="mt-4">
                <button type="button" class="iqms-btn" onclick="saveAction()">Save Action</button>
                <button type="button" class="iqms-btn iqms-btn-secondary" onclick="closeActionModal()">Cancel</button>
            </div>
        </form>
    </div>
</div>

<script>
function openActionModal() {
    document.getElementById('actionModalTitle').textContent = 'Add New Improvement Action';
    document.getElementById('actionId').value = '';
    document.getElementById('actionForm').reset();
    document.getElementById('actionModal').style.display = 'block';
}

function closeActionModal() {
    document.getElementById('actionModal').style.display = 'none';
}

function editAction(id) {
    document.getElementById('actionModalTitle').textContent = 'Edit Improvement Action';
    document.getElementById('actionId').value = id;
    document.getElementById('actionModal').style.display = 'block';
}

function deleteAction(id) {
    if (confirm('Are you sure you want to delete this improvement action?')) {
        alert('Improvement action deleted successfully!');
    }
}

function saveAction() {
    alert('Improvement action saved successfully!');
    closeActionModal();
}

// Search functionality
document.getElementById('searchActions').addEventListener('input', function() {
    const searchTerm = this.value.toLowerCase();
    const table = document.getElementById('actionsTable');
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
    const modal = document.getElementById('actionModal');
    if (event.target == modal) {
        closeActionModal();
    }
}
</script>

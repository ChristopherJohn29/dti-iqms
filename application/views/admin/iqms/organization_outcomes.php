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



        <!-- Add New Outcome Button -->
        <div class="row mb-3">
            <div class="col-md-8">
                <input type="text" class="iqms-search-bar" placeholder="Search organization outcomes..." id="searchOutcomes">
            </div>
            <div class="col-md-4 text-right">
                <button class="iqms-btn iqms-btn-success" onclick="openOutcomeModal()">
                    <i class="fe-plus"></i> Add New Outcome
                </button>
            </div>
        </div>

        <!-- Organization Outcomes Table -->
        <div class="table-responsive">
            <table class="iqms-table" id="outcomesTable">
                <thead>
                    <tr>
                        <th style="width: 5%;">No.</th>
                        <th style="width: 25%;">Outcome Category</th>
                        <th style="width: 35%;">Outcome Description</th>
                        <th style="width: 15%;">Target</th>
                        <th style="width: 10%;">Status</th>
                        <th style="width: 10%;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">1</td>
                        <td><strong>Service Delivery</strong></td>
                        <td>Improve the quality and efficiency of training programs delivered to MSMEs</td>
                        <td>95% satisfaction rate</td>
                        <td><span class="badge bg-success">Active</span></td>
                        <td class="text-center">
                            <div class="iqms-action-btns">
                                <button class="iqms-btn iqms-btn-warning iqms-btn-sm" onclick="editOutcome(1)">
                                    <i class="fe-edit"></i>
                                </button>
                                <button class="iqms-btn iqms-btn-danger iqms-btn-sm" onclick="deleteOutcome(1)">
                                    <i class="fe-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">2</td>
                        <td><strong>Stakeholder Satisfaction</strong></td>
                        <td>Enhance stakeholder satisfaction through effective communication and service delivery</td>
                        <td>90% satisfaction rate</td>
                        <td><span class="badge bg-success">Active</span></td>
                        <td class="text-center">
                            <div class="iqms-action-btns">
                                <button class="iqms-btn iqms-btn-warning iqms-btn-sm" onclick="editOutcome(2)">
                                    <i class="fe-edit"></i>
                                </button>
                                <button class="iqms-btn iqms-btn-danger iqms-btn-sm" onclick="deleteOutcome(2)">
                                    <i class="fe-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">3</td>
                        <td><strong>Capacity Building</strong></td>
                        <td>Strengthen organizational capacity through continuous learning and development</td>
                        <td>100% staff trained</td>
                        <td><span class="badge bg-warning text-dark">In Progress</span></td>
                        <td class="text-center">
                            <div class="iqms-action-btns">
                                <button class="iqms-btn iqms-btn-warning iqms-btn-sm" onclick="editOutcome(3)">
                                    <i class="fe-edit"></i>
                                </button>
                                <button class="iqms-btn iqms-btn-danger iqms-btn-sm" onclick="deleteOutcome(3)">
                                    <i class="fe-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">4</td>
                        <td><strong>Innovation</strong></td>
                        <td>Foster innovation in service delivery methods and processes</td>
                        <td>5 new initiatives</td>
                        <td><span class="badge bg-info">Planned</span></td>
                        <td class="text-center">
                            <div class="iqms-action-btns">
                                <button class="iqms-btn iqms-btn-warning iqms-btn-sm" onclick="editOutcome(4)">
                                    <i class="fe-edit"></i>
                                </button>
                                <button class="iqms-btn iqms-btn-danger iqms-btn-sm" onclick="deleteOutcome(4)">
                                    <i class="fe-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">5</td>
                        <td><strong>Compliance</strong></td>
                        <td>Ensure full compliance with quality management standards and regulations</td>
                        <td>100% compliance</td>
                        <td><span class="badge bg-success">Active</span></td>
                        <td class="text-center">
                            <div class="iqms-action-btns">
                                <button class="iqms-btn iqms-btn-warning iqms-btn-sm" onclick="editOutcome(5)">
                                    <i class="fe-edit"></i>
                                </button>
                                <button class="iqms-btn iqms-btn-danger iqms-btn-sm" onclick="deleteOutcome(5)">
                                    <i class="fe-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Summary Cards -->
        <div class="row mt-4">
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h3 class="text-success">5</h3>
                        <p>Total Outcomes</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h3 class="text-primary">3</h3>
                        <p>Active Outcomes</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h3 class="text-warning">1</h3>
                        <p>In Progress</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h3 class="text-info">1</h3>
                        <p>Planned</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- container -->
</div>
<!-- content -->

<!-- Modal for Add/Edit Outcome -->
<div id="outcomeModal" class="iqms-modal">
    <div class="iqms-modal-content">
        <div class="iqms-modal-header">
            <h3 class="iqms-modal-title" id="outcomeModalTitle">Add New Outcome</h3>
            <span class="iqms-close" onclick="closeOutcomeModal()">&times;</span>
        </div>
        
        <form class="iqms-form" id="outcomeForm">
            <input type="hidden" id="outcomeId">
            
            <div class="iqms-form-group">
                <label class="iqms-form-label" for="outcomeCategory">Outcome Category:</label>
                <select class="iqms-form-control" id="outcomeCategory">
                    <option value="">Select Category</option>
                    <option value="Service Delivery">Service Delivery</option>
                    <option value="Stakeholder Satisfaction">Stakeholder Satisfaction</option>
                    <option value="Capacity Building">Capacity Building</option>
                    <option value="Innovation">Innovation</option>
                    <option value="Compliance">Compliance</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            
            <div class="iqms-form-group">
                <label class="iqms-form-label" for="outcomeDescription">Outcome Description:</label>
                <textarea class="iqms-form-control" id="outcomeDescription" rows="4" placeholder="Enter detailed description of the outcome..."></textarea>
            </div>
            
            <div class="iqms-form-row">
                <div class="iqms-form-group">
                    <label class="iqms-form-label" for="outcomeTarget">Target:</label>
                    <input type="text" class="iqms-form-control" id="outcomeTarget" placeholder="e.g., 95% satisfaction rate">
                </div>
                <div class="iqms-form-group">
                    <label class="iqms-form-label" for="outcomeStatus">Status:</label>
                    <select class="iqms-form-control" id="outcomeStatus">
                        <option value="Planned">Planned</option>
                        <option value="In Progress">In Progress</option>
                        <option value="Active">Active</option>
                        <option value="Completed">Completed</option>
                        <option value="On Hold">On Hold</option>
                    </select>
                </div>
            </div>
            
            <div class="iqms-form-group">
                <label class="iqms-form-label" for="outcomeNotes">Additional Notes:</label>
                <textarea class="iqms-form-control" id="outcomeNotes" rows="3" placeholder="Enter any additional notes or comments..."></textarea>
            </div>
            
            <div class="mt-4">
                <button type="button" class="iqms-btn" onclick="saveOutcome()">Save Outcome</button>
                <button type="button" class="iqms-btn iqms-btn-secondary" onclick="closeOutcomeModal()">Cancel</button>
            </div>
        </form>
    </div>
</div>

<script>
function openOutcomeModal() {
    document.getElementById('outcomeModalTitle').textContent = 'Add New Outcome';
    document.getElementById('outcomeId').value = '';
    document.getElementById('outcomeForm').reset();
    document.getElementById('outcomeModal').style.display = 'block';
}

function closeOutcomeModal() {
    document.getElementById('outcomeModal').style.display = 'none';
}

function editOutcome(id) {
    document.getElementById('outcomeModalTitle').textContent = 'Edit Outcome';
    document.getElementById('outcomeId').value = id;
    // In a real application, you would populate the form with existing data
    document.getElementById('outcomeModal').style.display = 'block';
}

function deleteOutcome(id) {
    if (confirm('Are you sure you want to delete this outcome?')) {
        // In a real application, this would make an AJAX call to delete the record
        alert('Outcome deleted successfully!');
    }
}

function saveOutcome() {
    // In a real application, this would validate and save the data
    alert('Outcome saved successfully!');
    closeOutcomeModal();
}

// Search functionality
document.getElementById('searchOutcomes').addEventListener('input', function() {
    const searchTerm = this.value.toLowerCase();
    const table = document.getElementById('outcomesTable');
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

// Close modal when clicking outside
window.onclick = function(event) {
    const modal = document.getElementById('outcomeModal');
    if (event.target == modal) {
        closeOutcomeModal();
    }
}
</script>

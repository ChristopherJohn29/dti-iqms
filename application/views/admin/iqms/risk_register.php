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
                <input type="text" class="form-control" placeholder="Search risks..." id="searchRisks">
            </div>
            <div class="col-md-4 text-right">
                <button class="btn btn-success waves-effect waves-light" onclick="openRiskModal()">
                    <i class="fe-plus"></i> Add New Risk
                </button>
            </div>
        </div>

        <!-- Risk Register Table -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table dt-responsive nowrap w-100" id="risksTable">
                <thead>
                    <tr>
                        <th style="width: 5%;">Risk ID</th>
                        <th style="width: 25%;">Risk Description</th>
                        <th style="width: 10%;">Category</th>
                        <th style="width: 8%;">Probability</th>
                        <th style="width: 8%;">Impact</th>
                        <th style="width: 8%;">Risk Level</th>
                        <th style="width: 20%;">Mitigation Action</th>
                        <th style="width: 8%;">Status</th>
                        <th style="width: 8%;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">RR-1</td>
                        <td>Limited training venues may cause scheduling conflicts</td>
                        <td>Operational</td>
                        <td class="text-center">Medium</td>
                        <td class="text-center">High</td>
                        <td class="text-center"><span class="badge bg-warning text-dark">Medium</span></td>
                        <td>Identify alternative venues and establish partnerships</td>
                        <td class="text-center"><span class="badge bg-info">Active</span></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button class="btn btn-warning btn-sm" onclick="editRisk('RR-1')">
                                    <i class="fe-edit"></i>
                                </button>
                                <button class="btn btn-danger btn-sm" onclick="deleteRisk('RR-1')">
                                    <i class="fe-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">RR-2</td>
                        <td>Budget constraints may affect training quality</td>
                        <td>Financial</td>
                        <td class="text-center">High</td>
                        <td class="text-center">High</td>
                        <td class="text-center"><span class="badge bg-danger">High</span></td>
                        <td>Secure additional funding sources and optimize resource allocation</td>
                        <td class="text-center"><span class="badge bg-warning text-dark">Monitored</span></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button class="btn btn-warning btn-sm" onclick="editRisk('RR-2')">
                                    <i class="fe-edit"></i>
                                </button>
                                <button class="btn btn-danger btn-sm" onclick="deleteRisk('RR-2')">
                                    <i class="fe-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">RR-3</td>
                        <td>Trainer unavailability during peak periods</td>
                        <td>Human Resource</td>
                        <td class="text-center">Medium</td>
                        <td class="text-center">Medium</td>
                        <td class="text-center"><span class="badge bg-warning text-dark">Medium</span></td>
                        <td>Maintain pool of qualified backup trainers</td>
                        <td class="text-center"><span class="badge bg-info">Active</span></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button class="btn btn-warning btn-sm" onclick="editRisk('RR-3')">
                                    <i class="fe-edit"></i>
                                </button>
                                <button class="btn btn-danger btn-sm" onclick="deleteRisk('RR-3')">
                                    <i class="fe-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">RR-4</td>
                        <td>Technology failures during online training sessions</td>
                        <td>Technical</td>
                        <td class="text-center">Low</td>
                        <td class="text-center">High</td>
                        <td class="text-center"><span class="badge bg-warning text-dark">Medium</span></td>
                        <td>Implement backup systems and technical support protocols</td>
                        <td class="text-center"><span class="badge bg-success">Mitigated</span></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button class="btn btn-warning btn-sm" onclick="editRisk('RR-4')">
                                    <i class="fe-edit"></i>
                                </button>
                                <button class="btn btn-danger btn-sm" onclick="deleteRisk('RR-4')">
                                    <i class="fe-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">RR-5</td>
                        <td>Low participant attendance due to schedule conflicts</td>
                        <td>Operational</td>
                        <td class="text-center">Medium</td>
                        <td class="text-center">Medium</td>
                        <td class="text-center"><span class="badge bg-warning text-dark">Medium</span></td>
                        <td>Conduct stakeholder consultation for optimal scheduling</td>
                        <td class="text-center"><span class="badge bg-info">Active</span></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button class="btn btn-warning btn-sm" onclick="editRisk('RR-5')">
                                    <i class="fe-edit"></i>
                                </button>
                                <button class="btn btn-danger btn-sm" onclick="deleteRisk('RR-5')">
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

        <!-- Risk Summary -->
        <div class="row mt-4">
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h3 class="text-danger">1</h3>
                        <p>High Risk</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h3 class="text-warning">4</h3>
                        <p>Medium Risk</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h3 class="text-success">0</h3>
                        <p>Low Risk</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h3 class="text-info">5</h3>
                        <p>Total Risks</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- container -->
</div>
<!-- content -->

<!-- Modal for Add/Edit Risk -->
<div id="riskModal" class="iqms-modal">
    <div class="iqms-modal-content" style="max-width: 900px;">
        <div class="iqms-modal-header">
            <h3 class="iqms-modal-title" id="riskModalTitle">Add New Risk</h3>
            <span class="iqms-close" onclick="closeRiskModal()">&times;</span>
        </div>
        
        <form class="iqms-form" id="riskForm">
            <input type="hidden" id="riskId">
            
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label" for="riskReference">Risk ID:</label>
                        <input type="text" class="form-control" id="riskReference" placeholder="e.g., RR-6">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label" for="riskCategory">Category:</label>
                        <select class="form-control" id="riskCategory">
                            <option value="">Select Category</option>
                            <option value="Operational">Operational</option>
                            <option value="Financial">Financial</option>
                            <option value="Technical">Technical</option>
                            <option value="Human Resource">Human Resource</option>
                            <option value="Compliance">Compliance</option>
                            <option value="Strategic">Strategic</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label" for="riskDescription">Risk Description:</label>
                <textarea class="form-control" id="riskDescription" rows="3" placeholder="Enter detailed risk description..."></textarea>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label" for="riskProbability">Probability:</label>
                        <select class="form-control" id="riskProbability">
                            <option value="">Select Probability</option>
                            <option value="Low">Low</option>
                            <option value="Medium">Medium</option>
                            <option value="High">High</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label" for="riskImpact">Impact:</label>
                        <select class="form-control" id="riskImpact">
                            <option value="">Select Impact</option>
                            <option value="Low">Low</option>
                            <option value="Medium">Medium</option>
                            <option value="High">High</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label" for="mitigationAction">Mitigation Action:</label>
                <textarea class="form-control" id="mitigationAction" rows="3" placeholder="Enter mitigation strategies..."></textarea>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label" for="riskStatus">Status:</label>
                        <select class="form-control" id="riskStatus">
                            <option value="Active">Active</option>
                            <option value="Monitored">Monitored</option>
                            <option value="Mitigated">Mitigated</option>
                            <option value="Closed">Closed</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label" for="riskOwner">Risk Owner:</label>
                        <input type="text" class="form-control" id="riskOwner" placeholder="Enter responsible person/department">
                    </div>
                </div>
            </div>

            <div class="mt-4">
                <button type="button" class="btn btn-primary" onclick="saveRisk()">Save Risk</button>
                <button type="button" class="btn btn-light" onclick="closeRiskModal()">Cancel</button>
            </div>
        </form>
    </div>
</div>

<script>
function openRiskModal() {
    document.getElementById('riskModalTitle').textContent = 'Add New Risk';
    document.getElementById('riskId').value = '';
    document.getElementById('riskForm').reset();
    document.getElementById('riskModal').style.display = 'block';
}

function closeRiskModal() {
    document.getElementById('riskModal').style.display = 'none';
}

function editRisk(id) {
    document.getElementById('riskModalTitle').textContent = 'Edit Risk';
    document.getElementById('riskId').value = id;
    document.getElementById('riskModal').style.display = 'block';
}

function deleteRisk(id) {
    if (confirm('Are you sure you want to delete this risk?')) {
        alert('Risk deleted successfully!');
    }
}

function saveRisk() {
    alert('Risk saved successfully!');
    closeRiskModal();
}

// Search functionality
document.getElementById('searchRisks').addEventListener('input', function() {
    const searchTerm = this.value.toLowerCase();
    const table = document.getElementById('risksTable');
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
    const modal = document.getElementById('riskModal');
    if (event.target == modal) {
        closeRiskModal();
    }
}
</script>

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
                <input type="text" class="form-control" placeholder="Search quality objectives..." id="searchObjectives">
            </div>
            <div class="col-md-4 text-right">
                <button class="btn btn-success waves-effect waves-light" onclick="openObjectiveModal()">
                    <i class="fe-plus"></i> Add New Objective
                </button>
            </div>
        </div>

        <!-- Quality Objectives Table -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table dt-responsive nowrap w-100" id="objectivesTable">
                <thead>
                    <tr>
                        <th style="width: 5%;">No.</th>
                        <th style="width: 30%;">Quality Objective</th>
                        <th style="width: 20%;">Target</th>
                        <th style="width: 15%;">Measure</th>
                        <th style="width: 10%;">Status</th>
                        <th style="width: 10%;">Progress</th>
                        <th style="width: 10%;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">1</td>
                        <td>Achieve high customer satisfaction in training programs</td>
                        <td>≥ 4.5/5.0 rating</td>
                        <td>Customer feedback surveys</td>
                        <td><span class="badge bg-success">On Track</span></td>
                        <td class="text-center">85%</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button class="btn btn-warning btn-sm" onclick="editObjective(1)">
                                    <i class="fe-edit"></i>
                                </button>
                                <button class="btn btn-danger btn-sm" onclick="deleteObjective(1)">
                                    <i class="fe-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">2</td>
                        <td>Reduce training preparation time</td>
                        <td>≤ 2 weeks</td>
                        <td>Average preparation days</td>
                        <td><span class="badge bg-warning text-dark">Behind</span></td>
                        <td class="text-center">60%</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button class="btn btn-warning btn-sm" onclick="editObjective(2)">
                                    <i class="fe-edit"></i>
                                </button>
                                <button class="btn btn-danger btn-sm" onclick="deleteObjective(2)">
                                    <i class="fe-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">3</td>
                        <td>Increase training completion rate</td>
                        <td>≥ 90%</td>
                        <td>Completion percentage</td>
                        <td><span class="badge bg-success">Achieved</span></td>
                        <td class="text-center">95%</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button class="btn btn-warning btn-sm" onclick="editObjective(3)">
                                    <i class="fe-edit"></i>
                                </button>
                                <button class="btn btn-danger btn-sm" onclick="deleteObjective(3)">
                                    <i class="fe-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">4</td>
                        <td>Improve trainer competency</td>
                        <td>100% certified</td>
                        <td>Certification rate</td>
                        <td><span class="badge bg-info">In Progress</span></td>
                        <td class="text-center">75%</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button class="btn btn-warning btn-sm" onclick="editObjective(4)">
                                    <i class="fe-edit"></i>
                                </button>
                                <button class="btn btn-danger btn-sm" onclick="deleteObjective(4)">
                                    <i class="fe-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">5</td>
                        <td>Enhance training material quality</td>
                        <td>100% updated materials</td>
                        <td>Material review compliance</td>
                        <td><span class="badge bg-success">On Track</span></td>
                        <td class="text-center">90%</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button class="btn btn-warning btn-sm" onclick="editObjective(5)">
                                    <i class="fe-edit"></i>
                                </button>
                                <button class="btn btn-danger btn-sm" onclick="deleteObjective(5)">
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
    </div>
    <!-- container -->
</div>
<!-- content -->

<!-- Modal for Add/Edit Objective -->
<div id="objectiveModal" class="iqms-modal">
    <div class="iqms-modal-content">
        <div class="iqms-modal-header">
            <h3 class="iqms-modal-title" id="objectiveModalTitle">Add New Quality Objective</h3>
            <span class="iqms-close" onclick="closeObjectiveModal()">&times;</span>
        </div>
        
        <form class="iqms-form" id="objectiveForm">
            <input type="hidden" id="objectiveId">
            
            <div class="iqms-form-group">
                <label class="iqms-form-label" for="objectiveDescription">Quality Objective:</label>
                <textarea class="iqms-form-control" id="objectiveDescription" rows="3" placeholder="Enter quality objective description..."></textarea>
            </div>
            
            <div class="iqms-form-row">
                <div class="iqms-form-group">
                    <label class="iqms-form-label" for="objectiveTarget">Target:</label>
                    <input type="text" class="iqms-form-control" id="objectiveTarget" placeholder="e.g., ≥ 4.5/5.0 rating">
                </div>
                <div class="iqms-form-group">
                    <label class="iqms-form-label" for="objectiveMeasure">Measure:</label>
                    <input type="text" class="iqms-form-control" id="objectiveMeasure" placeholder="e.g., Customer feedback surveys">
                </div>
            </div>
            
            <div class="iqms-form-row">
                <div class="iqms-form-group">
                    <label class="iqms-form-label" for="objectiveStatus">Status:</label>
                    <select class="iqms-form-control" id="objectiveStatus">
                        <option value="In Progress">In Progress</option>
                        <option value="On Track">On Track</option>
                        <option value="Behind">Behind</option>
                        <option value="Achieved">Achieved</option>
                        <option value="Not Started">Not Started</option>
                    </select>
                </div>
                <div class="iqms-form-group">
                    <label class="iqms-form-label" for="objectiveProgress">Progress (%):</label>
                    <input type="number" class="iqms-form-control" id="objectiveProgress" min="0" max="100" placeholder="0-100">
                </div>
            </div>
            
            <div class="iqms-form-group">
                <label class="iqms-form-label" for="objectiveNotes">Notes:</label>
                <textarea class="iqms-form-control" id="objectiveNotes" rows="3" placeholder="Enter any additional notes..."></textarea>
            </div>
            
            <div class="mt-4">
                <button type="button" class="iqms-btn" onclick="saveObjective()">Save Objective</button>
                <button type="button" class="iqms-btn iqms-btn-secondary" onclick="closeObjectiveModal()">Cancel</button>
            </div>
        </form>
    </div>
</div>

<script>
function openObjectiveModal() {
    document.getElementById('objectiveModalTitle').textContent = 'Add New Quality Objective';
    document.getElementById('objectiveId').value = '';
    document.getElementById('objectiveForm').reset();
    document.getElementById('objectiveModal').style.display = 'block';
}

function closeObjectiveModal() {
    document.getElementById('objectiveModal').style.display = 'none';
}

function editObjective(id) {
    document.getElementById('objectiveModalTitle').textContent = 'Edit Quality Objective';
    document.getElementById('objectiveId').value = id;
    document.getElementById('objectiveModal').style.display = 'block';
}

function deleteObjective(id) {
    if (confirm('Are you sure you want to delete this quality objective?')) {
        alert('Quality objective deleted successfully!');
    }
}

function saveObjective() {
    alert('Quality objective saved successfully!');
    closeObjectiveModal();
}

// Search functionality
document.getElementById('searchObjectives').addEventListener('input', function() {
    const searchTerm = this.value.toLowerCase();
    const table = document.getElementById('objectivesTable');
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
    const modal = document.getElementById('objectiveModal');
    if (event.target == modal) {
        closeObjectiveModal();
    }
}
</script>

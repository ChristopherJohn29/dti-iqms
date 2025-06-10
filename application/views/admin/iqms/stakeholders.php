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
                <input type="text" class="form-control" placeholder="Search stakeholders..." id="searchStakeholders">
            </div>
            <div class="col-md-4 text-right">
                <button class="btn btn-success waves-effect waves-light" onclick="openStakeholderModal()">
                    <i class="fe-plus"></i> Add New Stakeholder Entry
                </button>
            </div>
        </div>

        <!-- Stakeholders Section -->
        <div class="iqms-section-header">
            INTERESTED PARTY - NEEDS & EXPECTATIONS
        </div>

        <!-- Stakeholders Table -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table dt-responsive nowrap w-100" id="stakeholdersTable">
                <thead>
                    <tr>
                        <th style="width: 20%;">STAKEHOLDER</th>
                        <th style="width: 25%;">NEEDS & EXPECTATIONS</th>
                        <th style="width: 20%;">POTENTIAL RISKS</th>
                        <th style="width: 20%;">POTENTIAL OPPORTUNITIES</th>
                        <th style="width: 10%;">REFERENCE / LINKS</th>
                        <th style="width: 5%;">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Business Persons -->
                    <tr>
                        <td rowspan="3"><strong>Business Persons</strong><br><small>(Inclusions: business owners, entrepreneurs, MSMEs, product/service providers, investors)</small></td>
                        <td>1.5 Proper, comfortable and Minimum Public Health Standards Protocol-compliant venue with decent food</td>
                        <td>-</td>
                        <td>-</td>
                        <td class="text-center">OR-2</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button class="btn btn-warning btn-sm" onclick="editStakeholder(1)">
                                    <i class="fe-edit"></i>
                                </button>
                                <button class="btn btn-danger btn-sm" onclick="deleteStakeholder(1)">
                                    <i class="fe-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>1.6 Organized / systematized conduct of various DTI training activities</td>
                        <td>Training not implemented as planned</td>
                        <td>Increase participants retention and improve learning</td>
                        <td class="text-center">OR-8</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button class="btn btn-warning btn-sm" onclick="editStakeholder(2)">
                                    <i class="fe-edit"></i>
                                </button>
                                <button class="btn btn-danger btn-sm" onclick="deleteStakeholder(2)">
                                    <i class="fe-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>1.18 Expected learning objectives achieved</td>
                        <td>Training not implemented as planned</td>
                        <td>Improved business outcomes</td>
                        <td class="text-center">OR-4</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button class="btn btn-warning btn-sm" onclick="editStakeholder(3)">
                                    <i class="fe-edit"></i>
                                </button>
                                <button class="btn btn-danger btn-sm" onclick="deleteStakeholder(3)">
                                    <i class="fe-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Development Partners -->
                    <tr>
                        <td rowspan="2"><strong>Development Partners</strong><br><small>(NGAs, LGUs, NGOs, Coaches/Mentors/Designers, MSME Council, Local Chambers, and Industry Associations, Province)</small></td>
                        <td>4.2 Clear and judicious MOA or MOU</td>
                        <td>Misalignment of goals and objectives</td>
                        <td>Efficient resource allocation and availability of competent Resource Speakers</td>
                        <td class="text-center">RR-3, OR-3</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button class="btn btn-warning btn-sm" onclick="editStakeholder(4)">
                                    <i class="fe-edit"></i>
                                </button>
                                <button class="btn btn-danger btn-sm" onclick="deleteStakeholder(4)">
                                    <i class="fe-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>4.3 Prompt and fair compensation of services rendered</td>
                        <td>Legal and Contractual Implications</td>
                        <td>long-term collaboration and trust among development partners</td>
                        <td class="text-center">RR-4, OR-4</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button class="btn btn-warning btn-sm" onclick="editStakeholder(5)">
                                    <i class="fe-edit"></i>
                                </button>
                                <button class="btn btn-danger btn-sm" onclick="deleteStakeholder(5)">
                                    <i class="fe-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- DTI Staff -->
                    <tr>
                        <td rowspan="2"><strong>DTI-10 Staff/Contractual Services</strong><br><small>(technical and non-technical)</small></td>
                        <td>10.1 Ready provision of appropriate resources and logistical support in the implementation of PAPs</td>
                        <td>Training not implemented as planned</td>
                        <td>Improved training delivery</td>
                        <td class="text-center">RR-2</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button class="btn btn-warning btn-sm" onclick="editStakeholder(6)">
                                    <i class="fe-edit"></i>
                                </button>
                                <button class="btn btn-danger btn-sm" onclick="deleteStakeholder(6)">
                                    <i class="fe-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>10.2 Provision of capability building activities as well as physical and mental wellness program</td>
                        <td>Demotivated personnel</td>
                        <td>Efficient resource utilization and improved staff performance</td>
                        <td class="text-center">RR-5, OR-5</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button class="btn btn-warning btn-sm" onclick="editStakeholder(7)">
                                    <i class="fe-edit"></i>
                                </button>
                                <button class="btn btn-danger btn-sm" onclick="deleteStakeholder(7)">
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

<!-- Modal for Add/Edit Stakeholder -->
<div id="stakeholderModal" class="iqms-modal">
    <div class="iqms-modal-content">
        <div class="iqms-modal-header">
            <h3 class="iqms-modal-title" id="modalTitle">Add New Stakeholder Entry</h3>
            <span class="iqms-close" onclick="closeStakeholderModal()">&times;</span>
        </div>
        
        <h5>DEPARTMENT OF TRADE AND INDUSTRY - PROCESS STAKEHOLDERS ANALYSIS</h5>
        
        <form class="iqms-form" id="stakeholderForm">
            <input type="hidden" id="stakeholderId">
            
            <h6>Basic Information</h6>
            <div class="mb-3">
                <label class="form-label" for="process">Process:</label>
                <input type="text" class="form-control" id="process" value="CONDUCT OF TRAINING" readonly>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label" for="processOwner">Process Owner:</label>
                        <input type="text" class="form-control" id="processOwner" value="Training Coordinators">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label" for="office">Office:</label>
                        <input type="text" class="form-control" id="office" value="DTI-10 Regional Office">
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label" for="fiscalYear">Fiscal Year:</label>
                <input type="text" class="form-control" id="fiscalYear" value="2025">
            </div>

            <h6>Stakeholder Details</h6>
            <div class="mb-3">
                <label class="form-label" for="interestedParty">Interested Party:</label>
                <select class="form-control" id="interestedParty">
                    <option value="">Select Interested Party</option>
                    <option value="business_persons">1. Business Persons</option>
                    <option value="development_partners">4. Development Partners</option>
                    <option value="dti_staff">10. DTI-10 Staff/Contractual Services</option>
                    <option value="other">Other (specify)</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label" for="needs">What does the interested party need or expect from DTI related to the process?</label>
                <textarea class="form-control" id="needs" rows="3"></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label" for="potentialRisk">Potential Risk</label>
                <p style="font-size: 0.9em; color: #666;">What potential NEGATIVE incident/event can happen if requirements are not met?</p>
                <textarea class="form-control" id="potentialRisk" rows="3"></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label" for="potentialOpportunity">Potential Opportunity</label>
                <p style="font-size: 0.9em; color: #666;">What potential POSITIVE incident/event can happen if requirements are met or exceeded?</p>
                <textarea class="form-control" id="potentialOpportunity" rows="3"></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">References</label>
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="riskReference" placeholder="Risk Reference # e.g., RR-1">
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="opportunityReference" placeholder="Opportunity Reference # e.g., OR-1">
                    </div>
                </div>
            </div>
            
            <div class="mt-4">
                <button type="button" class="btn btn-primary" onclick="saveStakeholder()">Save Entry</button>
                <button type="button" class="btn btn-light" onclick="closeStakeholderModal()">Cancel</button>
            </div>
        </form>
    </div>
</div>

<script>
function openStakeholderModal() {
    document.getElementById('modalTitle').textContent = 'Add New Stakeholder Entry';
    document.getElementById('stakeholderId').value = '';
    document.getElementById('stakeholderForm').reset();
    document.getElementById('stakeholderModal').style.display = 'block';
}

function closeStakeholderModal() {
    document.getElementById('stakeholderModal').style.display = 'none';
}

function editStakeholder(id) {
    document.getElementById('modalTitle').textContent = 'Edit Stakeholder Entry';
    document.getElementById('stakeholderId').value = id;
    // In a real application, you would populate the form with existing data
    document.getElementById('stakeholderModal').style.display = 'block';
}

function deleteStakeholder(id) {
    if (confirm('Are you sure you want to delete this stakeholder entry?')) {
        // In a real application, this would make an AJAX call to delete the record
        alert('Stakeholder entry deleted successfully!');
    }
}

function saveStakeholder() {
    // In a real application, this would validate and save the data
    alert('Stakeholder entry saved successfully!');
    closeStakeholderModal();
}

// Search functionality
document.getElementById('searchStakeholders').addEventListener('input', function() {
    const searchTerm = this.value.toLowerCase();
    const table = document.getElementById('stakeholdersTable');
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
    const modal = document.getElementById('stakeholderModal');
    if (event.target == modal) {
        closeStakeholderModal();
    }
}
</script>

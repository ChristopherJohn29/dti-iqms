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
                    <span class="info-value">FM-PL-02</span>
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
                        <th style="width: 18%;">STAKEHOLDER</th>
                        <th style="width: 22%;">NEEDS & EXPECTATIONS</th>
                        <th style="width: 18%;">POTENTIAL RISKS</th>
                        <th style="width: 18%;">POTENTIAL OPPORTUNITIES</th>
                        <th style="width: 10%;">TO BE CONSIDERED</th>
                        <th style="width: 9%;">REFERENCE / LINKS</th>
                        <th style="width: 5%;">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Business Persons -->
                    <tr>
                        <td rowspan="3"><strong>1. Business Persons</strong><br><small>(Inclusions: business owners, entrepreneurs, MSMEs, product/service providers, investors)</small></td>
                        <td>1.5 Proper, comfortable and Minimum Public Health Standards Protocol-compliant venue with decent food</td>
                        <td>-</td>
                        <td>-</td>
                        <td class="text-center">Yes</td>
                        <td class="text-center">OR-2</td>
                        <td rowspan="3" class="text-center">
                            <div class="btn-group">
                                <button class="btn btn-warning btn-sm" onclick="editStakeholder('business_persons')" title="Edit Business Persons">
                                    <i class="fe-edit"></i>
                                </button>
                                <button class="btn btn-danger btn-sm" onclick="deleteStakeholder('business_persons')" title="Delete Business Persons">
                                    <i class="fe-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>1.6 Organized / systematized conduct of various DTI training activities</td>
                        <td>Training not implemented as planned</td>
                        <td>Increase participants retention and improve learning</td>
                        <td class="text-center">No</td>
                        <td class="text-center">OR-8</td>
                    </tr>
                    <tr>
                        <td>1.18 Expected learning objectives achieved</td>
                        <td>Training not implemented as planned</td>
                        <td>Improved business outcomes</td>
                        <td class="text-center">Yes</td>
                        <td class="text-center">OR-4</td>
                    </tr>

                    <!-- Development Partners -->
                    <tr>
                        <td rowspan="2"><strong>4. Development Partners</strong><br><small>(NGAs, LGUs, NGOs, Coaches/Mentors/Designers, MSME Council, Local Chambers, and Industry Associations, Province)</small></td>
                        <td>4.2 Clear and judicious MOA or MOU</td>
                        <td>Misalignment of goals and objectives</td>
                        <td>Efficient resource allocation and availability of competent Resource Speakers</td>
                        <td class="text-center">Yes</td>
                        <td class="text-center">RR-3, OR-3</td>
                        <td rowspan="2" class="text-center">
                            <div class="btn-group">
                                <button class="btn btn-warning btn-sm" onclick="editStakeholder('development_partners')" title="Edit Development Partners">
                                    <i class="fe-edit"></i>
                                </button>
                                <button class="btn btn-danger btn-sm" onclick="deleteStakeholder('development_partners')" title="Delete Development Partners">
                                    <i class="fe-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>4.3 Prompt and fair compensation of services rendered</td>
                        <td>Legal and Contractual Implications</td>
                        <td>long-term collaboration and trust among development partners</td>
                        <td class="text-center">No</td>
                        <td class="text-center">RR-4, OR-4</td>
                    </tr>

                    <!-- DTI Staff -->
                    <tr>
                        <td rowspan="2"><strong>10. DTI-10 Staff/Contractual Services</strong><br><small>(technical and non-technical)</small></td>
                        <td>10.1 Ready provision of appropriate resources and logistical support in the implementation of PAPs</td>
                        <td>Training not implemented as planned</td>
                        <td>Improved training delivery</td>
                        <td class="text-center">Yes</td>
                        <td class="text-center">RR-2</td>
                        <td rowspan="2" class="text-center">
                            <div class="btn-group">
                                <button class="btn btn-warning btn-sm" onclick="editStakeholder('dti_staff')" title="Edit DTI Staff">
                                    <i class="fe-edit"></i>
                                </button>
                                <button class="btn btn-danger btn-sm" onclick="deleteStakeholder('dti_staff')" title="Delete DTI Staff">
                                    <i class="fe-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>10.2 Provision of capability building activities as well as physical and mental wellness program</td>
                        <td>Demotivated personnel</td>
                        <td>Efficient resource utilization and improved staff performance</td>
                        <td class="text-center">No</td>
                        <td class="text-center">RR-5, OR-5</td>
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

            <div id="analysisSets">
                <div class="analysis-set">
                    <h6>Set #1</h6>
                    <h6>Needs & Expectations</h6>
                    <div class="mb-3">
                        <label class="form-label" for="needs1">What does the interested party need or expect from DTI related to the process?</label>
                        <textarea class="form-control" id="needs1" rows="3"></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="potentialRisk1">Potential Risk</label>
                        <p style="font-size: 0.9em; color: #666;">What potential NEGATIVE incident/event can happen if requirements are not met?</p>
                        <textarea class="form-control" id="potentialRisk1" rows="3"></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="potentialOpportunity1">Potential Opportunity</label>
                        <p style="font-size: 0.9em; color: #666;">What potential POSITIVE incident/event can happen if requirements are met or exceeded?</p>
                        <textarea class="form-control" id="potentialOpportunity1" rows="3"></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="toBeConsidered1">To Be Considered</label>
                        <select class="form-control" id="toBeConsidered1">
                            <option value="">Select Option</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">References</label>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="riskReference1" placeholder="Risk Reference # e.g., RR-1">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="opportunityReference1" placeholder="Opportunity Reference # e.g., OR-1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button type="button" class="btn btn-success mb-3" id="addAnalysisSet">
                <i class="fe-plus"></i> Add Analysis Set
            </button>
            
            <div class="mt-4">
                <button type="button" class="btn btn-primary" onclick="saveStakeholder()">Save Entry</button>
                <button type="button" class="btn btn-light" onclick="closeStakeholderModal()">Cancel</button>
            </div>
        </form>
    </div>
</div>

<style>
.analysis-set {
    background-color: #f8f9fa;
    padding: 20px;
    margin-bottom: 20px;
    border-radius: 8px;
    border: 1px solid #dee2e6;
    position: relative;
}

.analysis-set h6 {
    color: #495057;
    font-weight: 600;
    margin-bottom: 15px;
}

.analysis-set:not(:first-child) {
    border-top: 2px solid #007bff;
}

/* Fix all form labels in the modal */
.iqms-modal .form-label {
    background: none !important;
    color: #495057 !important;
    font-weight: 600 !important;
    padding: 0 !important;
    margin-bottom: 8px !important;
    display: block !important;
    border: none !important;
    font-size: 14px !important;
    width: 100% !important;
    white-space: normal !important;
    word-wrap: break-word !important;
    line-height: 1.4 !important;
    text-align: left !important;
    letter-spacing: normal !important;
}

/* Fix all h6 elements in the modal */
.iqms-modal h6 {
    color: #495057 !important;
    font-weight: 600 !important;
    margin-bottom: 15px !important;
    font-size: 16px !important;
    background: none !important;
    padding: 0 !important;
    border: none !important;
    display: block !important;
    width: 100% !important;
    text-align: left !important;
}

/* Fix all h5 elements in the modal */
.iqms-modal h5 {
    color: #495057 !important;
    font-weight: 600 !important;
    margin-bottom: 20px !important;
    font-size: 18px !important;
    background: none !important;
    padding: 0 !important;
    border: none !important;
    display: block !important;
    width: 100% !important;
    text-align: left !important;
}

.analysis-set .mb-3 {
    margin-bottom: 1rem !important;
}

/* Ensure no text centering in form */
.iqms-modal .iqms-form {
    text-align: left !important;
}

.iqms-modal .iqms-form p {
    text-align: left !important;
    margin-bottom: 8px !important;
}

.remove-set-btn {
    position: absolute;
    top: 10px;
    right: 15px;
    background: #dc3545;
    color: white;
    border: none;
    border-radius: 50%;
    width: 30px;
    height: 30px;
    font-size: 16px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
}

.remove-set-btn:hover {
    background: #c82333;
}
</style>

<script>
let setCount = 1;

function openStakeholderModal() {
    document.getElementById('modalTitle').textContent = 'Add New Stakeholder Entry';
    document.getElementById('stakeholderId').value = '';
    document.getElementById('stakeholderForm').reset();
    resetAnalysisSets();
    document.getElementById('stakeholderModal').style.display = 'block';
}

function closeStakeholderModal() {
    document.getElementById('stakeholderModal').style.display = 'none';
    resetAnalysisSets();
}

function resetAnalysisSets() {
    const analysisSets = document.getElementById('analysisSets');
    // Remove all sets except the first one
    while (analysisSets.children.length > 1) {
        analysisSets.removeChild(analysisSets.lastChild);
    }
    setCount = 1;

    // Clear the first set
    document.getElementById('needs1').value = '';
    document.getElementById('potentialRisk1').value = '';
    document.getElementById('potentialOpportunity1').value = '';
    document.getElementById('toBeConsidered1').value = '';
    document.getElementById('riskReference1').value = '';
    document.getElementById('opportunityReference1').value = '';
}

function editStakeholder(stakeholderType) {
    document.getElementById('modalTitle').textContent = 'Edit Stakeholder Category';
    document.getElementById('stakeholderId').value = stakeholderType;

    // Set the interested party dropdown based on stakeholder type
    const interestedPartySelect = document.getElementById('interestedParty');
    interestedPartySelect.value = stakeholderType;

    // In a real application, you would populate the form with existing data for this stakeholder category
    // For now, we'll just open the modal with the correct stakeholder type selected
    document.getElementById('stakeholderModal').style.display = 'block';
}

function deleteStakeholder(stakeholderType) {
    const stakeholderNames = {
        'business_persons': 'Business Persons',
        'development_partners': 'Development Partners',
        'dti_staff': 'DTI-10 Staff/Contractual Services'
    };

    const stakeholderName = stakeholderNames[stakeholderType] || stakeholderType;

    if (confirm(`Are you sure you want to delete all entries for "${stakeholderName}"? This will remove all analysis sets for this stakeholder category.`)) {
        // In a real application, this would make an AJAX call to delete all records for this stakeholder category
        alert(`All entries for "${stakeholderName}" have been deleted successfully!`);
    }
}

function saveStakeholder() {
    // Validate that at least the first set has needs filled
    const needs1 = document.getElementById('needs1').value;
    const interestedParty = document.getElementById('interestedParty').value;

    if (!interestedParty) {
        alert('Please select an interested party');
        return;
    }

    if (!needs1) {
        alert('Please enter needs and expectations for Set #1');
        return;
    }

    // In a real application, this would validate and save all analysis sets
    alert('Stakeholder entry saved successfully!');
    closeStakeholderModal();
}

// Add new analysis set functionality
document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('addAnalysisSet').addEventListener('click', function() {
        setCount++;
        const newSet = document.createElement('div');
        newSet.className = 'analysis-set';
        newSet.innerHTML = `
            <button type="button" class="remove-set-btn" onclick="removeAnalysisSet(this)" title="Remove this set">×</button>
            <h6>Set #${setCount}</h6>
            <h6>Needs & Expectations</h6>
            <div class="mb-3">
                <label class="form-label" for="needs${setCount}">What does the interested party need or expect from DTI related to the process?</label>
                <textarea class="form-control" id="needs${setCount}" rows="3"></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label" for="potentialRisk${setCount}">Potential Risk</label>
                <p style="font-size: 0.9em; color: #666;">What potential NEGATIVE incident/event can happen if requirements are not met?</p>
                <textarea class="form-control" id="potentialRisk${setCount}" rows="3"></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label" for="potentialOpportunity${setCount}">Potential Opportunity</label>
                <p style="font-size: 0.9em; color: #666;">What potential POSITIVE incident/event can happen if requirements are met or exceeded?</p>
                <textarea class="form-control" id="potentialOpportunity${setCount}" rows="3"></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label" for="toBeConsidered${setCount}">To Be Considered</label>
                <select class="form-control" id="toBeConsidered${setCount}">
                    <option value="">Select Option</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">References</label>
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="riskReference${setCount}" placeholder="Risk Reference # e.g., RR-1">
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="opportunityReference${setCount}" placeholder="Opportunity Reference # e.g., OR-1">
                    </div>
                </div>
            </div>
        `;
        document.getElementById('analysisSets').appendChild(newSet);
    });

    // Handle "Other" option for interested party
    document.getElementById('interestedParty').addEventListener('change', function() {
        const existingOtherInput = document.getElementById('otherPartyInput');
        if (existingOtherInput) {
            existingOtherInput.remove();
        }

        if (this.value === 'other') {
            const otherInput = document.createElement('input');
            otherInput.type = 'text';
            otherInput.className = 'form-control mt-2';
            otherInput.placeholder = 'Specify interested party';
            otherInput.id = 'otherPartyInput';

            this.parentNode.appendChild(otherInput);
        }
    });
});

function removeAnalysisSet(button) {
    if (confirm('Are you sure you want to remove this analysis set?')) {
        const analysisSet = button.parentNode;
        analysisSet.remove();

        // Renumber remaining sets
        const sets = document.querySelectorAll('.analysis-set');
        sets.forEach((set, index) => {
            const setNumber = index + 1;
            const h6 = set.querySelector('h6');
            if (h6 && h6.textContent.startsWith('Set #')) {
                h6.textContent = `Set #${setNumber}`;
            }

            // Update IDs for form elements
            const textareas = set.querySelectorAll('textarea');
            const inputs = set.querySelectorAll('input[type="text"]');
            const selects = set.querySelectorAll('select');

            textareas.forEach((textarea, i) => {
                const baseIds = ['needs', 'potentialRisk', 'potentialOpportunity'];
                if (i < baseIds.length) {
                    textarea.id = baseIds[i] + setNumber;
                }
            });

            selects.forEach((select, i) => {
                const baseIds = ['toBeConsidered'];
                if (i < baseIds.length) {
                    select.id = baseIds[i] + setNumber;
                }
            });

            inputs.forEach((input, i) => {
                const baseIds = ['riskReference', 'opportunityReference'];
                if (i < baseIds.length) {
                    input.id = baseIds[i] + setNumber;
                }
            });
        });

        setCount = sets.length;
    }
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

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



        <!-- Status Bar -->
        <div class="card mb-3">
            <div class="card-body d-flex justify-content-between align-items-center">
                <div class="last-updated">
                    <small class="text-muted">Last Updated: June 10, 2025</small>
                </div>
                <button class="btn btn-success btn-sm">
                    <i class="fe-download"></i> Export SWOT
                </button>
            </div>
        </div>

        <!-- Search and Filter -->
        <div class="row mb-3">
            <div class="col-md-8">
                <input type="text" class="iqms-search-bar" placeholder="Search SWOT items..." id="searchSWOT">
            </div>
            <div class="col-md-4">
                <select class="form-control" id="filterSWOT">
                    <option value="">All Categories</option>
                    <option value="strengths">Strengths</option>
                    <option value="weaknesses">Weaknesses</option>
                    <option value="opportunities">Opportunities</option>
                    <option value="threats">Threats</option>
                </select>
            </div>
        </div>

        <!-- SWOT Grid -->
        <div class="row">
            <!-- Strengths -->
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">STRENGTHS</h5>
                        <button class="btn btn-sm btn-outline-light" onclick="openSWOTModal('strengths')">
                            <i class="fe-plus"></i>
                        </button>
                    </div>
                    <div class="card-body" id="strengthsContent">
                        <div class="swot-item">
                            <div class="d-flex justify-content-between mb-2">
                                <span class="item-number">S1</span>
                                <div class="item-actions">
                                    <button class="btn btn-sm btn-outline-primary" onclick="editSWOTItem('s1')">
                                        <i class="fe-edit"></i>
                                    </button>
                                    <button class="btn btn-sm btn-outline-danger" onclick="deleteSWOTItem('s1')">
                                        <i class="fe-trash"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="item-text">
                                Experienced and competent training staff with diverse expertise
                            </div>
                            <div class="item-reference">
                                <small class="text-muted">Ref: OR-1, OR-3</small>
                            </div>
                        </div>

                        <div class="swot-item">
                            <div class="d-flex justify-content-between mb-2">
                                <span class="item-number">S2</span>
                                <div class="item-actions">
                                    <button class="btn btn-sm btn-outline-primary" onclick="editSWOTItem('s2')">
                                        <i class="fe-edit"></i>
                                    </button>
                                    <button class="btn btn-sm btn-outline-danger" onclick="deleteSWOTItem('s2')">
                                        <i class="fe-trash"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="item-text">
                                Established network of development partners and stakeholders
                            </div>
                            <div class="item-reference">
                                <small class="text-muted">Ref: OR-2</small>
                            </div>
                        </div>

                        <div class="swot-item">
                            <div class="d-flex justify-content-between mb-2">
                                <span class="item-number">S3</span>
                                <div class="item-actions">
                                    <button class="btn btn-sm btn-outline-primary" onclick="editSWOTItem('s3')">
                                        <i class="fe-edit"></i>
                                    </button>
                                    <button class="btn btn-sm btn-outline-danger" onclick="deleteSWOTItem('s3')">
                                        <i class="fe-trash"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="item-text">
                                Strong government support and mandate for MSME development
                            </div>
                            <div class="item-reference">
                                <small class="text-muted">Ref: OR-4</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Weaknesses -->
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-header bg-danger text-white d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">WEAKNESSES</h5>
                        <button class="btn btn-sm btn-outline-light" onclick="openSWOTModal('weaknesses')">
                            <i class="fe-plus"></i>
                        </button>
                    </div>
                    <div class="card-body" id="weaknessesContent">
                        <div class="swot-item">
                            <div class="d-flex justify-content-between mb-2">
                                <span class="item-number">W1</span>
                                <div class="item-actions">
                                    <button class="btn btn-sm btn-outline-primary" onclick="editSWOTItem('w1')">
                                        <i class="fe-edit"></i>
                                    </button>
                                    <button class="btn btn-sm btn-outline-danger" onclick="deleteSWOTItem('w1')">
                                        <i class="fe-trash"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="item-text">
                                Limited training venues and facilities
                            </div>
                            <div class="item-reference">
                                <small class="text-muted">Ref: RR-1</small>
                            </div>
                        </div>

                        <div class="swot-item">
                            <div class="d-flex justify-content-between mb-2">
                                <span class="item-number">W2</span>
                                <div class="item-actions">
                                    <button class="btn btn-sm btn-outline-primary" onclick="editSWOTItem('w2')">
                                        <i class="fe-edit"></i>
                                    </button>
                                    <button class="btn btn-sm btn-outline-danger" onclick="deleteSWOTItem('w2')">
                                        <i class="fe-trash"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="item-text">
                                Budget constraints for training materials and resources
                            </div>
                            <div class="item-reference">
                                <small class="text-muted">Ref: RR-2</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Opportunities -->
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-header bg-info text-white d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">OPPORTUNITIES</h5>
                        <button class="btn btn-sm btn-outline-light" onclick="openSWOTModal('opportunities')">
                            <i class="fe-plus"></i>
                        </button>
                    </div>
                    <div class="card-body" id="opportunitiesContent">
                        <div class="swot-item">
                            <div class="d-flex justify-content-between mb-2">
                                <span class="item-number">O1</span>
                                <div class="item-actions">
                                    <button class="btn btn-sm btn-outline-primary" onclick="editSWOTItem('o1')">
                                        <i class="fe-edit"></i>
                                    </button>
                                    <button class="btn btn-sm btn-outline-danger" onclick="deleteSWOTItem('o1')">
                                        <i class="fe-trash"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="item-text">
                                Growing interest in digital business and e-commerce
                            </div>
                            <div class="item-reference">
                                <small class="text-muted">Ref: OR-5</small>
                            </div>
                        </div>

                        <div class="swot-item">
                            <div class="d-flex justify-content-between mb-2">
                                <span class="item-number">O2</span>
                                <div class="item-actions">
                                    <button class="btn btn-sm btn-outline-primary" onclick="editSWOTItem('o2')">
                                        <i class="fe-edit"></i>
                                    </button>
                                    <button class="btn btn-sm btn-outline-danger" onclick="deleteSWOTItem('o2')">
                                        <i class="fe-trash"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="item-text">
                                Potential partnerships with private sector for training sponsorship
                            </div>
                            <div class="item-reference">
                                <small class="text-muted">Ref: OR-6</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Threats -->
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-header bg-warning text-dark d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">THREATS</h5>
                        <button class="btn btn-sm btn-outline-dark" onclick="openSWOTModal('threats')">
                            <i class="fe-plus"></i>
                        </button>
                    </div>
                    <div class="card-body" id="threatsContent">
                        <div class="swot-item">
                            <div class="d-flex justify-content-between mb-2">
                                <span class="item-number">T1</span>
                                <div class="item-actions">
                                    <button class="btn btn-sm btn-outline-primary" onclick="editSWOTItem('t1')">
                                        <i class="fe-edit"></i>
                                    </button>
                                    <button class="btn btn-sm btn-outline-danger" onclick="deleteSWOTItem('t1')">
                                        <i class="fe-trash"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="item-text">
                                Competition from private training providers
                            </div>
                            <div class="item-reference">
                                <small class="text-muted">Ref: RR-3</small>
                            </div>
                        </div>

                        <div class="swot-item">
                            <div class="d-flex justify-content-between mb-2">
                                <span class="item-number">T2</span>
                                <div class="item-actions">
                                    <button class="btn btn-sm btn-outline-primary" onclick="editSWOTItem('t2')">
                                        <i class="fe-edit"></i>
                                    </button>
                                    <button class="btn btn-sm btn-outline-danger" onclick="deleteSWOTItem('t2')">
                                        <i class="fe-trash"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="item-text">
                                Economic uncertainties affecting business participation
                            </div>
                            <div class="item-reference">
                                <small class="text-muted">Ref: RR-4</small>
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

<!-- Modal for Add/Edit SWOT Item -->
<div id="swotModal" class="iqms-modal">
    <div class="iqms-modal-content">
        <div class="iqms-modal-header">
            <h3 class="iqms-modal-title" id="swotModalTitle">Add SWOT Item</h3>
            <span class="iqms-close" onclick="closeSWOTModal()">&times;</span>
        </div>
        
        <form class="iqms-form" id="swotForm">
            <input type="hidden" id="swotItemId">
            <input type="hidden" id="swotCategory">
            
            <div class="iqms-form-group">
                <label class="iqms-form-label" for="itemNumber">Item Number:</label>
                <input type="text" class="iqms-form-control" id="itemNumber" placeholder="e.g., S1, W1, O1, T1">
            </div>
            
            <div class="iqms-form-group">
                <label class="iqms-form-label" for="itemDescription">Description:</label>
                <textarea class="iqms-form-control" id="itemDescription" rows="4" placeholder="Enter detailed description..."></textarea>
            </div>
            
            <div class="iqms-form-group">
                <label class="iqms-form-label" for="itemReference">Reference:</label>
                <input type="text" class="iqms-form-control" id="itemReference" placeholder="e.g., OR-1, RR-2">
            </div>
            
            <div class="mt-4">
                <button type="button" class="iqms-btn" onclick="saveSWOTItem()">Save Item</button>
                <button type="button" class="iqms-btn iqms-btn-secondary" onclick="closeSWOTModal()">Cancel</button>
            </div>
        </form>
    </div>
</div>

<script>
let currentSWOTCategory = '';

function openSWOTModal(category) {
    currentSWOTCategory = category;
    document.getElementById('swotCategory').value = category;
    document.getElementById('swotModalTitle').textContent = `Add ${category.charAt(0).toUpperCase() + category.slice(1)} Item`;
    document.getElementById('swotItemId').value = '';
    document.getElementById('swotForm').reset();
    document.getElementById('swotModal').style.display = 'block';
}

function closeSWOTModal() {
    document.getElementById('swotModal').style.display = 'none';
}

function editSWOTItem(id) {
    document.getElementById('swotModalTitle').textContent = 'Edit SWOT Item';
    document.getElementById('swotItemId').value = id;
    // In a real application, you would populate the form with existing data
    document.getElementById('swotModal').style.display = 'block';
}

function deleteSWOTItem(id) {
    if (confirm('Are you sure you want to delete this SWOT item?')) {
        // In a real application, this would make an AJAX call to delete the record
        alert('SWOT item deleted successfully!');
    }
}

function saveSWOTItem() {
    // In a real application, this would validate and save the data
    alert('SWOT item saved successfully!');
    closeSWOTModal();
}

// Search functionality
document.getElementById('searchSWOT').addEventListener('input', function() {
    const searchTerm = this.value.toLowerCase();
    const items = document.querySelectorAll('.swot-item');
    
    items.forEach(item => {
        const text = item.textContent.toLowerCase();
        if (text.includes(searchTerm)) {
            item.style.display = '';
        } else {
            item.style.display = 'none';
        }
    });
});

// Filter functionality
document.getElementById('filterSWOT').addEventListener('change', function() {
    const filterValue = this.value;
    const sections = ['strengths', 'weaknesses', 'opportunities', 'threats'];
    
    sections.forEach(section => {
        const element = document.getElementById(section + 'Content').closest('.col-md-6');
        if (filterValue === '' || filterValue === section) {
            element.style.display = '';
        } else {
            element.style.display = 'none';
        }
    });
});

// Close modal when clicking outside
window.onclick = function(event) {
    const modal = document.getElementById('swotModal');
    if (event.target == modal) {
        closeSWOTModal();
    }
}
</script>

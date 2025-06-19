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
                    <span class="info-value">FM-PL-03</span>
                </div>
                <div class="info-row">
                    <span class="info-label">REVISION:</span>
                    <span class="info-value">2</span>
                </div>
                <div class="info-row">
                    <span class="info-label">DATE:</span>
                    <span class="info-value">01-Jun-25</span>
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



        <!-- Search and Filter -->
        <div class="row mb-3">
            <div class="col-md-8">
                <input type="text" class="iqms-search-bar search-input" placeholder="Search SWOT items..." id="searchSWOT">
            </div>
            <div class="col-md-3">
                <select class="iqms-form-control filter-select" id="filterSWOT">
                    <option value="all">All Categories</option>
                    <option value="strengths">Strengths</option>
                    <option value="weaknesses">Weaknesses</option>
                    <option value="opportunities">Opportunities</option>
                    <option value="threats">Threats</option>
                </select>
            </div>
            <div class="col-md-1 text-right">
                <button class="iqms-btn iqms-btn-success">
                    <i class="fe-download"></i> Export
                </button>
            </div>
        </div>

        <!-- SWOT Container -->
        <div class="swot-container">
            <div class="swot-box strengths">
                <div class="swot-header">
                    <span>STRENGTHS</span>
                    <button class="add-btn" onclick="openModal('strength')">+</button>
                </div>
                <div class="swot-content" id="strengths-content">
                    <!-- Strengths items will be added here dynamically -->
                </div>
            </div>


            <div class="swot-box weaknesses">
                <div class="swot-header">
                    <span>WEAKNESSES</span>
                    <button class="add-btn" onclick="openModal('weakness')">+</button>
                </div>
                <div class="swot-content" id="weaknesses-content">
                    <!-- Weaknesses items will be added here dynamically -->
                </div>
            </div>

            <div class="swot-box opportunities">
                <div class="swot-header">
                    <span>OPPORTUNITIES</span>
                    <button class="add-btn" onclick="openModal('opportunity')">+</button>
                </div>
                <div class="swot-content" id="opportunities-content">
                    <!-- Opportunities items will be added here dynamically -->
                </div>
            </div>

            <div class="swot-box threats">
                <div class="swot-header">
                    <span>THREATS</span>
                    <button class="add-btn" onclick="openModal('threat')">+</button>
                </div>
                <div class="swot-content" id="threats-content">
                    <!-- Threats items will be added here dynamically -->
                </div>
            </div>
        </div>
    </div>
    <!-- container -->
</div>
<!-- content -->

<!-- Modal for Add/Edit SWOT Item -->
<div id="swotModal" class="iqms-modal">
    <div class="iqms-modal-content" style="max-width: 700px;">
        <div class="iqms-modal-header">
            <h3 class="iqms-modal-title" id="modalTitle">Add SWOT Item</h3>
            <span class="iqms-close" onclick="closeModal()">&times;</span>
        </div>

        <form class="iqms-form" id="swotForm">
            <input type="hidden" id="itemId">
            <input type="hidden" id="itemType">

            <div class="iqms-form-group">
                <label class="iqms-form-label" for="itemNumber">Item Number:</label>
                <input type="text" class="iqms-form-control" id="itemNumber" required>
            </div>

            <div class="iqms-form-group">
                <label class="iqms-form-label" for="itemText">Issue/Description:</label>
                <textarea class="iqms-form-control" id="itemText" rows="3" required></textarea>
            </div>

            <div class="iqms-form-group">
                <label class="iqms-form-label" for="potentialRisk">Potential Risk (Negative Effect):</label>
                <textarea class="iqms-form-control" id="potentialRisk" rows="3"></textarea>
            </div>

            <div class="iqms-form-group">
                <label class="iqms-form-label" for="potentialOpportunity">Potential Opportunity (Positive Effect):</label>
                <textarea class="iqms-form-control" id="potentialOpportunity" rows="3"></textarea>
            </div>

            <div class="iqms-form-group">
                <label class="iqms-form-label" for="reference">Reference/Links:</label>
                <input type="text" class="iqms-form-control" id="reference">
            </div>

            <div class="mt-4">
                <button type="submit" class="iqms-btn iqms-btn-primary">Save</button>
                <button type="button" class="iqms-btn iqms-btn-secondary" onclick="closeModal()">Cancel</button>
            </div>
        </form>
    </div>
</div>

<script>
// Sample data - in a real app, this would come from a database
let swotData = {
    strengths: [
        {
            id: 's1',
            number: 'S-1',
            text: 'Presence of dedicated, reliable and competent staff',
            opportunity: 'Pool of in-house resource persons to conduct the training effectively and efficiently',
            reference: 'OR-6'
        },
        {
            id: 's2',
            number: 'S-2',
            text: 'Inclusive growth programs in place (e.g. training programs)',
            opportunity: 'Effective and efficient conduct of relevant trainings',
            reference: 'OR-1'
        },
        {
            id: 's3',
            number: 'S-3',
            text: 'Availability of ICT infrastructure (hardware, software, systems)',
            opportunity: 'Use of new methodology in conducting trainings online such as thru zoom, googlemeet, webex, teams',
            reference: 'OR-7'
        }
    ],
    weaknesses: [
        {
            id: 'w1',
            number: 'W-1',
            text: 'Limited manpower',
            opportunity: '',
            reference: ''
        },
        {
            id: 'w5',
            number: 'W-5',
            text: 'Lack of integrated database and data management system',
            opportunity: '',
            reference: ''
        }
    ],
    opportunities: [
        {
            id: 'o1',
            number: 'O-1',
            text: 'Availability of external training programs',
            opportunity: 'Pool of in-house resource persons to conduct the training effectively and efficiently',
            reference: 'OR-6'
        },
        {
            id: 'o3',
            number: 'O-3',
            text: 'Availability and advancement of ICT infra and systems',
            opportunity: 'More MSMEs can be reached to participate in the training program',
            reference: 'OR-8'
        }
    ],
    threats: [
        {
            id: 't1',
            number: 'T-1',
            text: 'Negative Political Interventions',
            opportunity: '',
            reference: ''
        },
        {
            id: 't2',
            number: 'T-2',
            text: 'Power interruptions',
            opportunity: '',
            reference: ''
        }
    ]
};

// Initialize the app when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    renderSWOTItems();

    // Form submission handler
    document.getElementById('swotForm').addEventListener('submit', function(e) {
        e.preventDefault();
        saveSWOTItem();
    });

    // Search functionality
    document.querySelector('.search-input').addEventListener('input', function() {
        filterSWOTItems();
    });

    // Filter functionality
    document.querySelector('.filter-select').addEventListener('change', function() {
        filterSWOTItems();
    });
});

// Render all SWOT items
function renderSWOTItems() {
    renderCategoryItems('strengths');
    renderCategoryItems('weaknesses');
    renderCategoryItems('opportunities');
    renderCategoryItems('threats');
}

// Render items for a specific category
function renderCategoryItems(category) {
    const container = document.getElementById(`${category}-content`);
    container.innerHTML = '';

    if (swotData[category].length === 0) {
        container.innerHTML = '<div class="no-items">No items found</div>';
        return;
    }

    swotData[category].forEach(item => {
        const itemElement = document.createElement('div');
        itemElement.className = 'swot-item';
        itemElement.dataset.id = item.id;

        let opportunityHtml = '';
        if (item.opportunity) {
            opportunityHtml = `<div class="item-opportunity"><strong>Opportunity:</strong> ${item.opportunity}</div>`;
        }

        let referenceHtml = '';
        if (item.reference) {
            referenceHtml = `<div class="item-reference"><strong>Reference:</strong> ${item.reference}</div>`;
        }

        itemElement.innerHTML = `
            <div class="swot-item-header">
                <span class="item-number">${item.number}</span>
                <div class="item-actions">
                    <button class="edit-btn" onclick="editItem('${category}', '${item.id}')">Edit</button>
                    <button class="delete-btn" onclick="deleteItem('${category}', '${item.id}')">Delete</button>
                </div>
            </div>
            <div class="item-text">${item.text}</div>
            ${opportunityHtml}
            ${referenceHtml}
        `;

        container.appendChild(itemElement);
    });
}

// Open modal for adding/editing items
function openModal(type, id = null) {
    const modal = document.getElementById('swotModal');
    const modalTitle = document.getElementById('modalTitle');

    // Set modal title based on type
    const typeNames = {
        'strength': 'Strength',
        'weakness': 'Weakness',
        'opportunity': 'Opportunity',
        'threat': 'Threat'
    };

    if (id) {
        modalTitle.textContent = `Edit ${typeNames[type]} Item`;
    } else {
        modalTitle.textContent = `Add ${typeNames[type]} Item`;
    }

    // Set item type
    document.getElementById('itemType').value = type;

    // If editing, populate form with existing data
    if (id) {
        const category = type + 's'; // Convert to plural
        const item = swotData[category].find(item => item.id === id);

        if (item) {
            document.getElementById('itemId').value = id;
            document.getElementById('itemNumber').value = item.number;
            document.getElementById('itemText').value = item.text;
            document.getElementById('potentialRisk').value = item.risk || '';
            document.getElementById('potentialOpportunity').value = item.opportunity || '';
            document.getElementById('reference').value = item.reference || '';
        }
    } else {
        // Reset form for new item
        document.getElementById('swotForm').reset();
        document.getElementById('itemId').value = '';

        // Set default item number based on category
        let prefix = '';
        switch(type) {
            case 'strength': prefix = 'S-'; break;
            case 'weakness': prefix = 'W-'; break;
            case 'opportunity': prefix = 'O-'; break;
            case 'threat': prefix = 'T-'; break;
        }

        // Find the next available number
        const category = type + 's';
        const nextNum = swotData[category].length + 1;
        document.getElementById('itemNumber').value = `${prefix}${nextNum}`;
    }

    modal.style.display = 'flex';
}

// Close modal
function closeModal() {
    document.getElementById('swotModal').style.display = 'none';
}

// Save SWOT item (add new or update existing)
function saveSWOTItem() {
    const type = document.getElementById('itemType').value;
    const id = document.getElementById('itemId').value;
    const category = type + 's';

    const itemData = {
        number: document.getElementById('itemNumber').value,
        text: document.getElementById('itemText').value,
        risk: document.getElementById('potentialRisk').value,
        opportunity: document.getElementById('potentialOpportunity').value,
        reference: document.getElementById('reference').value
    };

    if (id) {
        // Update existing item
        const index = swotData[category].findIndex(item => item.id === id);
        if (index !== -1) {
            swotData[category][index] = { ...swotData[category][index], ...itemData };
        }
    } else {
        // Add new item
        const newId = type.charAt(0) + (swotData[category].length + 1);
        itemData.id = newId;
        swotData[category].push(itemData);
    }

    // Re-render the category
    renderCategoryItems(category);
    closeModal();
}

// Edit item
function editItem(category, id) {
    const type = category.slice(0, -1); // Convert to singular (e.g., strengths -> strength)
    openModal(type, id);
}

// Delete item
function deleteItem(category, id) {
    if (confirm('Are you sure you want to delete this item?')) {
        swotData[category] = swotData[category].filter(item => item.id !== id);
        renderCategoryItems(category);
    }
}

// Filter SWOT items based on search and category filter
function filterSWOTItems() {
    const searchTerm = document.querySelector('.search-input').value.toLowerCase();
    const filterValue = document.querySelector('.filter-select').value;

    // For each category, show/hide items based on filters
    const categories = ['strengths', 'weaknesses', 'opportunities', 'threats'];

    categories.forEach(category => {
        const swotBox = document.querySelector(`.swot-box.${category}`);

        // Skip this category if filter is set to another category
        if (filterValue !== 'all' && filterValue !== category) {
            swotBox.style.display = 'none';
            return;
        }

        swotBox.style.display = 'block';

        const items = document.querySelectorAll(`#${category}-content .swot-item`);
        let hasVisibleItems = false;

        items.forEach(item => {
            const text = item.textContent.toLowerCase();
            const isVisible = text.includes(searchTerm);
            item.style.display = isVisible ? 'block' : 'none';

            if (isVisible) hasVisibleItems = true;
        });

        // Show "no items" message if no items match the filter
        const container = document.getElementById(`${category}-content`);
        const noItemsMsg = container.querySelector('.no-items');

        if (!hasVisibleItems && items.length > 0) {
            if (!noItemsMsg) {
                const msg = document.createElement('div');
                msg.className = 'no-items';
                msg.textContent = 'No items match your search';
                container.appendChild(msg);
            }
        } else if (noItemsMsg) {
            container.removeChild(noItemsMsg);
        }
    });
}

// Close modal when clicking outside
window.onclick = function(event) {
    const modal = document.getElementById('swotModal');
    if (event.target == modal) {
        closeModal();
    }
}
</script>

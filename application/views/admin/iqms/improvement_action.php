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
                    <span class="info-value">FM-PL-09</span>
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

        <!-- Filters -->
        <div class="row mb-3">
            <div class="col-md-3">
                <label for="statusFilter">Status</label>
                <select class="form-control" id="statusFilter">
                    <option value="all">All Status</option>
                    <option value="planned">Planned</option>
                    <option value="in-progress">In Progress</option>
                    <option value="completed">Completed</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="timelineFilter">Timeline</label>
                <select class="form-control" id="timelineFilter">
                    <option value="all">All Timelines</option>
                    <option value="q1">Q1 2025</option>
                    <option value="q2">Q2 2025</option>
                    <option value="q3">Q3 2025</option>
                    <option value="q4">Q4 2025</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="searchActions">Search</label>
                <input type="text" class="form-control" placeholder="Search improvement actions..." id="searchActions">
            </div>
            <div class="col-md-2 text-right" style="padding-top: 25px;">
                <button class="btn btn-success waves-effect waves-light" onclick="openActionModal()">
                    <i class="fe-plus"></i> Add Action
                </button>
            </div>
        </div>

        <!-- Improvement Actions Table -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="actionsTable">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Improvement Actions</th>
                                        <th>Responsibility</th>
                                        <th>Timeline</th>
                                        <th>Resources Needed</th>
                                        <th>Status / Remarks</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Data will be populated by JavaScript -->
                                </tbody>
                            </table>
                        </div>
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
    <div class="iqms-modal-content" style="max-width: 800px;">
        <div class="iqms-modal-header">
            <h3 class="iqms-modal-title" id="actionModalTitle">Add Improvement Action</h3>
            <span class="iqms-close" onclick="closeActionModal()">&times;</span>
        </div>

        <form class="iqms-form" id="actionForm">
            <input type="hidden" id="actionId">

            <div class="iqms-form-group">
                <label class="iqms-form-label" for="improvementAction">Improvement Action:</label>
                <input type="text" class="iqms-form-control" id="improvementAction" placeholder="Enter improvement action" required>
            </div>

            <div class="iqms-form-group">
                <label class="iqms-form-label" for="responsibility">Responsibility:</label>
                <input type="text" class="iqms-form-control" id="responsibility" placeholder="Enter responsible person/department" required>
            </div>

            <div class="iqms-form-group">
                <label class="iqms-form-label" for="timeline">Timeline:</label>
                <select class="iqms-form-control" id="timeline" required>
                    <option value="">Select Timeline</option>
                    <option value="Q1 2025">Q1 2025</option>
                    <option value="Q2 2025">Q2 2025</option>
                    <option value="Q3 2025">Q3 2025</option>
                    <option value="Q4 2025">Q4 2025</option>
                    <option value="Q1-Q2 2025">Q1-Q2 2025</option>
                    <option value="Q2-Q3 2025">Q2-Q3 2025</option>
                    <option value="Q3-Q4 2025">Q3-Q4 2025</option>
                    <option value="Q2-Q4 2025">Q2-Q4 2025</option>
                </select>
            </div>

            <div class="iqms-form-group">
                <label class="iqms-form-label" for="resources">Resources Needed:</label>
                <input type="text" class="iqms-form-control" id="resources" placeholder="Enter resources needed" required>
            </div>

            <div class="iqms-form-group">
                <label class="iqms-form-label" for="status">Status:</label>
                <select class="iqms-form-control" id="status" required>
                    <option value="">Select Status</option>
                    <option value="planned">Planned</option>
                    <option value="in-progress">In Progress</option>
                    <option value="completed">Completed</option>
                </select>
            </div>

            <div class="iqms-form-group">
                <label class="iqms-form-label" for="remarks">Remarks:</label>
                <textarea class="iqms-form-control" id="remarks" rows="3" placeholder="Enter remarks or additional details"></textarea>
            </div>

            <div class="mt-4">
                <button type="button" class="btn btn-primary" onclick="saveAction()">Save</button>
                <button type="button" class="btn btn-secondary" onclick="closeActionModal()">Cancel</button>
            </div>
        </form>
    </div>
</div>

<script>
// Sample data for improvement actions
let improvementActions = [
    {
        id: 1,
        number: "1",
        action: "Development of Client Management and Profiling System (CMAPS)",
        responsibility: "ORD",
        timeline: "Q2 2025",
        resources: "O365 Power Apps",
        status: "in-progress",
        remarks: "To be rolled-out by April 2025"
    },
    {
        id: 2,
        number: "2",
        action: "Training of Trainers for Technical Staff",
        responsibility: "BDD, FAD",
        timeline: "Q2-Q4 2025",
        resources: "Training Fee, TEV",
        status: "completed",
        remarks: "3 personnel attended the ToT on Export Procedures on Mar 24-26, 2025"
    }
];

document.addEventListener('DOMContentLoaded', function() {
    renderTable();

    // Filter functionality
    const statusFilter = document.getElementById('statusFilter');
    const timelineFilter = document.getElementById('timelineFilter');
    const searchInput = document.getElementById('searchActions');

    if (statusFilter) statusFilter.addEventListener('change', applyFilters);
    if (timelineFilter) timelineFilter.addEventListener('change', applyFilters);
    if (searchInput) searchInput.addEventListener('input', applyFilters);
});

function renderTable() {
    const tbody = document.querySelector('#actionsTable tbody');
    if (!tbody) return;

    tbody.innerHTML = '';
    improvementActions.forEach((action, index) => {
        const row = document.createElement('tr');

        let statusClass = '';
        let statusText = '';
        if (action.status === 'planned') {
            statusClass = 'badge bg-warning';
            statusText = 'Planned';
        } else if (action.status === 'in-progress') {
            statusClass = 'badge bg-info';
            statusText = 'In Progress';
        } else if (action.status === 'completed') {
            statusClass = 'badge bg-success';
            statusText = 'Completed';
        }

        row.innerHTML = `
            <td>${action.number}</td>
            <td>${action.action}</td>
            <td>${action.responsibility}</td>
            <td>${action.timeline}</td>
            <td>${action.resources}</td>
            <td><span class="${statusClass}">${action.remarks}</span></td>
            <td>
                <button class="btn btn-warning btn-sm" onclick="editAction(${action.id})">Edit</button>
                <button class="btn btn-danger btn-sm" onclick="deleteAction(${action.id})">Delete</button>
            </td>
        `;

        tbody.appendChild(row);
    });
}

function openActionModal() {
    document.getElementById('actionModalTitle').textContent = 'Add Improvement Action';
    document.getElementById('actionId').value = '';
    document.getElementById('actionForm').reset();
    document.getElementById('actionModal').style.display = 'block';
}

function closeActionModal() {
    document.getElementById('actionModal').style.display = 'none';
}

function editAction(id) {
    const action = improvementActions.find(a => a.id === id);
    if (action) {
        document.getElementById('actionModalTitle').textContent = 'Edit Improvement Action';
        document.getElementById('actionId').value = action.id;
        document.getElementById('improvementAction').value = action.action;
        document.getElementById('responsibility').value = action.responsibility;
        document.getElementById('timeline').value = action.timeline;
        document.getElementById('resources').value = action.resources;
        document.getElementById('status').value = action.status;
        document.getElementById('remarks').value = action.remarks;

        document.getElementById('actionModal').style.display = 'block';
    }
}

function deleteAction(id) {
    if (confirm('Are you sure you want to delete this improvement action?')) {
        improvementActions = improvementActions.filter(a => a.id !== id);
        renderTable();
        alert('Improvement action deleted successfully!');
    }
}

function saveAction() {
    const id = document.getElementById('actionId').value ? parseInt(document.getElementById('actionId').value) : Date.now();
    const isNew = !document.getElementById('actionId').value;

    const newAction = {
        id: id,
        number: isNew ? (improvementActions.length + 1).toString() : improvementActions.find(a => a.id === id).number,
        action: document.getElementById('improvementAction').value,
        responsibility: document.getElementById('responsibility').value,
        timeline: document.getElementById('timeline').value,
        resources: document.getElementById('resources').value,
        status: document.getElementById('status').value,
        remarks: document.getElementById('remarks').value
    };

    if (isNew) {
        improvementActions.push(newAction);
    } else {
        const index = improvementActions.findIndex(a => a.id === id);
        if (index !== -1) {
            improvementActions[index] = newAction;
        }
    }

    renderTable();
    closeActionModal();
    alert(`Improvement action ${isNew ? 'added' : 'updated'} successfully!`);
}

function applyFilters() {
    const statusValue = document.getElementById('statusFilter').value;
    const timelineValue = document.getElementById('timelineFilter').value;
    const searchValue = document.getElementById('searchActions').value.toLowerCase();

    const rows = document.querySelectorAll('#actionsTable tbody tr');

    rows.forEach(row => {
        const cells = row.querySelectorAll('td');
        const statusClass = cells[5].querySelector('span').className;
        const timelineText = cells[3].textContent;
        const actionText = cells[1].textContent.toLowerCase();

        let statusMatch = true;
        let timelineMatch = true;
        let searchMatch = true;

        // Status filter
        if (statusValue !== 'all') {
            if (statusValue === 'planned' && !statusClass.includes('bg-warning')) statusMatch = false;
            if (statusValue === 'in-progress' && !statusClass.includes('bg-info')) statusMatch = false;
            if (statusValue === 'completed' && !statusClass.includes('bg-success')) statusMatch = false;
        }

        // Timeline filter
        if (timelineValue !== 'all') {
            if (timelineValue === 'q1' && !timelineText.includes('Q1')) timelineMatch = false;
            if (timelineValue === 'q2' && !timelineText.includes('Q2')) timelineMatch = false;
            if (timelineValue === 'q3' && !timelineText.includes('Q3')) timelineMatch = false;
            if (timelineValue === 'q4' && !timelineText.includes('Q4')) timelineMatch = false;
        }

        // Search filter
        if (searchValue && !actionText.includes(searchValue)) {
            searchMatch = false;
        }

        // Show/hide row based on filters
        if (statusMatch && timelineMatch && searchMatch) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    });
}

// Modal click outside to close
window.onclick = function(event) {
    const modal = document.getElementById('actionModal');
    if (event.target == modal) {
        closeActionModal();
    }
}
</script>

<?php include '../../includes/header.php' ?>
<div class="sidebar-overlay" id="sidebarOverlay"></div>
<!-- ---sidebar.... -->
<?php include '../../includes/sidebar.php' ?>
<?php include '../../includes/topnav.php' ?>
<!-- put main content here -->
<div class="container-fluid p-4">
    <div class="row g-4 mb-4">
        <div class="col-xl-3 col-md-6">
            <div class="stats-card">
                <div class="stats-icon" style="background-color: #10b981;">
                    <i class="fas fa-user-graduate"></i>
                </div>
                <div class="stats-content">
                    <div class="stats-number" data-target="1247">0</div>
                    <div class="stats-label">Total Enrolled Students</div>
                    <div class="semester-info">Fall 2025</div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="stats-card">
                <div class="stats-icon" style="background-color: #059669;">
                    <i class="fas fa-chalkboard-teacher"></i>
                </div>
                <div class="stats-content">
                    <div class="stats-number" data-target="89">0</div>
                    <div class="stats-label">Active Classes</div>
                    <div class="semester-info">45 Departments</div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="stats-card">
                <div class="stats-icon" style="background-color: #f59e0b;">
                    <i class="fas fa-hourglass-half"></i>
                </div>
                <div class="stats-content">
                    <div class="stats-number" data-target="156">0</div>
                    <div class="stats-label">Pending Applications</div>
                    <div class="capacity-info">78% Capacity Reached</div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="stats-card">
                <div class="stats-icon" style="background-color: #ef4444;">
                    <i class="fas fa-clock"></i>
                </div>
                <div class="stats-content">
                    <div class="stats-number" data-target="11">0</div>
                    <div class="stats-label">Days Left</div>
                    <div class="deadline-warning">Registration Deadline</div>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4 mb-4">
        <div class="col-lg-8">
            <div class="chart-container">
                <div class="chart-title">Registration Trends</div>
                <ul class="nav nav-pills chart-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="#" data-tab="daily">Daily Registrations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-tab="cumulative">Cumulative Total</a>
                    </li>
                </ul>
                <div style="height: 300px;">
                    <canvas id="registrationChart"></canvas>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="chart-container">
                <div class="chart-title">Enrollment by Department</div>
                <div style="height: 300px; display: flex; align-items: center; justify-content: center;">
                    <canvas id="departmentChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="chart-container">
                <div class="chart-title">Recent Class Registrations</div>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Student ID</th>
                                <th>Name</th>
                                <th>Class</th>
                                <th>Department</th>
                                <th>Registration Time</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>STU-2025-001</strong></td>
                                <td>Emily Johnson</td>
                                <td>Advanced Mathematics</td>
                                <td>Mathematics</td>
                                <td>3 minutes ago</td>
                                <td><span class="badge bg-success">Confirmed</span></td>
                                <td>
                                    <button class="btn btn-sm btn-outline-primary">View</button>
                                    <button class="btn btn-sm btn-outline-secondary">Edit</button>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>STU-2025-002</strong></td>
                                <td>Michael Chen</td>
                                <td>Computer Science Fundamentals</td>
                                <td>Computer Science</td>
                                <td>7 minutes ago</td>
                                <td><span class="badge bg-warning">Pending</span></td>
                                <td>
                                    <button class="btn btn-sm btn-outline-success">Approve</button>
                                    <button class="btn btn-sm btn-outline-danger">Reject</button>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>STU-2025-003</strong></td>
                                <td>Sarah Rodriguez</td>
                                <td>Introduction to Psychology</td>
                                <td>Psychology</td>
                                <td>12 minutes ago</td>
                                <td><span class="badge bg-info">Waitlisted</span></td>
                                <td>
                                    <button class="btn btn-sm btn-outline-primary">View</button>
                                    <button class="btn btn-sm btn-outline-warning">Priority</button>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>STU-2025-004</strong></td>
                                <td>David Park</td>
                                <td>Business Analytics</td>
                                <td>Business</td>
                                <td>18 minutes ago</td>
                                <td><span class="badge bg-success">Confirmed</span></td>
                                <td>
                                    <button class="btn btn-sm btn-outline-primary">View</button>
                                    <button class="btn btn-sm btn-outline-secondary">Edit</button>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>STU-2025-005</strong></td>
                                <td>Lisa Thompson</td>
                                <td>Organic Chemistry Lab</td>
                                <td>Chemistry</td>
                                <td>25 minutes ago</td>
                                <td><span class="badge bg-danger">Rejected</span></td>
                                <td>
                                    <button class="btn btn-sm btn-outline-info">Review</button>
                                    <button class="btn btn-sm btn-outline-success">Reconsider</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../../includes/footer.php' ?>
<?php include '../../includes/header.php' ?>
<div class="sidebar-overlay" id="sidebarOverlay"></div>
<!-- ---sidebar.... -->
<?php include '../../includes/sidebar.php' ?>
<?php include '../../includes/topnav.php' ?>

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

<footer class="footer">
    <p class="mb-0">&copy; 2025 REGSTAR ERP. All Rights Reserved. |
        <a href="#" class="text-decoration-none" style="color: var(--primary-color);">Privacy Policy</a> |
        <a href="#" class="text-decoration-none" style="color: var(--primary-color);">Terms of Use</a>
    </p>
</footer>

</div>

<div class="offcanvas offcanvas-end" tabindex="-1" id="userProfileOffcanvas" aria-labelledby="userProfileOffcanvasLabel">
    <div class="offcanvas-header modal-header">
        <h5 class="offcanvas-title" id="userProfileOffcanvasLabel">
            <i class="fas fa-user-circle me-2"></i>User Profile
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="profile-info">
            <img src="../../assets/images/profiles/ceopurple.png" alt="User Avatar" class="profile-avatar-large">
            <h5 class="mb-1">Dr. Sarah Mitchell</h5>
            <div class="role-badge">System Administrator</div>
        </div>

        <div class="profile-details">
            <div class="profile-detail">
                <span class="profile-label">
                    <i class="fas fa-id-badge me-2"></i>Employee ID
                </span>
                <span class="profile-value">EMP-2025-001</span>
            </div>
            <div class="profile-detail">
                <span class="profile-label">
                    <i class="fas fa-envelope me-2"></i>Email
                </span>
                <span class="profile-value">sarah.mitchell@regstar.edu</span>
            </div>
            <div class="profile-detail">
                <span class="profile-label">
                    <i class="fas fa-phone me-2"></i>Phone
                </span>
                <span class="profile-value">+1 (555) 123-4567</span>
            </div>
            <div class="profile-detail">
                <span class="profile-label">
                    <i class="fas fa-building me-2"></i>Department
                </span>
                <span class="profile-value">IT Administration</span>
            </div>
            <div class="profile-detail">
                <span class="profile-label">
                    <i class="fas fa-calendar me-2"></i>Last Login
                </span>
                <span class="profile-value">Today, 9:32 AM</span>
            </div>
            <div class="profile-detail">
                <span class="profile-label">
                    <i class="fas fa-shield-alt me-2"></i>Access Level
                </span>
                <span class="profile-value">Full System Access</span>
            </div>
        </div>

        <div class="mt-4 d-grid gap-2">
            <button type="button" class="btn btn-primary" style="background-color: var(--primary-color); border-color: var(--primary-color);">
                <i class="fas fa-edit me-2"></i>Edit Profile
            </button>
            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="offcanvas">Close</button>
        </div>
    </div>
</div>


<script src="../../assets/libraries/bootstrap-5.3.7-dist/js/bootstrap.bundle.min.js"></script>

<script>
    // Sidebar Toggle
    const sidebar = document.getElementById('sidebar');
    const mainContent = document.getElementById('mainContent');
    const sidebarToggle = document.getElementById('sidebarToggle');
    const sidebarOverlay = document.getElementById('sidebarOverlay');

    function toggleSidebar() {
        if (window.innerWidth <= 768) {
            // Mobile behavior: show/hide sidebar and overlay
            sidebar.classList.toggle('show');
            sidebarOverlay.classList.toggle('show');
        } else {
            // Desktop behavior: toggle collapsed state
            sidebar.classList.toggle('collapsed');
            mainContent.classList.toggle('expanded');
        }
    }

    sidebarToggle.addEventListener('click', toggleSidebar);

    // Close sidebar when clicking overlay on mobile
    sidebarOverlay.addEventListener('click', function() {
        sidebar.classList.remove('show');
        sidebarOverlay.classList.remove('show');
    });

    // Handle window resize for responsive behavior
    window.addEventListener('resize', function() {
        if (window.innerWidth > 768) {
            // If switching to desktop, ensure mobile 'show' is removed
            sidebar.classList.remove('show');
            sidebarOverlay.classList.remove('show');
            // If you want it to default to expanded on desktop resize, you can add:
            // sidebar.classList.remove('collapsed');
            // mainContent.classList.remove('expanded');
        } else {
            // If switching to mobile, ensure desktop 'collapsed' state is removed
            sidebar.classList.remove('collapsed');
            mainContent.classList.remove('expanded');
        }
    });

    // Close mobile sidebar when clicking nav links
    document.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', function() {
            if (window.innerWidth <= 768) {
                sidebar.classList.remove('show');
                sidebarOverlay.classList.remove('show');
            }
        });
    });

    // Animated Number Counter
    function animateNumbers() {
        const counters = document.querySelectorAll('.stats-number[data-target]');

        counters.forEach(counter => {
            const target = parseInt(counter.getAttribute('data-target'));
            const duration = 2000; // 2 seconds
            const increment = target / (duration / 16); // 60fps
            let current = 0;

            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    current = target;
                    clearInterval(timer);
                }
                counter.textContent = Math.floor(current).toLocaleString();
            }, 16);
        });
    }

    // Start animation when page loads
    window.addEventListener('load', animateNumbers);

    // Registration Chart
    const registrationCtx = document.getElementById('registrationChart').getContext('2d');
    const registrationChart = new Chart(registrationCtx, {
        type: 'line',
        data: {
            labels: ['Aug 15', 'Aug 18', 'Aug 21', 'Aug 24', 'Aug 27', 'Aug 30'],
            datasets: [{
                label: 'Daily Registrations',
                data: [45, 78, 125, 89, 156, 134],
                borderColor: '#10b981',
                backgroundColor: 'rgba(16, 185, 129, 0.1)',
                tension: 0.4,
                pointRadius: 6,
                pointBackgroundColor: '#10b981',
                pointBorderColor: '#ffffff',
                pointBorderWidth: 2,
                fill: true
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    grid: {
                        color: '#f3f4f6'
                    },
                    ticks: {
                        callback: function(value) {
                            return value + ' students';
                        }
                    }
                },
                x: {
                    grid: {
                        color: '#f3f4f6'
                    }
                }
            }
        }
    });

    // Department Chart (Pie/Doughnut)
    const departmentCtx = document.getElementById('departmentChart').getContext('2d');
    const departmentChart = new Chart(departmentCtx, {
        type: 'doughnut',
        data: {
            labels: ['Computer Science', 'Business', 'Mathematics', 'Psychology', 'Engineering', 'Arts'],
            datasets: [{
                data: [285, 198, 156, 142, 178, 88],
                backgroundColor: ['#10b981', '#059669', '#f59e0b', '#8b5cf6', '#ef4444', '#06b6d4'],
                borderWidth: 0
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'bottom',
                    labels: {
                        usePointStyle: true,
                        padding: 15,
                        font: {
                            size: 11
                        }
                    }
                }
            },
            cutout: '60%'
        }
    });

    // Tab switching for charts
    document.querySelectorAll('.chart-tabs .nav-link').forEach(tab => {
        tab.addEventListener('click', function(e) {
            e.preventDefault();

            // Remove active class from all tabs
            document.querySelectorAll('.chart-tabs .nav-link').forEach(t => t.classList.remove('active'));

            // Add active class to clicked tab
            this.classList.add('active');

            // Update chart data based on tab
            const tabType = this.getAttribute('data-tab');
            if (tabType === 'cumulative') {
                registrationChart.data.datasets[0].label = 'Cumulative Registrations';
                registrationChart.data.datasets[0].data = [45, 123, 248, 337, 493, 627];
                registrationChart.data.datasets[0].borderColor = '#10b981';
                registrationChart.data.datasets[0].backgroundColor = 'rgba(16, 185, 129, 0.1)';
                registrationChart.data.datasets[0].pointBackgroundColor = '#10b981';
            } else {
                registrationChart.data.datasets[0].label = 'Daily Registrations';
                registrationChart.data.datasets[0].data = [45, 78, 125, 89, 156, 134];
                registrationChart.data.datasets[0].borderColor = '#10b981';
                registrationChart.data.datasets[0].backgroundColor = 'rgba(16, 185, 129, 0.1)';
                registrationChart.data.datasets[0].pointBackgroundColor = '#10b981';
            }
            registrationChart.update();
        });
    });

    // Log out button
    document.querySelector('.log-out-btn').addEventListener('click', function() {
        // Add your logout logic here
        alert('Logging out...'); // Placeholder
    });
</script>
</body>

</html>
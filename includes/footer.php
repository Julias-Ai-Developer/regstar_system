
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
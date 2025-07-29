<div class="app-content">
  <div class="">
    <!-- Header Section starts -->
    <header class="header-main">
      <div class="container-fluid">
        <div class="row align-items-center">
          <!-- Left: Menu toggle + KAMA -->
          <div class="col-6 col-sm-4 d-flex align-items-center header-left p-0">
            <span class="header-toggle me-3">
              <i class="ph ph-circles-four"></i>
            </span>
            <p class="mb-0 fw-bold fs-5">KAMA</p>
          </div>

          <!-- Right: Icons, Notifications, Profile -->
          <div class="col-6 col-sm-8 d-flex align-items-center justify-content-end header-right p-0">
            <ul class="d-flex align-items-center mb-0 list-unstyled">

              <!-- Apps Shortcut Icon -->
              <li class="header-apps me-3">
                <a href="#" class="d-block head-icon" role="button" data-bs-toggle="offcanvas"
                   data-bs-target="#appscanvasRights" aria-controls="appscanvasRights">
                  <i class="ph ph-bounding-box"></i>
                </a>

                <!-- Offcanvas Apps -->
                <div class="offcanvas offcanvas-end header-apps-canvas" tabindex="-1" id="appscanvasRights"
                     aria-labelledby="appscanvasRightsLabel">
                  <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="appscanvasRightsLabel">Shortcut</h5>
                  </div>
                  <div class="offcanvas-body app-scroll">
                    <div class="row row-cols-3">
                      <!-- App Links -->
                      <div class="d-flex-center text-center mb-3">
                        <a href="calendar.html" target="_blank">
                          <i class="ph-duotone ph-calendar text-dark f-s-30"></i>
                          <p class="mb-0 f-w-500 text-secondary">Calendar</p>
                        </a>
                      </div>
                      <div class="d-flex-center text-center mb-3">
                        <a href="gallery.html" target="_blank">
                          <i class="ph-duotone ph-google-photos-logo f-s-30 text-success"></i>
                          <p class="mb-0 f-w-500 text-secondary">Gallery</p>
                        </a>
                      </div>
                      <div class="d-flex-center text-center mb-3">
                        <a href="profile.html" target="_blank">
                          <i class="ph-duotone ph-users-three f-s-30 text-primary"></i>
                          <p class="mb-0 f-w-500 text-secondary">Profile</p>
                        </a>
                      </div>
                      <div class="d-flex-center text-center mb-3">
                        <a href="kanban_board.html" target="_blank">
                          <i class="ph-duotone ph-selection-foreground f-s-30 text-secondary"></i>
                          <p class="mb-0 f-w-500 text-secondary">Task Board</p>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </li>

              <!-- Dark Mode Toggle -->
              <li class="header-dark me-3">
                <div class="sun-logo head-icon"><i class="ph ph-moon-stars"></i></div>
                <div class="moon-logo head-icon"><i class="ph ph-sun-dim"></i></div>
              </li>

              <!-- Notifications -->
              <li class="header-notification me-3">
                <a href="#" class="d-block head-icon position-relative" role="button" data-bs-toggle="offcanvas"
                   data-bs-target="#notificationcanvasRight" aria-controls="notificationcanvasRight">
                  <i class="ph ph-bell"></i>
                  <span class="position-absolute translate-middle p-1 bg-success border border-light rounded-circle animate__animated animate__fadeIn animate__infinite animate__slower"></span>
                </a>

                <!-- Notification Offcanvas -->
                <div class="offcanvas offcanvas-end header-notification-canvas" tabindex="-1"
                     id="notificationcanvasRight" aria-labelledby="notificationcanvasRightLabel">
                  <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="notificationcanvasRightLabel">Notification</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body app-scroll p-0">
                    <div class="head-container">
                      <!-- Notification Items -->
                      <!-- Add your notification items here exactly as you already have them -->
                    </div>
                  </div>
                </div>
              </li>

              <!-- Profile -->
              <li class="header-profile d-flex align-items-center gap-3">
                <a href="#" class="head-icon flex-shrink-0" role="button" data-bs-toggle="offcanvas"
                   data-bs-target="#profilecanvasRight" aria-controls="profilecanvasRight">
                  <img src="../../assets/images/avtar/woman.jpg" alt="Avatar" class="b-r-10 h-35 w-35">
                </a>
                <div>
                  <h6 class="mb-1 fw-semibold">Super Admin</h6>
                  <p class="text-secondary mb-0">Julias Muyambi</p>
                </div>

                <!-- Profile Offcanvas -->
                <div class="offcanvas offcanvas-end header-profile-canvas" tabindex="-1"
                     id="profilecanvasRight" aria-labelledby="profilecanvasRightLabel">
                  <div class="offcanvas-body app-scroll d-flex flex-column text-center">
                    <div class="mx-auto mb-3" style="width: 90px; height: 90px; overflow: hidden; border-radius: 12px;">
                      <img src="../../assets/images/avtar/woman.jpg" alt="Profile Picture" class="img-fluid w-100 h-100 object-fit-cover">
                    </div>
                    <h6 class="mb-1 fw-semibold">Super Admin</h6>
                    <p class="text-secondary mb-3">Julias Muyambi</p>

                    <ul class="list-unstyled flex-grow-1 text-start">
                      <li class="app-divider-v dotted py-1"></li>
                      <li class="mb-3">
                        <a class="d-flex align-items-center f-w-500 text-decoration-none" href="profile.html" target="_blank">
                          <i class="ph-duotone ph-user-circle pe-2 f-s-20"></i> Profile Details
                        </a>
                      </li>
                      <li>
                        <a class="d-flex align-items-center text-danger text-decoration-none" href="sign_in.html" target="_blank">
                          <i class="ph-duotone ph-sign-out pe-2 f-s-20"></i> Log Out
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </li>

            </ul>
          </div>
        </div>
      </div>
    </header>
 

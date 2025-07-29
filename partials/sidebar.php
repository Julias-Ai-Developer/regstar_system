  <div class="app-wrapper">

      <div class="loader-wrapper">
          <div class="loader_16"></div>
      </div>

      <!-- Menu Navigation starts -->
      <nav>
          <div class="app-logo">
              <a class="logo d-inline-block" href="index.html">
                  <img src="../../assets/images/logo/LOGO-NOBG.png" alt="#" width="100%">
                  <!-- <h5>REGISTER PLUS</h5> -->
              </a>

              <span class="bg-light-primary toggle-semi-nav">
                  <i class="ti ti-chevrons-right f-s-20"></i>
              </span>
          </div>
          <div class="app-nav" id="app-simple-bar">
              <ul class="main-nav p-0 mt-2">
                  <!-- Dashboard -->
                 
                  <li>
                      <a class="" href="../dashboard/dashboard.php" aria-expanded="false">
                          <i class="ph-duotone ph-house-line"></i>
                          Dashboard
                      </a>
                    
                  </li>

                  <!-- Student Management -->
               
                  <li>
                      <a class="" data-bs-toggle="collapse" href="#students" aria-expanded="false">
                          <i class="ph-duotone ph-user"></i>
                          Student Management
                      </a>
                      <ul class="collapse" id="students">
                          <li><a href="../students/register-student.php">Register Student</a></li>
                          <li><a href="../students/studentlist.php">Student List</a></li>
                          <li><a href="student_profile.html">Student Profile</a></li>
                      </ul>
                  </li>

                  <!-- Class Management -->
                  <li>
                      <a class="" data-bs-toggle="collapse" href="#classes" aria-expanded="false">
                          <i class="ph-duotone ph-books"></i>
                          Class Management
                      </a>
                      <ul class="collapse" id="classes">
                          <li><a href="class_add.html">Add Class</a></li>
                          <li><a href="class_list.html">Class List</a></li>
                          <li><a href="class_enrollments.html">Assign Students to Class</a></li>
                      </ul>
                  </li>

                  <!-- Teacher Management -->
                  <li>
                      <a class="" data-bs-toggle="collapse" href="#teachers" aria-expanded="false">
                          <i class="ph-duotone ph-chalkboard-teacher"></i>
                          Teachers
                      </a>
                      <ul class="collapse" id="teachers">
                          <li><a href="teacher_add.html">Add Teacher</a></li>
                          <li><a href="teacher_list.html">Teacher List</a></li>
                          <li><a href="teacher_assignments.html">Assign to Class</a></li>
                      </ul>
                  </li>

                  <!-- Attendance Management -->
                  <li>
                      <a class="" data-bs-toggle="collapse" href="#attendance" aria-expanded="false">
                          <i class="ph-duotone ph-calendar-check"></i>
                          Attendance
                      </a>
                      <ul class="collapse" id="attendance">
                          <li><a href="take_attendance.html">Take Attendance</a></li>
                          <li><a href="attendance_by_class.html">By Class</a></li>
                          <li><a href="attendance_by_student.html">By Student</a></li>
                      </ul>
                  </li>

                  <!-- User & Staff -->
                  <li>
                      <a class="" data-bs-toggle="collapse" href="#users" aria-expanded="false">
                          <i class="ph-duotone ph-users"></i>
                          Staff & User
                      </a>
                      <ul class="collapse" id="users">
                          <li><a href="user_list.html">User List</a></li>
                          <li><a href="add_user.html">Add User</a></li>
                          <li><a href="roles_permissions.html">Roles & Permissions</a></li>
                      </ul>
                  </li>
              </ul>
          </div>


          <div class="menu-navs">
              <span class="menu-previous"><i class="ti ti-chevron-left"></i></span>
              <span class="menu-next"><i class="ti ti-chevron-right"></i></span>
          </div>

      </nav>
      <!-- Menu Navigation ends -->
<?php include '../../includes/header.php' ?>
<div class="sidebar-overlay" id="sidebarOverlay"></div>
<!-- ---sidebar.... -->
<?php include '../../includes/sidebar.php' ?>
<?php include '../../includes/topnav.php' ?>
<!-- put main content here -->
<div class="container-fluid p-4 bg-white">
  <h5 class="mb-4">Students List</h5>
  <!-- student list tabel 2-->
  <div class="col-xl-12">
    <div class="card-header mb-4">
      <div class="header-controls">
        <!-- Left: Export Buttons -->
        <div class="export-controls">
          <button class="export-btn btn-sm" onclick="window.print()" aria-label="Print" title="Print">
            <i class="iconoir-printing-page"></i> Print
          </button>
          <button class="export-btn btn-sm" onclick="exportToCSV()" aria-label="Export CSV" title="Export CSV">
            <i class="iconoir-floppy-disk"></i> Export CSV
          </button>
          <button class="export-btn btn-sm" onclick="exportToExcel()" aria-label="Export Excel" title="Export Excel">
            <i class="iconoir-book-solid"></i></i>Export Excel
          </button>
        </div>

        <!-- Right: Search and Filter -->
        <div class="search-filter-controls">
          <div class="search-container">
            <i class="iconoir-search search-icon"></i>
            <input type="text" class="search-input" placeholder="Search by Student Name..." id="searchInput">
          </div>
          <button class="filter-btn btn-sm" onclick="searchNames()">
            <i class="fas fa-filter"></i>Filter
          </button>
        <button class="main-btn btn-sm">
  <a href="../../views/students/register-student.php" class="text-white text-decoration-none">
    <i class="fas fa-plus-circle me-2"></i>Add Student
  </a>
</button>
        </div>
      </div>
    </div>
    <div class="card">

      <div class="card-body p-0">
        <div class="table-responsive">
          <table class="table table-hover table-striped table-borderless align-middle mb-0" id="studentTable">
            <thead class="bg-dark text-white">
              <tr class="bg-info">
                <th onclick="sortTable(0)">ID <i class="fa-solid fa-sort ms-1"></i></th>
                <th onclick="sortTable(1)">Full Name <i class="fa-solid fa-sort ms-1"></i></th>
                <th onclick="sortTable(2)">Class <i class="fa-solid fa-sort ms-1"></i></th>
                <th onclick="sortTable(3)">Gender <i class="fa-solid fa-sort ms-1"></i></th>
                <th onclick="sortTable(4)">Age <i class="fa-solid fa-sort ms-1"></i></th>
                <th onclick="sortTable(5)">Contact <i class="fa-solid fa-sort ms-1"></i></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td class="fw-semibold text-dark">Alice Nakato</td>
                <td>Primary 5</td>
                <td>Female</td>
                <td>11</td>
                <td>0700123456</td>
              </tr>
              <tr>
                <td>2</td>
                <td class="fw-semibold text-dark">Brian Okello</td>
                <td>Primary 6</td>
                <td>Male</td>
                <td>12</td>
                <td>0700234567</td>
              </tr>
              <tr>
                <td>3</td>
                <td class="fw-semibold text-dark">Catherine Achieng</td>
                <td>Primary 5</td>
                <td>Female</td>
                <td>11</td>
                <td>0700345678</td>
              </tr>
              <tr>
                <td>4</td>
                <td class="fw-semibold text-dark">David Mugisha</td>
                <td>Primary 7</td>
                <td>Male</td>
                <td>13</td>
                <td>0700456789</td>
              </tr>
              <tr>
                <td>5</td>
                <td class="fw-semibold text-dark">Esther Namutebi</td>
                <td>Primary 6</td>
                <td>Female</td>
                <td>12</td>
                <td>0700567890</td>
              </tr>
              <tr>
                <td>6</td>
                <td class="fw-semibold text-dark">Franklin Ssekandi</td>
                <td>Primary 5</td>
                <td>Male</td>
                <td>11</td>
                <td>0700678901</td>
              </tr>
              <tr>
                <td>7</td>
                <td class="fw-semibold text-dark">Grace Akello</td>
                <td>Primary 7</td>
                <td>Female</td>
                <td>13</td>
                <td>0700789012</td>
              </tr>
            </tbody>
          </table>
        </div>

        <!-- Pagination -->
        <div class="mt-4 px-3 mb-2">
          <ul class="pagination justify-content-end mb-0">
            <li class="page-item disabled">
              <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#">Next</a>
            </li>
          </ul>
        </div>
      </div>

    </div>


  </div>
</div>

<?php include '../../includes/footer.php' ?>
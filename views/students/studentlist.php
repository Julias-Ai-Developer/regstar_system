<?php include '../../partials/header.php' ?>
<?php include '../../partials/sidebar.php' ?>
<?php include '../../partials/navbar.php' ?>
<!-- Body main section starts -->
<main>
    <div class="container-fluid">
        <div class="row">


            <!-- student list tabel 2-->
          <div class="col-xl-12">
<div class="card">
  <div class="card-header">
    <h5 class="mb-4">Students List</h5>

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
          <i class="iconoir-filter-solid filter-icon"></i>Filter
        </button>
      </div>
    </div>
  </div>

  <div class="card-body p-0">
    <div class="table-responsive">
      <table class="table table-borderless table-hover table-striped align-middle mb-0" id="printsection">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Full Name</th>
            <th scope="col">Class</th>
            <th scope="col">Gender</th>
            <th scope="col">Age</th>
            <th scope="col">Contact</th>
          </tr>
        </thead>
        <tbody>
        <tr>
  <td>1</td>
  <td class="text-dark fw-semibold">Alice Nakato</td>
  <td>Primary 5</td>
  <td>Female</td>
  <td>11</td>
  <td>0700123456</td>
</tr>
<tr>
  <td>2</td>
  <td class="text-dark fw-semibold">Brian Okello</td>
  <td>Primary 6</td>
  <td>Male</td>
  <td>12</td>
  <td>0700234567</td>
</tr>
<tr>
  <td>3</td>
  <td class="text-dark fw-semibold">Catherine Achieng</td>
  <td>Primary 5</td>
  <td>Female</td>
  <td>11</td>
  <td>0700345678</td>
</tr>
<tr>
  <td>4</td>
  <td class="text-dark fw-semibold">David Mugisha</td>
  <td>Primary 7</td>
  <td>Male</td>
  <td>13</td>
  <td>0700456789</td>
</tr>
<tr>
  <td>5</td>
  <td class="text-dark fw-semibold">Esther Namutebi</td>
  <td>Primary 6</td>
  <td>Female</td>
  <td>12</td>
  <td>0700567890</td>
</tr>
<tr>
  <td>6</td>
  <td class="text-dark fw-semibold">Franklin Ssekandi</td>
  <td>Primary 5</td>
  <td>Male</td>
  <td>11</td>
  <td>0700678901</td>
</tr>
<tr>
  <td>7</td>
  <td class="text-dark fw-semibold">Grace Akello</td>
  <td>Primary 7</td>
  <td>Female</td>
  <td>13</td>
  <td>0700789012</td>
</tr>

          <!-- other rows -->
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
    </div>
</main>
</div>
</div>
<!-- Body main section ends -->


<?php include '../../partials/footer.php' ?>
<?php include '../../includes/header.php' ?>
<?php include '../../includes/sidebar.php' ?>
<?php include '../../includes/navbar.php' ?>
<!-- Body main section starts -->
<main>
    <div class="container-fluid">
        <div class="row">
         
        
       
            <!-- Student Details Form start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Student Details Form</h5>
                    </div>
                    <div class="card-body">
                        <form class="app-form">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex justify-content-center mb-3">
                                        <div class="avatar-upload">
                                            <div class="avatar-edit">
                                                <input type="file" id="imageUpload"
                                                    accept=".png, .jpg, .jpeg">
                                                <label for="imageUpload"><i
                                                        class="ti ti-photo-heart"></i></label>
                                            </div>
                                            <div class="avatar-preview">
                                                <div id="imgPreview">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Surname</label>
                                        <input type="text" class="form-control" placeholder="Enter Surname"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Student Name</label>
                                        <input type="text" class="form-control" placeholder="Enter Name"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Parent Name</label>
                                        <input type="text" class="form-control"
                                            placeholder="Enter Parent name" required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <div class="mb-3">
                                        <label class="form-label">Date of Birth</label>
                                        <input type="date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-3 floating-select">
                                    <div class="mb-3">
                                        <label class="form-label">Gender</label>
                                        <select class="form-select">
                                            <option selected="">select Gender</option>
                                            <option value="1">Male</option>
                                            <option value="2">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="mb-3">
                                        <label class="form-label">Email Address</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text b-r-left">@</span>
                                            <input type="text" class="form-control b-r-right"
                                                placeholder="Email Address">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Father Contact</label>
                                        <input type="text" class="form-control" placeholder="xxx-xxxx-xxx"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Mother Contact</label>
                                        <input type="text" class="form-control" placeholder="xxx-xxxx-xxx"
                                            required>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="mb-3">
                                        <label class="form-label">Address</label>
                                        <textarea class="form-control" rows="1"
                                            placeholder="Enter Your Address"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <div class="mb-3">
                                        <label class="form-label">City</label>
                                        <input type="text" class="form-control"
                                            placeholder="Enter Your City">
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <div class="mb-3">
                                        <label class="form-label">Zip</label>
                                        <input type="text" class="form-control" placeholder="xxxxx"
                                            maxlength="5">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="text-end">
                                        <button type="submit" class="btn btn-primary">Add</button>
                                        <button type="reset" class="btn btn-secondary">Reset</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Student Details Form end -->
         
        </div>
    </div>
</main>
</div>
</div>
<!-- Body main section ends -->
<!-- tap on top -->
<div class="go-top">
    <span class="progress-value">
        <i class="ti ti-arrow-up"></i>
    </span>
</div>

<?php include '../../includes/footer.php' ?>
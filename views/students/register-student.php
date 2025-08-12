<?php include '../../includes/header.php' ?>
<div class="sidebar-overlay" id="sidebarOverlay"></div>
<?php include '../../includes/sidebar.php' ?>
<?php include '../../includes/topnav.php' ?>
<style>
    .main-container {
        max-width: 800px;
        margin: 2rem auto;
        padding: 0 1rem;
    }

    .registration-card {
        background: white;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        overflow: hidden;
    }

    .registration-header {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 1.5rem 2rem;
        position: relative;
    }

    .registration-header::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="white" opacity="0.1"/><circle cx="75" cy="75" r="1" fill="white" opacity="0.1"/><circle cx="50" cy="10" r="0.5" fill="white" opacity="0.15"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
        opacity: 0.3;
    }

    .registration-title {
        position: relative;
        z-index: 1;
        margin: 0;
        font-size: 1.25rem;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .step-indicator {
        position: relative;
        z-index: 1;
        font-size: 0.875rem;
        opacity: 0.9;
        margin-top: 0.25rem;
    }

    /* Progress Steps */
    .progress-steps {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 2rem;
        background: white;
        position: relative;
    }

    .progress-line {
        position: absolute;
        top: 50%;
        left: 2rem;
        right: 2rem;
        height: 2px;
        background: #e9ecef;
        transform: translateY(-50%);
        z-index: 1;
    }

    .progress-line-active {
        position: absolute;
        top: 50%;
        left: 2rem;
        height: 2px;
        background: linear-gradient(90deg, #20c997, #17a2b8);
        transform: translateY(-50%);
        transition: width 0.4s ease;
        z-index: 2;
    }

    .step-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        position: relative;
        z-index: 3;
        flex: 1;
    }

    .step-circle {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: #e9ecef;
        color: #6c757d;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 600;
        font-size: 0.875rem;
        transition: all 0.3s ease;
        border: 3px solid white;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    .step-circle.active {
        background: #20c997;
        color: white;
    }

    .step-circle.completed {
        background: #17a2b8;
        color: white;
    }

    .step-label {
        margin-top: 0.5rem;
        font-size: 0.75rem;
        font-weight: 500;
        color: #6c757d;
        text-align: center;
    }

    .step-label.active {
        color: #20c997;
    }

    .step-label.completed {
        color: #17a2b8;
    }

    /* Form Content */
    .form-content {
        padding: 2rem;
    }

    .form-section {
        display: none;
    }

    .form-section.active {
        display: block;
        animation: fadeIn 0.3s ease;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .section-title {
        font-size: 1.5rem;
        font-weight: 600;
        color: #343a40;
        margin-bottom: 1.5rem;
        text-align: center;
    }

    .form-label {
        font-weight: 500;
        color: #495057;
        margin-bottom: 0.5rem;
    }

    .required-field {
        color: #dc3545;
    }

    .form-control,
    .form-select {
        border: 1px solid #ced4da;
        border-radius: 6px;
        padding: 0.75rem;
        font-size: 0.875rem;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    .form-control:focus,
    .form-select:focus {
        border-color: #20c997;
        box-shadow: 0 0 0 0.2rem rgba(32, 201, 151, 0.25);
    }

    .form-control.is-invalid,
    .form-select.is-invalid {
        border-color: #dc3545;
    }

    .invalid-feedback {
        display: none; /* Hidden by default, Bootstrap will show it */
        width: 100%;
        margin-top: 0.25rem;
        font-size: 0.875em;
        color: #dc3545;
    }

    /* Override Bootstrap's default display: block for .is-invalid ~ .invalid-feedback */
    .form-control.is-invalid + .invalid-feedback,
    .form-select.is-invalid + .invalid-feedback,
    .form-check-input.is-invalid ~ .invalid-feedback {
        display: block;
    }

    /* Buttons */
    .form-navigation {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 2rem;
        padding-top: 1.5rem;
        border-top: 1px solid #e9ecef;
    }

    .btn-custom {
        padding: 0.75rem 2rem;
        border-radius: 6px;
        font-weight: 500;
        transition: all 0.2s ease;
        border: none;
        cursor: pointer;
    }

    .btn-primary-custom {
        background: linear-gradient(135deg, #20c997, #17a2b8);
        color: white;
    }

    .btn-primary-custom:hover {
        transform: translateY(-1px);
        box-shadow: 0 4px 12px rgba(32, 201, 151, 0.3);
    }

    .btn-secondary-custom {
        background: #6c757d;
        color: white;
    }

    .btn-secondary-custom:hover {
        background: #5a6268;
        transform: translateY(-1px);
    }

    /* Responsive */
    @media (max-width: 768px) {
        .main-container {
            margin: 1rem auto;
            padding: 0 0.5rem;
        }

        .progress-steps {
            padding: 1rem;
        }

        .form-content {
            padding: 1.5rem;
        }

        .step-label {
            font-size: 0.65rem;
        }

        .step-circle {
            width: 35px;
            height: 35px;
            font-size: 0.75rem;
        }
    }

    /* File Upload Styling */
    .file-upload-container {
        text-align: center;
        margin-bottom: 1.5rem;
    }

    .file-upload-label {
        display: inline-block;
        padding: 0.75rem 1.5rem;
        background: #f8f9fa;
        border: 2px dashed #ced4da;
        border-radius: 6px;
        cursor: pointer;
        transition: all 0.2s ease;
    }

    .file-upload-label:hover {
        border-color: #20c997;
        background: #e8f5f0;
    }

    .file-upload-input {
        display: none;
    }
</style>
<main>
    <div class="container-fluid bg-white">
        <div class="row">
            <div class="col-12">

                <div class="card mt-4">
                    <div class="registration-header">
                        <h1 class="registration-title">
                            <i class="ti ti-user-plus"></i>
                            STUDENT REGISTRATION
                        </h1>
                        <div class="step-indicator" id="stepIndicator">STEP 1 OF 4</div>
                    </div>

                    <div class="progress-steps">
                        <div class="progress-line"></div>
                        <div class="progress-line-active" id="progressLineActive" style="width: 25%;"></div>

                        <div class="step-item">
                            <div class="step-circle active" id="stepCircle1">1</div>
                            <div class="step-label active" id="stepLabel1">Student Details</div>
                        </div>
                        <div class="step-item">
                            <div class="step-circle" id="stepCircle2">2</div>
                            <div class="step-label" id="stepLabel2">Parent Details</div>
                        </div>
                        <div class="step-item">
                            <div class="step-circle" id="stepCircle3">3</div>
                            <div class="step-label" id="stepLabel3">Additional Information</div>
                        </div>
                        <div class="step-item">
                            <div class="step-circle" id="stepCircle4">4</div>
                            <div class="step-label" id="stepLabel4">Confirm</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form id="wizardForm" class="needs-validation" novalidate>

                            <div class="form-content">

                                <div class="form-section active" id="step1">
                                    <h2 class="section-title">Provide Student details</h2>

                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label for="studentName" class="form-label">Student Name <span class="required-field">*</span></label>
                                            <input type="text" class="form-control" id="studentName" required>
                                            <div class="invalid-feedback">Please enter student name.</div>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="studentLIN" class="form-label">Student LIN</label>
                                            <input type="text" class="form-control" id="studentLIN" placeholder="Student Learning Identification Number">
                                        </div>

                                        <div class="col-md-6">
                                            <label for="dateOfBirth" class="form-label">Date Of Birth <span class="required-field">*</span></label>
                                            <input type="date" class="form-control" id="dateOfBirth" required>
                                            <div class="invalid-feedback">Please select date of birth.</div>
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label">Gender <span class="required-field">*</span></label>
                                            <div class="mt-2">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gender" id="male" value="male" required>
                                                    <label class="form-check-label" for="male">Male</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gender" id="female" value="female" required>
                                                    <label class="form-check-label" for="female">Female</label>
                                                </div>
                                            </div>
                                            <div class="invalid-feedback" id="gender-feedback">Please select gender.</div>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="nationality" class="form-label">Nationality <span class="required-field">*</span></label>
                                            <select class="form-select" id="nationality" required>
                                                <option value="">Select nationality</option>
                                                <option value="uganda">Uganda</option>
                                                <option value="kenya">Kenya</option>
                                                <option value="tanzania">Tanzania</option>
                                                <option value="rwanda">Rwanda</option>
                                                <option value="other">Other</option>
                                            </select>
                                            <div class="invalid-feedback">Please select nationality.</div>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="district" class="form-label">District <span class="required-field">*</span></label>
                                            <input type="text" class="form-control" id="district" required>
                                            <div class="invalid-feedback">Please enter district.</div>
                                        </div>

                                        <div class="col-12">
                                            <label for="address" class="form-label">Address <span class="required-field">*</span></label>
                                            <textarea class="form-control" id="address" rows="3" placeholder="Enter full address" required></textarea>
                                            <div class="invalid-feedback">Please enter address.</div>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="entryDate" class="form-label">Entry Date <span class="required-field">*</span></label>
                                            <input type="date" class="form-control" id="entryDate" required>
                                            <div class="invalid-feedback">Please select entry date.</div>
                                        </div>

                                        <div class="col-12">
                                            <label class="form-label">Student Photo</label>
                                            <div class="file-upload-container">
                                                <label for="studentPhoto" class="file-upload-label">
                                                    <i class="ti ti-camera me-2"></i>
                                                    <span id="fileLabel">Choose File - No file chosen</span>
                                                </label>
                                                <input type="file" id="studentPhoto" class="file-upload-input" accept="image/*">
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>

                                <div class="form-section" id="step2">
                                    <h2 class="section-title">Parent/Guardian Details</h2>

                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label for="fatherName" class="form-label">Father's Name <span class="required-field">*</span></label>
                                            <input type="text" class="form-control" id="fatherName" required>
                                            <div class="invalid-feedback">Please enter father's name.</div>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="motherName" class="form-label">Mother's Name <span class="required-field">*</span></label>
                                            <input type="text" class="form-control" id="motherName" required>
                                            <div class="invalid-feedback">Please enter mother's name.</div>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="fatherContact" class="form-label">Father's Contact <span class="required-field">*</span></label>
                                            <input type="tel" class="form-control" id="fatherContact" required>
                                            <div class="invalid-feedback">Please enter father's contact.</div>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="motherContact" class="form-label">Mother's Contact <span class="required-field">*</span></label>
                                            <input type="tel" class="form-control" id="motherContact" required>
                                            <div class="invalid-feedback">Please enter mother's contact.</div>
                                        </div>

                                        <div class="col-12">
                                            <label for="guardianEmail" class="form-label">Guardian Email</label>
                                            <input type="email" class="form-control" id="guardianEmail" placeholder="guardian@example.com">
                                        </div>

                                        <div class="col-12">
                                            <label for="emergencyContact" class="form-label">Emergency Contact <span class="required-field">*</span></label>
                                            <input type="tel" class="form-control" id="emergencyContact" required>
                                            <div class="invalid-feedback">Please enter emergency contact.</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-section" id="step3">
                                    <h2 class="section-title">Additional Information</h2>

                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label for="previousSchool" class="form-label">Previous School</label>
                                            <input type="text" class="form-control" id="previousSchool">
                                        </div>

                                        <div class="col-md-6">
                                            <label for="classGrade" class="form-label">Class/Grade <span class="required-field">*</span></label>
                                            <select class="form-select" id="classGrade" required>
                                                <option value="">Select class/grade</option>
                                                <option value="nursery">Nursery</option>
                                                <option value="primary1">Primary 1</option>
                                                <option value="primary2">Primary 2</option>
                                                <option value="primary3">Primary 3</option>
                                                <option value="primary4">Primary 4</option>
                                                <option value="primary5">Primary 5</option>
                                                <option value="primary6">Primary 6</option>
                                                <option value="primary7">Primary 7</option>
                                            </select>
                                            <div class="invalid-feedback">Please select class/grade.</div>
                                        </div>

                                        <div class="col-12">
                                            <label for="medicalConditions" class="form-label">Medical Conditions</label>
                                            <textarea class="form-control" id="medicalConditions" rows="3" placeholder="Any medical conditions or allergies (optional)"></textarea>
                                        </div>

                                        <div class="col-12">
                                            <label for="specialRequirements" class="form-label">Special Requirements</label>
                                            <textarea class="form-control" id="specialRequirements" rows="3" placeholder="Any special educational requirements (optional)"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-section" id="step4">
                                    <h2 class="section-title">Confirm Registration Details</h2>

                                    <div class="alert alert-info">
                                        <h5><i class="ti ti-info-circle me-2"></i>Please review all information before submitting</h5>
                                        <p class="mb-0">Make sure all details are correct as they will be used for official records.</p>
                                    </div>

                                    <div id="confirmationDetails" class="mb-3">
                                        </div>

                                    <div class="form-check mt-3">
                                        <input class="form-check-input" type="checkbox" id="confirmAccuracy" required>
                                        <label class="form-check-label" for="confirmAccuracy">
                                            I confirm that all information provided is accurate and complete <span class="required-field">*</span>
                                        </label>
                                        <div class="invalid-feedback">Please confirm the accuracy of information.</div>
                                    </div>
                                </div>

                                <div class="form-navigation">
                                    <button type="button" class="btn-custom btn-secondary-custom" id="prevBtn" onclick="changeStep(-1)" style="display: none;">
                                        <i class="ti ti-arrow-left me-2"></i>Previous
                                    </button>
                                    <div></div>
                                    <button type="button" class="btn-custom btn-primary-custom" id="nextBtn" onclick="changeStep(1)">
                                        Continue <i class="fas fa-arrow-right ms-2"></i>
                                    </button>
                                </div>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
            </div>
    </div>
</main>
</div>
</div>
<div class="go-top">
    <span class="progress-value">
        <i class="ti ti-arrow-up"></i>
    </span>
</div>

<?php include '../../includes/footer.php' ?>

<script>
    const form = document.getElementById('wizardForm');
    const formSections = document.querySelectorAll('.form-section');
    const stepCircles = document.querySelectorAll('.step-circle');
    const stepLabels = document.querySelectorAll('.step-label');
    const progressLineActive = document.getElementById('progressLineActive');
    const stepIndicator = document.getElementById('stepIndicator');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const studentPhotoInput = document.getElementById('studentPhoto');
    const fileLabel = document.getElementById('fileLabel');
    const confirmationDetailsDiv = document.getElementById('confirmationDetails');

    let currentStepIndex = 0; // 0-indexed for arrays

    // Function to update the progress bar and steps
    function updateProgressUI() {
        // Update step circles and labels
        stepCircles.forEach((circle, index) => {
            if (index === currentStepIndex) {
                circle.classList.add('active');
                circle.classList.remove('completed');
                stepLabels[index].classList.add('active');
                stepLabels[index].classList.remove('completed');
            } else if (index < currentStepIndex) {
                circle.classList.add('completed');
                circle.classList.remove('active');
                stepLabels[index].classList.add('completed');
                stepLabels[index].classList.remove('active');
            } else {
                circle.classList.remove('active', 'completed');
                stepLabels[index].classList.remove('active', 'completed');
            }
        });

        // Update progress line width
        const progressWidth = (currentStepIndex / (formSections.length - 1)) * 100;
        progressLineActive.style.width = `${progressWidth}%`;

        // Update step indicator text
        stepIndicator.textContent = `STEP ${currentStepIndex + 1} OF ${formSections.length}`;

        // Show/hide navigation buttons
        prevBtn.style.display = currentStepIndex === 0 ? 'none' : 'block';
        nextBtn.textContent = currentStepIndex === formSections.length - 1 ? 'Submit' : 'Continue';
        nextBtn.innerHTML = currentStepIndex === formSections.length - 1 ? '<i class="ti ti-check me-2"></i>Submit' : 'Continue <i class="ti ti-arrow-right ms-2"></i>';
    }

    // Function to show a specific step
    function showStep(stepIndex) {
        formSections.forEach((section, index) => {
            if (index === stepIndex) {
                section.classList.add('active');
            } else {
                section.classList.remove('active');
            }
        });
        updateProgressUI();
    }

    // Validate current step fields
    function validateCurrentStep() {
        const currentSection = formSections[currentStepIndex];
        let isValid = true;
        // Get all required form controls within the current section
        const requiredInputs = currentSection.querySelectorAll('[required]');

        requiredInputs.forEach(input => {
            // Specifically handle radio buttons
            if (input.type === 'radio' && input.name === 'gender') {
                const genderInputs = document.querySelectorAll('input[name="gender"]');
                const isGenderSelected = Array.from(genderInputs).some(radio => radio.checked);
                genderInputs.forEach(radio => {
                    if (!isGenderSelected) {
                        radio.classList.add('is-invalid');
                        document.getElementById('gender-feedback').style.display = 'block'; // Show feedback for gender
                    } else {
                        radio.classList.remove('is-invalid');
                        document.getElementById('gender-feedback').style.display = 'none'; // Hide feedback for gender
                    }
                });
                if (!isGenderSelected) {
                    isValid = false;
                }
            } else {
                if (!input.checkValidity()) {
                    input.classList.add('is-invalid');
                    isValid = false;
                } else {
                    input.classList.remove('is-invalid');
                }
            }
        });

        // Add 'was-validated' to the form to show all validation feedback
        form.classList.add('was-validated');
        return isValid;
    }

    // Function to handle step changes (next/previous)
    function changeStep(direction) {
        if (direction === 1) { // Moving to the next step
            if (!validateCurrentStep()) {
                // If current step is not valid, stop here
                return;
            }
            if (currentStepIndex < formSections.length - 1) {
                currentStepIndex++;
            }
        } else if (direction === -1) { // Moving to the previous step
            if (currentStepIndex > 0) {
                currentStepIndex--;
            }
            // When going back, remove validation classes from the previous step
            form.classList.remove('was-validated');
            formSections[currentStepIndex].querySelectorAll('.is-invalid').forEach(el => {
                el.classList.remove('is-invalid');
            });
            // Specifically hide gender feedback when navigating back
            document.getElementById('gender-feedback').style.display = 'none';
        }

        if (currentStepIndex === formSections.length - 1) {
            populateConfirmationDetails();
        }
        showStep(currentStepIndex);
    }

    // Populate confirmation details for Step 4
    function populateConfirmationDetails() {
        let detailsHtml = '<h5>Student Details:</h5>';
        detailsHtml += `<p><strong>Name:</strong> ${document.getElementById('studentName').value}</p>`;
        detailsHtml += `<p><strong>LIN:</strong> ${document.getElementById('studentLIN').value || 'N/A'}</p>`;
        detailsHtml += `<p><strong>Date of Birth:</strong> ${document.getElementById('dateOfBirth').value}</p>`;
        detailsHtml += `<p><strong>Gender:</strong> ${document.querySelector('input[name="gender"]:checked')?.value || 'N/A'}</p>`;
        detailsHtml += `<p><strong>Nationality:</strong> ${document.getElementById('nationality').value}</p>`;
        detailsHtml += `<p><strong>District:</strong> ${document.getElementById('district').value}</p>`;
        detailsHtml += `<p><strong>Address:</strong> ${document.getElementById('address').value}</p>`;
        detailsHtml += `<p><strong>Entry Date:</strong> ${document.getElementById('entryDate').value}</p>`;

        detailsHtml += '<h5 class="mt-4">Parent/Guardian Details:</h5>';
        detailsHtml += `<p><strong>Father's Name:</strong> ${document.getElementById('fatherName').value}</p>`;
        detailsHtml += `<p><strong>Mother's Name:</strong> ${document.getElementById('motherName').value}</p>`;
        detailsHtml += `<p><strong>Father's Contact:</strong> ${document.getElementById('fatherContact').value}</p>`;
        detailsHtml += `<p><strong>Mother's Contact:</strong> ${document.getElementById('motherContact').value}</p>`;
        detailsHtml += `<p><strong>Guardian Email:</strong> ${document.getElementById('guardianEmail').value || 'N/A'}</p>`;
        detailsHtml += `<p><strong>Emergency Contact:</strong> ${document.getElementById('emergencyContact').value}</p>`;

        detailsHtml += '<h5 class="mt-4">Additional Information:</h5>';
        detailsHtml += `<p><strong>Previous School:</strong> ${document.getElementById('previousSchool').value || 'N/A'}</p>`;
        detailsHtml += `<p><strong>Class/Grade:</strong> ${document.getElementById('classGrade').value}</p>`;
        detailsHtml += `<p><strong>Medical Conditions:</strong> ${document.getElementById('medicalConditions').value || 'None'}</p>`;
        detailsHtml += `<p><strong>Special Requirements:</strong> ${document.getElementById('specialRequirements').value || 'None'}</p>`;

        confirmationDetailsDiv.innerHTML = detailsHtml;
    }

    // Handle student photo file input label update
    studentPhotoInput.addEventListener('change', function() {
        if (this.files && this.files.length > 0) {
            fileLabel.textContent = this.files[0].name;
        } else {
            fileLabel.textContent = 'Choose File - No file chosen';
        }
    });

    // Handle form submission for the final step
    form.addEventListener('submit', function(event) {
        if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
            // Ensure validation feedback is shown for the current (last) step
            form.classList.add('was-validated');
        } else {
            // If the form is valid, you can process the data
            alert('Form submitted successfully!');
            // In a real application, you would send this data to your server using AJAX or a full form submission
            // Example: form.submit(); // if you want a traditional form submission
            event.preventDefault(); // Prevent default submission for this example
        }
    });

    // Initial display of the first step
    showStep(currentStepIndex);
</script>
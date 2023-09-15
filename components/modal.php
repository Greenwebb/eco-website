<div style="z-index: 100003;" class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen modal-dialog-scrollable">
        <div style="width: 100%;margin: 0;height: 100%; background:#29444a; color:#fff; border-radius: 3px;" class="modal-content">

            <div class="modal-body"><button type="button" class="btn-close" style="position: fixed; right: 3.5rem;" data-bs-dismiss="modal" aria-label="Close"></button>
                <center> 
                    <main class="m-auto p-2 mw-100"></main>
                        <div id="wizard">
                            <h3>Business</h3>
                            <section>
                                <h5 class="step-heading"> Select a business type </h5>
                                <div class="purpose-radios-wrapper">
                                    <div class="purpose-radio">
                                        <input type="radio" name="user_type" id="farmer" class="purpose-radio-input"
                                            value="Farmer" checked>
                                        <label for="farmer" class="purpose-radio-label">
                                            <span class="label-icon">
                                                <img src="images/1.svg" alt="farmer"
                                                    class="label-icon-default">
                                                <img src="images/1.svg" alt="farmer"
                                                    class="label-icon-active">
                                            </span>
                                            <span class="label-text">Farmer</span>
                                        </label>
                                    </div>
                                    <div class="purpose-radio">
                                        <input type="radio" name="user_type" id="agronomists"
                                            class="purpose-radio-input" value="Agronomists">
                                        <label for="agronomists" class="purpose-radio-label">
                                            <span class="label-icon">
                                                <img src="images/2.svg" alt="agronomists"
                                                    class="label-icon-default">
                                                <img src="images/2.svg" alt="agronomists"
                                                    class="label-icon-active">
                                            </span>
                                            <span class="label-text">Agronomists</span>
                                        </label>
                                    </div>
                                    <div class="purpose-radio">
                                        <input type="radio" name="user_type" id="web-design" class="purpose-radio-input"
                                            value="Guest">
                                        <label for="web-design" class="purpose-radio-label">
                                            <span class="label-icon">
                                                <img src="images/3.svg" alt="Guest"
                                                    class="label-icon-default">
                                                <img src="images/3.svg" alt="Guest"
                                                    class="label-icon-active">
                                            </span>
                                            <span class="label-text">Guest</span>
                                        </label>
                                    </div>
                                </div>
                            </section>
                            <h3>Personal</h3>
                            <section style="color:white">
                                <h5 class="step-heading"> A Little bit more about yourself </h5>
                                <div class="row">
                                    <div class="form-group">
                                        <label for="fullname" class="sr-only">Name</label>
                                        <input type="text" name="fullname" id="fullname" class="form-control" placeholder="Fullnames" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="phoneNumber" class="sr-only">Phone Number</label>
                                        <input type="tel" name="phoneNumber" id="phoneNumber" class="form-control"
                                            placeholder="Phone number">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <label for="city" class="sr-only">City/Town</label>
                                        <input type="text" name="city" id="city" class="form-control"
                                            placeholder="City/Town">
                                    </div>
                                    <div class="form-group">
                                        <label for="province" class="sr-only">Province</label>
                                        <input type="text" name="province" id="province" class="form-control"
                                            placeholder="Province">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <label for="age" class="sr-only">Age</label>
                                        <input type="text" name="age" id="age" class="form-control"
                                            placeholder="Your current age">
                                    </div>
                                    <div class="form-group">
                                        <label for="sex" class="sr-only">Sex</label>
                                        <input type="text" name="sex" id="sex" class="form-control"
                                            placeholder="Male or Female">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <label for="languanges" class="sr-only">Languanges</label>
                                        <input type="text" name="languanges" id="languanges" class="form-control"
                                            placeholder="Prefered Languanges">
                                    </div>
                                    <div class="form-group">
                                        <label for="employement" class="sr-only">Employement Status</label>
                                        <input type="text" name="employement" id="employement" class="form-control"
                                            placeholder="Are you currently in gainful employement">
                                    </div>
                                </div>
                            </section>
                            <h3>Services</h3>
                            <section>
                                <h5 class="step-heading"> Choose a service your would like to access </h5>
                                <div class="purpose-radios-wrapper">
                                    <div class="purpose-radio">
                                        <input type="radio" name="purpose" id="advisory" class="purpose-radio-input" value="advisory" checked>
                                        <label for="advisory" class="purpose-radio-label">
                                            <span class="label-icon" style="color:white">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-chat-square-dots" viewBox="0 0 16 16">
                                                    <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                                    <path d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                                </svg>
                                            </span>
                                            <span class="label-text">Advisory</span>
                                        </label>
                                    </div>
                                    <div class="purpose-radio">
                                        <input type="radio" name="purpose" id="marketplace" class="purpose-radio-input" value="marketplace">
                                            <label for="marketplace" class="purpose-radio-label">
                                            <span class="label-icon" style="color:white">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-shop-window" viewBox="0 0 16 16">
                                                    <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h12V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zm2 .5a.5.5 0 0 1 .5.5V13h8V9.5a.5.5 0 0 1 1 0V13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V9.5a.5.5 0 0 1 .5-.5z"/>
                                                </svg>
                                            </span>
                                            <span class="label-text">Marketplace</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="purpose-radios-wrapper">
                                    <div class="purpose-radio">
                                        <input type="radio" name="purpose" id="call-center" class="purpose-radio-input" value="Call Center">
                                        <label for="call-center" class="purpose-radio-label">
                                            <span class="label-icon" style="color:white">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-headset" viewBox="0 0 16 16">
                                                    <path d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5z"/>
                                                </svg>
                                            </span>
                                            <span class="label-text">Call Center</span>
                                        </label>
                                    </div>
                                    <div class="purpose-radio">
                                        <input type="radio" name="purpose" id="payments-solution" class="purpose-radio-input" value="Payments Solutionn">
                                        <label for="payments-solution" class="purpose-radio-label">
                                            <span class="label-icon" style="color:white">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-credit-card-2-back-fill" viewBox="0 0 16 16">
                                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5H0V4zm11.5 1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-2zM0 11v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1H0z"/>
                                                </svg>
                                            </span>
                                            <span class="label-text">Payments Solution</span>
                                        </label>
                                    </div>
                                </div>
                            </section>
                            <h3>Confirm</h3>
                            <section style="color:white">
                                <div class="mb-4"><span class="font-weight-bold">Business selected</span> : <span id="selectedBusiness"></span> </div>
                                <p style="color:#fff" class="mb-0">Name : <span id="enteredUsername"></span></p>
                                <p style="color:#fff" class="mb-0">Phone Number : <span id="enteredPhoneNumber"></span></p>
                                <p style="color:#fff" class="mb-0">City/Town : <span id="enteredLocation"></span></p>
                                <p style="color:#fff">Email Address : <span id="enteredEmail"></span></p>
                                
                                <p style="color:#fff" class="mb-0">Age : <span id="enteredAge"></span> </p>
                                <p style="color:#fff" class="mb-0">Sex : <span id="enteredSex"></span> </p>
                                <p style="color:#fff" class="mb-0">Languanges : <span id="enteredLang"></span> </p>
                                <p style="color:#fff" class="mb-0">Employement : <span id="enteredEmployementStatus"></span> </p>
                                <p style="color:#fff" class="mb-0">Services : <span id="selectedServices"></span> </p>
                                <div class="form-check mt-4">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="termsAgreement" id="termsAgreement" value="termsAgreed" checked>
                                        <span>I agree to the terms and conditions</span>
                                    </label>
                                </div>
                            </section>
                        </div>
                    </main>
                </center>

            </div>
        </div>
    </div>
</div>
<style>
    input[type="radio"] + label:before, input[type="checkbox"] + label:before, .wpcf7-list-item-label.wpcf7-list-item-right:before {
    border-color: var(--theme-color-input_bd_color) !important;
    display:none;
    color:white;
}
.btn-close {
    --bs-btn-close-color: #fff;
    --bs-btn-close-bg: url(data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23000'%3e%3cpath d='M.293.293a1 1 0 0 1 1.414 0L8 6.586 14.293.293a1 1 0 1 1 1.414 1.414L9.414 8l6.293 6.293a1 1 0 0 1-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 0 1-1.414-1.414L6.586 8 .293 1.707a1 1 0 0 1 0-1.414z'/%3e%3c/svg%3e);
 
    color: #f9f4f4;
    background: white var(--bs-btn-close-bg) center/1em auto no-repeat;
    border: 0;
    border-radius: 0.375rem;
    opacity: var(--bs-btn-close-opacity);
}
/* CSS for the grid layout */
.row {
    display: grid;
    grid-template-columns: repeat(2, 1fr); /* Adjust the number of columns as needed */
    gap: 10px; /* Adjust the gap between grid items as needed */
}

.form-group {
    margin-bottom: 0; /* Remove the default margin for form-groups */
}/* CSS to make input text color white */
.row .form-group,
.row .form-group input,
.row .form-group input::placeholder {
    color: #fff;
}
/* CSS to center align the checkbox and text evenly */
.form-check {
    text-align: center;
}

.form-check-label {
    display: inline-block;
    vertical-align: middle;
}

.form-check-input {
    vertical-align: middle;
    margin-right: 5px; /* Adjust the margin as needed to control spacing between checkbox and text */
}
</style>
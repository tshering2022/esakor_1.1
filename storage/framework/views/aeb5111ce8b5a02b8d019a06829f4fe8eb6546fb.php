<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('translation.signup'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <div class="auth-page-wrapper pt-5">
        <!-- auth page bg -->
        <div class="auth-one-bg-position auth-one-bg" id="auth-particles">
            <div class="bg-overlay"></div>

            <div class="shape">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 0 1440 120">
                    <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
                </svg>
            </div>
        </div>

        <!-- auth page content -->
        <div class="auth-page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mt-sm-5 mb-4 text-white-50">
                            <div>
                                <a href="index" class="d-inline-block auth-logo">
                                   
                                </a>
                            </div>
                            <p class="mt-3 fs-15 fw-medium"></p>
                        </div>
                    </div>
                </div>
                <!-- end row -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card overflow-hidden m-0">
                                <div class="row justify-content-center g-0">
                                    <div class="col-lg-6">
                                        <div class="p-lg-5 p-4 auth-register-bg h-100">
                                           
                                            <div class="position-relative h-100 d-flex flex-column">
                                                <div class="mb-4">
                                                    <h4> Informations and Guidelines on how to register.</h4>
                                                    <br>
                                                    <ol class="">
                                                        <li>
                                                            Information:
                                                            <ul class="fs-6">
                                                                <li>Valid Bhutanese Citizenship Identity Card Number.</li>
                                                                <li>Valid Date of Birth of given CID.
                                                                </li>
                                                                <li>Valid Email Address (You should have access to the given email address).
                                                                </li>
                                                                <li>Your mobile number (Should be with you for using).</li>
                                                            </ul>
                                                        </li>
                                                        <br>
                                                        <li>Guidelines:
                                                            <ul class="fs-6">
                                                                <li>Enter your Citizenship Identity Card Number.
                                                                </li>
                                                                <li>Enter your Date of Birth (on CID card).
                                                                </li>
                                                                <li>If the above two informations are correct your name will be fetched automatically.</li>
                                                                <li>Enter your email ID which you use daily (username and password sent here).
                                                                </li>
                                                                <li>Enter the Mobile number (If registration is successful, you will receive an SMS).</li>
                                                            </ul>
                                                        </li>
                                                        <br>
                                                        <li>*NOTE:
                                                            <ul class="fs-6">
                                                                <li>You cannot have two accounts with the same Citizenship Identity Card Number.</li>
                                                                <li>You can apply any number of transactions from the same account.</li>
                                                                <li class="text-success">Please have a look at the guides we have created for our users in the menu (Guide to eServices).

                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ol>
                                                   
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="p-lg-5 p-4">
                                            <div>
                                                <h5 class="text-primary">Register and create an account.</h5>
                                                <p class="text-muted">Enter your details to register:</p>
                                            </div>

                                            <div class="mt-4">
                                                <form class="needs-validation" novalidate action="index">
                                                    <div class="mb-3">
                                                        <label for="iconrightInput" class="form-label fs-6">CID <span class="text-danger">*</span></label>
                                                        <div class="form-icon right">
                                                            <input type="email" class="form-control form-control-icon" id="iconrightInput"
                                                                placeholder="Enter your Citizenship Identity Card Number.">
                                                            <i class="las la-id-card"></i>
                                                        </div>
                                                    </div>
                                                   
                                                    <div class="mb-3">
                                                        <label for="iconrightInput" class="form-label fs-6 text-primary"> <small>Note » Click the top row when the calendar is displayed for selecting year and month (Eg: April 2017 then 2017).</small></label>
                                                        <div class="form-icon right">
                                                            <input type="" class="form-control form-control-icon" id="iconrightInput"
                                                                placeholder="Select your Date Of Birth" readonly>
                                                            <i class="las la-calendar"></i>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="iconrightInput" class="form-label fs-6 text-primary"><small>Note » Name will be fetched automatically if CID No and DoB matches.</small></label>
                                                        <div class="form-icon right">
                                                            <input type="" class="form-control form-control-icon" id="iconrightInput"
                                                                placeholder="Full Name will be fetched if CID No and DOB matches." readonly>
                                                            <i class="las la-user"></i>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="iconrightInput" class="form-label fs-6 text-primary"><small>Note » Email ID or Mobile number will be used as Username.</small> </label>
                                                        <div class="form-icon right">
                                                            <input type="" class="form-control form-control-icon" id="iconrightInput"
                                                                placeholder="Enter your Email ID to recive credentials." readonly>
                                                            <i class="las la-envelope"></i>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="input-group">
                                                            <span class="input-group-text" id="basic-addon1">+975</span>
                                                            <input type="number" class="form-control" placeholder="Enter your 8 digit phone number"
                                                                aria-label="Username" aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="iconrightInput" class="form-label fs-6 text-primary"><small>Note » OTP will be sent as SMS to you after you enter mobile number in above mobile field.</small> </label>
                                                        <div class="form-icon right">
                                                            <input type="" class="form-control form-control-icon" id="iconrightInput"
                                                                placeholder="Enter OTP Will be send to your mobile as SMS">
                                                            <i class="las la-envelope"></i>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="iconrightInput" class="form-label fs-6 text-primary"><small>Note » The password you enter here will be used when you log into the portal.</small></label>
                                                        <div class="form-icon right">
                                                            <input type="password" class="form-control form-control-icon" id="iconrightInput"
                                                                placeholder="Enter Password. Required when logging into the portal.">
                                                            <i class="las la-key"></i>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="form-icon right">
                                                            <input type="password" class="form-control form-control-icon" id="iconrightInput"
                                                                placeholder="Confirm your Password.">
                                                            <i class="las la-key"></i>
                                                        </div>
                                                    </div>

                                                    <div class="mb-4">
                                                        <p class="mb-0 fs-12 text-muted fst-italic">By registering you agree to the Velzon <a href="#" class="text-primary text-decoration-underline fst-normal fw-medium">Terms of Use</a></p>
                                                    </div>

                                                    <div id="password-contain" class="p-3 bg-light mb-2 rounded">
                                                        <h5 class="fs-13">Password must contain:</h5>
                                                        <p id="pass-length" class="invalid fs-12 mb-2">Minimum <b>8 characters</b></p>
                                                        <p id="pass-lower" class="invalid fs-12 mb-2">At <b>lowercase</b> letter (a-z)</p>
                                                        <p id="pass-upper" class="invalid fs-12 mb-2">At least <b>uppercase</b> letter (A-Z)</p>
                                                        <p id="pass-number" class="invalid fs-12 mb-0">A least <b>number</b> (0-9)</p>
                                                    </div>

                                                    <div class="mt-4">
                                                        <button class="btn btn-success w-100" type="submit">Sign Up</button>
                                                    </div>

                                                   
                                                </form>
                                            </div>

                                            <div class="mt-5 text-center">
                                                <p class="mb-0">Already have an account ? <a href="auth-signin-cover" class="fw-semibold text-primary text-decoration-underline"> Signin</a> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->

                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
                
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->

        <!-- footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> Velzon. Crafted with <i
                                    class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->
    </div>
    <!-- end auth-page-wrapper -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(URL::asset('assets/libs/particles.js/particles.js.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/js/pages/particles.app.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/js/pages/form-validation.init.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('menu.auth_nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/NLCS-project/Laravel/default/resources/views/auth/register.blade.php ENDPATH**/ ?>
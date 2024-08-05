<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<!-- Mirrored from pixinvent.com/stack-responsive-bootstrap-4-admin-template/html/ltr/vertical-menu-template-semi-dark/register-with-bg.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Nov 2022 12:38:59 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Stack admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, stack admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Register with Background Color - Stack Responsive Bootstrap 4 Admin Template</title>
    <link rel="apple-touch-icon" href="assets/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="assets/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="assets/app-assets/vendors/css/forms/icheck/icheck.css">
    <link rel="stylesheet" type="text/css" href="assets/app-assets/vendors/css/forms/icheck/custom.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="assets/app-assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/app-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="assets/app-assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="assets/app-assets/css/components.min.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="assets/app-assets/css/core/menu/menu-types/vertical-menu.min.css">
    <link rel="stylesheet" type="text/css" href="assets/app-assets/css/core/colors/palette-gradient.min.css">
    <link rel="stylesheet" type="text/css" href="assets/app-assets/css/pages/login-register.min.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu 1-column  bg-cyan bg-lighten-2 blank-page blank-page" data-open="click" data-menu="vertical-menu" data-col="1-column">
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="row flexbox-container">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="col-lg-4 col-md-8 col-10 box-shadow-2 p-0">
                            <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                                <div class="card-header border-0 pb-0">
                                    <div class="card-title text-center">
                                        <img src="assets/app-assets/images/logo/stack-logo-dark.png" alt="branding logo">
                                    </div>
                                    <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2"><span>Easily
                                            Using</span></h6>
                                </div>
                                <div class="card-content">
                                    <!-- <div class="card-body text-center">
                        <a href="#" class="btn btn-social mb-1 mr-1 btn-outline-facebook"><span
                                class="fa fa-facebook"></span> <span class="px-1">facebook</span> </a>
                        <a href="#" class="btn btn-social mb-1 btn-outline-google"><span
                                class="fa fa-google-plus font-medium-4"></span> <span class="px-1">google</span> </a>
                    </div> -->
                                    <!-- <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1"><span>
                                            Email</span></p> -->
                                    <div class="card-body pt-0">
                                        <form id="registrationForm" class="form-horizontal" action="">
                                            <fieldset class="form-group floating-label-form-group">
                                                <label for="user-name">User Name</label>
                                                <input type="text" class="form-control" name="user_name"   id="user_name" placeholder="User Name">
                                                <span id="nameError"></span>
                                            </fieldset>
                                            <fieldset class="form-group floating-label-form-group">
                                                <label for="user-email">Your Email Address</label>
                                                <input type="text" class="form-control" name="user_email" id="user_email" placeholder="Your Email Address">
                                                <span id="emailError"></span>
                                            </fieldset>
                                            <fieldset class="form-group floating-label-form-group mb-1">
                                                <label for="user-password">Enter Mobile</label>
                                                <input type="text" class="form-control" name="user_mobile" id="user_mobile" placeholder="Enter Password">
                                                <span id="mobileError"></span>
                                            </fieldset>
                                            <fieldset class="form-group floating-label-form-group mb-1">
                                                <label for="user-password">Enter Password</label>
                                                <input type="text" class="form-control" name="user_password" id="user_password" placeholder="Enter Password">
                                                <span id="mobilePass"></span>
                                            </fieldset>
                                            <div class="form-group row">
                                                <div class="col-sm-6 col-12 text-center text-sm-left pr-0">
                                                    <fieldset>
                                                        <input type="checkbox" id="remember-me" class="chk-remember">
                                                        <label for="remember-me"> Remember Me</label>
                                                    </fieldset>
                                                </div>
                                                <div class="col-sm-6 col-12 float-sm-left text-center text-sm-right"><a href="recover-password.html" class="card-link">Forgot Password?</a></div>
                                            </div>
                                            <button type="submit" class="btn btn-outline-primary btn-block"><i class="feather icon-user"></i> Register</button>
                                        </form>
                                    </div>
                                    <div class="card-body pt-0">
                                        <a href="log.php" class="btn btn-outline-danger btn-block"><i class="feather icon-unlock"></i> Login</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="assets/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="assets/app-assets/vendors/js/forms/icheck/icheck.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="assets/app-assets/js/core/app-menu.min.js"></script>
    <script src="assets/app-assets/js/core/app.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="assets/app-assets/js/scripts/forms/form-login-register.min.js"></script>
    <!-- END: Page JS-->
    <script>
        $(document).ready(function() {
            // Client-side validation using jQuery
            $('#registrationForm').submit(function(event) {
                event.preventDefault();

                var name = $('#user_name').val();
                var email = $('#user_email').val();
                var mobile = $('#user_mobile').val();
                var password = $('#user_password').val();

                // Perform client-side validation
                var isValid = true;

             //  Validate name (example: minimum 2 characters)
                if (name.length < 2) {
                    $('#nameError').text('Name must be at least 2 characters');
                    isValid = false;
                } else {
                    $('#nameError').text('');
                }

                // Validate email (example: using regular expression)
                var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailPattern.test(email)) {
                    $('#emailError').text('Please enter a valid email address');
                    isValid = false;
                } else {
                    $('#emailError').text('');
                }

                // Validate mobile (example: using regular expression)
                var mobilePattern = /^\d{10}$/;
                if (!mobilePattern.test(mobile)) {
                    $('#mobileError').text('Please enter a valid 10-digit mobile number');
                    isValid = false;
                } 
                if(password.length <5){
                    $('#mobilePass').text('Password must be a 8 digit');
                    isValid = false;
                }
                else {
                    $('#mobilePass').text('');
                }


                if (isValid) {
                    // All client-side validation passed, make the API call
                    $.ajax({
                        url: 'api/user/reg_api.php',
                        method: 'POST',
                        data: {
                            name: name,
                            email: email,
                            mobile: mobile,
                            password: password
                        },
                        dataType: 'json',
                        success: function(response) {
                        
                            $('#user_name').val("");
                            $('#user_email').val("");
                            $('#user_mobile').val("");
                            $('#user_password').val("");

                            // console.log(response.message);
                            // Process the API response
                          alert(response.message);
                        }
                    });
                }
            });
        });
    </script>

</body>
<!-- END: Body-->


</html>
<?php session_start(); ?>
<!DOCTYPE html>


<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<!-- Mirrored from pixinvent.com/stack-responsive-bootstrap-4-admin-template/html/ltr/vertical-menu-template-semi-dark/login-simple.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Nov 2022 12:38:59 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Stack admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, stack admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Login Page - Stack Responsive Bootstrap 4 Admin Template</title>
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

<body class="vertical-layout vertical-menu 1-column   blank-page blank-page" data-open="click" data-menu="vertical-menu" data-col="1-column">
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
                            <div class="card border-grey border-lighten-3 m-0">
                                <div class="card-header border-0">
                                    <div class="card-title text-center">
                                        <div class="p-1"><img src="assets/app-assets/images/logo/stack-logo-dark.png" alt="branding logo"></div>
                                    </div>
                                    <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2"><span>Login with
                                            Stack</span></h6>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form-horizontal form-simple" id="login_form" action="" novalidate>
                                            <fieldset class="form-group position-relative has-icon-left mb-0">
                                                <input type="text" class="form-control form-control-lg" id="email" name="email" placeholder="Your Username" required>
                                                <div class="form-control-position">
                                                    <i class="feather icon-user"></i>
                                                </div>
                                            </fieldset>
                                            <fieldset class="form-group position-relative has-icon-left">
                                                <input type="password" class="form-control form-control-lg" id="user_password" name="user_password" placeholder="Enter Password" required>
                                                <div class="form-control-position">
                                                    <i class="fa fa-key"></i>
                                                </div>
                                            </fieldset>
                                            <div class="form-group row">
                                                <div class="col-sm-6 col-12 text-center text-sm-left">
                                                    <fieldset>
                                                        <input type="checkbox" id="remember-me" class="chk-remember">
                                                        <label for="remember-me"> Remember Me</label>
                                                    </fieldset>
                                                </div>
                                                <div class="col-sm-6 col-12 text-center text-sm-right"><a href="recover-password.html" class="card-link">Forgot Password?</a></div>
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-lg btn-block"><i class="feather icon-unlock"></i> Login</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="">
                                        <p class="float-sm-left text-center m-0"><a href="recover-password.html" class="card-link">Recover password</a></p>
                                        <p class="float-sm-right text-center m-0">New to Stack? <a href="reg.php" class="card-link">Sign Up</a></p>
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
    <script src="assets/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="assets/app-assets/js/core/app-menu.min.js"></script>
    <script src="assets/app-assets/js/core/app.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="assets/app-assets/js/scripts/forms/form-login-register.min.js"></script>
    <!-- END: Page JS-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- <script>
        $(document).ready(function() {
            $('#login_form').submit(function(event) {
                event.preventDefault();

                var email = $('#email').val();
                var user_password = $('#user_password').val();


                $.ajax({
                    url: 'api/user/log.php', // Replace with the path to your login API file
                    method: 'POST',
                    data: {
                        email: email,
                        password: user_password
                    },
                    dataType: 'json',
                    success: function(response) {
                        console.log(<?php echo $_SESSION['role_id']; ?>);
                        role_id = <?php echo $_SESSION['role_id']; ?>
                        if (response.success == 1) {
                           
                            console.log(role_id);
                            if (role_id == "1") {
                                window.location.replace('admin/index.php'); // Replace with your dashboard/home page URL
                            } else if (role_id == "2") {
                                window.location.replace('teacher/index.php'); // Replace with your dashboard/home page URL
                            }
                            else{
                                alert("Login Problem");
                            }


                            // Login successful, redirect to a dashboard or home page
                            // window.location.replace('admin/index.php'); // Replace with your dashboard/home page URL
                        } else {

                            alert(response.message);
                        }
                    },
                    error: function() {
                        // Handle any error during the API call
                        alert('An error occurred during the login process.');
                    }
                });
            });
        });
    </script> -->
    <script>
        $(document).ready(function() {
            $('#login_form').submit(function(event) {
                event.preventDefault();

                var email = $('#email').val();
                var user_password = $('#user_password').val();

                $.ajax({
                    url: 'api/user/log.php', // Replace with the path to your login API file
                    method: 'POST',
                    data: {
                        email: email,
                        password: user_password
                    },
                    dataType: 'json',
                    success: function(response) {
                 
                        console.log(response.role_id);
                        if (response.success == 1) {
                            if (response.role_id == 1) {
                                window.location.replace('admin/index.php');
                            } else if (response.role_id == 2) {
                                window.location.replace('teacher/index.php');
                            }
                            else if (response.role_id == 3) {
                                window.location.replace('student/index.php');
                            } else {
                                alert("Login Problem");
                            }
                        } else {
                            alert(response.message);
                        }
                    },
                    error: function() {
                        console.log(response);
                        alert('An error occurred during the login process.');
                    }
                });
            });
        });
    </script>
</body>
<!-- END: Body-->

<!-- Mirrored from pixinvent.com/stack-responsive-bootstrap-4-admin-template/html/ltr/vertical-menu-template-semi-dark/login-simple.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Nov 2022 12:38:59 GMT -->

</html>
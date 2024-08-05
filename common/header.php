<?php session_start(); ?>
<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<!-- Mirrored from pixinvent.com/stack-responsive-bootstrap-4-admin-template/html/ltr/vertical-menu-template-semi-dark/dashboard-crm.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Nov 2022 12:38:25 GMT -->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Stack admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
  <meta name="keywords" content="admin template, stack admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="PIXINVENT">
  <title></title>
  <link rel="apple-touch-icon" href="../assets/app-assets/images/ico/apple-icon-120.png">
  <link rel="shortcut icon" type="image/x-icon" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/images/ico/favicon.ico">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- BEGIN: Vendor CSS-->
  <link rel="stylesheet" type="text/css" href="../assets/app-assets/vendors/css/vendors.min.css">
  <!-- END: Vendor CSS-->

  <!-- BEGIN: Theme CSS-->
  <link rel="stylesheet" type="text/css" href="../assets/app-assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../assets/app-assets/css/bootstrap-extended.min.css">
  <link rel="stylesheet" type="text/css" href="../assets/app-assets/css/colors.min.css">
  <link rel="stylesheet" type="text/css" href="../assets/app-assets/css/components.min.css">
  <!-- END: Theme CSS-->

  <!-- BEGIN: Page CSS-->
  <link rel="stylesheet" type="text/css" href="../assets/app-assets/css/core/menu/menu-types/vertical-menu.min.css">
  <link rel="stylesheet" type="text/css" href="../assets/app-assets/css/core/colors/palette-gradient.min.css">
  <link rel="stylesheet" type="text/css" href="../assets/app-assets/fonts/simple-line-icons/style.min.css">
  <link rel="stylesheet" type="text/css" href="../assets/app-assets/css/pages/card-statistics.min.css">
  <link rel="stylesheet" type="text/css" href="../assets/app-assets/css/pages/vertical-timeline.min.css">
  <!-- END: Page CSS-->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
  <!-- BEGIN: Custom CSS-->
  <link rel="stylesheet" type="text/css" href="../assets/assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="../assets/app-assets/css/custom.css">

  <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">

  <!-- BEGIN: Header-->
  <nav class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-semi-dark navbar-shadow">
    <div class="navbar-wrapper">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
          <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i data-feather="menu" class="feather icon-menu font-large-1"></i></a></li>
          <li class="nav-item"><a class="navbar-brand" href="../admin/index.php"><img class="brand-logo" alt="stack admin logo" src="../assets/app-assets/logo/log.png">
              <!-- <h2 class="brand-text">Rivie</h2> -->
            </a></li>
          <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="fa fa-ellipsis-v"></i></a></li>
        </ul>
      </div>
      <div class="navbar-container content">
        <div class="collapse navbar-collapse" id="navbar-mobile">
          <ul class="nav navbar-nav mr-auto float-left">
            <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i data-feather="menu" class="feather icon-menu"></i></a></li>

            <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i data-feather="maximize" class="ficon feather icon-maximize"></i></a></li>
            <!-- <li class="nav-item nav-search"><a class="nav-link nav-link-search" href="#"><i data-feather="maximize" class="ficon feather icon-search"></i></a> -->
            <div class="search-input">
              <input class="input" type="text" placeholder="Explore Stack..." tabindex="0" data-search="template-search">
              <div class="search-input-close"><i class="feather icon-x"></i></div>
              <ul class="search-list"></ul>
            </div>
            </li>
          </ul>
          <ul class="nav navbar-nav float-right">
            <!-- <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span class="selected-language"></span></a>
              <div class="dropdown-menu" aria-labelledby="dropdown-flag"><a class="dropdown-item" href="#" data-language="en"><i class="flag-icon flag-icon-us"></i> English</a><a class="dropdown-item" href="#" data-language="fr"><i class="flag-icon flag-icon-fr"></i> French</a><a class="dropdown-item" href="#" data-language="pt"><i class="flag-icon flag-icon-pt"></i> Portuguese</a><a class="dropdown-item" href="#" data-language="de"><i class="flag-icon flag-icon-de"></i> German</a></div>
            </li> -->
            <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i data-feather="bell" class="ficon feather icon-bell"></i><span class="badge badge-pill badge-danger badge-up">5</span></a>
              <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                <li class="dropdown-menu-header">
                  <h6 class="dropdown-header m-0"><span class="grey darken-2">Notifications</span><span class="notification-tag badge badge-danger float-right m-0">5 New</span></h6>
                </li>
                <li class="scrollable-container media-list"><a href="javascript:void(0)">
                    <div class="media">
                      <div class="media-left align-self-center"><i class="feather icon-plus-square icon-bg-circle bg-cyan"></i></div>
                      <div class="media-body">
                        <h6 class="media-heading">You have new order!</h6>
                        <p class="notification-text font-small-3 text-muted">Lorem ipsum dolor sit amet, consectetuer elit.</p><small>
                          <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">30 minutes ago</time></small>
                      </div>
                    </div>
                  </a><a href="javascript:void(0)">
                    <div class="media">
                      <div class="media-left align-self-center"><i class="feather icon-download-cloud icon-bg-circle bg-red bg-darken-1"></i></div>
                      <div class="media-body">
                        <h6 class="media-heading red darken-1">99% Server load</h6>
                        <p class="notification-text font-small-3 text-muted">Aliquam tincidunt mauris eu risus.</p><small>
                          <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Five hour ago</time></small>
                      </div>
                    </div>
                  </a><a href="javascript:void(0)">
                    <div class="media">
                      <div class="media-left align-self-center"><i class="feather icon-alert-triangle icon-bg-circle bg-yellow bg-darken-3"></i></div>
                      <div class="media-body">
                        <h6 class="media-heading yellow darken-3">Warning notifixation</h6>
                        <p class="notification-text font-small-3 text-muted">Vestibulum auctor dapibus neque.</p><small>
                          <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Today</time></small>
                      </div>
                    </div>
                  </a><a href="javascript:void(0)">
                    <div class="media">
                      <div class="media-left align-self-center"><i class="feather icon-check-circle icon-bg-circle bg-cyan"></i></div>
                      <div class="media-body">
                        <h6 class="media-heading">Complete the task</h6><small>
                          <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Last week</time></small>
                      </div>
                    </div>
                  </a><a href="javascript:void(0)">
                    <div class="media">
                      <div class="media-left align-self-center"><i class="feather icon-file icon-bg-circle bg-teal"></i></div>
                      <div class="media-body">
                        <h6 class="media-heading">Generate monthly report</h6><small>
                          <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Last month</time></small>
                      </div>
                    </div>
                  </a></li>
                <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href="javascript:void(0)">Read all notifications</a></li>
              </ul>
            </li>
            <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i data-feather="mail" class="ficon feather icon-mail"></i><span class="badge badge-pill badge-warning badge-up">3</span></a>
              <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                <li class="dropdown-menu-header">
                  <h6 class="dropdown-header m-0"><span class="grey darken-2">Messages</span><span class="notification-tag badge badge-warning float-right m-0">4 New</span></h6>
                </li>
                <li class="scrollable-container media-list"><a href="javascript:void(0)">
                    <div class="media">
                      <div class="media-left">
                        <div class="avatar avatar-online avatar-sm rounded-circle"><img src="../../../app-assets/images/portrait/small/avatar-s-1.png" alt="avatar"><i></i></div>
                      </div>
                      <div class="media-body">
                        <h6 class="media-heading">Margaret Govan</h6>
                        <p class="notification-text font-small-3 text-muted">I like your portfolio, let's start.</p><small>
                          <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Today</time></small>
                      </div>
                    </div>
                  </a><a href="javascript:void(0)">
                    <div class="media">
                      <div class="media-left"><span class="avatar avatar-sm avatar-busy rounded-circle"><img src="../../../app-assets/images/portrait/small/avatar-s-2.png" alt="avatar"><i></i></span></div>
                      <div class="media-body">
                        <h6 class="media-heading">Bret Lezama</h6>
                        <p class="notification-text font-small-3 text-muted">I have seen your work, there is</p><small>
                          <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Tuesday</time></small>
                      </div>
                    </div>
                  </a><a href="javascript:void(0)">
                    <div class="media">
                      <div class="media-left">
                        <div class="avatar avatar-online avatar-sm rounded-circle"><img src="../../../app-assets/images/portrait/small/avatar-s-3.png" alt="avatar"><i></i></div>
                      </div>
                      <div class="media-body">
                        <h6 class="media-heading">Carie Berra</h6>
                        <p class="notification-text font-small-3 text-muted">Can we have call in this week ?</p><small>
                          <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Friday</time></small>
                      </div>
                    </div>
                  </a><a href="javascript:void(0)">
                    <div class="media">
                      <div class="media-left"><span class="avatar avatar-sm avatar-away rounded-circle"><img src="../../../app-assets/images/portrait/small/avatar-s-6.png" alt="avatar"><i></i></span></div>
                      <div class="media-body">
                        <h6 class="media-heading">Eric Alsobrook</h6>
                        <p class="notification-text font-small-3 text-muted">We have project party this saturday.</p><small>
                          <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">last month</time></small>
                      </div>
                    </div>
                  </a></li>
                <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href="javascript:void(0)">Read all messages</a></li>
              </ul>
            </li>
            <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                <div class="avatar avatar-online"><img src="../assets/app-assets/images/portrait/small/avatar-s-1.png" alt="avatar"><i></i></div><span class="user-name">John Doe</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="user-profile.html"><i class="feather icon-user"></i> Edit Profile</a><a class="dropdown-item" href="app-email.html"><i class="feather icon-mail"></i> My Inbox</a><a class="dropdown-item" href="user-cards.html"><i class="feather icon-check-square"></i> Task</a><a class="dropdown-item" href="app-chat.html"><i class="feather icon-message-square"></i> Chats</a>
                <div class="dropdown-divider"></div><a class="dropdown-item" href="login-with-bg-image.html"><i class="feather icon-power"></i> Logout</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- END: Header-->


  <!-- BEGIN: Main Menu-->
  <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <li class=" nav-item"><a href="index.php"><i data-feather="globe" class="feather icon-globe"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span><span class="badge badge badge-primary badge-pill float-right mr-2"></span></a></li>
        <li class=" nav-item"><a href="index.php"><i data-feather="globe" class="feather icon-globe"></i><span class="menu-title" data-i18n="Dashboard">Orgainsation Manage</span><span class="badge badge badge-primary badge-pill float-right mr-2"></span></a>
          <ul class="menu-content">
            <li><a class="menu-item" href="general_setting.php" data-i18n="eCommerce">General Setting</a>
            <li><a class="menu-item" href="manage_brand.php" data-i18n="eCommerce">Manage Setting</a>
            </li>
        </li>
        <li><a class="menu-item" href="create_org.php" data-i18n="eCommerce">Create Orgainisation</a>
        </li>
        <li><a class="menu-item" href="manage_org.php" data-i18n="eCommerce">Manage Orgainisation</a>
        </li>
        <li><a class="menu-item" href="create_user.php" data-i18n="eCommerce">Create Users</a>
        </li>
        <li><a class="menu-item" href="manage_user.php" data-i18n="eCommerce">Manage Users</a>
        </li>
        <li><a class="menu-item" href="roles.php" data-i18n="eCommerce">Manage Roles</a>
        </li>

      </ul>
      </li>


      <li class=" nav-item"><a href="#"><i data-feather="users" class="feather icon-users"></i><span class="menu-title" data-i18n="Dashboard">Staff Management</span><span class="badge badge badge-primary badge-pill float-right mr-2"></span></a>
        <ul class="menu-content">
          <li><a class="menu-item" href="create_designation.php" data-i18n="eCommerce">Create Designation</a>
          </li>
          <li><a class="menu-item" href="manage_designation.php" data-i18n="eCommerce">Manage Designation</a>
          </li>



        </ul>
      </li>

      <li class=" nav-item"><a href="#"><i data-feather="users" class="feather icon-users"></i><span class="menu-title" data-i18n="Dashboard">Quiz Setup</span><span class="badge badge badge-primary badge-pill float-right mr-2"></span></a>
        <ul class="menu-content">
          <li><a class="menu-item" href="create_exam.php" data-i18n="eCommerce">Create Exam</a>
          </li>
          <li><a class="menu-item" href="manage_exam.php" data-i18n="eCommerce">Manage Exam</a>
          </li>
          <li><a class="menu-item" href="create_class.php" data-i18n="eCommerce">Create Class</a>
          </li>

          <li><a class="menu-item" href="manage_class.php" data-i18n="eCommerce">Manage Class</a>
          </li>
          <li><a class="menu-item" href="create.subject.php" data-i18n="eCommerce">Create Subject</a>
          </li>

          <li><a class="menu-item" href="manage_subject.php" data-i18n="eCommerce">Manage Subject</a>

          </li>
          <!-- <li><a class="menu-item" href="create_section.php" data-i18n="eCommerce">Create Section</a>
          </li>

          <li><a class="menu-item" href="manage_section.php" data-i18n="eCommerce">Manage section</a>

          </li> -->

          <li><a class="menu-item" href="create_chapter.php" data-i18n="eCommerce">Create Chapter</a>
          </li>

          <li><a class="menu-item" href="manage_chapter.php" data-i18n="eCommerce">Manage Chapter</a>

          </li>

          <li><a class="menu-item" href="create_sub_chapter.php" data-i18n="eCommerce">Create Sub Chapter</a>
          </li>

          <li><a class="menu-item" href="manage_sub_chapter.php" data-i18n="eCommerce">Manage Sub Chapter</a>

          </li>





          <li><a class="menu-item" href="create_exam_pattern.php" data-i18n="eCommerce">Create Question</a>
          </li>

          <li><a class="menu-item" href="manage_exam_question.php" data-i18n="eCommerce">Manage Question</a>

          </li>

          <li><a class="menu-item" href="exam_setup.php" data-i18n="eCommerce">
            Exam Setup</a>
          </li>

          <li><a class="menu-item" href="manage_examSetup.php" data-i18n="eCommerce">Manage Exam Setup</a>

          </li>

          <li><a class="menu-item" href="test_list.php" data-i18n="eCommerce">Test List</a>
          </li>

        </ul>
      </li>
      <li class=" nav-item"><a href="#"><i data-feather="users" class="feather icon-users"></i><span class="menu-title" data-i18n="Dashboard">Test Management</span><span class="badge badge badge-primary badge-pill float-right mr-2"></span></a>
        <ul class="menu-content">
          <li><a class="menu-item" href="schedule_exam.php" data-i18n="eCommerce">
              Schedule Exam
            </a>
          </li>
          <li><a class="menu-item" href="create_org.php" data-i18n="eCommerce">Assign Test</a>
          </li>


        </ul>
      </li>
      <li class=" nav-item"><a href="#"><i data-feather="users" class="feather icon-users"></i><span class="menu-title" data-i18n="Dashboard">Practice Test</span><span class="badge badge badge-primary badge-pill float-right mr-2"></span></a>
        <ul class="menu-content">
          <li><a class="menu-item" href="general_setting.php" data-i18n="eCommerce">Create Test</a>
          </li>
          <li><a class="menu-item" href="create_org.php" data-i18n="eCommerce">Assign Test</a>
          </li>


        </ul>
      </li>
      <li class=" nav-item"><a href="#"><i data-feather="users" class="feather icon-users"></i><span class="menu-title" data-i18n="Dashboard">Analysis</span><span class="badge badge badge-primary badge-pill float-right mr-2"></span></a>
        <ul class="menu-content">
          <li><a class="menu-item" href="general_setting.php" data-i18n="eCommerce">Overall Analysis </a>
          </li>
          <li><a class="menu-item" href="general_setting.php" data-i18n="eCommerce">Student Analysis</a>
          </li>
          <li><a class="menu-item" href="general_setting.php" data-i18n="eCommerce">Standard Report </a>
          </li>


        </ul>
      </li>
      <li class=" nav-item"><a href="#"><i data-feather="users" class="feather icon-users"></i><span class="menu-title" data-i18n="Dashboard">Notifications</span><span class="badge badge badge-primary badge-pill float-right mr-2"></span></a>
        <ul class="menu-content">
          <li><a class="menu-item" href="general_setting.php" data-i18n="eCommerce">Push Notifications</a>
          </li>
          <li><a class="menu-item" href="general_setting.php" data-i18n="eCommerce">Customized Notifications</a>
          </li>
        </ul>
      </li>
      <li class=" nav-item"><a href="#"><i data-feather="users" class="feather icon-users"></i><span class="menu-title" data-i18n="Dashboard">Document Sharing</span><span class="badge badge badge-primary badge-pill float-right mr-2"></span></a>
        <ul class="menu-content">
          <li><a class="menu-item" href="general_setting.php" data-i18n="eCommerce">Links</a>
          </li>
          <li><a class="menu-item" href="general_setting.php" data-i18n="eCommerce">PDF</a>
          </li>
        </ul>
      </li>



      </ul>
    </div>
  </div>
  <!-- END: Main Menu-->
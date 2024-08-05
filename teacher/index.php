<?php include "../common/header.php"; ?>
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><!-- Grouped multiple cards for statistics starts here -->
            <div class="row grouped-multiple-statistics-card">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 col-xl-3 col-sm-6 col-12">
                                    <div class="d-flex align-items-start mb-sm-1 mb-xl-0 border-right-blue-grey border-right-lighten-5">
                                        <span class="card-icon primary d-flex justify-content-center mr-3">
                                            <i class="icon p-1 icon-bar-chart customize-icon font-large-2 p-1"></i>
                                        </span>
                                        <div class="stats-amount mr-3">
                                            <h3 class="heading-text text-bold-600">300</h3>
                                            <p class="sub-heading">Student</p>
                                        </div>
                                        <span class="inc-dec-percentage">
                                            <small class="success"><i class="fa fa-long-arrow-up"></i> </small>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xl-3 col-sm-6 col-12">
                                    <div class="d-flex align-items-start mb-sm-1 mb-xl-0 border-right-blue-grey border-right-lighten-5">
                                        <span class="card-icon danger d-flex justify-content-center mr-3">
                                            <i class="icon p-1 icon-pie-chart customize-icon font-large-2 p-1"></i>
                                        </span>
                                        <div class="stats-amount mr-3">
                                            <h3 class="heading-text text-bold-600">18.63%</h3>
                                            <p class="sub-heading">Attendence</p>
                                        </div>
                                        <span class="inc-dec-percentage">
                                            <small class="danger"><i class="fa fa-long-arrow-down"></i> </small>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xl-3 col-sm-6 col-12">
                                    <div class="d-flex align-items-start border-right-blue-grey border-right-lighten-5">
                                        <span class="card-icon success d-flex justify-content-center mr-3">
                                            <i class="icon p-1 icon-graph customize-icon font-large-2 p-1"></i>
                                        </span>
                                        <div class="stats-amount mr-3">
                                            <h3 class="heading-text text-bold-600">40</h3>
                                            <p class="sub-heading">Teacher</p>
                                        </div>
                                        <span class="inc-dec-percentage">
                                            <small class="success"><i class="fa fa-long-arrow-up"></i> </small>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xl-3 col-sm-6 col-12">
                                    <div class="d-flex align-items-start">
                                        <span class="card-icon warning d-flex justify-content-center mr-3">
                                            <i class="icon p-1 icon-basket-loaded customize-icon font-large-2 p-1"></i>
                                        </span>
                                        <div class="stats-amount mr-3">
                                            <h3 class="heading-text text-bold-600">50%</h3>
                                            <p class="sub-heading">Analysis</p>
                                        </div>
                                        <span class="inc-dec-percentage">
                                            <small class="danger"><i class="fa fa-long-arrow-down"></i></small>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Grouped multiple cards for statistics ends here -->

            <!-- Minimal modern charts for power consumption, region statistics and sales etc. starts here -->
            <div class="row minimal-modern-charts">
                <!-- power consumption chart -->
                <div class="col-xxl-6 col-xl-8 col-lg-8 col-md-12 col-12 power-consumption-stats-chart">
                    <div class="card">
                        <div class="card-content pt-2 px-1">
                            <div class="row">
                                <div class="col-8 d-flex">
                                    <div class="ml-1">
                                        <h4 class="power-consumption-stats-title text-bold-500">Report</h4>
                                    </div>
                                    <div class="ml-50 mr-50">
                                        <p></p>
                                    </div>
                                </div>
                                <div class="col-4 d-flex justify-content-end pr-3">
                                    <div class="dark-text">
                                        <h5 class="power-consumption-active-tab text-bold-500">Week</h5>
                                    </div>
                                    <div class="light-text ml-2">
                                        <h5>Month</h5>
                                    </div>
                                </div>
                            </div>
                            <div id="spline-chart"></div>
                        </div>
                    </div>
                </div>

                <!-- tracking stats chart -->
                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-12 tracking-stats-chart">
                    <div class="card chart-with-tabs">
                        <div class="card-content">
                            <ul class="nav nav-pills card-tabs mb-2 pl-2 border-bottom-blue-grey border-bottom-lighten-5" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link text-primary bg-transparent active px-0 mr-1 py-1" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Charts</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-primary bg-transparent px-0 py-1" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Tracking</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <div class="body-header pl-2">
                                        <div class="d-flex">
                                            <h3 class="mr-2 body-header-title text-bold-600 mb-0">1,934</h3>
                                            <small class="success"><i class="fa fa-long-arrow-up"></i> +8.0%</small>
                                        </div>
                                        <div class="body-header-subtitle">
                                            <span class="text-muted">Sales</span>
                                        </div>
                                    </div>
                                    <div id="product_sales_column_basic_chart"></div>
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <div class="tracking-tab-container px-2">
                                        <div class="tracking-tab-content">
                                            <div class="top-content d-flex flex-wrap justify-content-start mt-2 pb-1 mb-2">
                                                <div class="tracking-heading-icon mr-2">
                                                    <i class="icon icon-pie-chart"></i>
                                                </div>
                                                <div class="pb-75">
                                                    <h5 class="tracking-tab-title mb-0 text-bold-600">Total Sales</h5>
                                                    <small class="text-muted">Top selling products</small>
                                                </div>
                                            </div>
                                            <div class="bottom-content">
                                                <ul class="tracking-list list-group">
                                                    <li class="list-group-item border py-1 px-0 d-flex justify-content-between align-items-center">
                                                        <span class="tracking-task text-bold-600 text-left">Stack Admin</span>
                                                        <span class="badge badge-pill badge-warning px-1 py-50">Medium</span>
                                                    </li>
                                                    <li class="list-group-item border py-1 px-0 d-flex justify-content-between align-items-center">
                                                        <span class="tracking-task text-bold-600 text-left">Convex Admin</span>
                                                        <span class="badge badge-pill badge-success px-1 py-50">High</span>
                                                    </li>
                                                    <li class="list-group-item border py-1 px-0 d-flex justify-content-between align-items-center">
                                                        <span class="tracking-task text-bold-600 text-left">Frest Admin</span>
                                                        <span class="badge badge-pill badge-warning px-1 py-50">Medium</span>
                                                    </li>
                                                    <li class="list-group-item border py-1 px-0 d-flex justify-content-between align-items-center">
                                                        <span class="tracking-task text-bold-600 text-left">Material Admin</span>
                                                        <span class="badge badge-pill badge-danger px-1 py-50">Low</span>
                                                    </li>
                                                    <li class="list-group-item border py-1 px-0 d-flex justify-content-between align-items-center">
                                                        <span class="tracking-task text-bold-600 text-left">Vuexy Admin</span>
                                                        <span class="badge badge-pill badge-success px-1 py-50">High</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- region stats chart -->
                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-12 region-stats-chart">
                    <div class="card statistic-card">
                        <div class="card-content">
                            <div class="top-row statistics-card-title border-bottom-blue-grey border-bottom-lighten-5">
                                <div class="py-1 pl-2 primary">
                                    <span class="mb-1">Region Statistics</span>
                                </div>
                            </div>
                            <div class="statistics-chart d-flex justify-content-center align-self-center">
                                <div id="sales_in_region_pie_donut"></div>
                            </div>
                            <div class="statistics-chart-data d-flex justify-content-center ml-auto mr-auto pb-50 mb-2">
                                <div class="collection mr-1">
                                    <span class="bullet bullet-xs bullet-warning"></span>
                                    <span class="font-weight-bold">26%</span>
                                </div>
                                <div class="collection mr-1">
                                    <span class="bullet bullet-xs bullet-danger"></span>
                                    <span class="font-weight-bold">44%</span>
                                </div>
                                <div class="collection mr-1">
                                    <span class="bullet bullet-xs bullet-primary"></span>
                                    <span class="font-weight-bold">28%</span>
                                </div>
                            </div>
                            <div class="statistic-card-footer d-flex">
                                <div class="column-data py-1 text-center border-top-blue-grey border-top-lighten-5 flex-grow-1 text-center border-right-blue-grey border-right-lighten-5">
                                    <p class="font-large-1 mb-0">$6.9k</p>
                                    <span>Revenue</span>
                                </div>
                                <div class="column-data py-1 flex-grow-1 text-center border-top-blue-grey border-top-lighten-5">
                                    <p class="font-large-1 mb-0">25</p>
                                    <span>Sales</span>
                                </div>
                                <div class="column-data py-1 flex-grow-1 text-center border-top-blue-grey border-top-lighten-5 border-left-blue-grey border-left-lighten-5">
                                    <p class="font-large-1 mb-0">11</p>
                                    <span>Products</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

         
            <!-- active users and my task timeline cards starts here -->
       
            <!-- active users and my task timeline cards ends here -->
        </div>
    </div>
</div>
<!-- END: Content-->


<?php include "../common/footer.php"; ?>
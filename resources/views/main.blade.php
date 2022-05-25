<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.bootstrapdash.com/demo/aquaui/template/demo_1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Feb 2022 08:23:05 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Aquaui Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../assets/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css" />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../assets/css/demo_1/style.css" />
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../assets/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('components.sidebar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->
            <div id="settings-trigger"><i class="mdi mdi-settings"></i></div>
            <div id="theme-settings" class="settings-panel">
                <i class="settings-close mdi mdi-close"></i>
                <p class="settings-heading">SIDEBAR SKINS</p>
                <div class="sidebar-bg-options selected" id="sidebar-default-theme">
                    <div class="img-ss rounded-circle bg-light border mr-3"></div>Default
                </div>
                <div class="sidebar-bg-options" id="sidebar-dark-theme">
                    <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
                </div>
            </div>
            <!-- partial -->
            <!-- partial:partials/_navbar.html -->
            @include('components.header-top')
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper pb-0">
                    <div class="page-header">
                        <h5>This is your dashboard</h5>
                        <h1 class="mb-0">Hello Walker</h1>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body large-card">
                                    <div class="d-xl-flex align-items-center mb-3">
                                        <div class="icon-bg">
                                            <i class="mdi mdi-tab"></i>
                                        </div>
                                        <div>
                                            <h4 class="mb-2 font-weight-light">Payments</h4>
                                            <h1 class="mb-0">$9,500.00</h1>
                                        </div>
                                    </div>
                                    <div class="chart-wrapper">
                                        <canvas id="paymentChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body large-card">
                                    <div class="d-xl-flex align-items-center mb-3">
                                        <div class="icon-bg">
                                            <i class="mdi mdi-square-inc-cash"></i>
                                        </div>
                                        <div>
                                            <h4 class="mb-2 font-weight-light">Revenue</h4>
                                            <h1 class="mb-0 d-flex align-items-center"> $210 <span
                                                    class="font-weight-normal text-medium ml-2 text-secondary">+36%
                                                    last month</span>
                                            </h1>
                                        </div>
                                    </div>
                                    <div class="chart-wrapper">
                                        <canvas id="revenueChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body large-card">
                                    <div class="d-xl-flex align-items-center mb-3">
                                        <div class="icon-bg">
                                            <i class="mdi mdi-cart-plus"></i>
                                        </div>
                                        <div>
                                            <h4 class="mb-2 font-weight-light">Total Orders</h4>
                                            <h1 class="mb-0 d-flex align-items-center"> 145 <span
                                                    class="font-weight-normal text-medium ml-2 text-secondary">+36%
                                                    last month</span>
                                            </h1>
                                        </div>
                                    </div>
                                    <div class="chart-wrapper">
                                        <canvas id="orderChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-lg-12 grid-margin">
                            <div class="row">
                                <div class="col-sm-12 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <p class="card-title mb-1">Performance</p>
                                            <div class="row">
                                                <div class="col-sm-7 grid-margin">
                                                    <p class="mb-4 text-medium text-muted"> Do you know the latest
                                                        update of 2019 </p>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div>
                                                            <h2> 12,587 <span
                                                                    class="text-small text-success ml-2">4.5%</span>
                                                            </h2>
                                                            <p class="text-medium text-secondary"> Balance in Account
                                                            </p>
                                                        </div>
                                                        <div>
                                                            <h2> 1,457 <span
                                                                    class="text-small text-danger ml-2">1.4%</span>
                                                            </h2>
                                                            <p class="text-medium text-secondary"> Month Profit </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-5 grid-margin">
                                                    <div class="canvas-bar-wrapper">
                                                        <canvas id="performanceChart"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <p class="card-title mb-1">Performance</p>
                                                    <div class="row">
                                                        <div class="col-sm-7">
                                                            <h2 class="d-flex align-items-center mb-1"> 12,587 <span
                                                                    class="text-small text-danger ml-3">1.4%</span>
                                                            </h2>
                                                            <p class="text-muted">Balance in A/c</p>
                                                        </div>
                                                        <div class="col-sm-5">
                                                            <canvas id="performanceAreaChart"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <p class="card-title mb-1">Tasks Pending</p>
                                                    <div class="row">
                                                        <div class="col-sm-7">
                                                            <h2 class="d-flex align-items-center mb-1"> 12,587 <span
                                                                    class="text-small text-danger ml-3">1.4%</span>
                                                            </h2>
                                                            <p class="text-muted">Balance in A/c</p>
                                                        </div>
                                                        <div class="col-sm-5">
                                                            <canvas id="taskAreaChart"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-5">
                                        <div>
                                            <p class="card-title">Sales overview</p>
                                            <p class="mb-0 text-muted"> Do you know the latest update of 2019 </p>
                                        </div>
                                        <div>
                                            <h3>$50,600.00</h3>
                                            <p class="mb-0 text-small text-muted">
                                                <span class="text-danger mr-2">1.4%</span><span>less than last
                                                    week</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div>
                                        <!-- <canvas id="salesTopChart"></canvas> -->
                                        <div class="flot-chart-wrapper">
                                            <div id="flotChart" class="flot-chart-wrapper">
                                                <canvas class="flot-base"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <p class="card-title mb-0">Sales overview</p>
                                        <p class="mb-0">Download Statement</p>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="bg-light-variant">
                                                <tr>
                                                    <th>#</th>
                                                    <th>Customer</th>
                                                    <th>Start Date</th>
                                                    <th>End Date</th>
                                                    <th>Total Return</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-info">5420</td>
                                                    <td class="font-weight-medium">Invested Schemes</td>
                                                    <td>Nov 04, 2019</td>
                                                    <td>14 Oct 2020</td>
                                                    <td class="font-weight-medium">$499.00</td>
                                                    <td class="text-danger">Due</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-info">5430</td>
                                                    <td class="font-weight-medium">Analytic Reports</td>
                                                    <td>13 Oct 2020</td>
                                                    <td>14 Oct 2020</td>
                                                    <td class="font-weight-medium">$199.00</td>
                                                    <td class="text-success">Paid</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-info">5440</td>
                                                    <td class="font-weight-medium">Enterprise Plan</td>
                                                    <td>Nov 04, 2019</td>
                                                    <td>16 Apr 2020</td>
                                                    <td class="font-weight-medium">$399.00</td>
                                                    <td class="text-danger">Due</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-info">5450</td>
                                                    <td class="font-weight-medium">Pro Plan</td>
                                                    <td>13 Oct 2020</td>
                                                    <td>14 Oct 2020</td>
                                                    <td class="font-weight-medium">$299.00</td>
                                                    <td class="text-success">Paid</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-info">5460</td>
                                                    <td class="font-weight-medium">Invested Schemes</td>
                                                    <td>Nov 04, 2019</td>
                                                    <td>28 Apr 2020</td>
                                                    <td class="font-weight-medium">$199.00</td>
                                                    <td class="text-danger">Due</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-info">5470</td>
                                                    <td class="font-weight-medium">Latest Tickets</td>
                                                    <td>13 Oct 2020</td>
                                                    <td>14 Oct 2020</td>
                                                    <td class="font-weight-medium">$599.00</td>
                                                    <td class="text-success">Paid</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <p class="card-title">Revenue by country</p>
                                    <div id="vmap" class="vector-map bgwhite"></div>
                                    <div class="mt-4 mb-3">
                                        <div class="d-flex justify-content-between mb-2">
                                            <p class="mb-0 text-medium">San Francisco</p>
                                            <p class="text-medium font-weight-medium mb-0">39k</p>
                                        </div>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="5"
                                                style="width: 70%;" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <div class="d-flex justify-content-between mb-2">
                                            <p class="mb-0 text-medium">New York</p>
                                            <p class="text-medium font-weight-medium mb-0">49k</p>
                                        </div>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="5"
                                                style="width: 50%;" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <div class="d-flex justify-content-between mb-2">
                                            <p class="mb-0 text-medium">Singapore</p>
                                            <p class="text-medium font-weight-medium mb-0">25k</p>
                                        </div>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="5"
                                                style="width: 30%;" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <div class="d-flex justify-content-between mb-2">
                                            <p class="mb-0 text-medium">Cologne</p>
                                            <p class="text-medium font-weight-medium mb-0">15k</p>
                                        </div>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="5"
                                                style="width: 10%;" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-9 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="card-title">Visitors overview</p>
                                        <div class="btn-group border rounded-group">
                                            <a href="#" class="btn btn-sm px-3">Day</a>
                                            <a href="#" class="btn btn-sm px-3">Month</a>
                                            <a href="#" class="btn btn-sm px-3">Year</a>
                                        </div>
                                    </div>
                                    <div class="scatter-wrapper">
                                        <canvas id="scatterChart"></canvas>
                                    </div>
                                    <div id="chart-legends-visitor" class="chart-legends-visitor"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2020 <a
                                href="https://www.bootstrapdash.com/" target="_blank">BootstrapDash</a>. All rights
                            reserved.</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made
                            with <i class="mdi mdi-heart text-danger"></i></span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../assets/vendors/chart.js/Chart.min.js"></script>
    <script src="../assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="../assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="../assets/vendors/chartist/chartist.min.js"></script>
    <script src="../assets/vendors/flot/jquery.flot.js"></script>
    <script src="../assets/vendors/flot/jquery.flot.resize.js"></script>
    <script src="../assets/vendors/flot/jquery.flot.categories.js"></script>
    <script src="../assets/vendors/flot/jquery.flot.fillbetween.js"></script>
    <script src="../assets/vendors/flot/jquery.flot.stack.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../assets/js/off-canvas.js"></script>
    <script src="../assets/js/hoverable-collapse.js"></script>
    <script src="../assets/js/misc.js"></script>
    <script src="../assets/js/settings.js"></script>
    <script src="../assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="../assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
</body>

<!-- Mirrored from www.bootstrapdash.com/demo/aquaui/template/demo_1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Feb 2022 08:23:29 GMT -->

</html>

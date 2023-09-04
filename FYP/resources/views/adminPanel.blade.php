<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" href="assets/images/mainLogo.png"/>
    <title>Warshatok - Admin</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/adminPanel/images/favicon.png">
    <link rel="stylesheet" href="assets/adminPanel/vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/adminPanel/vendor/owl-carousel/css/owl.theme.default.min.css">
    <link href="assets/adminPanel/vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link href="assets/adminPanel/css/style.css" rel="stylesheet">
    

    <meta name="csrf-token" content="{{ csrf_token() }}">



</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a  class="brand-logo">
               
                
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="search_bar dropdown">
                                <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                                    <i class="mdi mdi-magnify"></i>
                                </span>
                                <div class="dropdown-menu p-0 m-0">
                                    <form>
                                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                    </form>
                                </div>
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-bell"></i>
                                    <div class="pulse-css"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="list-unstyled">
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-user"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Martin</strong> has added a <strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-shopping-cart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Jennifer</strong> purchased Light Dashboard 2.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="danger"><i class="ti-bookmark"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Robin</strong> marked a <strong>ticket</strong> as unsolved.
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-heart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>David</strong> purchased Light Dashboard 1.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-image"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong> James.</strong> has added a<strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                    </ul>
                                    <a class="all-notification" href="#">See all notifications <i
                                            class="ti-arrow-right"></i></a>
                                </div>
                            </li>
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-account"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="./app-profile.html" class="dropdown-item">
                                        <i class="icon-user"></i>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <a href="./email-inbox.html" class="dropdown-item">
                                        <i class="icon-envelope-open"></i>
                                        <span class="ml-2">Inbox </span>
                                    </a>
                                    <a href="./page-login.html" class="dropdown-item">
                                        <i class="icon-key"></i>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="quixnav">
            <div class="quixnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label first">Main Menu</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>
                        <ul aria-expanded="false">
                            <li><a href="./admin">Dashboard</a></li>
                            <li><a href="./adminUsers">Users</a></li>
                            <li><a href="./tilesAdmin">Tiles</a></li>
                            <li><a href="./sanitaryAdmin">Sanitary Ware</a></li>
                        </ul>
                    </li>
                    
                </ul>
            </div>


        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">User Count</div>
                                    <div id="userCount" class="stat-digit"><i class="fa fa-usd"></i>8500</div>
                                </div>
                                <div class="progress">
                                    <div id="userProgress" class="progress-bar progress-bar-success w-85" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Service Count</div>
                                    <div id="serviceCount" class="stat-digit"> <i class="fa fa-usd"></i>7800</div>
                                </div>
                                <div class="progress">
                                    <div id="serviceProgress" class="progress-bar progress-bar-primary w-75" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Problems</div>
                                    <div id="problemCount" class="stat-digit"> <i class="fa fa-usd"></i> 500</div>
                                </div>
                                <div class="progress">
                                    <div id="problemProgress" class="progress-bar progress-bar-warning w-50" role="progressbar" aria-valuenow="100"  aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Orders</div>
                                    <div id="orderCount" class="stat-digit"> <i class="fa fa-usd"></i>650</div>
                                </div>
                                <div class="progress">
                                    <div id="orderProgress" class="progress-bar progress-bar-danger w-65" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                </div>
                <div class="row">
                    
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="m-t-10">
                                    <h4 class="card-title">Total Items</h4>
                                    <h2 id="totalItems" class="mt-3">385749</h2>
                                </div>
                                
                                <ul class="widget-line-list m-b-15">
                                    <li class="border-right"><span id="tilesCount">92%</span> <br><span class="text-primary"><i
                                                class="ti-hand-point-up"></i> Tiles</span></li>
                                    <li ><span id="sanitarywareCount">8%</span> <br><span class="text-info"><i
                                                class="ti-hand-point-up"></i> Sanitary</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Users</h4>
                            </div>
                            <div class="card-body">
                                <div class="current-progress">
                                    <div class="progress-content py-2">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="progress-text">Retail</div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="current-progressbar">
                                                    <div class="progress">
                                                        <div id="retailCount" class="progress-bar progress-bar-primary w-40" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                                            40%
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress-content py-2">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="progress-text">Wholesale</div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="current-progressbar">
                                                    <div class="progress">
                                                        <div id="wholesaleCount" class="progress-bar progress-bar-primary w-60" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                                            60%
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress-content py-2">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="progress-text">Ballat</div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="current-progressbar">
                                                    <div class="progress">
                                                        <div id="ballatCount" class="progress-bar progress-bar-primary w-70" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                                            70%
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress-content py-2">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="progress-text">Sangare</div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="current-progressbar">
                                                    <div class="progress">
                                                        <div id="sangareCount" class="progress-bar progress-bar-primary w-90" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                                            90%
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                

            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed by <a href="#" target="_blank">Quixkit</a> 2019</p>
                <p>Distributed by <a href="#" target="_blank">Themewagon</a></p> 
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="assets/adminPanel/vendor/global/global.min.js"></script>
    <script src="assets/adminPanel/js/quixnav-init.js"></script>
    <script src="assets/adminPanel/js/custom.min.js"></script>


    <!-- Vectormap -->
    <script src="assets/adminPanel/vendor/raphael/raphael.min.js"></script>
    <script src="assets/adminPanel/vendor/morris/morris.min.js"></script>


    <script src="assets/adminPanel/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="assets/adminPanel/vendor/chart.js/Chart.bundle.min.js"></script>

    <script src="assets/adminPanel/vendor/gaugeJS/dist/gauge.min.js"></script>

    <!--  flot-chart js -->
    <script src="assets/adminPanel/vendor/flot/jquery.flot.js"></script>
    <script src="assets/adminPanel/vendor/flot/jquery.flot.resize.js"></script>

    <!-- Owl Carousel -->
    <script src="assets/adminPanel/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <!-- Counter Up -->
    <script src="assets/adminPanel/vendor/jqvmap/js/jquery.vmap.min.js"></script>
    <script src="assets/adminPanel/vendor/jqvmap/js/jquery.vmap.usa.js"></script>
    <script src="assets/adminPanel/vendor/jquery.counterup/jquery.counterup.min.js"></script>


    <script src="assets/adminPanel/js/dashboard/dashboard-1.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="your-custom-script.js"></script>


<script>

$(document).ready(function () {


      

$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });



    var token = sessionStorage.getItem("accessToken");
  console.log(token);
  
  $.ajax({
            url: '/api/dashboardData', // Replace with your API endpoint URL
            type: 'GET',
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + token
            },
            success: function (data) {
                // Handle the success response here
                console.log(data);
                
                $('#userCount').text(data.userCount);
                $('#serviceCount').text(data.serviceCount);
                $('#problemCount').text(data.problemCount);
                $('#orderCount').text(data.orderCount);

                var userpercentage = (data.userCount / 100) * 100;
                var servicepercentage = (data.serviceCount / 100) * 100;
                var problempercentage = (data.problemCount / 100) * 100;
                var orderpercentage = (data.orderCount / 100) * 100;

                console.log(userpercentage);
                console.log(servicepercentage);
                console.log(problempercentage);
                console.log(orderpercentage);

                $('#userProgress').css('width', userpercentage + '%');
                $("#userProgress").attr("aria-valuenow", userpercentage);

                $('#serviceProgress').css('width', servicepercentage + '%');
                $("#serviceProgress").attr("aria-valuenow", servicepercentage);

                $('#problemProgress').css('width', problempercentage + '%');
                $("#problemProgress").attr("aria-valuenow", problempercentage);

                $('#orderProgress').css('width', orderpercentage + '%');
                $("#orderProgress").attr("aria-valuenow", orderpercentage);



                $('#userProgress').removeClass('w-85');
                var newClass1 = 'w-' + userpercentage;
                $('#userProgress').addClass(newClass1);
                
                $('#serviceProgress').removeClass('w-75');
                var newClass2 = 'w-' + servicepercentage;
                $('#serviceProgress').addClass(newClass2);

                $('#problemProgress').removeClass('w-50');
                var newClass3 = 'w-' + problempercentage;
                $('#problemProgress').addClass(newClass3);

                $('#orderProgress').removeClass('w-65');
                var newClass4 = 'w-' + orderpercentage;
                $('#orderProgress').addClass(newClass4);


                $('#totalItems').text(data.totalItemsCount);
                $('#tilesCount').text(data.tileCount);
                $('#sanitarywareCount').text(data.sanitarywareCount);

                

                $('#retailCount').text(data.retailCount);
                $('#wholesaleCount').text(data.wholesaleCount);
                $('#ballatCount').text(data.ballatCount);
                $('#sangareCount').text(data.sangareCount);

                $('#retailCount').css('width', data.retailCount + '%');
                $("#retailCount").attr("aria-valuenow", data.retailCount);

                $('#wholesaleCount').css('width', data.wholesaleCount + '%');
                $("#wholesaleCount").attr("aria-valuenow", data.wholesaleCount);

                $('#ballatCount').css('width', data.ballatCount + '%');
                $("#ballatCount").attr("aria-valuenow", data.ballatCount);

                $('#sangareCount').css('width', data.sangareCount + '%');
                $("#sangareCount").attr("aria-valuenow", data.sangareCount);

                $('#retailCount').removeClass('w-40');
                var newClass5 = 'w-' + data.retailCount;
                $('#retailCount').addClass(newClass5);
                
                $('#wholesaleCount').removeClass('w-60');
                var newClass6 = 'w-' + data.wholesaleCount;
                $('#wholesaleCount').addClass(newClass6);

                $('#ballatCount').removeClass('w-70');
                var newClass7 = 'w-' + data.ballatCount;
                $('#ballatCount').addClass(newClass7);

                $('#sangareCount').removeClass('w-90');
                var newClass8 = 'w-' + sangareCount;
                $('#sangareCount').addClass(newClass8);
                
            

                
            },
            error: function (error) {
                // Handle any errors that occur during the request
                
                console.error('Error fetching users:', error);
            }
        });

});
</script>
</body>
</html>
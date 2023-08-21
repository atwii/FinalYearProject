<!DOCTYPE html>

<html lang="en">

<head>
<meta name="csrf-token" content="{{ csrf_token() }}" />

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" type="image/png" href="assets/images/mainLogo.png"/>
    <title>Warshatok - Users Admin</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/adminPanel/images/favicon.png">
    <link href="assets/adminPanel/vendor/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <link href="assets/adminPanel/vendor/chartist/css/chartist.min.css" rel="stylesheet">
    <link href="assets/adminPanel/css/style.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


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
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="assets/adminPanel/images/logo.png" alt="">
                <img class="logo-compact" src="assets/adminPanel/images/logo-text.png" alt="">
                <img class="brand-title" src="assets/adminPanel/images/logo-text.png" alt="">
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
                    <!-- <li><a href="index.html"><i class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>
                    </li> -->
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>
                        <ul aria-expanded="false">
                            <li><a href="./admin">Dashboard 1</a></li>
                            <li><a href="./adminUsers">Users</a></li>
                            <li><a href="./tilesAdmin">Tiles</a></li>
                            <li><a href="./sanitaryAdmin">Sanitary Ware</a></li>
                            <li><a href="./servicesAdmin">Services</a></li>
                        </ul>
                    </li>

                    
                </ul>
            </div>
        </div>
        <div class="content-body">
            <div class="container-fluid">
                <div class="row">
                    <!-- <div class="col-lg-12">
                        <div class="card">
                            <button class="btn btn-primary btn-add-user">Add User</button>
                        </div>
                    </div> -->
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Users</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table student-data-table m-t-20">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>Date of Birth</th>
                                                <th>Role</th>
                                            </tr>
                                        </thead>
                                        <tbody id="users-table-body">

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


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

    <script src="assets/adminPanel/vendor/chartist/js/chartist.min.js"></script>

    <script src="assets/adminPanel/vendor/moment/moment.min.js"></script>
    <script src="assets/adminPanel/vendor/pg-calendar/js/pignose.calendar.min.js"></script>


    <script src="assets/adminPanel/js/dashboard/dashboard-2.js"></script>
    <!-- Circle progress -->

</body>

</html>

<script>
    // Run this function when the page is loaded
    $(document).ready(function () {
        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        var token = sessionStorage.getItem("accessToken");
        console.log(token);
        // AJAX GET request to fetch all users
        $.ajax({
            url: '/api/UsersAdmin', // Replace with your API endpoint URL
            type: 'GET',
            headers: {
                "Authorization": "Bearer " + token
            },
            dataType: 'json',
            success: function (data) {
                // Handle the success response here
                displayUsers(data);
            },
            error: function (error) {
                // Handle any errors that occur during the request
                
                console.error('Error fetching users:', error);
            }
        });

        // Function to display users in the specified container
        function displayUsers(users) {
            console.log(users);
            var tableBody = $('#users-table-body');
            tableBody.empty(); // Clear any previous content
            console.log(tableBody);
            var usersArray = [users];
            // Loop through the users and populate the table rows
            users.forEach(function (user) {
                var userRow = '<tr>';
                userRow += '<td>' + user.name + '</td>';
                userRow += '<td>' + user.username + '</td>';
                userRow += '<td>' + user.email + '</td>';
                userRow += '<td>' + user.birthdate + '</td>';
                userRow += '<td>' + (user.role ? user.role.name : 'N/A') + '</td>'; // Show role name if available
                userRow += '<td><button class="btn btn-primary btn-update" data-userid="' + user.id + '">Update</button></td>';
                userRow += '<td><button class="btn btn-primary btn-delete" data-userid="' + user.id + '">Delete</button></td>';
                userRow += '</tr>';

                tableBody.append(userRow);
            });
        }
    });


    $(document).on('click', '.btn-update', function () {
    var userId = $(this).data('userid');
    window.location.href = '/updateUser?id=' + userId;
});

$(document).on('click', '.btn-delete', function () {        
    var token = sessionStorage.getItem("accessToken");

    var userId = $(this).data('userid');
    var $button = $(this);
    $.ajax({
        type: 'DELETE',
            headers: {
                "Authorization": "Bearer " + token
            },
        url: '/api/UsersAdmin/' + userId,
        success: function (response) {
            $button.closest('tr').remove();
        },
        error: function (xhr, status, error) {
            console.error(error);
        }
    });
});

$(document).on('click','.btn-add-user',function() {
    window.location.href = '/addUser';
});
</script>
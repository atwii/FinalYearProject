<!DOCTYPE html>

<html lang="en">

<head>
<meta name="csrf-token" content="{{ csrf_token() }}" />

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" type="image/png" href="assets/images/mainLogo.png"/>
    <title>Warshatok - Sanitaryware Admin</title>
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
                    <!-- <li><a href="index.html"><i class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>
                    </li> -->
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>
                        <ul aria-expanded="false">
                            <li><a href="./admin">Dashboard</a></li>
                            <li><a href="./adminUsers">Users</a></li>
                            <li><a href="./tilesAdmin">Tiles</a></li>
                            <li><a href="./sanitaryAdmin">Sanitary Ware</a></li>
                            <li><a href="./servicesAdmin">Services</a></li>
                            <li><a href="./problemsAdmin">Problems</a></li>
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
                            <button class="btn btn-primary btn-add-user">Add Sanitary Ware </button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Sanitary Ware</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table student-data-table m-t-20">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Origin</th>
                                                <th>Price</th>
                                                <th>Quantity</th>
                                                <th>Size</th>
                                                <th>Picture</th>
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
        // AJAX GET request to fetch all users
        var token = sessionStorage.getItem("accessToken");
        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        $.ajax({
            url: '/api/addSanitary', // Replace with your API endpoint URL
            type: 'GET',
            headers: {
                "Authorization": "Bearer " + token
            },
            dataType: 'json',
            success: function (data) {
                // Handle the success response here
                //console.log(data);

                displayUsers(data.sanitarywares);
            },
            error: function (error) {
                // Handle any errors that occur during the request
                console.error('Error fetching users:', error);
            }
        });

        // Function to display users in the specified container
        function displayUsers(users) {
            var tableBody = $('#users-table-body');
            tableBody.empty(); 
            var usersArray = [users];
            // Loop through the users and populate the table rows
            usersArray.forEach(function (user) {
                user.forEach(function(user1){

                    var userRow = '<tr>';
                userRow += '<td>' + user1.name + '</td>';
                userRow += '<td>' + user1.origin + '</td>';
                userRow += '<td>' + user1.price_retail + '</td>';
                userRow += '<td>' + user1.quantity + '</td>';
                userRow += '<td>' + user1.size + '</td>'; 
                 //var imageUrl = '{{ asset('storage') }}/app/public/' + user1.picture;
                 var imageUrl = '{{ asset('storage') }}/' + user1.picture; // Use the correct path

                userRow += '<td><img src="' + imageUrl + '" alt="' + user.name + '" class="user-image"></td>';
                userRow += '<td><button class="btn btn-primary btn-update" data-userid="' + user1.id + '">Update</button></td>';
                userRow += '<td><button class="btn btn-primary btn-delete" data-userid="' + user1.id + '">Delete</button></td>';
                userRow += '</tr>';

                tableBody.append(userRow);
                });
            });
        }
    });


    $(document).on('click', '.btn-update', function () {
    var userId = $(this).data('userid');
    window.location.href = '/updateSanitary?id=' + userId;
});
$(document).on('click', '.btn-add-user', function () {
    window.location.href = '/addSanitary';
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
        url: '/api/addSanitary/' + userId,
        success: function (response) {
            $button.closest('tr').remove();
        },
        error: function (xhr, status, error) {
            console.error(error);
        }
    });
});

</script>
<style>
.user-image {
  width: 100px; /* Adjust the width as per your requirement */
  height: auto; /* This will maintain the image's aspect ratio */
}
</style>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Focus - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/adminPanel/images/favicon.png">
    <!-- Custom Stylesheet -->
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
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Update user</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-xxl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="basic-form">
                                    <form id="update-user-form">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Name</label>
                                            <input type="text" class="form-control" id="user-name" >
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Email</label>
                                            <input type="text" class="form-control" id="user-email" >
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Username</label>
                                            <input type="text" class="form-control" id="user-username" >
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Password</label>
                                            <input type="password" class="form-control" id="user-password" >
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Phone Number</label>
                                            <input type="number" class="form-control" id="user-number">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Date of Birth</label>
                                            <input type="date" class="form-control" id="user-DOB" >
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Role</label>
                                            <select id="inputState" class="form-control"  >
                                                <option selected="">Choose...</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Address</label>
                                            <textarea class="form-control" rows="4" id="user-address"></textarea>
                                        </div>
                                        <div class="form-group col-md-6">
                                        <button type="submit" class="btn btn-primary mb-2">Submit</button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
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
    
</body>

</html>

<script>
    // Run this function when the page is loaded
    $(document).ready(function () {
        var token = sessionStorage.getItem("accessToken");

        var queryString = window.location.search;
        var params = new URLSearchParams(queryString);
        var id = params.get('id');
        $.ajax({
            url: '/api/UsersAdmin/' + id, 
            type: 'GET',
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + token
            },
            success: function (data) {
                // Handle the success response here
                displayUsers(data);
            },
            error: function (error) {
                // Handle any errors that occur during the request
                console.error('Error fetching users:', error);
            }
        });

        function displayUsers(users) {
            console.log(users);
            var selectElement = $('#inputState');
            users.roles.forEach(function (role) {
                selectElement.append('<option value="' + role.id + '">' + role.name + '</option>');
            });

            $('#user-name').val(users.user.name);
            $('#user-email').val(users.user.email);
            $('#user-username').val(users.user.username);
            $('#user-number').val(users.user.phone_nb);

            $('#user-DOB').val(users.user.birthdate);
            $('#user-address').val(users.user.address);
            selectElement.val(users.user.role.id);
        }
    });



    const urlParams = new URLSearchParams(window.location.search);
    const userId = urlParams.get('id');


    $('#update-user-form').submit(function (event) {
        event.preventDefault();

        // Get the form data
        const formData = {
            name: $('#user-name').val(),
            email: $('#user-email').val(),
            username: $('#user-username').val(),
            password: $('#user-password').val(),
            phone_nb: $('#user-number').val(),
            birthdate: $('#user-DOB').val(),
            address: $('#user-address').val(),
            role: $('#inputState').val()
        };
        var token = sessionStorage.getItem("accessToken");

        // Make the PUT request to update the user data
        $.ajax({
            url: `/api/UsersAdmin/${userId}`,
            type: 'PUT',
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + token
            },
            data: formData,
            success: function (data) {
                     window.location.href = "/adminUsers";
                
            },
            error: function (error) {
                console.log('Error updating user data:', error);
                // Handle error response here
            }
        });
    });
</script>
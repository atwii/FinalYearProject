<!DOCTYPE html>

<html lang="en">

<head>
<meta name="csrf-token" content="{{ csrf_token() }}" />

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" type="image/png" href="assets/images/mainLogo.png"/>
    <title>Warshatok - Tiles Admin</title>
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
                                <h4 class="card-title">Problems</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table student-data-table m-t-20">
                                        <thead>
                                            <tr>
                                                <th>Order</th>
                                                <th>Service</th>
                                                <th>Client</th>
                                                <th>Description</th>
                                                <th>Status</th>
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

    <div class="modal fade" id="problemModal" tabindex="-1" role="dialog" aria-labelledby="problemModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="problemModalLabel">Problem Images</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                </div>
                <div class="modal-footer">
                    
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
        var token = sessionStorage.getItem("accessToken");
        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        // AJAX GET request to fetch all users
        $.ajax({
            url: '/api/getProblems', // Replace with your API endpoint URL
            type: 'GET',
            headers: {
                "Authorization": "Bearer " + token
            },
            dataType: 'json',
            success: function (data) {
                // Handle the success response here
                // displayUsers(data.tiles);
                console.log(data);
                displayProblems(data);
            },
            error: function (error) {
                // Handle any errors that occur during the request
                
                console.error('Error fetching users:', error);
                
            }
        });

       
        function displayProblems(problems) {
            var tableBody = $('#users-table-body');
            tableBody.empty(); 
           

                problems.forEach(function(problem1){

                    var problemRow = '<tr>';
                problemRow += '<td>' + problem1.order + '</td>';
                problemRow += '<td>' + problem1.service + '</td>';
                problemRow += '<td>' + problem1.client + '</td>';
                problemRow += '<td>' + problem1.description + '</td>';
                problemRow += '<td>' + problem1.status + '</td>'; 
                 //var imageUrl = '{{ asset('storage') }}/app/public/' + user1.picture;
                //  console.log('user1.picture:', user1.picture);
                //  var imageUrl = '{{ asset('storage') }}' + user1.picture; // Use the correct path
                //  console.log('imageUrl:', imageUrl);
                // var imageUrl = '{{ asset('storage') }}' +'/'+ user1.picture; // Use the correct path

                // userRow += '<td><img src="' + imageUrl + '" alt="' + user.name + '" class="user-image"></td>';
                if(problem1.picture=="available"){
                    problemRow += '<td><a href="#" data-toggle="modal" data-target="#problemModal" data-problem-id="' + problem1.id + '">' + problem1.picture + '</a></td>';
 
                }
                else{
                    problemRow += '<td>' + problem1.picture + '</td>';
                }
                problemRow += '<td><button class="btn btn-primary btn-delete" data-problemid="' + problem1.id + '">Delete</button></td>';
                problemRow += '</tr>';

                tableBody.append(problemRow);



                });
           
        }


        

        //Problem Images

        $('#problemModal').on('show.bs.modal', function(event) {
        var modal = $(this);
        var problemId = $(event.relatedTarget).data('problem-id'); // Get the problem ID from the clicked link's data attribute


        var token = sessionStorage.getItem("accessToken");

        // Make an API call to fetch images based on the problem ID
        $.ajax({
            url: 'api/getProblemImages/'+problemId, // Replace with your API endpoint
            method: 'GET',
            headers: {
                "Authorization": "Bearer " + token
            },
            success: function(data) {
                // Assuming your API returns an array of image URLs, you can iterate through them and append them to the modal's body
                var modalBody = modal.find('.modal-body');
                modalBody.empty(); // Clear any previous content

                data.forEach(function(imageUrl) {
                    // Create an image element and append it to the modal's body
                    var path=imageUrl.path;
                    var img = $('<img style="width:100%;">').attr('src', "problem_attachments/"+path);
                    modalBody.append(img);
                });
            },
            error: function(xhr, status, error) {
                // Handle errors here
                console.error('Error:', status, error);
            }
        });
    });


    });


   

$(document).on('click', '.btn-delete', function () {
    var userId = $(this).data('userid');
    var $button = $(this);
    var token = sessionStorage.getItem("accessToken");

    $.ajax({
        type: 'DELETE',
            headers: {
                "Authorization": "Bearer " + token
            },
        url: '/api/addTile/' + userId,
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
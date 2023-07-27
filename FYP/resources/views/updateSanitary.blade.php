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
                            <h4>Update Tile</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-xxl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="basic-form">
                                    <form id="update-user-form">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Name</label>
                                            <input type="text" class="form-control" id="user-name" >
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Origin</label>
                                            <input type="text" class="form-control" id="user-origin" >
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Retail Price</label>
                                            <input type="number" class="form-control" id="user-retail-price" >
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Quantity</label>
                                            <input type="number" class="form-control" id="user-quantity">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Size</label>
                                            <input type="text" class="form-control" id="user-size" >
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Description</label>
                                            <textarea class="form-control" rows="4" id="user-description"></textarea>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Picture</label>
                                            <div class="picArea" id="picArea">
                                            <img src="#" id="user-image" alt="Selected Image" class="user-image">
                                            </div>
                                            <input type="file" id="user-file">
                                        </div>
                                        <div class="form-group col-md-6"></div>
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
        var queryString = window.location.search;
        var params = new URLSearchParams(queryString);
        var id = params.get('id');
        $.ajax({
            url: '/api/addSanitary/' + id, 
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                // Handle the success response here
                displayUsers(data);
                //console.log(data);
            },
            error: function (error) {
                // Handle any errors that occur during the request
                console.error('Error fetching users:', error);
            }
        });

        function displayUsers(users) {
            console.log(users);

            $('#user-name').val(users.sanitarywares.name);
            $('#user-origin').val(users.sanitarywares.origin);
            $('#user-retail-price').val(users.sanitarywares.price_retail);
            $('#user-quantity').val(users.sanitarywares.quantity);
            $('#user-size').val(users.sanitarywares.size);
            $('#user-description').val(users.sanitarywares.description);
            var imageUrl = '{{ asset('storage') }}/' + users.sanitarywares.picture;
            
            $('#user-image').attr("src",imageUrl)
            
        }
    });



    const urlParams = new URLSearchParams(window.location.search);
    const userId = urlParams.get('id');


    $('#update-user-form').submit(function (event) {
        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        event.preventDefault();
        // Get the form data
        const formData = new FormData();

  // Append form fields to formData
  formData.append('name', $('#user-name').val());
  formData.append('origin', $('#user-origin').val());
  formData.append('price_retail', $('#user-retail-price').val());
  formData.append('quantity', $('#user-quantity').val());
  formData.append('size', $('#user-size').val());
  formData.append('description', $('#user-description').val());
  formData.append('methodzzz', 'PUT');
  formData.append('id',urlParams.get('id'))

  // Get the selected file from the file input element
  const selectedFile = $('#user-file')[0].files[0];

  // Check if a file is selected before appending it to formData
  if (selectedFile) {
    formData.append('picture', selectedFile, selectedFile.name);
  }
  var token = sessionStorage.getItem("accessToken");

        $.ajax({
            url: `/api/addSanitary`,
            type: 'POST',
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + token
            },
            data: formData,
                contentType: false,
                processData: false,
            success: function (data) {
                     window.location.href = "/sanitaryAdmin";
            },
            error: function (error) {
                console.log('Error updating user data:', error);
                // Handle error response here
            }
        });
    });

    var fileInput = document.getElementById('user-file');
var imageTag = document.getElementById('user-image');

fileInput.addEventListener('change', function(event) {
  var selectedFile = event.target.files[0];

  if (selectedFile) {
    var reader = new FileReader();
    reader.onload = function() {
      imageTag.src = reader.result;
      imageTag.style.display = 'block';
    };

    reader.readAsDataURL(selectedFile);
  } else {
    imageTag.style.display = 'none';
  }
});



</script>
<style>
.picArea {
  width: 100px; /* Adjust the width as per your requirement */
  height: auto; /* This will maintain the image's aspect ratio */
}
.user-image {
  width: 200px; /* Adjust the width as per your requirement */
  height: auto; /* This will maintain the image's aspect ratio */
}
</style>
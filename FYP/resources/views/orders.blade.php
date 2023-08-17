<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Focus - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <!-- Datatable -->
    <link href="assets/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="assets/css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.6/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.11.6/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

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
                <img class="logo-abbr" src="./images/logo.png" alt="">
                <img class="logo-compact" src="./images/logo-text.png" alt="">
                <img class="brand-title" src="./images/logo-text.png" alt="">
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
                            <li><a href="./index.html">Dashboard 1</a></li>
                            <li><a href="./index2.html">Dashboard 2</a></li></ul>
                    </li>
                    
                    <li class="nav-label">Apps</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-app-store"></i><span class="nav-text">Apps</span></a>
                        <ul aria-expanded="false">
                            <li><a href="./app-profile.html">Profile</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Email</a>
                                <ul aria-expanded="false">
                                    <li><a href="./email-compose.html">Compose</a></li>
                                    <li><a href="./email-inbox.html">Inbox</a></li>
                                    <li><a href="./email-read.html">Read</a></li>
                                </ul>
                            </li>
                            <li><a href="./app-calender.html">Calendar</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-chart-bar-33"></i><span class="nav-text">Charts</span></a>
                        <ul aria-expanded="false">
                            <li><a href="./chart-flot.html">Flot</a></li>
                            <li><a href="./chart-morris.html">Morris</a></li>
                            <li><a href="./chart-chartjs.html">Chartjs</a></li>
                            <li><a href="./chart-chartist.html">Chartist</a></li>
                            <li><a href="./chart-sparkline.html">Sparkline</a></li>
                            <li><a href="./chart-peity.html">Peity</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Components</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-world-2"></i><span class="nav-text">Bootstrap</span></a>
                        <ul aria-expanded="false">
                            <li><a href="./ui-accordion.html">Accordion</a></li>
                            <li><a href="./ui-alert.html">Alert</a></li>
                            <li><a href="./ui-badge.html">Badge</a></li>
                            <li><a href="./ui-button.html">Button</a></li>
                            <li><a href="./ui-modal.html">Modal</a></li>
                            <li><a href="./ui-button-group.html">Button Group</a></li>
                            <li><a href="./ui-list-group.html">List Group</a></li>
                            <li><a href="./ui-media-object.html">Media Object</a></li>
                            <li><a href="./ui-card.html">Cards</a></li>
                            <li><a href="./ui-carousel.html">Carousel</a></li>
                            <li><a href="./ui-dropdown.html">Dropdown</a></li>
                            <li><a href="./ui-popover.html">Popover</a></li>
                            <li><a href="./ui-progressbar.html">Progressbar</a></li>
                            <li><a href="./ui-tab.html">Tab</a></li>
                            <li><a href="./ui-typography.html">Typography</a></li>
                            <li><a href="./ui-pagination.html">Pagination</a></li>
                            <li><a href="./ui-grid.html">Grid</a></li>

                        </ul>
                    </li>

                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-plug"></i><span class="nav-text">Plugins</span></a>
                        <ul aria-expanded="false">
                            <li><a href="./uc-select2.html">Select 2</a></li>
                            <li><a href="./uc-nestable.html">Nestedable</a></li>
                            <li><a href="./uc-noui-slider.html">Noui Slider</a></li>
                            <li><a href="./uc-sweetalert.html">Sweet Alert</a></li>
                            <li><a href="./uc-toastr.html">Toastr</a></li>
                            <li><a href="./map-jqvmap.html">Jqv Map</a></li>
                        </ul>
                    </li>
                    <li><a href="widget-basic.html" aria-expanded="false"><i class="icon icon-globe-2"></i><span
                                class="nav-text">Widget</span></a></li>
                    <li class="nav-label">Forms</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-form"></i><span class="nav-text">Forms</span></a>
                        <ul aria-expanded="false">
                            <li><a href="./form-element.html">Form Elements</a></li>
                            <li><a href="./form-wizard.html">Wizard</a></li>
                            <li><a href="./form-editor-summernote.html">Summernote</a></li>
                            <li><a href="form-pickers.html">Pickers</a></li>
                            <li><a href="form-validation-jquery.html">Jquery Validate</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Table</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-layout-25"></i><span class="nav-text">Table</span></a>
                        <ul aria-expanded="false">
                            <li><a href="table-bootstrap-basic.html">Bootstrap</a></li>
                            <li><a href="table-datatable-basic.html">Datatable</a></li>
                        </ul>
                    </li>

                    <li class="nav-label">Extra</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-single-copy-06"></i><span class="nav-text">Pages</span></a>
                        <ul aria-expanded="false">
                            <li><a href="./page-register.html">Register</a></li>
                            <li><a href="./page-login.html">Login</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
                                <ul aria-expanded="false">
                                    <li><a href="./page-error-400.html">Error 400</a></li>
                                    <li><a href="./page-error-403.html">Error 403</a></li>
                                    <li><a href="./page-error-404.html">Error 404</a></li>
                                    <li><a href="./page-error-500.html">Error 500</a></li>
                                    <li><a href="./page-error-503.html">Error 503</a></li>
                                </ul>
                            </li>
                            <li><a href="./page-lock-screen.html">Lock Screen</a></li>
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
            <div class="container-fluid">
                
                <!-- row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Orders</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    
                                    <table id="orders-table" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>Number</th>
                                                <th>Status</th>
                                                <th>Type</th>
                                                <th>Time</th>
                                                <th>Progress</th>
                                                <th>Total Price</th> 
                                                <th>Receival Time</th>  
                                            </tr>
                                        </thead>
                                        <tbody  id="orders-table-body">
                                            {{-- <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td><span class="badge badge-success">Paid</span></td>
                                                <td><span class="badge badge-warning">Paid</span></td>
                                                <td><span class="badge badge-danger">Paid</span></td>
                                                <td><span class="badge badge-dark">Paid</span></td>
                                                <td><span class="badge badge-primary">Paid</span></td>
                                                <td>
                                                    <div class="progress" style="background: rgba(76, 175, 80, .1)">
                                                        <div class="progress-bar bg-success" style="width: 70%;" role="progressbar"><span class="sr-only">70% Complete</span>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td>$320,800</td>
                                            </tr> --}}
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Number</th>
                                                <th>Status</th>
                                                <th>Type</th>
                                                <th>Time</th>
                                                <th>Progress</th>
                                                <th>Total Price</th>
                                                <th>Receival Time</th>  
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <div id="pagination-container">
                                        <!-- Pagination controls will be inserted here -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="modal fade" id="orderModal" tabindex="-1" role="dialog" aria-labelledby="orderModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="orderModalLabel">Order Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="order-details">
                            <h6>Order Items:</h6>
                            <ul id="orderDetails" class="list-group">
                                <!-- The order items will be dynamically added here using JavaScript -->
                            </ul>
                            
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" onclick="openProblemModal()" class="btn btn-danger" data-dismiss="modal">Report</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="problemReportModal" tabindex="-1" role="dialog" aria-labelledby="problemReportModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                  <h5 class="modal-title" id="problemReportModalLabel">
                    <i class="fas fa-exclamation-triangle"></i> Report a Problem
                  </h5>
                  <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <input id="orderProblemId" hidden>
                      <label for="problemDescription"><i class="fas fa-pencil-alt"></i> Problem Description</label>
                      <textarea class="form-control" id="problemDescription" rows="4" required></textarea>
                    </div>
                    <div class="form-group">
                      <label for="problemAttachment"><i class="fas fa-image"></i> Attach Picture</label>
                      <input type="file" class="form-control-file" id="problemAttachment" multiple>
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i> Close</button>
                  <button type="button" class="btn btn-danger"  id="submitProblem"><i class="fas fa-paper-plane"></i> Submit</button>
                </div>
              </div>
            </div>
          </div>



        <div class="modal fade" id="timeModal" tabindex="-1" role="dialog" aria-labelledby="orderModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="orderModalLabel">Change Receival Time</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="changeTimeForm">
                            <div class="form-group">
                                <label for="newReceivalTime">New Receival Time</label>
                                <input type="datetime-local" class="form-control" id="newReceivalTime" name="newReceivalTime">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary" id="saveTimeBtn">Save Changes</button>
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
                <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Quixkit</a> 2019</p>
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
</body>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="assets/vendor/global/global.min.js"></script>
    <script src="assets/js/quixnav-init.js"></script>
    <script src="assets/js/custom.min.js"></script>
    


    <!-- Datatable -->
    <script src="assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/plugins-init/datatables.init.js"></script>
    

    <script>

$(document).ready(function () {


  



$.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            const submitButton = document.getElementById("submitProblem");

submitButton.addEventListener("click", function() {
  const problemDescription = document.getElementById("problemDescription").value;
  const orderProblemId = document.getElementById("orderProblemId").value;
  const problemAttachments = document.getElementById("problemAttachment").files;

  const formData = new FormData();
  formData.append("problemDescription", problemDescription);
  formData.append("orderProblemId", orderProblemId);

  for (let i = 0; i < problemAttachments.length; i++) {
    formData.append("problemAttachments[]", problemAttachments[i]);
  }


  var token = sessionStorage.getItem("accessToken");
  console.log(token);
  
  $.ajax({
            url: '/api/report-problem', // Replace with your API endpoint URL
            type: 'POST',
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + token
            },
            data: formData,
                contentType: false,
                processData: false,
            success: function (data) {
                // Handle the success response here
                console.log(data);

                $("#problemReportModal").modal('hide');


                $("#successMessage").show();

                
            },
            error: function (error) {
                // Handle any errors that occur during the request
                
                console.error('Error fetching users:', error);
            }
        });
        
});



            // Add a click event listener to the link
$('body').on('click', '[data-toggle="modal"][data-target="#timeModal"]', function(event) {
    event.preventDefault();
    var orderId = $(this).data('order-id');
    
    // Set the data-order-id attribute for the "Save Changes" button
    $('#saveTimeBtn').data('order-id', orderId);

    // Open the modal
    $('#timeModal').modal('show');
});

// Add a click event listener to the "Save Changes" button in the modal
$('#saveTimeBtn').on('click', function() {
    var newReceivalTime = $('#newReceivalTime').val();
    var orderId = $(this).data('order-id');

    // Use AJAX to update the receival time based on orderId and newReceivalTime
    // Replace this with your actual AJAX request
    $.ajax({
        url: '/api/updateReceivalTime/' + orderId, // Replace with your API endpoint URL
        type: 'PUT',
        headers: {
                "Authorization": "Bearer " + token
            },
            dataType: 'json',
        data: {
            newReceivalTime: newReceivalTime
        },
        headers: {
            "Authorization": "Bearer " + token
        },
        success: function(response) {
            // Handle success response, if needed
            console.log(response);
            // Close the modal after successful update
            $('#timeModal').modal('hide');

            // Refresh the page to reflect the updated data
            location.reload();
        },
        error: function(error) {
            // Handle error, if needed
            console.error('Error updating receival time:', error);
        }
    });
});






        var token = sessionStorage.getItem("accessToken");
        console.log(token);
        // AJAX GET request to fetch all users
        $.ajax({
            url: '/api/getOrders', // Replace with your API endpoint URL
            type: 'GET',
            headers: {
                "Authorization": "Bearer " + token
            },
            dataType: 'json',
            success: function (data) {
                // Handle the success response here
                console.log(data);
                displayOrders(data);
                
                 // Initialize DataTables with pagination after loading the data
                $('#orders-table').DataTable({
                    "paging": true,
                    "pageLength": 10,
                    "lengthMenu": [5, 10, 20, 50],
                    // ... Other options ...
                });

            },
            error: function (error) {
                // Handle any errors that occur during the request
                
                console.error('Error fetching users:', error);
            }
        });


        $('#orderModal').on('shown.bs.modal', function (event) {
        var button = $(event.relatedTarget); // Button that triggered the modal
        var orderId = button.data('order-id'); // Extract the order ID from data attribute

        $("#orderProblemId").val(orderId);

        // Use AJAX to fetch order details based on orderId
        // Replace this with your actual AJAX request
        $.ajax({
            url: '/api/getOrderDetails/' + orderId, // Replace with your API endpoint URL
            type: 'GET',
            headers: {
                "Authorization": "Bearer " + token
            },
            dataType: 'json',
            success: function (orderDetails) {
                console.log(orderDetails);
                // Populate the modal body with order details
                $('#orderDetails').empty(); // Clear previous content

                // Create an unordered list for order items
                var itemList = $('<ul>').addClass('list-group');
                   // Create the header row with column names
                var headerRow = $('<div>').addClass('row item-header text-muted');
                var nameHeader = $('<div>').addClass('col-md-3').text('Name');
                var typeHeader = $('<div>').addClass('col-md-3').text('Type');
                var quantityHeader = $('<div>').addClass('col-md-3').text('Quantity');
                var priceHeader = $('<div>').addClass('col-md-3').text('Price');
                headerRow.append(nameHeader,typeHeader, quantityHeader, priceHeader);
                itemList.append(headerRow);

                // Loop through order items and create rows for each
                $.each(orderDetails.items, function (index, item) {
                    var listItem = $('<li>').addClass('list-group-item text-muted');
                    var row = $('<div>').addClass('row item-details');

                    var nameColumn = $('<div>').addClass('col-md-3').text(item.name);
                    var typeColumn = $('<div>').addClass('col-md-3').text(item.type);
                    var quantityColumn = $('<div>').addClass('col-md-3').text(item.quantity);
                    var priceColumn = $('<div>').addClass('col-md-3').text('$' + item.price);

                    row.append(nameColumn, typeColumn, quantityColumn, priceColumn);
                    listItem.append(row);
                    itemList.append(listItem);
                });


                // Append the list of order items to the modal body
                $('#orderDetails').append(itemList);

                
                
            },
            error: function (error) {
                console.error('Error fetching order details:', error);
            }
        });
    });


       

    });


    function openProblemModal(){

$('#problemReportModal').modal('show');




}


    function displayOrders(data) {
            console.log(data);
            var tableBody = $('#orders-table-body');
            tableBody.empty(); // Clear any previous content
            console.log(tableBody);
            var bidsArray = [data.orders];
            // Loop through the users and populate the table rows
            data.forEach(function (order) {
                var bidRow = '<tr>';
                bidRow += '<td><a href="#" data-toggle="modal" data-target="#orderModal" data-order-id="' + order.id + '">' + order.number + '</a></td>';
                if(order.status==1){
                    bidRow += '<td><span class="badge badge-warning"> Preparing </span></td>';
                }else if(order.status==2){
                    bidRow += '<td><span class="badge badge-primary"> Ready for Pickup </span></td>';

                }else if(order.status==3){
                    bidRow += '<td><span class="badge badge-info"> On the Way </span></td>';

                }else if(order.status==4){
                    bidRow += '<td><span class="badge badge-success"> Completed </span></td>';

                }
                bidRow += '<td><span class="text-muted">' + order.type + '</span></td>';
                bidRow += '<td><span class="text-muted">' + order.time + '</span></td>';
                if(order.status==1){

                    
                    bidRow += '<td>';
                    bidRow += '<div class="progress" style="background: rgba(70, 74, 83, .1)">';
                    bidRow += '<div class="progress-bar bg-warning" style="width: 25%;" role="progressbar"><span class="sr-only">' + order.progress + '% Complete</span>';
                    bidRow += '</div>';
                    bidRow += '</div>';
                    bidRow += '</td>';

                }else if(order.status==2){
                    
                    bidRow += '<td>';
                    bidRow += '<div class="progress" style="background: rgba(70, 74, 83, .1)">';
                    bidRow += '<div class="progress-bar bg-primary" style="width: 50%;" role="progressbar"><span class="sr-only">' + order.progress + '% Complete</span>';
                    bidRow += '</div>';
                    bidRow += '</div>';
                    bidRow += '</td>';

                }else if(order.status==3){
                    
                    bidRow += '<td>';
                    bidRow += '<div class="progress" style="background: rgba(70, 74, 83, .1)">';
                    bidRow += '<div class="progress-bar bg-info" style="width: 75%;" role="progressbar"><span class="sr-only">' + order.progress + '% Complete</span>';
                    bidRow += '</div>';
                    bidRow += '</div>';
                    bidRow += '</td>';

                }else if(order.status==4){
                    
                    bidRow += '<td>';
                    bidRow += '<div class="progress" style="background: rgba(70, 74, 83, .1)">';
                    bidRow += '<div class="progress-bar bg-success" style="width: 1000%;" role="progressbar"><span class="sr-only">' + order.progress + '% Complete</span>';
                    bidRow += '</div>';
                    bidRow += '</div>';
                    bidRow += '</td>';

                }
                bidRow += '<td><span style="padding-left:10%" class="text-muted"> ' + order.total_price + '</span></td>';
                bidRow += '<td><a href="#" data-toggle="modal" data-target="#timeModal" data-order-id="' + order.id + '">' + order.receival_time + '</a></td>';
                // bidRow += '<td><button class="btn btn-primary btn-update" data-bidid="' + bid.id + '">Update</button></td>';
                // if(data.userRole==3 || data.userRole==5){// ballat aw sangare
                // bidRow += '<td><button class="btn btn-primary btn-delete" data-bidid="' + bid.id + '">Delete</button></td>';}
                // if(data.userRole==1 || data.userRole==4){//retail aw wholesale
                // bidRow += '<td><button class="btn btn-primary btn-reveal" data-proid="' + bid.provider + '">Reveal</button></td>';
                // }
                bidRow += '</tr>';

                tableBody.append(bidRow);


                
            });
        }


        
        


    </script>

</html>
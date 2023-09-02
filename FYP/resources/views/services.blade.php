<!DOCTYPE html>
<html lang="en">

  <head>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <meta name="csrf-token" content="{{ csrf_token() }}">

<style>




/* Reset some default button styles */
button {
    border: none;
    padding: 0;
    background: none;
    cursor: pointer;
    outline: none;
}

/* Styling for the rounded button */
.rounded-button {
    border-radius: 20px; /* Adjust the value to change the roundness */
    padding: 12px 20px; /* Adjust the values to change the button size */
    background-color: #3498db; /* Set the background color */
    color: #fff; /* Set the text color */
    font-size: 16px; /* Set the font size */
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2); /* Add a subtle shadow */
    transition: background-color 0.2s ease; /* Add a smooth transition on hover */
}

/* Hover effect */
.rounded-button:hover {
    background-color: #2980b9; /* Change the background color on hover */
}






.modal {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
  display: flex;
  justify-content: center;
  align-items: center;
}

.modal-content {
  background-color: #fff;
  padding: 30px;
  max-width: 400px;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

h2 {
  margin-top: 0;
  margin-bottom: 30px;
  text-align: center;
  color: #333;
}

.form-group {
  margin-bottom: 20px;
}

label {
  display: block;
  margin-bottom: 8px;
  font-weight: bold;
  color: #555;
}

input[type="text"],
textarea,
input[type="file"] {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  color: #333;
  background-color: #f9f9f9;
}

textarea {
  resize: vertical;
}

.file-input {
  display: none;
}

.file-label {
  display: block;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  background-color: #f9f9f9;
  color: #333;
  cursor: pointer;
  text-align: center;
  transition: background-color 0.2s;
}

.file-label:hover {
  background-color: #f0f0f0;
}

.file-name {
  margin-left: 10px;
}

.form-buttons {
  display: flex;
  justify-content: space-between;
  margin-top: 30px;
}





.wrap {
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
}

.button {
  min-width: 300px;
  min-height: 60px;
  font-family: 'Nunito', sans-serif;
  font-size: 22px;
  text-transform: uppercase;
  letter-spacing: 1.3px;
  font-weight: 700;
  color: #313133;
  background: #4FD1C5;
background: linear-gradient(90deg, rgba(129,230,217,1) 0%, rgba(79,209,197,1) 100%);
  border: none;
  border-radius: 1000px;
  box-shadow: 12px 12px 24px rgba(79,209,197,.64);
  transition: all 0.3s ease-in-out 0s;
  cursor: pointer;
  outline: none;
  position: relative;
  padding: 10px;
  }

.button::before {
  content: '';
  border-radius: 1000px;
  min-width: calc(300px + 12px);
  min-height: calc(60px + 12px);
  border: 6px solid #00FFCB;
  box-shadow: 0 0 60px rgba(0,255,203,.64);
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  opacity: 0;
  transition: all .3s ease-in-out 0s;
}

.button:hover, .button:focus {
  color: #313133;
  transform: translateY(-6px);
}

.button:hover::before, button:focus::before {
  opacity: 1;
}

.button::after {
  content: '';
  width: 30px; height: 30px;
  border-radius: 100%;
  border: 6px solid #00FFCB;
  position: absolute;
  z-index: -1;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  animation: ring 1.5s infinite;
}

.button:hover::after, button:focus::after {
  animation: none;
  display: none;
}

@keyframes ring {
  0% {
    width: 30px;
    height: 30px;
    opacity: 1;
  }
  100% {
    width: 300px;
    height: 300px;
    opacity: 0;
  }
}



</style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">


    <link rel="icon" type="image/png" href="assets/images/mainLogo.png"/>
    <title>Warshatok - Services</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-hexashop.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">
<!--

TemplateMo 571 Hexashop

https://templatemo.com/tm-571-hexashop

-->
    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <img src="assets/images/MainLogo.png" style="width:120px;height:120px;padding-bottom:10px;">

                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                          <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                          <li class="scroll-to-section"><a href="/tiles">Tiles</a></li>
                          <li class="scroll-to-section"><a href="/sanitaryWare">Sanitary Ware</a></li>
                          <li class="scroll-to-section"><a href="/listServices">Services</a></li>
                          <li class="submenu">
                              <a href="javascript:;">Pages</a>
                              <ul>
                                <li><a href="/about">About Us</a></li>
                                  <li><a href="/calculator">Calculator</a></li>
                                  <li><a href="favorites">Favorites</a></li>
                                  <li><a href="/profile">Profile</a></li>
                              </ul>
                          </li>
                          <li class="submenu">
                              <a href="javascript:;">Features</a>
                              <ul>
                                  <li><a href="/tileYourFloor">Tile Your Floor</a></li>
                                  <li><a href="/tileFinder">Tile Finder</a></li>
                              </ul>
                          </li>
                          <li class="scroll-to-section"><a href="/orders">Orders</a></li>
                      </ul>        
                      <a class='menu-trigger'>
                          <span>Menu</span>
                      </a>
                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
  </header>

    <!-- ***** Header Area End ***** -->

    
    <div class="wrap" style="margin-top:15%;">
        <button class="button" onclick='location.href = "{{URL::to('/newService')}}"' >New</button>
      </div>
    

<div class="container" style="padding-top:3%">
    
  <div id="successMessage" style="display: none;" class="alert alert-success mt-3">Problem reported successfully!</div>


      
    @foreach ($services as $service )
        
   
    

        <div class="card" style="margin-bottom: 5%">
            <h5 class="card-header"> {{$service->type}} <span class="badge badge-info">{{$service->status}}</span></h5>
            <div class="card-body">

              <h5 class="card-title">{{$service->description}}</h5>
              <p class="card-text">{{$service->address}}</p>

              <p class="seeker-value" hidden>{{$service->seeker}}</p>
              <p class="service-type" hidden>{{$service->type}}</p>

              @foreach ($service->images as $image)
              <a href="files/{{ $image->path}}"  class="image-popup-vertical-fit " target="_blank">
              <img src="files/{{ $image->path }}" alt="{{ $image->caption }}" width="200" height="150">
              </a>
              @endforeach

              <div class="card-body">
                <div class="table-responsive">
                  <table class="table student-data-table m-t-20">
                      <thead>
                          <tr>
                              {{-- <th>Bid</th>
                              <th>Status</th> --}}
                              <!-- Add more table headers if needed -->
                          </tr>
                      </thead>
                      <tbody id="bids-table-body-{{$service->id}}"> <!-- Use a unique ID -->
                          <!-- Table rows will be added here -->
                      </tbody>
                  </table>
              </div>
              
            </div>

            <button class="rounded-button my-rounded-button" data-my-variable="{{$service->id}}"><i class="fa fa-money"></i></button>

              <div class="dropdown">
                <button style="float:right" class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Action
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" onclick="openUpdateModal('{{$service->id}}','{{$service->type}}','{{$service->description}}','{{$service->address}}')">Update</a>
                  <a class="dropdown-item" onclick="openDeleteModal('{{$service->id}}')" >Delete</a>
                  <a class="dropdown-item" onclick="openBidModal('{{$service->id}}')">Bid</a>
                  <a class="dropdown-item" onclick="openProblemModal('{{$service->id}}')">Report</a>
                </div>
              </div>
            </div>
          </div>

          @endforeach
        </div>


        <!-- Modal -->
<div class="modal fade" id="updateModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Update Service</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


        <form action="{{ route("updateService") }}" method="POST" enctype="multipart/form-data">

          @csrf

          <div class="form-group">

            <input id="service-id" name="serviceId" type="hidden" value="">

            <label for="readonly-input">Type</label>
            <input type="text" id="readonly-input" value="Readonly Value" readonly>
          </div>
          <div class="form-group">
            <label for="description-input">Description</label>
            <input type="text" name="description1" id="description-input" placeholder="Enter description" required>
          </div>
          <div class="form-group">
            <label for="textarea-input">More Details</label>
            <textarea id="textarea-input" name="description2" placeholder="Enter text"></textarea>
          </div>
          <div class="form-group">
            <label for="address-input">Address</label>
            <input type="text" id="address-input" name="address" placeholder="Enter address" required>
          </div>
          <div class="form-group">
            <label for="file-input">Choose File</label>
            <input name="filenames[]" type="file" id="file-input">
          </div>
          
        


      </div>


      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>

    </div>
  </div>
</div>




      <!-- Modal -->
      <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Are you sure you want to delete this service?
            </div>

            <form action="{{ route("deleteService") }}" method="POST" enctype="multipart/form-data">

              @csrf
              <input id="service_todelete-id" name="serviceId" type="hidden" value="">

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            </div>
          </div>
        </div>
      </div>


              <!-- Modal -->
<div class="modal fade" id="bidModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle" style="text-align: center;width: 100%;">New Bid</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


        <form action="{{ route("bidService") }}" method="POST" enctype="multipart/form-data">

          @csrf

          <div class="form-group">

            <input id="service_tobid-id" name="serviceId" type="hidden" value="">

            <input id="bidder" name="bidder" type="hidden" value="">

            
            <input type="text" id="bid-input" name="bidPrice" value="">
          </div>

      </div>


      <div class="modal-footer">
        
        <button style="width:100%;" type="submit" class="btn btn-primary">Bid</button>
      </div>
    </form>

    </div>
  </div>
</div>



<div class="modal fade" id="userInfoModal" tabindex="-1" role="dialog" aria-labelledby="userInfoModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="userInfoModalLabel">User Information</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <div class="user-profile">
                  <img src="" alt="User Profile Picture" class="img-fluid rounded-circle">
                  <h2 id="username"></h2>
              </div>
              <div class="user-info">
                  {{-- <p><strong>Username:</strong> username</p> --}}
                  <p><strong>Email:</strong></p><p id="email"> </p>
                  {{-- <p><strong>Location:</strong> location</p> --}}
                  <p><strong>Phone Number:</strong></p><p id="phoneNb"> </p>
                  <p><strong>Bio:</strong></p><p id="bio"> </p>
              </div>
          </div>
          <div class="modal-footer">
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
            <input id="serviceProblemId" hidden>
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




        
    <!-- ***** Footer Start ***** -->
    <footer>
      <div class="container">
          <div class="row">
              <div class="col-lg-3">
                  <div class="first-item">
                      <div class="logo">
                          <img src="assets/images/MainLogo.png"  style="width:120px;height:120px;padding-bottom:10px;" alt="warshatok">
                      </div>
                      <ul>
                          <li><a href="#">Hadat–Baabda, Beirut, Lebanon </a></li>
                          
                      </ul>
                  </div>
              </div>
              <div class="col-lg-3">
                  <h4>Categories</h4>
                  <ul>
                      <li><a href="/tiles">Tiles</a></li>
                      <li><a href="/sanitaryWare">Sanitaryware</a></li>
                      <li><a href="/listServices">Services</a></li>
                  </ul>
              </div>
              <div class="col-lg-3">
                  <h4>Useful Links</h4>
                  <ul>
                      <li><a href="about.html">About Us</a></li>
                      <li><a href="/calculator">Calculator</a></li>
                      <li><a href="favorites">Favorites</a></li>
                      <li><a href="/profile">Profile</a></li>
                  </ul>
              </div>
              <div class="col-lg-3">
                  <h4>Features</h4>
                  <ul>
                      <li><a href="/tileYourFloor">Tile Your Floor</a></li>
                      <li><a href="/tileFinder">Tile Finder</a></li>
                      <li class="scroll-to-section"><a href="/orders">Orders</a></li>
                  </ul>
              </div>
              <div class="col-lg-12">
                  <div class="under-footer">
                      <p>Copyright © 2023, All Rights Reserved. 
                      
                      <br>Design: <a href="#" target="_parent" title="free css templates">TemplateMo</a></p>
                      
                  </div>
              </div>
          </div>
      </div>
  </footer>
  
    

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });


        function openProblemModal(id){

$('#problemReportModal').modal('show');

console.log(id);

$("#serviceProblemId").val(id);


}


        function openUpdateModal(id,type,description,address){

          $('#updateModalCenter').modal('show');


          document.getElementById("service-id").value=id;
          document.getElementById("readonly-input").value=type;
          document.getElementById("address-input").value=address;


          const desc = description.split(":");
          document.getElementById("description-input").value=desc[0];

          if (!desc[1].length) {
          document.getElementById("textarea-input").value=desc[1];
          }else{
            document.getElementById("textarea-input").value;
          }

         


          
        }

        function openDeleteModal(id){

            $('#deleteModal').modal('show');


            console.log(id);
            document.getElementById("service_todelete-id").value=id;
           

        }

        function openBidModal(id){

            $('#bidModal').modal('show');


            console.log(id);
            document.getElementById("service_tobid-id").value=id;


        }




         // Run this function when the page is loaded
    $(document).ready(function () {


      


        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });




            const submitButton = document.getElementById("submitProblem");

submitButton.addEventListener("click", function() {
  const problemDescription = document.getElementById("problemDescription").value;
  const serviceProblemId = document.getElementById("serviceProblemId").value;
  const problemAttachments = document.getElementById("problemAttachment").files;

  const formData = new FormData();
  formData.append("problemDescription", problemDescription);
  formData.append("serviceProblemId", serviceProblemId);

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




        var token = sessionStorage.getItem("accessToken");
        console.log(token);
        // AJAX GET request to fetch all users
        $.ajax({
            url: '/api/getUser', // Replace with your API endpoint URL
            type: 'GET',
            headers: {
                "Authorization": "Bearer " + token
            },
            dataType: 'json',
            success: function (data) {
                // Handle the success response here
                console.log(data);
                accessLevel(data);
                
            },
            error: function (error) {
                // Handle any errors that occur during the request
                
                console.error('Error fetching users:', error);
            }
        });




        

        // Function to display users in the specified container
        function accessLevel(user) {
            
          if (user.role === 1 || user.role===4) {
            // // Remove the 'Update' item
            // $(".dropdown-item:contains('Update')").remove();
            // Remove the 'Bid' item
            $(".dropdown-item:contains('Bid')").remove();

            // Loop through each service card and hide those where $service->Seeker is not equal to 1
      $('.card').each(function() {
                    const seekerValue = parseInt($(this).find('.seeker-value').text());
                    console.log(seekerValue);
                    if (seekerValue !== user.id) {
                        $(this).hide();
                    }
                });
           

          } else if (user.role === 2) {
            // // Remove the 'Bid' item
            // $(".dropdown-item:contains('Bid')").remove();
          } else if (user.role === 3 || user.role===5) {
            // // Remove the 'Bid' item and the 'Update' item
            // $(".dropdown-item:contains('Bid'), .dropdown-item:contains('Update')").remove();
            // Remove the 'Update' and 'Delete' item
            $(".dropdown-item:contains('Update'), .dropdown-item:contains('Delete'), .dropdown-item:contains('Report')").remove();
            document.getElementById("bidder").value=user.id;

            if(user.role===3){

              $('.card').each(function() {
                    const serviceType = $(this).find('.service-type').text();
                    // console.log(serviceType);
                    // Predefined string to compare with
                    const predefinedString = "Sangariye";

                    if (serviceType !== predefinedString) {
                        $(this).hide();
                        // console.log("hide");
                    }
                });
              

            }else{

              $('.card').each(function() {
                    const serviceType = $(this).find('.service-type').text();
                    // console.log(serviceType);
                    // Predefined string to compare with
                    const predefinedString = "Teblyt";

                    if (serviceType !== predefinedString) {
                        $(this).hide();
                        // console.log("hide");
                    }
                });
              


            }


    }
            
        }




        $(document).on('click', '.my-rounded-button', function () {
    const myVariable = $(this).data('my-variable');
    var token = sessionStorage.getItem("accessToken");

    // Generate a unique table ID based on myVariable
    const tableId = 'bids-table-body-' + myVariable; // Use 'bids-table-body-' instead of 'bids-table-'

    $.ajax({
        url: '/api/displayBids/' + myVariable,
        type: 'GET',
        headers: {
            "Authorization": "Bearer " + token
        },
        dataType: 'json',
        success: function (data) {
            // Handle the success response here
            console.log(data);
            displayBids(data, tableId); // Pass the unique tableId
        },
        error: function (error) {
            // Handle any errors that occur during the request
            console.error('Error fetching users:', error);
        }
    });
});







     
 



    });



        
        

    function displayBids(data, tableId) {
    console.log(data);
    var tableBody = $('#' + tableId);
    tableBody.empty(); // Clear any previous content

    // Rest of your code for populating the table...

    // Loop through the users and populate the table rows
    data.bids.forEach(function (bid) {
        var bidRow = '<tr>';
        bidRow += '<th> Bid: </td>';
        bidRow += '<td>' + bid.bid_price + '</td>';
        // bidRow += '<th> Status: </td>';
        bidRow += '<td style="color:green">' + bid.status + '</td>';

        // Add more table cells if needed
                        // bidRow += '<td><button class="btn btn-primary btn-update" data-bidid="' + bid.id + '">Update</button></td>';
                        if(data.userRole==3 || data.userRole==5){// ballat aw sangare
                bidRow += '<td><button class="btn btn-primary btn-delete" data-bidid="' + bid.id + '">Delete</button></td>';}
                if(data.userRole==1 || data.userRole==4){//retail aw wholesale
                bidRow += '<td><button class="btn btn-primary btn-reveal" data-proid="' + bid.provider + '">Reveal</button></td>';
                }
        bidRow += '</tr>';

        tableBody.append(bidRow);
    });
}


        
      $(document).on('click', '.btn-delete', function () {        
      var token = sessionStorage.getItem("accessToken");

      var bidId = $(this).data('bidid');
      var $button = $(this);
      $.ajax({
          type: 'DELETE',
              headers: {
                  "Authorization": "Bearer " + token
              },
          url: '/api/bidDelete/' + bidId,
          success: function (response) {
              $button.closest('tr').remove();
          },
          error: function (xhr, status, error) {
              console.error(error);
          }
      });
  });


  $(document).on('click', '.btn-reveal', function () {     
    
    $('#userInfoModal').modal('show');
      var token = sessionStorage.getItem("accessToken");

      var proId = $(this).data('proid');
      var $button = $(this);
      $.ajax({
          type: 'GET',
              headers: {
                  "Authorization": "Bearer " + token
              },
          url: '/api/proReveal/' + proId,
          success: function (response) {
              // $button.closest('tr').remove();

              console.log(response);

              $('#username').text(response.username);
            $('#email').text(response.email);
            $('#phoneNb').text(response.phoneNumber);
            $('#bio').text(response.role);

          },
          error: function (xhr, status, error) {
              console.error(error);
          }
      });
  });

  
    </script>

  </body>

</html>

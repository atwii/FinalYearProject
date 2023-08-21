<!DOCTYPE html>
<html lang="en">

  <head>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>



.calculator-label {
  font-size: 36px;
  font-weight: bold;
  color: #25e6c6;
  text-align: center;
  padding-top:8%;
  margin-bottom:7%;
}

.top-left-input {
  position: absolute;
  top: 28%;
  left: 20px;
  width: 150px;
}

.container2 {
  display: flex;
  justify-content: center;
  align-items: center;
}

.input-container {
  position: relative;
  width: 250px;
  margin: 10px;
}

.input-label {
  position: absolute;
  top: -20px;
  left: 10px;
  background-color: #f8f8f8;
  padding: 0 5px;
  font-size: 14px;
}

.input-field {
  width: 100%;
  padding: 15px;
  border: 2px solid #ddd;
  border-radius: 10px;
  font-size: 18px;
  outline: none;
  transition: border-color 0.3s;
}

.input-field:focus {
  border-color: #6ab7ff;
}

.button-container {
  display: flex;
  justify-content: center;
  align-items: center;
  padding-top:2.5%;
  padding-bottom:2.5%;
}

.cta {
  display: flex;
  padding: 11px 33px;
  text-decoration: none;
  font-family: 'Poppins', sans-serif;
  font-size: 25px;
  color: white;
  background: #25e6c6;
  transition: 1s;
  box-shadow: 6px 6px 0 black;
  transform: skewX(-15deg);
  border: none;
}

.cta:focus {
  outline: none;
}

.cta:hover {
  transition: 0.5s;
  box-shadow: 10px 10px 0 #FBC638;
}

.cta .second {
  transition: 0.5s;
  margin-right: 0px;
}

.cta:hover  .second {
  transition: 0.5s;
  margin-right: 45px;
}

.span {
  transform: skewX(15deg)
}

.second {
  width: 20px;
  margin-left: 30px;
  position: relative;
  top: 12%;
}

.one {
  transition: 0.4s;
  transform: translateX(-60%);
}

.two {
  transition: 0.5s;
  transform: translateX(-30%);
}

.cta:hover .three {
  animation: color_anim 1s infinite 0.2s;
}

.cta:hover .one {
  transform: translateX(0%);
  animation: color_anim 1s infinite 0.6s;
}

.cta:hover .two {
  transform: translateX(0%);
  animation: color_anim 1s infinite 0.4s;
}

@keyframes color_anim {
  0% {
    fill: white;
  }

  50% {
    fill: #FBC638;
  }

  100% {
    fill: white;
  }
}



/* Your existing CSS styles remain the same */

.result-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  margin-top: 20px; /* Add some space between the inputs and the labels */
}

.result-label {
  width: 150px;
  text-align: right;
  margin: 5px;
  font-size: 16px;
}

.result-value {
  width: 150px;
  text-align: left;
  margin: 5px;
  font-size: 16px;
  background-color: #f8f8f8;
  padding: 5px;
  border: 2px solid #ddd;
  border-radius: 5px;
}


</style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">


    <link rel="icon" type="image/png" href="assets/images/mainLogo.png"/>
    <title>Warshatok - Calculator</title>


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

    <h1 class="calculator-label">+x/=</h1>

    <form id="calculation-form" method="post">

        @csrf
    <div class="top-left-input">
        <label for="smallInput"  class="input-label">Tile Size:</label>
        <input type="text" name="tileSize" id="smallInput" class="input-field">
        <label>
            <input type="checkbox" name="checkboxFloor"> Floor
          </label>
          <br>
          <label>
            <input type="checkbox" name="checkboxWalls"> Walls
          </label>
    </div>
      
      <div class="container2">
        <div class="input-container">
          <label for="input1" class="input-label">Width:</label>
          <input type="text" name="width"  class="input-field">
        </div>
        <div class="input-container">
          <label for="input2" class="input-label">Length:</label>
          <input type="text" name="length"  class="input-field">
        </div>
        <div class="input-container">
          <label for="input3" class="input-label">Height:</label>
          <input type="text" name="height"  class="input-field">
        </div>
      </div>
    
      <div class="button-container">
        
      <button type="submit" class="cta">
        <span class="span">Calculate</span>
        <span class="second">
          <svg width="50px" height="20px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g id="arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <path class="one" d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z" fill="#FFFFFF"></path>
              <path class="two" d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z" fill="#FFFFFF"></path>
              <path class="three" d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z" fill="#FFFFFF"></path>
            </g>
          </svg>
        </span> 
    </button>
        
</div>

</form>
    <!-- Result Labels -->
  <div class="result-container">
    <label class="result-label">Walls:</label>
    <label class="result-value" id="resultWalls">-</label>
    <label class="result-label">Floor:</label>
    <label class="result-value" id="resultFloor">-</label>
    <label class="result-label">Skirting Tiles:</label>
    <label class="result-value" id="resultSkirtingTiles">-</label>
    <label class="result-label">Adhesive:</label>
    <label class="result-value" id="resultAdhesive">-</label>
    <label class="result-label">Grout:</label>
    <label class="result-value" id="resultGrout">-</label>
    <label class="result-label">Extra:</label>
    <label class="result-value" id="resultExtra">-</label>
    <label class="result-label">Total:</label>
    <label class="result-value" id="resultTotal">-</label>
  </div>
  
    

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

        
       
        $(document).ready(function () {
            $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });




    $('#submitButton').click(function() {
      // Submit the form when the button is clicked
      $("#calculation-form").submit();
    });

    // Handle the form submission
    $("#calculation-form").submit(function(event) {
      // Prevent the default form submission behavior
      event.preventDefault();


            var formData = $(this).serialize();

var token = sessionStorage.getItem("accessToken");
console.log(token);
// AJAX 
$.ajax({
    url: '/api/calculate', // Replace with your API endpoint URL
    type: 'POST',
    headers: {
        "Authorization": "Bearer " + token
    },
    data: formData,
    dataType: 'json',
    success: function (data) {
        // Handle the success response here
        console.log(data);
       

        
            document.getElementById("resultWalls").textContent=data.walls;
            document.getElementById("resultFloor").textContent=data.floor;
            document.getElementById("resultSkirtingTiles").textContent=data.skirtingTiles;
            document.getElementById("resultAdhesive").textContent=data.adhesive;
            document.getElementById("resultGrout").textContent=data.grout;
            document.getElementById("resultExtra").textContent=data.extra;
            document.getElementById("resultTotal").textContent=data.total;
           
    },
    error: function (error) {
        // Handle any errors that occur during the request
        
        console.error('Error fetching users:', error);
    }
});


});


        });
        
  
    </script>

  </body>

</html>

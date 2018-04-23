<?php
    require_once "https.php"
?>
<!DOCTYPE html>
<html>
<title>QTie</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
header {background-color: darkorange}
    footer {background-color: darkorange}
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-red w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 4</a>
  </div>
</div>

<!-- Header -->
<header class="w3-container taustakuva w3-center" style="padding:128px 16px ">
    <h1 class="w3-margin w3-jumbo">QTie</h1>
    <p class="w3-xlarge">independent LQTS monitoring system</p>
    <button id="regbutton" class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Register - when you arive here at the first time</button>
    <button id="loginbutton" class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Login - when we are already familiar, hello again</button>
    <!-- The Modal -->
    <div id="loginModal" class="modal">

    <!-- Modal content -->
        <div class="modal-content">
        <span class="close">&times;</span>
            <?
            include_once "auth.php"
            ?>
        <p>Welcome again, you handsome devil, please Insert your username and password</p>
        </div>
    </div>
    <script>
        function modal(m_id, b_id, close){
            // Get the modal
            var modal = document.getElementById(m_id);
            // Get the button that opens the modal
            var btn = document.getElementById(b_id);
            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[close];
            // When the user clicks the button, open the modal
            btn.onclick = function() {
                console.log(b_id + ' button works :)');
                modal.style.display = "block";
            }
            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
                modal.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        }
        modal('loginModal', "loginbutton", 0);
    </script>
    <!-- The Modal -->
    <div id="regModal" class="modal">

    <!-- Modal content -->
        <div class="modal-content">
        <span class="close">&times;</span>
        <p>Trying to get the f...ing forms here</p>
        </div>
    </div>
    <script>
    // Get the modal
    modal('regModal', "regbutton", 1);
    </script>
</header>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
        <h1>Advantages in handling LQTS-Long QT Syndrom with QTie</h1>
      <h5 class="w3-padding-32">What is it anyway - never heard about it...well it's hereditary disease which exposes you to arrhythmia and in worse case scenario...to ventricullar fibrillation...register and learn more 128077<br>
        </h5>


      <p>How can I gain something via QTie - well, You are able to monitor your personal activities during days, weeks and months and          create analyzes out of those measurements. Analyzing will inform you where are the risky points in your own life. Basicly we'll give you knowledge of your syndrom to dicrease fear and increase life quality...join us and click yourself in</p>
    </div>

    <div class="w3-third w3-center">
      <i class="w3-padding-64 w3-text-red"></i>
    </div>
  </div>
</div>

<!-- Second Grid -->
<!--<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-third w3-center">
      <i class="fa fa-coffee w3-padding-64 w3-text-red w3-margin-right"></i>
    </div>

    <div class="w3-twothird">
      <h1>LQTS - Qtie</h1>
      <h5 class="w3-padding-32">What this synrom is and what kind of issues one does have to take count when diagnosed, to be continued....</h5>

      <p class="w3-text-grey">What does this system solve, help in or produce better quality if life....</p>
    </div>
  </div>
</div>

<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <h1 class="w3-margin w3-xlarge">QTie - one beat ahead</h1>
</div>-->

<!-- Footer -->
<footer class="w3-center w3-container">
    <style></style>
   <p>Powered by team Qt3.14's <a href="https://www.metropolia.fi" target="_blank">@metropolia</a></p>
</footer>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html>

<?
    require_once "https.php";
?>
<!DOCTYPE html>
<html>
<title>QTie</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/startpage.css">
<style>
body,h1,h2,h3,h4,h5,h6,.w3-bar,h1,button {font-family: "Robotico", sans-serif}
    header {background-image: url(img/NooajaPeetu.JPG);
            background-repeat: no-repeat;
            background-size: cover;
            }
    footer {background-color: #8e8e8e}
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
    background-color: white;
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

<!-- Header -->
<header class="w3-container taustakuva w3-center" style="padding:128px 16px ">
    <h1 class="w3-margin w3-jumbo">QTie</h1>
    <p class="w3-xlarge">independent LQTS monitoring system</p>
    <button id="regbutton" class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Register - when you arrive here at the first time</button>
    <button id="loginbutton" class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Login - when we are already familiar, hello again</button>
    <!-- The Modal -->
    <div id="loginModal" class="modal">

    <!-- Login Modal content -->
        <div class="modal-content">
        <span class="close">&times;</span>
        <p>Welcome again, you handsome devil, please Insert your username and password</p>
        <form action="auth.php" method="post">
          E-mail: <input type="text" name="email">
          Password: <input type="password" name="pwd">
          <input type="submit" name="login" value="login">
        </form>
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

    <!-- Registration Modal content -->
        <div class="modal-content">
        <span class="close">&times;</span>
        <form method="post" action="registering.php">
            <fieldset>
                <legend>Please enter required information for registration, thanks !</legend>
                <label>Name: <input type="text" name="name" placeholder="Mary Doe"></label>
                <label>E-mail: <input type="email" name="email" placeholder="Mary@test.org"></label>
                <label>Birthdate: <input type="date" name="birthdate" placeholder="yyyy-mm-dd"></label>
                <label>Password: <input type="password" name="password" placeholder="asdf"></label>
                <label>Male: <input type="radio" name="gender" value="male"></label>
                <label>Female: <input type="radio" name="gender" value="female"></label>
                <label>Other/Rather not say: <input type="radio" name="gender" value="other/rather not say">
                <input type="submit" name="clicked" value="Register">
                <input type="reset" value="Clear all">
            </fieldset>
        </form>

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
      <h5 class="w3-padding-32">What is it anyway - never heard about it...well it's hereditary disease which exposes you to arrhythmia and in worse case scenario...to ventricullar fibrillation...register and learn more &#128077<br>
        </h5>
      <p>How can I gain something via QTie - well, You are able to monitor your personal activities during days, weeks and months and          create analyzes out of those measurements. Analyzing will inform you where are the risky points in your own life. Basicly we'll give you knowledge of your syndrom to dicrease fear and increase life quality...join us and click yourself in</p>
    </div>

    <div class="w3-third w3-center">
      <i class="w3-padding-64 w3-text-red"></i>
    </div>
  </div>
</div>

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

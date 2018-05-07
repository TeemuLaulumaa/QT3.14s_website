<?
    require_once "https.php";

//if (session_status() == PHP_SESSION_NONE) {
//    header("Location:  https://users.metropolia.fi/~teemulau/QTie/start.php");
}

?>
<!DOCTYPE html>
<html>
<title>QTie - LQTS Analysis Tool - Profile</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<!-- <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css"> -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>

    h1  {
        padding-top:55px;
/* eri kun w3.css, ilman tätä otsikko huitoo liian korkeella */
        padding-left: 20%;
        padding-right: 20%;
    }

    main {
        width: 100%;

    }

    .w3-sidebar {
    top: 3px;
/* eri kun w3.css */
    }

</style>
<body>

  <!-- Navbar -->
<nav>
  <div class="w3-top">
    <div class="w3-bar w3-theme w3-top w3-left-align w3-large">
      <a class="w3-bar-item w3-button w3-right w3-hide-large w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>
      <a href="pies.php" class="w3-bar-item w3-button w3-theme-l1">QTie - Frontpage</a>
      <a href="graph.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Graph</a>
      <a href="profile.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Profile</a>
      <a href="about.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">About</a>
        <a href="help.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Help</a>
        <a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white" style="color: #FF3B38; float:right;">Log Out</a>
    </div>
  </div>
</nav>


  <!-- Overlay effect when opening sidebar on small screens -->
  <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<main>
  <!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->

    <h1> Here you can edit your profile </h1>
    <div class="container">
    <form>
        <label>Full name: </label>
        <input type="text" name="name">
        <label>E-mail: </label>
        <input type="email" name="email">
        <label>Birthdate: </label>
        <input type="date" name="birthdate">
        <label>Gender: </label>
        <select name="gender">
            <option value="other">Other/Rather not say</option>
            <option value="male">Male</option>
            <option value="female">Female</option></select>
        <br>
        <input class="button_black button" type="submit" value="Save edits" style="width: auto">
        <button style="width: auto"> Change password </button>
    </form>
    </div>

    <!-- <footer id="myFooter">
      <div class="w3-container w3-theme-l2 w3-padding-32">
        <h4>Footer</h4>
      </div>
    </footer> -->

    <!-- END MAIN -->
    </main>

  <script>
    // Get the Sidebar
    var mySidebar = document.getElementById("mySidebar");

    // Get the DIV with overlay effect
    var overlayBg = document.getElementById("myOverlay");

    // Toggle between showing and hiding the sidebar, and add overlay effect
    function w3_open() {
      if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
        overlayBg.style.display = "none";
      } else {
        mySidebar.style.display = 'block';
        overlayBg.style.display = "block";
      }
    }

    // Close the sidebar with the close button
    function w3_close() {
      mySidebar.style.display = "none";
      overlayBg.style.display = "none";
    }
  </script>

</body>

</html>

<?
    require_once "https.php";

if (session_status() == PHP_SESSION_NONE) {
    header("Location:  https://users.metropolia.fi/~teemulau/QTie/start.php");
}

?>


<!DOCTYPE html>
<html>
<title>QTie - LQTS Analysis Tool - About</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<!-- <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css"> -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
      <a href="start.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white" style="color: #FF3B38; float:right;">Log Out</a>
    </div>
  </div>
</nav>

<!--burger menu-->
<nav role="navigation">
    <div id="menuToggle">
    <input type="checkbox" />

    <span></span>
    <span></span>
    <span></span>

    <ul id="menu">
      <a href="#"><li>Home</li></a>
      <a href="#"><li>About</li></a>
      <a href="#"><li>Info</li></a>
      <a href="#"><li>Contact</li></a>
      <a href="https://erikterwan.com/" target="_blank"><li>Show me more</li></a>
    </ul>
  </div>
</nav>


  <!-- Overlay effect when opening sidebar on small screens -->
  <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<main>
  <!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
    <div>
    <h1><br> About LQTS <br> </h1>
    <p>Pitkä QT-aika on aikaväli, joka kuvaa sydämen kammioiden sähköisen toiminnan kestoa kunkin sähköpurkauksen alusta siihen asti, kunnes sähköinen toiminta päättyy.
    <br>
    Pitkän QT-ajan syndroomassa (LQTS) kammioiden palautuminen lepotilaan eli sähköisen toiminnan päättyminen kestää sydämen sisäisten kanavien geenivirheestä johtuen normaalia pidempään ja aiheuttaa näin riskin kammiovärinän syntymiselle. </p>
    <br>


    <br>
    <h1> About this website </h1>
    <p> Projektin tarkoituksena on luoda kannettavalla tai pöytäkoneella toimiva EKG käyrän QT-intervallin analysointiin kotioloissa soveltuva ohjelma hyödyntäen PHP:tä sekä MySQL tietokantoja. Ohjelma rakentuu pääsivun monipuoliseen informaatioon sekä ympärille avautuvista modaalisivuista tukiominaisuuksineen. Sisäänkäynti ohjelmaan tulee avaussivulta kirjautumispalvelun kautta ja näistä luodaan kokeiluversio kotioloissa analysoitavan tiedon saattamiseksi käyttäjälle havainnollistavaan muotoon sairauden riskihetkien muodostumisesta eri toimintojen ja aktiviteettien yhteydessä. Tietoa voitaisiin hyödyntää pienentämään rytmihäiriöiden riskiä.</p>
      <br>
      <!--- <p> Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
      <br>
      <p> Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
      <br>
      <p> Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p> --->

<!-- <footer id="myFooter">
      <div class="w3-container w3-theme-l2 w3-padding-32">
        <h4>Footer</h4>
      </div>
    </footer> -->

    <!-- END MAIN -->
  </div>
</main>

<footer>

    <p> &copy; 2018 QTie Pies</p>

</footer>
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

<?
    require_once "https.php";

if (session_status() == PHP_SESSION_NONE) {
    header("Location:  https://users.metropolia.fi/~teemulau/QTie/start.php");
}

?>

<!DOCTYPE html>
<html>
<title>QTie - LQTS Analysis Tool - Help</title>
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
      <!-- burgeri pois <a class="w3-bar-item w3-button w3-right w3-hide-large w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a> -->
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
<h1><br> Help <br> </h1>
<h2>Qtie frontpage</h2>
<p>Qtie frontpage-sivulta näet tallennetuista seissioista muodostettuja ympyräkaavioita.<br>
  Vasemmalla näet tallentamasi sessiot.<br>
  Graafissa vihreä = matala qt-aika, sininen = keskitaso ja keltainen = korkea <br>
  Aseta Start date ja End date kohtiin haluamasi tarkkailtavan ajanjakson alku- ja loppupäivämäärä ja valitse Activity-taululukosta tarkkailtava aktiviteetti.</p>
<h2>Graph</h2>
<p>Graph-sivulla on aikajanallinen kaavio tiedoistasi.</p>
<h2>Profile</h2>
<p>Profiilisivulla voit muokata luomasi tilin tietoja.</p>

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

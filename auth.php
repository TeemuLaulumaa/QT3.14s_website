<?php
 if($_POST['login']){
   include_once "db_connection.php";
   //$postpwd = password_hash($_POST['password'], PASSWORD_DEFAULT);
   $result = db_query("SELECT * FROM Profile WHERE email =  '" . db_escape_string($_POST['email']) . "'");
   //$dbemail = db_query("SELECT 'email' FROM 'profile' WHERE email = ' . db_escape_string($_POST['email']) . '");
   //$dbname = db_query("SELECT 'name' FROM 'profile' WHERE email = ' . db_escape_string($_POST['email']) . '");
   $row = mysqli_fetch_assoc($result);
   var_dump($row);
   $dbemail = $row['email'];
   $dbpwd = $row['hash'];

   if(password_verify($_POST['pwd'], $dbpwd) && !is_null($row)){
     echo"Hello, " . $row['name'];
     $_SESSION['name'] = $row['name'];
     $_SESSION['email'] = $dbemail;
     $_SESSION['profile_id'] = $row['profile_id'];
     header("Location: https://users.metropolia.fi/~teemulau/QTie/start.php");

   } else {
       echo "Login failed.";
   }
 }

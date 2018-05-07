<?php
 if($_POST['login']){

   $postpwd = password_hash($_POST['password'], PASSWORD_DEFAULT);
   $dbpwd = db_query("SELECT 'hash' FROM 'profile' WHERE name = ' . db_escape_string($_POST[startdate]) . '")

   if(htmlentities(($_POST['username']) == $dbuser &&
   password_verify($_POST['password'], $dbpwd))){
     echo"Hello, $dbuser!";
     $_SESSION['username'] = $dbuser;
   } else {
       echo "Login failed.";
   }
 }

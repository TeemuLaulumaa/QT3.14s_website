<?php
include_once('db_connection.php');

//INSERT INTO `profile` (`name`, `email`, `birthdate`, `gender`) VALUES ('test', 'test@ttt.com', '2018-03-20', '2');
//https://www.w3schools.com/php/func_mysqli_real_escape_string.asp

if ($_SESSION['username']) {
  //user logged in


$result = db_query("INSERT INTO Profile (name, email, birthdate, gender)
VALUES ('" . db_escape_string($_POST['name']) . "', '" . db_escape_string($_POST['email']) . "', '" . db_escape_string($_POST['birthdate']) . "', '" . db_escape_string($_POST['gender']) . "')");

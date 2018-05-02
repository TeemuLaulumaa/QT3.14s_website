<?php
function db_connect() {

    //Define connection as a static variable, to avoid connecting more than once
    static $connection;

    //Try and connect to the database, if a connection has not been established yet
    if(!isset($connection)) {
         // Load configuration as an array. Use the actual location of your configuration file
        $config = parse_ini_file('../../config.ini');
        $connection = mysqli_connect($config['dbaddr'],$config['username'],$config['password'],$config['dbname']);
    }

    // If connection was not successful, handle the error
    if($connection === false) {
        //  Handle error - notify administrator, log to a file, show an error screen, etc
        echo "connecction to db failed: " . mysqli_connect_error();
        return mysqli_connect_error();
        exit();
    }
    mysqli_set_charset($connection, "utf8");
    return $connection;
}

function internal_query($query){
  // Connect to the database
  $connection = db_connect();
  echo "query: $query\n";
  // Query the database
  $result = mysqli_query($connection,$query);
  if($result){
    echo "query OK\n";
  }else{
    echo "query failed: " . mysqli_error($connection);
  }
  return $result;
}

function db_query($query) {
  return internal_query($query);
}

function db_insert_query($query) {
  $connection = db_connect();
  $res = internal_query($query);
  if(!$res){
    return -1;
  }
  return  mysqli_insert_id($connection);
}

// make a generic sql injection protection function
// https://www.w3schools.com/php/func_mysqli_real_escape_string.asp
function db_escape_string($text) {
    // Connect to the database
    $connection = db_connect();

    return mysqli_real_escape_string($connection, $text);
}

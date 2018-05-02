<?php
include_once('db_connection.php');

// check which profile the session is on and use data associated with it
//$curr_session = aasdfasdfasdf
session_start();
$_SESSION["username"]


$query = "SELECT 'qtc' FROM ((((('RtoR' INNER JOIN 'Session' ON 'RtoR.session_id' = 'Session.session_id') INNER JOIN 'Records' ON 'Session.session_id' = 'Records.session_id') INNER JOIN 'Profile' ON 'Records.profile_id' = 'Profile.profile_id') INNER JOIN 'DiaryDoesSession' ON 'Session.session_id' = 'DiaryDoesSession.session_id') INNER JOIN 'Diary' ON 'DiaryDoesSession.diary_id' = 'Diary.diary_id')";

//Checks what clauses user has set and adds appropriate WHERE clauses.        o = not empty     x = empty


//ooo
if (!empty($_POST['startdate']) && !empty($_POST['enddate']) && !empty($_POST['activity'])) {
    $query += " WHERE 'Profile.profile_id' = '$curr_session' AND 'Session.date' => ' . db_escape_string($_POST['startdate']) . ' AND 'Session.date' <= ' . db_escape_string($_POST['enddate']) . ' AND 'Diary.activity' == ' . db_escape_string($_POST['activity']) . ';";
}

//xxx
if (empty($_POST['startdate']) && empty($_POST['enddate']) && empty($_POST['activity'])) {
    $query += " WHERE 'Profile.profile_id' = '$curr_session';";
}

//oxx
if (!empty($_POST['startdate']) && empty($_POST['enddate']) && empty($_POST['activity'])) {
    $query += " WHERE 'Profile.profile_id' = '$curr_session' AND 'Session.date' => ' . db_escape_string($_POST['startdate']) . ';";
}

//oox
if (!empty($_POST['startdate']) && empty($_POST['enddate']) && !empty($_POST['activity'])) {
    $query += " WHERE 'Profile.profile_id' = '$curr_session' AND 'Session.date' => ' . db_escape_string($_POST['startdate']) . ';";
}

//xoo
if (empty($_POST['startdate']) && !empty($_POST['enddate']) && !empty($_POST['activity'])) {
    $query += " WHERE 'Profile.profile_id' = '$curr_session' AND 'Session.date' <= ' . db_escape_string($_POST['enddate']) . ' AND 'Diary.activity' == ' . db_escape_string($_POST['activity']) . ';";
}

//xxo
if (empty($_POST['startdate']) && empty($_POST['enddate']) && !empty($_POST['activity'])) {
    $query += " WHERE 'Profile.profile_id' = '$curr_session' AND 'Diary.activity' == ' . db_escape_string($_POST['activity']) . '";
}

//oxo
if (!empty($_POST['startdate']) && empty($_POST['enddate']) && !empty($_POST['activity'])) {
    $query += " WHERE 'Profile.profile_id' = '$curr_session' AND 'Session.date' => ' . db_escape_string($_POST['startdate']) . ' AND 'Diary.activity' == ' . db_escape_string($_POST['activity']) . '";
}

//xox
if (empty($_POST['startdate']) && !empty($_POST['enddate']) && empty($_POST['activity'])) {
    $query += " WHERE 'Profile.profile_id' = '$curr_session' AND 'Session.date' <= ' . db_escape_string($_POST['enddate']) . '";
}

echo "$query";

$result = db_query($query);

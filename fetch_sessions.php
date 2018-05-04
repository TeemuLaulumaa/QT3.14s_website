<?php
include_once('db_connection.php');

// check which profile the session is on and use data associated with it
session_start();
// $curr_session = $_SESSION["userid"] eli tässä otetaan sessioon kirjautunut profiili paikalliseen muuttujaan. Näin on helpompi hakea oikeat tiedot ja viitata koodissa
$curr_session = 3;

echo $_POST['startdate'];
echo $_POST['enddate'];
echo $_POST['activity'];

$query = "SELECT 'qtc' FROM ((((('RtoR' INNER JOIN 'Session' ON 'RtoR.session_id' = 'Session.session_id') INNER JOIN 'Records' ON 'Session.session_id' = 'Records.session_id') INNER JOIN 'Profile' ON 'Records.profile_id' = 'Profile.profile_id') INNER JOIN 'DiaryDoesSession' ON 'Session.session_id' = 'DiaryDoesSession.session_id') INNER JOIN 'Diary' ON 'DiaryDoesSession.diary_id' = 'Diary.diary_id')";
echo "$query";
//Checks what clauses user has set and adds appropriate WHERE clauses.        o = not empty     x = empty

//ooo
if (!empty($_POST['startdate']) && !empty($_POST['enddate']) && !empty($_POST['activity'])) {
    $query += " WHERE 'Profile.profile_id' == '$curr_session' AND 'Session.date' => ' . db_escape_string($_POST[startdate]) . ' AND 'Session.date' <= ' . db_escape_string($_POST[enddate]) . ' AND 'Diary.activity_class' == ' . db_escape_string($_POST[activity]) . ';";
}

//xxx
if (empty($_POST['startdate']) && empty($_POST['enddate']) && empty($_POST['activity'])) {
    $query += " WHERE 'Profile.profile_id' == '$curr_session';";
}

//oxx
if (!empty($_POST['startdate']) && empty($_POST['enddate']) && empty($_POST['activity'])) {
    $query += " WHERE 'Profile.profile_id' == '$curr_session' AND 'Session.date' => ' . db_escape_string($_POST[startdate]) . ';";
}

//oox
if (!empty($_POST['startdate']) && empty($_POST['enddate']) && !empty($_POST['activity'])) {
    $query += " WHERE 'Profile.profile_id' == '$curr_session' AND 'Session.date' => ' . db_escape_string($_POST[startdate]) . ';";
}

//xoo
if (empty($_POST['startdate']) && !empty($_POST['enddate']) && !empty($_POST['activity'])) {
    $query += " WHERE 'Profile.profile_id' == '$curr_session' AND 'Session.date' <= ' . db_escape_string($_POST[enddate]) . ' AND 'Diary.activity_class' == ' . db_escape_string($_POST[activity]) . ';";
}

//xxo
echo $_POST['startdate'];
echo $_POST['enddate'];
echo $_POST['activity'];

if (empty($_POST['startdate']) && empty($_POST['enddate']) && !empty($_POST['activity'])) {
    //$query += " WHERE 'Profile.profile_id' = '$curr_session' AND 'Diary.activity_class' == ' . db_escape_string($_POST[activity]) . '";

}

//oxo
if (!empty($_POST['startdate']) && empty($_POST['enddate']) && !empty($_POST['activity'])) {
    $query += " WHERE 'Profile.profile_id' == '$curr_session' AND 'Session.date' => ' . db_escape_string($_POST[startdate]) . ' AND 'Diary.activity' == ' . db_escape_string($_POST[activity_class]) . '";
}

//xox
if (empty($_POST['startdate']) && !empty($_POST['enddate']) && empty($_POST['activity'])) {
    $query += " WHERE 'Profile.profile_id' == '$curr_session' AND 'Session.date' <= ' . db_escape_string($_POST[enddate]) . '";
}

echo "$query";
echo "$qtclist";
$qtclist = db_query($query);

// divide qtclist into 3 different arrays based on risk areas (low > 400,  400 < medium >500, high > 500).
// then take length of each array and save them to "$low", "$medium", and "$high". These can be put into pies

$lowarray = array();
$mediumarray = array();
$higharray = array();

foreach ($qtclist as $key => $value) {
  if ($value < 440) {
        $low_array[] = $value;
        unset($qtclist[$key]);
    }

  elseif ($value > 400 && $value < 500){
        unset($qtclist[$key]);
        $medium_array[] = $value;
  }

  elseif ($value > 500){
        $high_array[] = $value;
        unset($qtclist[$key]);
  }
}

$length_low = (count($low_array));
$length_medium = (count($medium_array));
$length_high = (count($high_array));

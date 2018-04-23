<?php
include db_connection.php;
$config = parse_ini_file ('../../config.ini');
$connection = mysqli_connect($config['dbaddr'],$config['username'],$config['password'],$config['dbname']);
if($connection === false) {
	echo "Connection to database failed";
	exit;
}
mysqli_set_charset($connection,"utf8");

//mysqli_query("use $config['dbname']", $connection);

/********************************************************************************/
/* Parameters: filename.csv table_name

$argv = $_SERVER[argv];

if($argv[1]) { $file = $argv[1]; }
else {
    echo "Please provide a file name\n"; exit;
}
if($argv[2]) { $table = $argv[2]; }
else {
    $table = pathinfo($file);
    $table = $table['filename'];
}
*/
/********************************************************************************/
// Get the first row to create the column headings

$fp = fopen('Testidata_testi.csv', 'r');
$frow = fgetcsv($fp, 10000, ";");
$row = 0;
echo "<pre>";
$col_header = array();
foreach($frow as $column) {
	array_push($col_header, $column);
}
var_dump($col_header);

// 1. insert into Session
// INSERT INTO `Session` (date) VALUES (CURRENT_TIMESTAMP);
$creating_session = db_query("INSERT INTO Session (date) VALUES (CURRENT_TIMESTAMP);");
// 2. get the newly created id
// $seesion_id = mysqli_insert_id($connection)
$session_id = mysqli_insert_id($connection);
// 3. insert into Records profile_id from $_SESSION session_id from step 2
$id = "3";
$insert_records = db_query("INSERT INTO Records (session_id, profile_id) VALUES ($session_id, $id);");

while (($rows = fgetcsv($fp, 10000, ";")) !== false) {
	//var_dump($rows);
	// the ingredients
	echo "\n" . $col_header[0] . ": " . $rows[0] . "\n";
	echo "\n" . $col_header[1] . ": " . $rows[1] . "\n";
	// 4. insert into RtoR qtc $row[1] session_id $session_id
  db_query("INSERT INTO `RtoR` (qtc, session_id) VALUES ($rows[1], $session_id);");
	echo "\n";
}

fclose($fp);

?>

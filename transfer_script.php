<?php
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

$fp = fopen('../head.openofood.csv', 'r');
$frow = fgetcsv($fp, 10000, "\t");
$row = 0;
echo "<pre>";
$col_header = array();
foreach($frow as $column) {
	array_push($col_header, $column);
}
var_dump($col_header);


while (($rows = fgetcsv($fp, 10000, "\t")) !== false) {
	//var_dump($rows);
	// the ingredients
	echo "\ningredients: " . $rows[34] . "\n";
	$test = preg_split('/[,\(\[\]\)]/i', $rows[34]);
	var_dump($test);
	//loop

		//trim() to remove whitespace at beginning and end
		//strtr($str,[' '=>'']);

		// convert lowercase strtolower($str)
		//$str = strtolower($str);

		// explode number %
		print_r(preg_split('#(?<=\%)(?=[a-z])#i'));
		// insert in ingredient table

		// search if : then

			// explode for space-dash but not letter-dash (insert into category and ingredient tables)

	// insert food
	/*echo "code: " . $rows[0];
	echo "\nname: " . $rows[7];
	echo "\ningedients: " . $rows[34];
	echo "\nglucemic index: " . $rows[161];
	echo "\nsugar per 100g: " . $rows[102];
	*/
	//get the newly created id
	//loop ingredients again
		// insert into contains food_id and ingredient
	// check food category [14] and/or [15] and/or [16]
	//loop
		//insert into category table and isOfGeneric
	echo "\nfood category: " . $rows[14] . " ::: " . $rows[15] . " ::: "  . $rows[16];

	echo "\n";
}

fclose($fp);
$create = "create table if not exists $table ($columns);";
//mysql_query($create, $db);

/********************************************************************************/
// Import the data into the newly created table.
/*
$file = $_SERVER['PWD'].'/'.$file;
$q = "load data infile '$file' into table $table fields terminated by ',' ignore 1 lines";
mysql_query($q, $db);
*/
?>

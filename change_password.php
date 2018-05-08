<?

include_once "db_connection.php";

$hashed_pwd = password_hash("testi1234  ", PASSWORD_DEFAULT);

$result = db_insert_query("UPDATE Profile SET hash = $hashed_pwd WHERE profile_id = 3");

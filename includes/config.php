<?php 
// DB credentials.
define('DB_HOST','sql110.infinityfree.com');
define('DB_USER','if0_37093255');
define('DB_PASS','ft0YSYa5oN');
define('DB_NAME','if0_37093255_r');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>
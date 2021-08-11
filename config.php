<?php 
// DB credentials.
define('DB_HOST','sql208.epizy.com');
define('DB_USER','epiz_27936250');
define('DB_PASS','JtRESkoPQz2Imi');
define('DB_NAME','epiz_27936250_autorental');
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
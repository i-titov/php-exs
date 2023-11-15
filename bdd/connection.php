<?php 
$db_host = "localhost";
$db_user = "root";
$db_pwd = "";
$db_name = "testing";

try {
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pwd);
} catch (PDOException $e) {
    die('Error' . $e->getMessage());
}

?>
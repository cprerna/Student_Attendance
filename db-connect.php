<?php 
$host = "localhost";
$uname = "root";
$pw = "";
$dbname = "prernaattendance";

try{
    $conn = new MySQLi($host, $uname, $pw, $dbname);
}catch(Exception $e){
    echo "Database Connection Failed: <br>";
    print_r($e->getMessage());
    exit;
}
?>
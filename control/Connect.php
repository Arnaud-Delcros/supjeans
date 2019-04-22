<?php
$db_host = "127.0.0.1";
$db_name = "supjeans";
$db_user = "root";
$db_pass = "";

try {
    $conn = new PDO("mysql:host=".$db_host.";dbname".$db_name,$db_user,$db_pass);
    echo "Connected successfully";

}   catch (PDOException $exc) {
        echo $exc->getTraceAsString();
};
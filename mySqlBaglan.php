<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "e3otomasyon";

$con = mysqli_connect($server, $user, $password, $database);

if(!$con){
    echo "Bağlantı başarısız";
}

?>
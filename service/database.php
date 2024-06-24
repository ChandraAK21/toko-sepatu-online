<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database_name = "toko_sepatu";
$db = mysqli_connect($hostname, $username, $password, $database_name);

if($db->connection_eror){
    echo "rusak nni";
    die("eroe");
}
echo "aman aja";

?>
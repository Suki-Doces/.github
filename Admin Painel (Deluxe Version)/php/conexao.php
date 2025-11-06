<?php 

$host = "Localhost";
$username = "root";
$password = "";
$dbname = "Cliente";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed:" . mysqli_connect_error());
}

echo "Connected sucessfully";
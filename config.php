<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "udemy";

$conn = new PDO("mysql:host=$host;dbname=$dbname;", $username, $password);

if($conn == false)
{
    echo "connection failed";
}



?>
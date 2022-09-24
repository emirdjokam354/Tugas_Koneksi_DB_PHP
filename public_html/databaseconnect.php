<?php

$serverName = "localhost";
$database = "dbuas_2141105";
$username = "root";
$password = "admin";

// create connection
$conn = mysqli_connect($serverName, $username, $password, $database);

// check connection

if(!$conn) {

    die("Connected Failed : " . mysqli_connect_error());
}

echo "Connected Successfully !";
mysqli_close($conn);

?>
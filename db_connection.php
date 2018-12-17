<?php
$servername = "localhost";
$username = "riyadh00";
$password = "";
$database = "c9";
$conn = new mysqli($servername, $username, $password, $database);
// check the connection
if ($conn->connect_error) {
    // exit and kill this process
    echo "Failed to connect to database!";
    die("Connection failed: ");
}
?>

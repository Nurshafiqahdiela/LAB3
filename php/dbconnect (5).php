<?php
$servername = "localhost";
$username   = "saujanae_cakeshopadmin";
$password   = "R^d)ARMTmy1s";
$dbname     = "saujanae_cakeshop";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
    echo "success";
}
?>
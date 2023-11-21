<?php
$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "datatable";

$conn = new mysqli($localhost, $username, $password, $dbname);


if($conn->connect_error) {
    die("connection failed : " . $conn->connect_error);
}

?>
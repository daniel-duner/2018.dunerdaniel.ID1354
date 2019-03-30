<?php
$servername = "localhost";
$username = "danne";
$password = "danne123";
$dbname = "tasty_recipes";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

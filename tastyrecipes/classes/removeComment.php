<?php
session_start();
include 'dbh.php';
$sql = "DELETE FROM comments WHERE c_id=? AND c_user=?";
$stmt = $conn->prepare($sql);
$usr = $_SESSION['user'];
$c_id = $_POST['c_id'];
$stmt->bind_param('ss',$c_id,$usr);
$stmt->execute();
?>
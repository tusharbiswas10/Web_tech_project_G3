<?php

$conn = mysqli_connect("localhost", "root", "", "admindetails");
session_start();

$user_check = $_SESSION['login_user'];

$query = "SELECT User from adminall where User = '$user_check'";
$ses_sql = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['User'];
?>

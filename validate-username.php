<?php
include_once('connect-db.php');
$username = mysqli_real_escape_string($con, $_GET['username']);
$checkuser = mysqli_query($con, "SELECT * FROM user WHERE username = '{$username}'");
echo (mysqli_num_rows($checkuser) != 0) ? "The username has already been taken." : "";  
?>
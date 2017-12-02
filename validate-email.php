<?php
include_once('connect-db.php');
$email = mysqli_real_escape_string($con, $_GET['email']);
$checkemail = mysqli_query($con, "SELECT * FROM user WHERE email = '{$email}'");
echo (mysqli_num_rows($checkemail) != 0) ? "This email has already taken" : "";  
?>
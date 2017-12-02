<?php
include_once('connect-db.php');
session_start();
if(isset($_POST['btn-submit'])){
    $first_name = mysqli_real_escape_string($con, $_POST['first-name']);
    $last_name = mysqli_real_escape_string($con, $_POST['last-name']);
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $e_password = password_hash($password, PASSWORD_DEFAULT);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $contact = mysqli_real_escape_string($con, $_POST['contact']);
    mysqli_query($con, "INSERT INTO user(first_name, last_name, email, contact, username, password)
    values('{$first_name}', '{$last_name}', '{$email}', '{$contact}', '{$username}', '{$e_password}')") or die(mysqli_error($con));
    header("Location: user/index.php");
}
?>
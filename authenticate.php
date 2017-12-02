<?php
include_once('connect-db.php');
session_start();
if(isset($_POST['btn-submit'])){
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $check_username = mysqli_query($con, "SELECT * FROM user WHERE username = '{$username}'");
    if(mysqli_num_rows($check_username) != 0){
        $hashed_password = mysqli_fetch_assoc($check_username)['password'];
        if(password_verify($password, $hashed_password)){
        $fetch_info = mysqli_query($con, "SELECT * FROM user WHERE username = '{$username}' AND password = '{$password}'");
        while($row = mysqli_fetch_assoc($fetch_info)){
            echo "get-info";
            $_SESSION['user'] = array(
            'user-id' => $row['user_id'],
            'first-name' => $row['first_name'],
            'last_name' => $row['last_name'],
            'email' => $row['email'],
            'contact' => $row['contact'],
            'username' => $row['username']);
        }
        header("Location: user/index.php");
    }
    else{
        $_SESSION['error'] = 'Invalid username or password';
        header("Location: login.php");
    }
}
else{
    $_SESSION['error'] = 'Invalid username or password';
    header("Location: login.php");
}
}
?>
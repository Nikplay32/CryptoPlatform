<?php
    session_start();
    require_once 'connect.php';

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $check_user = mysqli_query($conn, "SELECT * FROM `user` WHERE `Username` = '$username' AND `Password` = '$password'");
    
    if (mysqli_num_rows($check_user) > 0) {
        $user = mysqli_fetch_assoc($check_user);
        
        $_SESSION['user'] = [
            "userID" => $user['userID'],
            "username" => $user['username'], 
            "email" => $user['email'],
            "admin" => $user['admin']
        ];
        
        header('Location: ../myFolder/user.html');
    } else {
        $_SESSION['message'] = 'Invalid login or password';
        header('Location: ../myFolder/login.php');
    }
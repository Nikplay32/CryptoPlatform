<?php

    session_start();

    require_once 'connect.php';

    $_SESSION['loggedin'];

    $login = $_POST['login'];
    $password = md5($_POST['password']);

    $check_user = mysqli_query($connect,"SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");

    if(mysqli_num_rows($check_user) > 0) {
        
        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user'] = [
            "id" => $user['id'],
            "full_name" => $user['name'],
            "email" => $user['email']
        ];

        header('Location: ../profile.php');
        $_SESSION['loggedin'] = true;

    } else {
        $_SESSION['message'] = "<span style=
        '
        max-width: 550px;
        position: relative;
        top: 1.5rem;
        right: 3.5rem;
        color: red;'
        >Incorrect login or password</span>";
        $_SESSION['loggedin'] = false;
        header('Location: ../index.php');
    };

    $Login = $_POST['login'];
    $Password = md5($_POST['password']);

    $check_admin = mysqli_query($connect,"SELECT * FROM `admin` WHERE `Login` = '$Login' AND `Password` = '$Password'");

    if($Login === 'Admin') {

        $admin = mysqli_fetch_assoc($check_admin);

        $_SESSION['admin'] = [
            "id" => $admin['id'],
            "full_name" => $admin['name'],
            "email" => $admin['email']
        ];
 
        header('Location: ../admin_panel.php');

    }

?>
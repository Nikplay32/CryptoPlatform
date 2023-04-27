<?php

    session_start();

    require_once 'connect.php';

    $full_name = $_POST['full_name'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];
    $type = 2;

    if($password === $password_confirm) {

        $password = md5($password);

        mysqli_query($connect, "INSERT INTO `users` (`name`, `login`, `email`, `password`, `Type_ID`)
        VALUES ('$full_name','$login','$email','$password', '$type')");
        
        $_SESSION['message'] = "<span style=
        '
        max-width: 550px;
        position: relative;
        top: 1.5rem;
        right: 3.5rem;
        color: green;'
        >Registration completed</span>";
        header('Location: ../index.php');

    } else {
        $_SESSION['message'] = "<span style=
        '
        max-width: 550px;
        position: relative;
        top: 2rem;
        right: 3.5rem;
        color: red;'
        >Passwords are not equal</span>";
        header('Location: ../register.php');
    }
    
?>


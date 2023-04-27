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
            'uID' => $user['id'],
            'name' => $user['name'],
            'username' => $user['login'],
            'email' => $user['email'],
            'isAdmin' => $user['Type_ID']
        ];

        header('Location: ../profile.php');

    } else {
        $_SESSION['message'] = "<span style=
        '
        max-width: 550px;
        position: relative;
        top: 1.5rem;
        right: 3.5rem;
        color: red;'
        >Incorrect login or password</span>";
        header('Location: ../index.php');
    };

?>
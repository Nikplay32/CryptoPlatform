<?php
    session_start();
    require_once "connect.php";

    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $admin = 0;

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION["message"] = 'Try another e-mail!';
        header("Location: ../myFolder/login.php");
        exit();
    }
                    
    if (strlen($password) < 8 && strpbrk($password, "@!#$.,:;()") == false) {
        $_SESSION["message"] = 'Your password is too weak!';
        header("Location: ../myFolder/login.php");
        exit();
    } 
    
    $query = mysqli_query($conn, "SELECT * FROM `user`");
    if(mysqli_num_rows($query) === 0) {
        $admin = 1;
    } else {
        $admin = 0;
    }
    
    $query = mysqli_query($conn, "SELECT * FROM `user` WHERE `Username` = '$username' OR `E-mail`='$email'");
    if (mysqli_num_rows($query) === 0) {
        $password = md5($password);
        
        mysqli_query($conn, "INSERT INTO `user` (`E-mail`, `Username`, `Password`, `admin`) VALUES ('$email', '$username', '$password', '$admin');");
                                    
        $query = mysqli_query($conn, "SELECT * FROM user WHERE username='$username'");
        if (mysqli_num_rows($query) === 1) {
            $_SESSION['message'] = 'You have created an account! You can use Hoboob for free! Log in in it.';
            header("Location: ../myFolder/login.php");
            exit();
        } else {
            $_SESSION["message"] = 'There is a problem!';
            header("Location: ../myFolder/login.php");
            exit();
        }
        header("Location: ../myFolder/login.php");
    }
    else {
        $_SESSION["message"] = 'This username or e-mail is already in use. Try another!';
        header("Location: ../myFolder/login.php");
        exit();
    }
?>
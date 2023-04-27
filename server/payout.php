<?php

    session_start();

    require_once 'connect.php';

    $uID = $_SESSION['user']['uID'];

    $full_name = $_POST['full_name'];
    $card_number = $_POST['card_number'];
    $type = $_POST['option'];

    mysqli_query($connect, "INSERT INTO `subscriptions` (`user_id`, `card_number`, `full_name`, `type`)
    VALUES ('$uID','$card_number','$full_name', '$type')");
        
    $_SESSION['message'] = 'Payment completed';
    header('Location: ../main.php');
?>

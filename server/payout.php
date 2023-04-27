<?php

    session_start();

    require_once 'connect.php';

    $lastid = mysqli_insert_id($connect);

    $full_name = $_POST['full_name'];
    $card_number = $_POST['card_number'];
    $type = $_POST['option'];

    mysqli_query($connect, "INSERT INTO `subscriptions` (`user_id`, `card_number`, `full_name`, `type`)
    VALUES ('$lastid','$card_number','$full_name', '$type')");
        
    $_SESSION['message'] = 'Payment completed';
    header('Location: ../main.php');
?>

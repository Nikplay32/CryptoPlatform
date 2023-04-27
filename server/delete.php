<?php

    session_start();

    require_once 'connect.php';

    $user_id = $_POST['uid'];

    // Delete the user from the database
    $sql = "DELETE FROM users WHERE id = $user_id";
    if (mysqli_query($connect, $sql)) {
        echo "User deleted successfully";
    } 

    // Close the database connection
    header('Location: ../admin_panel.php')

?>
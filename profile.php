<?php
    session_start();

    require_once 'server/connect.php';

    if(!$_SESSION['user']) {
        header('Location: index.php');
    }
    if (isset($_SESSION['user']['isAdmin'])){
        if ($_SESSION['user']['isAdmin'] === '1') {
            header('Location: admin_panel.php');
        }
    }

    $uID = $_SESSION['user']['uID'];

    if(isset($_SESSION['user']['uID'])) {
        $sql = "SELECT * FROM users as u INNER JOIN subscriptions as s ON u.id = s.user_id WHERE s.user_id = '$uID'";
        $result = mysqli_query($connect, $sql);
        $result = mysqli_fetch_assoc($result);
    } else {
        $result = array('type' => 'Free');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/profile.css">
    <title>CryptoSmart</title>
</head>
<style>
body {
    background-image: url(43540.jpg);
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
<body>
    <header style="background-color: #16db93;" class = "p-1 mb-1 text-white">
                <div class = "container">
                    <div class = "row py-2">
                    <div class = "col-sm-6 text-lg-start">
                    <a href = "main.php" class = "navbar-brand text-white fs-1">
                        CryptoSmart <i class = "fa fa-cube"></i>
                    </a>
                </div>
                <div class = "col-sm-6 d-none d-md-flex text-white align-items-center nav-icons justify-content-end">
            </div>
        </div>
    </header>
    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <div class="card p-3 py-4">
                    <div class="text-center">
                        <img src="https://i.imgur.com/bDLhJiP.jpg" width="100" class="rounded-circle">
                    </div>
                    <div class="text-center mt-3">
                        <span class="bg-secondary p-1 px-4 rounded text-white">Pro</span>
                        <h5 class="mt-2 mb-0"><?= $_SESSION['user']['name'] ?></h5>
                        <span><?= $_SESSION['user']['email'] ?></span><br>
                        <span>Subscription Type: <?= isset($result['type']) ? $result['type'] : 'Free';?></span>
                        <div class="px-4 mt-1">
                            <p class="fonts">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                        </div>
                        <div>
                            <a href="crypto.php" class="btn btn-primary" style="margin-right: 15px;">Start Trading</button>
                            <a href="main.php" class="btn btn-outline-primary px-4">Home</button>
                            <a href="server/logout.php" class="btn btn-primary px-4 ms-3">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

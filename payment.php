<?php
    session_start();

    if(!isset($_SESSION['user'])) {
        echo "You need to be logged in to purchase subscription";
        header('Location: index.php');
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "css/bootstrap.css">
    <link rel = "stylesheet" href = "css/payment.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <header class = "p-1 mb-1 bg-success text-white">
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
    <div class="wrapper">
    <form class="form-signin" action="server/payout.php" method="post">
        <h2 class="form-signin-heading">Payment Form</h2>
        <div class="inner-addon left-addon">
        <label class="control-label">Card Owner</label>
            <i class="glyphicon fa fa-id-card"></i>
            <input type="text" class="form-control" name="full_name" placeholder="Enter card holder data.." required="" autofocus=""/>
        </div>
        <div class="inner-addon left-addon">
        <label class="control-label">Card Number</label>
            <i class="glyphicon fa fa-credit-card"></i>
            <input type="text" class="form-control" name="card_number" placeholder="Enter card number.." required="" autofocus=""/>
        </div>
        <label class="control-label">Expiration Date</label>
        <div class="input-group"><input type="number" placeholder="MM" name="date" class="form-control" required /> <input type="number" placeholder="YY" name="" class="form-control" required /></div>
        <label class="control-label">CVV</label>
        <input type="text" required class="form-control "/>
        <select name="option" class="form-select" aria-label="Default select example">
            <option selected>Select your subscription type</option>
            <option value="Month subscription">Month subscription - 19.99$</option>
            <option value="Year subscription">Year subscription - 99.99$</option>
        </select>
        <button class="btn mt-4 mb-2 " type="submit">Submit!</button>
        <?php 
            if(isset($_SESSION['message'])) {
                echo $_SESSION['message']; 
            }
            unset($_SESSION['message']);
        ?>
    </form>
    </div>
</body>
</html>

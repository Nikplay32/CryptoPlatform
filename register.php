<?php
    session_start();

    if(isset($_SESSION['user'])) {
        header('Location: profile.php');
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "css/bootstrap.css">
    <link rel = "stylesheet" href = "css/register.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
    <header class = "p-1 mb-1 navbar text-white">
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
    <form class="form-signup" action="server/signup.php" method="post">
        <h2 class="form-signup-heading">Registration Form</h2>

        <div class="inner-addon left-addon">
        <label class="control-label">Please fill out all blanks to register in our platform</label>
            <i class="glyphicon fa fa-archive"></i>
            <input type="text" class="form-control" name="full_name" placeholder="Please enter your full name.." required="" autofocus=""/>
        </div>
        <div class="inner-addon left-addon">
        <label class="control-label">Login</label>
            <i class="glyphicon fa fa-user"></i>
            <input type="text" class="form-control" name="login" placeholder="Please enter your Login.." required="" autofocus=""/>
        </div>
        <div class="inner-addon left-addon">
        <label class="control-label">E-mail</label>
            <i class="glyphicon fa fa-inbox"></i>
            <input type="email" class="form-control" name="email" placeholder="Please enter your E-mail.." required="" autofocus=""/>
        </div>
        <div class="inner-addon left-addon">
        <label class="control-label">Password</label>
            <i class="glyphicon fa fa-lock"></i>
            <input type="password" class="form-control" name="password" placeholder="Please enter your password.." required="" autofocus=""/>
        </div>
        <div class="inner-addon left-addon">
        <label class="control-label">Password Check</label>
            <i class="glyphicon fa fa-check-circle"></i>
            <input type="password" class="form-control" name="password_confirm" placeholder="Please enter your password again.." required="" autofocus=""/>
        </div>
        <button class="btn btn-lg btn-primary mb-3 " type="submit">Submit!</button>
        <?php 
            if(isset($_SESSION['message'])) {
                echo $_SESSION['message']; 
            }
            unset($_SESSION['message']);
        ?>
        <p class="account-signup text-white mt-3">You already have an account - <a href="./index.php">Login Now</a>
    </form>
    </div>
</body>
</html>

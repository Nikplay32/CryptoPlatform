<?php
  session_start();

  require_once 'server/connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel = "stylesheet" href = "css/bootstrap.css">
    <title>Document</title>
</head>
<body>
<style>
</style>
<div class="container-fluid fill">
  <div class="row">
    <div class="col bg-dark" style="height: 100vh;">
    <i class="fa fa-cube fa-8x m-5" style="color:green;"></i>
    <p class="card-text m-1 pb-4" style="color:white;">Welcome to Admin Panel. Here you can manage CryptoSmart Database</p>
        <ul class="nav nav-pills flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="#">Admin Panel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="main.php">Home page</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="payment.php">Payment page</a>
          </li>
       </ul>
      </div>
    
    <div class="col-md-10">
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Main</a>
     <!-- Hidden Mobile Toggle Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
     <!-- Nav main container -->
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Admin<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="server/logout.php">Logout</a>
      </li>
      </li>
    </ul>
  </div>
</nav>
      <!-- END OF NAVBAR -->
    <div class="row">
      <div class="col-md-12">
      <div class="card-deck p-5">
        <div class="card bg-warning text-white">
          <div class="card-header">Data Manage</div>
            <div class="card-body">
            <h4 class="card-title">You can access to all website pages</h4>
            <p clas="card-text"></p>
          </div>
        </div>
        <div class="card bg-success text-white">
          <div class="card-header"></div>
            <div class="card-body">
            <h4 class="card-title">Data Manage</h4>
            <p clas="card-text">You can manage and delete old users</p>
          </div>
        </div>
        </div>
    </div>
      </div>
      <!-- Progress Bars -->
   
      <!-- Table -->
      <table class="table table-hover w-100">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
         </tr>
        </thead>
        <tbody>
        <?php  

        $sql = "SELECT * FROM users";
        $result = mysqli_query($connect, $sql);

        $users = mysqli_fetch_assoc($result);
        while ($users = mysqli_fetch_assoc($result)){ ?>
          <tr>
            <th><?= $users['id'] ?></th>
            <td><?= $users['name'] ?></td>
            <td><?= $users['email'] ?></td>
            <td><form action="server/delete.php" method="POST">
                <input type="hidden" name="uid" value="<?= $users['id']?>">
                 <input type="submit" value="Delete">
             </form>
            </td>
          </tr>
        <?php } ?> 
        </tbody>
      </table>   
</div>
</div>
</div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "css/bootstrap.css">
    <title>Document</title>
</head>
<body>
<div class="container-fluid fill">
  <div class="row">
    <div class="col-md-2 bg-dark">
      <img class="img-fluid p-4" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/529582/Nolan-Wagner-Logo.png"/>
        <ul class="nav nav-pills flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="#">Admin Panel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="main.php">Home page</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php">Login page</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Payment page</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Subscription content</a>
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
        <a class="nav-link" href="#">Logout</a>
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
          <div class="card-header">Lorem Ipsum</div>
            <div class="card-body">
            <h4 class="card-title">Praesent convallis</h4>
            <p clas="card-text">This is a wider card with supporting text below</p>
          </div>
        </div>
        <div class="card bg-success text-white">
          <div class="card-header">Lorem Ipsum</div>
            <div class="card-body">
            <h4 class="card-title">Praesent convallis</h4>
            <p clas="card-text">This is a wider card with supporting text below</p>
          </div>
        </div>
        </div>
    </div>
      </div>
      <!-- Progress Bars -->
   
      <!-- Table -->
      <table class="table table-hover">
        <thead>
          <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Email</th>
         </tr>
        </thead>
        <tbody>
          <tr>
            <th>ID</th>
            <td></td>
            <td>Smith</td>
            <td>@Jsmith</td>
          </tr>
          <tr>
            <th>2</th>
            <td>Bill</td>
            <td>Johnson</td>
            <td>@Bill</td>
          </tr>
          <tr>
            <th>3</th>
            <td>Mike</td>
            <td>Matthews</td>
            <td>@MM</td>
          </tr>
            <tr>
            <th>4</th>
            <td>Kyle</td>
            <td>Grover</td>
            <td>@kman</td>
          </tr>
            <tr>
            <th>5</th>
            <td>Ted</td>
            <td>Flan</td>
            <td>@Ted</td>
          </tr>
        </tbody>
      </table>   
</div>
</div>
</div>
</body>
</html>
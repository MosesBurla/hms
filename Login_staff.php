<!DOCTYPE html>
<?php

include("server.php");

if(!isset($_SESSION['phone']))
{
?>
<html>
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Notification Board</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">

<link rel="stylesheet" href="css/mystyle.css" type="text/css">
<link rel="stylesheet" type="text/css" href="css/responsive.css" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="js/jquery.min.js"></script>
  <script src="jquery/jquery/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style>

  </style>
</head>
<body class="bg-1">

<!-- Navbar -->
<nav class="navbar navbar-defaul">
  <div class="container">
    <div class="navbar-header">
<a class="logo-mobile" href="index.html"><img src="imgs/srkr.png" alt=""></a>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

    </div>
    <div class="collapse navbar-collapse"id="myNavbar">
          <a class="none" href="index.html"><img src="imgs/srkr.png" alt=""></a>
      <ul class="nav navbar-nav b navbar-right">
        <li><a href="index.php">HOME</a></li>
        <li><a href="reg_staff.php">REGISTER</a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- Fibrst Container -->
<div class="container">
  <div class="row">
<div class="col-sm-12">
  <div class="container bg-1";>
    <div class="row">
      <div class="col-sm-3">
        </div>
      <div class="col-sm-6" style="padding-top:70px">
        <form class="form" method="post" action="" onsubmit="return validatestaff()">
		<div id="errors" style="color:red;margin-left:20px;">
		  </div>
<?php
foreach($success as $ss ){
  echo "<P style='color:red;margin-left:20px;'>$ss</P>";
}?>
          <h3>staff login</h3>

          <div class="form-group">
            <input type="text" id="phone" placeholder="Phone Number" class="form-control formcontrol" name="phone">
          </div>
          <div class="form-group">
               <input type="password" id="pass" placeholder="password" class="form-control formcontrol" name="password">
          </div>
          <div class="form-group text-center">
               <input type="submit"  value="Login" name="Login_staff"class="btn btn-success btn-lg">
          </div>
          <h5><a href="Login_student.php">students login</a></h5>
        </form>
      </div>
      <div class="col-sm-3">
        </div>
    </div>
  </div>
</div>
  </div>
</div>

<!-- Third Container (Grid) -->


<!-- Footer -->
<footer class="container-fluid a bg-4 text-center">
  <p><a href="https://www.srkr.com">&reg www.srkrec.ac.in&reg </a></p>
</footer>
  <script type="text/javascript" src="js\myscript.js"></script>
</body>
</html>
<?php }
else {
header('location:staff_home.php');
} ?>

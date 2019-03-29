<?php include ("server.php");
if(!isset($_SESSION['phone']))
{?>
<!DOCTYPE html>
<html>
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>HM SYSTEM</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/mystyle.css" type="text/css">
<link rel="stylesheet" type="text/css" href="css/style.css" />
   <link rel="stylesheet" type="text/css" href="css/responsive.css" />
<script type="text/javascript" src="jquery/jquery.js"></script>

  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="jquery.min.j"></script>
  <script src="js/bootstrap.js"></script>
  <style>

  </style>
</head>
<body  style="background-image:url(imgs/doctor.png);" class="bg-1">
<nav class="navbar navbar-defaul">
  <div class="container">
    <div class="navbar-header">
       <a class="logo-mobile" href="#"><img src="imgs/doctor_logo.png" alt=""></a>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

    </div>
    <div class="collapse navbar-collapse"id="myNavbar">
          <a class="none" href="#"><img src="imgs/doctor_logo.png" alt=""></a>
      <ul class="nav navbar-nav b navbar-right">
          <li><a href="op1.php">Patients OP FORM</a></li>
        <li><a href="index0.php">Hospital</a></li>

      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <div class="row">
<div class="col-sm-12">
  <div class="container bg-1";>

<div class="row">

</div>
<div class="row">
  <div class="col-xmx-12 text-cente" id="wowslider-container1">
  	<div class="ws_images"><ul>
  		<li><img src="imgs/1.png" alt="" title="" id=""/></li>
  		<li><a><img src="imgs/2.png" alt="" title="" id=""/></a></li>

  	</ul>
  </div>
  	<script type="text/javascript" src="js/slider.js"></script>
  	<script type="text/javascript" src="js/script.js"></script>
  </div>
    </div>
  </div>
</div>
  </div>
</div>
  </div>
</div>
<footer class="container-fluid a bg-4 text-center">
  <p><a href="https://www.srkr.com">&reg www.srkrec.ac.in&reg </a></p>
</footer>

</body>
</html>
<?php }
else {
  if($_SESSION['job']==='1')
header('location:doc_main.php');
elseif ($_SESSION['job']==='0')
  header('location:main.php');
  elseif ($_SESSION['job']==='3')
    header('location:rec_main.php');
    elseif ($_SESSION['job']==='4')
      header('location:cas_main.php');

} ?>

<!DOCTYPE html>
<?php include 'server.php';
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
  <script src="jquery/jquery/jquery.min.js"></script>
  <script src="js/myscript.js"></script>
  <script src="js/bootstrap.min.js"></script>

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
    <div class="collapse navbar-collapse" id="myNavbar">
          <a class="none" href="index.html"><img src="imgs/srkr.png" alt=""></a>
      <ul class="nav navbar-nav b navbar-right">
        <li><a href="index.php">HOME</a></li>
        <li><a href="Login_student.php">LOGIN</a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- Fibrst Container -->
<div class="container">
  <div class="row">
    <div class="col-sm-3">
    </div>
<div class="col-sm-6">
  <div class="bg-1";>
        <div class="tab-content">
               <div style="margin:1px auto">
                 <form class="form tab-content" id="myForm" action="reg_std.php" method="post" onblur="return my1Function()">
               <?php
foreach($success as $ss ){
  echo "<P style='color:red;margin-left:20px;'>$ss</P>";
}?>                   <div id="step1" class="tab-pane fade in active">
               <div class="form-group" >
                 <div class="row">

                   <h3>student registration</h3>
                   <div class="col-sm-6">
                       <input type="text" placeholder="First" class=" form-control formcontrol" name="first" required>
                   </div>
                   <div class="col-sm-6">
                       <input type="text" placeholder="Last" class="form-control formcontrol" name="last" required>
                   </div>
                 </div>
               </div>
                   <div class="form-group">
                        <input type="text" name="id" class="form-control formcontrol" size=20 maxlength=12 onkeypress='return isNumberKey(event)' placeholder="Register ID" required>
                   </div>
                   <div class="form-group" >
                       <input type="text" placeholder="Phone" class=" form-control formcontrol" name="phone" size=20 maxlength=10 onkeypress='return isNumberKey(event)' required>
                   </div>
                   <div class="form-group">
                        <input type="password"  placeholder="password" class="form-control formcontrol" name="pwd" required>
                   </div>
                   <div class="form-group">
                        <input type="password"  placeholder="confirm password" class="form-control formcontrol" name="second_pwd" required>
                   </div>

               </div>
                 <div class="form-group text-right">
                   <a href="reg_staff.php" class="pull-left">click hear for staff Register</a>
                          <button type="submit" value="Register" name="reg_std"  id="subnewtide" class="btn btn-success btn-lg">Register</button>
            </div>
            </div>
               </div>
  </form>
</div>
    </div>
</div>
<div class="col-sm-3">
</div>
  </div>
</div>

<!-- Third Container (Grid) -->



</body>
</html>
<?php }
else {
header('location:home.php');
} ?>

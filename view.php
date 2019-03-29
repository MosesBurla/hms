<?php include ("server.php");
if((isset($_SESSION['ddd']) && isset($_SESSION['phone']) && $_SESSION['job']==='3')|| $_SESSION['job']==='0')
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
<script type="text/javascript" src="js/myscript.js"></script>

  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="jquery.min.j"></script>
  <script src="js/bootstrap.js"></script>

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
      <li><a><form class="" action="server.php" method="post">
<b><button style="background:transparent;border: none;font-size: large;font-variant: all-petite-caps;font-style: normal;" type="submit" name="logout">logout</button></b>
</form></a></li>
      </ul>
    </div>
  </div>
</nav>
<?php
if($_SESSION['ddd']==='1')
{
 if($row=mysqli_fetch_array($result))
{
echo "
<div class='container' style='position:relative;' id='printableArea'>
      <div style='color:black;'>
          <div class='row'>
              <div class='col-lg-3'>
              </div>
              <div class='col-lg-6'>

                  <div class='row form' >
                  <h3 class='text-center' style='color:black;'>Patient OP</h3>
                  <hr>
                  <div class='col-lg-6'>
                  <h4><b>Name :  </b>".$row['name']."</h4>
                  <h4><b>Phone :  </b>".$row['phone']."</h4>
                  <h4><b>Issue  : </b>".$row['disease']."</h4>
                  <h4><b>Address  : </b>".$row['address']."</h4>
                  <h4><b>Test Doctor  : </b>".$row['under_take']."</h4>
                  <h4><b>OP fee  : </b>".$row['fee']."/-</h4>
                  <h4><b>OP Date : </b>".$row['date_join']."</h4>

                  </div>
                  <div class='col-lg-6'>
                  <h4><b>Summary : </b>".$row['descrip']."</h4>
                    <h4><b>Operation : </b>".$row['operation']."</h4>
                      <h4><b>Operation Name : </b>".$row['oper_name']."</h4>
                      <h4><b>Operation Fee : </b>".$row['oper_fee']."/-</h4>
                      <h4><b>Tablets : </b>".$row['tabs']."</h4>
                      <h4><b>Doctor : </b>".$row['seen']."</h4>
                  </div>
                  </div>
              </div>
              <div class='col-lg-3'>
              </div>
          </div>

      </div>
</div>
";

}
}
if($_SESSION['ddd']==='2')
{
  echo "<h3 class='text-center' style='color:black;'>Patient details are successfully deleted.</h3>";
}
 ?>

<div class="container">
   <a href="rec_main.php" class="pull-left btn btn-success btn-lg">Back</a>
</div>
<div class="container">
   <button onclick="myFunction('printableArea')" class="pull-right btn btn-success btn-lg">print</a>
</div>
  </div>
</div>
<footer class="container-fluid a bg-4 text-center" style="margin-top:80px;">
  <p><a href="https://www.gvit.com">&reg www.gvit.ac.in&reg </a></p>
</footer>

</body>
</html>
<?php }
else {
header('location:rec_main.php');
} ?>

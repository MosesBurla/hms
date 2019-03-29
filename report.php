<?php include ("server.php");
if($_SESSION['job']==='4')
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
<body  style="background-image:url(imgs/doctor.png);" class="bg-1" >
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

<div class="container">

<div style=";
        height: 20.7cm;
        margin-left: 0px;
        border-color:black;
        border-width:1px;
        border-style:solid;
        padding: 70px 70px 70px 70px;
        ;">
<h2 class="text-center"><b><u>PATIENT REPORT</u></b></h2>
        <?php
        if($_SESSION['ddd']==='1')
        {
         if($row=mysqli_fetch_array($result))
        {
          ?>
          <div class="row">
              <div class="col-lg-6" style="float:left">
                <h4 style="float:;"><b>Name :  </b><?php echo $row['name']; ?></h4>
                <h4 ><b>Phone :  </b><?php echo $row['phone']; ?></h4>
                <h4><b>Operation_fee  : </b><?php echo $row['oper_fee']; ?></h4>
            <h4><b>Additional_charger  : </b><?php echo ($adf*300); ?>/-</h4>
            <h4><b>medical_bill  : </b><?php echo $m; ?></h4>
            <h4><b>OP fee  : </b><?php echo $row['fee']; ?>/-</h4>
            <h4><b>OP Date : </b><?php echo $row['date_join']; ?></h4>

              </div>
              <div class="col-lg-2">

              </div>
              <div class="col-lg-4" style="float:right;">
                <h4><b>Date :  </b><?php echo $row['date_join']; ?></h4>

                <h4><b>Paid Amount : </b><?php echo $row['paid_amount']; ?>\-</h4>
                <h4><b>Due Amount : </b><?php echo $row['due_amount']; ?>\-</h4>
                  <h4><b>Payment Status : </b><?php $row['pay_status']; ?></h4>

              </div>
          </div>
          <?php ; ?>
<div class="container">
  <h2><b><u>Daily Obsevation:</u></b></h2>
</div>
          <table class="table table-striped" style="color:black;margin-top:10px;">
            <thead>
            <tr>
              <th>Date</th>
              <th>Medican</th>
              <th>Cost</th>
            </tr>

            <?php   while($rr=mysqli_fetch_array($meda))
              {

              echo "<tr>
                <td>".$rr['date']."</td>
                <td>".$rr['medican_name']."</td>
                <td>".$rr['charges']."</td>
              </tr>";
            }?>
          </table>
          <?php
        }
        }
        ?>
        <h3><b>Total Amount : </b><?php echo $row['total_fee']; ?>\-</h3>
        <h3 style="float:right;"><b>Doctor Signature</b></h3>
<h2>Payment by <?php echo $row['pay_by']; ?></h2>
</div>
</div>


<div class="container">
   <a href="rec_main.php" class="pull-left btn btn-success btn-lg">Back</a>
</div>
<div class="container">
   <button onclick="myFunction()" class="pull-right btn btn-success btn-lg">print</a>
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

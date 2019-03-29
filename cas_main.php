<?php include ("server.php");
if($_SESSION['job']==='4')
{
?>

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
      <!--  <li><a><button style="margin: none;background:transparent;border: none;font-size:16px;font-style: normal;" class="tablinks active" onclick="openCity(event, 'Home')">Home</button></a></li>
        <li><a><button style="margin: none;background:transparent;border: none;font-size:16px;font-style: normal;" class="tablinks " onclick="openCity(event, 'London')">Employee</button></a></li>
-->

        <li><a><button style="background:transparent;border: none;font-size:16px;font-style: normal;" class="tablinks" onclick="openCity(event, 'Tokyo')">Patients</button></a></li>
          <li><a><button style="background:transparent;border: none;font-size:16px;font-style: normal;" class="tablinks" onclick="openCity(event, 'Paris')">Discharge</button></a></li>
        <li><a><form class="" action="server.php" method="post">
<b><button style="background:transparent;border: none;font-size: large;font-variant: all-petite-caps;font-style: normal;" type="submit" name="logout">logout</button></b>
</form></a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
<h2 class="text-center";>Welcome to cashier Panel </h2>
  </div>

  <div id="Home" class="tabcontent text-center">
    <div class="container form" style="margin-top:50px;margin-bottom:90px;">
      <div class="row">
        <div class="col-lg-6 text-center moe">
          <h3><?php
          $sql= "select count(*) as count_patients from staff1 where job=1;";
          $result=mysqli_query($connect,$sql);
          $row=mysqli_fetch_assoc($result);
          echo "Total number of Doctors : ".$row['count_patients']."";
          ?></h3>
        </div>
        <div class="col-lg-6 text-center moe1">
          <h3><?php
          $sql= "select count(*) as count_patients from staff1 where job!=1;";
          $result=mysqli_query($connect,$sql);
          $row=mysqli_fetch_assoc($result);
          echo "Total number of Employess : ".$row['count_patients']."";
          ?></h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 text-center moe1">
          <h3><?php
          $sql= "select count(*) as count_patients from patients;";
          $result=mysqli_query($connect,$sql);
          $row=mysqli_fetch_assoc($result);
          echo "Total number of Patients : ".$row['count_patients']."";
          ?></h3>
        </div>
        <div class="col-lg-6 text-center moe">
          <h3><?php
          $sql= "select sum(fee+oper_fee) as count_patients from patients;";
          $result=mysqli_query($connect,$sql);
          $row=mysqli_fetch_assoc($result);
          echo "Total Amount : ".$row['count_patients']."/-";
          ?></h3>
        </div>
      </div>
    </div>
  </div>

<div id="London" class="tabcontent" style="display:none;">
  <div class="container form" style="margin-top:90px;margin-bottom:90px;">
    <div class="row text-center" style="background:transparent; ">
      <h3>add/remove Employee</h3>
      <div class="col-lg-6 ">
      <h2><a href="doc_join.php"><button class="btn-info">add</button></a></h2>
      </div>
      <div class="col-lg-6 ">
      <h2><button class="tablinks1 btn-danger " onclick="openCity1(event, 'remove1')">remove</button></h2>
      </div>
      <div id="add1" class="tabcontent1 text-center" style="display:none;">
          <form class="form" action="index.html" method="post">
            <input class="form-control formcontrol" type="number" name="number" value="" placeholder="ENTER NUMBER">
            <input type="submit" name="add_doctor" value="submit" style="color:red;margin-top:20px;">
          </form>
        </div>
        <div id="remove1" class="tabcontent1 text-center" style="display:none;">
          <form class="form" action="" method="post" name="remove">
            <input class="form-control formcontrol" type="number" name="number" value="" placeholder="ENTER NUMBER TO REMOVE DOCTOR" required>
            <input type="submit" name="remove" value="submit" style="color:blue;margin-top:20px;">
          </form>

          </div>
    </div>
  </div>
</div>

<div id="Paris" class="tabcontent" style="display:none;">
  <?php
  mysqli_query($connect,"update patients set due_amount<=(total_fee-paid_amount)");
    mysqli_query($connect,"update patients set pay_status='PAID' where total_fee=paid_amount");
  $sql= "select * from discharge";
  $result=mysqli_query($connect,$sql);
  ?></h3>
  <div class="container" style="color:black;font-size:18px;font-family:arial;">
    <form name='view' method='post' action='payment.php' class="text-center">
     <td>
            <input type="text"  placeholder="Enter Phone Number" name="phone" required>
       <input type='submit' class='btn-info' value='view' name='view'>
     </form>
    <table class="table table-striped">
      <thead>
      <tr>
        <th>Name</th>
        <th>Phone</th>
        <th>Date_join</th>
        <th>Total Fee</th>
        <th>Paid Amount</th>
        <th>Due Amount</th>
        <th>Payment Status</th>
        <th>View</th>
        <th>Report</th>
      </tr>
      <?php

      while($row = mysqli_fetch_assoc($result))
      {
  echo "<tr><td>".$row['name']."</td>
              <td>".$row['phone']."</td>
              <td>".$row['date_join']."</td>
              <td>".$row['total_fee']."</td>
              <td>".$row['paid_amount']."</td>
              <td>".$row['due_amount']."</td>
              <td>".$row['pay_status']."</td>
              <form name='view' method='post' action='payment0.php'>
               <td><input type='hidden' name='phone' value=".$row['phone']." /><input type='submit' class='btn-info' value='view' name='view1'></td>
              </form>
              <form name='view' method='post' action='report.php'>
               <td><input type='hidden' name='phone' value=".$row['phone']." /><input type='submit' class='btn-success' value='Report' name='report'></td>
              </form>

  </tr>";
      }
       ?>
    </table>
    <div class="container" style="margin-bottom:30px;">
       <a href="rec_main.php" class="pull-left btn btn-success btn-lg">Back</a>
    </div>
  </div>
    </div>
  </div>
</div>

<div id="Tokyo" class="tabcontent" style="display:none;">
  <?php

  mysqli_query($connect,"update patients set due_amount<=(total_fee-paid_amount)");
    mysqli_query($connect,"update patients set pay_status='PAID' where total_fee=paid_amount");

  $sql= "select * from patients;";
  $result=mysqli_query($connect,$sql);
  ?></h3>
  <div class="container" style="color:black;font-size:18px;font-family:arial;">
    <form name='view' method='post' action='payment.php' class="text-center">
     <td>
            <input type="text"  placeholder="Enter Phone Number" name="phone" required>
       <input type='submit' class='btn-info' value='view' name='view'>
     </form>
    <table class="table table-striped">
      <thead>
      <tr>
        <th>Name</th>
        <th>Phone</th>
        <th>Date_join</th>
        <th>Total Fee</th>
        <th>Paid Amount</th>
        <th>Due Amount</th>
        <th>Payment Status</th>
        <th>View</th>
        <th>Delete</th>
      </tr>
      <?php

      while($row = mysqli_fetch_assoc($result))
      {
  echo "<tr><td>".$row['name']."</td>
              <td>".$row['phone']."</td>
              <td>".$row['date_join']."</td>
              <td>".$row['total_fee']."</td>
              <td>".$row['paid_amount']."</td>
              <td>".$row['due_amount']."</td>
              <td>".$row['pay_status']."</td>
              <form name='view' method='post' action='payment.php'>
               <td><input type='hidden' name='phone' value=".$row['phone']." /><input type='submit' class='btn-info' value='view' name='view'></td>
               </form>
               <form name='view' method='post' action='cas_main.php'>
               <td><input type='hidden' name='phone' value=".$row['phone']." /><input type='submit' class='btn-danger' value='Discharge' name='Discharge'></td>
              </form>
  </tr>";
      }
       ?>
    </table>
    <div class="container" style="margin-bottom:30px;">
       <a href="rec_main.php" class="pull-left btn btn-success btn-lg">Back</a>
    </div>
</div>
</div>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>

<script>
function openCity1(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent1");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks1");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>

<script>
function openCity2(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent2");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks2");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
  </div>
</div>
<footer class="container-fluid a bg-4 text-center">
  <p><a href="https://www.srkr.com">&reg www.srkrec.ac.in&reg </a></p>
</footer>

</body>
</html>
<?php }
elseif($_SESSION['job']==='0')
  header('location:main.php');
  elseif($_SESSION['job']==='1')
  header('location:doc_main.php');
  elseif($_SESSION['job']==='3')
  header('location:rec_main.php');
  else {
    header('location:index.php');
  }
 ?>

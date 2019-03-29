<?php include ("server.php");
if($_SESSION['job']==='3')
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
        <li><a><button style="margin: none;background:transparent;border: none;font-size:16px;font-style: normal;" class="tablinks active" onclick="openCity(event, 'Home')">Home</button></a></li>
        <li><a href="op.php"><button style="background:transparent;border: none;font-size:16px;font-style: normal;" class="tablinks">+NEW OP</button></a></li>
        <li><a><button style="background:transparent;border: none;font-size:16px;font-style: normal;" class="tablinks" onclick="openCity(event, 'Tokyo')">Patients</button></a></li>
        <li><a><button style="background:transparent;border: none;font-size:16px;font-style: normal;" class="tablinks" onclick="openCity(event, 'Alloc')">Alloc_rooms</button></a></li>
        <li><a><button style="background:transparent;border: none;font-size:16px;font-style: normal;" class="tablinks" onclick="openCity(event, 'Medican')">Medican</button></a></li>

        <li><a><form class="" action="server.php" method="post">
<b><button style="background:transparent;border: none;font-size: large;font-variant: all-petite-caps;font-style: normal;" type="submit" name="logout">logout</button></b>
</form></a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container" >
<h2 class="text-center";>Receptionist panel </h2>
<hr style="border-color:#0ea3e1;border-width:1px">
  </div>
  <?php
  foreach($success as $ss ){
  echo "<P style='color:green;margin-left:20px;'>$ss</P>";
  }?>
  <div id="Home" class="tabcontent text-center">
    <div class="container form" style="margin-top:0px;margin-bottom:70px;">
      <div class="row">
        <div class="col-lg-6 text-center moe">
          <h2><?php
          $sql= "select count(*) as count_patients from patients;";
          $result=mysqli_query($connect,$sql);
          $row=mysqli_fetch_assoc($result);
          echo "Total number of patients : ".$row['count_patients']."";
          ?></h2>
        </div>
        <div class="col-lg-6 text-center moe1">
          <h2><?php
          $sql= "select sum(fee) as count_patients from patients;";
          $result=mysqli_query($connect,$sql);
          $row=mysqli_fetch_assoc($result);
          echo "Total OP amount : ".$row['count_patients']."";
          ?></h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 text-center moe1">
          <h2>
            <?php
            $sql= "select * from rooms where alloc=!0;";
            $result=mysqli_query($connect,$sql);
            ?>
            <div style="color:black;font-size:18px;font-family:arial;">
              <h3>Allocated rooms details</h3>
<table class="table table-striped">
  <thead>
  <tr>
    <th>Patient_no</th>
    <th>Ward_no</th>
    <th>Room_no</th>
    <th>Bed_no</th>
  </tr>
  <?php

  while($row = mysqli_fetch_assoc($result))
  {
echo "<tr><td>".$row['phone']."</td>
          <td>".$row['ward_no']."</td>
          <td>".$row['room_no']."</td>
          <td>".$row['bed_no']."</td>
</tr>";
  }
   ?>
</table>
</div>
          </h2>
        </div>
        <div class="col-lg-6 text-center moe">
          <h2><?php
          $sql= "select count(*) as count_patients from rooms where alloc=0;";
          $result=mysqli_query($connect,$sql);
          $row=mysqli_fetch_assoc($result);
          echo "Total Beds Available : ".$row['count_patients']."";
          ?></h2>
        </div>
      </div>
    </div>
  </div>


<div id="Medican" class="tabcontent" style="display:none;">
  <div class="container">
    <div class="row">
<div class="col-sm-3">

</div>
  <div class="col-sm-6">
    <div class="bg-1";>
          <div class="tab-content">
                 <div style="margin:1px auto">
                   <form class="form tab-content" name="reg_staff" id="myForm" action="" method="post">
                       <div class="row">
                         <div class="col-lg-12">
                           <div id="step1" class="tab-pane fade in active">
                             <div class="form-group">
                                  <input type="text"  placeholder="ENTER PATIENT NO" class="form-control formcontrol" name="phone" required>
                             </div>
                             <div class="form-group">
                                  <input type="text"  placeholder="Medican" class="form-control formcontrol" name="Medican" required>
                             </div>
                             <div class="form-group">
                                  <input type="number"  placeholder="Amount" class="form-control formcontrol" name="Amount" required>
                             </div>
                           <div class="form-group">
                           </div>

                           </div>
                         </div>

                       </div>
                   <div class="form-group text-right">
                     <a href="main.php" class="pull-left btn btn-success btn-lg">Back</a>
                            <button type="submit" value="reg_staff" name="daily_med" class="btn btn-success btn-lg" >Submit</button>
              </div>
    </form>
  </div>
      </div>
  </div>

    </div>
  </div>
  </div>
    </div>
  </div>
</div>

<div id="Tokyo" class="tabcontent" style="display:none;">

  <h3><?php
  $sql= "select name,phone,date_join,disease,address,fee,under_take from patients;";
  $result=mysqli_query($connect,$sql);
  ?></h3>
  <div class="container" style="color:black;font-size:18px;font-family:arial;">
    <table class="table table-striped">
      <thead>
      <tr>
        <th>Name</th>
        <th>Phone</th>
        <th>Date_join</th>
        <th>Disease</th>
        <th>Address</th>
        <th>Fee</th>
        <th>Under_take</th>
        <th>View</th>
      </tr>
      <?php

      while($row = mysqli_fetch_assoc($result))
      {
  echo "<tr><td>".$row['name']."</td>
              <td>".$row['phone']."</td>
              <td>".$row['date_join']."</td>
              <td>".$row['disease']."</td>
              <td>".$row['address']."</td>
              <td>".$row['fee']."</td>
              <td>".$row['under_take']."</td>
              <form name='view' method='post' action='view.php'>
               <td><input type='hidden' name='phone' value=".$row['phone']." /><input type='submit' class='btn-info' value='view' name='view'></td>
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
<div id="Alloc" class="tabcontent" style="display:none;">
  <div class="container">
    <div class="row">
<div class="col-sm-3">

</div>
  <div class="col-sm-6">
    <div class="bg-1";>
          <div class="tab-content">
                 <div style="margin:1px auto">
                   <form class="form tab-content" name="reg_staff" id="myForm" action="" method="post" onblur="return my1Function()">

                  <?php $sql="select bed_no from rooms where alloc=0";
                  $result=mysqli_query($connect,$sql);
                   ?>
                       <div class="row">
                         <div class="col-lg-12">
                           <div id="step1" class="tab-pane fade in active">
                             <div class="form-group">
                                  <input type="text"  placeholder="ENTER PATIENT NO" class="form-control formcontrol" name="phone" required>
                             </div>
                           <div class="form-group">
                             <select class="form-control formcontrolhyd" name="bed_no" style="color:black;">
                               <optgroup label="Available Beds" >
                                 <?php while($row = mysqli_fetch_assoc($result))
                                 {?>
                                 <h2><option value="<?php echo $row['bed_no']; ?>"><?php echo $row['bed_no']; ?></option></h2>
                               <?php } ?>
                               </optgroup>
                             </select>
                           </div>

                           </div>
                         </div>

                       </div>
                   <div class="form-group text-right">
                     <a href="main.php" class="pull-left btn btn-success btn-lg">Back</a>
                            <button type="submit" value="reg_staff" name="alloc" class="btn btn-success btn-lg" >Allocate</button>
              </div>
    </form>
  </div>
      </div>
  </div>

    </div>
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
else {
  if($_SESSION['job']==='1')
header('location:doc_main.php');
elseif ($_SESSION['job']==='4')
  header('location:cas_main.php');
elseif ($_SESSION['job']==='0')
  header('location:main.php');
  else {
    header('location:index.php');
  }
} ?>

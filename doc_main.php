<?php include ("server.php");
if($_SESSION['job']==='1')
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
        <li><a><button style="margin: none;background:transparent;border: none;font-size:16px;font-style: normal;" class="tablinks " onclick="openCity(event, 'London')">Death</button></a></li>
        <li><a><button style="background:transparent;border: none;font-size:16px;font-style: normal;" class="tablinks" onclick="openCity(event, 'Paris')">Birth</button></a></li>
        <li><a><button style="background:transparent;border: none;font-size:16px;font-style: normal;" class="tablinks" onclick="openCity(event, 'Tokyo')">Patients</button></a></li>
        <li><a><form class="" action="server.php" method="post">
<b><button style="background:transparent;border: none;font-size: large;font-variant: all-petite-caps;font-style: normal;" type="submit" name="logout">logout</button></b>
</form></a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
<h2 class="text-center";>Doctor Panel </h2>
  </div>

  <div id="Home" class="tabcontent text-center">
    <div class="container form" style="margin-top:50px;margin-bottom:90px;">
      <?php
foreach($success as $ss ){
echo "<P style='color:red;margin-left:20px;'>$ss</P>";
}
   ?>
      <div class="row">
        <div class="col-lg-6 text-center moe">
          <h2><?php
          $today = date("Y-n-j");
          $sql= "select count(*) as count_patients from patients where date_join='$today' or seen!='seen'";
          $result=mysqli_query($connect,$sql);
          $row=mysqli_fetch_assoc($result);
          echo "today not visited patients : ".$row['count_patients']."";
          ?></h2>
        </div>
        <div class="col-lg-6 text-center moe1">
          <h2><?php
          $today = date("Y-n-j");
          $sql= "select count(*) as count_patients from patients where date_join='$today' and seen='seen'";
          $result=mysqli_query($connect,$sql);
          $row=mysqli_fetch_assoc($result);
          echo "today visited patients : ".$row['count_patients']."";
          ?></h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 text-center moe1">
          <h2>
            <?php
            $today = date("Y-n-j");
            $sql= "select count(*) as count_patients from patients where operation='yes'";
            $result=mysqli_query($connect,$sql);
            $row=mysqli_fetch_assoc($result);
            echo "Total number of operations done : ".$row['count_patients']."";
            ?>
          </h2>
        </div>
        <div class="col-lg-6 text-center moe">
          <h2><?php
          $sql= "select sum(oper_fee) as count_patients from patients";
          $result=mysqli_query($connect,$sql);
          $row=mysqli_fetch_assoc($result);
          echo "Total operations Fee : ".$row['count_patients']."";
          ?></h2>
        </div>
      </div>
    </div>
  </div>

<div id="London" class="tabcontent" style="display:none;">
  <div class="container">
    <div class="row">
<div class="col-sm-3">
  <form class="form" action="death_certficate.php" method="post">
    <h4><label>For DOD Certificate</label></h4>
    <div class="form-group" >
    <input type="number" name="phone" placeholder="NUMBER" class="form-control formcontrol">
  </div>
    <div class="form-group" >
    <input type="submit" name="death_cert" class="btn btn-success form-control formcontrol">
  </div>
  </form>
</div>
  <div class="col-sm-6">
    <div class="bg-1";>
          <div class="tab-content">
                 <div style="margin:1px auto">

                   <form class="form tab-content" name="reg_staff" id="myForm" action="doc_main.php" method="post" onblur="return my1Function()">
                     <?php
  foreach($success as $ss ){
    echo "<P style='color:red;margin-left:20px;'>$ss</P>";
  }
                  ?>
                       <div class="row">
                         <div class="col-lg-12">
                           <h3>DOD Certificate form</h3>
                           <div id="step1" class="tab-pane fade in active">
                           <div class="form-group" >
                           <div class="row">
                           <div class="col-sm-6">
                               <input type="number" placeholder="AGE" class="form-control formcontrol" name="age" required>
                           </div>
                           <div class="col-sm-6">
                               <input type="number" placeholder="number" class="form-control formcontrol" name="phone" required>
                           </div>
                           </div>
                           </div>
                           <div class="col-sm-6">
                              <input type="radio" name="gen" value="male" style="float:left;"><h4 style="float:left;">male</h4>
                              <input type="radio" name="gen" value="female" style="float:left;"><h4 style="float:left;">female</h4>
                           </div>
                           <div class="form-group" >
                               <input type="text" placeholder="single/married" class=" form-control formcontrol" name="position" required>
                           </div>
                           <h4>DOB</h4>
                           <div class="form-group">
                                <input type="date" name="date_b" class="form-control formcontrol" placeholder="DOB" required>
                           </div>
                              <h4>DOD</h4>
                           <div class="form-group">
                                <input type="date" name="date_d" class="form-control formcontrol" placeholder="DOD" required>
                           </div>
                           <div class="form-group">
                                <input type="text"  placeholder="CAUSE OF DEATH" class="form-control formcontrol" name="cause" required>
                           </div>
                              <h4>Record Date</h4>
                           <div class="form-group">
                                <input type="date"  placeholder="RECORD DATE" class="form-control formcontrol" name="re_date" required>

                           </div>
                           </div>
                         </div>

                       </div>
                   <div class="form-group text-right">
                     <a href="main.php" class="pull-left btn btn-success btn-lg">Back</a>
                            <button type="submit" value="reg_staff" name="death" class="btn btn-success btn-lg" >Register</button>
              </div>
    </form>
  </div>
      </div>
  </div>

    </div>
    <div class="col-lg-3">

    </div>
  </div>
  </div>
</div>

<div id="Paris" class="tabcontent" style="display:none;">
  <div class="container">
    <div class="row">
<div class="col-sm-3">
  <form class="form" action="birth_certficate.php" method="post">
    <h4><label>For DOB Certificate</label></h4>
    <div class="form-group" >
    <input type="text" name="mother" placeholder="MOTHER" class="form-control formcontrol">
  </div>
    <div class="form-group" >
    <input type="text" name="father" placeholder="FATHER" class="form-control formcontrol">
  </div>
    <div class="form-group" >
    <input type="submit" name="birth_cert" class="btn btn-success form-control formcontrol">
  </div>
  </form>
</div>
  <div class="col-sm-6">
    <div class="bg-1";>
          <div class="tab-content">
                 <div style="margin:1px auto">

                   <form class="form tab-content" name="reg_staff" id="myForm" action="doc_main.php" method="post" onblur="return my1Function()">
                     <?php
  foreach($success as $ss ){
    echo "<P style='color:red;margin-left:20px;'>$ss</P>";
  }
                  ?>
                       <div class="row">
                         <div class="col-lg-12">
                           <h3>DOB Certificate form</h3>
                           <div id="step1" class="tab-pane fade in active">
                           <div class="form-group" >
                           <div class="row">
                           <div class="col-sm-6">
                              <input type="radio" name="gen" value="male" style="float:left;"><h4 style="float:left;">male</h4>
                              <input type="radio" name="gen" value="female" style="float:left;"><h4 style="float:left;">female</h4>
                           </div>
                           <div class="col-sm-6">
                               <input type="text" placeholder="MOTHER" class="form-control formcontrol" name="mother" required>
                           </div>
                           </div>
                           </div>

                           <div class="form-group" >
                               <input type="text" placeholder="FATHER" class=" form-control formcontrol" name="father" required>
                           </div>
                           <div class="form-group">
                                <input type="date" name="date" class="form-control formcontrol" placeholder="DOB" required>
                           </div>
                           <div class="form-group">
                                <input type="text"  placeholder="PLACE OF BIRTH" class="form-control formcontrol" name="place" required>
                           </div>
                           <div class="form-group">
                                <input type="text"  placeholder="GIVEN NAME" class="form-control formcontrol" name="gn_name" required>

                           </div>
                           <div class="form-group">
                                <input type="text"  placeholder="height_weight" id="Default_pass" class="form-control formcontrol" name="h_w" required>

                           </div>

                           </div>
                         </div>

                       </div>
                   <div class="form-group text-right">
                     <a href="main.php" class="pull-left btn btn-success btn-lg">Back</a>
                            <button type="submit" value="reg_staff" name="birth" class="btn btn-success btn-lg" >Register</button>
              </div>
    </form>
  </div>
      </div>
  </div>

    </div>
    <div class="col-lg-3">
    </div>
  </div>
  </div>

    </div>
  </div>
</div>

<div id="Tokyo" class="tabcontent" style="display:none;">

  <?php
  $sql= "select name,phone,date_join,disease,address,fee,under_take from patients where seen!='seen';";
  $result=mysqli_query($connect,$sql)
  ?></h3>
  <div class="container" style="color:black;font-size:18px;font-family:arial;">
    <form name='view' method='post' action='view1.php' class="text-center">
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
        <th>Disease</th>
        <th>Address</th>
        <th>Fee</th>
        <th>Under_take</th>
        <th>View</th>
        <th>Delete</th>
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
              <form name='view' method='post' action='view1.php'>
               <td><input type='hidden' name='phone' value=".$row['phone']." /><input type='submit' class='btn-info' value='view' name='view'></td>
               <td><input type='hidden' name='phone' value=".$row['phone']." /><input type='submit' class='btn-danger' value='delete' name='delete'></td>
               </form>
  </tr>";
      }?>
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
<footer class="container-fluid a bg-4 text-center" style="margin-top:200px;">
  <p><a href="https://www.srkr.com">&reg www.srkrec.ac.in&reg </a></p>
</footer>

</body>
</html>
<?php }
elseif($_SESSION['job']==='0')
  header('location:main.php');
  elseif($_SESSION['job']==='4')
  header('location:cas_main.php');
  elseif($_SESSION['job']==='3')
  header('location:rec_main.php');
  else {
    header('location:index.php');
  }
 ?>

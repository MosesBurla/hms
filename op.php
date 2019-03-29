<?php include ("server.php");
if(isset($_SESSION['phone']) && $_SESSION['job']==='3')
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
  <style>

  </style>
  <script type="text/javascript">
  function pass_confirm()
  {
    var pass = reg_staff.pass.value;
    var confirm_pass = reg_staff.confirm_pass.value;
    if(pass!=confirm_pass)
  alert("password not matched");
  }
  </script>

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

<div class="container">
<h2 class="text-center";>NEW OP FORMS </h2>
  </div>

  <div class="container">
    <div class="row">
<div class="col-sm-3">

</div>
  <div class="col-sm-6">
    <div class="bg-1";>
          <div class="tab-content">
                 <div style="margin:1px auto">
                   <form class="form tab-content" name="patient_details" id="myForm" action="" method="post" onblur="return my1Function()">
                     <?php
  foreach($success as $ss ){
    echo "<P style='color:green;margin-left:20px;'>$ss</P>";
  }
                  ?>
                       <div class="row">
                         <div class="col-lg-12">
                           <div id="step1" class="tab-pane fade in active">
                           <div class="form-group" >
                           <div class="row">
                           <div class="col-sm-6">
                               <input type="text" placeholder="First" class=" form-control formcontrol" name="first" required>
                           </div>
                           <div class="col-sm-6">
                               <input type="text" placeholder="Last" class="form-control formcontrol" name="last" required>
                           </div>
                           </div>
                           </div>

                           <div class="form-group" >
                               <input type="text" placeholder="Phone" class=" form-control formcontrol" name="phone" size=20 maxlength=10 onkeypress='return isNumberKey(event)' required>
                           </div>
                           <!--<div class="form-group">
                                <input type="date" name="date" id="id" class="form-control formcontrol" size=8 maxlength=8 onkeypress='return isNumberKey(event)' placeholder="Register ID" required>
                           </div>-->
                           <div class="form-group">
                                <input type="text"  placeholder="Diseases" class="form-control formcontrol" name="disease" required>
                           </div>
                           <div class="form-group">
                                <input type="text"  placeholder="Address" id="address" class="form-control formcontrol" name="address" required>

                           </div>
                           <div class="form-group">
                                <input type="number"  placeholder="Fee" id="fee" class="form-control formcontrol" name="fee" required>

                           </div>
                           <div class="form-group">
                             <select class="form-control formcontrolhyd" name="under_take" style="color:black;">
                               <optgroup label="Doctors" >
                                 <?php
                                 $sql= "select name,spe_qua from staff1 where job='1';";
                                 $result=mysqli_query($connect,$sql);
                                 while($row = mysqli_fetch_assoc($result))
                                 {
                                   echo "<option value=".$row['name']." ".$row['spe_qua'].">".$row['spe_qua']."</option>";
                                 }
                                 ?>
                               </optgroup>
                             </select>
                           </div>

                           </div>
                         </div>

                       </div>
                   <div class="form-group text-right">
                     <a href="rec_main.php" class="pull-left btn btn-success btn-lg">Back</a>
                            <button type="submit" value="reg_staff" name="patient_details" class="btn btn-success btn-lg" >Register</button>
              </div>
    </form>
  </div>
      </div>
  </div>

    </div>
  </div>
  </div>


<div id="Tokyo" class="tabcontent" style="display:none;">
  <h3>all patient details</h3>
  <p>Tokyo is the capital of Japan.</p>
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

<?php include "server.php" ;
if(isset($_SESSION['phone']))
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
<link rel="stylesheet" type="text/css" href="css/style.css" />
   <link rel="stylesheet" type="text/css" href="css/responsive.css" />
<script type="text/javascript" src="jquery/jquery.js"></script>

  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <style>
.tabcontent {
    display: none;
}
</style>
  <script src="jquery.min.j"></script>
  <script src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js\myscript.js"></script>
</head>
<body style="margin-bottom: 100px;">
  <div style="text-align:center;border:1px black solid;" class="container">
  <h1>welcome Admin</h1>
  <form  class="form"  action="" method="post">
    <select class="" name="branch_view" style="color:black;">
      <optgroup label="OPTIONS" >
        <?php
                  $result = mysqli_query($connect,"select * from branch");
                  while($row = mysqli_fetch_array($result)) {
                    echo '<option name="'.$row['b_id'].'">'.$row['branch'].'</option>';
                  }

                  ?>
      </optgroup>
    </select>
    <select class="form-group" name="year_view" style="color:black;">
      <optgroup label="OPTIONS" >
       <?php
                  $result = mysqli_query($connect,"select * from year");
                  while($row = mysqli_fetch_array($result)) {
                    echo '<option name="'.$row['y_id'].'">'.$row['year'].'</option>';
                  }

                  ?>
      </optgroup>
    </select>
    <select class="form-group" style="color:black;" name="section_view">
      <optgroup label="OPTIONS" >
        <?php
                  $result = mysqli_query($connect,"select * from section");
                  while($row = mysqli_fetch_array($result)) {
                    echo '<option name="'.$row['s_id'].'">'.$row['section'].'</option>';
                  }

                  ?>
      </optgroup>
    </select>
    <input type="date" name="" value="" style="color:black;">
    <button type="submit" name="view_records" style="color:black;margin-left:20px;">view</button>

  <button type="submit" name="logout"style="margin-left:90px;color:black;">logout</button>
  <br>
  <div class="" style="color:black;">
    <label>From</label> <input type="date" name="" value="">
    <label>To</label> <input type="date" name="" value="">
  <button type="submit" name="view_records" style="margin-left:20px;">view</button>
  </div>
  </form>
  <div  class="tab" style="color:black;margin-left:20px;">
    <input type="button" value="Add Branch" name="view_records" class="tablinks" onclick="openCity(event, 'branch')">
    <button  name="view_records" class="tablinks" onclick="openCity(event, 'year')">Add Year</button>
    <button  name="view_records" class="tablinks" onclick="openCity(event, 'section')">Add Section</button>
    <button  name="view_records" class="tablinks" onclick="openCity(event, 'student')">Add Student</button>
    <button  name="view_records" class="tablinks" onclick="openCity(event, 'staff')">Add Staff</button>
</div>
 <samp id="aaaa" style="color:black;margin-left:20px;"><?php echo $succes; ?></samp>

  <div style="color:black;margin-left:20px;">
<div id="branch" class="tabcontent" >
  <br>
  <form method="post">
  <label>Branch</label>  <input type="text" name="branch1" maxlength="5" required>
  <button type="submit" name="branch">Add</button>
   </form>
</div>
<div id="year" class="tabcontent" >
  <br>
  <form method="post">
  <label>Year</label>  <input type="text" name="year1" maxlength="1" placeholder="1..9" required>
  <button type="submit" name="year">Add</button>
</form>
</div>
<div id="section" class="tabcontent">
   <br>
   <form method="post">
  <label>Section</label>  <input type="text" name="section1"  maxlength="1" placeholder="[A-Z]" required>
  <button name="section">Add</button>
  </form>
</div>

  <div id="student" class="tabcontent">
  <br>
  <form method="post">
  <label>Student</label>  <input type="text" name="name" placeholder="Name">
  <input type="text" name="id" placeholder="ID">
  <input type="text" name="phone" placeholder="Phone">
  <button type="submit" name="student">Add</button>
  </form>
</div>

<div id="staff" class="tabcontent">
  <br>
  <form method="post">
  <label>Student</label>  <input type="text" name="name" placeholder="Name">
  <input type="text" name="id" placeholder="ID" size=20 maxlength=12 onkeypress='return isNumberKey(event)'>
  <input type="text" name="phone" placeholder="Phone" size=20 maxlength=10 onkeypress='return isNumberKey(event)'>
  <button type="submit" name="staff">Add</button>
  </form>
</div>

</div>



  <div class="tabcontent" style="display: block;">
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
  </div>
</body>
</html>
<?php }
else {
header('location:admin.php');
} ?>

<?php include ("server.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>birth_certificate</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="css/style.css" />
     <link rel="stylesheet" type="text/css" href="css/responsive.css" />
  <s
  </head>
  <body>
    <div class="container" style="margin-top:70px;margin-bottom: 30px;border-style:solid;border-color:black;border-width:20px;">
        <div class="container" style="margin:20px;border-style:dotted;border-color:black;border-width:7px; width:1060px;">
          <div class="row" style="margin-top:30px;">
            <div class="col-lg-12 text-center">
              <h2 style="font-size:40px; color:black; font-size:40px;"> Date Of Birth Certificate</h2>
              <br>
  <h4 style="float:center;">It is certified that  <u>Certificate Of Birth</u></h4>
              <hr style="
      margin-top: 5px;
      margin-bottom: 20px;
      border: 0;
      border-top: 1px solid #0e0303;
      border-width: medium;
      margin-left: 150px;
      margin-right: 150px;">
            </div>

          </div>
          <?php if($row=mysqli_fetch_array($result))
         { ?>
          <div class="container">
            <div class="row">
              <div class="col-lg-3">

              </div>
              <div class="col-lg-3">
                <h4>Gender       : <u><?php echo $row['gen']; ?></u></h4>
                <br>
                <h4>Height_weight : <u><?php echo $row['h_w']; ?></u> </h4>
                <h4>Date of Birth :<u><?php echo $row['date'] ?></u> </h4>
                <br>
                <h4>Place of Birth  :<u><?php echo $row['place']; ?></u></h4>
                <br>
                <br>
                <br>
                <h4>Doctor Signature : <u>Dr.sam kumar</u></h4>
              </div>
              <div class="col-lg-6">
                <br>
                <br>
                <br>
                <h4>Mother : <u><?php echo $row['mother']; ?></u></h4>
                <h4>Given Name  : <u><?php echo $row['gn_name']; ?></u></h4>
                <h4>Family Name  : </h4>
                <br>
                <h4>Father Name  : <u><?php echo $row['father']; ?></u></h4>
                <br>
                <br>
                <br>
                <h4>MS Signature </h4>
              </div>
            </div>
            <hr style="
    margin-top: 5px;
    margin-bottom: 20px;
    border: 0;
    border-top: 1px solid #0e0303;
    border-width: medium;
    margin-left: 130px;
    margin-right: 285px;">
          </div>
<?php } ?>
        </div>
        </div>
  </body>
</html>

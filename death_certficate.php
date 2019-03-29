<?php include ("server.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>death_certificate</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="css/style.css" />
     <link rel="stylesheet" type="text/css" href="css/responsive.css" />
  <s
  </head>
  <body>
    <div class="container" style="margin-top:70px;border-style:solid;border-color:black;border-width:20px;">
        <div class="container" style="margin:20px;border-style:double;;border-color:black;border-width:7px; width:1060px;">
          <div class="row" style="margin-top:30px;">
            <div class="col-lg-12 text-center">
              <h1 style="font-size:40px;"> Death Certificate</h1>
              <br>
  <h3 style="float:center;">CERTIFIED CERTIFICATED OF DEATH</h3>
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
              <div class="col-lg-6">
                <h4>I <u>Dr.sam kumar </u> Country cleark of <u>Indian</u> Country, in</h4>
                <h4>the state of <u>Andhra Pradesh</u> document,record,seal and </h4>
                <h4>hearby certify the death of <b><u><?php echo $name; ?></u></b></h4>
                <h4>Date of Birth   :  <u><?php echo $row['date_b']; ?></u></h4>
                <h4>Age <u><?php echo $row['age']; ?></u> Caused of <b>Death</b> <u><?php echo $row['cause']; ?></u></h4>
                  <br>
                <h4> Marride......Single.......widowed.........Divorced..........</h4>
                <h4>position :<u><?php echo $row['position']; ?></u></h4>
                <br>
                <h4>Date of Death : <u><?php echo $row['date_d']; ?></u> </h4>
                <h4>Date Recorded : <u><?php echo $row['re_date']; ?></u> </h4>
                <br>

                <br>
                <h6><i>This is to certified that this document is a true abstract of death recorded and filed with the country</i></h6>
<br>
<br>
<h4>Signature of the country clerk:   <u>Dr.sam kumar</u> </h4>
<h4>Signature of the Witness:....................Date:...........</h4>
<h4>Print Name:.......................</h4>


              </div>

          </div>
          <hr style="
          margin-top: 5px;
          margin-bottom: 20px;
          border: 0;
          border-top: 1px solid #0e0303;
          border-width: medium;
          margin-left: 150px;
          margin-right: 290px;">
        </div>
        <?php } ?>
        </div>

    </div>

  </body>
</html>

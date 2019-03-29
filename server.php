<?php
// register validation
session_start();
$errors=array();
$success=array();
$succes="";
$first="";
$last="";
  $today="";
$password="";
$phone="";
$date="";
$spequa="";
$address="";
$job="";
$number="";
$host="localhost";
$username="root";
$password="";
$database="HMS";
$result12=array();

$connect=mysqli_connect($host,$username,$password, $database);
//staff registaration
//data  base connection
if (isset($_POST['reg_staff']))
{
$first=stripcslashes($_POST['first']);
$last=stripcslashes($_POST['last']);
$phone=stripcslashes($_POST['phone']);
$date=stripslashes($_POST['date']);
$spequa=stripcslashes($_POST['spequa']);
$address=stripcslashes($_POST['address']);
$password=stripcslashes($_POST['password']);
$job=stripslashes($_POST['job']);
$first=mysqli_real_escape_string($connect,$first);
$last=mysqli_real_escape_string($connect,$last);
$phone=mysqli_real_escape_string($connect,$phone);
$date=mysqli_real_escape_string($connect,$date);
$spequa=mysqli_real_escape_string($connect,$spequa);
$address=mysqli_real_escape_string($connect,$address);
$password=mysqli_real_escape_string($connect,$password);
$job=mysqli_real_escape_string($connect,$job);
$first=$first." ".$last;
if(count($success)===0)
{
$pwd=md5($pwd);
  $sql= "insert into staff1(name,phone,date,spe_qua,address,pass,job) values('$first','$phone','$date','$spequa','$address','$password','$job')";
  $result=mysqli_query($connect,$sql);
  if(!$result)
  {
  array_push($success," * your are already registered");
  }
  else {
     $_SESSION['phone']=$phone;
    header('location:main.php');
  }
// redirect to home page.
}
}
if(isset($_POST['remove']))
{
$number=stripslashes($_POST['number']);
$number=mysqli_real_escape_string($connect,$number);
$sql= "DELETE FROM staff1 WHERE phone='$number'";
$result=mysqli_query($connect,$sql);
if(!$result)
{
array_push($success," * your are already registered");
}
else {
   $_SESSION['phone']=$phone;
  header('location:main.php');
}
}
//student registrations

if (isset($_POST['reg_std']))
{
$first=stripcslashes($_POST['first']);
$last=stripcslashes($_POST['last']);
$id=stripcslashes($_POST['id']);
$phone=stripcslashes($_POST['phone']);
$pwd=stripcslashes($_POST['pwd']);
$second_pwd=stripcslashes($_POST['second_pwd']);
$first=mysqli_real_escape_string($connect,$first);
$last=mysqli_real_escape_string($connect,$last);
$id=mysqli_real_escape_string($connect,$id);
$phone=mysqli_real_escape_string($connect,$phone);
$pwd=mysqli_real_escape_string($connect,$pwd);
$second_pwd=mysqli_real_escape_string($connect,$second_pwd);
$first=$first." ".$last;
if ( $pwd != $second_pwd )
{
array_push($success,"* password is not matched");
}
if(count($success)===0)
{
$pwd=md5($pwd);
  $sql= "insert into students(ID,name,phone,password) values('$id','$first','$phone','$pwd')";
  $result=mysqli_query($connect,$sql);
  if(!$result)
  {
 array_push($success,"* you are already registered");
  }
  else {
     $_SESSION['phone']=$phone;
    header('location:home.php');
  }
// redirect to home page.
}
}
//admins login
if (isset($_POST['admin']))
 {
  $phone=stripcslashes($_POST['phone']);
  $pwd=stripcslashes($_POST['password']);
  $sql="select phone,password from admins where phone=$phone";
  if($result=mysqli_query($connect,$sql))
  {
    $row=mysqli_fetch_array($result);
    if($row['phone']===$phone and $row['password']===$pwd)
  {
    $_SESSION['phone']=$phone;
    $_SESSION['job']='0';
   header('location:admin.php');
  }
  else
   array_push($success,"phone/password wrong");
}
}

//doctor Login
if (isset($_POST['doc_login']))
 {
  $phone=stripcslashes($_POST['phone']);
  $pwd=stripcslashes($_POST['password']);
  $sql="select phone,pass from staff1 where phone=$phone and job=1";

  if($result=mysqli_query($connect,$sql))
  {

    $row=mysqli_fetch_array($result);
    if($row['phone']===$phone and $row['pass']===$pwd)
  {
     $_SESSION['phone']="$phone";
     $_SESSION['job']='1';
   header('location:doc_main.php');
  }
  else
   array_push($success,"phone/password wrong");
}
}


//receptionist Login
if (isset($_POST['rec_login']))
 {
  $phone=stripcslashes($_POST['phone']);
  $pwd=stripcslashes($_POST['password']);
  $sql="select phone,pass from staff1 where phone=$phone and job=3";

  if($result=mysqli_query($connect,$sql))
  {

    $row=mysqli_fetch_array($result);
    if($row['phone']===$phone and $row['pass']===$pwd)
  {
     $_SESSION['phone']="$phone";
     $_SESSION['job']='3';
   header('location:rec_main.php');
  }
  else
   array_push($success,"phone/password wrong");
}
}


//cashier Login
if (isset($_POST['cas_login']))
 {
  $phone=stripcslashes($_POST['phone']);
  $pwd=stripcslashes($_POST['password']);
  $sql="select phone,pass from staff1 where phone=$phone and job=4";
mysqli_query($connect,"update patients set total_fee=(fee+oper_fee+additional+addit)");
  if($result=mysqli_query($connect,$sql))
  {

    $row=mysqli_fetch_array($result);
    if($row['phone']===$phone and $row['pass']===$pwd)
  {
     $_SESSION['phone']="$phone";
     $_SESSION['job']='4';
   header('location:cas_main.php');
  }
  else
   array_push($success,"phone/password wrong");
}
}

//Login_staff
if (isset($_POST['Login_staff']))
 {
  $phone=stripcslashes($_POST['phone']);
  $pwd=stripcslashes($_POST['password']);
  $pwd=md5($pwd);
  $sql="select phone,password from staff where phone=$phone";
  if($result=mysqli_query($connect,$sql))
  {
    $row=mysqli_fetch_array($result);
    if($row['phone']===$phone and $row['password']===$pwd)
  {
     $_SESSION['phone']=$phone;
   header('location:main.php');
  }
  else
   array_push($success,"phone/password wrong");
}
}
// logout
if (isset($_POST['logout'])) {
	session_destroy();
	unset($_SESSION['phone']);
	header('location:index.php');
}

//adding details branch
if(isset($_POST['branch']))
{
$branch=stripcslashes($_POST['branch1']);
 $sql="insert into branch (branch)values('$branch')";
 $result=mysqli_query($connect,$sql);
 if($result)
 {
  $succes="Branch inserted successful";
 }
 else
  $succes="Branch inserted failed";
}


//year
if(isset($_POST['year']))
{
$year=stripcslashes($_POST['year1']);
 $sql="insert into year (year)values('$year')";
 $result=mysqli_query($connect,$sql);
 if($result)
 {
  $succes="Year inserted successful";
 }
 else
  $succes="Branch inserted failed";
}


//section
if(isset($_POST['section']))
{
$section=stripcslashes($_POST['section1']);
 $sql="insert into section (section)values('$section')";
 $result=mysqli_query($connect,$sql);
 if($result)
 {
  $succes=" Section inserted successful";
 }
 else
  $succes=" Section inserted failed";
}

//adding staff details
if(isset($_POST['staff']))
{
$name=stripcslashes($_POST['name']);
$id=stripcslashes($_POST['id']);
$phone=stripcslashes($_POST['phone']);
 $sql="insert into staff_details (Name,ID,phone)values('$name','$id','$phone')";
 $result=mysqli_query($connect,$sql);
 if($result)
 {
  $succes=" staff inserted successful";
 }
 else
  $succes=" Staff insertion failed";
}

//adding details of students
if(isset($_POST['student']))
{
$name=stripcslashes($_POST['name']);
$id=stripcslashes($_POST['id']);
$phone=stripcslashes($_POST['phone']);
 $sql="insert into students_details (Name,ID,phone)values('$name','$id','$phone')";
 $result=mysqli_query($connect,$sql);
 if($result)
 {
  $succes=" Student inserted successful";
 }
 else
  $succes=" Student insertion failed";
}

// taking attendandc


if (isset($_POST['Login_Admin']))
 {
  $phone=stripcslashes($_POST['phone']);
  $pwd=stripcslashes($_POST['password']);
  $sql="select ID,phone from admins_details where phone=$phone";
  if($result=mysqli_query($connect,$sql))
  {
    $row=mysqli_fetch_array($result);
    if($row['ID']===$pwd and $row['phone']===$phone)
  {
     $_SESSION['phone']=$phone;
   header('location:admin_home.php');
  }
  else
   array_push($success,"phone/password wrong");
}
else
   array_push($success,"phone/password wrong");
}


//add subjects
if(isset($_POST['add_subject']))
{
  $sub_name=stripcslashes($_POST['subject_name']);
  $year=stripcslashes($_POST['year_take']);
  $branch=stripcslashes($_POST['branch_take']);
  $sql="INSERT INTO subjects(name,b_id,y_id) VALUES ('$sub_name',$branch,$year)";
  $result=mysqli_query($connect,$sql);
  if($result)
  {
   $succes=" Subject inserted successful";
  }
  else
   $succes=" Subject insertion failed";
}

if(isset($_POST['all_std_details']))
{
  $first=stripcslashes($_POST['first']);
  $last=stripcslashes($_POST['last']);
  $id=stripcslashes($_POST['id']);
$branch=stripcslashes($_POST['b_id']);
$year=stripcslashes($_POST['y_id']);
$section=stripcslashes($_POST['s_id']);
$sql="INSERT INTO all_std_details(Name,ID,Branch_id,Year_id,section_id) VALUES ('$first.$last','$id',$branch,$year,$section)";
$result=mysqli_query($connect,$sql);
if($result)
{
 $succes=" details inserted successful";
}
else
 $succes=" details insertion failed";
}

//patients operations
if(isset($_POST['patient_details']))
{
  $first=stripcslashes($_POST['first']);
  $last=stripcslashes($_POST['last']);
  $phone=stripcslashes($_POST['phone']);

  $disease=stripcslashes($_POST['disease']);
  $address=stripcslashes($_POST['address']);
  $fee=stripcslashes($_POST['fee']);
  $under_take=stripslashes($_POST['under_take']);
  $first=mysqli_real_escape_string($connect,$first);
  $last=mysqli_real_escape_string($connect,$last);
  $phone=mysqli_real_escape_string($connect,$phone);
  $today = date("Y-n-j");
  $disease=mysqli_real_escape_string($connect,$disease);
  $address=mysqli_real_escape_string($connect,$address);
  $under_take=mysqli_real_escape_string($connect,$under_take);
  $fee=mysqli_real_escape_string($connect,$fee);
  $first=$first." ".$last;

    $sql= "insert into patients(name,phone,date_join,disease,address,fee,under_take) values('$first','$phone','$today','$disease','$address','$fee','$under_take')";
    $result=mysqli_query($connect,$sql);
    if($result)
    {
      array_push($success,"DETAILS SUCCESSFULLY ADDED");
  header( "refresh:5;url=rec_main.php" );

    }
  // redirect to home page.
  }
//view data

if(isset($_POST['view']) && $_POST['phone'])
{

    $first=stripslashes($_POST['phone']);
    $mei=mysqli_fetch_assoc(mysqli_query($connect,"SELECT sum(charges) as m FROM daily_med WHERE phone='$first'"));
    if($mei['m']<0)
    $m=0;
    else
    $m=$mei['m'];
    $ad=mysqli_fetch_assoc(mysqli_query($connect,"SELECT COUNT(DISTINCT date) as ggg FROM daily_med where phone='$first'"));
    if($ad['ggg']<0)
    $adf=0;
    else
    $adf=$ad['ggg'];


    $sql="select * from patients where phone=$first";
    if($result=mysqli_query($connect,$sql))
    $_SESSION['ddd']='1';
}

if(isset($_POST['delete']) && $_POST['phone'])
{
  $first=stripslashes($_POST['phone']);
  $sql="delete from patients where phone=$first";
  $result=mysqli_query($connect,$sql);
  $_SESSION['ddd']='2';
}


if(isset($_POST['doc_desc']))
{
  $first=stripslashes($_POST['phone']);
  $ope=stripslashes($_POST['ope']);
  $summary=stripslashes($_POST['summary']);
  $ope_name=stripslashes($_POST['opename']);
  $ope_fee=stripslashes($_POST['opefee']);
  $tabs=stripslashes($_POST['tabs']);
  $seen=stripcslashes($_POST['seen']);
  $sql="update patients set descrip='$summary',operation='$ope',oper_name='$ope_name',oper_fee=$ope_fee,tabs='$tabs',seen='$seen'  where phone=$first";
    if($result=mysqli_query($connect,$sql));
  $_SESSION['ddd']='3';
}



if(isset($_POST['birth']))
{
  $gen=stripcslashes($_POST['gen']);
  $mother=stripcslashes($_POST['mother']);
  $father=stripcslashes($_POST['father']);
  $date=stripcslashes($_POST['date']);
  $place=stripcslashes($_POST['place']);
  $gn_name=stripcslashes($_POST['gn_name']);
  $h_w=stripcslashes($_POST['h_w']);
  $sql= "insert into birth(gen,mother,father,date,place,gn_name,h_w) values('$gen','$mother','$father','$date','$place','$gn_name','$h_w')";
  if($result=mysqli_query($connect,$sql));
  array_push($success,"PATIENT DETAILS SUCCESSFULLY ADDED");
header( "refresh:5;url=doc_main.php" );
}

if(isset($_POST['death']))
{
  $gen=stripcslashes($_POST['gen']);
  $age=stripcslashes($_POST['age']);
  $phone=stripcslashes($_POST['phone']);
  $position=stripcslashes($_POST['position']);
  $date_b=stripcslashes($_POST['date_b']);
$date_d=stripcslashes($_POST['date_d']);
  $cause=stripcslashes($_POST['cause']);
  $re_date=stripcslashes($_POST['re_date']);
  $sql= "insert into death(phone,gen,age,position,date_b,date_d,cause,re_date) values($phone,'$gen','$age','$position','$date_b','$date_d','$cause','$re_date')";
  if($result=mysqli_query($connect,$sql));
  array_push($success,"PATIENT DETAILS SUCCESSFULLY ADDED");
header( "refresh:5;url=doc_main.php" );
}

if(isset($_POST['birth_cert']))
{
  $mother=stripcslashes($_POST['mother']);
  $father=stripcslashes($_POST['father']);
  $sql="select * from birth where mother='$mother' and father='$father'";
  if($result=mysqli_query($connect,$sql))
header( "refresh:15;url=doc_main.php" );
}

if(isset($_POST['death_cert']))
{
  $phone=stripcslashes($_POST['phone']);
  $sql1="select * from patients where phone=$phone";
  $result1=mysqli_query($connect,$sql1);
  $row1=mysqli_fetch_array($result1);
  $name=$row1['name'];
  $sql="select * from death where phone=$phone";
  if($result=mysqli_query($connect,$sql))
header( "refresh:15;url=doc_main.php" );
}


if(isset($_POST['alloc']))
{
  $phone=stripcslashes($_POST['phone']);
  $bed_no=stripcslashes($_POST['bed_no']);
  $row=mysqli_fetch_assoc(mysqli_query($connect,"select count(*) as countaa from rooms where alloc=0"));
  if($row['countaa']<=0)
  {
  array_push($success,"ALL ROOMS ARE FILLED");
  header( "refresh:2;url=doc_main.php" );
  }
  else {
    $row=mysqli_fetch_assoc(mysqli_query($connect,"select count(*) as countaa from patients where phone='$phone'"));
    if ($row['countaa']>0) {
      $sql="select count(*) as countaa from rooms where phone='$phone'";
      $result=mysqli_query($connect,$sql);
      $row=mysqli_fetch_assoc($result);
      if($row['countaa'])
      {
        array_push($success,"ROOM ALREADY ALLOCATED TO PATIENT");
        header( "refresh:2;url=doc_main.php" );
      }
        else
        {
      $sql="update rooms set alloc=1,phone='$phone' where bed_no='$bed_no'";
      if($result=mysqli_query($connect,$sql))
        array_push($success,"ROOM ALLOCATED SUCCESSFULLY");
        header( "refresh:2;url=doc_main.php" );
      }
    }
    else {
      array_push($success,"WRONG OP NUMBER");
      header( "refresh:2;url=doc_main.php" );
    }
  }
}

if(isset($_POST['amount']))
{
  $amount=stripcslashes($_POST['paid_amount']);
  $phone=stripcslashes($_POST['phone']);
  $old=stripcslashes($_POST['old_pay']);
  $mei=mysqli_fetch_assoc(mysqli_query($connect,"SELECT sum(charges) as m FROM daily_med WHERE phone='$phone'"));
  if($mei['m']<0)
  $m=0;
  else
  $m=$mei['m'];
  $ad=mysqli_fetch_assoc(mysqli_query($connect,"SELECT COUNT(DISTINCT date) as ggg FROM daily_med where phone='$phone'"));
  if($ad['ggg']<0)
  $adf=0;
  else
  $adf=$ad['ggg'];
    if(mysqli_query($connect,"update patients set paid_amount=$old+$amount,due_amount=(total_fee-paid_amount) where phone='$phone'"))
    {
      $first=stripslashes($_POST['phone']);
      $sql="select * from patients where phone=$first";
      if($result=mysqli_query($connect,$sql))
      $_SESSION['ddd']='1';
    array_push($success,"Amount_Paid Success");
  }
}
if(isset($_POST['Discharge']))
{
    $phone=stripcslashes($_POST['phone']);
  mysqli_query($connect,"insert into discharge select * from patients where phone='$phone'");
  mysqli_query($connect,"UPDATE rooms SET alloc=0,phone='' WHERE phone='$phone'");
  mysqli_query($connect,"delete from patients where phone='$phone'");
}


if(isset($_POST['daily_med']))
{
  $phone=stripcslashes($_POST['phone']);
  $medican=stripcslashes($_POST['Medican']);
  $amount=stripcslashes($_POST['Amount']);
    $today = date("Y-n-j");
  if(mysqli_query($connect,"insert into daily_med (phone,medican_name,charges,date) values('$phone','$medican',$amount,'$today')"))
  if(mysqli_query($connect,"update patients set additional=additional+$amount where phone=$phone"))
  $ad=mysqli_fetch_assoc(mysqli_query($connect,"SELECT COUNT(DISTINCT date) as ggg FROM daily_med where phone='$phone'"));
  if($ad['ggg']<0)
  $adf=0;
  else
  $adf=$ad['ggg'];
  if(mysqli_query($connect,"update patients set addit=($adf*300) where phone=$phone"))
  array_push($success,"SUCCESSFULLY SUBMITTED");
  header( "refresh:2;url=rec_main.php" );
}
if (isset($_POST['scheme_1'])) {
    $phone=stripcslashes($_POST['phone']);
  mysqli_query($connect,"update patients set total_fee=(total_fee-total_fee/2) where phone=$phone");


  $mei=mysqli_fetch_assoc(mysqli_query($connect,"SELECT sum(charges) as m FROM daily_med WHERE phone='$phone'"));
  if($mei['m']<0)
  $m=0;
  else
  $m=$mei['m'];
  $ad=mysqli_fetch_assoc(mysqli_query($connect,"SELECT COUNT(DISTINCT date) as ggg FROM daily_med where phone='$phone'"));
  if($ad['ggg']<0)
  $adf=0;
  else
  $adf=$ad['ggg'];
      $first=stripslashes($_POST['phone']);
      $sql="select * from patients where phone=$first";
      if($result=mysqli_query($connect,$sql))
      $_SESSION['ddd']='1';
    array_push($success,"Amount_Paid Success");


}

if (isset($_POST['scheme_2'])) {
    $phone=stripcslashes($_POST['phone']);
  mysqli_query($connect,"update patients set total_fee=0,pay_by='GOV' where phone=$phone");


  $mei=mysqli_fetch_assoc(mysqli_query($connect,"SELECT sum(charges) as m FROM daily_med WHERE phone='$phone'"));
  if($mei['m']<0)
  $m=0;
  else
  $m=$mei['m'];
  $ad=mysqli_fetch_assoc(mysqli_query($connect,"SELECT COUNT(DISTINCT date) as ggg FROM daily_med where phone='$phone'"));
  if($ad['ggg']<0)
  $adf=0;
  else
  $adf=$ad['ggg'];
      $first=stripslashes($_POST['phone']);
      $sql="select * from patients where phone=$first";
      if($result=mysqli_query($connect,$sql))
      $_SESSION['ddd']='1';
    array_push($success,"Amount_Paid Success");


}

if(isset($_POST['view1']) && $_POST['phone'])
{

    $first=stripslashes($_POST['phone']);
    $mei=mysqli_fetch_assoc(mysqli_query($connect,"SELECT sum(charges) as m FROM daily_med WHERE phone='$first'"));
    if($mei['m']<0)
    $m=0;
    else
    $m=$mei['m'];
    $ad=mysqli_fetch_assoc(mysqli_query($connect,"SELECT COUNT(DISTINCT date) as ggg FROM daily_med where phone='$first'"));
    if($ad['ggg']<0)
    $adf=0;
    else
    $adf=$ad['ggg'];


    $sql="select * from discharge where phone=$first";
    if($result=mysqli_query($connect,$sql))
    $_SESSION['ddd']='1';
}
if(isset($_POST['report']) && $_POST['phone'])
{

    $first=stripslashes($_POST['phone']);
    $mei=mysqli_fetch_assoc(mysqli_query($connect,"SELECT sum(charges) as m FROM daily_med WHERE phone='$first'"));
    if($mei['m']<0)
    $m=0;
    else
    $m=$mei['m'];
    $ad=mysqli_fetch_assoc(mysqli_query($connect,"SELECT COUNT(DISTINCT date) as ggg FROM daily_med where phone='$first'"));
    if($ad['ggg']<0)
    $adf=0;
    else
    $adf=$ad['ggg'];

  $meda=mysqli_query($connect,"select * from daily_med where phone='$first'");
    $sql="select * from discharge where phone=$first";
    if($result=mysqli_query($connect,$sql))
    $_SESSION['ddd']='1';
}

?>

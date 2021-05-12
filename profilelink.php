<?php
$fid="";
$usn="";
$errors = array(); 
if(isset($_SESSION['fid']))
{
$fid= $_SESSION['fid'];

}


$db = mysqli_connect('localhost', 'root', 'mohi123', 'iksha');
$faculty_check_query = "SELECT * FROM faculty_data WHERE fid='$fid'";
  $result = mysqli_query($db, $faculty_check_query);
  $faculty = mysqli_fetch_assoc($result);
   if($faculty)
  {
       $fid=$faculty['fid'];
  $faculty_first_name=$faculty['faculty_first_name'];
  $faculty_last_name=$faculty['faculty_last_name'];
  $femail=$faculty['femail'];
  $designation=$faculty['designation'];
  $qualification=$faculty['qualification'];
 
  }
if (isset($_POST['update'])) {
    $faculty_first_name = mysqli_real_escape_string($db, $_POST['faculty_first_name']);
    $faculty_last_name = mysqli_real_escape_string($db, $_POST['faculty_last_name']);
  $designation = mysqli_real_escape_string($db, $_POST['fdesgn']);
   $qualification = mysqli_real_escape_string($db, $_POST['fquali']);
  $femail = mysqli_real_escape_string($db, $_POST['femail']);
  $query = "UPDATE faculty_data SET faculty_first_name='$faculty_first_name',faculty_last_name='$faculty_last_name',designation='$designation',qualification='$qualification',femail='$femail' WHERE fid='$fid' ";
  	mysqli_query($db, $query);
}

if(isset($_SESSION['usn']))
{
$usn=$_SESSION['usn'];
}
$student_check_query = "SELECT * FROM register_user WHERE usn='$usn'";
  $result1 = mysqli_query($db, $student_check_query);
  $student = mysqli_fetch_assoc($result1);
   if($student)
   {
       $id=$student['ID'];
       $user_first_name=$student['user_first_name'];
       $email=$student['email'];
       $user_last_name=$student['user_last_name'];
   }
   
   if (isset($_POST['s_update'])) {
        $usn = mysqli_real_escape_string($db, $_POST['usn']);
    $user_first_name = mysqli_real_escape_string($db, $_POST['user_first_name']);
    $user_last_name = mysqli_real_escape_string($db, $_POST['user_last_name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $query = "UPDATE register_user SET user_first_name='$user_first_name',user_last_name='$user_last_name',usn='$usn',email='$email' WHERE ID='$id' ";
  	mysqli_query($db, $query);
}

if(isset($_POST['fchange']))
{
    $curr_pass=mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2=mysqli_real_escape_string($db, $_POST['password_2']);
    $password_3=mysqli_real_escape_string($db, $_POST['password_3']);
    
    $query="SELECT  fpassword FROM faculty_data WHERE fid='$fid'";
    $result= mysqli_query($db, $query);
    $pass= mysqli_fetch_assoc($result);
    if($pass){
        $temppass=$pass['fpassword'];
    }
    if($temppass!= md5($curr_pass))
    {
        array_push($errors,'<script> type="text/javascript">alert("Current Password Do Not Match");</script>');
    }
    else {
    if ($password_2 != $password_3) {
	array_push($errors, '<script> type="text/javascript">alert("The Two New Password Do Not Match");</script>');
    }
    else {
        $password= md5($password_2);
    $query1="UPDATE faculty_data SET fpassword='$password' WHERE fid='$fid'";
    mysqli_query($db, $query1);
    }
}
}

if(isset($_POST['uchange']))
{
    $curr_pass=mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2=mysqli_real_escape_string($db, $_POST['password_2']);
    $password_3=mysqli_real_escape_string($db, $_POST['password_3']);
    
    $query="SELECT password FROM register_user WHERE usn='$usn'";
    $result= mysqli_query($db, $query);
    $pass= mysqli_fetch_assoc($result);
    if($pass){
        $temppass=$pass['password'];
    }
    if($temppass!= md5($curr_pass))
    {
        array_push($errors,'<script> type="text/javascript">alert("Current Password Do Not Match");</script>');
    }
    else {
    if ($password_2 != $password_3) {
	array_push($errors, '<script> type="text/javascript">alert("The Two New Password Do Not Match");</script>');
    }
    else {
        $password= md5($password_2);
    $query1="UPDATE register_user SET password='$password' WHERE usn='$usn'";
    mysqli_query($db, $query1);
    }
    }
}
?>
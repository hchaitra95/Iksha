<?php
$admin_id="";
$errors = array(); 

if(isset($_SESSION['admin_id']))
{
$admin_id= $_SESSION['admin_id'];
}
$db = mysqli_connect('localhost', 'root', 'mohi123', 'iksha');
$admin_check_query = "SELECT * FROM admin_data WHERE admin_id='$admin_id'";
  $result = mysqli_query($db, $admin_check_query);
  $admin = mysqli_fetch_assoc($result);
   if($admin)
  {
       $id=$admin['ID'];
  $first_name=$admin['admin_first_name'];
  $last_name=$admin['admin_last_name'];
  $email=$admin['email'];
  }

  if (isset($_POST['ad_update'])) {
        $admin_id = mysqli_real_escape_string($db, $_POST['admin_id']);
    $first_name = mysqli_real_escape_string($db, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($db, $_POST['last_name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $query = "UPDATE admin_data SET first_name='$first_name',last_name='$last_name',admin_id='$admin_id',email='$email' WHERE ID='$id' ";
  	mysqli_query($db, $query);
}

if (isset($_POST['delete'])) {
    if(isset($_POST['usn']))
    {
        $usn = mysqli_real_escape_string($db, $_POST['usn']);
        $query="DELETE FROM register_user WHERE usn='$usn'";
        mysqli_query($db, $query);
    }
}

if (isset($_POST['reg_faculty'])) {
  // receive all input values from the form
    $fid = mysqli_real_escape_string($db, $_POST['fid']);
  $faculty_first_name = mysqli_real_escape_string($db, $_POST['faculty_first_name']);
  $faculty_last_name = mysqli_real_escape_string($db, $_POST['faculty_last_name']);
  $femail = mysqli_real_escape_string($db, $_POST['femail']);
  $designation = mysqli_real_escape_string($db, $_POST['designation']);
  $qualification = mysqli_real_escape_string($db, $_POST['qualification']);
 $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($fid)) { array_push($errors, '<script> type="text/javascript">alert("Faculty ID is Required");</script>'); }
  if (empty($faculty_first_name)) { array_push($errors, '<script> type="text/javascript">alert("First Name is Required");</script>'); }
  
  if (empty($designation)) { array_push($errors, '<script> type="text/javascript">alert("Designation is Required");</script>'); }
  if (empty($qualification)) { array_push($errors, '<script> type="text/javascript">alert("Qualification is Required");</script>'); }
  if (empty($femail)) { array_push($errors, '<script> type="text/javascript">alert("Email is Required");</script>'); }
 
  if (empty($password_1)) { array_push($errors, '<script> type="text/javascript">alert("Password is Required");</script>'); }
  if ($password_1 != $password_2) {
	array_push($errors, '<script> type="text/javascript">alert("The Two Passwords Do Not Match");</script>');
  }
$regexemail="/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/";
if(!preg_match($regexemail, $femail)){
     array_push($errors, '<script> type="text/javascript">alert("Invalid Email");</script>');
}
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM faculty_data WHERE fid='$fid' OR femail='$femail' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $notes = mysqli_fetch_assoc($result);
  
  if ($notes) { // if user exists
    if ($notes['fid'] === $fid) {
      array_push($errors, '<script> type="text/javascript">alert("Faculty ID Already Exists");</script>');
    }

    if ($notes['femail'] === $femail) {
      array_push($errors, '<script> type="text/javascript">alert("Email Already Exists");</script>');
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO faculty_data (fid, faculty_first_name, faculty_last_name, designation, qualification, femail, fpassword) 
  			  VALUES('$fid', '$faculty_first_name', '$faculty_last_name', '$designation', '$qualification', '$femail', '$password')";
  	mysqli_query($db, $query);
        array_push($errors, '<script> type="text/javascript">alert("Registered Successfully");</script>');
        //header('Location: admindashboard.php');
  }
}

if (isset($_POST['reg_admin'])) {
  // receive all input values from the form
    $admin_id = mysqli_real_escape_string($db, $_POST['admin_id']);
  $first_name = mysqli_real_escape_string($db, $_POST['first_name']);
  $last_name = mysqli_real_escape_string($db, $_POST['last_name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);

 $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($admin_id)) { array_push($errors, '<script> type="text/javascript">alert("Admin ID is Required");</script>'); }
  if (empty($first_name)) { array_push($errors, '<script> type="text/javascript">alert("First Name is Required");</script>'); }
 
  
  if (empty($email)) { array_push($errors, '<script> type="text/javascript">alert("Email is Required");</script>'); }
 
  if (empty($password_1)) { array_push($errors, '<script> type="text/javascript">alert("Password is Required");</script>'); }
  if ($password_1 != $password_2) {
	array_push($errors, '<script> type="text/javascript">alert("The Two Passwords Do Not Match");</script>');
  }
$regexemail="/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/";
if(!preg_match($regexemail, $email)){
     array_push($errors, '<script> type="text/javascript">alert("Invalid Email");</script>');
}
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM admin_data WHERE admin_id='$admin_id' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $notes = mysqli_fetch_assoc($result);
  
  if ($notes) { // if user exists
    if ($notes['admin_id'] === $admin_id) {
      array_push($errors, '<script> type="text/javascript">alert("Admin ID Already Exists");</script>');
    }

    if ($notes['email'] === $email) {
      array_push($errors, '<script> type="text/javascript">alert("Email Already Exists");</script>');
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO admin_data (admin_id, admin_first_name, admin_last_name, email, password) 
  			  VALUES('$admin_id', '$first_name', '$last_name', '$email', '$password')";
  	mysqli_query($db, $query);
           array_push($errors, '<script> type="text/javascript">alert("Registered Successfully");</script>');
  	//header('Location: admindashboard.php');
  }
}
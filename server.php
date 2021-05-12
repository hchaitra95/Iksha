<?php
session_start();

// initializing variables
$usn="";
$username = "";
$email= "";


$errors = array(); 


// connect to the database
$db = mysqli_connect('localhost', 'root', 'mohi123', 'iksha');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
    $usn = mysqli_real_escape_string($db, $_POST['usn']);
  $user_first_name = mysqli_real_escape_string($db, $_POST['user_first_name']);
  $user_last_name = mysqli_real_escape_string($db, $_POST['user_last_name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($usn)) { array_push($errors, '<script> type="text/javascript">alert("USN is Required");</script>'); }
  if (empty($user_first_name)) { array_push($errors, '<script> type="text/javascript">alert("First Name is Required");</script>'); }
  
  if (empty($email)) { array_push($errors, '<script> type="text/javascript">alert("Email is Required");</script>'); }
 
  if (empty($password_1)) { array_push($errors, '<script> type="text/javascript">alert("Password is Required");</script>'); }
  if ($password_1 != $password_2) {
	array_push($errors, '<script> type="text/javascript">alert("The Two Passwords Do Not Match");</script>');
  }
$regexusn="/^([4][Cc][bB][0-9][0-9][Ii][Ss][0][0-9][0-9])$/";
if(!preg_match($regexusn, $usn))
{
    array_push($errors, '<script> type="text/javascript">alert("Invalid USN");</script>');
}
$regexemail="/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/";
if(!preg_match($regexemail, $email)){
     array_push($errors, '<script> type="text/javascript">alert("Invalid Email");</script>');
}
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM register_user WHERE usn='$usn' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $notes = mysqli_fetch_assoc($result);
  
  if ($notes) { // if user exists
    if ($notes['usn'] === $usn) {
      array_push($errors, '<script> type="text/javascript">alert("USN Already Exist");</script>');
  
    }

    if ($notes['email'] === $email) {
      array_push($errors, '<script> type="text/javascript">alert("Email Already Exist");</script>');
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO register_user (usn, user_first_name, user_last_name, email, password) 
  			  VALUES('$usn', '$user_first_name', '$user_last_name', '$email', '$password')";
  	mysqli_query($db, $query);
        array_push($errors, '<script> type="text/javascript">alert("Registered Successfully Please Login");</script>');
  	$_SESSION['usn'] = $usn;
  	//header('location: login.php');
  }
}
if (isset($_POST['login_user'])) {
  $usn = mysqli_real_escape_string($db, $_POST['usn']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($usn)) {
  	array_push($errors, '<script> type="text/javascript">alert("USN is Required");</script>');
  }
  if (empty($password)) {
  	array_push($errors, '<script> type="text/javascript">alert("Password is Required");</script>');
  }

  if (count($errors) == 0) {
  	$password = md5($password);
     
  	$query = "SELECT * FROM register_user WHERE usn='$usn' AND password='$password'";
  	$results = mysqli_query($db, $query);
        $name= mysqli_fetch_assoc($results);
         if (mysqli_num_rows($results) == 1) {
            $_SESSION['user_first_name']=$name['user_first_name'];
        $_SESSION['usn'] = $usn;
         $_SESSION['logged']=TRUE;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.php');
  	}else {
  		array_push($errors, '<script> type="text/javascript">alert("Wrong Username/Password Combination");</script>');
  	}
       
  }
  

}

if (isset($_POST['login_faculty'])) {
  $fid = mysqli_real_escape_string($db, $_POST['fid']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($fid)) {
  	array_push($errors, '<script> type="text/javascript">alert("Faculty ID is Required");</script>');
  }
  if (empty($password)) {
  	array_push($errors, '<script> type="text/javascript">alert("Password is Required");</script>');
  }

  if (count($errors) == 0) {
  	$password = md5($password);
     
  	$query = "SELECT * FROM faculty_data WHERE fid='$fid' AND fpassword='$password'";
  	$results = mysqli_query($db, $query);
        $name= mysqli_fetch_assoc($results);
  	if (mysqli_num_rows($results) == 1) {
             
            $_SESSION['faculty_first_name']=$name['faculty_first_name'];
        $_SESSION['fid'] = $fid;
         $_SESSION['flogged']=TRUE;
    
  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.php');
  	}else {
  		array_push($errors, '<script> type="text/javascript">alert("Wrong Username/Password Combination");</script>');
  	}
       
  }
  

}
if (isset($_POST['ad_login'])) {
  $admin_id = mysqli_real_escape_string($db, $_POST['admin_id']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($admin_id)) {
  	array_push($errors, '<script> type="text/javascript">alert("Admin ID is Required");</script>');
  }
  if (empty($password)) {
  	array_push($errors, '<script> type="text/javascript">alert("Password is Required");</script>');
  }

  if (count($errors) == 0) {
  	$password = md5($password);
     
  	$query = "SELECT * FROM admin_data WHERE admin_id='$admin_id' AND password='$password'";
  	$results = mysqli_query($db, $query);
        $name= mysqli_fetch_assoc($results);
  	if (mysqli_num_rows($results) == 1) {
            $_SESSION['first_name']=$name['admin_first_name'];
        $_SESSION['admin_id'] = $admin_id;
         $_SESSION['adlogged']=TRUE;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.php');
  	}else {
  		array_push($errors, '<script> type="text/javascript">alert("Wrong Username/Password Combination");</script>');
  	}
       
  }
  

}

if(isset($_POST['feedback']))
{
    $name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$query="INSERT INTO feedback(name, email, subject, message) VALUES('$name', '$email', '$subject', '$message')";
mysqli_query($db,$query);

}

?>
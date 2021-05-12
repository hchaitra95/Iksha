<?php

$db = mysqli_connect('localhost', 'root', 'mohi123', 'iksha');
$sem="";
$scheme="";
if(isset($_POST['get_sem']))
{
    $sem=$_POST['sem'];
    $scheme=$_POST['scheme'];
            
}

$lab_check_query = "SELECT * FROM lab WHERE sem='$sem' AND scheme='$scheme'";
  $result = mysqli_query($db, $lab_check_query);
  $lab = mysqli_fetch_assoc($result);
   
  if ($lab)
  {
      $labcode1=$lab['labcode1'];
      $labcode2=$lab['labcode2'];
      $labname1=$lab['labname1'];
         $labname2=$lab['labname2'];
         $syll1['URL']=$lab['syllabus1'];
         $syll2['URL']=$lab['syllabus2'];
         $manual1['URL']=$lab['manual1'];
           $manual2['URL']=$lab['manual2'];
     
   
  }

<?php



$subcode="";
$subname="";
$module1['URL']="";
$module2['URL']="";
$module3['URL']="";
$module4['URL']="";
$module5['URL']="";
$syll['URL']="";
$bank1['URL']=""; $bank2['URL']=""; $bank3['URL']=""; $bank3['URL']=""; $bank4['URL']=""; $bank5['URL']="";
$m1=""; $m2=""; $m3=""; $m4=""; $m5="";
 $a1['URL']="";
  $a2['URL']="";
  $a3['URL']="";
  $a4['URL']="";
  $a5['URL']="";
  $material="";
  $module="";
  $link="";
  
if(isset($_POST['get_sub'])){
    $subcode=$_POST['subcode'];
}
       
$db = mysqli_connect('localhost', 'root', 'mohi123', 'iksha');

$notes_check_query = "SELECT * FROM notesdb WHERE subcode='$subcode'";
  $result = mysqli_query($db, $notes_check_query);
  $notes = mysqli_fetch_assoc($result);
   
  if ($notes)
  {
     
     
      $module1['URL']= $notes['m1'];
  $module2['URL']= $notes['m2'];
   $module3['URL']= $notes['m3'];
  $module4['URL']= $notes['m4'];
  $module5['URL']= $notes['m5'];
  $syll['URL']=$notes['syllabus'];
  }
  $qb_check_query = "SELECT * FROM questionbank WHERE subcode='$subcode'";
  $result = mysqli_query($db, $qb_check_query);
  $qb = mysqli_fetch_assoc($result);
  if($qb)
  {
  $bank1['URL']=$qb['m1'];
  $bank2['URL']=$qb['m2'];
  $bank3['URL']=$qb['m3'];
  $bank4['URL']=$qb['m4'];
  $bank5['URL']=$qb['m5'];
  }
  $sub_check_query = "SELECT * FROM modulename WHERE subcode='$subcode'";
  $result = mysqli_query($db, $sub_check_query);
  $sub = mysqli_fetch_assoc($result);
   if($sub)
  {
  $m1=$sub['m1name'];
  $m2=$sub['m2name'];
  $m3=$sub['m3name'];
  $m4=$sub['m4name'];
  $m5=$sub['m5name'];
  }
  $asgn_check_query = "SELECT * FROM assignment WHERE subcode='$subcode'";
  $result = mysqli_query($db, $asgn_check_query);
  $asgn = mysqli_fetch_assoc($result);
   if($asgn)
  {
  $a1['URL']=$asgn['m1'];
  $a2['URL']=$asgn['m2'];
  $a3['URL']=$asgn['m3'];
  $a4['URL']=$asgn['m4'];
  $a5['URL']=$asgn['m5'];
  }
  $name_check_query = "SELECT * FROM subjects WHERE subcode='$subcode'";
  $result = mysqli_query($db, $name_check_query);
  $name = mysqli_fetch_assoc($result);
  if($name)
  {
      $subname=$name['subname'];
  }
  
  if(isset($_POST['get_material']))
  {
      $subcode=$_POST['subcode'];
      $material=$_POST['material'];
      $module=$_POST['module'];
      $link=$_POST['link'];
      if($material=='notes')
      {
          $query="UPDATE material SET m1n='$link' WHERE subcode='$subcode'";
          mysqli_query($db, $query);
      }   
  }
?>

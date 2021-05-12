
<?php include('server.php') ?>



<?php 
include ('noteslink.php');
if(!isset($_SESSION['success']))
{
     header("Location: relogin.php");
    
}

    ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>IKSHA</title>
 

  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="css/bootstrap.css" rel="stylesheet" />
  <link href="css/bootstrap-responsive.css" rel="stylesheet" />
  <link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
  <link href="css/jcarousel.css" rel="stylesheet" />
  <link href="css/flexslider.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
  <!-- Theme skin -->
  <link href="skins/blue.css" rel="stylesheet" />
  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
  <link rel="shortcut icon" href="ico/favicon.png" />

 
</head>

<body>
  <div id="wrapper">
    <!-- toggle top area -->
    <div class="hidden-top">
      <div class="hidden-top-inner container">
        <div class="row">
          <div class="span12">
            <ul>
              <li><strong>Department of Information Science & Engineering</strong></li>
              <li><strong>Canara Engineering College</strong></li>
              <li><a href="https:\\canaraengineering.in">Website: canaraengineering.in</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- end toggle top area -->
    <!-- start header -->
    <header>
      <div class="container ">
        <!-- hidden top area toggle link -->
        <div id="header-hidden-link">
          <a href="#" class="toggle-link" title="Click me you'll get a surprise" data-target=".hidden-top"><i></i>Open</a>
        </div>
        <!-- end toggle link -->
        <div class="row nomargin">
          <div class="span12">
            <div class="headnav">
              <ul>
               <?php
                  if(isset($_SESSION['logged']))
                  {
                       echo' <li><a href="studentdashboard.php" ><i class="icon-user"></i>'.$_SESSION["user_first_name"].'</a></li>';
               echo' <li><a href="logout.php" >Log Out</a></li>';
              
                  }
                  else if(isset($_SESSION['flogged']))
                  {
                      
                       echo' <li><a href="facultydashboard.php" ><i class="icon-user"></i>'.$_SESSION["faculty_first_name"].'</a></li>';
               echo' <li><a href="logout.php" >Log Out</a></li>';
              
                  }
                  else if(isset($_SESSION['adlogged']))
                  {
                       echo' <li><a href="admindashboard.php" ><i class="icon-user"></i>'.$_SESSION["first_name"].'</a></li>';
               echo' <li><a href="logout.php" >Log Out</a></li>';
              
                  }
 else {
     
                     echo' <li><a href="register.php" ><i class="icon-user"></i> Register</a></li>';
               echo' <li><a href="login.php" >Log in</a></li>';
 }
                  ?>
                  
                  
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="span4">
            <div class="logo">
            <a href="index.php"><img src="img/logo.png" width="100" height="100" class="logo" /></a>
              <h1><strong>Department of Information Science & Engineering</strong></h1>
			  <h1><strong>CANARA ENGINEERING COLLEGE MANGALORE</strong></h1>
             
            </div>
          </div>
          <div class="span8">
            <div class="navbar navbar-static-top">
              <div class="navigation">
                <nav>
                  <ul class="nav topnav">
                    <li>
                        <a href="index.php">Home</a>
                      </li>
                    <li class="dropdown">
                      <a href="#">About <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="department.php">Department</a></li>
                        <li><a href="lab.php">Labs</a></li>
                     
                        
                          </ul>
                        </li>
                      
                
                    <li>
                      <a href="faculty.php">Faculty</a>
                      
                    </li>
                    <li>
                      <a href="gallery.php">Photo Gallery</a>
                      
                    </li>
                    <li class="dropdown">
                      <a href="#">Downloads <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="notes.php">Notes</a></li>
                        <li><a href="manual.php">Lab Manuals</a></li>
                        <li><a href="internal.php">Internal Solutions</a></li>
                        <li><a href="news.php">News Letter</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="contact.php">Contact </a>
                    </li>
                  </ul>
                </nav>
              </div>
              <!-- end navigation -->
            </div>
          </div>
        </div>
      </div>
    </header>
    
    <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="inner-heading">
                <h2>Notes</h2>
            </div>
          </div>
          <div class="span8">
            <ul class="breadcrumb">
              <li><a href="#"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
              
              <li>Downloads<i class="icon-angle-right"></i>Notes</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section id="content">
        <div class="container">
        <div class="aligncenter">
            <form method="post" action="#">
            <h4>Choose Semester</h4>
                            
            <select name="sem" required>
                      
                        <option value="">-Select-</option>
                  <option value="3">3</option>
                     <option value="4">4</option>
                      <option value="5">5</option>
                       <option value="6">6</option>
                        <option value="7">7</option>
                         <option value="8">8</option>
                        
                </select>
                        <h4>Choose Scheme</h4>
                        <select name="scheme" required onchange="javascript:submit();">
                            <option value="">-Select-</option>
                            
                            <option value="2015">2015-2016</option>
                            <option value="2017">2017-2018</option>
                        
                        </select>
            </form>
            <form method="post" action="notesdashboard.php">
                        
    <?php
    if(isset($_POST['scheme']))
    {
        
    
$sem=$_POST['sem'];

$scheme=$_POST['scheme'];

if(mysqli_connect_errno())
{
    echo "failed to connect";
    mysqli_connect_error();
}
 echo '<h4>Choose Subject</h4>';
                        echo '<select name="subcode" required>';
                           echo '<option value="">-Select-</option>';
$sql="SELECT DISTINCT subname,subcode FROM subjects WHERE semester='$sem' AND scheme='$scheme'";
$result= mysqli_query($db, $sql);
while($row= mysqli_fetch_array($result,MYSQLI_ASSOC))
{

echo '<option value="'.$row['subcode'].'">'.$row['subname'].'</option>';
}
echo ' </select>';
mysqli_free_result($result);
mysqli_close($db);
    }

        ?>

                            
                            
                       
                   
                    <p class="text-center">
                        <button class="btn btn-large btn-theme margintop10" type="submit" name="get_sub">Submit</button>
                  </p>
                
        </form>     
        </div>
       
        </div>
    </section>
    
    
    
    
    
    
     <footer>
      <div class="container">
        <div class="row">
          <div class="span3">
            <div class="widget">
              <h5 class="widgetheading">Browse pages</h5>
              <ul class="link-list">
                  <li><a href="index.php">Home</a></li>
                <li><a href="department.php">About</a></li>
                <li><a href="faculty.php">Faculty</a></li>
                <li><a href="galler.php">Photo Gallery</a></li>
                <li><a href="news.php">Downloads</a></li>
                <li><a href="contact.php">Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="span3">
            <div class="widget">
              <h5 class="widgetheading">Other Departments</h5>
              <ul class="link-list">
                <li><a href="#">Electronics & Communication</a></li>
                <li><a href="#">Computer Science</a></li>
                <li><a href="#">Mechanical</a></li>
                <li><a href="#">Electrical & Electronics</a></li>
                <li><a href="#">Chemistry</a></li>
                <li><a href="#">Physics</a></li>
                <li><a href="#">Mathematics</a></li>
                <li><a href="#">Student Welfare</a></li>
                <li><a href="#">Placement & Training</a></li>
              </ul>
            </div>
          </div>
         
          <div class="span3">
            <div class="widget">
              <h5 class="widgetheading">Contact Us</h5>
              <address>
								<strong>Department of Infromation Science <br>
								 & Engineering</strong><br>
								 Canara Engineering College 
                                                                 Benjanpadav, D.K District,
                                                                 Karnataka, India - 574219
					 		</address>
              <p>
                <i class="icon-phone"></i>0824-2278665/66/67/68<br>
                <i class="icon-envelope-alt"></i> mail@iksha.in
              </p>
            </div>
          </div>
        </div>
      </div>
      <div id="sub-footer">
        <div class="container">
          <div class="row">
            <div class="span6">
              <div class="copyright">
                <p>
                  <span>&copy; Iksha - All right reserved.</span>
                </p>
                <div class="credits">
                  
                  Designed by <a href="#">Tweakfox</a>
                </div>
              </div>
            </div>
            <div class="span6">
              <ul class="social-network">
                <li><a href="#" data-placement="bottom" title="Facebook"><i class="icon-facebook icon-square"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Twitter"><i class="icon-twitter icon-square"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Linkedin"><i class="icon-linkedin icon-square"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Pinterest"><i class="icon-pinterest icon-square"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Google plus"><i class="icon-google-plus icon-square"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <a href="#" class="scrollup"><i class="icon-chevron-up icon-square icon-32 active"></i></a>
  <!-- javascript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="js/jquery.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/jcarousel/jquery.jcarousel.min.js"></script>
  <script src="js/jquery.fancybox.pack.js"></script>
  <script src="js/jquery.fancybox-media.js"></script>
  <script src="js/google-code-prettify/prettify.js"></script>
  <script src="js/portfolio/jquery.quicksand.js"></script>
  <script src="js/portfolio/setting.js"></script>
  <script src="js/jquery.flexslider.js"></script>
  <script src="js/jquery.nivo.slider.js"></script>
  <script src="js/modernizr.custom.js"></script>
  <script src="js/jquery.ba-cond.min.js"></script>
  <script src="js/jquery.slitslider.js"></script>
  <script src="js/animate.js"></script>
<?php  if (count($errors) > 0) : ?>
  <div class="error">
  	<?php foreach ($errors as $error) : ?>
  	  <p><?php echo $error ?></p>
  	<?php endforeach ?>
         
  </div>
<?php  endif ?>
  <!-- Template Custom JavaScript File -->
  <script src="js/custom.js"></script>

</body>
</html>
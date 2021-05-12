<?php include('server.php') ?>

<?php include('adminlink.php'); ?>



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
          <div class="span12">
            <div class="inner-heading">
                <h2>Welcome <?php print $first_name; echo ' '.$last_name.'';?></h2>
            </div>
          
          </div>
        </div>
      </div>
    </section>

<section id="content">
      <div class="container">
         
        <div class="span12">
             
            <table class="table">
            
              <tbody>
                <tr class="success">
                  <td>
                      <strong> Admin ID:</strong>
                  </td>
                  <td>
                    <?php print $admin_id;?>
                  </td>
                  
                </tr>
                <tr class="error">
                  <td>
                      <strong> First Name: </strong>
                  </td>
                  <td>
                    <?php print $first_name;?>
                  </td>
                
                </tr>
                <tr class="warning">
                  <td>
                      <strong>Last Name:</strong>
                  </td>
                  <td>
                    <?php print $last_name;?>
                  </td>
                 
                </tr>
                <tr class="info">
                  <td>
                      <strong>Email:</strong>
                          
                  </td>
                  <td>
                   <?php print $email;?>
                  </td>
                  
                </tr>
              </tbody>
            </table>
          </div>
             
          
            
                  <div class="row demobtn">
                     
                       
               
                  </div>
                    <div class="row demobtn">
                        <a href="#update" data-toggle="modal"><button class="btn btn-large btn-theme btn-rounded" type="submit">Update Profile</button></a>
                   <a href="viewuser.php" ><button class="btn btn-large btn-theme btn-rounded" type="submit">View Users</button></a>
                       <a href="viewfaculty.php"><button class="btn btn-large btn-theme btn-rounded" type="submit">View Faculty</button></a>  
                       <a href="#DeleteUser" data-toggle="modal"><button class="btn btn-large btn-theme btn-rounded" type="submit">Delete User</button></a>
                     
                        <a href="#reg_faculty" data-toggle="modal"><button class="btn btn-large btn-theme btn-rounded" type="submit">Register Faculty</button></a>
                   
                       <a href="#reg_admin" data-toggle="modal"><button class="btn btn-large btn-theme btn-rounded" type="submit">Register Co-Admin</button></a>
               <a href="feedback.php"><button class="btn btn-large btn-theme btn-rounded" type="submit">View Feedback</button></a> 
                  </div>
         
                   
               
         <div id="update" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySignupModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 id="mySignupModalLabel">Update<strong> Profile</strong></h4>
              </div>
              <div class="modal-body">
                  <form class="form-horizontal" method="post" action="admindashboard.php">
                                       
                                 <div class="control-group">
                    <label class="control-label">USN</label>
                    <div class="controls">
                        <input type="text" value="<?php print $admin_id;?>"  name="admin_id"/>
                    </div>
                  </div><div class="control-group">
                    <label class="control-label">First Name</label>
                    <div class="controls">
                        <input type="text" value="<?php print $first_name;?>"  name="first_name"/>
                    </div>
                  </div>
                   
                      <div class="control-group">
                    <label class="control-label">Last Name</label>
                    <div class="controls">
                        <input type="text" value="<?php print $last_name;?>" name="last_name" />
                    </div>
                      </div>
                     
                  <div class="control-group">
                    <label class="control-label">Email</label>
                    <div class="controls">
                        <input type="text" value="<?php print $email;?>" name="email" />
                    </div>
                  </div>
              <div class="control-group">
                    <div class="controls">
                <button type="submit" class="btn" name="ad_update">Update</button>
                    </div>
                    <p class="aligncenter margintop20">
                      To change password <a href="#changepassword" data-dismiss="modal" aria-hidden="true" data-toggle="modal">Click here</a>
                    </p>
                  </div>
                </form>
              </div>
            </div>
          <div id="changepassword" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySigninModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 id="mySigninModalLabel">Change <strong>Password</strong></h4>
              </div>
              <div class="modal-body">
                  <form class="form-horizontal" method="post" action="facultydashboard.php">
                  <div class="control-group">
                    <label class="control-label">Current Password</label>
                    <div class="controls">
                        <input type="password" placeholder="Current Password" name="password_1" required/>
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">New Password</label>
                    <div class="controls">
                        <input type="password" placeholder="New Password" name="password_2" required/>
                    </div>
                  </div>
                      <div class="control-group">
                    <label class="control-label">Confirm Password</label>
                    <div class="controls">
                        <input type="password" placeholder="Confirm New Password" name="password_3" required/>
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="controls">
                        <button type="submit" class="btn" name="change">Change</button>
                    </div>
                   
                  </div>
                </form>
              </div>
            </div>
                     <div id="DeleteUser" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySigninModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 id="mySigninModalLabel">Delete <strong>User</strong></h4>
              </div>
              <div class="modal-body">
                  <form class="form-horizontal" method="post" action="admindashboard.php">
                  <div class="control-group">
                    <label class="control-label">Enter USN</label>
                    <div class="controls">
                        <input type="text" placeholder="USN" name="usn" required/>
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="controls">
                        <button type="submit" class="btn" name="delete">Delete</button>
                      </div>
                  </div>
                </form>
              </div>
            </div>
          
          <div id="reg_faculty" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySignupModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 id="mySignupModalLabel">Register <strong>Faculty</strong></h4>
              </div>
              <div class="modal-body">
                  <form class="form-horizontal" method="post" action="admindashboard.php">
                                       <div class="control-group">
                    <label class="control-label">Faculty ID</label>
                    <div class="controls">
                        <input type="text" placeholder="Faculty ID"  name="fid" required/>
                    </div>
                  </div>
                    <div class="control-group">
                    <label class="control-label">First Name</label>
                    <div class="controls">
                        <input type="text" placeholder="First Name" name="faculty_first_name" required/>
                    </div>
                  </div>
                      <div class="control-group">
                    <label class="control-label">Last Name</label>
                    <div class="controls">
                        <input type="text" placeholder="Last Name" name="faculty_last_name"/>
                    </div>
                  </div>
                      <div class="control-group">
                    <label class="control-label">Designation</label>
                    <div class="controls">
                        <input type="text" placeholder="Designation" name="designation" required/>
                    </div>
                  </div>
                      <div class="control-group">
                    <label class="control-label">Qualification</label>
                    <div class="controls">
                        <input type="text" placeholder="Qualification" name="qualification" required/>
                    </div>
                  </div>
                       
                  <div class="control-group">
                    <label class="control-label">Email</label>
                    <div class="controls">
                        <input type="text" placeholder="Email" name="femail" required/>
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">Password</label>
                    <div class="controls">
                        <input type="password" placeholder="Password" name="password_1" required/>
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">Confirm Password</label>
                    <div class="controls">
                        <input type="password" placeholder="Confirm Password" name="password_2" required/>
                    </div>
                  </div>
                  
                  <div class="control-group">
                    <div class="controls">
                <button type="submit" class="btn" name="reg_faculty">Register</button>
                    </div>
                   </div>
                </form>
              </div>
            </div>
          
         
                <div id="reg_admin" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySignupModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 id="mySignupModalLabel">Register <strong>Admin</strong></h4>
              </div>
              <div class="modal-body">
                  <form class="form-horizontal" method="post" action="admindashboard.php">
                                       <div class="control-group">
                    <label class="control-label">Admin ID</label>
                    <div class="controls">
                        <input type="text" placeholder="Admin ID"  name="admin_id" required/>
                    </div>
                  </div>
                    <div class="control-group">
                    <label class="control-label">First Name</label>
                    <div class="controls">
                        <input type="text" placeholder="First Name" name="first_name" required/>
                    </div>
                  </div>
                      <div class="control-group">
                    <label class="control-label">Last Name</label>
                    <div class="controls">
                        <input type="text" placeholder="Last Name" name="last_name"/>
                    </div>
                  </div>
                 <div class="control-group">
                    <label class="control-label">Email</label>
                    <div class="controls">
                        <input type="text" placeholder="Email" name="email" required/>
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">Password</label>
                    <div class="controls">
                        <input type="password" placeholder="Password" name="password_1" required/>
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">Confirm Password</label>
                    <div class="controls">
                        <input type="password" placeholder="Confirm Password" name="password_2" required/>
                    </div>
                  </div>
                  
                  <div class="control-group">
                    <div class="controls">
                <button type="submit" class="btn" name="reg_admin">Register</button>
                    </div>
                   </div>
                </form>
              </div>
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

<?php include ('server.php');?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>IKSHA - Admin</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <meta name="author" content="" />

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
                        <li><a href="facilities.php">Facilities</a></li>
                        
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
              <h2>Admin Panel</h2>
            </div>
          </div>
          <div class="span8">
            <ul class="breadcrumb">
              <li><a href="#"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
              <li><a href="#">Admin</a></li>
             
            </ul>
          </div>
        </div>
      </div>
    </section>
  

<section id="content">
      <div class="container">
         <table class="table table-bordered " >
              
              <tbody>
                <tr>
                  <td>
                      <img src="img/image-01-full.jpg" alt="">
                  </td>
                  <td>
                     
                      <div>
              <h3 class="aligncenter"><strong>Welcome</strong></h3>
              <form class="form-horizontal" method="post" action="admin-panel.php">
                  <div class="control-group">
                      <label class="control-label">Admin ID</label>
                    <div class="controls">
                        <input type="text" placeholder="Admin ID" name="admin_id" required/>
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">Password</label>
                    <div class="controls">
                        <input type="password" placeholder="Password" name="password" required/>
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="controls">
                        <button type="submit" class="btn" name="ad_login">Log in</button>
                    </div>
                    
                  </div>
                </form>
			</div>
		
                      
                  </td>
                 
                </tr>
               
              </tbody>
            </table>
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

  <!-- Template Custom JavaScript File -->
  <script src="js/custom.js"></script>

</body>
</html>
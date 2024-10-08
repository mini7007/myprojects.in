<!doctype html>
<html lang="en">
<?php 
include 'constants/settings.php'; 
include 'constants/check-login.php';
?>

<head>

     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <title>Dreamers Jobs - Contact Us</title>
     <meta name="description" content="Online Job Management / Job Portal" />
     <meta name="keywords"
          content="job, work, resume, applicants, application, employee, employer, hire, hiring, human resource management, hr, online job management, company, worker, career, recruiting, recruitment" />
     <meta name="author" content="BwireSoft">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     <meta property="og:image" content="http://<?php echo "$actual_link"; ?>/images/banner.jpg" />
     <meta property="og:image:secure_url" content="https://<?php echo "$actual_link"; ?>/images/banner.jpg" />
     <meta property="og:image:type" content="image/jpeg" />
     <meta property="og:image:width" content="500" />
     <meta property="og:image:height" content="300" />
     <meta property="og:image:alt" content="Nightingale Jobs" />
     <meta property="og:description" content="Online Job Management / Job Portal" />

     <link rel="shortcut icon" href="images/ico/dreamers-logo.png">

     <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" media="screen">
     <link href="css/animate.css" rel="stylesheet">
     <link href="css/main.css" rel="stylesheet">
     <link href="css/component.css" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
     <link rel="stylesheet" href="icons/linearicons/style.css">
     <link rel="stylesheet" href="icons/font-awesome/css/font-awesome.min.css">
     <link rel="stylesheet" href="icons/simple-line-icons/css/simple-line-icons.css">
     <link rel="stylesheet" href="icons/ionicons/css/ionicons.css">
     <link rel="stylesheet" href="icons/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
     <link rel="stylesheet" href="icons/rivolicons/style.css">
     <link rel="stylesheet" href="icons/flaticon-line-icon-set/flaticon-line-icon-set.css">
     <link rel="stylesheet" href="icons/flaticon-streamline-outline/flaticon-streamline-outline.css">
     <link rel="stylesheet" href="icons/flaticon-thick-icons/flaticon-thick.css">
     <link rel="stylesheet" href="icons/flaticon-ventures/flaticon-ventures.css">

     <link href="css/style.css" rel="stylesheet">

     <style>
     /* Basic styling for the navbar */
     body {
          font-family: Arial, sans-serif;
          margin: 0;
          padding: 0;
     }

     .navbar-nav-wrapper {
          /* background-color: #282828; */
          padding: 10px 0;
     }

     .navbar-nav {
          list-style-type: none;
          margin: 0;
          padding: 0;
          display: flex;
          justify-content: space-around;
     }

     .navbar-nav li {
          position: relative;
          display: inline-block;
     }

     .navbar-nav a {
          color: white;
          text-decoration: none;
          padding: 10px 20px;
          display: block;
     }

     .navbar-nav a:hover {
          background-color: #444;
          border-radius: 5px;
     }

     /* Dropdown menu styling */
     .dropdown {
          display: none;
          position: absolute;
          background-color: #fff;
          box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
          top: 100%;
          left: 0;
          min-width: 200px;
          z-index: 1;
     }

     .dropdown a {
          color: black;
          padding: 10px 15px;
          display: block;
          text-align: left;
     }

     .dropdown a:hover {
          background-color: #f1f1f1;
     }

     /* Show the dropdown when hovering or clicking on the parent */
     li:hover .dropdown {
          display: block;
     }
     </style>
</head>


<body class="not-transparent-header">

     <div class="container-wrapper">

          <header id="header">
               <nav class="navbar navbar-default navbar-fixed-top navbar-sticky-function">

                    <div class="container-fluid">

                         <div class="logo-wrapper">
                              <div class="logo">
                                   <a href="./"><img src="images/dreamers-logo-02.png" width="240" height="60"
                                             alt="Logo" /></a>
                              </div>
                         </div>

                         <div id="navbar" class="navbar-nav-wrapper navbar-arrow">

                              <ul class="nav navbar-nav" id="responsive-menu">
                                   <li>
                                        <a href="./">Home</a>
                                   </li>
                                   <li>
                                        <a href="#">Categories</a>
                                        <!-- Dropdown for Categories -->
                                        <!-- Dropdown for Categories -->
                                        <ul class="dropdown">
                                             <li><a href="job-list.php?cat=bpo">BPO</a>
                                                  <ul>
                                                       <li><a href="BPO.php">Voice & Sales Executive</a></li>
                                                       <li><a href="BPO.php">Non-Voice (Chat Support)</a></li>
                                                       <li><a href="BPO.php">SME (Subject Matter Expert)</a></li>
                                                       <li><a href="BPO.php">Technical Support</a></li>
                                                       <li><a href="BPO.php">Backend Support</a></li>
                                                       <li><a href="BPO.php">Email Support</a></li>
                                                       <li><a href="BPO.php">Blended</a></li>
                                                       <li><a href="BPO.php">Team Lead</a></li>
                                                  </ul>
                                             </li>
                                             <li><a href="job-list.php?cat=dev">Development</a>
                                                  <ul>
                                                       <li><a href="">Front end Developer</a></li>
                                                       <li><a href="">Back End Development</a></li>
                                                       <li><a href="">Full Stack Development</a></li>
                                                       <li><a href="">Python Development</a></li>
                                                       <li><a href="">Java Development</a></li>
                                                       <li><a href="">C & C++ Development</a></li>
                                                       <li><a href="">Graphic Designer/UI UX</a></li>
                                                       <li><a href="">Android Development</a></li>
                                                       <li><a href="">Flutter Development</a></li>
                                                       <li><a href="">Salesforce Development</a></li>
                                                       <li><a href="">Software Testing </a></li>
                                                       <li><a href="">React Js Development</a></li>
                                                       <li><a href="">Node Js Development</a></li>
                                                  </ul>
                                             </li>
                                             <li><a href="job-list.php?cat=tech">Technology</a>
                                                  <ul>
                                                       <li><a href="">MERN</a></li>
                                                       <li><a href="">MEAN</a></li>
                                                       <li><a href="">PERN</a></li>
                                                  </ul>
                                             </li>
                                             <li><a href="job-list.php?cat=Acct">Accounting</a>
                                                  <ul>
                                                       <li><a href="">Tally ERP</a></li>
                                                       <li><a href="">Data Entry Operator</a></li>
                                                       <li><a href="">Cashier</a></li>
                                                       <li><a href="">Sales Executive for Malls</a></li>
                                                       <li><a href="">Support Staff for Malls</a></li>
                                                  </ul>
                                             </li>
                                             <li><a href="job-list.php?cat=Medical">Medical</a>
                                                  <ul>
                                                       <li><a href="">Nurse</a></li>
                                                       <li><a href="">Compander</a></li>
                                                       <li><a href="">Support Staff / Ward Boy</a></li>
                                                  </ul>
                                             </li>
                                             <li><a href="job-list.php?cat=Media_News">Media & News</a>
                                                  <ul>
                                                       <li><a href="">Blog Writer</a></li>
                                                       <li><a href="">Influencer</a></li>
                                                       <li><a href="">Content Writer</a></li>
                                                       <li><a href="">Digital Content Creators</a></li>
                                                  </ul>
                                             </li>
                                        </ul>
                                   </li>
                                   <li>
                                        <a href="employers.php">Employers</a>
                                   </li>
                                   <li>
                                        <a href="employees.php">Employees</a>
                                   </li>
                                   <li>
                                        <a href="contact.php">Contact Us</a>
                                   </li>
                              </ul>
                         </div>

                         <div class="nav-mini-wrapper">
                              <ul class="nav-mini sign-in">
                                   <?php
						if ($user_online == true) {
						print '
						    <li><a href="logout.php">logout</a></li>
							<li><a href="'.$myrole.'">Profile</a></li>';
						}else{
						print '
							<li><a href="login.php">login</a></li>
							<li><a data-toggle="modal" href="#registerModal">register</a></li>';						
						}
						
						?>

                              </ul>
                         </div>

                    </div>

                    <div id="slicknav-mobile"></div>

               </nav>

               <div id="registerModal" class="modal fade login-box-wrapper" tabindex="-1" style="display: none;"
                    data-backdrop="static" data-keyboard="false" data-replace="true">

                    <div class="modal-header">
                         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                         <h4 class="modal-title text-center">Create your account for free</h4>
                    </div>

                    <div class="modal-body">

                         <div class="row gap-20">

                              <div class="col-sm-6 col-md-6">
                                   <a href="register.php?p=Employer" class="btn btn-facebook btn-block mb-5-xs">Register
                                        as
                                        Employer</a>
                              </div>
                              <div class="col-sm-6 col-md-6">
                                   <a href="register.php?p=Employee" class="btn btn-facebook btn-block mb-5-xs">Register
                                        as
                                        Employee</a>
                              </div>

                         </div>

                    </div>

                    <div class="modal-footer text-center">
                         <button type="button" data-dismiss="modal" class="btn btn-primary btn-inverse">Close</button>
                    </div>

               </div>



          </header>

          <div class="main-wrapper">

               <div class="hero" style="background-image:url('images/hero-header/hero-header.jpg');">
                    <div class="container">

                         <h1>Your bright future starts here now</h1>
                         <p>Finding your next job or career on Dreamers Jobs</p>

                         <div class="main-search-form-wrapper">

                              <form action="job-list.php" method="GET" autocomplete="off">

                                   <div class="form-holder">
                                        <div class="row gap-0">

                                             <div class="col-xss-6 col-xs-6 col-sm-6">
                                                  <select class="form-control" name="category" required />
                                                  <option value="">-Select category-</option>
                                                  <?php
										 require 'constants/db_config.php';
										 try {
                                         $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
                                         $stmt = $conn->prepare("SELECT * FROM tbl_categories ORDER BY category");
                                         $stmt->execute();
                                         $result = $stmt->fetchAll();

                                         foreach($result as $row)
                                         {
                                        ?>

                                                  <option style="color:black" value="<?php echo $row['category']; ?>">
                                                       <?php echo $row['category']; ?></option>
                                                  <?php
	                                     }
                                         $stmt->execute();
					  
	                                     }catch(PDOException $e)
                                         {
        
                                         }
	
										?>

                                                  </select>
                                             </div>

                                             <div class="col-xss-6 col-xs-6 col-sm-6">
                                                  <select class="form-control" name="country" required />
                                                  <option value="">-Select country-</option>
                                                  <?php
										 require 'constants/db_config.php';
										 try {
                                         $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
                                         $stmt = $conn->prepare("SELECT * FROM tbl_countries ORDER BY country_name");
                                         $stmt->execute();
                                         $result = $stmt->fetchAll();

                                         foreach($result as $row)
                                         {
                                        ?>

                                                  <option style="color:black"
                                                       value="<?php echo $row['country_name']; ?>">
                                                       <?php echo $row['country_name']; ?></option>
                                                  <?php
	                                     }
                                         $stmt->execute();
					  
	                                     }catch(PDOException $e)
                                         {
               
                                         }
	
										?>

                                                  </select>
                                             </div>

                                        </div>

                                   </div>

                                   <div class="btn-holder">
                                        <button name="search" value="✓" type="submit" class="btn"><i
                                                  class="ion-android-search"></i></button>
                                   </div>

                              </form>

                         </div>

                    </div>

               </div>
               <!-- <script type="text/javascript">
               atOptions = {
                    'key': 'ac94c65af3a6d0913cf824a3dd1a0e11',
                    'format': 'iframe',
                    'height': 300,
                    'width': 160,
                    'params': {}
               };
               </script> -->
               <!-- <script type="text/javascript"
                    src="//www.topcreativeformat.com/ac94c65af3a6d0913cf824a3dd1a0e11/invoke.js">
               </script> -->


               <div class="post-hero bg-light">

                    <div class="container">

                         <div class="process-item-wrapper mt-20">

                              <div class="row">

                                   <div class="col-sm-4">

                                        <div class="process-item clearfix">

                                             <div class="icon">
                                                  <i class="flaticon-line-icon-set-magnification-lens"></i>
                                             </div>

                                             <div class="content">
                                                  <h5> Prepare for jobs</h5>
                                             </div>

                                        </div>

                                   </div>

                                   <div class="col-sm-4">

                                        <div class="process-item clearfix">

                                             <div class="icon">
                                                  <i class="flaticon-line-icon-set-pencil"></i>
                                             </div>

                                             <div class="content">
                                                  <h5> Apply a Job</h5>
                                             </div>

                                        </div>

                                   </div>

                                   <div class="col-sm-4">

                                        <div class="process-item clearfix">

                                             <div class="icon">
                                                  <i class="flaticon-line-icon-set-calendar"></i>
                                             </div>

                                             <div class="content">
                                                  <h5> Start Working</h5>
                                             </div>

                                        </div>

                                   </div>

                              </div>

                         </div>

                    </div>

               </div>
               <style>
               //--------- Start features Area -------------//


               .features-area {
                    margin-top: -65px;
               }

               h4 {
                    text-align: center;
               }

               p,
               li {
                    padding: 0 20px;
               }

               .single-feature {
                    text-align: left;
                    border-radius: 5px;
                    background-color: #f2f2f2;
                    box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
                    padding: 25px 0;
                    height: 370px;
                    margin-bottom: 30px;

                    h4 {

                         p {
                              margin-bottom: 0;
                         }

                         h4 {
                              padding-bottom: 15px;
                         }

                         @media(max-width:960px) {
                              margin-bottom: 30px;
                         }
                    }

                    //--------- End features Area -------------//
               </style>

               <!-- Start features Area -->
               <section class="features-area">
                    <div class="container">
                         <div class="row">
                              <div class="col-lg-3 col-md-6">
                                   <div class="single-feature">
                                        <h4>💁🏻‍♂️ About us</h4>
                                        <p>👉🏻 Dreamers Jobs is an online job portal and job management system designed
                                             to
                                             help
                                             people
                                             find employment more easily.<br>👉🏻 Our platform streamlines the job
                                             search
                                             process by
                                             providing tools to both prepare and apply for jobs, all in one place.</p>
                                   </div>
                              </div>
                              <div class="col-lg-3 col-md-6">
                                   <div class="single-feature">
                                        <h4>Why Choose Dreamers❓</h4>
                                        <ul>
                                             <li class="feature">👉🏻 All-in-One Solution: Job preparation and placement
                                                  in
                                                  one
                                                  platform.<br>
                                             </li>
                                             <li class="feature">👉🏻 AI-Powered Learning: Personalized study paths and
                                                  support
                                                  from our<br>AI bot.</li>
                                             <li class="feature">👉🏻 Fast & Efficient: From study to job placement,
                                                  Dreamers
                                                  Jobs
                                                  speeds
                                                  up the path to your career.</li>
                                        </ul>
                                   </div>
                              </div>
                              <div class="col-lg-3 col-md-6">
                                   <div class="single-feature">
                                        <h4>👨🏼‍💻 Key Features</h4>
                                        <ul>
                                             <li class="feature">👉🏻 Integrated AI Bot: Dreamers Jobs’ AI bot is your
                                                  personal
                                                  learning
                                                  assistant, available 24/7 to help you with questions, study
                                                  suggestions, or
                                                  test
                                                  preparation.</li>
                                             <li class="feature">👉🏻 Seamless Experience: From preparation to job
                                                  placement,
                                                  everything
                                                  is handled on the same platform, providing a user-friendly, integrated
                                                  solution for
                                                  your job search needs.</li>
                                        </ul>
                                   </div>
                              </div>
                              <div class="col-lg-3 col-md-6">
                                   <div class="single-feature">
                                        <h4>👨‍🎓 Job Placement</h4>
                                        <ul>
                                             <li class="feature">👉🏻 Job Matching: If you clear the test, Dreamers Jobs
                                                  will
                                                  match you with potential employers, helping you secure the best
                                                  opportunity
                                                  for your career goals.</li>
                                             <li class="feature">👉🏻 Continuous Support: Even after you land a job,
                                                  Dreamers Jobs
                                                  offers resources to help you thrive in your career.</li>
                                        </ul>
                                   </div>
                              </div>

                         </div>
                         <div class="row">
                              <div class="col-lg-3 col-md-6">
                                   <div class="single-feature">
                                        <h4>✍🏻 7-Day Preparation Phase</h4>
                                        <ul>
                                             <li class="feature">👉🏻 Interactive Learning Modules: Dreamers Jobs offers
                                                  tailored
                                                  content covering essential skills for the job you are targeting.
                                                  Engage with
                                                  videos, quizzes, and exercises that adapt to your learning style.
                                             </li>
                                             <li class="feature">👉🏻 Personalized Study Plans: Create a customized
                                                  study plan.
                                                  Our AI provides guidance to ensure you focus on areas that need
                                                  improvement.
                                             </li>
                                        </ul>
                                   </div>
                              </div>
                              <div class="col-lg-3 col-md-6">
                                   <div class="single-feature">
                                        <h4>🧠 8th Day Test</h4>
                                        <ul>
                                             <li class="feature">👉🏻 Comprehensive Assessment: After 7 days of
                                                  preparation, take
                                                  an online test on Dreamers Jobs. This will assess your readiness
                                                  for the job
                                                  market.</li>
                                             <li class="feature">👉🏻 Instant Feedback: Get immediate feedback to help
                                                  you improve
                                                  and prepare for the final step of landing a job.</li>
                                        </ul>
                                   </div>
                              </div>
                         </div>

                    </div>
               </section>
               <!-- End features Area -->

               <div class="pt-0 pb-50">

                    <div class="container">

                         <div class="row">

                              <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">

                                   <div class="section-title">

                                        <br>
                                        <h2 style="text-transform: capitalize;"> Associated Companies🤝</h2>
                                   </div>


                              </div>

                         </div>

                    </div>

                    <div class="row top-company-wrapper with-bg">


                         <?php
					require 'constants/db_config.php';
					try {
                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    $stmt = $conn->prepare("SELECT * FROM tbl_users WHERE role = 'employer' ORDER BY rand() LIMIT 8");
                    $stmt->execute();
                    $result = $stmt->fetchAll();

                    foreach($result as $row) {
					$complogo = $row['avatar'];
					?>
                         <div class="col-xss-12 col-xs-6 col-sm-4 col-md-5"
                              style="display:flex;flex-direction:row;gap:100px;padding-left:80px;padding-right:80px;">

                              <div class="top-company">
                                   <div class="image">
                                        <?php 
					if ($complogo == null) {
					print '<center><img class="autofit2" alt="image"  src="images/blank.png"/></center>';
					}else{
					echo '<center><img class="autofit2" alt="image"  src="data:image/jpeg;base64,'.base64_encode($complogo).'"/></center>';	
					}
					?>
                                   </div>
                                   <h6><?php echo $row['first_name'];?></h6>
                                   <a target="_blank" href="company.php?ref=<?php echo $row['member_no']; ?>">View
                                        Company</a>
                              </div>

                              <div class="top-company">
                                   <div class="image">
                                        <?php 
					if ($complogo == null) {
					print '<center><img class="autofit2" alt="image"  src="images/blank.png"/></center>';
					}else{
					echo '<center><img class="autofit2" alt="image"  src="data:image/jpeg;base64,'.base64_encode($complogo).'"/></center>';	
					}
					?>
                                   </div>
                                   <h6><?php echo $row['first_name'];?></h6>
                                   <a target="_blank" href="company.php?ref=<?php echo $row['member_no']; ?>">View
                                        Company</a>
                              </div>

                              <div class="top-company">
                                   <div class="image">
                                        <?php 
					if ($complogo == null) {
					print '<center><img class="autofit2" alt="image"  src="images/blank.png"/></center>';
					}else{
					echo '<center><img class="autofit2" alt="image"  src="data:image/jpeg;base64,'.base64_encode($complogo).'"/></center>';	
					}
					?>
                                   </div>
                                   <h6><?php echo $row['first_name'];?></h6>
                                   <a target="_blank" href="company.php?ref=<?php echo $row['member_no']; ?>">View
                                        Company</a>
                              </div>
                              <div class="top-company">
                                   <div class="image">
                                        <?php 
					if ($complogo == null) {
					print '<center><img class="autofit2" alt="image"  src="images/blank.png"/></center>';
					}else{
					echo '<center><img class="autofit2" alt="image"  src="data:image/jpeg;base64,'.base64_encode($complogo).'"/></center>';	
					}
					?>
                                   </div>
                                   <h6><?php echo $row['first_name'];?></h6>
                                   <a target="_blank" href="company.php?ref=<?php echo $row['member_no']; ?>">View
                                        Company</a>
                              </div>
                              <div class="top-company">
                                   <div class="image">
                                        <?php 
					if ($complogo == null) {
					print '<center><img class="autofit2" alt="image"  src="images/blank.png"/></center>';
					}else{
					echo '<center><img class="autofit2" alt="image"  src="data:image/jpeg;base64,'.base64_encode($complogo).'"/></center>';	
					}
					?>
                                   </div>
                                   <h6><?php echo $row['first_name'];?></h6>
                                   <a target="_blank" href="company.php?ref=<?php echo $row['member_no']; ?>">View
                                        Company</a>
                              </div>
                              <div class="top-company">
                                   <div class="image">
                                        <?php 
					if ($complogo == null) {
					print '<center><img class="autofit2" alt="image"  src="images/blank.png"/></center>';
					}else{
					echo '<center><img class="autofit2" alt="image"  src="data:image/jpeg;base64,'.base64_encode($complogo).'"/></center>';	
					}
					?>
                                   </div>
                                   <h6><?php echo $row['first_name'];?></h6>
                                   <a target="_blank" href="company.php?ref=<?php echo $row['member_no']; ?>">View
                                        Company</a>
                              </div>
                         </div>
                    </div>
                    <?php
					
                    {

	                }
					  
	                }}catch(PDOException $e)
                    {

                    }
	
					?>
               </div>

          </div>

     </div>

     <div class="bg-light pt-80 pb-80">

          <div class="container">

               <div class="row">

                    <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">

                         <div class="section-title">

                              <h2 style="text-transform: capitalize;">Latest Jobs 💼</h2>

                         </div>

                    </div>

               </div>

               <div class="row">

                    <div class="col-md-12">

                         <div class="recent-job-wrapper alt-stripe mr-0">
                              <?php
							require 'constants/db_config.php';
							try {
                            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            $stmt = $conn->prepare("SELECT * FROM tbl_jobs ORDER BY enc_id DESC LIMIT 8");
                            $stmt->execute();
                            $result = $stmt->fetchAll();
  

                            foreach($result as $row) {
							$jobcity = $row['city'];
							$jobcountry = $row['country'];
							$type = $row['type'];
							$title = $row['title'];
							$closingdate = $row['closing_date'];
							$company_id = $row['company'];
							$post_date = date_format(date_create_from_format('d/m/Y', $closingdate), 'd');
                            $post_month = date_format(date_create_from_format('d/m/Y', $closingdate), 'F');
                            $post_year = date_format(date_create_from_format('d/m/Y', $closingdate), 'Y');
										   
							$stmtb = $conn->prepare("SELECT * FROM tbl_users WHERE member_no = '$company_id' and role = 'employer'");
                            $stmtb->execute();
                            $resultb = $stmtb->fetchAll();
							foreach($resultb as $rowb) {
							$complogo = $rowb['avatar'];
							$thecompname = $rowb['first_name'];	
								
							}
							
							if ($type == "Freelance") {
							$sta = '<div class="job-label label label-success">
									Freelance
									</div>';
											  
							}
							if ($type == "Part-time") {
							$sta = '<div class="job-label label label-danger">
									Part-time
									</div>';
											  
							}
							if ($type == "Full-time") {
							$sta = '<div class="job-label label label-warning">
									Full-time
									</div>';
											  
							}
							?>
                              <marquee behavior="scroll" direction="up" height="100px" scrollamount="5" class="marquee"
                                   onmouseover="this.stop();" onmouseout="this.start();">
                                   <a class="recent-job-item clearfix" target="_blank"
                                        href="explore-job.php?jobid=<?php echo $row['job_id']; ?>">
                                        <div class="GridLex-grid-middle">
                                             <div class="GridLex-col-5_xs-12">
                                                  <div class="job-position">
                                                       <div class="image">
                                                            <?php 
							if ($complogo == null) {
							print '<center><img alt="image"  src="images/blank.png"/></center>';
							}else{
							echo '<center><img alt="image" title="'.$thecompname.'" width="180" height="100" src="data:image/jpeg;base64,'.base64_encode($complogo).'"/></center>';	
							}
							?>
                                                       </div>
                                                       <div class="content">
                                                            <h4><?php echo "$title"; ?></h4>
                                                            <p><?php echo "$thecompname"; ?></p>
                                                       </div>
                                                  </div>
                                             </div>
                                             <div class="GridLex-col-5_xs-8_xss-12 mt-10-xss">
                                                  <div class="job-location">
                                                       <i class="fa fa-map-marker text-primary"></i>
                                                       <?php echo "$jobcountry" ?></strong> -
                                                       <?php echo "$jobcity" ?>
                                                  </div>
                                             </div>
                                             <div class="GridLex-col-2_xs-4_xss-12">
                                                  <?php echo "$sta"; ?>
                                                  <span class="font12 block spacing1 font400 text-center">Due
                                                       -
                                                       <?php echo "$post_month"; ?>
                                                       <?php echo "$post_date"; ?>,
                                                       <?php echo "$post_year"; ?></span>
                                             </div>
                                        </div>
                                   </a>
                                   <a class="recent-job-item clearfix" target="_blank"
                                        href="explore-job.php?jobid=<?php echo $row['job_id']; ?>">
                                        <div class="GridLex-grid-middle">
                                             <div class="GridLex-col-5_xs-12">
                                                  <div class="job-position">
                                                       <div class="image">
                                                            <?php 
							if ($complogo == null) {
							print '<center><img alt="image"  src="images/blank.png"/></center>';
							}else{
							echo '<center><img alt="image" title="'.$thecompname.'" width="180" height="100" src="data:image/jpeg;base64,'.base64_encode($complogo).'"/></center>';	
							}
							?>
                                                       </div>
                                                       <div class="content">
                                                            <h4><?php echo "$title"; ?></h4>
                                                            <p><?php echo "$thecompname"; ?></p>
                                                       </div>
                                                  </div>
                                             </div>
                                             <div class="GridLex-col-5_xs-8_xss-12 mt-10-xss">
                                                  <div class="job-location">
                                                       <i class="fa fa-map-marker text-primary"></i>
                                                       <?php echo "$jobcountry" ?></strong> -
                                                       <?php echo "$jobcity" ?>
                                                  </div>
                                             </div>
                                             <div class="GridLex-col-2_xs-4_xss-12">
                                                  <?php echo "$sta"; ?>
                                                  <span class="font12 block spacing1 font400 text-center">Due
                                                       -
                                                       <?php echo "$post_month"; ?>
                                                       <?php echo "$post_date"; ?>,
                                                       <?php echo "$post_year"; ?></span>
                                             </div>
                                        </div>
                                   </a>
                                   <a class="recent-job-item clearfix" target="_blank"
                                        href="explore-job.php?jobid=<?php echo $row['job_id']; ?>">
                                        <div class="GridLex-grid-middle">
                                             <div class="GridLex-col-5_xs-12">
                                                  <div class="job-position">
                                                       <div class="image">
                                                            <?php 
							if ($complogo == null) {
							print '<center><img alt="image"  src="images/blank.png"/></center>';
							}else{
							echo '<center><img alt="image" title="'.$thecompname.'" width="180" height="100" src="data:image/jpeg;base64,'.base64_encode($complogo).'"/></center>';	
							}
							?>
                                                       </div>
                                                       <div class="content">
                                                            <h4><?php echo "$title"; ?></h4>
                                                            <p><?php echo "$thecompname"; ?></p>
                                                       </div>
                                                  </div>
                                             </div>
                                             <div class="GridLex-col-5_xs-8_xss-12 mt-10-xss">
                                                  <div class="job-location">
                                                       <i class="fa fa-map-marker text-primary"></i>
                                                       <?php echo "$jobcountry" ?></strong> -
                                                       <?php echo "$jobcity" ?>
                                                  </div>
                                             </div>
                                             <div class="GridLex-col-2_xs-4_xss-12">
                                                  <?php echo "$sta"; ?>
                                                  <span class="font12 block spacing1 font400 text-center">Due
                                                       -
                                                       <?php echo "$post_month"; ?>
                                                       <?php echo "$post_date"; ?>,
                                                       <?php echo "$post_year"; ?></span>
                                             </div>
                                        </div>
                                   </a>
                                   <a class="recent-job-item clearfix" target="_blank"
                                        href="explore-job.php?jobid=<?php echo $row['job_id']; ?>">
                                        <div class="GridLex-grid-middle">
                                             <div class="GridLex-col-5_xs-12">
                                                  <div class="job-position">
                                                       <div class="image">
                                                            <?php 
							if ($complogo == null) {
							print '<center><img alt="image"  src="images/blank.png"/></center>';
							}else{
							echo '<center><img alt="image" title="'.$thecompname.'" width="180" height="100" src="data:image/jpeg;base64,'.base64_encode($complogo).'"/></center>';	
							}
							?>
                                                       </div>
                                                       <div class="content">
                                                            <h4><?php echo "$title"; ?></h4>
                                                            <p><?php echo "$thecompname"; ?></p>
                                                       </div>
                                                  </div>
                                             </div>
                                             <div class="GridLex-col-5_xs-8_xss-12 mt-10-xss">
                                                  <div class="job-location">
                                                       <i class="fa fa-map-marker text-primary"></i>
                                                       <?php echo "$jobcountry" ?></strong> -
                                                       <?php echo "$jobcity" ?>
                                                  </div>
                                             </div>
                                             <div class="GridLex-col-2_xs-4_xss-12">
                                                  <?php echo "$sta"; ?>
                                                  <span class="font12 block spacing1 font400 text-center">Due
                                                       -
                                                       <?php echo "$post_month"; ?>
                                                       <?php echo "$post_date"; ?>,
                                                       <?php echo "$post_year"; ?></span>
                                             </div>
                                        </div>
                                   </a>
                              </marquee>
                              <?php

                            }
	                        }catch(PDOException $e)
                            { 
                   
                             }
                             ?>





                         </div>

                    </div>

               </div>

          </div>

     </div>




     <footer class="footer-wrapper">

          <div class="main-footer">

               <div class="container">

                    <div class="row">

                         <div class="col-sm-12 col-md-9">

                              <div class="row">

                                   <div class="col-sm-6 col-md-4">

                                        <div class="footer-about-us">
                                             <h5 class="footer-title">About Dreamers </h5>
                                             <p>Dreamers Jobs is an online job portal and job management system designed
                                                  to
                                                  help people find employment more easily.</p>

                                        </div>

                                   </div>

                                   <div class="col-sm-6 col-md-5 mt-30-xs">
                                        <h5 class="footer-title">Quick Links</h5>
                                        <ul class="footer-menu clearfix">
                                             <li style="text-transform: capitalize;"><a href="./">Home</a></li>
                                             <li style="text-transform: capitalize;"><a href="job-list.php">Job List</a>
                                             </li>
                                             <li style="text-transform: capitalize;"><a
                                                       href="employers.php">Employers</a>
                                             </li>
                                             <li style="text-transform: capitalize;"><a
                                                       href="employees.php">Employees</a>
                                             </li>
                                             <li style="text-transform: capitalize;"><a href="contact.php">Contact
                                                       Us</a>
                                             </li>
                                             <li style="text-transform: capitalize;"><a href="#">Go to top</a></li>

                                        </ul>

                                   </div>

                              </div>

                         </div>

                         <div class="col-sm-12 col-md-3 mt-30-sm">

                              <h5 class="footer-title">Dreamers Jobs Contact</h5>

                              <p><i class="fas fa-map-marker-alt"></i> New Delhi, India 201301</p>
                              <p><i class="fas fa-envelope"></i> <a
                                        href="mailto:connectwithus@dreamers.co.in">connectwithus@dreamers.co.in</a></p>
                              <p><i class="fas fa-phone"></i> <a href="tel:+917347851575">+91 7347851575</a></p>


                         </div>


                    </div>

               </div>

          </div>

          <div class="bottom-footer" style="height:120px">

               <div class="container">

                    <div class="row">

                         <div class="col-sm-4 col-md-4">

                              <p class="copy-right">&#169; Copyright <?php echo date('Y'); ?> Dreamers
                                   Vision
                                   Software</p>

                         </div>

                         <div class="col-sm-4 col-md-4">

                              <ul class="bottom-footer-menu">
                                   <li><a>Developed by Mini ❤️</a></li>
                              </ul>

                         </div>

                         <div class="col-sm-4 col-md-4">
                              <ul class="bottom-footer-menu for-social">
                                   <li><a href="<?php echo "$tw"; ?>"><i class="ri ri-twitter" data-toggle="tooltip"
                                                  data-placement="top" title="twitter"></i></a></li>
                                   <li><a href="<?php echo "$fb"; ?>"><i class="ri ri-facebook" data-toggle="tooltip"
                                                  data-placement="top" title="facebook"></i></a></li>
                                   <li><a href="<?php echo "$ig"; ?>"><i class="ri ri-instagram" data-toggle="tooltip"
                                                  data-placement="top" title="instagram"></i></a></li>
                              </ul>
                         </div>

                    </div>

               </div>

          </div>

     </footer>

     </div>


     </div>

     <div id="back-to-top">
          <a href="#"><i class="ion-ios-arrow-up"></i></a>
     </div>


     <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
     <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
     <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
     <script type="text/javascript" src="js/bootstrap-modalmanager.js"></script>
     <script type="text/javascript" src="js/bootstrap-modal.js"></script>
     <script type="text/javascript" src="js/smoothscroll.js"></script>
     <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
     <script type="text/javascript" src="js/jquery.waypoints.min.js"></script>
     <script type="text/javascript" src="js/wow.min.js"></script>
     <script type="text/javascript" src="js/jquery.slicknav.min.js"></script>
     <script type="text/javascript" src="js/jquery.placeholder.min.js"></script>
     <script type="text/javascript" src="js/bootstrap-tokenfield.js"></script>
     <script type="text/javascript" src="js/typeahead.bundle.min.js"></script>
     <script type="text/javascript" src="js/bootstrap3-wysihtml5.min.js"></script>
     <script type="text/javascript" src="js/bootstrap-select.min.js"></script>
     <script type="text/javascript" src="js/jquery-filestyle.min.js"></script>
     <script type="text/javascript" src="js/bootstrap-select.js"></script>
     <script type="text/javascript" src="js/ion.rangeSlider.min.js"></script>
     <script type="text/javascript" src="js/handlebars.min.js"></script>
     <script type="text/javascript" src="js/jquery.countimator.js"></script>
     <script type="text/javascript" src="js/jquery.countimator.wheel.js"></script>
     <script type="text/javascript" src="js/slick.min.js"></script>
     <script type="text/javascript" src="js/easy-ticker.js"></script>
     <script type="text/javascript" src="js/jquery.introLoader.min.js"></script>
     <script type="text/javascript" src="js/jquery.responsivegrid.js"></script>
     <script type="text/javascript" src="js/customs.js"></script>

</body>


</html>

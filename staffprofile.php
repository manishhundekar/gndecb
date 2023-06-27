<?php
include('dbconn.php');
if (isset($_POST['staffprofsu'])) {
 	$staffprofno = $_POST['staffprofno'];
      $order59 ="SELECT * FROM staff where SNO='$staffprofno'";
      $food9 = mysqli_query($conn, $order59);
      $oss55 = mysqli_fetch_assoc($food9);
  }
?> 
<!DOCTYPE html>
<html>
<head>
	 <title>Guru Nanak Dev Engineering College Bidar Karnataka  | ಗುರುನಾನಕ್ ದೇವ್ ಎಂಜಿನಿಯರಿಂಗ್ ಕಾಲೇಜು ಬೀದರ್ ಕರ್ನಾಟಕ</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="Guru Nanak Dev Engineering College Bidar - 585401 GNDECB GND Gurudwara " />
     <!-- Favicons-->
<link rel="apple-touch-icon" sizes="57x57" href="assets/faviconrecent/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="assets/faviconrecent/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="assets/faviconrecent/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="assets/faviconrecent/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="assets/faviconrecent/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="assets/faviconrecent/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="assets/faviconrecent/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="assets/faviconrecent/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="assets/faviconrecent/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="assets/faviconrecent/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="assets/faviconrecent/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="assets/faviconrecent/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="assets/faviconrecent/favicon-16x16.png">
<link rel="manifest" href="assets/faviconrecent/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="assets/faviconrecent/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"/>
<!--End of Favicons-->


<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext"
      rel="stylesheet"><link rel='icon' href='favicon.ico' type='image/x-icon'/ >
  <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
      rel="stylesheet">
</head>
<body>
	<div id="header"></div>
<div id="navbar"><script src="js/bootstrap.js"></script><script src="js/fixed-nav.js"></script>  
  <script src="js/SmoothScroll.min.js"></script> <script src="js/easing.js"></script></div>
<div class="container" style="background-color: white">
    <ol class="breadcrumb">
        <li><a href="index.php">Home</a></li><li>/</li>
        <li><a href="departments.html">Departments</a></li><li>/</li>
        <li>Profile</li>
    </ol>
</div>
<div class="head gnddepthead"><h3 class="font-weight-bold" style="color: #3375F1; font-size:1.2em;"><?php echo $oss55["BRCAT"];?><br></h3></div><hr>
<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div >
                        <div class="profile-img">
                            <img <?php echo 'src="admin/images/'; echo $oss55["PHOTO"] ; echo '"';?> "/>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="profile-head">
                                    <h5>
                                        <?php echo $oss55["NAME"];?>
                                    </h5>
                                    <h6>
                                        <?php echo $oss55["DESIGNATION"];?>
                                    </h6>
                                    <br>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                            </ul>
                        </div>
<div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                       <div class="row">
                                            <div class="col-md-6">
                                                <label>Branch</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $oss55["BRCAT"];?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Qualification</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $oss55["QUALIFICATION"];?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Experience</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $oss55["EXPERIENCE"];?></p>
                                            </div>
                                        </div> 
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Faculty type</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $oss55["FACTYPE"];?></p>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $oss55["EMAIL"];?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Blog</label>
                                            </div>
                                            <div class="col-md-6">
                                              <?php echo '<a href="http://'.$oss55["BLOG"].'">';?><p><?php echo $oss55["BLOG"];?></a></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Others</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $oss55["OTHERS"];?></p>
                                            </div>
                                        </div>
                            </div>
                            </div>
                       </div>
                    </div>
                </div>
            </form> 
 </div>
                    </div>
                </div>

                        
           
<div id="footer"></div>
<script type="text/javascript" src="js/routes.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
       
</body>
</html>
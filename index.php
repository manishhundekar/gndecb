<?php

   include('dbconn.php');

   $order59 ="SELECT * FROM gndecconnect order by TIME DESC ";

   $food9 = mysqli_query($conn, $order59);

   ?>

<!DOCTYPE html>

<html>

   <head>

      <title>Guru Nanak Dev Engineering College Bidar Karnataka  | ಗುರು ನಾನಕ್ ದೇವ್ ಎಂಜಿನಿಯರಿಂಗ್ ಕಾಲೇಜು ಬೀದರ್ ಕರ್ನಾಟಕ</title>

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

      <script src="js/jssor.slider-27.5.0.min.js" type="text/javascript"></script>

      <link rel="stylesheet" href="css/bootstrap.css">

      <link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">

      <link rel="stylesheet" href="css/owl.theme.css" type="text/css" media="all">

      <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />

      <link rel="stylesheet" type="text/css" href="styles/style.css" />

      <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>

   

     

      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

      <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext"

         rel="stylesheet">

      <link rel='icon' href='favicon.ico' type='image/x-icon'/ >

      <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"

         rel="stylesheet">

      <style>

         /* Make the image fully responsive */

         .carousel-inner img {

         width: 100%;

         height: 100%;

         }

      </style>

   </head>

   <body>

      <div id="header"></div>

     

      <script src="js/text-typing.js"></script>
       <div style="background-color: DodgerBlue;padding-top: 2px">

<div class="container" >

   <div class="row">

      <div class="col-md-2" style="z-index: 10;position: absolute; ">

         <b>

            <u>

               <h6 style="background-color: #F4EA56;border-right:2px solid black;padding:1px; float:left;padding-left: 2px;padding-right: 10px;color: black;">NEWS</h6>

            </u>

         </b>

      </div>

      <div class="col-md-10">

         <h6 style="padding:1px; color: white">

            <marquee behavior="scroll">

               <?php 

                  while($oss55 = mysqli_fetch_assoc($food9))

                             {echo $oss55["CONTENT"].'&nbsp&nbsp&nbsp|&nbsp&nbsp&nbsp';

                             } 

                  ?>

            </marquee>

         </h6>

      </div>

   </div>

</div>

</div>

      <div id="navbar"></div>

    

      <div id="wowslider-container" style="max-width: 1500px;max-height:600px">

         <div class="ws_images">

            <ul>
               <li><a href="index.php"><img src="sliderimage/p1.png" alt="" title="" id="wows_11"/></a></li>
                 <li><a href="index.php"><img src="sliderimage/p.png" alt="" title="" id="wows_11"/></a></li>
                <li><a href="index.php"><img src="sliderimage/s3.jpg" alt="" title="" id="wows_11"/></a></li>
                 <li><a href="index.php"><img src="sliderimage/s4.jpg" alt="" title="" id="wows_11"/></a></li>
              
                   
            </ul>

         </div>

        <!-- <div class="ws_bullets">

            <div>

               <a href="#" title="Welcome to GNDEC Bidar"><img src="tooltips/1.png" alt=""/>1</a>

               <a href="#" title="Excellent Infrastructures"><img src="tooltips/2.png" alt="You can add description to slides!"/>2</a>

               <a href="#" title="Awards and Recognitions"><img src="tooltips/award2.png" alt="You can add description to slides!"/>2</a>

               <a href="#" title="One of Leading College in India"><img src="tooltips/3.png" alt=""/>3</a>

               <a href="#" title="Prominent Placements"><img src="tooltips/placement.png" alt=""/>3</a>

               <a href="#" title="Best Facilities in Region"><img src="tooltips/4.png" alt=""/>4</a>

               <a href="#" title=""><img src="tooltips/5.png" alt=""/>5</a>

            </div>

         </div>-->

         <!--<a href="#" class="ws_frame"></a>

            <div class="ws_shadow"></div> -->

      </div>

      <script type="text/javascript" src="js/wowslider.js"></script>

      <script type="text/javascript" src="wowjs/script.js"></script>
        <script src="js/text-typing.js"></script>

       
        <hr>
        <div class="container">
        <div class="row">
         <div class="col-lg-2">
               <!-- logo -->
               <p><a href="docs/EOA Report 22-23.PDF">
                  <button type="button" class="btn btn-info btn-sm btn-block">AICTE EOA<br>2022-23<br>
                  </button>
                  </a></p>
               
               <!-- //logo -->
            </div>
            <hr>
            <div class="col-lg-2">
               <!-- logo -->
             <p> <a href="docs/fees.pdf" target="_blank">
                  <button type="button" class="btn btn-danger btn btn-danger btn-sm btn-block">Fee Structure <br>AY:2023-24</button>
                  </a></p>
               
               <!-- //logo -->
            </div>
            <hr>

              <div class="col-lg-2">
               <!-- logo -->
             <p> <a href="docs/nba.pdf" target="_blank">
                  <button type="button" class="btn btn-info btn btn-info btn-sm btn-block">NBA Accrediation <br>Letter</button>
                  </a></p>
               
               <!-- //logo -->
            </div>
            <hr>
            <div class="col-lg-2">
               <!-- logo -->
            <p>   <a href="https://docs.google.com/forms/d/e/1FAIpQLSfwn5SiJ1qevdXJH7aWUekxoLP7HQNoSp3VFH2vlk4FIUhOHQ/viewform" target="_blank">
                  <button type="button" class="btn btn-success btn-sm btn-block">Admission Enquiry <br>form</button>
                  </a> </p>
               
               <!-- //logo -->
            </div>
            <hr>
            <div class="col-lg-2">
               <!-- logo -->
               <p><a href="docs/GNDEC-brochure-21-22.pdf">
                  <button type="button" class="btn btn-warning btn-sm btn-block">College <br>Broucher</button>
                  </a></p>
               
               <!-- //logo -->
            </div>
            <hr>
            <div class="col-lg-2">
               <!-- logo -->
               <p><a href="exam.html">
                  <button type="button" class="btn btn-primary btn-sm btn-block">Exam Section <br>Queries
                  </button>
                  </a></p>
               
               <!-- //logo -->
            </div>
           </div> 
         </div>
         <hr>
      <div class="header-middle-planners-temps container">

         <div class="row">

            <div class="col-lg-6 py-6">

              <!-- <div class="card">

                  <div class="card-header" style="background-color:#5B76C5;">

                     <h5>

                        <center><i class="fas fa-history"></i>&nbsp About GNDECB Education</center>

                     </h5>

                  </div>

                  <div class="card-body" style="border:2px solid grey">

                     <h5 class="card-title"></h5>

                     <p class="card-text">

                     <p>Guru Nanak Dev Engineering College, Bidar, a premier center of Technical Education, was established in August, 1980.This College is approved by All India Council for Technical Education (AICTE), New Delhi and ISO Certified Institute , ISO 9001/2015.</p>

                     <br><a href="#"><button class="btn btn-primary">Know More</button></a>

                  </div>

               </div>-->

<!--<a class="twitter-timeline" href="https://twitter.com/gndecbidar?ref_src=twsrc%5Etfw"  data-height="400" data-chrome="nofooter noborders transparent" >Tweets by GNDEC Bidar</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>-->
<a class="twitter-timeline" href="https://twitter.com/gndecbidar?ref_src=twsrc%5Etfw" data-height="400" >Tweets by gndecbidar</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
</div>

            <div class="col-lg-6 py-6">

               <h1><a>

                  <iframe style="width:100%;height:400px;" scrolling="no" src="alertb/"></iframe>

                  </a>

               </h1>

            </div>

         </div>

         </p>

      </div>
      <hr>
<div class="container">
  <div class="row">
   <div class="col-md-6">
   <div class="card">
  <div class="card-header" style="border:0.5px solid gray;background-color:#8EA8F4">
    <h4><center><i class="fas fa-star"></i>Institute Vision</center></h4>
  </div>
  <div class="card-body" style="border:0.5px solid gray; height:400px">
    <h5 class="card-title"></h5>
    <p class="card-text">To be a premier technological institution that fosters humanity, ethics and excellence in education and research towards inspiring and developing future torch bearers</p> 
  </div>
</div>
</div>
   <div class="col-md-6">
   <div class="card">
  <div class="card-header" style="border:1px solid gray;background-color:#8EA8F4">
    <h4><center><i class="fas fa-crosshairs"></i>Institute Mission</center></h4>
  </div>
  <div class="card-body" style="border:1px solid gray ;height:400px">
    <h5 class="card-title"></h5>
    <p class="card-text">
      <b>M1.   </b>To impart quality educational experience and technical skills to students that enables them to become leaders in their chosen profession. 
         <br><b>M2.</b>To nurture scientific temperament and promote research and development activities.
         <br><b>M3.</b>To inculcate students with an ethical and human values so as to have big picture of societal development in their future career.
    <br> <b>M4.</b> To provide service to industries and communities through educational, technical, and professional activities .
            </p>
  </div>
</div>
</div>
</div><br>
</div>

<!-- /.container -->
      

      <!--<div class="why-choose-planners-temps py-2 bg-light" id="services">

         <div class="wrap py-xl-5 py-lg-3">

            <!--<p class="sub-tittle text-uppercase text-center">Excellent Infrastructures</p>

            <h3 class="tittle text-center text-uppercase mb-sm-5 mb-4">

               Our

               <span>Infrastructure</span>

            </h3>

            <div class="row planners-tempsits-party--templayouts-grid pt-md-4">

               <div class="col-lg-4 services-planners-temps-1">

                  <div class="d-flex party-plane_planners-temps_us bg-white py-4">

                     <div class="col-2 pr-0">

                        <div class="party-plane_features_grid text-center">

                           <i class="fas fa-award"></i>

                        </div>

                     </div>

                     <div class="col-10 planners-temps-why-text">

                        <h4 class="text-dark font-weight-bold mb-3">CERTIFICATION</h4>

                        <p class="text-dark">ISO 9001/15 Certified, 2nd National Karnataka Education Summit Award 2016 “Excellent Contribution in Education”.</p>

                        <br></b>

                     </div>

                  </div>

               </div>

               <div class="col-lg-4 services-planners-temps-1 my-lg-0 my-4">

                  <div class="d-flex party-plane_planners-temps_us bg-white py-4">

                     <div class="col-2 pr-0">

                        <div class="party-plane_features_grid text-center">

                           <i class="fas fa-book"></i>

                        </div>

                     </div>

                     <div class="col-10 planners-temps-why-text">

                        <h4 class="text-dark font-weight-bold mb-3">BOOK LIBRARY</h4>

                        <p class="text-dark" >Library has a rich collection of books about 50000 volumes,11000 Titles and 130 Journals & E-Resources available with digital facility.</p>

                     </div>

                  </div>

               </div>

               <div class="col-lg-4 services-planners-temps-1">

                  <div class="d-flex party-plane_planners-temps_us bg-white py-4">

                     <div class="col-2 pr-0">

                        <div class="party-plane_features_grid text-center">

                           <i class="fas fa-envelope-open-text"></i>

                        </div>

                     </div>

                     <div class="col-10 planners-temps-why-text">

                        <h4 class="text-dark font-weight-bold mb-3">DESK MESSAGE</h4>

                        <p class="text-dark ">College is having well Qualified 22 Ph.D holders,41 persuing Ph.D and PG Completed in various different fields .</p>

                        <br>

                     </div>

                  </div>

               </div>

            </div>

            <div class="row planners-tempsits-party--templayouts-grid mt-lg-5 mt-4">

               <div class="col-lg-4 services-planners-temps-1">

                  <div class="d-flex party-plane_planners-temps_us bg-white py-4">

                     <div class="col-2 pr-0">

                        <div class="party-plane_features_grid text-center">

                           <i class="fas fa-book-reader"></i>

                        </div>

                     </div>

                     <div class="col-10 planners-temps-why-text">

                        <h4 class="text-dark font-weight-bold mb-3">POPULAR COURSES</h4>

                        <p class="text-dark">College offers Seven Under Graduate Courses, Four Post Graduate Courses and Three Research and Development Center.</p>

                        <br>

                     </div>

                  </div>

               </div>

               <div class="col-lg-4 services-planners-temps-1 my-lg-0 my-4">

                  <div class="d-flex party-plane_planners-temps_us bg-white py-4">

                     <div class="col-2 pr-0">

                        <div class="party-plane_features_grid text-center">

                           <i class="fas fa-digital-tachograph"></i>

                        </div>

                     </div>

                     <div class="col-10 planners-temps-why-text">

                        <h4 class="text-dark font-weight-bold mb-3">DIGITAL CAMPUS</h4>

                        <p class="text-dark">Campus is Equipped With Wi-Fi and CAMU Portal which provides complete Student Academic behaviour through App and Web Portals.</p>

                        <br>

                     </div>

                  </div>

               </div>

               <div class="col-lg-4 services-planners-temps-1">

                  <div class="d-flex party-plane_planners-temps_us bg-white py-4">

                     <div class="col-2 pr-0">

                        <div class="party-plane_features_grid text-center">

                           <i class="fas fa-user-check"></i>

                        </div>

                     </div>

                     <div class="col-10 planners-temps-why-text">

                        <h4 class="text-dark font-weight-bold mb-3">AFFILIATION</h4>

                        <p class="text-dark">College is affiliated to Visvesvaraya Technological University,Belgaum and approved by All India Council for Technological Education (AICTE), New Delhi</p>

                     </div>

                  </div>

               </div>

            </div>

         </div>

      </div>
-->
      <section class="teams text-center py-5" id="professors">

         <div class="container py-xl-5 py-lg-3">

            <h3 class="tittle text-center text-uppercase mb-sm-5 mb-4">

               Our

               <span>Visionaries</span>

            </h3>

            <div class="row inner-sec-w3ls-w3pvt-aminfo pt-sm-4">

               <div class="col-md-4 col-sm-6 p-1 mt-sm-0 mt-5">

                  <div class="team-grid text-center">

                     <div class="team-img">

                        <img class="img-fluid rounded" src="images/chairman.png" alt="">

                     </div>

                     <div class="team-info">

                        <h4>Dr. Sardar Balbir Singh</h4>

                        <h6>Chairman</h6>

                        <hr style="border-top:2px solid white;width:40%">

                        <p style="font-size:12px;color: white">Education is the sub-structure upon which we construct our feature.</p>

                     </div>

                  </div>

               </div>

               <div class="col-md-4 col-sm-6 p-1 mt-sm-0 mt-5">

                  <div class="team-grid text-center">

                     <div class="team-img">

                        <img class="img-fluid rounded" src="images/vcp.png" alt="">

                     </div>

                     <div class="team-info">

                        <h4>Mrs. Reshma Kaur</h4>

                        <h6>Vice Chair Person</h6>

                        <hr style="border-top:2px solid white;width:40%">

                        <p style="font-size:12px;color: white">Enlightenment of education is the move from twilight to light.</p>

                     </div>

                  </div>

               </div>

               

             
               <div class="col-md-4 col-sm-6 p-1 mt-sm-0 mt-5">

                  <div class="team-grid text-center">

                     <div class="team-img">

                        <img class="img-fluid rounded" src="images/principal.png" alt="">

                     </div>

                     <div class="team-info">

                        <h4>Dr.Dhananjay M</h4>

                        <h6>Principal</h6>

                        <hr style="border-top:2px solid white;width:40%">

                        <p style="font-size:12px;color: white">Not to dominate minds, but to unlock them.</p>

                     </div>

                  </div>

               </div>

            </div>

         </div>

      </section>

    
       <div class="middle-party--templ" id="subscribe">

         <div class="wrap py-xl-5 py-lg-3">

            <div class="row" >

               <div class="col-xl-6 left-midd-planners-temps pr-4">

                  <h4 class="tittle-2 text-white font-weight-bold mb-3" style="background-color:#00bfff;">VIDEO TOUR</h4>

                  <div class="embed-responsive embed-responsive-16by9">

                     <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/VVksJlNXREI"></iframe>

                  </div>

               </div>

               <div class="col-xl-6 pl-2">

                  

             <!--<img src="placement/image.png" style="max-height: 720 max-width:1280" alt="infosy_place">-->

                          




      

  

                          

                <h4 class="tittle-2 text-white font-weight-bold mb-3" style="background-color:#00bfff;">Achievement</h4>

                 <!-- <img src="images/bootcamp.png" class="img-responsive" alt="Cinque Terre" width="100%" height="300" >--> 



                



                 <div id="demo" class="carousel slide" data-ride="carousel">

                     <ul class="carousel-indicators">

                        <li data-target="#demo" data-slide-to="0" class="active"></li>

                        <li data-target="#demo" data-slide-to="1"></li>

                        <li data-target="#demo" data-slide-to="2"></li>

                        <li data-target="#demo" data-slide-to="3"></li>

                        <li data-target="#demo" data-slide-to="4"></li>

                        <li data-target="#demo" data-slide-to="5"></li>

                     </ul>

                     <div class="carousel-inner" role="listbox">

                       

                       
                       

                        <div class="carousel-item active">

                           <img src="images/mou/ac1.jpeg" alt="total">

                           

                        </div>

                        

                        <div class="carousel-item">

                           <img src="images/mou/ac2.jpeg" alt="total">

                           <div class="carousel-caption">

                            
                           </div>

                        </div>

                     </div>

                     <a class="carousel-control-prev" href="#demo" data-slide="prev">

                     <span class="carousel-control-prev-icon"></span>

                     </a>

                     <a class="carousel-control-next" href="#demo" data-slide="next">

                     <span class="carousel-control-next-icon"></span>

                     </a>

                  </div>

               





               </div>

            </div>

         </div>

      </div>

      <div>
     
       <!--  <section class="testimonials py-2" id="clients">

            <div class="wrap py-xl-3 py-lg-1">

               <p class="sub-tittle text-uppercase text-white text-center" style="background-color: black">Peoples Love</p>

               <h3 class="tittle text-center text-white text-uppercase mb-lg-5 mb-3" style="background-color: black"> Our

                  <span>Testimonials</span>

               </h3>

               <div class="inner-sec-party--templs-planners-tempsinfo pt-2">

                  <div class="owl-carousel owl-theme">

                     <div class="item">

                        <div class="feedback-info text-left">

                           <div class="feedback-top" >

                              <p>Thank you for providing me knowledge. it was very fruitful and reassuring to understand whats scores i needed to do my Masters in Business Administration from a good college.</p>

                           </div>

                           <div class="feedback-grids"  style="background-color: black">

                              <div class="feedback-img">

                                 <img src="images/1.jpeg" class="img-fluid rounded-circle" alt="" />

                              </div>

                              <div class="feedback-img-info">

                                 <h5>Jaideep Sahni is an Indian screenwriter</h5>

                                 <p>Alumni Student

                              </div>

                              <div class="clearfix"> </div>

                           </div>

                        </div>

                     </div>

                     <div class="item">

                        <div class="feedback-info text-left">

                           <div class="feedback-top" >

                              <p>Guru Nanak is a institution where any one can achieve skills and knowledge that one will apply in the coming work life. a valuable and framed enviorment for learning and shape one-self in a  IT corporate enviorment. a decent infrastructure and excellent location are what you experience.</p>

                           </div>

                           <div class="feedback-grids"  style="background-color: black">

                              <div class="feedback-img">

                                 <img src="images/3.png" class="img-fluid rounded-circle" alt="" />

                              </div>

                              <div class="feedback-img-info">

                                 <h5>Ravi Subramanian is an Indian Author</h5>

                                 <p>Alumni

                              </div>

                              <div class="clearfix"> </div>

                           </div>

                        </div>

                     </div>

                     <div class="item">

                        <div class="feedback-info text-left">

                           <div class="feedback-top" >

                              <p>I am proud to be GNDECian, this college is one of the best that provides quality education.The faculty here is always dedicated to help students not only in studies but also in curricular activities.GNDEC has a long way to go but its one of the best !</p>

                           </div>

                           <div class="feedback-grids"  style="background-color: black">

                              <div class="feedback-img">

                                 <img src="images/2.png" class="img-fluid rounded-circle" alt="" />

                              </div>

                              <div class="feedback-img-info">

                                 <h5>Mukund Deshpande,Senior Developer</h5>

                                 <p>Alumni 

                              </div>

                              <div class="clearfix"> </div>

                           </div>

                        </div>

                     </div>

                  </div>

               </div>

            </div>

         </section>-->

         <br>

        

         
      </div>

      <div id="footer"></div>

      <script src="js/jquery-2.2.3.min.js"></script>

      <script src="js/fixed-nav.js"></script>

      <script src="js/owl.carousel.js"></script>

      <script>

         $(document).ready(function () {

         	$('.owl-carousel').owlCarousel({

         		loop: true,

         		margin: 10,

         		responsiveClass: true,

         		responsive: {

         			0: {

         				items: 1,

         				nav: true

         			},

         			600: {

         				items: 1,

         				nav: false

         			},

         			900: {

         				items: 1,

         				nav: false

         			},

         			1000: {

         				items: 1,

         				nav: true,

         				loop: false,

         				margin: 20

         			}

         		}

         	})

         })

      </script>
      

      <script src="js/SmoothScroll.min.js"></script>

      <script src="js/move-top.js"></script>

      <script src="js/easing.js"></script>

      <script src="js/party.js"></script>

      <script src="js/bootstrap.js"></script>

      <script src="js/jquery-1.7.2.js"></script>

      <script src="js/jquery.quicksand.js"></script>

      <script src="js/script.js"></script>

      <script src="js/jquery.prettyPhoto.js"></script>

      <link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />

      <script type="text/javascript" src="js/routes.js"></script>

   </body>

</html>
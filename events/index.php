<?php
include('../dbconn.php');
?>
<!DOCTYPE html>
<head>
	<title>EVENTS HOME | GNDECB</title>
	<meta charset="UTF-8" />
		<script type="text/javascript" src="jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext"
	 rel="stylesheet"><link rel='icon' href='../favicon.ico' type='image/x-icon'/ >
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=latin-ext"
	 rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	 
</head>
<body>
<div id="header"></div>
	<section class="blog " id="blog">
		<div class="container">
			<h2 class="text-bl text-center font-weight-bold mb-2">Events</h2>
			<div class="row">
				<div class="col-md-9">
					<center><div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="height:300px">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="../images/g2.jpg" alt="HOME" style="height:300px;object-fit: fill;background-color:grey">
    </div>
 <?php
 $order ="SELECT * FROM events order by DATE DESC LIMIT 5";
      $food = mysqli_query($conn, $order);
  while($oss5 = mysqli_fetch_assoc($food))
      {
      	echo '<div class="carousel-item">
      <img class="d-block w-100" src="'.$oss5["PHOTO"].'" alt="'.$oss5["TITLE"].'" style="height:300px;object-fit: fill;background-color:grey">
    </div>';
      }

 ?>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div></center>
				</div>
					<script type="text/javascript" src="js/header.js"></script>
				<div class="col-md-3">
						<div class="card" style="height:300px">
  <div class="card-header" style="background-color:lightgreen;padding:1px">
    <h5><center><i class="fas fa-history"></i>&nbsp Upcoming Events</center></h5>
  </div>
  <div class="card-body" style="border:2px solid grey;padding:02px">
    <p class="card-text">
    	<ul style="padding-left: 20px;margin:0px">
    		<?php 
    		      $order519 ="SELECT * FROM upcomingevents order by EDATE DESC LIMIT 5";
      				$food19 = mysqli_query($conn, $order519);
    		 while($oss515 = mysqli_fetch_assoc($food19))
     		 {
     		 	echo '<li>'.$oss515["EVENTTITLE"].'<p style="font-size:12px;margin-bottom:0px">'.$oss515["EDATE"].'</p></li>';
     		 }
    		?>
    	</ul>
    </p>
  </div>
</div>
</div>
</div><hr><h6 class="text-colors">*Click on Events for more Details</h6>
			<h2 class="text-bl text-center font-weight-bold mb-2">Recent Events</h2><br>
			<div class="row">
				<?php 
      $order59 ="SELECT * FROM events order by DATE DESC LIMIT 5";
      $food9 = mysqli_query($conn, $order59);
      while($oss55 = mysqli_fetch_assoc($food9))
      {

		echo'<div class="col-lg-4 col-md-6 px-2 mt-sm-0 mt-4">
					<div class="card">
						<div class="card-header p-0 position-relative">
							<a href=#'.$oss55["SNO"].'>
								<img class="card-img-bottom" style="height:200px" src="'.$oss55["PHOTO"].'"';
		echo 'alt="Card image cap">
								<span class="fa fa-user post-icon" aria-hidden="true"></span>
							</a>
						</div>
						<div class="card-body">
							<h6 class="text-colors let-spa mb-3">'.$oss55['DATE'];
		
		echo '</h6>
							<h5 class="blog-title card-title font-weight-bold">
								<a  class="text-bl">'.$oss55["TITLE"];

		echo '</a>
							</h5>
							<div class="row mt-5">
								<div class="col-9 w3_testi_grid mt-xl-2 mt-lg-0 mt-md-2 mt-4">
									<h5 class="text-colors mb-1">'.$oss55["EVTTYP"];
		echo '</h5><p>'.$oss55["VENUE"];
		echo '</p>
								</div>
							</div>
						</div>
					</div>
				</div>';
		echo '<div id="'.$oss55["SNO"].'" class="pop-overlay animate">
			<div class="popup">
				<img style="width:600px;height:250px" src="'.$oss55["PHOTO"].'" alt="'.$oss55["TITLE"].'" class="img-fluid" />
				<p class="mt-4" style="color: black;font-size:14px" >'.$oss55["DESCRPT"].'</p>
				<a href="'.$oss55["LINK"].'">
				<h6>CLICK HERE FOR MORE INFORMATION</h6>
				</a>
				<a class="close" href="">&times;</a>
			</div>
		</div>';

      }
  $conn->close();
?>
	</div>
	</div>
	</section><br><br><hr>
	<script type="text/javascript" src="js/header.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
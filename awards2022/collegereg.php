<!DOCTYPE html>
<html>
<head>
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-52544469-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-52544469-3');
</script>
	<title>VTU Inter-Collegiate Athletic Meet 2019</title>
	<link rel="stylesheet" href="assets/css/cava_bs.min.css" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<body>
    <center>
          <h1>
            <img src="logo2.jpeg" class="img-fluid cava_logo-img" alt="">
          </h1>
  </center>
<nav class="cava_navbar cava_navbar-expand-lg cava_navbar-dark bg-primary">
  <a class="cava_navbar-brand" href="#" style="padding-left:10%">22nd VTU Inter-Collegiate Athletic Meet 2019</a>
  <button class="cava_navbar-toggler" type="button" data-toggle="collapse" data-target="#cava_navbarNavDropdown" aria-controls="cava_navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="cava_navbar-toggler-icon"></span>
  </button>

  <div class="collapse cava_navbar-collapse" style="padding-left:20%" id="cava_navbarNavDropdown">
    <ul class="cava_navbar-nav">
      <li class="cava_nav-item" style="padding-right:10px">
        <a class="cava_nav-link" href="index.html" style="color:white">Home</a>
      </li>
      <li class="cava_nav-item" style="padding-right:10px">
        <a class="cava_nav-link" href="events.php" style="color:white">Events</a>
      </li>
     <!-- <li class="cava_nav-item" style="padding-right:10px">
        <a class="cava_nav-link" href="#" style="color:white">Schedule</a>
      </li>-->
      <li class="cava_nav-item" style="padding-right:10px">
        <a class="cava_nav-link" href="terms.php" style="color:white">Terms & Conditions</a>
      </li>
      <li class="cava_nav-item" style="padding-right:10px">
        <a class="cava_nav-link" href="registrations.php" style="color:white">Registrations</a>
      </li>
      <li class="cava_nav-item" style="padding-right:10px">
        <a class="cava_nav-link" href="index.html#contact" style="color:white">Contact</a>
      </li>
    </ul>
  </div>
</nav>
<hr>
<div class="cava_container">
	<center><u><h3 class="cava_font-weight-bold">College Registration Form</h3></u></center>
	<!--Personal Details-->
	<form method="POST" action="collreg.php">
  <div class="tab">
    <h5 class="cava_font-weight-bold ">Basic College Information</h5><br>
    <label>*Mandatory Fields.</label>
    <div class="cava_form-row">
    <div class="cava_form-group cava_col-md-12">
      <label class="cava_font-weight-bold " style="color:#3375F1;">Select College*</label>
      <select class="cava_custom-select"  id="type" name="collegename">
       <?php include('dbconn.php');
       $order ="SELECT * FROM clgzoneid order by CLGNAME";
         $food = mysqli_query($conn, $order);
          while($oss = mysqli_fetch_assoc($food))
          {
           // echo '<option value="'.$oss["SLNO"].'">COLLEGE CODE-'.$oss["CLGCODE"].'&nbsp|&nbspCOLLEGENAME-&nbsp'.$oss["CLGNAME"].'&nbsp|&nbspSPORTZONE-&nbsp'.$oss["CLGZONE"].'</option>';
            echo '<option value="'.$oss["SLNO"].'">'.$oss["CLGNAME"].'&nbsp(College Code-'.$oss["CLGCODE"].')
            (Sport Zone-'.$oss["CLGZONE"].')</option>';
          }
          ?>
      <option value="others">OTHERS(Please Mention the Details Below)</option>
      </select><a href="index.html#contact" target="_blank"><h6>Click here for Help and Queries.</h6></a>
    </div> 
  </div>
 <div id="others">
   <div class="cava_form-row">
    <div class="cava_form-group cava_col-md-12">
      <label class="cava_font-weight-bold " style="color:#3375F1;">Enter College Name*</label>
      <input type="text" class="cava_form-control" name="othclgname" placeholder="College Name">
    </div>
  </div>
  <div class="cava_form-row">
    <div class="cava_form-group cava_col-md-6">
      <label class="cava_font-weight-bold " style="color:#3375F1;">Enter College Code*</label>
      <input type="text" class="cava_form-control" name="othclgcode" placeholder="College Code">
    </div>
    <div class="cava_form-group cava_col-md-6">
      <label class="cava_font-weight-bold " style="color:#3375F1;">Enter College Zone*</label>
      <select class="cava_custom-select"  id="type" name="othclgzone">
      <?php 
      $or ="SELECT * FROM zone order by ZID";
         $fet = mysqli_query($conn, $or);
          while($os = mysqli_fetch_assoc($fet))
          {
            echo '<option value="'.$os["ZID"].'">'.$os["ZNAME"].'</option>';
          }
      ?>
    </select>
    </div>
  </div>
 </div>
     <div class="cava_form-group">
    <label class="cava_font-weight-bold " style="color:#3375F1;" >Address*</label>
    <input required="Mandatory" type="text" class="cava_form-control" name="address" placeholder="College Address">
  </div>
  <div class="cava_form-row">
    <div class="cava_form-group cava_col-md-3">
      <label class="cava_font-weight-bold " style="color:#3375F1;" >City*</label>
      <input required="Mandatory" type="text" class="cava_form-control" name="city" placeholder="City Name">
    </div>
        <div class="cava_form-group cava_col-md-3  ">
      <label class="cava_font-weight-bold " style="color:#3375F1;" >Pincode*</label>
      <input required="Mandatory" type="text" class="cava_form-control" name="pincode" placeholder="585***">
    </div>
    <div class="cava_form-group cava_col-md-3">
      <label class="cava_font-weight-bold " style="color:#3375F1;">State*</label>
      <select class="cava_custom-select required" name="state" >
<option value="Karnataka">Karnataka</option>
      </select>
    </div>
    <div class="cava_form-group cava_col-md-3">
      <label class="cava_font-weight-bold " style="color:#3375F1;" for="inputState">Country*</label>
      <select class="cava_custom-select" name="country">
        <option>India</option>
      </select>
    </div>
  </div>
<div class="cava_form-row">
  <div class="cava_form-group cava_col-md-6">
      <label class="cava_font-weight-bold" style="color:#3375F1;">College Email Address*</label>
      <input required="Mandatory" type="email" class="cava_form-control" name="email" placeholder="Enter Email Address">
    </div>
    <div class="cava_form-group cava_col-md-6">
      <label class="cava_font-weight-bold " style="color:#3375F1;">College Landline no*</label>
      <input required="Mandatory" type="text" class="cava_form-control" name="clgcontact" pattern="[0-9]*" placeholder="Enter College Landline No.">
    </div>
  </div>
  <div class="cava_form-row">
    <div class="cava_form-group cava_col-md-6">
      <label class="cava_font-weight-bold" style="color:#3375F1;">Principal Name*</label>
      <input required="Mandatory" type="text" class="cava_form-control" name="pname" placeholder="Enter Principal Name">
    </div>
    <div class="cava_form-group cava_col-md-6">
      <label class="cava_font-weight-bold " style="color:#3375F1;">Principal Contact no*</label>
      <input required="Mandatory" type="tel" pattern="[0-9]{10}" class="cava_form-control" name="pphone" placeholder="10 Digits Phone No(Ex:9087897609)">
    </div>
  </div>
    <div class="cava_form-row">
    <div class="cava_form-group cava_col-md-4">
      <label class="cava_font-weight-bold" style="color:#3375F1;">Physical Director Name*</label>
      <input required="Mandatory" type="text" class="cava_form-control" name="pename" placeholder="P.E Name">
    </div>
    <div class="cava_form-group cava_col-md-4">
      <label class="cava_font-weight-bold " style="color:#3375F1;">Physical Director Contact no*</label>
      <input required="Mandatory" type="tel" class="cava_form-control" pattern="[0-9]{10}" name="pephone" placeholder="10 Digits Phone No(Ex:9087897609)">
    </div>
    <div class="cava_form-group cava_col-md-4">
      <label class="cava_font-weight-bold " style="color:#3375F1;">Physical Director Email</label>
      <input type="email" class="cava_form-control"  name="peemail" placeholder="P.D Email Address">
    </div>
  </div>
  <div class="cava_form-row">
    <div class="cava_form-group cava_col-md-4">
      <label class="cava_font-weight-bold " style="color:#3375F1;">Accomodation Required*</label><br>
      <div class="cava_custom-control cava_custom-radio cava_custom-control-inline ">
  <input required="Mandatory" type="radio" id="1" name="acc" value="Yes" class="cava_custom-control-input" checked>
  <label class="cava_custom-control-label" for="1"style="color:black;">Yes</label>
</div>
<div class="cava_custom-control cava_custom-radio cava_custom-control-inline">
  <input required="Mandatory" type="radio" id="2" name="acc" value="No" class="cava_custom-control-input">
  <label class="cava_custom-control-label" for="2" style="color:black;">No</label>
</div>
    </div>
    <div class="cava_form-group cava_col-md-4">
      <label class="cava_font-weight-bold" style="color:#3375F1;">Expected Date of Arrival*</label>
      <input required="Mandatory" type="date" class="cava_form-control" name="doa">
    </div>
    <div class="cava_form-group cava_col-md-4">
      <label class="cava_font-weight-bold " style="color:#3375F1;">Expected Time of Arrival*</label>
      <input required="Mandatory" type="time" class="cava_form-control" name="toa" placeholder="9:30 PM">
    </div>
  </div>
<div class="cava_form-row">
    <div class="cava_form-group cava_col-md-6">
      <label class="cava_font-weight-bold" style="color:#3375F1;">No. of Participating Men Athletes*</label>
      <input required="Mandatory" type="text" class="cava_form-control" name="man" placeholder="Nos">
    </div>
    <div class="cava_form-group cava_col-md-6">
      <label class="cava_font-weight-bold " style="color:#3375F1;">No. of Participating Women Athletes*</label>
      <input required="Mandatory" type="text" class="cava_form-control" name="fan" placeholder="Nos">
    </div>
  </div>
  <hr><!---->
<h5 class="cava_font-weight-bold">Set Login Credentials</h5><br>
      <div class="cava_form-group">
    <label class="cava_font-weight-bold" style="color:#3375F1;">Login Username**</label>
    <input required="Mandatory" type="text" class="cava_form-control" name="username" placeholder="Set Username">
  </div>
  <div class="cava_form-group">
    <label class="cava_font-weight-bold " style="color:#3375F1;">Login Password**</label>
    <input required="Mandatory" type="password" class="cava_form-control" name="password" placeholder="Set Password">
  </div>
  <div class="cava_form-group">
    <label class="cava_font-weight-bold " style="color:red;">PLEASE KEEP USERNAME AND PASSWORD CONFIDENTIAL TO AVOID SPURIOUS ENTRIES ON YOUR COLLEGE NAME.</label>
  </div>
  <div class="cava_form-group">
  	<button class="cava_btn cava_btn-primary" style="width:100%" name="clgreg">Register College</button> 
    </form>
  </div>
  </div><a href="registrations.php"><button class="cava_btn cava_btn-secondary" style="width:100%">Go back</button></a>
  </div><br> 
  <!--Personal Details-->
</div>

  <!--Personal Details-->
</div>
<footer>
	<div style="background-color: lightblue;padding:10px">
		<center><h6 class="cava_font-weight-bold">Copyright 2019 GNDEC</h6></center>
	</div>
</footer>
<script type="text/javascript">
  var x = document.getElementById("others");
  var y= document.getElementById("type");
  console.log(y.value);
  if(y.value=='others'){
  x.style.display = "block";
  }
  else
  {
  x.style.display = "none";
  }
  $(document).ready(function () {
    $("#type").change(function () {
        var val = $(this).val();
        if (val == "others") {
         x.style.display = "block";
        }
        else{
          x.style.display = "none";
        }
    });
});
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
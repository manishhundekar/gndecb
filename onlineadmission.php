<?php
include('dbconn.php');
?>
<!DOCTYPE html>
<html lang="zxx">
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
    <script src="js/jssor.slider-27.5.0.min.js" type="text/javascript"></script>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
  <link rel="stylesheet" href="css/owl.theme.css" type="text/css" media="all">
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
        <li><a href="index.html">Home</a></li><li>/</li>
        <li>Online Admission Form</li>
    </ol>
</div>
<div class="head gnddepthead"><h3 class="font-weight-bold " style="color: #3375F1;">Online Admission Form</h3></div><hr>
<style>
#regForm {
  background-color: #ffffff;
  padding: 40px;
  width: 100%;
  height: 100%;
  min-width: 300px;
  border:2px solid black;
}

h1 {
  text-align: center;  
}
input[type=text],input[type=date],input[type=email],input[type=number] {
  border-radius:10px;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}


h5
{color: white;
  background-color: #3375F1;
  padding: 5px;

}
button {
  background-color: #4FCAAA;
  color: white;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

label
{
  color: black;
}
/* Make circles that indicate the steps of the form: */
.step {
  width: 100%;
  background-color: #bbbbbb;
  border: none;  
  display: inline-block;
  opacity: 0.5;
  font-size:1.3em;
}
p.serif {
  font-family: "Times New Roman", Times, serif;
}

p.sansserif {
  font-family: Arial, Helvetica, sans-serif;
}
::-webkit-input-placeholder { /* Chrome/Opera/Safari */
  font-size: 13.5px;
}
.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}
</style>
<body>
<div class="container" style="width:100%">
  <form id="regForm" method="POST" action="admissionconnect.php">
 <center> <h2>New Admission 2019-20</h2></center>
      <div style="text-align:center;margin-top:40px;">
      	<div class="container">
      		<div class="row">
      			<div class="col-lg-2 py-2">
      			<span class="step">Personal<br>Information</span>
      		</div>
      		<div class="col-lg-2 py-2">
      		<span class="step">Parents<br>Details</span>
      		</div>
      		<div class="col-lg-2 py-2">
      		<span class="step">Educational<br>Details</span>
      		</div>
      		<div class="col-lg-2 py-2">
      			 <span class="step">Medical<br>History</span>
      		</div>
      		<div class="col-lg-2 py-2">
      			<span class="step">Terms and<br> Conditions</span>
      		</div>
      		</div>
      	</div>
    
    
    
   
    
  </div><br>



<!--Personal Details-->
  <div class="tab">
    <h5 class="font-weight-bold ">Personal information of the Candidate</h5><br>
    <div class="form-row">
    <div class="form-group col-md-6">
      <label class="font-weight-bold" style="color:#3375F1;">First Name</label>
      <input type="text" class="form-control" name="fname" placeholder="Enter First Name">
    </div>
    <div class="form-group col-md-6">
      <label class="font-weight-bold " style="color:#3375F1;" >Last Name</label>
      <input type="text" class="form-control" name="lname" placeholder="Enter Last Name">
    </div>
  </div>
<div class="form-row">
    <div class="form-group col-md-4">
      <label class="font-weight-bold" style="color:#3375F1;">Email</label>
      <input type="email" class="form-control" name="email" placeholder="xyz@gmail.com">
    </div>
    <div class="form-group col-md-4">
      <label class="font-weight-bold " style="color:#3375F1;">Phone</label>
      <input type="text" class="form-control" name="phone" placeholder="+91-xxxxxxxxxx">
    </div>
    <div class="form-group col-md-4">
      <label class="font-weight-bold " style="color:#3375F1;">Nationality</label>
      <input type="text" class="form-control" name="nationality" placeholder="Enter Nationality">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label class="font-weight-bold " style="color:#3375F1;">Gender</label>
      <div class="custom-control custom-radio custom-control-inline ">
  <input type="radio" id="1" name="gender" value="Male" class="custom-control-input" checked>
  <label class="custom-control-label" for="1"style="color:black;">Male</label>
</div>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="2" name="gender" value="Female" class="custom-control-input">
  <label class="custom-control-label" for="2" style="color:black;">Female</label>
</div>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="3" name="gender" value="Other" class="custom-control-input">
  <label class="custom-control-label" for="3" style="color:black;">Other</label>
</div>
    </div>
    <div class="form-group col-md-4">
      <label class="font-weight-bold" style="color:#3375F1;">Date of Birth</label>
      <input type="date" class="form-control" name="dob">
    </div>
    <div class="form-group col-md-4">
      <label class="font-weight-bold " style="color:#3375F1;">Identification Mark</label>
      <input type="text" class="form-control" name="idenmark" placeholder="Enter Identification Mark">
    </div>
  </div><hr><!---->
  <div class="form-row">
    <div class="form-group col-md-4">
      <label class="font-weight-bold " style="color:#3375F1;">Category</label>
      <div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="11" name="category" value="General" class="custom-control-input" checked>
  <label class="custom-control-label" for="11" style="color:black;">General</label>
</div>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="12" name="category" value="OBC" class="custom-control-input">
  <label class="custom-control-label" for="12" style="color:black;">OBC</label>
</div>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="13" name="category" value="SC" class="custom-control-input">
  <label class="custom-control-label" for="13" style="color:black;">SC</label>
</div>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="14" name="category" value="ST"  class="custom-control-input">
  <label class="custom-control-label" for="14" style="color:black;">ST</label>
</div>
    </div>
    <div class="form-group col-md-2">
      <label class="font-weight-bold " style="color:#3375F1;">Religion</label>
      <input type="text" class="form-control" name="religion" placeholder="Enter Religion">
    </div>
    <div class="form-group col-md-2">
      <label class="font-weight-bold " style="color:#3375F1;">Caste</label>
      <input type="text" class="form-control" name="caste" placeholder="Enter Caste">
    </div>
    <div class="form-group col-md-4">
      <label class="font-weight-bold " style="color:#3375F1;">Martial Status</label>
      <div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="21" name="martial" value="Married" class="custom-control-input">
  <label class="custom-control-label" for="21"style="color:black;">Married</label>
</div>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="22" name="martial" value="Un-Married" class="custom-control-input" checked>
  <label class="custom-control-label" for="22" style="color:black;">Un-Married</label>
</div>
    </div>
  </div><hr>
<h5 class="font-weight-bold ">Permanent Address</h5><br>
     <div class="form-group">
    <label class="font-weight-bold " style="color:#3375F1;" >Address</label>
    <input type="text" class="form-control" name="add1" placeholder="House/Flat No">
  </div>
  <div class="form-group">
    <label class="font-weight-bold " style="color:#3375F1;">Address 2</label>
    <input type="text" class="form-control" name="add2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-3">
      <label class="font-weight-bold " style="color:#3375F1;" >City</label>
      <input type="text" class="form-control" name="city">
    </div>
        <div class="form-group col-md-3  ">
      <label class="font-weight-bold " style="color:#3375F1;" >Pincode</label>
      <input type="text" class="form-control" name="pincode">
    </div>
    <div class="form-group col-md-3">
      <label class="font-weight-bold " style="color:#3375F1;">State</label>
      <select class="custom-select required" name="state" >
<option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Odisha">Odisha</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Telangana">Telangana</option>
<option value="Tripura">Tripura</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="Uttarakhand">Uttarakhand</option>
<option value="West Bengal">West Bengal</option>
<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Puducherry (Pondicherry)">Puducherry (Pondicherry)</option>
      </select>
    </div>
    <div class="form-group col-md-3">
      <label class="font-weight-bold " style="color:#3375F1;" for="inputState">Country</label>
      <select class="custom-select" name="country">
        <option>India</option>
      </select>
    </div>
  </div><hr>
  <h5 class="font-weight-bold ">Present Address</h5><br>
        <div class="form-group">
    <label class="font-weight-bold " style="color:#3375F1;" >Address</label>
    <input type="text" class="form-control" name="padd1" placeholder="House/Flat No">
  </div>
  <div class="form-group">
    <label class="font-weight-bold " style="color:#3375F1;" for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" name="padd2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-3">
      <label class="font-weight-bold " style="color:#3375F1;" for="inputCity">City</label>
      <input type="text" class="form-control" name="pcity">
    </div>
        <div class="form-group col-md-3  ">
      <label class="font-weight-bold " style="color:#3375F1;" for="inputZip">Pincode</label>
      <input type="text" class="form-control" name="ppincode">
    </div>
    <div class="form-group col-md-3">
      <label class="font-weight-bold " style="color:#3375F1;">State</label>
      <select class="custom-select required" name="pstate" >
<option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Odisha">Odisha</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Telangana">Telangana</option>
<option value="Tripura">Tripura</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="Uttarakhand">Uttarakhand</option>
<option value="West Bengal">West Bengal</option>
<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Puducherry (Pondicherry)">Puducherry (Pondicherry)</option>
      </select>
    </div>
    <div class="form-group col-md-3">
      <label class="font-weight-bold " style="color:#3375F1;" for="inputState">Country</label>
      <select class="custom-select" name="pcountry">
        <option>India</option>
      </select>
    </div>
  </div><hr>
      <div class="form-row">
      <div class="form-group col-md-6">
      <label class="font-weight-bold " style="color:#3375F1;" >Languages Known</label>
      <input type="text" class="form-control" name="lang"  placeholder="English/Kannada/Hindi/etc">
    </div>
    <div class="form-group col-md-6">
      <label class="font-weight-bold" style="color:#3375F1;">Hobbies</label>
      <input type="text" class="form-control" name="hobb" placeholder="Enter Hobbies">
    </div>
  </div>

  </div>
  <!--Personal Details-->


<!--Parents Information-->
    <div class="tab">
<h5 class="font-weight-bold " ">Parents information of the Candidate</h5><br>
    <div class="form-row">
    <div class="form-group col-md-6">
      <label class="font-weight-bold" style="color:#3375F1;">Father Name</label>
      <input type="text" class="form-control"  name="fathername" placeholder="Enter Father's Name">
    </div>
    <div class="form-group col-md-6">
      <label class="font-weight-bold " style="color:#3375F1;" >Mother Name</label>
      <input type="text" class="form-control"  name="mothername" placeholder="Enter Mother Name">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label class="font-weight-bold" style="color:#3375F1;">Email</label>
      <input type="email" class="form-control"  name="parentemail" placeholder="xyz@gmail.com">
    </div>
    <div class="form-group col-md-4">
      <label class="font-weight-bold " style="color:#3375F1;">Phone</label>
      <input type="text" class="form-control"  name="parentphone" placeholder="+91-xxxxxxxxxx">
    </div>
    <div class="form-group col-md-4">
      <label class="font-weight-bold " style="color:#3375F1;">Annual Income</label>
      <input type="text" class="form-control"  name="parentincome" placeholder="In Rs.">
    </div>
  </div>
      <div class="form-row">
    <div class="form-group col-md-6">
      <label class="font-weight-bold" style="color:#3375F1;">Father's Qualification Details</label>
      <input type="text" class="form-control"  name="fatherqual" placeholder="Enter the details">
    </div>
    <div class="form-group col-md-6">
      <label class="font-weight-bold " style="color:#3375F1;" >Mother's Qualification Details</label>
      <input type="text" class="form-control"  name="motherqual" placeholder="Enter the details">
    </div>
  </div><hr>
  <center><h4>OR</h4></center>
  <hr>
  <h5 class="font-weight-bold " >Guardian information of the Candidate(optional)</h5><br>
    <div class="form-row">
    <div class="form-group col-md-6">
      <label class="font-weight-bold" style="color:#3375F1;">Guardian's Name</label>
      <input type="text" class="form-control" name="grdname" placeholder="Enter Guardian's Name">
    </div>
    <div class="form-group col-md-6">
      <label class="font-weight-bold " style="color:#3375F1;" >Guardian's Phone</label>
      <input type="text" class="form-control" name="grdphone" placeholder="Enter Guardian's Phone">
    </div>
  </div>
  </div><!--Parents Information-->
  <!--Educational Information-->
    <div class="tab">
<h5 class="font-weight-bold " >Educational Details of the Candidate</h5><br>
    <div class="form-row">
    <div class="form-group col-md-6">
      <label class="font-weight-bold" style="color:#3375F1;">Name of the College:</label>
      <input type="text" class="form-control" name="collegename" placeholder="Enter P.U/Diploma/10+2 Equivalent Passed College details">
    </div>
    <div class="form-group col-md-6">
      <label class="font-weight-bold" style="color:#3375F1;">Board/University of the College:</label>
      <input type="text" class="form-control" name="boardname" placeholder="Enter Board/University of the college details">
    </div>
  </div>
      <div class="form-row">
    <div class="form-group col-md-7">
      <label class="font-weight-bold " style="color:#3375F1;" >Address of the College:</label>
      <input type="text" class="form-control" name="collegeadd" placeholder="City/Pincode/State">
    </div>
    <div class="form-group col-md-5">
      <label class="font-weight-bold " style="color:#3375F1;" >Passing month & year:</label>
      <input type="text" class="form-control" name="passyear" placeholder="Month-201x">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-3">
      <label class="font-weight-bold " style="color:#3375F1;" >Registration no:</label>
      <input type="text" class="form-control" name="regno" placeholder="ABC123456">
    </div>
        <div class="form-group col-md-3">
      <label class="font-weight-bold " style="color:#3375F1;" >Duration:</label>
      <input type="text" class="form-control" name="duration" placeholder="XX years">
    </div>
        <div class="form-group col-md-3">
      <label class="font-weight-bold " style="color:#3375F1;" >Attempts:</label>
      <input type="text" class="form-control" name="attempts" placeholder="No. of Attempts made">
    </div>
        <div class="form-group col-md-3">
      <label class="font-weight-bold " style="color:#3375F1;" >Exams Passed:</label>
      <input type="text" class="form-control" name="examspassed" placeholder="Exams Passed so far">
    </div>
  </div><hr>
  <h5 class="font-weight-bold " >Details Of Marks in Qualifying Examination</h5>
  <h6 class="font-weight-bold ">*To be filled by Candidate passing 10+2 </h6><br>
  <div class="table-responsive-sm table-responsive-md table-responsive-lg">
  <table class="table table-bordered ">
    <thead class="thead-light">
      <th>Subject</th>
      <th>Marks Secured</th>
      <th>Maximum Marks</th>
      <th>Percentage</th>
    </thead>
    <tbody>
<tr>
        <td><p style="font-size:18px">Physics</p></td>
      <td><div class="form-group">
      <input type="text" class="form-control" name="phymarks" placeholder="Marks Secured">
    </div></td>
      <td><div class="form-group">
      <input type="text" class="form-control" name="phytotmarks" placeholder="Total Marks">
    </div></td>
      <td><div class="form-group">
      <input type="text" class="form-control" name="phyperc" placeholder="Percentage">
    </div></td>
</tr>
<tr>
        <td><p style="font-size:18px">Mathematics</p></td>
      <td><div class="form-group">
      <input type="text" class="form-control" name="mathsmarks" placeholder="Marks Secured">
    </div></td>
      <td><div class="form-group">
      <input type="text" class="form-control" name="mathstotmarks" placeholder="Total Marks">
    </div></td>
      <td><div class="form-group">
      <input type="text" class="form-control" name="mathsperc" placeholder="Percentage">
    </div></td>
</tr>
<tr>
        <td><p style="font-size:18px" class="font-weight-bold">Any One of the following</p>
<p>Chemistry, Biology, Bio-Technology,<br>Computer Science, Electronics</p></td>
      <td><div class="form-group">
      <input type="text" class="form-control" name="othermarks" placeholder="Marks Secured">
    </div></td>
      <td><div class="form-group">
      <input type="text" class="form-control" name="othertotmarks" placeholder="Total Marks">
    </div></td>
      <td><div class="form-group">
      <input type="text" class="form-control" name="otherperc" placeholder="Percentage">
    </div></td>
</tr>
    </tbody>
  </table>
</div>
<hr>
  <center><h4>OR</h4></center>
  <hr>
<h6 class="font-weight-bold ">*To be filled by Diploma Candidate</h6><br>
<div class="table-responsive-sm table-responsive-md table-responsive-lg">
  <table class="table table-bordered">
    <thead class="thead-light">
      <th>Enter Diploma Branch</th>
      <th>Marks Secured in Diploma <br> IIIrd Year</th>
      <th>Maximum Marks in Diploma <br>IIIrd Year</th>
      <th>Percentage</th>
    </thead>
    <tbody>
<tr>
        <td><p style="font-size:18px"><input type="text" class="form-control"  placeholder="Diploma Branch"></p></td>
      <td><div class="form-group">
      <input type="text" class="form-control" name="diplomamarks" placeholder="Marks Secured">
    </div></td>
      <td><div class="form-group">
      <input type="text" class="form-control" name="diplomatotmarks" placeholder="Total Marks">
    </div></td>
      <td><div class="form-group">
      <input type="text" class="form-control" name="diplomaperc" placeholder="Percentage">
    </div></td>
</tr>
    </tbody>
  </table>
</div>
<h5 class="font-weight-bold">Engineering Branch Selection</h5><br>
<div class="form-row">
    <div class="form-group col-md-3">
      <label class="font-weight-bold " style="color:#3375F1;">Priority 1</label>
      <select class="custom-select required" name="prior1" >
<option>Automobile Engineering</option>
<option>Civil Engineering</option>
<option>Electrical and Electronics Engineering</option>
<option>Electronics and Communications Engineering</option>
<option>Computer Science and Engineering</option>
<option>Information Science and Engineering</option>
<option>Mechanical Engineering</option>
      </select>
    </div>
        <div class="form-group col-md-3">
      <label class="font-weight-bold " style="color:#3375F1;">Priority 2</label>
      <select class="custom-select required" name="prior2" >
<option>Automobile Engineering</option>
<option>Civil Engineering</option>
<option>Electrical and Electronics Engineering</option>
<option>Electronics and Communications Engineering</option>
<option>Computer Science and Engineering</option>
<option>Information Science and Engineering</option>
<option>Mechanical Engineering</option>
      </select>
    </div>
        <div class="form-group col-md-3">
      <label class="font-weight-bold " style="color:#3375F1;">Priority 3</label>
      <select class="custom-select required" name="prior3" >
<option>Automobile Engineering</option>
<option>Civil Engineering</option>
<option>Electrical and Electronics Engineering</option>
<option>Electronics and Communications Engineering</option>
<option>Computer Science and Engineering</option>
<option>Information Science and Engineering</option>
<option>Mechanical Engineering</option>
      </select>
    </div>
        <div class="form-group col-md-3">
      <label class="font-weight-bold " style="color:#3375F1;">Priority 4</label>
      <select class="custom-select required" name="prior4" >
<option>Automobile Engineering</option>
<option>Civil Engineering</option>
<option>Electrical and Electronics Engineering</option>
<option>Electronics and Communications Engineering</option>
<option>Computer Science and Engineering</option>
<option>Information Science and Engineering</option>
<option>Mechanical Engineering</option>
      </select>
    </div>
  </div>
  </div>
<!--EOF Educational Information-->
  <!--Medical History-->
  <div class="tab">
        <h5 class="font-weight-bold ">Medical information of the Candidate</h5><br>
    <div class="form-row">
    <div class="form-group col-md-5">
      <label class="font-weight-bold" style="color:#3375F1;">In Case of Emergency whom to Contact</label>
      <input type="text" class="form-control" name="emername" placeholder="Enter Full Name">
    </div>
    <div class="form-group col-md-5">
      <label class="font-weight-bold" style="color:#3375F1;">.</label>
      <input type="text" class="form-control" name="emercontact" placeholder="Enter Contact Number">
    </div>
  </div>
      <div class="form-row">
    <div class="form-group col-md-5">
      <label class="font-weight-bold" style="color:#3375F1;">Blood Group of Candidate</label>
      <input type="text" class="form-control" name="bloodgrp" placeholder="Blood Group">
    </div>
        <div class="form-group col-md-5">
      <label class="font-weight-bold" style="color:#3375F1;">Allergy to any Medicine</label>
      <input type="text" class="form-control" name="allergy" placeholder="Allergy Name">
    </div>
  </div>
        <div class="form-row">
    <div class="form-group col-md-5">
      <label class="font-weight-bold" style="color:#3375F1;">Past Medicine History of Candidate</label>
      <input type="text" class="form-control" name="pastmed" placeholder="Enter details">
    </div>
  </div>
  <p>Information Provided by you will be the basis of providing further Medical treatment to your ward please write your ward's complete Medical History for Our Records.</p>
  </div>
<!--EOF Medical History-->
  <!--Terms and Conditions-->
  <div class="tab">
    <h5 class="font-weight-bold ">Terms and Conditions</h5><br>
    <div class="form-row">
    <div class="form-group col-md-12">
      <center><b><u><h4>AFFIRMATION OF CANDIDATES</h4></u></b></center>
      <p class="sansserif" style="justify-content: ">1) I do hereby certify that the particulars furnished above are correct.<br>
2)  I hereby agree, if admitted, to abide by the Rules & Regulations of the College in force from time to time including the dress code as given in the prospectus.<br>
3)  I undertake that I will do nothing inside and outside the College that will interfere with the orderly management and discipline.<br>
4)  I will do nothing which will bring a bad name to the College or the management in any way.<br>
5)  I will not consume liquor or drugs (not prescribed by the Doctor) in the Hostel or College, I shall not smoke in the College and Hostel premises.<br>
6)  I will not indulge in any ragging activities during my course of study in the College. If found guilty the management can expel me from the College.<br>
7)  I will not interfere in the policy matters of the management relating to administrative affairs during my course of studies in the College.<br>
8)  I shall treat the Attendance in the morning assembly/period meant for Students activates Co-Ordination committee / Sports / Any function / activities organized by the College as part of my curricular activities and will attend the same.<br>
9)  I further agree to submit to any action may entail cancellation of admission rustication / expulsion and/or criminal prosecution (if necessary as per law)<br>
10) I fully understand that above action may entail cancellation of admission rustication / expulsion and/or criminal prosecution (if necessary as per law)<br>
11) I fully understand that I have been given admission as Sikh student under minority quota and that in case, I fail to maintain the Sikh status I am liable to disciplinary action of expulsion / confiscation of security deposit from the College (Sikh Students). <br>
12) I understand that Branch of Engineering Allotted by Management will be final.<br>
13) I have read and understood the above clauses and hereby append my signature by my own free will.<br>
</p><br>
<center><b><u><h4>AFFIRMATION OF PARENT / GUARDIAN</h4></u></b></center>
      <p class="sansserif" style="justify-content: ">1) I certify that the above particulars furnished by my son / ward are correct.<br>
2)  I undertake to educate my son/ward in this college till completion of the course.<br>
3)  I undertake the responsibility of timely payment of all college dues of my son/ward and for his good conduct throughout his stay in the college. <br> In case of failure to do so the Management's decision will be final and binding on me.<br>
4)  I understand that failure to clear the College dues before University Examination my ward will not be permitted to appear in the examination.<br>
5)  In case I withdraw my son/ward in the middle of the course, I agree to pay remaining year fees compensation stipulated by the management of the College.<br>
6)  I understand that the admission once taken is final and amounts paid shall not be refunded under any circumstances.<br>
7)  I understand that in case of false / suppressed information my son/ward is likely to be expelled from college in addition to criminal prosecution if required.<br>
8)  I understand that my ward shall be expelled/rusticated if found consuming liquor, or un-authorized drugs or smoking.<br>
9)  I have fully understood the consequences of the above undertaking and hereby append my signature by my own free will.<br>
10) Any legal dispute will be subject to Bidar Jurisdiction.<br>
</p>
    </div>
  </div>
      <div class="form-group">
    <div class="form-check required">
      <input class="form-check-input" type="checkbox" id="gridCheck" checked >
      <label class="font-weight-bold " style="color:#3375F1;" class="form-check-label" for="gridCheck">
        I agree to all the Institution's Terms and Condidions
      </label><input type="submit" name="upload" style="width: 100%; background-color:lightgreen" >

    </div>
  </div>
  </div>
  <!--EOF Terms and Conditions-->
  <div style="overflow:auto;">
    <div>

      <button type="button" id="nextBtn" style="width: 100%" onclick="nextPrev(1)">Next</button><br><br>
      <button type="button" id="prevBtn" style="width: 100%" onclick="nextPrev(-1)">Previous</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->

</form>
  
</div>

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }

  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").style.display = "none";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
    document.getElementById("nextBtn").style.display = "inline";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
 if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script><br><br>
<div id="footer"></div>
<script type="text/javascript" src="js/routes.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>

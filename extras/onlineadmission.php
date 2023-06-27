<?php
include('dbconn.php');
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
  <title>Online Admission Form | GURU NANAK DEV ENGINEERING COLLEGE BIDAR</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="Guru Nanak Dev Engineering College Bidar - 585401 GNDECB GND Gurudwara " />
  <script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="js/jssor.slider-27.5.0.min.js" type="text/javascript"></script>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
  <link rel="stylesheet" href="css/owl.theme.css" type="text/css" media="all">
  <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext"
      rel="stylesheet">
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

button {
  background-color: #3375F1;
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
  height:10%;
  width: 20%;
  background-color: #bbbbbb;
  border: none;  
  display: inline-block;
  opacity: 0.5;
  font-size:1.2vw;
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
  <form id="regForm" action="/action_page.php">
 <center> <h2>New Admission 2019-20</h2></center>
      <div style="text-align:center;margin-top:40px;">
    <span class="step">Personal<br>Information</span>
    <span class="step">Parents<br>Details</span>
    <span class="step">Educational<br>Details</span>
    <span class="step">Medical<br>History</span>
  </div><br>
  <div class="tab">
    <h4 class="font-weight-bold " style="color: #3375F1;">Personal information of the Candidate</h4><br>
    <div class="form-row">
    <div class="form-group col-md-6">
      <label class="font-weight-bold" style="color:#3375F1;">First Name</label>
      <input type="text" class="form-control"placeholder="Enter First Name">
    </div>
    <div class="form-group col-md-6">
      <label class="font-weight-bold " style="color:#3375F1;" >Last Name</label>
      <input type="text" class="form-control"  placeholder="Enter Last Name">
    </div>
  </div>
<div class="form-row">
    <div class="form-group col-md-4">
      <label class="font-weight-bold" style="color:#3375F1;">Email</label>
      <input type="email" class="form-control" placeholder="xyz@gmail.com">
    </div>
    <div class="form-group col-md-4">
      <label class="font-weight-bold " style="color:#3375F1;">Phone</label>
      <input type="text" class="form-control"  placeholder="+91-xxxxxxxxxx">
    </div>
    <div class="form-group col-md-4">
      <label class="font-weight-bold " style="color:#3375F1;">Nationality</label>
      <input type="text" class="form-control" placeholder="Indian">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label class="font-weight-bold " style="color:#3375F1;">Gender</label>
      <div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="1" name="gender"  class="custom-control-input">
  <label class="custom-control-label" for="1"style="color:black;">Male</label>
</div>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="2" name="gender"  class="custom-control-input">
  <label class="custom-control-label" for="2" style="color:black;">Female</label>
</div>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="3" name="gender"  class="custom-control-input">
  <label class="custom-control-label" for="3" style="color:black;">Other</label>
</div>
    </div>
    <div class="form-group col-md-4">
      <label class="font-weight-bold" style="color:#3375F1;">Date of Birth</label>
      <input type="date" class="form-control">
    </div>
    <div class="form-group col-md-4">
      <label class="font-weight-bold " style="color:#3375F1;">Identification Mark</label>
      <input type="text" class="form-control" placeholder="Enter Identification Mark">
    </div>
  </div><hr><!---->
  <div class="form-row">
    <div class="form-group col-md-4">
      <label class="font-weight-bold " style="color:#3375F1;">Category</label>
      <div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="11" name="category"  class="custom-control-input">
  <label class="custom-control-label" for="11"style="color:black;">General</label>
</div>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="12" name="category"  class="custom-control-input">
  <label class="custom-control-label" for="12" style="color:black;">OBC</label>
</div>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="13" name="category"  class="custom-control-input">
  <label class="custom-control-label" for="13" style="color:black;">SC</label>
</div>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="14" name="category"  class="custom-control-input">
  <label class="custom-control-label" for="14" style="color:black;">ST</label>
</div>
    </div>
    <div class="form-group col-md-2">
      <label class="font-weight-bold " style="color:#3375F1;">Religion</label>
      <input type="text" class="form-control" placeholder="Enter Religion">
    </div>
    <div class="form-group col-md-2">
      <label class="font-weight-bold " style="color:#3375F1;">Caste</label>
      <input type="text" class="form-control" placeholder="Enter Caste">
    </div>
    <div class="form-group col-md-4">
      <label class="font-weight-bold " style="color:#3375F1;">Category</label>
      <div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="21" name="martial"  class="custom-control-input">
  <label class="custom-control-label" for="21"style="color:black;">Married</label>
</div>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="22" name="martial"  class="custom-control-input">
  <label class="custom-control-label" for="22" style="color:black;">Un-Married</label>
</div>
    </div>
  </div><hr>
<h4 class="font-weight-bold " style="color: #3375F1;">Permanent Address</h4><br>
     <div class="form-group">
    <label class="font-weight-bold " style="color:#3375F1;" >Address</label>
    <input type="text" class="form-control" placeholder="House/Flat No">
  </div>
  <div class="form-group">
    <label class="font-weight-bold " style="color:#3375F1;" for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-3">
      <label class="font-weight-bold " style="color:#3375F1;" for="inputCity">City</label>
      <input type="text" class="form-control">
    </div>
        <div class="form-group col-md-3  ">
      <label class="font-weight-bold " style="color:#3375F1;" for="inputZip">Pincode</label>
      <input type="text" class="form-control">
    </div>
    <div class="form-group col-md-3">
      <label class="font-weight-bold " style="color:#3375F1;">State</label>
      <select class="custom-select required" name="" >
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
  <h4 class="font-weight-bold " style="color: #3375F1;">Present Address</h4><br>
        <div class="form-group">
    <label class="font-weight-bold " style="color:#3375F1;" >Address</label>
    <input type="text" class="form-control" placeholder="House/Flat No">
  </div>
  <div class="form-group">
    <label class="font-weight-bold " style="color:#3375F1;" for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-3">
      <label class="font-weight-bold " style="color:#3375F1;" for="inputCity">City</label>
      <input type="text" class="form-control">
    </div>
        <div class="form-group col-md-3  ">
      <label class="font-weight-bold " style="color:#3375F1;" for="inputZip">Pincode</label>
      <input type="text" class="form-control">
    </div>
    <div class="form-group col-md-3">
      <label class="font-weight-bold " style="color:#3375F1;">State</label>
      <select class="custom-select required" name="" >
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
      <div class="form-row">
      <div class="form-group col-md-6">
      <label class="font-weight-bold " style="color:#3375F1;" >Languages Known</label>
      <input type="text" class="form-control"  placeholder="English/Kannada/Hindi/etc">
    </div>
    <div class="form-group col-md-6">
      <label class="font-weight-bold" style="color:#3375F1;">Hobbies</label>
      <input type="text" class="form-control" placeholder="Enter Hobbies">
    </div>
  </div>

 
  
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="font-weight-bold " style="color:#3375F1;" class="form-check-label" for="gridCheck">
        I agree to all the Institution's Terms and Condidions
      </label>
    </div>
  </div>
  </div><!--TAB1-->








  <div class="tab">Contact Info:
    <p><input placeholder="E-mail..." oninput="this.className = ''" name="email"></p>
    <p><input placeholder="Phone..." oninput="this.className = ''" name="phone"></p>
  </div>
  <div class="tab">Birthday:
    <p><input placeholder="dd" oninput="this.className = ''" name="dd"></p>
    <p><input placeholder="mm" oninput="this.className = ''" name="nn"></p>
    <p><input placeholder="yyyy" oninput="this.className = ''" name="yyyy"></p>
  </div>
  <div class="tab">Login Info:
    <p><input placeholder="Username..." oninput="this.className = ''" name="uname"></p>
    <p><input placeholder="Password..." oninput="this.className = ''" name="pword" type="password"></p>
  </div>
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
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
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

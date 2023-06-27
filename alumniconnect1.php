<?php
include('dbconn.php');
?>
<?php

  if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  if (isset($_POST['upload'])) {
  	$fname = $_POST['fname'];
    $email = $_POST['email'];
    $degree = $_POST['gender'];
    $specialization = $_POST['specialization'];
    $presentstatus = $_POST['pstatus'];
    $ename= $_POST['ename'];
    $eyear=$_POST['eyear'];
    $desgination=$_POST['designation'];

    //tab2 information
    $rate1 = $_POST['rate1'];
    $rate2 = $_POST['rate2'];
    $rate3 = $_POST['rate3'];
    $rate4 = $_POST['rate4'];
    $rate5 = $_POST['rate5'];
    $rate6 = $_POST['rate6'];
    $rate7 = $_POST['rate7'];
    $rate8 = $_POST['rate8'];
     $rate9 = $_POST['rate9'];
    $rate10 = $_POST['rate10'];
    $rate11 = $_POST['rate11'];
    $rate12 = $_POST['rate12'];
    $rate13 = $_POST['rate13'];
    $rate14 = $_POST['rate14'];
    $rate15 = $_POST['rate15'];
    $sugg1 = $_POST['suggestion1'];
    $sugg2 = $_POST['suggestion2'];
    $sugg3 = $_POST['suggestion3'];
   


    

    //INSERTION QUERY
  	$stmt =$conn->prepare("INSERT INTO form2 (FNAME,EMAIL,DEGREE,SPECIALIZATION,PRESENTSTATUS,ENAME,EYEAR,DESIGNATION,RATING1,RATING2,RATING3,RATING4,RATING5,RATING6,RATING7,RATING8,RATING9,RATING10,RATING11,RATING12,RATING13,RATING14,RATING15,SUGGESTION1,SUGGESTION2,SUGGESTION3) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("ssssssisssssssssssssssssss", $fname,$email,$degree,$specialization,$presentstatus,$ename,$eyear,$desgination,$rate1,$rate2,$rate3,$rate4,$rate5,$rate6,$rate7,$rate8,$rate9,$rate10,$rate11,$rate12,$rate13,$rate14,$rate15,$sugg1,$sugg2,$sugg3);
    $stmt->execute();


  	 
  }
?> 
<!DOCTYPE html>
<html>
<head>
    
<meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="Guru Nanak Dev Engineering College Bidar - 585401 GNDECB GND Gurudwara " />
  <script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext"
      rel="stylesheet"><link rel='icon' href='favicon.ico' type='image/x-icon'/ >
  <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
      rel="stylesheet">
      
</head>
<style type="text/css">
    .emp-profile{
    padding: 1%;
    border-radius: 0.5rem;
    background: #fff;
}
.profile-head h5{
    color: #333;
}
.profile-head h6{
    color: #0062cc;
}
h5
{color: white;
  background-color: grey;
  padding: 5px;

}
td{
    width: 16.6%;
}

</style>
<body onload="myFunction();" >
</body>
<script type="text/javascript" src="js/routes.js"></script>
<script>
function myFunction() {
  alert("Thank you for submitting Alumni Survey Successfully\nPlease wait");
  window.location.href = "alumnisurvey.php";
}
</script>
</html>
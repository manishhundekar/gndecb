<?php
include('dbconn.php');
?>
<?php

  if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  if (isset($_POST['upload'])) {
  	$grievance = $_POST['text'];
    $name= $_POST['email'];
    $contactnumber=$_POST['contactnumber'];
    $email = $_POST['message'];


   $stmt =$conn->prepare("INSERT INTO contactus (NAME,EMAIL,CONTACTNUMBER,MESSAGE) VALUES (?,?,?,?)");
    $stmt->bind_param("ssis", $grievance,$name,$contactnumber,$email);
    $stmt->execute();

  	echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully Submitted');
    window.location.href='contactus.php';
    </script>");
    }
   
  
?>
<!--<!DOCTYPE html>
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
  window.location.href = "contactus.php";
}
</script>
</html>-->
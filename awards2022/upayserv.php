<?php
include('session.php');
$usernameref=$_SESSION['login_user'];
if(!isset($_SESSION['login_user'])){
header("location:adminlogin.php"); // Redirecting To Home Page
}
$order59 ="SELECT * FROM college where UNAME='$usernameref'";
$food9 = mysqli_query($conn, $order59);
$oss55 = mysqli_fetch_assoc($food9);
$usernamerefn=$oss55["CLGNAME"];
$cid=$oss55["CLGDBID"];
$clgcode=$oss55["CLGCODE"];
$clgzone=$oss55["CLGZONE"];
$order59 ="SELECT * FROM zone where ZID='$clgzone'";
$food9 = mysqli_query($conn, $order59);
$oss55 = mysqli_fetch_assoc($food9);
$clgzone=$oss55["ZNAME"];
?>
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
<style type="text/css">
  td{
    border: 2px solid black;
  }
</style>
   <title>COLLEGE PORTAL HOME| GNDECB </title>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="assets/css/cava_bs.min.css" crossorigin="anonymous">
</head>
<body>
<nav class="cava_navbar cava_navbar-expand-lg cava_navbar-dark bg-primary">
  <a class="cava_navbar-brand" href="#" style="padding-left:10%">22nd VTU Inter-Collegiate Athletic Meet 2019 | College Portal<br> <?php echo $usernamerefn;?> |
  <?php echo $clgcode;?> | <?php echo $clgzone;?> </a>
  <button class="cava_navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="cava_navbar-toggler-icon"></span>
  </button>
  <div class="collapse cava_navbar-collapse" style="padding-left:25%" id="navbarNavDropdown">
    <ul class="cava_navbar-nav">
      <li class="cava_nav-item" style="padding-right:10px">
        <a class="cava_nav-link cava_font-weight-bold" href="home.php" style="color:#EF7156;background-color:white";>BACK</a>
      </li>
      <li class="cava_nav-item" style="padding-right:10px">
        <a class="cava_nav-link cava_font-weight-bold" href="logout.php" style="color:#EF7156;background-color:white">LOGOUT</a>
      </li>
    </ul>
  </div>
</nav>
  <hr><br>
  <center><h3><?php echo $usernamerefn;?> | <?php echo $clgcode;?> | <?php echo $clgzone;?></h3></center>
<?php
if (isset($_POST['payupload'])) 
{   
    if (mysqli_connect_errno())
    {
    echo "Failed to connect to Database: " . mysqli_connect_error();
    }
    else
    {
    $cid=$_POST['cid'];
    $transdate = $_POST['transdate'];
    $transno = $_POST['transno'];
    $paytype = $_POST['paytype'];
    $feepaid = $_POST['feepaid'];
    $query = "SELECT * From payment Where CID=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $cid);
    $stmt->execute();
    if($stmt->fetch()) //fetching the contents of the row
    {
         echo "<center><img src='notdone.jpg'></center>";
         echo "<center><h4>Payment Details already exists.<br><a href='javascript:javascript:history.go(-1)'>Click here to go back.</a></h4>
         <hr><h5 style='color: green'>FOR HELP PLEASE CONTACT US.</h5></center>";
         
    }
    else    
    {
    //INSERTION QUERY
  	$sql = "INSERT INTO payment(CID,TDATE,TRANNO,PTYPE,FEEPAID) VALUES ('$cid','$transdate','$transno','$paytype','$feepaid')";
  	mysqli_query($conn, $sql);
  	echo mysqli_connect_error();
        if(mysqli_error($conn))
        {
  	       echo mysqli_error($conn);
        }
        else
         {
        echo "<center><img src='done.jpg'></center>";
        echo "<center><h4>THANK YOU FOR THE REGISTRATION.<br><a href='home.php'>Click here to go back</a></h4></center>";
        }  
    } 
}
}
?> 
<footer>
    <div style="background-color: lightblue;padding:10px">
        <center><h6 class="cava_font-weight-bold">&copyCopyright 2019 GNDEC</h6></center>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
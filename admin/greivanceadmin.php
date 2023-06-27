<?php
include('session.php');
if(!isset($_SESSION['login_user'])){
header("location:adminlogin.php"); // Redirecting To Home Page
}
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
  <title>GREIVANCE | GNDECB ADMIN</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="Guru Nanak Dev Engineering College Bidar - 585401 GNDECB GND Gurudwara " />
  <script src="assets/js/jquery-1.11.3.min.js" type="text/javascript"></script>
  <link href="assets/css/material-kit.css?v=2.0.5" rel="stylesheet" />
</head>
<body>
<div id="navbara"></div>
<script type="text/javascript" src="assets/js/routes.js"></script>
  <center><h3>GREIVANCE</h3><br>
<div style="background-color:#D2B4DE">
      <center><h3>GREIVANCE  DATA</h3>
      </div>
<div class="container">
<div class="table-responsive">
  <table class="table table-bordered table-hover ">
  <thead class="thead-light">
         <tr>            
          <th>Sl No.</th>
          <th>Date of Submission</th>
          <th>Name</th>
          <th>User type</th>
          <th>Phone</th>                                       
        </tr>
    </thead>
<form method="post" >
	        <tbody>
             <?php 
      $order59 ="SELECT * FROM grievance order by ADSLNO DESC";
      $food9 = mysqli_query($conn, $order59);
      while($oss55 = mysqli_fetch_assoc($food9))
      {echo '<tr><td>'. $oss55["ADSLNO"]."</td><td>". $oss55["TIME"]."</td><td>". $oss55["NAME"] ."</td><td>". $oss55["USERTYPE"]."</td><td>". $oss55["PHONE"] . "</td></tr>";

      } 
          
?>
</tbody>
</form>
</table> 

</div>
  <div style="background-color:#D2B4DE">
      <center><h3>PRINT GREIVANCE DATA</h3> </center>
      </div>
<div class="container">
  <form method="post" action="../printgreivance.php">
  <table class="table table-bordered">
    <tr>
      <td>Sl no.</td>
      <td><input type="number" name="email"></td>
    </tr>
    <tr>
      <td></td><td><input type="submit" class="btn" name="print"></td>
    </tr>
  </table>
</form>
</div>
</center>	
<!--

  <div style="background-color:#D2B4DE">
      <center><h3>DELETE GREIVANCE DATA</h3> </center>
      </div>
<div class="container">
  <form method="post">
  <table class="table table-bordered">
    <tr>
      <td>Sl no.</td>
      <td><input type="number" name="slno"></td>
    </tr>
    <tr>
      <td></td><td><input type="submit" class="btn" name="delete"></td>
    </tr>
  </table>
</form>
</div>
<?php
  if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  if (isset($_POST['delete'])) {
    $name = $_POST['slno'];
$sql = "DELETE FROM grievance WHERE ADSLNO = '$name'";
mysqli_query($conn, $sql);
echo mysqli_connect_error();
if(mysqli_error($conn)){
    echo mysqli_error($conn);
    }
    else
    {
      echo "<center><h6>ENTRY DELETED SUCCESSFULLY..(or)...ENTRY DOESN'T EXISTS......<br>Refresh the page for the changes to take Place.</h6></center>";
    }
}
?>
-->
</div>
</body></html>
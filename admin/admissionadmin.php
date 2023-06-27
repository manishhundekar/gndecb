<?php
include('session.php');
if(!isset($_SESSION['login_user'])){
header("location:adminlogin.php"); // Redirecting To Home Page
}
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
  <title>ADMISSIONS | GNDECB ADMIN</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="Guru Nanak Dev Engineering College Bidar - 585401 GNDECB GND Gurudwara " />
  <script src="assets/js/jquery-1.11.3.min.js" type="text/javascript"></script>
  <link href="assets/css/material-kit.css?v=2.0.5" rel="stylesheet" />
</head>
<body>
<div id="navbara"></div>
<script type="text/javascript" src="assets/js/routes.js"></script>
  <center><h3>ADMISSIONS</h3><br>
<div style="background-color:#D2B4DE">
      <center><h3>ADMISSIONS  DATA</h3>
      </div>
<div class="container">
<div class="table-responsive">
  <table class="table table-bordered table-hover ">
  <thead class="thead-light">
         <tr>            
          <th>Sl No.</th>
          <th>Submit Date</th>
          <th>Student Name</th>
          <th>Father's/Guardian's Name</th>
          <th>Phone</th>                                       
        </tr>
    </thead>
<form method="post" >
	        <tbody>
             <?php 
      $order59 ="SELECT * FROM form1 order by ADSLNO DESC";
      $food9 = mysqli_query($conn, $order59);
      while($oss55 = mysqli_fetch_assoc($food9))
      {echo '<tr><td>'. $oss55["ADSLNO"]."</td><td>". $oss55["TIME"]."</td><td>". $oss55["FNAME"] . "&nbsp". $oss55["LNAME"] . "</td><td>". $oss55["FATHERNAME"]. "/".$oss55["GRDNAME"]."</td><td>". $oss55["PHONE"] . "</td></tr>";
      } 
          
?>
</tbody>
</form>
</table> 

</div>
</center>	
</div>
<div style="background-color:#D2B4DE">
      <center><h3>DELETE ADMISSION DATA</h3> </center>
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
$sql = "DELETE FROM form1 WHERE ADSLNO = '$name'";
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
  <div style="background-color:#D2B4DE">
      <center><h3>PRINT ADMISSION DATA</h3> </center>
      </div>
<div class="container">
  <form method="post" action="../print.php">
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
</body></html>

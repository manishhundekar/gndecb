<?php
include('session.php');
if(!isset($_SESSION['login_user'])){
header("location:adminlogin.php"); // Redirecting To Home Page
}
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
  <title>PLACEMENTS| GNDECB ADMIN</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="Guru Nanak Dev Engineering College Bidar - 585401 GNDECB GND Gurudwara " />
  <script src="assets/js/jquery-1.11.3.min.js" type="text/javascript"></script>
  <link href="assets/css/material-kit.css?v=2.0.5" rel="stylesheet" />
</head>
<body>
<div id="navbara"></div>
<script type="text/javascript" src="assets/js/routes.js"></script>
  <center><h3>PLACEMENTS</h3><br>
<div style="background-color:#D2B4DE">
      <center><h3>PLACEMENTS DATA</h3>
      </div>
<div class="container">
<div class="table-responsive">
  <table class="table table-bordered table-hover ">
  <thead class="thead-light">
         <tr>            
          <th>Sl No.</th>
          <th>Date</th>
          <th>Description</th>
          <th>Company</th>                                    
          <th>Link</th>
          <th>Photo</th>
        </tr>
    </thead>
        <tbody>
             <?php 
      $order59 ="SELECT * FROM placements order by PDATE";
      $food9 = mysqli_query($conn, $order59);
      while($oss55 = mysqli_fetch_assoc($food9))
      {echo '<tr><td>'. $oss55["SLNO"]."</td><td>". $oss55["PDATE"]."</td><td>". $oss55["DESCR"] . "</td><td>". $oss55["COMPANY"] . "</td><td>". $oss55["LINK"]. "</td><td>". $oss55["PHOTO"]. "</td><tr>";
      } 
          
?>
</tbody>
</table> 
  
</div>
</center>	
</div>

<div style="background-color:#D2B4DE">
      <center><h3>INSERT NEW PLACEMENT DATA</h3>
      </div>
     <div class="container">
<form action="placementsupload.php" method="POST" enctype="multipart/form-data">
  <table class="table table-bordered table-hover">
     <tr>
    <td>Placement Date</td>
    <td><input type="date" name="pdate" required></td>
   </tr>
   <tr>
    <td>Description</td>
    <td><textarea name="descrp"></textarea>
   </tr>
    <td>Company</td>
    <td><input type="text" name="company" required></td>
   </tr>
   <tr>
    <td>Link</td>
    <td><input type="text" name="link" style="width:200px" required></td>
   </tr> 
    <tr>
    <td>Photo Link</td>
    <td><input type="text" name="photo" required></td>
   </tr> 
   <tr><td></td>
    <td><input type="submit" name="upload" value="ADD"></td>
   </tr>
   </center>
  </table>
 </form>
</center>
</div></p>
<div style="background-color:#D2B4DE">
      <center><h3>DELETE PLACEMENTS DATA</h3> </center>
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
$sql = "DELETE FROM placements WHERE SLNO = '$name'";
mysqli_query($conn, $sql);
echo mysqli_connect_error();
if(mysqli_error($conn)){
    echo mysqli_error($conn);
    }
    else
    {
      echo "<h6>PLACEMENT ENTRY DELETED SUCCESSFULLY..(or)...ENTRY DOESN'T EXISTS.....REFRESH THE PAGE FOR THE CHANGES TO TAKE PLACE</h6>";
    }
}
?>
</body></html>
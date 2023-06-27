<?php
include('session.php');
if(!isset($_SESSION['login_user'])){
header("location:adminlogin.php"); // Redirecting To Home Page
}
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
  <title>ADMIN HOME | GNDECB ADMIN</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="Guru Nanak Dev Engineering College Bidar - 585401 GNDECB GND Gurudwara " />
  <script src="assets/js/jquery-1.11.3.min.js" type="text/javascript"></script>
  <link href="assets/css/material-kit.css?v=2.0.5" rel="stylesheet" />
</head>
<body>
<div id="navbara"></div>

<div class="container">
<div class="row">
	<div class="col-md-6">
		<div style="width:80%">
			<h3>Upcoming Events</h3><h6>*Max of 5 Entries</h6>
  <div class="table-responsive">
         <table class="table table-bordered">
<thead class="thead-light">
          <tr>
          <th>Ref No.</th>
          <th>Event Title</th>
          <th>Event Date</th>
        </tr>
</thead>
        
             <?php 
      $order59 ="SELECT * FROM upcomingevents order by EDATE DESC";
      $food9 = mysqli_query($conn, $order59);
      while($oss55 = mysqli_fetch_assoc($food9))
      {echo '<tr><td>'. $oss55["SLNO"]."</td><td>". $oss55["EVENTTITLE"] . "</td><td>". $oss55["EDATE"]. "</td></tr>";
      } 
        
?>

</table>  
  </div>

      <center><div style="background-color:#D2B4DE">
      <center><h3>NEW UPCOMING EVENT</h3> </center>
      </div>
        <p><div style="background-color:lightcyan">
     <center> 
      </div>
        <div>
           <center>
              <form action="upceventupload.php" method="POST" enctype="multipart/form-data">
  <table class="table table-bordered table-hover">
   <tr>
     <tr>
    <td>Event Title</td>
    <td><input type="text" name="name" required></td>
   </tr>
   <tr>
    <td>Event Date</td>
    <td><input type="date" name="date" style="width:200px" required></td>
   </tr> 
   <tr><td></td>
    <td><input type="submit" name="upload" value="ADD"></td>
   </tr>
   </center>
  </table>
 </form>
</center>
</div></p>
 </center>

<div style="background-color:#D2B4DE">
      <center><h3>DELETE ENTRY</h3> </center>
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
$sql = "DELETE FROM upcomingevents WHERE SLNO = '$name'";
mysqli_query($conn, $sql);
echo mysqli_connect_error();
if(mysqli_error($conn)){
    echo mysqli_error($conn);
    }
    else
    {
      echo "<h6> ENTRY DELETED SUCCESSFULLY..(or)...ENTRY DOESN'T EXISTS.....REFRESH THE PAGE FOR THE CHANGES TO TAKE PLACE</h6>";
    }
       $conn->close();
}
?>
	</div>
	
</div>
	 <div class="col-md-6">
    <div style="width:80%">
      <h3>GNDEC CONNECT</h3><h6>*Max of 5 Entries</h6>
  <div class="table-responsive">
         <table class="table table-bordered">
<thead class="thead-light">
          <tr>
          <th>Ref No.</th>
          <th>Content</th>
        </tr>
</thead>
        
             <?php 
      $order59 ="SELECT * FROM gndecconnect order by TIME DESC";
      $food9 = mysqli_query($conn, $order59);
      while($oss55 = mysqli_fetch_assoc($food9))
      {echo '<tr><td>'. $oss55["SNO"]."</td><td>". $oss55["CONTENT"]. "</td></tr>";
      } 
        
?>

</table>  
  </div>

      <center><div style="background-color:#D2B4DE">
      <center><h3>NEW NOTIFICATION</h3> </center>
      </div>
        <p><div style="background-color:lightcyan">
     <center> 
      </div>
        <div>
           <center>
              <form action="gndconnupload.php" method="POST" enctype="multipart/form-data">
  <table class="table table-bordered table-hover">
   <tr>
     <tr>
    <td>Event Title</td>
    <td><input type="text" name="name" required></td>
   </tr>
   <tr><td></td>
    <td><input type="submit" name="upload" value="ADD"></td>
   </tr>
   </center>
  </table>
 </form>
</center>
</div></p>
 </center>

<div style="background-color:#D2B4DE">
      <center><h3>DELETE ENTRY</h3> </center>
      </div>
<div class="container">
  <form method="post">
  <table class="table table-bordered">
    <tr>
      <td>Sl no.</td>
      <td><input type="number" name="slno"></td>
    </tr>
    <tr>
      <td></td><td><input type="submit" class="btn" name="deletea"></td>
    </tr>
  </table>
</form>
  
</div>

<?php
  if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  if (isset($_POST['deletea'])) {
    $name = $_POST['slno'];
$sql = "DELETE FROM gndecconnect WHERE SNO = '$name'";
mysqli_query($conn, $sql);
echo mysqli_connect_error();
if(mysqli_error($conn)){
    echo mysqli_error($conn);
    }
    else
    {
      echo "<h6> ENTRY DELETED SUCCESSFULLY..(or)...ENTRY DOESN'T EXISTS.....REFRESH THE PAGE FOR THE CHANGES TO TAKE PLACE</h6>";
    }
       $conn->close();
}
?>
  </div>
  
</div>
</div>
<script type="text/javascript" src="assets/js/routes.js"></script>
</body></html>
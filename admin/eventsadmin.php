<?php
include('session.php');
if(!isset($_SESSION['login_user'])){
header("location:adminlogin.php"); // Redirecting To Home Page
}
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
  <title>EVENTS ADMIN| GNDECB ADMIN</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="Guru Nanak Dev Engineering College Bidar - 585401 GNDECB GND Gurudwara " />
  <script src="assets/js/jquery-1.11.3.min.js" type="text/javascript"></script>
  <link href="assets/css/material-kit.css?v=2.0.5" rel="stylesheet" />
</head>
<body>
<div id="navbara"></div>

<center> 
	
<div style="width:80%">
  <div class="table-responsive">
         <table class="table table-bordered">
<thead class="thead-light">
          <tr>
          <th>Event Ref No.</th>
          <th>Title</th>
          <th>link</th>
          <th>Date</th>
          <th>Description</th>
          <th>Event Type</th>
          <th>Venue</th>
          <th>Photo</th>
        </tr>
</thead>
        
             <?php 
      $order59 ="SELECT * FROM events order by DATE DESC";
      $food9 = mysqli_query($conn, $order59);
      while($oss55 = mysqli_fetch_assoc($food9))
      {echo '<tr><td>'. $oss55["SNO"]."</td><td>". $oss55["TITLE"] . "</td><td>". $oss55["LINK"]. "</td><td>".$oss55["DATE"]."</td><td>".$oss55["DESCRPT"]."</td><td>".$oss55["EVTTYP"]."</td><td>".$oss55["VENUE"]."</td><td>";
      echo "<img style='width: 100px; height:120px' src='images/".$oss55['PHOTO']."' ></td></tr>";
      } 
        
?>

</table>  
  </div>

      <center><h2 style="font-size:30px;color:Black">NEW EVENT</h2>
        <p><div style="background-color:lightcyan">
     <center> 
      </div>
        <div>
           <center>
              <form action="eventupload.php" method="POST" enctype="multipart/form-data">
  <table class="table table-bordered table-hover">
   <tr>
     <tr>
    <td>Title</td>
    <td><input type="text" name="name" required></td>
   </tr>
    <td>Description</td>
    <td><input type="text" name="description" required></td>
   </tr>
   <tr>
    <td>Date</td>
    <td><input type="date" name="date" style="width:200px" required></td>
   </tr> 
    <tr>
    <td>Event type</td>
    <td>
    	<select style="width:200px" class="custom-select" name="evttyp">
    		<option>Cultural</option>
    		<option>General</option>
    		<option>Social</option>
    		<option>Sports</option>
    		<option>Technical</option>
    	</select>



    </td>
   </tr> 
    <tr>
    <td>Venue</td>
    <td><input type="text" name="venue" required></td>
   </tr> 
   <tr>
   	 <tr>
    <td>Link</td>
    <td><input type="text" name="link" required></td>
   </tr> 
   <tr>
   	<td>Image URL</td>
   	<td>
   		<div style="width:50px">
  	  <input type="text" name="image"></div><p>(Exp:-../images/)</p>
  	</td>
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
      <center><h3>DELETE EVENT</h3> </center>
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
$sql = "DELETE FROM events WHERE SNO = '$name'";
mysqli_query($conn, $sql);
echo mysqli_connect_error();
if(mysqli_error($conn)){
    echo mysqli_error($conn);
    }
    else
    {
      echo "<h6>EVENT ENTRY DELETED SUCCESSFULLY..(or)...ENTRY DOESN'T EXISTS.....REFRESH THE PAGE FOR THE CHANGES TO TAKE PLACE</h6>";
    }
       $conn->close();
}
?></div></p>
</div>
<script type="text/javascript" src="assets/js/routes.js"></script>
</body></html>
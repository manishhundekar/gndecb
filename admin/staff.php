<?php
include('session.php');
if(!isset($_SESSION['login_user'])){
header("location:home.php"); // Redirecting To Home Page
}
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
  <title>STAFF | GNDECB ADMIN</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="Guru Nanak Dev Engineering College Bidar - 585401 GNDECB GND Gurudwara " />
  <script src="assets/js/jquery-1.11.3.min.js" type="text/javascript"></script>
  <link href="assets/css/material-kit.css?v=2.0.5" rel="stylesheet" />
</head>

<body>
<div id="navbara"></div>
<script type="text/javascript" src="assets/js/routes.js"></script>
  <center><h3>STAFF</h3><br>
<div style="background-color:#D2B4DE">
      <center><h3>STAFF DATA</h3>
      </div>
<div class="container">
<div class="table-responsive">
  <table class="table table-bordered table-hover ">
  <thead class="thead-light">
         <tr>            
          <th>Sl No.</th>
          <th>Branch</th>
          <th>Staff type</th>
            <th>Name of Faculty</th>                                        
            <th>Designation</th>
            <th>Qualification</th>
            <th>Faculty type</th>
            <th>Experience</th>
            <th>Contact Details</th>
            <th>Email</th>
            <th>Photo</th>

        </tr>
    </thead>
        <tbody>
             <?php 
      $order59 ="SELECT * FROM staff order by SNO";
      $food9 = mysqli_query($conn, $order59);
      while($oss55 = mysqli_fetch_assoc($food9))
      {echo '<tr><td>'. $oss55["SNO"]."</td><td>". $oss55["BRCAT"]."</td><td>". $oss55["STAFFTYP"] . "</td><td>". $oss55["NAME"] . "</td><td>". $oss55["DESIGNATION"]. "</td><td>".$oss55["QUALIFICATION"]."</td><td>". $oss55["FACTYPE"] . "</td><td>".$oss55["EXPERIENCE"]."</td><td>".$oss55["CONTACT"]."</td><td>".$oss55["EMAIL"]."</td><td>";
      echo "<img style='width: 100px; height:120px' src='images/".$oss55['PHOTO']."' ></td></tr>";
      } 
          
?>
</tbody>
</table> 
  
</div>
</center>	
</div>
<div style="background-color:#D2B4DE">
      <center><h3>INSERT NEW STAFF DATA</h3>
      </div>
     <div class="container">
   <form action="staffupload.php" method="POST" enctype="multipart/form-data">
  <table class="table table-hover table-bordered">
   <tr>
    <td>Staff No</td>
    <td><input type="number" name="slno" required></td>
   </tr>
   <tr>
    <td>Staff Type</td>
    <td><div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="stafftyp" id="1" value="Faculty"checked> Faculty Staff
                  <span class="circle">
                    <span class="check"></span>
                  </span>
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="stafftyp" id="2" value="Supporting Staff" > Supporting Staff
                  <span class="circle">
                    <span class="check"></span>
                  </span>
                </label>
              </div></td>
   </tr>
   <tr>
    <td>Branch</td>
    <td>  <select name="branch" class="custom-select" style="width: 200px">
    <option>ARTIFICIAL INTELLIGENCE AND MACHINE LEARNING</option>
    <option>CIVIL ENGINEERING</option>
    <option>COMPUTER SCIENCE AND ENGINEERING</option>
    <option>ELECTRICAL AND ELECTRONICS ENGINEERING</option>
    <option>ELECTRONICS AND COMMUNICATIONS ENGINEERING</option>
    <option>INFORMATION SCIENCE AND ENGINEERING</option>
    <option>MECHANICAL ENGINEERING</option>
    <option>MASTER IN BUSINEES ADMINISTARTION</option>
    <option>DEPARTMENT OF CHEMISTRY</option>
    <option>DEPARTMENT OF PHYSICS</option>
    <option>DEPARTMENT OF MATHS</option>
    <option>DEPARTMENT OF P.E and Sports</option>

  </select></td>
   </tr>
   <tr>
     <tr>
    <td>Name</td>
    <td><input type="text" name="name" required></td>
   </tr>
    <td>Designation</td>
    <td><input type="text" name="designation" ></td>
   </tr>
   <tr>
    <td>Qualification</td>
    <td><input type="text" name="qualification" ></td>
   </tr> 
   <tr>
    <td>Faculty type</td>
    <td>
    	<div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="factyp" id="3" value="None" checked>None(Support Staff)
                  <span class="circle">
                    <span class="check"></span>
                  </span>
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="factyp" id="1" value="Teaching"> Teaching
                  <span class="circle">
                    <span class="check"></span>
                  </span>
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="factyp" id="2" value="Non-Teaching" > Non-Teaching
                  <span class="circle">
                    <span class="check"></span>
                  </span>
                </label>
              </div></td>
   </tr>
    <tr>
    <td>Experience</td>
    <td><input type="text" name="experience" required></td>
   </tr> 
    <tr>
    <td>Contact</td>
    <td><input type="text" name="contact" required></td>
   </tr> 
       <tr>
    <td>Email</td>
    <td><input type="email" name="email" ></td>
   </tr> 
          <tr>
    <td>Blog</td>
    <td><input type="text" name="blog" ></td>
   </tr> 
          <tr>
    <td>Others</td>
    <td><input type="text" style="height:150px" name="others" ></td>
   </tr> 
   <tr>
   	<td>Upload Image</td>
   	<td>
   		<div style="width:50px">
  	  <input type="file" name="image"></div>
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
<div style="background-color:#D2B4DE">
      <center><h3>DELETE STAFF DATA</h3> </center>
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


</div>
</body>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</html>
<?php
  if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  if (isset($_POST['delete'])) {
    $name = $_POST['slno'];
$sql = "DELETE FROM staff WHERE SNO = '$name'";
mysqli_query($conn, $sql);
echo mysqli_connect_error();
if(mysqli_error($conn)){
    echo mysqli_error($conn);
    }
    else
    {
      echo "<h6>STAFF ENTRY DELETED SUCCESSFULLY..(or)...ENTRY DOESN'T EXISTS</a></h6>";
    }
}
?>
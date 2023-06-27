<?php
include('../dbconn.php');
?>
<?php
  if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  if (isset($_POST['upload'])) {
  	$title = $_POST['pdate'];
  	$description = $_POST['descrp'];
  	$date = $_POST['company'];
    $link=$_POST['link'];
    $image=$_POST['photo'];
  	$sql = "INSERT INTO placements (PDATE,DESCR,COMPANY,LINK,PHOTO) VALUES ('$title','$description','$date','$link','$image')";
  	mysqli_query($conn, $sql);
  	echo mysqli_connect_error();
    if(mysqli_error($conn)){
  	echo mysqli_error($conn);
    }
    else
    {
      echo "<h3>Data Upload Successfull..".'<a href="../admin/placementsadmin.php">CLICK HERE TO RETURN</a></h3>';
    }
  }
?>




<?php
include('../dbconn.php');
?>
<?php
  if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  if (isset($_POST['upload'])) {
    $name = $_POST['name'];
  	$sql = "INSERT INTO gndecconnect(CONTENT) VALUES ('$name')";
  	mysqli_query($conn, $sql);
  	echo mysqli_connect_error();
    if(mysqli_error($conn)){
  	echo mysqli_error($conn);
    }
    else
    {
      echo "<h3>Data Upload Successfull..".'<a href="../admin/home.php">CLICK HERE TO RETURN</a></h3>';
    }
  }
?>




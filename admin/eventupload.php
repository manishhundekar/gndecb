<?php
include('../dbconn.php');
?>
<?php
  if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  if (isset($_POST['upload'])) {
  	$title = $_POST['name'];
  	$description = $_POST['description'];
  	$date = $_POST['date'];
  	$evttyp = $_POST['evttyp'];
  	$venue = $_POST['venue'];
    $link=$_POST['link'];
    $image=$_POST['image'];
  	$sql = "INSERT INTO events (TITLE,DESCRPT,DATE,EVTTYP,VENUE,LINK,PHOTO) VALUES ('$title','$description','$date','$evttyp','$venue','$link','$image')";
  	mysqli_query($conn, $sql);
  	echo mysqli_connect_error();
    if(mysqli_error($conn)){
  	echo mysqli_error($conn);
    }
    else
    {
      echo "<h3>Data Upload Successfull..".'<a href="../admin/eventsadmin.php">CLICK HERE TO RETURN</a></h3>';
    }
  }
?>




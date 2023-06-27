<?php
include('../dbconn.php');
?>
<?php
  if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  if (isset($_POST['upload'])) {
  	$image = $_FILES['image']['name'];
  	$target = "images/".basename($image);
  	$slno = $_POST['slno'];
    $branch = $_POST['branch'];
  	$name = $_POST['name'];
  	$designation = $_POST['designation'];
  	$qualification = $_POST['qualification'];
    $stafftyp = $_POST['stafftyp'];
    $factyp = $_POST['factyp'];
    $email = $_POST['email'];
    $blog = $_POST['blog'];
    $others = $_POST['others'];
  	$experience = $_POST['experience'];
  	$contact = $_POST['contact'];
  	$sql = "INSERT INTO staff (SNO,BRCAT,NAME,DESIGNATION,QUALIFICATION,STAFFTYP,FACTYPE,EXPERIENCE,CONTACT,EMAIL,PHOTO,BLOG,OTHERS) VALUES ('$slno','$branch','$name','$designation','$qualification','$stafftyp','$factyp','$experience','$contact','$email','$image','$blog','$others')";
  	mysqli_query($conn, $sql);
  	echo mysqli_connect_error();
    if(mysqli_error($conn)){
  	echo mysqli_error($conn);
    }
    else
    {
      echo "<h1>Data Upload Successfull..".'<a href="staff.php">CLICK HERE TO RETURN</a></h1>';
    }
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
?>
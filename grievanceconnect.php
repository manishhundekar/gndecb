<?php
include('dbconn.php');
  if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  if (isset($_POST['upload'])) {
  	$grievance = $_POST['grievtype'];
    $usertype = $_POST['usertype'];
    $description = $_POST['description'];
    $name= $_POST['name'];
    $email = $_POST['email'];
    $phone= $_POST['phone'];
    $add1= $_POST['add1'];
    $city= $_POST['city'];
    $pincode = $_POST['pincode'];
    $state = $_POST['state'];
    $country = $_POST['country'];
   
    $stmt =$conn->prepare("INSERT INTO grievance (GRIEVTYPE,USERTYPE,DESCRIPTION,NAME,EMAIL,PHONE,ADD1,CITY,PINCODE,STATE,COUNTRY) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("sssssisssss", $grievance,$usertype,$description,$name,$email,$phone,$add1,$city,$pincode,$state,$country);
    $stmt->execute();

    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully Submitted');
    window.location.href='greivance.php';
    </script>");
    //INSERTION QUERY
  	
    
    
 }
  
?> 

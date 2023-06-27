<?php
include('../dbconn.php');
$error = ''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['lemail']) || empty($_POST['lpass'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$username = $_POST['lemail'];
$password = $_POST['lpass'];



// SQL query to fetch information of registerd users and finds user match.
$query = "SELECT username,pass From admin Where username=? and pass=? Limit 1";

// To protect MySQL injection for Security purpose
$stmt = $conn->prepare($query);
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$stmt->bind_result($username, $password);
$stmt->store_result();

if($stmt->fetch()) //fetching the contents of the row
        {
          $_SESSION['login_user'] = $username; // Initializing Session
          header("location: home.php"); // Redirecting To Profile Page
        }
else {
       $error = "Username or Password is invalid";
     }
mysqli_close($conn); // Closing Connection
}
}
?>
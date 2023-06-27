<?php
include('dbconn.php');
?>
<?php
  if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  if (isset($_POST['print'])) {
      $email = $_POST['email'];
      $order59 ="SELECT * FROM contactus where slno='$email' ";
      $food9 = mysqli_query($conn, $order59);
      $oss55 = mysqli_fetch_assoc($food9);
  }
?> 
<!DOCTYPE html>
<html>
<head>
    <title>Guru Nanak Dev Engineering College Bidar Karnataka  | ಗುರು ನಾನಕ್ ದೇವ್ ಎಂಜಿನಿಯರಿಂಗ್ ಕಾಲೇಜು ಬೀದರ್ ಕರ್ನಾಟಕ</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="Guru Nanak Dev Engineering College Bidar - 585401 GNDECB GND Gurudwara " />
     <!-- Favicons-->
<link rel="apple-touch-icon" sizes="57x57" href="assets/faviconrecent/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="assets/faviconrecent/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="assets/faviconrecent/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="assets/faviconrecent/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="assets/faviconrecent/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="assets/faviconrecent/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="assets/faviconrecent/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="assets/faviconrecent/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="assets/faviconrecent/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="assets/faviconrecent/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="assets/faviconrecent/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="assets/faviconrecent/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="assets/faviconrecent/favicon-16x16.png">
<link rel="manifest" href="assets/faviconrecent/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="assets/faviconrecent/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"/>
<!--End of Favicons-->


<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext"
      rel="stylesheet"><link rel='icon' href='favicon.ico' type='image/x-icon'/ >
  <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
      rel="stylesheet">
</head>
<style type="text/css">
  .body{
    margin-top: 10px;
  }
    .emp-profile{
    padding: 1%;
    border-radius: 0.5rem;
    background: #fff;
}
.profile-head h5{
    color: #333;
}
.profile-head h6{
    color: #0062cc;
}
h5
{color: white;
  background-color: grey;
  padding: 5px;

}
td{
    width: 16.6%;
}

</style>
<body onload="window.print();" >
 <div class="container">
  <table>
    <thead><td colspan="6"><img src="images/logo2.jpeg"></td></thead>
    <tbody>
        <tr><td colspan="6" class="font-weight-bold"><h4>CONTACT US FORM</h4></td></tr>
        <tr><td class="font-weight-bold ">NAME:</td><td><?php echo $oss55["NAME"];?></td></tr><tr><td class="font-weight-bold ">EMAIL:</td><td><?php echo $oss55["EMAIL"];?></td></tr><tr><td class="font-weight-bold ">CONTACT NUMBER:</td><td><?php echo $oss55["CONTACTNUMBER"];?></td></tr>
        <tr>
            <td><label class="font-weight-bold ">DESCRIPTION:</label></td>
            <td colspan="5"><br><?php echo $oss55["MESSAGE"];?><br></td>
        </tr>
        
       
      
    </tbody>
</table>
</div>
</body>
<script type="text/javascript" src="js/routes.js"></script>
</html>
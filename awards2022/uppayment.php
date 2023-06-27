<?php
include('session.php');
$usernameref=$_SESSION['login_user'];
if(!isset($_SESSION['login_user'])){
header("location:adminlogin.php"); // Redirecting To Home Page
}
$order59 ="SELECT * FROM college where UNAME='$usernameref'";
$food9 = mysqli_query($conn, $order59);
$oss55 = mysqli_fetch_assoc($food9);
$usernamerefn=$oss55["CLGNAME"];
$cid=$oss55["CLGDBID"];
$clgcode=$oss55["CLGCODE"];
$clgzone=$oss55["CLGZONE"];
$order59 ="SELECT * FROM zone where ZID='$clgzone'";
$food9 = mysqli_query($conn, $order59);
$oss55 = mysqli_fetch_assoc($food9);
$clgzone=$oss55["ZNAME"];
?>
<!DOCTYPE html>
<html>
<head>
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-52544469-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-52544469-3');
</script>
<style type="text/css">
  td{
    border: 2px solid black;
  }
</style>
   <title>COLLEGE PORTAL HOME| GNDECB </title>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="assets/css/cava_bs.min.css" crossorigin="anonymous">
</head>
<body>
<nav class="cava_navbar cava_navbar-expand-lg cava_navbar-dark bg-primary">
  <a class="cava_navbar-brand" href="#" style="padding-left:10%">22nd VTU Inter-Collegiate Athletic Meet 2019 | College Portal<br> <?php echo $usernamerefn;?> |
  <?php echo $clgcode;?> | <?php echo $clgzone;?> </a>
  <button class="cava_navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="cava_navbar-toggler-icon"></span>
  </button>
  <div class="collapse cava_navbar-collapse" style="padding-left:25%" id="navbarNavDropdown">
    <ul class="cava_navbar-nav">
      <li class="cava_nav-item" style="padding-right:10px">
        <a class="cava_nav-link cava_font-weight-bold" href="home.php" style="color:#EF7156;background-color:white";>BACK</a>
      </li>
      <li class="cava_nav-item" style="padding-right:10px">
        <a class="cava_nav-link cava_font-weight-bold" href="logout.php" style="color:#EF7156;background-color:white">LOGOUT</a>
      </li>
    </ul>
  </div>
</nav>
  <hr><br>
  <center><h3><?php echo $usernamerefn;?> | <?php echo $clgcode;?> | <?php echo $clgzone;?></h3></center>
  <center><h3 class="cava_font-weight-bold">Uploading Fee Payment Details</h3></center>
       <div class="cava_container cava_table-responsive" style="border:1px solid #ddd">
       <form action="upayserv.php" method="POST">
          <input type="hidden" name="cid" value="<?php echo $cid ?>">
        <table class="cava_table" style="border: black solid 2px">
            <thead class="cava_thead-dark">
                <tr>
                    <th colspan="2"><center>FEE PAYMENT SUMMARY</center></th>
                </tr></thead>
              <tbody>
               <tr>
                 <td class="cava_font-weight-bold">TRANSACTION DATE:</td>
                 <td class="cava_font-weight-bold">
                  <div class="cava_form-group">
                    <input required="Mandatory" type="date" class="cava_form-control" name="transdate" placeholder="ENTER TRANSACTION DATE">
                  </div>
                 </td>
               </tr>
               <!--<tr>
                 <td class="cava_font-weight-bold">TRANSACTION TIME:</td>
                 <td class="cava_font-weight-bold"><div class="cava_form-group">
                    <input required="Mandatory" type="time" class="cava_form-control" name="transtime" placeholder="ENTER TRANSACTION TIME"></div>
                 </td>
               </tr>-->
               <tr>
                 <td class="cava_font-weight-bold">TRANSACTION No./REF No./UTR No.:</td>
                 <td class="cava_font-weight-bold"><div class="cava_form-group">
                    <input required="Mandatory" type="text" class="cava_form-control" name="transno" placeholder="ENTER TRANSACTION NO."></div>
                 </td>
               </tr>
               <tr>
                 <td class="cava_font-weight-bold">TYPE OF PAYMENT:</td>
                 <td class="cava_font-weight-bold"><div class="cava_form-group">
                    <select class="cava_custom-select required" name="paytype" >
                      <option value="NEDT/RTGS">NEFT/RTGS</option>
                      <option value="NETBANKING">NET-BANKING</option>
                      <option value="UPI">UPI</option>
                    </select>
                 </td>
               </tr>
               <tr>
                 <td class="cava_font-weight-bold">FEE PAID:</td>
                 <td class="cava_font-weight-bold"><div class="cava_form-group">
                    <input required="Mandatory" type="number" class="cava_form-control" name="feepaid" placeholder="ENTER FEE PAID AMOUNT"></div>
                 </td>
               </tr>
               <tr>
                 <td colspan="2" style="color:green">**SUBMIT PAYMENT DETAILS ONLY WHEN ALL PARTICIPANTS DETAILS ARE FED INTO THE SYSTEM.<br>**ONCE PAYMENT DETAILS ARE SUBMITTED,SYSTEM WILL NOT ACCEPT ANY PARTICIPANTS ENTRIES<br>**WITHOUT PAYMENT YOUR PARTICIPANTS ARE NOT ELIGIBLE TO PARTICIPATE IN EVENTS.<br>**THE SOFTCOPY OF THE PAYMENT RECIEPT NEED TO BE SENT AT gndecvtuathletics2019@gmail.com by 11 OCTOBER 2019,5.00 P.M</td>
               </tr>
               <tr>
                 <td colspan="2" align="center"> <button class="cava_btn cava_btn-primary" name="payupload">CLICK HERE TO SUBMIT PAYMENT DETAILS</button></td>
               </tr>
               <tr>
                 <td colspan="2" style="color:green">**ORGINAL FEE RECEIPT NEED TO BE SUBMITTED TO THE REGISTRATION COUNTER AT GNDEC COUNTER.</td>
               </tr>
            </tbody>
        </table>
      </form>
     
      </div>
 <hr><br>
 <footer>
  <div style="background-color: lightblue;padding:10px">
    <center><h6 class="cava_font-weight-bold">&copyCopyright 2019 GNDEC</h6></center>
  </div>
</footer>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script type="text/javascript">
	function submit(){
		alert("You cannot add participants any more.");
	}
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
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
  <br>
  <center><h3><?php echo $usernamerefn;?> | <?php echo $clgcode;?> | <?php echo $clgzone;?></h3></center>
  <center><h3 class="cava_font-weight-bold">Fee Payment Details</h3></center>
  <?php
  $query="SELECT count(*) as count from participants where CID='$cid' AND EVENT1!='100'";
  $res=mysqli_query($conn,$query);
  $rw=mysqli_fetch_assoc($res);
  $count1=$rw['count'];
  echo $count1.'-';
  //
  $query="SELECT count(*) as count from participants where CID='$cid' AND EVENT2!='100'";
  $res=mysqli_query($conn,$query);
  $rw=mysqli_fetch_assoc($res);
  $count2=$rw['count'];
  echo $count2.'-';
  //
   $query="SELECT count(*) as count from participants where GENDER='Male' AND CID='$cid' AND RELAYEVT='21'";
  $res=mysqli_query($conn,$query);
  $rw=mysqli_fetch_assoc($res);
  $m21=$rw['count'];
  echo $m21.'-';
  $countm21=0;
  if($m21>0)
  {
    $countm21=1;
  }
  //
  $query="SELECT count(*) as count from participants where GENDER='Male' AND CID='$cid' AND RELAYEVT='22'";
  $res=mysqli_query($conn,$query);
  $rw=mysqli_fetch_assoc($res);
  $m22=$rw['count'];
  echo $m22.'-';
  $countm22=0;
  if($m22>0)
  {
    $countm22=1;
  }
  //
  $query="SELECT count(*) as count from participants where GENDER='Female' AND CID='$cid' AND RELAYEVT='21'";
  $res=mysqli_query($conn,$query);
  $rw=mysqli_fetch_assoc($res);
  $fm21=$rw['count'];
  echo $fm21.'-';
  $countfm21=0;
  if($fm21>0)
  {
    $countfm21=1;
  }
  //
  $query="SELECT count(*) as count from participants where GENDER='Female' AND CID='$cid' AND RELAYEVT='22'";
  $res=mysqli_query($conn,$query);
  $rw=mysqli_fetch_assoc($res);
  $fm22=$rw['count'];
  echo $fm22;
  $countfm22=0;
  if($fm22>0)
  {
    $countfm22=1;
  }
  //
  $count3=$countm21+$countm22+$countfm21+$countfm22;
  echo 'No. of Relay Event Group(/s)-'.$count3.'<br>';
  //
  $esum=($count1+$count2)*75;
  $rsum=($count3)*300;
  $sum=$esum+$rsum;
  ?>
    <div class="cava_container cava_table-responsive" style="border:1px solid #ddd">
        <table class="cava_table" style="border: black solid 2px">
            <thead class="cava_thead-dark">
                <tr>
                    <th colspan="2"><center>FEE PAYMENT SUMMARY</center></th>
                </tr></thead>
              
            
            <tbody>  <tr>
                    <th align="left"  colspan="2"><h6>1.For Individual events,Entry Fee of Rs.75/EVENT/PARTCIPANT.<br>2.For Relay events,Entry Fee of Rs.300/TEAM.</h6></th>
                </tr>
                <tr>
                 <td class="cava_font-weight-bold">COLLEGE NAME</td>
                 <td class="cava_font-weight-bold"><?php echo $usernamerefn;?></td>
               </tr>
               <tr>
                 <td class="cava_font-weight-bold">INDIVIDUAL EVENTS FEE</td>
                 <td class="cava_font-weight-bold">Rs.<?php echo $esum;?></td>
               </tr>
               <tr>
                 <td class="cava_font-weight-bold">RELAY EVENTS FEE</td>
                 <td class="cava_font-weight-bold">Rs.<?php echo $rsum;?></td>
               </tr>
               <tr>
                 <td class="cava_font-weight-bold">TOTAL FEE AMOUNT TO BE PAID</td>
                 <td class="cava_font-weight-bold">Rs.<?php echo $sum;?></td>
               </tr>
               <tr>
                 <td colspan="2" style="color:green">**KINDLY REMIT THE TOTAL FEE AMOUNT TO THE BELOW MENTIONED GNDEC PRINCIPAL BANK ACCOUNT.<br>**FEE PAYMENT RECEIPT DETAILS NEED TO BE ENTERED IN THE STEP 2(D).<br>**ORGINAL FEE RECEIPT NEED TO BE SUBMITTED AT THE REGISTRATION COUNTER AT GNDEC ON 21st OCTOBER 2019.</td>
               </tr>
            </tbody>
        </table>
      </div><hr><br>
         <div class="cava_container" style="width:100%">
    <table class="cava_table cava_table-hovered">
    <thead class="cava_thead-dark">
      <tr><th colspan="4"><h5><center>BANK DETAILS</center></h5></th></tr>
    </thead>
    <tbody>
      <tr class="cava_table-primary">
        <td class="cava_font-weight-bold">Account Name</td>
        <td colspan="3">PRINCIPAL GNDEC,BIDAR</td>
      </tr>
      <tr class="cava_table-primary">
        <td class="cava_font-weight-bold">Bank Name</td>
        <td colspan="3">STATE BANK OF INDIA</td>
      </tr>
      <tr class="cava_table-primary">
        <td class="cava_font-weight-bold">Branch Name</td>
        <td colspan="3">GNDEC Campus Branch,Bidar</td>
      </tr>
      <!--<tr class="cava_table-primary">
        <td class="cava_font-weight-bold">Account type</td>
        <td colspan="3">Current Account</td>
      </tr>-->
      <tr class="cava_table-primary">
        <td class="cava_font-weight-bold">Account No</td>
        <td colspan="3">64100516537</td>
      </tr>
      <tr class="cava_table-primary">
        <td class="cava_font-weight-bold">IFSC CODE</td>
        <td colspan="3">SBIN0040809</td>
      </tr>
    </tbody>
  </table>
</div>
 <hr><br>
 <footer>
  <div style="background-color: lightblue;padding:10px">
    <center><h6 class="cava_font-weight-bold">&copyCopyright 2019 GNDEC</h6></center>
  </div>
</footer>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
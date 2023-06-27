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
//
$qq ="SELECT * FROM participants where CID='$cid'";
$rf = mysqli_query($conn, $qq);
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
<style type="text/css">
  h1,h2{ font-family: TimesNewRoman, "Times New Roman", Times, Baskerville, Georgia, serif; font-size: 1.5vw; font-style: normal; font-variant: normal; font-weight: 400; line-height: 30px; } 
  h3 { font-family: TimesNewRoman, "Times New Roman", Times, Baskerville, Georgia, serif; font-size: 1.45vw; font-style: normal; font-variant: normal; font-weight: 400; line-height: 25px; } 
   td { font-family: TimesNewRoman, "Times New Roman", Times, Baskerville, Georgia, serif; font-size: 1.5vw; font-style: normal; font-variant: normal; font-weight: 450; line-height: 25px; } 
   th{ font-family: TimesNewRoman, "Times New Roman", Times, Baskerville, Georgia, serif; font-size: 1.5vw;font-weight: 550;} 
  table,tr,th,td{
    vertical-align: middle;
  }
  @media print{@page {size: landscape}}
</style>
<body onload="window.print();">
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
  <div align="center" class="cava_container-fluid" >
  <table class="cava_table-responsive" >
  <tbody>
    <center><h3><?php echo $usernamerefn;?> | <?php echo $clgcode;?> | <?php echo $clgzone;?></h3></center><hr>
    <tr><td rowspan=4 colspan=2><img src="vtu.jpg" style=" height: 120px; width: 120px;"></td><td><center><h2><b>VISVESVARAYA TECHNOLOGICAL UNIVERSITY, BELGAUM</b></h2></center></td></tr>
    <tr><td ><center><h2><b>PROFORMA OF PLAYERS REPRESENTING INTER-COLLEGIATE ATHLETIC MEET 2019-20</b></h2></center></td></tr>
   <tr><td><center><h3><b>GAME:</b><u>ATHLETICS(MEN & WOMEN)</u><b>&nbsp &nbspORGANISING COLLEGE:&nbsp</b><u>GURU NANAK DEV ENGINEERING COLLEGE BIDAR-585403</u></h3></center></td></tr>
   <tr> <td><center><h3><b>TOURNAMENT DATE FROM:</b></b> <u>22nd OCTOBER 2019</u> to <u>25th OCTOBER 2019</u></h3></center></td></tr>
  </tbody>
</table>
<!-- //MAIN BODY-->
<table class="cava_table cava_table-responsive cava_table-bordered cava_table-hover " style="text-align: center;table-layout:fixed;">
                                <thead class="cava_thead-light" >
                                    <tr><th rowspan="2" style="vertical-align: middle">Sl.No.</th> 
                                        <th>A</th>
                                        <th>B</th>
                                        <th>C</th>
                                        <th>D</th>
                                        <th>E</th>
                                        <th>F</th>
                                        <th colspan="2">G</th>
                                    </tr>
                                    <tr align="left">
                                      <th>a)Name of the Student<br>b)Parent Name<br>c)Sem/Branch<br>d)USN</th>
                                      <th>Date of Birth</th>
                                      <th>Name of the course</th>
                                      <th>a)Passing year of 10+2(PUC)/Diploma<br>b)Date of first admission to present course<br>c)Date of admission to present Class/Sem
                                      </th>
                                      <th>Previous Year Participation<br>&Game/Event</th>
                                      <th>Photo</th>
                                      <th>Signature</th>
                                    </tr>
                                     </thead>
                                     <tbody>
                                      <?php
                                      $slno=1;
                                      while($rw = mysqli_fetch_assoc($rf))
                                      {
                                      echo "<tr align='left'>
                                      <td>".$slno."</td>
                                      <td>a)".$rw['ANAME']."<br>b)".$rw['AFNAME']."<br>c)".$rw['PRTSEM']."<br>d)".$rw['USN']."
                                      </td>
                                      <td>".$rw['DOB']."
                                      </td>
                                      <td align='center'>".$rw['COURSE']."</td>
                                      <td>a)".$rw['TPYEAR']."<br>b)".$rw['DOCA']."<br>c)".$rw['DOPA']."
                                      </td>
                                      <td>a)".$rw['PPGAME']."<br>b)".$rw['PPYEAR']."
                                      </td>
                                      <td><img height='140px' width='120px' src='uploads/".$rw['PHOTO']."'></td>
                                      <td colspan='1'></td>
                                    </tr>";
                                    $slno++;
                                      }
                                      ?>
                                     </tbody>
          </table>
          <h6>NOTE:PRINCIPALS ARE REQUESTED TO ENSURE THAT THE PARTICIPANTS SATISFY VTU SPORTS POLICY 2019 AND ELIGIBILITY CRITERIA BEFORE SIGNING.
            <a href="terms.php" target="_blank" >(CLICK HERE)</a></h6><br><br><br>
          <div class="cava_row">
              <div class="cava_col-6">
                <h5>PHYSICAL EDUCATION DIRECTOR</h5>
              </div>
              <div class="cava_col-6">
                <h5>PRINCIPAL<br>(Signature with seal)</h5>
              </div>
            </div>
</div>
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
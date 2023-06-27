<?php
include('session.php');
$usernameref=$_SESSION['login_user'];
if(!isset($_SESSION['login_user'])){
header("location:adminlogin.php"); // Redirecting To Home Page
}
$order59 ="SELECT * FROM college where UNAME='$usernameref'";
$food9 = mysqli_query($conn, $order59);
$oss55 = mysqli_fetch_assoc($food9);
$usernameref=$oss55["CLGNAME"];
$cid=$oss55["CLGDBID"];
$clgcode=$oss55["CLGCODE"];
$clgzone=$oss55["CLGZONE"];
$order59 ="SELECT * FROM zone where ZID='$clgzone'";
$food9 = mysqli_query($conn, $order59);
$oss55 = mysqli_fetch_assoc($food9);
$clgzone=$oss55["ZNAME"];
//
$checkq="SELECT count(*) as count from payment where CID='$cid'";
$outcheck=mysqli_query($conn,$checkq);
$raw1=mysqli_fetch_assoc($outcheck);
$partbtnstatus=$raw1['count'];
//echo $partbtnstatus;
$o2 ="SELECT * FROM payment where CID='$cid'";
$f2 = mysqli_query($conn, $o2);
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
  <a class="cava_navbar-brand" href="#" style="padding-left:10%">22nd VTU Inter-Collegiate Athletic Meet 2019 | College Portal<br> <?php echo $usernameref;?> | <?php echo $clgcode;?> | <?php echo $clgzone;?> </a>
  <button class="cava_navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="cava_navbar-toggler-icon"></span>
  </button>
  <div class="collapse cava_navbar-collapse" style="padding-left:25%" id="navbarNavDropdown">
    <ul class="cava_navbar-nav">
      <li class="cava_nav-item" style="padding-right:10px">
        <a class="cava_nav-link cava_font-weight-bold" href="logout.php" style="color:#EF7156;background-color:white">LOGOUT</a>
      </li>

    </ul>
  </div>
</nav>
<div style="background-image: url(assets/homeback.jpg); background-repeat: no-repeat; padding-top:150px;padding-bottom:100px">
  <center><b><u style="color: white;"><h1 style='font-family: "Times New Roman", Times, serif;color: white'class="cava_font-weight-bold">"22nd VTU Inter-Collegiate Athletic Meet 2019"</h1></u></b>
        <h2 style="color: white;">Date:-22nd October 2019 - 25th October 2019<br>Venue:-Guru Nanak Dev Engineering College,Bidar-585403</h2>
        <br><a href="payment.php"><button type="button" class="cava_btn cava_btn-primary" style="width:40%;margin-bottom:4px;">STEP 2(B):PAYMENT DETAILS</button></a>
        <br><a href="vtuperforma.php"><button type="button" class="cava_btn cava_btn-primary" style="width:40%;margin-bottom:4px;">STEP 2(C):DOWNLOAD VTU ELIGIBILITY PROFORMA</button></a>
        <br><a href="uppayment.php"><button type="button" id="uploadbutton" class="cava_btn cava_btn-primary" style="width:40%">STEP 2(D):UPLOAD PAYMENT DETAILS</button></a>
      </center>
</div>
  <hr><br>
  <center><h3><?php echo $usernameref;?> | <?php echo $clgcode;?> | <?php echo $clgzone;?></h3></center>
      <div class="cava_container cava_table-responsive" style="border:1px solid #ddd">
        <table class="cava_table" style="border: black solid 2px">
            <thead class="cava_thead-dark">
                <tr>
                    <th colspan="2"><center>FEE PAYMENT SUMMARY</center></th>
                </tr></thead>
            
              <?php
              while ($o2 = mysqli_fetch_assoc($f2))
               {if($o2['VERSTATUS']==0){$statver='YET TO BE CONFIRMED BY THE COLLEGE\'s ACCOUNTS DEPT.';}else{$statver='PAYMENT VERIFIED BY THE GNDEC ACCOUNTS DEPT.';}
                echo '<tbody><tr>
                <th align="left"  colspan="2"><h6>1.For Individual events,Entry Fee of Rs.75/EVENT/PARTCIPANT.<br>2.For Relay events,Entry Fee of Rs.300/TEAM.</h6></th>
                </tr>
                <tr>
                 <td class="cava_font-weight-bold">TRANSACTION DATE</td>
                 <td class="cava_font-weight-bold">'.$o2['TDATE'].'</td>
               </tr>
               <tr>
                 <td class="cava_font-weight-bold">TRANSACTION NO.</td>
                 <td class="cava_font-weight-bold">'.$o2['TRANNO'].'</td>
               </tr>
               <tr>
                 <td class="cava_font-weight-bold">PAYMENT TYPE</td>
                 <td class="cava_font-weight-bold">'.$o2['PTYPE'].'</td>
               </tr>
               <tr>
                 <td class="cava_font-weight-bold">FEE PAID</td>
                 <td class="cava_font-weight-bold">Rs.'.$o2['FEEPAID'].'</td>
               </tr>
               <tr>
                 <td class="cava_font-weight-bold">VERIFICATION STATUS</td>
                 <td class="cava_font-weight-bold">'.$statver.'</td>
               </tr>
               <tr>
                 <td colspan="2" style="color:green">**ORGINAL FEE RECEIPT NEED TO BE SUBMITTED AT THE REGISTRATION COUNTER AT GNDEC ON 21st OCTOBER 2019.</td>
               </tr>
            </tbody>';
               }
              ?>
              
        </table>
      </div><hr><br>
  <center><h3 class="cava_font-weight-bold">Athlete Registration Summary</h3></center>
   <div class="cava_container-fluid cava_table-responsive-sm cava_table-responsive-md cava_table-responsive-lg">
                         <table class="cava_table cava_table-bordered cava_table-hover ">
                                <thead class="cava_thead-dark">
                                    <tr>
                                        <th>ATHLETE NAME</th>                                        
                                        <th>USN</th>
                                        <th>GENDER</th>
                                        <th>EVENT 1</th>
                                        <th>EVENT 2</th>
                                        <th>RELAY EVENT</th>
                                        <th>RESERVED EVENT</th>
                                        <th>PHOTO</th>
                                    </tr>
                                </thead>
              <tbody>
<?php
 $order591 ="SELECT * FROM participants where CID='$cid' order by PID";
$food91 = mysqli_query($conn, $order591);
while($oss551 = mysqli_fetch_assoc($food91))
      {$ev1qname=$oss551["EVENT1"];
        $query1="SELECT * from sport where SNO='$ev1qname'";
        $m=mysqli_query($conn,$query1);
        $row=mysqli_fetch_assoc($m);
        $re1=$row['SNAME'];
        //2
        $ev2qname=$oss551["EVENT2"];
        if($ev2qname==100)
        {
          $re2='NONE';
          $ev2qname='';
        }
        else
        {
        $query2="SELECT * from sport where SNO='$ev2qname'";
        $m2=mysqli_query($conn,$query2);
        $row2=mysqli_fetch_assoc($m2);
        $re2=$row2['SNAME'];
        }
        //3
        $ev3qname=$oss551["RELAYEVT"];
        if($ev3qname==100)
        {
          $re3='NONE';
          $ev3qname='';
        }
        else
        {
        $query3="SELECT * from sport where SNO='$ev3qname'";
        $m3=mysqli_query($conn,$query3);
        $row3=mysqli_fetch_assoc($m3);
        $re3=$row3['SNAME'];
        }
        //4
        
        $ev4qname=$oss551["RESEVENT"];
        if($ev4qname==100)
        {
          $re4='NONE';
          $ev4qname='';
        }
        else
        {
        $query4="SELECT * from sport where SNO='$ev4qname'";
        $m4=mysqli_query($conn,$query4);
        $row4=mysqli_fetch_assoc($m4);
        $re4=$row4['SNAME'];
        }
        //
      echo '<tr><td>'. $oss551["ANAME"] . "</td><td>". $oss551["USN"]. "</td><td>". $oss551["GENDER"]. "</td><td>".$re1."</td><td>".$re2. "</td><td>".$re3."</td><td>".$re4."</td><td>";
      echo "<img style='width: 100px; height:120px' src='uploads/".$oss551['PHOTO']."' ></td></tr>";
      } 
?>
</tbody>
 </table></div>
 <footer>
  <div style="background-color: lightblue;padding:10px">
    <center><h6 class="cava_font-weight-bold">&copyCopyright 2019 GNDEC</h6></center>
  </div>
</footer>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript">
  var btn1=document.getElementById('uploadbutton');
  var status=<?php echo $partbtnstatus; ?>;  
  if(status>=1){
    btn1.style.display="NONE";alert("FINAL SUBMISSION IS DONE.");
  }
</script>
</body>
</html>
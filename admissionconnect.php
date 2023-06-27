<?php
include('dbconn.php');
?>
<?php

  if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  if (isset($_POST['upload'])) {
  	$fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $nationality = $_POST['nationality'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $idenmark = $_POST['idenmark'];
    $category = $_POST['category'];
    $religion = $_POST['religion'];
    $caste = $_POST['caste'];
    $martial = $_POST['martial'];
    $add1 = $_POST['add1'];
    $add2 = $_POST['add2'];
    $city = $_POST['city'];
    $pincode = $_POST['pincode'];
    $state = $_POST['state'];
    $country = $_POST['country'];
    $padd1 = $_POST['padd1'];
    $padd2 = $_POST['padd2'];
    $pcity = $_POST['pcity'];
    $ppincode = $_POST['ppincode'];
    $pstate = $_POST['pstate'];
    $pcountry = $_POST['pcountry'];
    $lang = $_POST['lang'];
    $hobb = $_POST['hobb'];
    //Parents information
    $fathername = $_POST['fathername'];
    $mothername = $_POST['mothername'];
    $parentemail = $_POST['parentemail'];
    $parentphone = $_POST['parentphone'];
    $parentincome = $_POST['parentincome'];
    $fatherqual = $_POST['fatherqual'];
    $motherqual = $_POST['motherqual'];
    $grdname = $_POST['grdname'];
    $grdphone = $_POST['grdphone'];
    //Educational Information
    $collegename = $_POST['collegename'];
    $boardname = $_POST['boardname'];
    $collegeadd = $_POST['collegeadd'];
    $passyear = $_POST['passyear'];
    $regno = $_POST['regno'];
    $duration = $_POST['duration'];
    $attempts = $_POST['attempts'];
    $examspassed = $_POST['examspassed'];
    $phymarks = $_POST['phymarks'];
    $phytotmarks = $_POST['phytotmarks'];
    $phyperc = $_POST['phyperc'];
    $mathsmarks = $_POST['mathsmarks'];
    $mathstotmarks = $_POST['mathstotmarks'];
    $mathsperc = $_POST['mathsperc'];
    $othermarks = $_POST['othermarks'];
    $othertotmarks = $_POST['othertotmarks'];
    $otherperc = $_POST['otherperc'];
    $diplomamarks = $_POST['diplomamarks'];
    $diplomatotmarks = $_POST['diplomatotmarks'];
    $diplomaperc = $_POST['diplomaperc'];
    $prior1 = $_POST['prior1'];
    $prior2 = $_POST['prior2'];
    $prior3 = $_POST['prior3'];
    $prior4 = $_POST['prior4'];
    //Medical History
    $emername = $_POST['emername'];
    $emercontact = $_POST['emercontact'];
    $bloodgrp = $_POST['bloodgrp'];
    $allergy = $_POST['allergy'];
    $pastmed = $_POST['pastmed'];
    //INSERTION QUERY
  	$sql = "INSERT INTO form1 (FNAME,LNAME,EMAIL,PHONE,NATIONALITY,GENDER,DOB,IDENMARK,CATEGORY,RELIGION,CASTE,MARTIAL,ADD1,ADD2,CITY,PINCODE,STATE,COUNTRY,PADD1,PADD2,PCITY,PPINCODE,PSTATE,PCOUNTRY,LANG,HOBB,FATHERNAME,MOTHERNAME,PARENTEMAIL,PARENTPHONE,PARENTINCOME,FATHERQUAL,MOTHERQUAL,GRDNAME,GRDPHONE,COLLEGENAME,BORDNAME,COLLEGEADD,PASSYEAR,REGNO,DURATION,ATTEMPTS,EXAMSPASSED,PHYMARKS,PHYTOTMARKS,PHYPERC,MATHSMARKS,MATHSTOTMARKS,MATHSPERC,OTHERMARKS,OTHERTOTMARKS,OTHERPERC,DIPLOMAMARKS,DIPLOMATOTMARKS,DIPLOMAPERC,PRIOR1,PRIOR2,PRIOR3,PRIOR4,EMERNAME,EMERCONTACT,BLOODGRP,ALLERGY,PASTMED) VALUES ('$fname','$lname','$email','$phone','$nationality','$gender','$dob','$idenmark','$category','$religion','$caste','$martial','$add1','$add2','$city','$pincode','$state','$country','$padd1','$padd2','$pcity','$ppincode','$pstate','$pcountry','$lang','$hobb','$fathername','$mothername','$parentemail','$parentphone','$parentincome','$fatherqual','$motherqual','$grdname','$grdphone','$collegename','$boardname','$collegeadd','$passyear','$regno','$duration','$attempts','$examspassed','$phymarks','$phytotmarks','$phyperc','$mathsmarks','$mathstotmarks','$mathsperc','$othermarks','$othertotmarks','$otherperc','$diplomamarks','$diplomatotmarks','$diplomaperc','$prior1','$prior2','$prior3','$prior4','$emername','$emercontact','$bloodgrp','$allergy','$pastmed')";
  	mysqli_query($conn, $sql);
  	echo mysqli_connect_error();
    if(mysqli_error($conn)){
  	echo mysqli_error($conn);
    }
    else
    {

    }
      $order59 ="SELECT * FROM form1 where FNAME='$fname' and PHONE='$phone'and EMAIL='$email' and DOB='$dob' ";
      $food9 = mysqli_query($conn, $order59);
      $oss55 = mysqli_fetch_assoc($food9);
  }
?> 
<!DOCTYPE html>
<html>
<head>
    <title>PRINT ADMISSION FORM | GNDECB</title>
<meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="Guru Nanak Dev Engineering College Bidar - 585401 GNDECB GND Gurudwara " />
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
<body onload="myFunction();window.print();" >
<table>
    <thead><td colspan="6"><img src="images/logo2.jpeg"></td></thead>
    <tbody>
        <tr><td colspan="6" class="font-weight-bold"><h3>ADMISSION FORM</h3></td></tr>
        <tr><td colspan="6"><h5 class="font-weight-bold">A)Personal information of the Candidate</h5></td></tr>
        <tr><td class="font-weight-bold ">Online Reference No:</td><td></td><td class="font-weight-bold ">College Roll No:</td><td></td><td class="font-weight-bold ">Registration No:</td><td></td></tr>
        <tr>
            <td colspan="1"><label class="font-weight-bold ">Name of the Applicant</label></td>
            <td colspan="2"><?php echo $oss55["FNAME"];?> <?php echo $oss55["LNAME"];?></td>
                        <td colspan="1"><label class="font-weight-bold ">Father's/Mother's/<br>Guardian's Name</label></td>
            <td colspan="2"><?php echo $oss55["FATHERNAME"];?> /<?php echo $oss55["MOTHERNAME"];?> /<?php echo $oss55["GRDNAME"];?></td>
        </tr>
        <tr>
            <td><label class="font-weight-bold ">Gender</label></td>
            <td><?php echo $oss55["GENDER"];?></td>
            <td><label class="font-weight-bold ">Date of Birth</label></td>
            <td><?php echo $oss55["DOB"];?></td>
            <td><label class="font-weight-bold ">Identification Mark</label></td>
            <td><?php echo $oss55["IDENMARK"];?></td>
        </tr>
        <tr>
            <td><label class="font-weight-bold ">Email</label></td>
            <td><?php echo $oss55["EMAIL"];?></td>
            <td><label class="font-weight-bold ">Phone</label></td>
            <td><?php echo $oss55["PHONE"];?></td>
            <td><label class="font-weight-bold ">Nationality</label></td>
            <td><?php echo $oss55["NATIONALITY"];?></td>
        </tr>
         <tr>
            <td><label class="font-weight-bold ">Martial Status</label></td>
            <td><?php echo $oss55["MARTIAL"];?></td>
            <td><label class="font-weight-bold ">Category/Religion/Caste</label></td>
            <td colspan="3"><?php echo $oss55["CATEGORY"];?>/<?php echo $oss55["RELIGION"];?>/<?php echo $oss55["CASTE"];?></td>
        </tr>
        <tr>
            <td><label class="font-weight-bold ">Permanent Address</label></td>
            <td colspan="5"><?php echo $oss55["ADD1"];?>,<br><?php echo $oss55["ADD2"];?>,<br><?php echo $oss55["CITY"];?>,<?php echo $oss55["PINCODE"];?>,<?php echo $oss55["STATE"];?>,<?php echo $oss55["COUNTRY"];?></td>
        </tr>
        <tr>
            <td><label class="font-weight-bold ">Present Address</label></td>
            <td colspan="5"><?php echo $oss55["PADD1"];?>,<br><?php echo $oss55["PADD2"];?>,<br><?php echo $oss55["PCITY"];?>,<?php echo $oss55["PPINCODE"];?>,<?php echo $oss55["PSTATE"];?>,<?php echo $oss55["PCOUNTRY"];?></td>
        </tr>
        <tr>
            <td ><label class="font-weight-bold ">Languages Known</label></td>
            <td colspan="2"><?php echo $oss55["LANG"];?></td>
            <td><label class="font-weight-bold ">Hobbies</label></td>
            <td colspan="2"><?php echo $oss55["HOBB"];?></td>
        </tr>
        <tr><td colspan="6"><h5 class="font-weight-bold">B)Personal Information of Parent/Guardian</h5></td></tr>
        <tr>
            <td><label class="font-weight-bold ">Father's/Mother's/<br>Guardian's Name</label></td>
            <td colspan="5"><?php echo $oss55["FATHERNAME"];?> /<?php echo $oss55["MOTHERNAME"];?> /<?php echo $oss55["GRDNAME"];?></td>
        </tr>
         <tr>
            <td><label class="font-weight-bold ">Email</label></td>
            <td><?php echo $oss55["PARENTEMAIL"];?></td>
            <td><label class="font-weight-bold ">Phone</label></td>
             <td><?php echo $oss55["PARENTPHONE"];?></td>
            <td><label class="font-weight-bold ">Annual Income</label></td>
             <td><?php echo $oss55["PARENTINCOME"];?></td>
        </tr>
        <tr>
            <td ><label class="font-weight-bold ">Father's Qualification</label></td>
            <td colspan="2"><?php echo $oss55["FATHERQUAL"];?></td>
            <td><label class="font-weight-bold ">Mother's Qualification</label></td>
            <td colspan="2"><?php echo $oss55["MOTHERQUAL"];?></td>
        </tr>
        <tr><td colspan="6"><h5 class="font-weight-bold">C)Educational Details</h5></td></tr>
                <tr>
            <td ><label class="font-weight-bold ">Name of the College</label></td>
            <td colspan="2"><?php echo $oss55["COLLEGENAME"];?></td>
            <td><label class="font-weight-bold ">Board/University of the College</label></td>
            <td colspan="2"><?php echo $oss55["BORDNAME"];?></td>
        </tr>
        <tr>
            <td><label class="font-weight-bold ">Address of the College</label></td>
            <td><?php echo $oss55["COLLEGEADD"];?></td>
            <td><label class="font-weight-bold ">Passing month & year</label></td>
            <td><?php echo $oss55["PASSYEAR"];?></td>
            <td><label class="font-weight-bold ">Registration no</label></td>
            <td><?php echo $oss55["REGNO"];?></td>
        </tr>
        <tr>
            <td><label class="font-weight-bold ">Exams Passed</label></td>
            <td><?php echo $oss55["EXAMSPASSED"];?></td>
            <td><label class="font-weight-bold ">Attempts</label></td>
            <td><?php echo $oss55["ATTEMPTS"];?></td>
            <td><label class="font-weight-bold ">Duration</label></td>
            <td><?php echo $oss55["DURATION"];?></td>
        </tr>
        <tr><td colspan="6"><h6 class="font-weight-bold">Marks Scored in Qualifying Exams</h6></td></tr>
                <tr>
            <td colspan="2"><label class="font-weight-bold ">Physics</label></td>
            <td><label class="font-weight-bold ">Marks Scored</label></td>
            <td><?php echo $oss55["PHYMARKS"];?>/<?php echo $oss55["PHYTOTMARKS"];?></td>
            <td><label class="font-weight-bold ">Percentage</label></td>
            <td><?php echo $oss55["PHYPERC"];?></td>
        </tr>
        <tr>
            <td colspan="2"><label class="font-weight-bold ">Mathematics</label></td>
            <td><label class="font-weight-bold ">Marks Scored</label></td>
            <td><?php echo $oss55["MATHSMARKS"];?>/<?php echo $oss55["MATHSTOTMARKS"];?></td>
            <td><label class="font-weight-bold ">Percentage</label></td>
            <td><?php echo $oss55["MATHSPERC"];?></td>
        </tr>
        <tr>
            <td colspan="2"><label class="font-weight-bold ">Chemistry/Biology/Bio-Technology/<br>Computer Science/Electronics</label></td>
            <td><label class="font-weight-bold ">Marks Scored</label></td>
            <td><?php echo $oss55["OTHERMARKS"];?>/<?php echo $oss55["OTHERTOTMARKS"];?></td>
            <td><label class="font-weight-bold ">Percentage</label></td>
            <td><?php echo $oss55["OTHERPERC"];?></td>
        </tr>
        <tr><td colspan="6">OR</td></tr>
         <tr>
            <td colspan="2"><label class="font-weight-bold ">Diploma</label></td>
            <td><label class="font-weight-bold ">Marks Scored</label></td>
            <td><?php echo $oss55["DIPLOMAMARKS"];?>/<?php echo $oss55["DIPLOMATOTMARKS"];?></td>
            <td><label class="font-weight-bold ">Percentage</label></td>
            <td><?php echo $oss55["DIPLOMAPERC"];?></td>
        </tr>
        <tr><td colspan="6"><h6 class="font-weight-bold">Branch Selection</h6></td></tr>
            <tr>
            <td ><label class="font-weight-bold ">Priority 1</label></td>
            <td colspan="2"><?php echo $oss55["PRIOR1"];?></td>
            <td><label class="font-weight-bold ">Priority 2</label></td>
            <td colspan="2"><?php echo $oss55["PRIOR2"];?></td>
        </tr>
            <tr>
            <td ><label class="font-weight-bold ">Priority 3</label></td>
            <td colspan="2"><?php echo $oss55["PRIOR3"];?></td>
            <td><label class="font-weight-bold ">Priority 4</label></td>
            <td colspan="2"><?php echo $oss55["PRIOR4"];?></td>
        </tr>
        <tr><td colspan="6"><h5 class="font-weight-bold">D)Medical History</h5></td></tr>
                    <tr>
            <td ><label class="font-weight-bold ">Emergency Contact Name</label></td>
            <td colspan="2"><?php echo $oss55["EMERNAME"];?></td>
            <td><label class="font-weight-bold ">Emergency Contact Number</label></td>
            <td colspan="2"><?php echo $oss55["EMERCONTACT"];?></td>
        </tr>
                 <tr>
            <td><label class="font-weight-bold ">Blood Group</label></td>
            <td><?php echo $oss55["BLOODGRP"];?></td>
            <td><label class="font-weight-bold ">Allergy</label></td>
            <td><?php echo $oss55["ALLERGY"];?></td>
            <td><label class="font-weight-bold ">Past Medicine History</label></td>
            <td><?php echo $oss55["PASTMED"];?></td>
        </tr>
        <tr><td colspan="6"><h5 class="font-weight-bold">Terms and Conditions</h5></td></tr>
     <tr><td colspan="6">   <p class="sansserif" style="text-align:left;padding-left:5% ">
                <b>Documents to be submitted by Candidate:-</b><br>
            a)Bank Challan of Rs.1000.(*Mandatory,Else the Admission holds Cancelled)<br><a href="bankdetails.html">-->Click here for Bank Account Details</a><br>
      b)   Admission from duly filled<br>                                                 
      c)   10+2 Marks Statement<br>                                                         
      d)   Date of birth (Matriculation Certificate)<br>                                 
      e)   Transfer/Leaving Certificate<br>                                                                  
      f)   Migration Certificate<br>                                                                            
      g)   Religion Certificate (For Sikh)<br>                                                                
      h)  Any Other (Specify)<br>   
        </p>
        <center><b><u><h4>AFFIRMATION OF CANDIDATES</h4></u></b></center>
      <p class="sansserif" style="text-align:left;padding-left:5% ">1) I do hereby certify that the particulars furnished above are correct.<br>
2)  I hereby agree, if admitted, to abide by the Rules & Regulations of the College in force from time to time including the dress code as given in the prospectus.<br>
3)  I undertake that I will do nothing inside and outside the College that will interfere with the orderly management and discipline.<br>
4)  I will do nothing which will bring a bad name to the College or the management in any way.<br>
5)  I will not consume liquor or drugs (not prescribed by the Doctor) in the Hostel or College, I shall not smoke in the College and Hostel premises.<br>
6)  I will not indulge in any ragging activities during my course of study in the College. If found guilty the management can expel me from the College.<br>
7)  I will not interfere in the policy matters of the management relating to administrative affairs during my course of studies in the College.<br>
8)  I shall treat the Attendance in the morning assembly/period meant for Students activates Co-Ordination committee / Sports / Any function / activities organized by the College as part of my curricular activities and will attend the same.<br>
9)  I further agree to submit to any action may entail cancellation of admission rustication / expulsion and/or criminal prosecution (if necessary as per law)<br>
10) I fully understand that above action may entail cancellation of admission rustication / expulsion and/or criminal prosecution (if necessary as per law)<br>
11) I fully understand that I have been given admission as Sikh student under minority quota and that in case, I fail to maintain the Sikh status I am liable to disciplinary action of expulsion / confiscation of security deposit from the College (Sikh Students). <br>
12) I understand that Branch of Engineering Allotted by Management will be final.<br>
13) I have read and understood the above clauses and hereby append my signature by my own free will.<br>
</p><br>
<center><b><u><h4>AFFIRMATION OF PARENT / GUARDIAN</h4></u></b></center>
      <p class="sansserif" style="text-align:left;padding-left:5% ">1) I certify that the above particulars furnished by my son / ward are correct.<br>
2)  I undertake to educate my son/ward in this college till completion of the course.<br>
3)  I undertake the responsibility of timely payment of all college dues of my son/ward and for his good conduct throughout his stay in the college. <br> In case of failure to do so the Management's decision will be final and binding on me.<br>
4)  I understand that failure to clear the College dues before University Examination my ward will not be permitted to appear in the examination.<br>
5)  In case I withdraw my son/ward in the middle of the course, I agree to pay remaining year fees compensation stipulated by the management of the College.<br>
6)  I understand that the admission once taken is final and amounts paid shall not be refunded under any circumstances.<br>
7)  I understand that in case of false / suppressed information my son/ward is likely to be expelled from college in addition to criminal prosecution if required.<br>
8)  I understand that my ward shall be expelled/rusticated if found consuming liquor, or un-authorized drugs or smoking.<br>
9)  I have fully understood the consequences of the above undertaking and hereby append my signature by my own free will.<br>
10) Any legal dispute will be subject to Bidar Jurisdiction.<br>
</p></td></tr>
    </tbody>
</table>
</body>
<script type="text/javascript" src="js/routes.js"></script>
<script>
function myFunction() {
  alert("Application form has been Submitted Successfully\nYou will be redirected to Print Page in 5secs..\nPlease wait");
}
</script>
</html>
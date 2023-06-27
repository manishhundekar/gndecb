<?php
  include('../../dbconn.php');
  include('mail_function_generalmail.php');
  $q6 ="SELECT * FROM college ORDER BY CLGDBID ASC LIMIT 0,40";
  $r6 = mysqli_query($conn, $q6);
  echo '<script>alert("PLEASE WAIT");</script>';
   while($rw1=mysqli_fetch_assoc($r6))
    {
	    $email=$rw1['PDEMAIL'];
	    $mail->AddAddress($email);
		$mail->Subject = "GNDEC VTU ATHLETICS MEET 2019-GENTLE REMAINDER";
		$mail->MsgHTML("RESPECTED SIR / MADAM ,
		<br>
		1.Those Colleges who have not registered , can register online till 16 OCT 2019 before 5.00 P.M.<br>
		2.Those Colleges who have already registered and  want to add participants can send a request at gndecvtuathletics2019@gmail.com through principal or physical director mail id.<br>
		3.College need to update their payment receipt details at Step 2D  online with in prescribed time, Otherwise your registration will be invalid.Ignore if already submitted.<br>
		<br>
		Important:<br>
		1.On-Spot Registration is strictly not entertained.<br>
		2.Institution ID Card is compulsory for Participating in Athletic Meet.<br>
		3.Original VTU Eligibility Proforma  duly signed by concerned authorities and payment receipt need to be submitted at time of registration at GNDEC.<br> Soft Copy Need to mailed compulsory at gndecvtuathletics2019@gmail.com by 16 OCT 2019 5.00 P.M.<br>
		With Warm Regards<br>
		WEB DEVELOPMENT TEAM <br>
		Guru Nanak Dev Engineering College, Bidar<br>");
		$mail->IsHTML(true);        
		$result = $mail->Send();
		if($result)
		{
		    echo "EMAIL HAS BEEN SENT SUCCESSFULLY TO".$email." EMAIL ADDRESS";
		}
		else
		{
		   echo "OE-404";
		}
  } 
?>
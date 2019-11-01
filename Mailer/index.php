<?php
		$email = $_POST['email'] ;
		$name= $_POST['name'];
		$body= $_POST['msg'];
		require("PHPMailer_5.2.0/class.PHPMailer.php");
		$mail = new PHPMailer();
		$mail->IsSMTP();
		$mail->Host = "smtp.gmail.com"; 
		$mail->SMTPAuth = true;   
		$mail->Port=465;
		$mail->SMTPSecure = "ssl";
		$mail->Username = " ";  // SMTP username
		$mail->Password = " "; // SMTP password
	
	// $email = $_REQUEST['email'] ;
		$mail->To = " ";
		$mail->From= " "  ;	
		$mail->FromName= 'Inquire';
		$mail->AddAddress($email);
		$mail->IsHTML(true);
		$mail->Subject = "Inquire";
		$mail->Body    = $name . "<br/>" .$body . "<br/>".$email;
		$mail->AltBody = $name . "<br/>" .$body . "<br/>".$email;
	
		if($mail->Send())
		{
			header('Location:../index.php?status=success');			
		} else {
			header('Location:../index.php?status=fail');			
		}
		
 

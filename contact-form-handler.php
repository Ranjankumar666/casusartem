<?php
	 
	 $name = $_GET['name'];
	 $visitor_email=$_GET['email'];
	 $message=$_GET['message'];
	 $phone=$_GET['phone'];

	 $email_from='casusartem@gmail.com';

	 $email_subject="New Form Submission";

	 $email_body="User Name: $name. \n".
	 				"User Email: $visitor_email. \n".
	 					"User Message : $message. \n".
	 					"User Phone : $phone. \n".;


	 $to="typhonazazel@gmail.com";

	 $headers ="From: $email_from \r\n";

	 $headers.= "Reply-To: $visitor_email \r\n";

	 mail($to,$email_subject,$email_body,$headers);

	 header("Location: index.html?mailsend");
?>










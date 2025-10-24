<?php
	$msg = "";
   if(count($_POST) > 0) {
	   $name = htmlspecialchars(trim($_POST["firstname"]));
	   $message = htmlspecialchars(trim($_POST["msg"]));
	   
	   $to = "office@benjamin-oberauer.at";
	   $subject = "New Message!";
	   $body = "Name: $name\n\nMessage:\n$message\n";
	   $headers = "From: newmessage@benjamin-oberauer.at\r\n";
	   $headers .= "Reply-To: $to\r\n";
	   
	   if(mail($to, $subject, $body, $headers)) {
		   $msg = '<p class="success">Thanks for your Message!</p>';
	   } else {
		   $msg = '<p class="error">Something went wrong, please try again!</p>';
	   }
   } else {
	   $msg = '<p class="error">Something went wrong, please try again!</p>';
   }
?>
<!doctype html>
<html lang="en">
	<head>
		<title>Message</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<style>
			*{
			background-color: grey;	
			}
			.error{
				color: red;
			}
			.success{
				color: green;
			}
		</style>
	</head>
		<body>
			<?php echo($msg); ?>
		</body>
</html>
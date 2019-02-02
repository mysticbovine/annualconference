<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||

   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$title = $_POST['title'];
$proposal = $_POST['proposal'];
$pic = $_POST['pic'];
$message = $_POST['message'];
	
// Create the email and send the message
$to = 'mysticbovine@gmail.com'; //, d96springconference@outlook.com Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Education Session Submission:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nTitle: $title\n\nMessage:\n$message";
$headers = "From: noreply@outlook.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	

if (mail($to,$email_subject,$email_body,$headers)){
echo "Mail sent to: $to"; } else { echo "Mail failed.";}
return true;			
?>
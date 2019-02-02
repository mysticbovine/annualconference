<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['table_name'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }

$name = $_POST['name'];
$emailaddress = $_POST['email'];
$table_name = $_POST['table_name'];
$attendee1 = $_POST['attendee1'];
$attendee2 = $_POST['attendee2'];
$attendee3 = $_POST['attendee3'];
$attendee4 = $_POST['attendee4'];
$attendee5 = $_POST['attendee5'];
$attendee6 = $_POST['attendee6'];
$attendee7 = $_POST['attendee7'];
$attendee8 = $_POST['attendee8'];
$tablebookingrequests = $_POST['requests'];
	
// Create the email and send the message
$to = 'brendabenham4@gmail.com, webmaster@district96.ca'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Annual Conference Table Booking:  $table_name";
$email_body = "A table has been reserved. Here are the details:\n\nName: $name\n\nEmail: $emailaddress\n\nTable Name: $tablebookingtable_name\n\nAdditional Information: $tablebookingrequests\n\nAttendee #1: $attendee1\n\nAttendee #2: $attendee2\n\nAttendee #3: $attendee3\n\nAttendee #4: $attendee4\n\nAttendee #5: $attendee5\n\nAttendee #6: $attendee6\n\nAttendee #7: $attendee7\n\nAttendee #8: $attendee8\n";
$headers = "From: noreply@district96.ca\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $emailaddress";	
mail($to,$email_subject,$email_body,$headers);

// Create a copy to send to the sender
$to = $emailaddress; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Annual Conference Table Booking Received:  $table_name";
$email_body = "Thank you for reserving a table at the Annual Conference.  If there are any questions we will contact you.\n\n For your records here are the details of your reservation:\n\nName: $name\n\nEmail: $emailaddress\n\nTable Name: $tablebookingtable_name\n\nAdditional Information: $tablebookingrequests\n\nAttendee #1: $attendee1\n\nAttendee #2: $attendee2\n\nAttendee #3: $attendee3\n\nAttendee #4: $attendee4\n\nAttendee #5: $attendee5\n\nAttendee #6: $attendee6\n\nAttendee #7: $attendee7\n\nAttendee #8: $attendee8\n";
$headers = "From: noreply@district96.ca\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $emailaddress";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>
<?php 
$name = $_POST['Name'];
$email = $_POST['Email'];
$phone = $_POST['Phone'];
$message = $_POST['Message'];
 
$to = 'info@neoware.io';
$subject = 'Web Inquiry';
$message = 'From: '.$name."\n".
  '  Email: '.$email."\n".
  '  Phone: '.$phone."\n".
  '  Message: '.$message;
$headers = 'From: info@neoware.io' . "\r\n";
 
// this line checks that we have a valid email address
if (filter_var($email, FILTER_VALIDATE_EMAIL)) { 
   mail($to, $subject, $message, $headers); //This method sends the mail.
   echo "Your email was sent!"; // success message
} else {
   echo "Invalid Email!";
}

?>

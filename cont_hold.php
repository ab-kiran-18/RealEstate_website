<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = "18abkiran5o5@gmail.com";
$subject = "I have seen your website";

$header = "From:.$email. \r\n";
$header .= "Cc:afgh@somedomain.com \r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html\r\n";

$retval = mail ($to,$subject,$message,$header);
         
if( $retval == true ) {
   echo "Message sent successfully...";
}else {
   echo "Message could not be sent...";
}
// $formcontent="From: $name \n Message: $message";
// $recipient = "18abkiran5o5@gmail.com";
// $subject = "Contact Form";
// $mailheader = "From: $email \r\n";
// mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
// echo "Thank You!";
?>
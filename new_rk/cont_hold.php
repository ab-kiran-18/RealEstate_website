<?php
if (isset($_POST["btn-send"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $msg = $_POST["message"];

    $subject = "about plots...";

    $header = "From:" . $email . "\r\n";
    $header .= "Cc:" . $email . "\r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html\r\n";

    $to = "18abkiran5o5@gmail.com";

    $retreval = mail($to, $subject, $msg, $header);

    if ($retval == true) {
        echo "<script>
                window.onload = function(){
                    alert('Message sent successfully...');
                }
            </script>";
    } else {
        echo "<script>
        window.onload = function(){
            alert('Message not send');
        }
    </script>";
    }
}

?>

<?php
    include('Mail.php');

    $recipients = '18abkiran5o5@gmail.com';

    $headers['From']    = $_POST["email"];;
    $headers['To']      = '18abkiran5o5@gmail.com';
    $headers['Subject'] = 'Test message';

    $body = $_POST["message"];

    $smtpinfo["host"] = "smtp.server.com";
    $smtpinfo["port"] = "25";
    $smtpinfo["auth"] = true;
    $smtpinfo["username"] = "smtp_user";
    $smtpinfo["password"] = "smtp_password";


    // Create the mail object using the Mail::factory method
    $mail_object =& Mail::factory("smtp", $smtpinfo); 

    $mail_object->send($recipients, $headers, $body);
?> 

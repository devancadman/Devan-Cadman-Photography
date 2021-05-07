$to      = 'devancadman@outlook.com';
$subject = 'New Request from Website';
$message = $_POST['mytextarea'];
$headers = 'From: webmaster@qixty.com' . "\r\n" .
'Reply-To: devancadman@outlook.com' . "\r\n" .
'X-Mailer: PHP/' . phpversion();

$send = mail($to, $subject, $message, $headers);

// this will help you to get the status mail sent or not
if($send) :
   echo "Email sent";
else :
    echo "Email sending failed";
endif;
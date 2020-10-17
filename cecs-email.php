<?php

// Get data from the form
$firstName = $_POST["fName"];
$lastName = $_POST["lName"];
$email = $_POST["theEmail"];
$comments = $_POST["theComments"];

$todayDate = date("m/d/Y");
$time = date("H:i");

$to = "samjberman0@gmail.com";

// , kelly.phinney@capeelizabeth.org

$subject = "New Message from Camp Website $todayDate $time";

$message = "
<html>
<head>
    <title>HTML Email</title>
</head>
<body>
    <div style='font-family:georgia,garamond,serif; font-size:14px;'>

        <p>Dear CECS Summer Camp Admin Staff,</p>
        <p>A new message was recently posted to the Camp Website:</p>
        <br/>
        <p><strong>First Name:</strong> $firstName</p>
        <p><strong>Last Name:</strong> $lastName</p>
        <p><strong>Date:</strong> $todayDate $time</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Comments:</strong> $comments</p>
        <br/>
        <p>Please respond ASAP,</p>
        <p>Sam's Website Bot</p>

    </div>
</body>
</html>
";

$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

// Additional headers
$headers[] = "From: CECS Summer Camp Website <webmaster@capesummercamps.org>";
$headers[] = "Reply-To: $email";
$headers[] = "Bcc: webmaster@capesummercamps.org";

// Mail it
mail($to, $subject, $message, implode("\r\n", $headers));
echo "Email Sent.";
?>
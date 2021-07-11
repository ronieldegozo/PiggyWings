<?php

require_once './vendor/autoload.php';
require_once './admin/db_conn.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
  ->setUsername('Charleslyf14@gmail.com')
  ->setPassword('charles.14');
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Send the message
function sendVerificationEmail($userEmail, $token){
    // Create a message
    global $mailer;
    $body = '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Verify Email</title>
        <style>
        .btn{
            font: bold 25px Arial;
            text-decoration: none;
            background-color: #151792;
            color: #ffffff;
            padding: 2px 6px 2px 6px;
 
            }
            </style>
    </head>
    <body>
    <div class="wrapper">
        <p>Thank you for signing in Piggy Wings Restaurant, Please click the link below to Verify your account </p>
    </div>
        <a href="http://localhost/RESERVATION//homepage.php?token=' . $token .'" class="btn">Verify your account here</a>
    </body>
    </html>
    ';
    $message = (new Swift_Message('Piggy Wings Restaurant, Verify your Email Address'))
    ->setFrom('Charleslyf14@gmail.com')
    ->setTo($userEmail)
    ->setBody($body,'text/html');
    $result = $mailer->send($message);
}

?>
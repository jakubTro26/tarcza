<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include_once "PHPMailer/PHPMailer.php";
include_once "PHPMailer/Exception.php";
include_once "PHPMailer/SMTP.php";

function send_mail($to,$subject,$body){
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function


$mail = new PHPMailer(true);                                 // Passing `true` enables exceptions

    //Server settings
    $mail->SMTPDebug = 0;                                     // Enable verbose debug output
    $mail->isSMTP();                                         // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';                       	// Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                                // Enable SMTP authentication
    $mail->Username = 'pcking.rk@gmail.com';               // SMTP username
    $mail->Password = '!!@Urodziny0889!!@';                              // SMTP password
    $mail->SMTPSecure = 'tls';                          // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                 // TCP port to connect to

    //Recipients
    $mail->setFrom('firstname', 'nazwisko', 'telefon', 'email');				//SET "FROM" EMAIL AND NAME. 
	// IT SHOULD BE LIKE THIS, $mail->setFrom('info@hackerrahul.com', 'HackerRahul');
    
	
	$mail->addAddress($to);            							// Add a recipient

    //Content
    $mail->isHTML(true);                                      // Set email format to HTML
    $mail->Subject = $subject;								 // Subject of the Email
    $mail->Body    = $body;									// Body of the Email

   if($mail->send()){
    $response = '1';
    }else{
    $response = '0';
    }
    return $response;
}


?>
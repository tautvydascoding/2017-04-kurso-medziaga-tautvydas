<?php

echo "<h2> Labas, cia Ruvesta Mailer </h2>";
echo "GET funkcijos reiksmes: </br>";
print_r($_POST);  //atspasudinsim GET formos kintamosius
echo "<br/><br/><br/>";


require_once('connect.php');
require_once('comentsave.php');


require_once 'lib/PHPMailer-master/PHPMailerAutoload.php';


$mail = new PHPMailer;

var_dump($mail);   // atspaudinti obj duomenims
// print_r($mail);    // skirtas labiau atspausdinti masyvams


$mail->Username = 'romkin15@gmail.com';                 // SMTP username
$mail->Password = 'romkin15gmail';                           // SMTP password
//
//
$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();

$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);

                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                     // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'romkin15@gmail.com';                 // SMTP username
$mail->Password = 'romkin15gmail';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('romkin15@gmail.com', 'Ruveta test');

$fullName = $_POST["firstname"];
$mail->addAddress($_POST["email"], $fullName );     // Add a recipient

$mail->addReplyTo('romkin15@gmail.com', 'Information');
$mail->addCC('cc@example.com');
$mail->addBCC('bcc@example.com');
//
// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Sveikiname uzsiregistravus';
$mail->Body    = '<h1>Turime super pasiulyma</h1> <p>
visi nauji nariai - gauna nuolaidu jeigu uzsisako kreditu
</p> <b>Linkime dazniau grįšti!</b>';
$mail->AltBody = "=========Turime super pasiulyma===========
visi nauji nariai - gauna nuolaidu jeigu uzsisako kreditu
Linkime dazniau grįšti!";

if(!$mail->send()) {
  echo 'Message could not be sent.';
  echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
  echo 'Email sent OK. Aciu uz jusu klausima ';
}

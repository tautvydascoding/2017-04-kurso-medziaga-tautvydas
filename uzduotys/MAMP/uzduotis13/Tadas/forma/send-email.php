<?php
// printo formos reiksmes
echo "GET reiksmes";
echo "<br /><br /><br />";
print_r($_GET);

require_once 'lib/PHPMailerAutoload.php';


$mail = new PHPMailer;

var_dump($mail); // IDEA: skirtas atspausdinti obj duomenims
print_r($mail); // IDEA: skirtas labiau atspausdinti masyvams


$mail->Username = 'testascoding@gmail.com';
$mail->Password = 'tipologija';


$mail->SMTPDebug = 3;                               // Enable verbose debug output


$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp1.gmail';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'testascoding@gmail.com';                 // SMTP username
$mail->Password = 'tipologija';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('testascoding@gmail.com', 'Vardas');

$fullName = $_GET["firstname"] . " " . $_GET["lastname"];
$mail->addAddress($_GET["email"], $fullName );     // Add a recipient
               // Name is optional
$mail->addReplyTo('testascoding@gmail.com', 'Information');
$mail->addCC('cc@example.com');
$mail->addBCC('bcc@example.com');
//
// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML
//
$mail->Subject = 'Sveikiname, sekmingai uzsiregistravus';
$mail->Body    = '<h1>Turime super pasiulyma</h1> <p>
visi nauji nariai - gauna nuolaidu jeigu uzsisako kreditu <b>';
$mail->AltBody = 'Turime super pasiulyma.';




//
if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}

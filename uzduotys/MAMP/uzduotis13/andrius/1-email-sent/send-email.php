<?php
// atspauzdiname formos kintamuosius

echo "Get reiksmes: <br />";
print_r($_GET);
echo "<br />";
echo "<br />";


require_once 'lib/PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer; // sukuriamas PHPMailer obj
// var_dump($mail); // skirtas atspausdinti obj duomenims


$mail->SMTPDebug = 3;                                  // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'testascoding@gmail.com';           // SMTP username
$mail->Password = 'tipologija';                       // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('testascoding@gmail.com', 'Vardas');
$fullName = $_GET["firstname"] . " " . $_GET["lastname"];
$mail->addAddress($_GET["email"], $fullName);         // Add a recipient
$mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo('testascoding@gmail.com', 'Information');
$mail->addCC('cc@example.com');
$mail->addBCC('bcc@example.com');

// $mail->addAttachment('/var/tmp/file.tar.gz');       // Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');  // Optional name
$mail->isHTML(true);                                   // Set email format to HTML

$mail->Subject = 'Sveikiname, uzsiregistravus';
$mail->Body    = '<h1>Turime super pasiulyma</h1> <p>
visi nauji nairai- gauna nuolaidu, jeigu uzsisako kreditu
</p> <b>linkime gristi!</b>';
$mail->AltBody = '=======Turime super pasiulyma========
 visi nauji nairai- gauna nuolaidu, jeigu uzsisako kreditu
 Linkime gristi!';

if(!$mail->send()) {
    echo 'Message could not be sent';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}


 ?>

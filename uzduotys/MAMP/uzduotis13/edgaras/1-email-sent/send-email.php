
  <?php

// print formos reiksmes
// print_r($_GET);
// echo "<br><br>";
require_once 'lib/PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer;

// var_dump($mail);  // atspausdinti obj duomenis
// print_r($mail);   // skirtas labiau atspausdinti masyvams

$mail->Username = 'testascoding@gmail.com';
$mail->Password = 'tipologija';


$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'testascoding@gmail.com';                 // SMTP username
$mail->Password = 'tipologija';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('testascoding@gmail.com', 'Siuntėjas');
$fullName = $_GET['firstname'] . " " . $_GET['lastname'];
$mail->addAddress('$_GET["email"]', $fullName);     // Add a recipient
// $mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo('testascoding@gmail.com', 'Information');
$mail->addCC('cc@example.com');
$mail->addBCC('bcc@example.com');

// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Sveikiname, Jūsų registracija patvirtinta';
$mail->Body    = '<h1>Dėmesio</h1>
<h2>visi nauji nariai gauna <b>nuolaidų</b> jei užsisako kreditu iš mūsų svetainės</h2>';
$mail->AltBody = 'Dėmesio, visi nauji nariai gauna nuolaidų jei užsisako kreditu iš mūsų svetainės';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}

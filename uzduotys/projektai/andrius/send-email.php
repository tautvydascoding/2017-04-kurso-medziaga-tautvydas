<?php
if (isset($_POST['submited'])) {
  if (!empty($_POST['vardas']) && !empty($_POST['pastas']) && !empty($_POST['zinute']) && filter_var($_POST['pastas'], FILTER_VALIDATE_EMAIL)) {
    require_once 'lib/PHPMailer/PHPMailerAutoload.php';
    $mail = new PHPMailer; // sukuriamas PHPMailer obj

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'andriuskondratas@gmail.com';           // SMTP username
    $mail->Password = 'Ser1VeriS2017';                       // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    $mail->setFrom('andriuskondratasg@gmail.com');
    $mail->addAddress('nuostabus.v@gmail.com');         // Add a recipient
    $mail->addReplyTo($_POST['pastas'], $_POST['vardas']);

    $mail->isHTML(true);                                   // Set email format to HTML

    $mail->Subject = 'Svetaineje uzpildyta kontaktu forma';
    $mail->Body    = "Nuo: ".$_POST['vardas']." (" . $_POST['pastas'] . ")<br/><br/> " . $_POST['zinute'];

    if(!$mail->send()) {
        $error = 'Siuntimo klaida';
    } else {
      $error = '';
    }
  } else {
    $error = 'Neužpildyti visi laukeliai arba neteisingai nurodytas el.paštas';
  }
}
?>

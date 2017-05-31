 <?php
// print formos reiksmes
    echo ("Get reiksmes: <br />");
 print_r($_GET);
 echo "<br /><br /><br />";

 require_once 'lib\phpMailer\PHPMailerAutoload.php';


 $mail = new PHPMailer;

 var_dump($mail); //atsispausdinti obj duomenims
 // print_r($mail); //skirtas labiau atspausdint masyvams

 $mail->Username = 'tastascoding@gmail.com';        //SMIP username
 $mail->Password = 'tipoligija';                        //SMIO password

 $mail->SMTPDebug = 3;                               // Enable verbose debug output

 $mail->isSMTP();                                      // Set mailer to use SMTP
 $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
 $mail->SMTPAuth = true;                               // Enable SMTP authentication
 $mail->Username = 'tastascoding@gmail.com';                 // SMTP username
 $mail->Password = 'tipoligija';                           // SMTP password
 $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
 $mail->Port = 587;                                    // TCP port to connect to

 $mail->setFrom('tastascoding@gmail.com', 'Mailer');
 $fullName = $_GET["firstname"]. " " .$_GET["lastName"];
 $mail->addAddress('$_GET["email"]', '$_GET["email"].$_GET["email"]');               //Add a recipient
 $mail->addReplyTo('tastascoding@gmail.com', 'Information');
 $mail->addCC('cc@example.com');
 $mail->addBCC('bcc@example.com');

 // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
 // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
 $mail->isHTML(true);                                  // Set email format to HTML

 $mail->Subject = 'Sveikiname uzsiregistravus';
 $mail->Body    = '<h1>Turime super pasiulyma</h1> <p>visi nauji nariai - gauna nuolaidu, jeigu uzsiregistruoja</p> <b>Linkine grizti dazniau</b>';
 $mail->AltBody = '=======Turime super pasiulyma============
 visi nauji nariai - gauna nuolaidu, jeigu uzsiregistruoja
 Linkine grizti dazniau!';



 if(!$mail->send()) {
     echo 'Message could not be sent.';
     echo 'Mailer Error: ' . $mail->ErrorInfo;
 } else {
     echo 'Sveikiname uzsiregistravus puslapyje';
 }
 ?>

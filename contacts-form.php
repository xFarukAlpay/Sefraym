<?php

// veritabanı bağlantısı
$connect = mysqli_connect("ftpupload.net", "epiz_33742341", "RnXyvDdY7xXV", "sefraym");

// formdan gelen verileri al
$name = mysqli_real_escape_string($connect, $_REQUEST['contactformname']);
$email = mysqli_real_escape_string($connect, $_REQUEST['contactformemail']);
$phone = mysqli_real_escape_string($connect, $_REQUEST['contactformphone']);
$country = mysqli_real_escape_string($connect, $_REQUEST['contactformcountry']);
$comment = mysqli_real_escape_string($connect, $_REQUEST['contactformcomment']);

// veritabanına ekle
$stmt = mysqli_prepare($connect, "INSERT INTO contacts (name, email, phone, country, comment) VALUES (?, ?, ?, ?, ?)");
mysqli_stmt_bind_param($stmt, 'ssiss', $name, $email, $phone, $country, $comment);
mysqli_stmt_execute($stmt);




// e-posta gönderme kodu
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';
require 'bilgiler.php';


$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER; //Enable verbose debug output
    $mail->isSMTP(); //Send using SMTP
    $mail->Host = 'smtp.gmail.com'; //Set the SMTP server to send through
    $mail->SMTPAuth = true; //Enable SMTP authentication
    $mail->Username = $kullanici; //SMTP username
    $mail->Password = $sifre; //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //Enable implicit TLS encryption
    $mail->Port = 465; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom($kullanici, 'Sefraym Company');
    $mail->addAddress('sefraymcompany@gmail.com'); //Name is optional


    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    $mail->isHTML(true); // E-posta formatını HTML olarak ayarlayın
    $mail->Subject = $_POST['contactformname'];

    // E-posta gövdesi için kullanıcı verilerini oluşturun
    $body .= "Telefon:  " . $_POST['contactformphone'] . "<br>";
    $body .= "Gmail:  " . $_POST['contactformemail'] . "<br>";
    $body .= "İsim: " . $_POST['contactformname'] . "<br>";
    $body .= "Ülke:  " . $_POST['contactformcountry'] . "<br>";
    $body .= "Yorum:  " . $_POST['contactformcomment'] . "<br>";

    $mail->Body = $body; // E-posta gövdesini oluşturulan verilere ayarlayın
    $mail->AltBody = "Telefon: " . $_POST['contactformphone'];
    $mail->CharSet = 'utf-8';



    $mail->send();
    echo 'Gönderildi';
} catch (Exception $e) {
    echo "Hata Oluştu: {$mail->ErrorInfo}";
}
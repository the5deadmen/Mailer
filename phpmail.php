<?php

//include PHPMailerAutoload.php
require 'PHPMailer-master/class.phpmailer.php';
//create an instance of PhpMailer
$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $home = $_POST['home'];
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'mail.privateemail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'admin@cater-allen.group';                 // SMTP username
    $mail->Password = 'Password1234!';
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('admin@cater-allen.group', 'Client');
    $mail->addAddress('admin@cater-allen.group', 'CA');     // Add a recipient
    $mail->addAddress('admin@cater-allen.group');               // Name is optional
    $mail->addReplyTo('admin@cater-allen.group', 'Information');
    $mail->addCC('admin@cater-allen.group');
    $mail->addBCC('admin@cater-allen.group');


    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'is interested in a project with you';
    $mail->Body    = " Client name: $name<br> Home address: $home<br>Email address: $email<br>Phone number: $phone<br><br>Message: $message";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';

} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}




?><script type="text/javascript">
    setTimeout(function () {
        window.location.href= 'http://www.profitsandincome.org/'; // the redirect goes here

    },3000);
</script>
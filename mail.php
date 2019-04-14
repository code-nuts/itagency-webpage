<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';
    
    // $mail = new PHPMailer;
    // $mail->isSMTP(); 
    // $mail->SMTPDebug = 2; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
    // $mail->Host = "smtp.gmail.com"; // use $mail->Host = gethostbyname('smtp.gmail.com'); // if your network does not support SMTP over IPv6
    // $mail->Port = 587; // TLS only
    // $mail->SMTPSecure = 'tls'; // ssl is depracated
    // $mail->SMTPAuth = true;
    // $mail->Username = "ghusimushi@gmail.com";
    // $mail->Password = "qA67bPk%%c8Ka&ckviuB02HFt%CBDhi";
    // $mail->setFrom("ashik@mail.com", "Ashik");
    // $mail->addAddress("md.arif.ask@gmail.com", "Abdur Razzak Chowdhury");
    // $mail->Subject = 'PHPMailer GMail SMTP test';
    // $mail->msgHTML("test body"); //$mail->msgHTML(file_get_contents('contents.html'), __DIR__); //Read an HTML message body from an external file, convert referenced images to embedded,
    // $mail->AltBody = 'HTML messaging not supported';
    // // $mail->addAttachment('images/phpmailer_mini.png'); //Attach an image file
    
    // if(!$mail->send()){
    //     echo "Mailer Error: " . $mail->ErrorInfo;
    // }else{
    //     echo "Message sent!";
    // }
    echo !extension_loaded('openssl')?"Not Available":"Available";
    
    $mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 2;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host = "smtp.gmail.com";
    // $mail->Host       = 'smtp1.gmail.com;smtp2.example.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'ghusimushi@gmail.com';                     // SMTP username
    $mail->Password   = 'qA67bPk%%c8Ka&ckviuB02HFt%CBDhi';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('from@example.com', 'Mailer');
    $mail->addAddress('md.arif.ask@gmail.com', 'Joe User');     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
    

?>
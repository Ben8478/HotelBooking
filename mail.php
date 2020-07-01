<?php session_start(); ?>


  <?php

  // Import PHPMailer classes into the global namespace
  // These must be at the top of your script, not inside a function
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;

  // Load Composer's autoloader
  require 'vendor/autoload.php';

  // Instantiation and passing `true` enables exceptions
  $mail = new PHPMailer(true);

  try {
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.mailtrap.io';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'db0b24e6ad31c8';                     // SMTP username
    $mail->Password   = 'b99d53703cb8e3';                               // SMTP password
    $mail->SMTPSecure = 'TLS';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('bdekock8@icloud.com', 'Mailer');
    $mail->addAddress($_SESSION['email'], $_SESSION['name']);     // Add a recipient
    $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Hotel Booking';
    $mail->Body    = "Dear " . $_SESSION['name'] . "," . " <br>Thank you for your booking at hotel " . $_POST['hotel'] . ". The hotel manager will be in contact with you shortly to confirm your booking.</br> Kindest Regards </b>";
    $mail->AltBody = "Dear " . $_SESSION['name'] . ", Thank you for your booking at hotel " . $_POST['hotel'] . " The hotel manager will be in contact with you shortly to confirm the booking. Kindest Regards ";

    $mail->send();
    echo "Confirmation email has been sent";
  } catch (Exception $e) {
    echo "<h1 id =\"header_mail\"> Message could not be sent. Mailer Error: {$mail->ErrorInfo}</h1>";
  }


  ?>

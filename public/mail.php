<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mail = new PHPMailer(true);

    $name    = htmlspecialchars(trim($_POST["name"]));
    $email   = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $subject = htmlspecialchars(trim($_POST["subject"]));
    $phone   = htmlspecialchars(trim($_POST["phone"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'info.novagecare@gmail.com'; // Your Gmail
        $mail->Password   = 'othe yanu xckf aglt';    // App password
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // Recipients
        $mail->setFrom('info.novagecare@gmail.com', 'Novage Care Website');
        $mail->addAddress('info.novagecare@gmail.com'); // Send to same Gmail

        // Content
        $mail->isHTML(true);
        $mail->Subject = $subject ?: 'New Contact Message';
        $mail->Body    = "
            <h3>Contact Message</h3>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Phone:</strong> $phone</p>
            <p><strong>Message:</strong><br>$message</p>
        ";

        $mail->send();
        echo "Message has been sent successfully.";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>


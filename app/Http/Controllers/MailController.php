<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


class MailController extends Controller
{
    public function sendMail()
    {
        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'noreply.samadhangramin@gmail.com';
            $mail->Password   = 'hbhhznnnebeoumtx'; // Google App password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;

            $mail->SMTPOptions = [
                'ssl' => [
                    'verify_peer'       => false,
                    'verify_peer_name'  => false,
                    'allow_self_signed' => true,
                ]
            ];

            $mail->setFrom('noreply.samadhangramin@gmail.com', 'samadhangramin');
            $mail->addAddress('ashudahiya7484@gmail.com', 'Ashwani Dahiya');

            $mail->isHTML(true);
            $mail->Subject = 'Test Email from Laravel using PHPMailer';
            $mail->Body    = '<h3>Hello, this is a test email!</h3>';
            $mail->AltBody = 'Hello, this is a test email!';

            $mail->send();
            echo 'Message has been sent successfully';
        } catch (Exception $e) {
            return "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}

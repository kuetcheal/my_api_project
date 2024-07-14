<?php

namespace App\Service;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class EmailService
{
    private MailerInterface $mailer;

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    public function sendRegistrationEmail(string $toEmail, string $username): void
    {
        $email = (new Email())
        ->from('akuetche55@gmail.com')
        ->to('ngueke0@gmail.com')
        ->subject('Confirmation d\'inscription')
        ->html(sprintf('<p>Bonjour %s,</p>
<p>Merci de vous être inscrit sur notre site !</p>', $username));

        $this->mailer->send($email);
    }
}
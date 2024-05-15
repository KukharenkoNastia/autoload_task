<?php

namespace App\Mail;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class EmailSendler
{
    private $mailer;

    public function __construct() {
        $this->mailer = new PHPMailer(true);
    }

    public function send($to, $subject, $message) {
        try {
            // Настройка параметров для отправки через SMTP сервер
            $this->mailer->isSMTP();
            $this->mailer->Host = 'smtp.gmail.com'; // Укажите адрес вашего SMTP сервера
            $this->mailer->SMTPAuth = true;
            $this->mailer->Username = 'khr.nastasia@gmail.com'; // Укажите имя пользователя для SMTP сервера
            $this->mailer->Password = 'fqsm wfnt thaf cnyc'; // Укажите пароль для SMTP сервера
            $this->mailer->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $this->mailer->Port = 587;

            // Указываем адреса отправителя и получателя
            $this->mailer->setFrom('khr.nastasia@gmail.com', 'Nastya');
            $this->mailer->addAddress($to);

            // Указываем тему и текст сообщения
            $this->mailer->Subject = $subject;
            $this->mailer->Body = $message;

            // Отправляем письмо
            $this->mailer->send();
            echo "Send";
            return true;
        } catch (Exception $e) {
            // Обработка ошибок отправки письма
            echo "Message could not be sent. Mailer Error: {$this->mailer->ErrorInfo}";
            return false;
        }
    }

    public function helloMail($email){
        $subject = "Приветственное письмо";
        $message = "Мы рады Вас приветствовать в этом сообщении";
        $this->send($email, $subject, $message);
    }

    public function notificationMail($email){
        $subject = "Напоминалка";
        $message = "Мы рады Вам напомнить, что вы завтра записаны на консультацию";
        $this->send($email, $subject, $message);
    }
}
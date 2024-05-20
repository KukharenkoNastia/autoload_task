<?php

namespace App\Mail;

use InvalidArgumentException;

class EmailSendler
{
    public function send($to, $flag = 'simple'): bool
    {
        try {
            switch ($flag) {
                case 'hello' :
                    $subject = "Приветственное письмо";
                    $message = "Мы рады Вас приветствовать в этом сообщении";
                    break;
                case('notification') :
                    $subject = "Напоминалка";
                    $message = "Мы рады Вам напомнить, что вы завтра записаны на консультацию";
                    break;
                case('simple') :
                    $subject = "Простое письмо";
                    $message = "Вы про нас забыли.";
                    break;
                default:
                    throw new InvalidArgumentException('Используется несуществующий флаг');
            }
            $headers = 'From: nastya@example.com' . "\r\n" .
                'Reply-To: nastya@example.com' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();
            mail($to, $subject, $message, $headers);
            echo 'Письмо успешно отправлено!';
            return true;
        } catch (InvalidArgumentException $e) {
            echo 'Ошибка при отправке письма: '.$e->getMessage();
            return false;
        }
    }

}
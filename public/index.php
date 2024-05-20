<?php
require __DIR__ . './../vendor/autoload.php';

use App\Mail\EmailSendler;
use DockerTask\Classes\Bird;
use DockerTask\Classes\Cat;
use DockerTask\Classes\Dog;

use DockerTask\Classes\Logger;

$animals = [new Dog(), new Cat(), new Bird()];

foreach ($animals as $animal) {
    echo $animal->eat();
    echo '<br>';
    echo $animal->sleep();
    echo '<br>';
    echo $animal->makeSound();
    echo '<br>';
}

$logger = new Logger('file', 'app.log');
//$logger->log('info', 'This is an informational message');
//$logger->log('warning', 'This is a warning message');
//$logger->log('error', 'This is an error message');
//$logger->log('debug', 'This is a debug message');

$mail = new EmailSendler();

$mail->send('khr.nastasia@gmail.com', 'hello');
$mail->send('khr.nastasia@gmail.com', 'mlkml');
$mail->send('khr.nastasia@gmail.com');
//$mail->helloMail('khr.nastasia@gmail.com');
//$mail->notificationMail('khr.nastasia@gmail.com');
?>
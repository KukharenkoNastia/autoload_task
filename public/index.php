<?php
require __DIR__ . './../vendor/autoload.php';

//use DockerTask\Dog;
//use DockerTask\Cat;
//use DockerTask\Bird;
//use DockerTask\Logger;
use App\Mail\EmailSendler;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php

$mail = new EmailSendler();

//$mail->send('khr.nastasia@gmail.com', 'Проверка', 'Hello world');
//$mail->helloMail('khr.nastasia@gmail.com');
$mail->notificationMail('khr.nastasia@gmail.com');
?>
</body>
</html>
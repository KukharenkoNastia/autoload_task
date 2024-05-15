<?php
require __DIR__ . './../vendor/autoload.php';

use DockerTask\Dog;
use DockerTask\Cat;
use DockerTask\Bird;
use DockerTask\Logger;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
echo "Hello World pro";
echo "mistake";

$dogBob = new Dog();

$birdKesha = new Bird();

echo '<br>';
$dogBob->eat();
echo '<br>';
$dogBob->makeSound();
echo '<br>';
$dogBob->sleep();
echo '<br>';
$catTom = new Cat();
$catTom->sleep();
echo '<br>';
$catTom->makeSound();
echo '<br>';
$catTom->eat();
echo '<br>';
$birdKesha->eat();
echo '<br>';
$birdKesha->makeSound();
echo '<br>';
$birdKesha->sleep();

$logger = new Logger('app.log');
$logger->log('info', 'This is an informational message');
$logger->log('warning', 'This is a warning message');
$logger->log('error', 'This is an error message');
$logger->log('debug', 'This is a debug message');
$logger->log('info', 'This is an informational message');
$logger->log('warning', 'This is a warning message');
$logger->log('error', 'This is an error message');
$logger->log('debug', 'This is a debug message');
?>
</body>
</html>
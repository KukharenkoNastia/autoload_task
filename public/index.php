<?php
require __DIR__ . './../vendor/autoload.php';

use DockerTask\Dog;
use DockerTask\Cat;
use DockerTask\Bird;

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

$dogBob = new Dog();
$catTom = new Cat();
$birdKesha = new Bird();

echo '<br>';
$dogBob->eat();
echo '<br>';
$dogBob->makeSound();
echo '<br>';
$dogBob->sleep();
echo '<br>';
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

?>
</body>
</html>
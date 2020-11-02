<?php



require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../vendor/ehime/hello-world/src/HelloWorld/SayHello.php';
$hello = new \App\wcs\Hello();
echo $hello->says();
echo "<pre>";
$say_hello = new \HelloWorld\SayHello();
echo $say_hello->world();
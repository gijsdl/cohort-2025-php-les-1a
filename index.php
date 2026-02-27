<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
//les 1
//$firstVarible = "mijn eerste variabele";
//$number = 122 + 12;
//
//$bool = true;
//echo "<h1>Hello World</h1>";
//echo "<p>$firstVarible</p>";
//echo "<p>$number</p>";
//var_dump($firstVarible);
//var_dump($number);
//var_dump($bool);

//les 2
$a = 7;
$b = 3;

echo $a % $b . "<br>";

$number = 70;

echo $number % 2 . "<br>";

$a++;

echo $a . "<br>";

$a--;

echo $a . "<br>";

$a += 7;

echo $a . "<br>";

$text = "Hello ";
$text .= "World <br>";
//$text = $text . "World";
echo $text;

//var_dump($a !== $b);

$x = 1;
$y = 2;
$z = 1;

var_dump(!($x > $y || $x === $z));

?>
</body>
</html>


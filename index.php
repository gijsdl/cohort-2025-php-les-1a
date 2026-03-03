<?php
//Les project connecting DB
    include "db.php";
    global $db;
    $query = $db->prepare("SELECT * FROM posts");
    $query->execute();
    $posts = $query->fetchAll(PDO::FETCH_ASSOC);
    echo "<pre>";
    var_dump($posts);
    echo "</pre>";
?>
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
//$a = 7;
//$b = 3;
//
//echo $a % $b . "<br>";
//
//$number = 70;
//
//echo $number % 2 . "<br>";
//
//$a++;
//
//echo $a . "<br>";
//
//$a--;
//
//echo $a . "<br>";
//
//$a += 7;
//
//echo $a . "<br>";
//
//$text = "Hello ";
//$text .= "World <br>";
////$text = $text . "World";
//echo $text;
//
////var_dump($a !== $b);
//
//$x = 1;
//$y = 2;
//$z = 1;
//
//var_dump(!($x > $y || $x === $z));

//les 3

$code = 1;

//if ($code === 1){
//    echo "code is 1";
//} elseif ($code === 2){
//    echo "code is 2";
//}elseif ($code === 3){
//    echo "code is 3";
//}elseif ($code === 4){
//    echo "code is 4";
//}elseif ($code === 5){
//    echo "code is 5";
//}else {
//echo "code niet gevonden";
//}

switch ($code){
    case 1:
        echo "code is 1";
        break;
    case 2:
        echo "code is 2";
        break;
    case 3:
        echo "code is 3";
        break;
    case 4:
        echo "code is 4";
        break;
    case 5:
        echo "code is 5";
        break;
    default:
        echo "code niet gevonden";
        break;
}

$isCorrect = false;

//if ($isCorrect){
//    echo "correct";
//} else{
//    echo "niet correct";
//}

echo $isCorrect ? "correct" : "niet correct";
echo "<br>";
$date = date('d-m-Y H:i:s');
var_dump($date);


$isAuth = true;
$age = 17;
$isAdmin = true;

if ($isAuth && $age >=18 || $isAdmin){
    echo "true";
}



?>
</body>
</html>


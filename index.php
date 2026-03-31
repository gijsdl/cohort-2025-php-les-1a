<?php
//Les project connecting DB
include "db.php";
global $db;
$query = $db->prepare("SELECT * FROM posts");
$query->execute();
$posts = $query->fetchAll(PDO::FETCH_ASSOC);
//echo "<pre>";
//var_dump($posts);
//echo "</pre>";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
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

//$code = 1;

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

//switch ($code){
//    case 1:
//        echo "code is 1";
//        break;
//    case 2:
//        echo "code is 2";
//        break;
//    case 3:
//        echo "code is 3";
//        break;
//    case 4:
//        echo "code is 4";
//        break;
//    case 5:
//        echo "code is 5";
//        break;
//    default:
//        echo "code niet gevonden";
//        break;
//}
//
//$isCorrect = false;

//if ($isCorrect){
//    echo "correct";
//} else{
//    echo "niet correct";
//}

//echo $isCorrect ? "correct" : "niet correct";
//echo "<br>";
//$date = date('d-m-Y H:i:s');
//var_dump($date);
//
//
//$isAuth = true;
//$age = 17;
//$isAdmin = true;
//
//if ($isAuth && $age >=18 || $isAdmin){
//    echo "true";
//}

//les 5: loops

//$totalYears = 5;
//
//
//echo "<select name='year' id='year'>";
//
//for ($date = date('Y'); $date < date('Y') + $totalYears; $date++) {
//    if ($date === 2027){
//        continue;
//    }
//    echo "<option value='$date'>$date</option>";
//}
//echo "</select>";
//
//$number = 25;
//$rand = rand(1, 100);
//$attempts = 1;
//
//while ($number !== $rand){
//    $rand = rand(1, 100);
//    $attempts++;
//}
//echo $attempts;

// les 6: arrays
//$shopping = ['melk', 'brood', 'kaneelbroodje', 'ei', 'speculaas', 'appelmoes', 'kattenvoer', '24 rollen wc papier'];
//$shopping[] = "tandenborstel";
//
//echo "<ul>";
//for ($i = 0; $i < count($shopping); $i++) {
//    echo "<li>$shopping[$i]</li>";
//}
//echo "</ul>";
//
//
//$users = [
//        [
//                "firstname" => "jorik",
//                "lastname" => "van spek",
//                "age" => 85,
//                "alive" => true
//        ],
//        [
//                "firstname" => "Peters",
//                "lastname" => "Hendriksen",
//                "age" => 21,
//                "alive" => false
//        ]
//];
//
//for ($i = 0; $i < count($users); $i++) {
//    echo "Je bent " . $users[$i]['firstname'] . " " . $users[$i]['lastname'] . ". Je bent " . $users[$i]['age'] . " jaar oud en je bent " . ($users[$i]['alive'] ? "levend" : "dood") . "<br>";
//}

?>
<!--<div class="container-fluid">-->
<?php
//project les 2
//for ($i = 0; $i < count($posts); $i++) {
//    echo '
//<div class="row">
//    <div class="col-7">
//        <h2>' . $posts[$i]["user_id"] . '</h2>
//        <p>' . $posts[$i]["content"] . '</p>
//        <p>' . $posts[$i]["created_at"] . '</p>
//    </div>
//</div>
//';
//}


?>
<!--project les 3 -->
<?php foreach ($posts as $post): ?>
    <div class="row">
        <div class="col-7">
            <h2><?= $post["user_id"] ?></h2>
            <p><?= $post["content"] ?></p>
            <p><?= $post["created_at"] ?></p>
        </div>
    </div>
<?php endforeach; ?>
<!--</div>-->

<?php
//les 7
//
//$books = ["Harry Potter", "Dolfje weerwolfje", "Geronimo Stilton", "Leven van een loser", "Lord of the rings"];
//
//rsort($books);
//
//for ($i = 0; $i< count($books); $i++){
//    $book = $books[$i];
//    echo $book . "<br>";
//}
//
//foreach ($books as $book){
//    echo $book . "<br>";
//}


//les 8

//function addNumbers()
//{
//    $a = 10;
//    $b = 2;
//    echo $a + $b;
//}

//$a = 10;
//$b = 2;
//
//function addNumbers()
//{
//    global $a, $b;
//    echo $a + $b;
//}


//function addNumbers($a, $b = 10){
//    return $a + $b;
//}
//$sum = addNumbers(12, 2);
//echo addNumbers(14, $sum) . "<br>";
//echo addNumbers(16) . "<br>";
//
//
//les 10 & 11
//if (isset($_POST['submit'])) {
//    echo $_POST['username'];
//}

?>

<!--<form method="post">-->
<!--    <label for="username">Gebruikersnaam</label>-->
<!--    <input type="text" id="username" name="username"><br>-->
<!--    <label for="password">Wachtwoord</label>-->
<!--    <input type="password" id="password" name="password">-->
<!--    <button type="submit" name="submit">Verzenden</button>-->
<!--</form>-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>
</html>


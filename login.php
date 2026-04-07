<?php
//project les inloggen
session_start();
$errors = [];
if (isset($_POST['submit'])){

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $password = '';

    if (empty($username)){
        $errors['username'] = "Vul een post in";
    }

    if (empty($_POST['password'])){
        $errors['password'] = "Vul je wachtwoord in";
    } else{
        $password = $_POST['password'];
    }

    if (empty($errors)){
        include 'db.php';
        global $db;

        $query = $db->prepare("SELECT * FROM users WHERE username = '$username' AND password = '$password'");
        $query->execute();
        $user = $query->fetch(PDO::FETCH_ASSOC);
        if (empty($user)){
            $errors['login'] = "Je gegevens kloppen niet";
        }else{
            $_SESSION['user'] = $user;
            header("Location: index.php");
            exit;
        }


    }

}

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
<p><?= $errors['login'] ?? '' ?></p>
<form method="post">
    <label for="username">Gebruikersnaam</label>
    <input type="text" name="username" id="username">
    <p><?= $errors['username'] ?? '' ?></p>
    <label for="password">Wachtwoord</label>
    <input type="password" name="password" id="username">
    <p><?= $errors['password'] ?? '' ?></p>
    <button name="submit">Verzenden</button>
</form>
</body>
</html>
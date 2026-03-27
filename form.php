<?php
//les 12
if (isset($_POST['submit'])){
    $errors = [];
    $name =  filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $age = filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT);

    if (empty($name)){
        $errors['name'] = "Vul je naam in";
    }

    if (empty($lastname)){
        $errors['lastname'] = "Vul je achternaam in";
    }

    if (empty($age)){
        $errors['age'] = "Vul je leeftijd in";
    }

    if (empty($errors)){
        header('Location: index.php');
        exit;
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
<form method="post">
    <label for="name">Naam</label>
    <input type="text" name="name" id="name" value="<?= $name ?? '' ?>">
    <p><?= $errors['name'] ?? '' ?></p>
    <label for="lastname">Achternaam</label>
    <input type="text" name="lastname" id="lastname" value="<?= $lastname ?? '' ?>">
    <p><?= $errors['lastname'] ?? '' ?></p>
    <label for="age">Leeftijd</label>
    <input type="number" name="age" id="age" value="<?= $age ?? '' ?>">
    <p><?= $errors['age'] ?? '' ?></p>
    <button name="submit">verzenden</button>
</form>
</body>
</html>
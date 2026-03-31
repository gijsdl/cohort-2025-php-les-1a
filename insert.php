<?php
//proj les insert
$errors = [];
if (isset($_POST['submit'])){

    $post = filter_input(INPUT_POST, 'post', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if (empty($post)){
        $errors['post'] = "Vul een post in";
    }

    if (empty($errors)){
        include "db.php";
        global $db;
        $query = $db->prepare("INSERT INTO posts (content, user_id) VALUES ('$post', 1)");
        $query->execute();
        header("Location: index.php");
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
    <label for="post">Post</label>
    <textarea name="post" id="post"></textarea>
    <p><?= $errors['post'] ?? '' ?></p>
    <button name="submit">Verzenden</button>
</form>
</body>
</html>
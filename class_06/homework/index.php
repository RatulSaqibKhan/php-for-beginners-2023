<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Class 06 - Homework</title>
</head>
<body>
    <h1>Top Performing Usernames</h1>
    <?php
        $usernames = ['codeWithMosh', 'jefferyWay', 'taylorOttwell'];
    ?>
    <ul>
        <?php foreach ($usernames as $username) : ?>
            <li><?= $username ?></li>
        <?php endforeach ?>
    </ul>
</body>
</html>
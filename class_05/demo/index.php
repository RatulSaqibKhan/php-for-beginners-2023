<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Conditionals and Booleans</title>

    <style>
        body {
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>
<body>

    <?php
        error_reporting(E_WARNING);
        $name = "Dark Matter";

        $readStatus = false;

        if ($readStatus) {
            $message = "You have read \"$name\"";
        } else {
            $message = "You haven't read \"$name\"";
        }
    ?>
    <h1>
        <?= $message ?>
    </h1>
</body>
</html>
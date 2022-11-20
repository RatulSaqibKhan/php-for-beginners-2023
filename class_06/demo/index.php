<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Arrays</title>
</head>
<body>
    <h1>Recommended Books</h1>

    <?php
        $books = [
            'Docker Up and Running',
            'PHP 7 Data Structures',
            'Pragmatic Programmers',
        ];
    ?>
    <ul>
        <?php
        /* Normal foreach loop
            foreach ($books as $book) {
                echo "<li>$book</li>";
            }
        */
        ?>

        <?php // Shorthand foreach loop ?>
        <?php foreach ($books as $book) : ?>
            <li><?= $book ?></li>
        <?php endforeach ?>
    </ul>
</body>
</html>
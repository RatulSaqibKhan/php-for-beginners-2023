<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Class 07 - Homework</title>
</head>
<body>
    <h1>Associative Arrays</h1>

    <?php
        $books = [
            [
                'name' => "API Design Patterns",
                'author' => "JJ Geewax",
                'purchaseUrl' => 'http://example.com',
                'releaseYear' => 2002,
            ],
            [
                'name' => "Computer Science Distilled",
                'author' => "WLADSTON FERREIRA FILHO",
                'purchaseUrl' => 'http://example.com',
                'releaseYear' => 2004,
            ],
            [
                'name' => "The Clean Coder",
                'author' => "Robert C. Martin",
                'purchaseUrl' => 'http://example.com',
                'releaseYear' => 2011,
            ]
        ];
    ?>

    <ul>
        <?php foreach ($books as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>"><?= $book['name'] ?>&nbsp;[<?= $book['releaseYear'] ?>]</a>
            </li>
        <?php endforeach ?>

    </ul>
</body>
</html>
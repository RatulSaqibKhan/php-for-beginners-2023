<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Associative Arrays</title>
</head>
<body>
    <h1>Associative Arrays</h1>

    <?php
        $books = [
            [
                'name' => "API Design Patterns",
                'author' => "JJ Geewax",
                'purchaseUrl' => 'http://example.com'
            ],
            [
                'name' => "Computer Science Distilled",
                'author' => "WLADSTON FERREIRA FILHO",
                'purchaseUrl' => 'http://example.com'
            ],
            [
                'name' => "The Clean Coder",
                'author' => "Robert C. Martin",
                'purchaseUrl' => 'http://example.com'
            ]
        ];
    ?>

    <ul>
        <?php foreach ($books as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>"><?= $book['name'] ?></a>
            </li>
        <?php endforeach ?>

    </ul>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Class 09 - Homework</title>
</head>
<body>
    <h1>Class 09 - Homework</h1>

    <?php
        $books = [
            [
                'name' => "API Design Patterns",
                'author' => "JJ Geewax",
                'purchaseUrl' => 'http://example.com',
                'releaseYear' => 2002,
            ],
            [
                'name' => "Clean Code",
                'author' => "Robert C. Martin",
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

        /**
         * Using PHP array_filter function
         */
        $filteredBooks = array_filter($books, function ($book) {
            return $book['releaseYear'] >= 2003 && $book['releaseYear'] <= 2020;
        });
    ?>

    <ul>
        <?php foreach ($filteredBooks as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                <?= $book['name'] ?>
                &nbsp;(<?= $book['releaseYear'] ?>)
                &nbsp;- By <?= $book['author'] ?>
            </a>
            </li>
        <?php endforeach ?>

    </ul>
</body>
</html>
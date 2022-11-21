<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Functions and Filters</title>
</head>
<body>
    <h1>Functions and Filters</h1>

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

        function filterByAuthor(array $books, string $author)
        {
            $filteredBooks = [];

            foreach ($books as $book) {
                if ($book['author'] === $author) {
                    $filteredBooks[] = $book;
                }
            }

            return $filteredBooks;
        }
    ?>

    <ul>
        <?php foreach (filterByAuthor($books, 'JJ Geewax') as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>"><?= $book['name'] ?>&nbsp;- By <?= $book['author'] ?></a>
            </li>
        <?php endforeach ?>

    </ul>
</body>
</html>
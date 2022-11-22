<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lambda Function</title>
</head>
<body>
    <h1>Lambda Function</h1>

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

        /*
         ** named function: A function with a name
         **
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
        */

        /*
        ** anonymous or lambda function
        **
        $filterByAuthor = function (array $books, string $author)
        {
            $filteredBooks = [];

            foreach ($books as $book) {
                if ($book['author'] === $author) {
                    $filteredBooks[] = $book;
                }
            }

            return $filteredBooks;
        };
        
        $filteredBooks = $filterByAuthor($books, 'JJ Geewax');
        */

        /*
        ** First refactor
        **
        function filter($items, $key, $value)
        {
            $filteredItems = [];

            foreach ($items as $item) {
                if ($item[$key] === $value) {
                    $filteredItems[] = $item;
                }
            }

            return $filteredItems;
        }

        $filteredBooks = filter($books, 'author', 'JJ Geewax');
        */

        /*
        ** Second refactor
        **
        function filter($items, $fn)
        {
            $filteredItems = [];

            foreach ($items as $item) {
                if ($fn($item)) {
                    $filteredItems[] = $item;
                }
            }

            return $filteredItems;
        }

        $filteredBooks = filter($books, function ($book) {
            return $book['author'] === 'JJ Geewax';
        });
        */

        /**
         * Using PHP array_filter function
         */
        $filteredBooks = array_filter($books, function ($book) {
            return $book['author'] === 'Robert C. Martin';
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
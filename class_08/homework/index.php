<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Class 08 - Homework</title>
</head>
<body>
    <h1>Class 08 - Homework</h1>

    <?php
        $movies = [
            [
                'name' => 'Robocop 2',
                'releaseDate' => 'June 22, 1990',
            ],
            [
                'name' => 'Underworld: Awakening',
                'releaseDate' => 'January 19, 2012',
            ],
            [
                'name' => 'Die Hard 2: Die Harder',
                'releaseDate' => 'July 2, 1990',
            ],
            [
                'name' => 'Terminator 2',
                'releaseDate' => 'July 31, 1991',
            ],
            [
                'name' => 'Ice Age',
                'releaseDate' => 'March 10, 2002',
            ],
            [
                'name' => 'Batman Beyond: Return Of The Joker',
                'releaseDate' => 'December 12, 2000',
            ],
        ];

        function filterByYear(array $movies, int $year)
        {
            $filteredMovies = [];
            
            foreach ($movies as $movie) {
                if ((int)date('Y', strtotime($movie['releaseDate'])) >= $year) {
                    $filteredMovies[] = $movie;
                }
            }

            return $filteredMovies;
        }
    ?>

    <ul>
        <?php foreach (filterByYear($movies, 2001) as $movie) : ?>
            <li><?= $movie['name'] ?>&nbsp;[<?= $movie['releaseDate'] ?>]</li>
        <?php endforeach ?>
    </ul>

</body>
</html>
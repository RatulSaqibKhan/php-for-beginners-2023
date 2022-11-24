<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Class 10 - Separate Logic From the Template</title>
</head>

<body>
    <h1>Class 10 - Separate Logic From the Template</h1>

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
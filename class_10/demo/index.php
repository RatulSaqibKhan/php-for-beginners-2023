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
    return $book['author'] === 'Robert C. Martin';
});

require "./index.view.php";
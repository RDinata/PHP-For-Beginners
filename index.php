<!DOCTYPE html>
<html lang="en">

<head>
    <title>Demo</title>
</head>

<body>
    <h1>Recommended Books</h1>
    <?php
    $books = [
        [
            'name' => 'Do Androids Dream of Electric Sheep',
            'author' => 'Philip K. Dick',
            'releaseYear' => 1968,
            'purchaseURL' => 'http://example.com'
        ],
        [
            'name' => 'The Langoliers',
            'author' => 'Stephen King',
            'releaseYear' => 1990,
            'purchaseURL' => 'http://example.com'
        ],
        [
            'name' => 'Project Hail Mary',
            'author' => 'Andy Weir',
            'releaseYear' => 2021,
            'purchaseURL' => 'http://example.com'
        ],
        [
            'name' => 'The Martian',
            'author' => 'Andy Weir',
            'releaseYear' => 2011,
            'purchaseURL' => 'http://example.com'
        ]
    ];

    // function filter($items, $fn)
    // {
    //     $filteredItems = [];

    //     foreach ($items as $item) {
    //         if ($fn($item)) {
    //             $filteredItems[] = $item;
    //         }
    //     }
    //     return $filteredItems;
    // };

    // get rid filter function with array_filter

    $filteredBooks = array_filter($books, function ($book) { 
        return $book['releaseYear'] < 2000;
    });
    ?>

    <ul>
        <?php foreach ($filteredBooks as $item) : ?>
            <li>
                <a href="<?= $item['purchaseURL'] ?>">
                    <?= $item['name'] ?> (<?= $item['releaseYear'] ?>)
                    - By <?= $item['author'] ?>
                </a>
            </li>
        <?php endforeach ?>
    </ul>
</body>

</html>

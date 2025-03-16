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
            'purchaseURL' => 'http://example.com'
        ],
        [
            'name' => 'The Langoliers',
            'author' => 'Stephen King',
            'purchaseURL' => 'http://example.com'
        ],
        [
            'name' => 'Project Hail Mary',
            'author' => 'Andy Weir',
            'purchaseURL' => 'http://example.com'
        ]
    ];
    ?>

    <ul>
        <?php foreach ($books as $book) : ?>
            <li>
                <a href="<?= $book['purchaseURL'] ?>">
                    <?= $book['name'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>
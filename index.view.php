<!DOCTYPE html>
<html lang="en">

<head>
    <title>Demo</title>
</head>

<body>
    <h1>Recommended Books</h1>
    

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

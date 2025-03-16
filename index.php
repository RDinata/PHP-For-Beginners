<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
</head>

<body>
    <?php
    $name = 'Dark Matter';
    $read = false;
    $message = $read ? "You have read $name" : "You haven't read $name";
    ?>

    <h1><?= $message ?></h1>
</body>

</html>
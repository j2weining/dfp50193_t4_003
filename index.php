<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image</title>
</head>

<body>
    <?php
    $dir = "gambar";

    // Sort in ascending order - this is default
    $a = scandir($dir);
    foreach ($a as $img) {
        if (!($img == '.' or $img == '..')) {
            echo "<a href='gambar/$img'>$img</a><br>";
        }
    }
    ?>
</body>

</html>
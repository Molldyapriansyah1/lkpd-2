<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // This php code will output the table of multiplication from 10 to 1
    for ($i = 10; $i >= 1; $i--) { 
        // This line will output the multiplication of $i with 1 and 2
        echo $i . " x 1 = " . ($i * 1) .  '<br>';}
        for ($i = 10; $i >= 1; $i--) {
        echo $i . " x 2 = " . ($i * 2) . '<br>';
    }
    ?>
</body>
</html>


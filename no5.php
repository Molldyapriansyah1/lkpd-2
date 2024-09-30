<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // array bill1 dan array bill2
    $bill1 = [80, 77, 65, 89, 55, 12, 90, 86];
    $bill2 = [77, 99, 55, 81, 45, 90, 91, 98];

    // mengambil angka yang sama dalam kedua array
    $common_numbers = array_intersect($bill1, $bill2);
    // mengambil angka yang berbeda dalam kedua array
    $different_numbers = array_diff($bill2, $bill1);

    // mencetak hasil
    echo"bilangan yang sama dalam kedua array adalah: ". implode(", ", $common_numbers);
    echo"<br><br>bilangan yang tidak sama dalam kedua array adalah: ". implode(", ", $different_numbers);
    ?>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    // Loop through numbers from 1 to 50
    for ($i = 1; $i <= 50; $i++) { 
        // Check if the number is odd
        if ($i % 2 == 1) {
            // If the number is odd, print the multiplication of the number by 5
            echo $i . " x 5 = " . ($i * 5) . '<br>';
        }    
    }
    
    ?>
</body>
</html>

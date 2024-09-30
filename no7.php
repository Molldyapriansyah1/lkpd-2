<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Name Character Difference</title>
</head>
<body>
    <form method="post" action="">
        <label for="name1">Name 1:</label>
        <input type="text" id="name1" name="name1" required><br><br>

        <label for="name2">Name 2:</label>
        <input type="text" id="name2" name="name2" required><br><br>

        <input type="submit" value="Compare">
    </form>

    <?php
    // check if post is set
    if (isset($_POST['name1']) && isset($_POST['name2'])) {
        $name1 = $_POST['name1'];
        $name2 = $_POST['name2'];
        
        // calculate the difference in character length
        $hail = strlen($name1) - strlen($name2);
        
        //check what name has more character and print the result
        if (strlen($name1) > strlen($name2)) {
            echo $name1 . " memiliki karakter lebih banyak dari " . $name2 . " : dengan selisih " . $hail . " karakter";
        } elseif (strlen($name1) < strlen($name2)) {
            echo $name2 . " memiliki karakter lebih banyak dari " . $name1 . " : dengan selisih " .  abs($hail) . " karakter";
        } else {
            echo $name1 . " dan " . $name2 . " memiliki karakter yang sama";
        }
    }
     
    ?>
</body>
</html>
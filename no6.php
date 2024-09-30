<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
// $student is an array of students with their names and grades
$student = [
        [
            'nama' => 'Andi',
            'nilai' => [80, 78, 82, 78, 88]
        ],
        [
            'nama' => 'Boni',
            'nilai' => [86, 70, 80, 85, 81]
        ],
        [
            'nama' => 'Dani',
            'nilai' => [83, 91, 70, 73, 81]
        ],        
        [
            'nama' => 'Eko',
            'nilai' => [89, 85, 84, 86, 88]
        ],
    ];

// loop through the $student array
foreach ($student as $key => $value) {
    // calculate the total grade of a student
    $total = array_sum($value['nilai']);
    // calculate the average grade of a student
    $rata = $total / count($value['nilai']);
    // print the average grade of a student
    echo "Nilai rata-rata " . $value['nama'] . " adalah " . $rata . "<br>";
}
?>
</body>
</html>

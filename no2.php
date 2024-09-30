<h1>Form Lembur</h1>
<form action="" method="post">
    <input type="number" name="jamkerja"><br>
    <input type="submit" name="submit" value="Submit">
    <input type="reset" name="reset" value="Reset">
</form>

<?php
// jika user mengirimkan form lembur
if(isset($_POST['submit'])) {

    // maka ambil nilai jam kerja dari form
    $jam = $_POST['jamkerja'];

    // uang lembur per 1 jam
    $uanglembur = 50000;

    // jika jam kerja kurang dari atau sama dengan 8 jam
    if ($jam <= 8) {
        echo "Anda tidak lembur, Jam kerja = $jam";
    } else if ($jam >= 8) {
        
        // maka hitung uang lembur lanjutan
        $uanglemburlanjutan = ($jam - 9) * 25000;
        
        // hitung total uang lembur
        $total = $uanglembur + $uanglemburlanjutan;
        
        // hitung total jam lembur
        $totaljamlembur = $jam-8;
        echo "Anda lembur, Jam kerja = $jam, <br> Uang lembur = $total <br>";
        echo "Anda bekerja = $totaljamlembur , lebih";
    }
}

?>


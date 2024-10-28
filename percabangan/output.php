<?php
// Mendefinisikan nilai kelulusan
$nilai_lulus =(400) / 5;


// Menghitung rata-rata nilai
$predikat = 'A';
$predikat1 = 'B';

// Menentukan kelulusan
echo
"
<h1>Kelulusan Nilai</h1>
";
if ($nilai_lulus >= $predikat) {
    echo "Selamat, Anda lulus dengan rata-rata nilai: $nilai_lulus<br>";
    echo "predikat anda : $predikat1";
} else {
    echo "Maaf, Anda tidak lulus. Rata-rata nilai Anda: $nilai_lulus";
}
?>

<p>
   <a href="index.php">
   <button>Kembali ke Index</button>
</a><br><br>
<a href="input.php">
   <button>Kembali ke Input</Input></button>
</a>
</p>

<p>atau kembali ke : </p>
<a href="../">
     <button>Folder Awal</button>
</a>
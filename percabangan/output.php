<?php
// Mendefinisikan nilai kelulusan
$nilai_lulus = 60;

// Mengambil input dari pengguna 
$nilai = 90;
$nilai = 80; 
$nilai = 70; 
$nilai = 60;
$nilai = 50;

// Menghitung rata-rata nilai
$rata_rata = (450) / 5;

// Menentukan kelulusan
echo
"
<h1>Kelulusan Nilai</h1>
";
if ($rata_rata >= $nilai_lulus) {
    echo "Selamat, Anda lulus dengan rata-rata nilai: $rata_rata<br>";
    echo "Predikat anda: A";
} else {
    echo "Maaf, Anda tidak lulus. Rata-rata nilai Anda: $rata_rata";
}
?>

<p>
   <a href="index.php">
   <button>Kembali ke Index</button>
</a>
</p>

<p>atau kembali ke : </p>
<a href="../">
     <button>Folder Awal</button>
</a>
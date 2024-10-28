<?php
// Mendapatkan nilai dari form
$nilai = $_POST['nilai'];
$predikat = "";

// Menentukan predikat berdasarkan nilai
if ($nilai >= 90) {
    $predikat = "A";
} elseif ($nilai >= 80) {
    $predikat = "B";
} elseif ($nilai >= 70) {
    $predikat = "C";
} elseif ($nilai >= 60) {
    $predikat = "D";
} else {
    $predikat = "Tidak Lulus";
}

// Redirect ke halaman output.php dengan membawa data nilai dan predikat
header("Location: output.php?nilai=$nilai&predikat=$predikat");
exit();
?>
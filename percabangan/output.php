<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Kelulusan</title>
</head>
<body>
    <h2>Hasil Kelulusan</h2>

    <?php
    // Mendapatkan nilai dan predikat dari URL
    $nilai = $_GET['nilai'];
    $predikat = $_GET['predikat'];

    echo "<p>Nilai Anda: $nilai</p>";
    if ($predikat == "Tidak Lulus") {
        echo "<p>Maaf, Anda tidak lulus.</p>";
    } else {
        echo "<p>Anda lulus dengan predikat: $predikat.</p>";
    }
    ?>
    
    <p>
      <a href="index.php">
            <button>kembali ke Index</button>
      </a><br>
</p><a href="input.php">
            <button>kembali ke Input</button>
      </a>

<p>atau kembali ke : 
<a href="../">
      <button>Folder Awal</button>
</a>
</p>
</body>
</html>
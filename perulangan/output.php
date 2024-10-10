<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>hasil perulangan</title>
</head>
<body>
<h1> Hasil Perulangan Saya Lulus sebanyak <?php echo $_POST['jumlah'];?> kali</h1>

</body>
</html>
<?php

$jumlah = $_POST['jumlah'];

// Perulangan untuk menampilkan "Saya Lulus"
for ($i = 1; $i <= $jumlah; $i++) {
      echo "Saya Lulus " . $i . "<br>";
}
?>

<p>
      <a href="index.php">
            <button>kembali ke Index</button>
      </a>
</p>

<p>atau kembali ke : 
<a href="../">
      <button>Folder Awal</button>
</a>
</p>
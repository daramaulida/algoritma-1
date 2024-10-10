<!DOCTYPE html>

<html>

<head>
</head>

<body>
    <h1>Selamat datang di Program Project Perulangan Notasi Algoritma </h1>
    <table>
    <th>
    <td>
        <tr>Anda Login Sebagai : Dara Maulida</tr>
    </td>
    </th>
</table>


    <form action="output.php" method="post">
        <h4> Project Perulangan dengan Model Jumlah Select customisasi</h4>
<html>

<head>
    <title>Perulangan</title>
</head>

<body>
    <form method="POST" action="output.php">
        <label for="jumlah">Pilih berapa kali akan diulang:</label><br><br>
        <select id="jumlah" name="jumlah" min="1" required>
            <!-- Loop jumlah 1 sampai 100 -->
            <!-- Kamu juga bisa menggunakan script untuk mengisi jumlah secara otomatis -->
            <option value=""> --- Pilih Jumlah ---</option>
            <!-- Pilihan jumlah dari 1 hingga 100 -->
            <script>
                for (let i = 1; i <= 100; i++) {
                    document.write('<option value="' + i + '">' + i + '</option>');
                }
            </script>
        </select>
        <input type="submit" value="Proses ->">
    </form>


</body>

</html>
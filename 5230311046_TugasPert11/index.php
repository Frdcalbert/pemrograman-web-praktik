<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Mahasiswa</title>
</head>
<body>
    <?php
    include 'koneksi.php';    
    $hasil = mysqli_query($con, "SELECT * FROM tb_mahasiswa");
    echo "<h1>Data Mahasiswa</h1>";
    
    // Tampilkan data dalam tabel
    echo "<table>";
    echo "<tr><th>ID</th><th>Nama</th><th>Prodi</th><th>Semester</th><th>Aksi</th></tr>";
    while ($data = mysqli_fetch_array($hasil)) {
        echo "<tr>";
        echo "<td>" . $data['id_mhs'] . "</td>"; // Pastikan Anda memiliki kolom id_mhs di tabel Anda
        echo "<td>" . $data['nama_mhs'] . "</td>";
        echo "<td>" . $data['prodi_mhs'] . "</td>"; // Menggunakan nama kolom yang eksplisit
        echo "<td>" . $data['semester_mhs'] . "</td>"; // Menggunakan nama kolom yang eksplisit
        echo "<td class='action-links'>";
        echo "<a href='edit.php?id=" . $data['id_mhs'] . "' class='edit'>Edit</a>";
        echo "<a href='delete.php?id=" . $data['id_mhs'] . "' class='delete' onclick=\"return confirm('Apakah Anda yakin ingin menghapus data ini?');\">Delete</a>";
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>

    <h2>Tambah Data Mahasiswa</h2>
    <form action="tambah.php" method="POST">
        <label for="nama">Nama Mahasiswa:</label><br>
        <input type="text" id="nama_mahasiswa" name="nama_mhs" required>
        <br>
        <label for="jurusan">Prodi:</label><br>
        <input type="text" id="prodi_mahasiswa" name="prodi_mhs" required>
        <br>
        <label for="semester">Semester:</label><br>
        <input type="number" id="semester_mahasiswa" name="semester_mhs" required>
        <br>
        <input type="submit" value="Tambah">
        <input type="reset" value="Reset">
    </form>

    <h2>Cari Data Mahasiswa</h2>
    <form action="cari.php"method="post">
        <label for="nama">Nama Mahasiswa</label><br>
        <input type="text" id="nama_mahasiswa" name="nama_mhs" required><br>   
        <input type="submit" value="Cari Data">
        <input type="reset" value="Reset">
    </form>

</body>
</html>
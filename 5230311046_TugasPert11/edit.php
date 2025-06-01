<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Edit Data Mahasiswa</h1>

    <?php
    include 'koneksi.php';

    // Pastikan ada parameter ID di URL
    if (isset($_GET['id'])) {
        $id_mhs = $_GET['id'];

        // Ambil data mahasiswa berdasarkan ID
        $query = "SELECT * FROM tb_mahasiswa WHERE id_mhs = '$id_mhs'";
        $result = mysqli_query($con, $query);

        if (mysqli_num_rows($result) > 0) {
            $data = mysqli_fetch_array($result);
            ?>
            <form action="update.php" method="POST">
                <input type="hidden" name="id_mhs" value="<?php echo $data['id_mhs']; ?>">

                <label for="nama">Nama Mahasiswa:</label><br>
                <input type="text" id="nama_mahasiswa" name="nama_mhs" value="<?php echo $data['nama_mhs']; ?>" required>
                <br>
                <label for="prodi">Prodi:</label><br>
                <input type="text" id="prodi_mahasiswa" name="prodi_mhs" value="<?php echo $data['prodi_mhs']; ?>" required>
                <br>
                <label for="semester">Semester:</label><br>
                <input type="number" id="semester_mahasiswa" name="semester_mhs" value="<?php echo $data['semester_mhs']; ?>" required>
                <br>
                <input type="submit" value="Update Data">
                <input type="reset" value="Reset">
                <a href="index.php">Kembali</a>
            </form>
            <?php
        } else {
            echo "Data mahasiswa tidak ditemukan.";
        }
    } else {
        echo "ID mahasiswa tidak disertakan.";
    }
    ?>
</body>
</html>
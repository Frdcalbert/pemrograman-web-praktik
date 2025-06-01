<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $id_mhs = $_POST['id_mhs'];
    $nama_mhs = $_POST['nama_mhs'];
    $prodi_mhs = $_POST['prodi_mhs'];
    $semester_mhs = $_POST['semester_mhs'];

    // Query untuk memperbarui data
    $query = "UPDATE tb_mahasiswa SET 
                nama_mhs = '$nama_mhs', 
                prodi_mhs = '$prodi_mhs', 
                semester_mhs = '$semester_mhs' 
              WHERE id_mhs = '$id_mhs'";

    if (mysqli_query($con, $query)) {
        echo "Data mahasiswa berhasil diperbarui. <a href='index.php'>Lihat Data</a>";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($con);
    }

    mysqli_close($con);
} else {
    echo "Akses tidak sah.";
}
?>
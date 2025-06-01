<?php
include 'koneksi.php';

// Pastikan ada parameter ID di URL
if (isset($_GET['id'])) {
    $id_mhs = $_GET['id'];

    // Query untuk menghapus data
    $query = "DELETE FROM tb_mahasiswa WHERE id_mhs = '$id_mhs'";

    if (mysqli_query($con, $query)) {
        echo "Data mahasiswa berhasil dihapus. <a href='index.php'>Kembali ke Daftar Mahasiswa</a>";
        header("Location: index.php"); // Redirect kembali ke index.php
        exit();
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($con);
    }

    mysqli_close($con);
} else {
    echo "ID mahasiswa tidak disertakan.";
}
?>
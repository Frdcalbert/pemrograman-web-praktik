<?php
include 'koneksi.php';
$nama_mahasiswa = $_POST['nama_mhs'];
$prodi_mahasiswa = $_POST['prodi_mhs'];
$semester_mahasiswa = $_POST['semester_mhs'];

$query = "INSERT INTO tb_mahasiswa (nama_mhs, prodi_mhs, semester_mhs) VALUES ('$nama_mahasiswa', '$prodi_mahasiswa', '$semester_mahasiswa')" ;

if (mysqli_query($con, $query)) {
    echo "Data Berhasil Ditambahkan";
} else {
    echo "Error: ", $query, "<br>", mysqli_error($con);
}
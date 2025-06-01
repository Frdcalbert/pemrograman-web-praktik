<?php 
include 'koneksi.php' ;

$nama_mahasiswa = $_POST['nama_mhs'];
$sql = "SELECT * FROM tb_mahasiswa WHERE nama_mhs LIKE '%$nama_mahasiswa'";        
$hasil = mysqli_query($con, $sql);
if (mysqli_num_rows($hasil) > 0) {
    echo "<h1>Hasil Pencarian Mahasiswa</h1>";
    while ($data = mysqli_fetch_array($hasil)) {
        echo "Nama Mahasiswa : " . $data['nama_mhs'] . "<br>";
        echo "Jurusan : " . $data['prodi_mhs'] . "<br>";
        echo "Semester : " . $data['semester_mhs'] . "<br><br>";
    }
} else {
    echo "Tidak Ada Data Yang Ditemukan Untuk Nama : $nama_mahasiswa" ;
} 

echo "<br><a href='index.php'>Kembali Ke Halaman Utama</a>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
</body>
</html>
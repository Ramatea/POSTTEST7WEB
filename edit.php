<?php
require 'koneksi.php';
$id = $_GET['id'];

$result = mysqli_query($conn, "UPDATE mahasiswa WHERE id=$id");



if(isset($_POST['tambah'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $kelas = $_POST['kelas'];
    $prodi = $_POST['prodi'];

    $sql = "INSERT INTO mahasiswa VALUES ('','$nim','$nama', '$kelas', '$prodi')";
    
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo"
            <script>
                alert('Data berhasil');
                document.location.href = 'index.php';
            </script>
        
        ";
    }else {
        echo"
            <script>
                alert('Data gagal ditambah');
                document.location.href = 'tambah.php';
            </script>
        
        ";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <h1>Tambah Data</h1>
    <form action="" method="post">
        <label for="nim">Nim</label>
        <input type="text" name="nim" required>
        <label for="nama">Nama</label>
        <input type="text" name="nama" required>
        <label for="kelas">kelas</label>
        <input type="text" name="kelas" required>
        <label for="prodi">Prodi</label>
        <input type="text" name="prodi" required>
        <button type="submit" name="tambah">Tambah</button>
    </form>
</body>
</html>
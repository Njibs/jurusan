<?php
if(isset($_POST['update'])) {
    $jurusan = $_POST['id'];
    $kapasitas = $_POST['kapasitas'];
    $terisi = $_POST['terisi'];

    include_once "setting.php";
    $sql = "INSERT INTO jurusan SET jurusan='$jurusan', kapasitas='$kapasitas', terisi='$terisi' WHERE id='$id'";
    $result = mysqli_query($koneksi, $sql);
    if($result) {
        header('location: ?m=jurusan&s=tampil');
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
} else {
    echo "Jangan Akses langsung ke file simpan.php";
}

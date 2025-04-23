<?php
if(isset($_POST['simpan'])) {
    $jurusan = $_POST['jurusan'];
    $kapasitas = $_POST['kapasitas'];
    $terisi = $_POST['terisi'];

    include_once "setting.php";
    $sql = "INSERT INTO jurusan SET jurusan='$jurusan', kapasitas='$kapasitas', terisi='$terisi'";
    $result = mysqli_query($koneksi, $sql);
    if($result) {
        header('location: ?m=jurusan&s=tampil');
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
} else {
    echo "Jangan Akses langsung ke file simpan.php";
}

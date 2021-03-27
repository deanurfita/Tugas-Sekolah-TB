<?php
include 'koneksii.php';

if(isset($_GET['kode_produk'])) {
    header('location: tampil.php');
}
$kode_produk = $_GET['panjang_nama'];

$sql = "DELETE FROM contact WHERE panjang_nama='$panjang_nama'";
$query = mysqli_query($connect, $sql);

if($query) {
    header('location: tampil.php');
}else{
    header('location: hapus.php?status=gagal');
}
?>
<?php
include 'koneksii.php';
if(isset($_POST['simpan'])) {
    $panjang_nama = $_POST['panjnag_nama'];
    $email_addres = $_POST['email_addres'];
    $your_comment = $_POST['your_comment'];

    $sql = "UPDATE contact SET panjang_nama='$panjang_nama', email_addres='$email_addres', your_comment='$your_comment'
    WHERE panjang_nama='$panjang_nama'";
    $query = mysqli_query ($connect,$sql);
    if ($query) {
        header('location: tampil.php');
    }else{
        header('location: edit.php?status=gagal');
    }
}
?>
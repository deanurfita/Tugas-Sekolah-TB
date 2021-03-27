<?php

include 'koneksii.php';

if (isset($_POST['simpan'])) {
	$panjang_nama = $_POST['panjang_nama'];
	$email_addres = $_POST['email_addres'];
	$your_comment = $_POST['your_comment'];

$sql = "INSERT INTO contact ( panjang_nama, email_addres, your_comment, ) VALUES ( '$panjang_nama','$email_addres','$your_comment')";
$query = mysqli_query($connect, $sql);
	if ($query) {
	header('Location: tampil.php');
	}else{
	header('Location: simpan.php?status=gagal');
	}
}
?>
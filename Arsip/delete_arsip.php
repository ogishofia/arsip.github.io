<?php
	include "koneksi.php";

	@$id=$_GET['id'];

	$sql = "DELETE FROM arsip_preservasi where id = '$id'";
	$eksekusi = mysqli_query($koneksi, $sql);

	header("location:tampil_data.php");

?>
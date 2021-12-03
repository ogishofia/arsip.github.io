<?php
	include "../koneksi.php";

	@$idarsip=$_GET['idarsip'];

	$sql = "DELETE FROM arsip_statis where idarsip = '$idarsip'";
	$eksekusi = mysqli_query($koneksi, $sql);

	header("location:tampil_data.php");

?>
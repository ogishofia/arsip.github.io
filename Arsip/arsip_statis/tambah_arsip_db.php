<?php  
	include "../koneksi.php";

	$no_arsip = $_POST['no_arsip'];
	$uraian_statis = $_POST['uraian_statis'];
	$tanggal_statis = $_POST['tanggal_statis'];
	$jumlah_statis = $_POST['jumlah_statis'];	
	$jenis_media = $_POST['jenis_media'];
	$metode_tindakan = $_POST['metode_tindakan'];
	$lokasi_simpan = $_POST['lokasi_simpan'];



	$sql = "INSERT INTO arsip_statis VALUES('', $no_arsip, '$uraian_statis', '$tanggal_statis', '$jumlah_statis','$jenis_media','$metode_tindakan', '$lokasi_simpan')";
	$eksekusi = mysqli_query($koneksi, $sql);

	header("location:tampil_data.php");
?>
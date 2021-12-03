<?php  
	include "koneksi.php";

	$nomor_berkas = $_POST['nomor_berkas'];
	$no_item = $_POST['no_item'];
	$uraian_arsip = $_POST['uraian_arsip'];
	$tanggal = $_POST['tanggal'];
	$jumlah = $_POST['jumlah'];	
	$jenis = $_POST['jenis'];
	$tindakan_preservasi = $_POST['tindakan_preservasi'];
	$lokasi_simpan = $_POST['lokasi_simpan'];


	

	$sql = "INSERT INTO arsip_preservasi  VALUES('', $nomor_berkas, '$no_item', '$uraian_arsip', '$tanggal', '$jumlah','$jenis','$tindakan_preservasi', '$lokasi_simpan')";
	mysqli_query($koneksi, $sql);

	header("location:tampil_data.php");
?>
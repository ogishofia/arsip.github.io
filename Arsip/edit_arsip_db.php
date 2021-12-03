<?php  
	include "koneksi.php";
	@$id = $_GET['id'];

	$nomor_berkas = $_POST['nomor_berkas'];
	$no_item = $_POST['no_item'];
	$uraian_arsip = $_POST['uraian_arsip'];
	$tanggal = $_POST['tanggal'];
	$jumlah = $_POST['jumlah'];	
	$jenis = $_POST['jenis'];
	$tindakan_preservasi = $_POST['tindakan_preservasi'];
	$lokasi_simpan = $_POST['lokasi_simpan'];

	

	$sql = "UPDATE arsip SET nomor_berkas = '$nomor_berkas', no_item = '$no_item', uraian_arsip = '$uraian_arsip', tanggal = '$tanggal', jumlah = '$jumlah', jenis = '$jenis', tindakan_preservasi = '$tindakan_preservasi', lokasi_simpan = '$lokasi_simpan' WHERE id = '$id'";
	mysqli_query($koneksi, $sql);
	//echo $sql;
	header("location:tampil_data.php");
?>
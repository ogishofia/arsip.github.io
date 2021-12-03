<?php  
	include "../koneksi.php";
	@$idarsip = $_GET['idarsip'];

	$no_arsip = $_POST['no_arsip'];
	$uraian_statis = $_POST['uraian_statis'];
	$tanggal_statis = $_POST['tanggal_statis'];
	$jumlah_statis = $_POST['jumlah_statis'];	
	$jenis_media = $_POST['jenis_media'];
	$metode_tindakan = $_POST['metode_tindakan'];
	$lokasi_simpan = $_POST['lokasi_simpan'];

	

	$sql = "UPDATE arsip_statis SET no_arsip = '$no_arsip', uraian_statis = '$uraian_statis', tanggal_statis = '$tanggal_statis', jumlah_statis = '$jumlah_statis', jenis_media = '$jenis_media', metode_tindakan = '$metode_tindakan', lokasi_simpan = '$lokasi_simpan' WHERE idarsip = '$idarsip'";
	mysqli_query($koneksi, $sql);
	//echo $sql;
	header("location:tampil_data.php");
?>
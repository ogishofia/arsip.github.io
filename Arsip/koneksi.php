<?php
	$servername="localhost";
	$username="root";
	$password="";
	$database="arsip";


		$koneksi = mysqli_connect($servername, $username, $password, $database);
		if (!$koneksi) {
		    die("Koneksi gagal: " . mysqli_connect_error());
		}
		//echo "Koneksi berhasil";
		//mysqli_close($koneksi);
		// echo "masuk disini"; exit();
?>
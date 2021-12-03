<?php
	session_start();
	include "koneksi.php";

	$username = $_POST['username'];
	$password = MD5($_POST['password']);

	$sql = "SELECT * FROM user_login WHERE username = '$username' AND password = '$password'";

	$eksekusi = mysqli_query($koneksi, $sql);

	$jumlah_baris = mysqli_num_rows($eksekusi);

	if ($jumlah_baris > 0) {
		$show = mysqli_fetch_array($eksekusi);
		$_SESSION["username"] = $show["username"];
		$_SESSION["password"] = $show["password"];

		header("location:dashboard.php");
		exit();
	} else {
		echo "Username atau password salah <br><a href='login.php'>Kembali</a>";
	}
?>
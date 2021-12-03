<?php 
	include "../koneksi.php";

	@$idarsip = $_GET['idarsip'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Arsip</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>
<body>
  <header class="site-headers">
    <nav>
      <div class="logo">
        <h1>ARSIP</h1>
      </div>
      <div class="menu_a">
        <ul>
           <li><a href="dashboard.php">Home</a></li>
          <li><a href="../tampil_data.php">Arsip Preservasi</a></li>
          <li><a href="tampil_data.php">Arsip Statis Alih Media</a></li>
          <li><a href="../logout.php?logout-submit=logout">Logout</a></li>
        </ul>
      </div>
    </nav>
</header>
<div id="batas">
 			<span id="text_a">Edit Data</span>
            
            	<?php 
					$sql = "SELECT * FROM arsip_statis WHERE idarsip = '$idarsip'";
					$eksekusi = mysqli_query($koneksi, $sql);
					$tampilkan = mysqli_fetch_array($eksekusi);
				?>
				<form action="edit_arsip_db.php?idarsip=<?php echo $idarsip;?>" method="POST" enctype="multipart/form-data">
					<table>
						<tr>
				<td>Nomor Arsip</td>
				<td>:</td>
				<td><input type="text" name="no_arsip" placeholder="Nomor Arsip"></td>
			</tr>
			<tr>
				<td>Uraian Informasi Arsip</td>
				<td>:</td>
				<td><textarea  type="text" name="uraian_statis" placeholder="Uraian Informasi Arsip"></textarea></td>
			</tr>
			<tr>
				<td>Tanggal</td>
				<td>:</td>
				<td><input type="text" placeholder="Tanggal" name="tanggal_statis"></td>
			</tr>
			<tr>
				<td>Jumlah</td>
				<td>:</td>
				<td><input type="text" name="jumlah_statis" placeholder="Jumlah"></td>
			</tr>
			<tr>
				<td>Jenis Media</td>
				<td>:</td>
				<td><input type="text" name="jenis_media" placeholder="Jenis Media"></td>
			</tr>
			<tr>
				<td>Metode Tindakan</td>
				<td>:</td>
				<td><input type="text" name="metode_tindakan" placeholder="Metode Tindakan"></td>
			</tr>
			<tr>
				<td>Ket. Lokasi Simpan</td>
				<td>:</td>
				<td><input type="text" name="lokasi_simpan" placeholder="Ket. Lokasi Simpan"></td>
			</tr>
						<tr>
							<td colspan="3"><input type="submit" name="Tambah" id="button_a"></td>
						</tr>
					</table>
				</form>
            </span>
</div>
	
</body>
</html>
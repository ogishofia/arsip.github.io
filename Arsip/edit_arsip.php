<?php 
	include "koneksi.php";

	@$id = $_GET['id'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Arsip</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
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
          <li><a href="tampil_data.php">Arsip Preservasi</a></li>
          <li><a href="arsip_statis/tampil_data.php">Arsip Statis Alih Media</a></li>
          <li><a href="logout.php?logout-submit=logout">Logout</a></li>
        </ul>
      </div>
    </nav>
</header>
<div id="batas">
 			<span id="text_a">Edit Data</span>
            
            	<?php 
					$sql = "SELECT * FROM arsip_preservasi WHERE id = '$id'";
					$eksekusi = mysqli_query($koneksi, $sql);
					$tampilkan = mysqli_fetch_array($eksekusi);
				?>
				<form action="edit_arsip_db.php?id=<?php echo $id;?>" method="POST" enctype="multipart/form-data">
					<table>
						<tr>
							<td>Nomor Berkas</td>
							<td>:</td>
							<td><input type="text" name="nomor_berkas" placeholder="Nomor Berkas"></td>
						</tr>
						<tr>
							<td>Nomor Item Arsip</td>
							<td>:</td>
							<td><input type="text" name="no_item" placeholder="Nomor Item Arsip"></td>
						</tr>
						<tr>
							<td>Uraian Informasi Arsip</td>
							<td>:</td>
							<td><textarea  type="text" name="uraian_arsip" placeholder="Uraian Informasi Arsip"></textarea></td>
						</tr>
						<tr>
							<td>Tanggal</td>
							<td>:</td>
							<td><input type="text" placeholder="Tanggal" name="tanggal"></td>
						</tr>
						<tr>
							<td>Jumlah</td>
							<td>:</td>
							<td><input type="text" name="jumlah" placeholder="Jumlah"></td>
						</tr>
						<tr>
							<td>Jenis Arsip</td>
							<td>:</td>
							<td><input type="text" name="jenis" placeholder="Jenis Arsip"></td>
						</tr>
						<tr>
							<td>Tindakan Preservasi</td>
							<td>:</td>
							<td><input type="text" name="tindakan_preservasi" placeholder="Tindakan Preservasi"></td>
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
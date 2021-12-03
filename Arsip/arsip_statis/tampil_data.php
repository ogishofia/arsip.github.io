<?php
	session_start();
	include "../koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Dashboard</title>
	<!-- link import css -->
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
           <li><a href="../dashboard.php">Home</a></li>
          <li><a href="../tampil_data.php">Arsip Preservasi</a></li>
          <li><a href="tampil_data.php">Arsip Statis Alih Media</a></li>
          <li><a href="../logout.php?logout-submit=logout">Logout</a></li>
        </ul>
      </div>
    </nav>
</header>
        <div id="batas">
 			<span id="text_a">Daftar Arsip Alih Media</span>
            <!-- fungsi pencarian	 -->
            	<?php 
            		if (isset($_POST['search'])) {
							$searchKey = $_POST['search'];
							$sql = "SELECT * FROM arsip_statis where jenis_media like '%$searchKey%' or uraian_statis like '%$searchKey%' or no_arsip like '$searchKey'";
						}else{
							$sql = "SELECT * FROM arsip_statis";
						}
						$eksekusi = mysqli_query($koneksi,$sql);
            	?>


				<form action="" method="POST">
					
		            	<table width="50%">
			                    <td id="text_a">Cari</td>
			                    <td>
			                    	<input type="text" name="search" id="textbox">
			                    	<input type="submit" value="Cari" id="button_search">
			                    </td>
			                	<td></td>			                
			            </table>
        			
				</form>
	
	<div id="font">
		<table width="100%" border="1" collpadding = "10" collspacing ="0">
		<tr>
			<th>Nomor Arsip</th>
			<th>Uraian Informasi Arsip</th>
			<th>Tanggal</th>
			<th>Jumlah</th>
			<th>Jenis Media</th>
			<th>Metode Tindakan</th>
			<th>Keterangan Lokasi Simpan</th>
			<th colspan="2">Aksi</th>
		</tr>
		<tbody>
		<?php
			while ($tampilkan = mysqli_fetch_assoc($eksekusi)) {
		?>
			
				<tr>
					
					<td id="font"><?php echo $tampilkan['no_arsip'];?></td>
					<td id="font"><?php echo $tampilkan['uraian_statis']; ?></td>
					<td id="font"><?php echo $tampilkan['tanggal_statis']; ?></td>
					<td id="font"><?php echo $tampilkan['jumlah_statis']; ?></td>
					<td id="font"><?php echo $tampilkan['jenis_media']; ?></td>
					<td id="font"><?php echo $tampilkan['metode_tindakan']; ?></td>
					<td id="font"><?php echo $tampilkan['lokasi_simpan']; ?></td>
					<td><button id="btn_edit" onclick="location.href='edit_arsip.php?idarsip=<?php echo $tampilkan['idarsip']; ?>'">Edit</button></td>
					<td><button id="btn_delete" onclick="location.href='delete_arsip.php?idarsip=<?php echo $tampilkan ['idarsip']; ?>'">Delete</button></td>
				</tr>
				
		<?php			
				}

		?>
		</tbody>
	</table>
</div>
	<a href="tambah_arsip.php"><input type="button" value="Tambah Data" id="button_a"></a>
    </span>
</div>
</body>
</html>
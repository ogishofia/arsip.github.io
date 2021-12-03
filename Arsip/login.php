<?php
   
	// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from user_login where username='$username' and password='$password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:dashboard.php");
 }
	//else {
// 		echo "Username atau password salah <br><a href='login.php'>Kembali</a>";
//  }
?>


<html>
<head>
<title>LOGIN</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>
<body>
	<header class="site-headers">
    <nav>
      <div class="logo">
        <h1>ARSIP</h1>
      </div>
    </nav>

    <section>
      <div class="leftside" style="margin-left: 20px">
        <img src="images/dinas.jpeg" style="width: 60%, height: 60" >
      </div>
      <div class="rightside">
		<form action="" method="POST">
		        <div id="text">Selamat Datang Administrator, Silahkan Login</div>
		    	        <table width="75%" id="table">
		        	        <tr>
		        	        	<td>Username</td>
		            	        <td><input type="text" name="username" placeholder="Username" class="form"></td>
		        	        </tr>
			                <tr>
			                    <td>Kata Sandi</td>
			                    <td><input type="password" name="password" placeholder="Kata Sandi" class="form"></td>
			                </tr>
			                <tr>
			                	<td>
			                		<td>
			                			<button type="submit" name="login" id="button_login">
			                				Login
			                			</button>
			                		</td>
			                	</td>
			                    <!-- <td>
			                    	<td><input type="submit" name="login" id="button_login" value="Masuk"></td>
			                    </td> -->
			                </tr>
		            	</table>
		        </div>
		</form>
      </div>
    </section>
  </header>
</div>
</body>
</html>

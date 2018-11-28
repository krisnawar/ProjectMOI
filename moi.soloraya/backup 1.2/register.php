<!-- registrasi untuk yang belum mempunyai akun login -->
<!DOCTYPE html>
<html>
<head>
	<title>Registrasi &copy </title>
	<link rel="stylesheet" type="text/css" href="source/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="source/js/bootstrap.min.js"></script>
	<style>
		.affix{
			top: 0;
			width: 100%;
			z-index: 9999 !important;
		}
		.affix + .container-fluid{
			padding-top: 70px;
		}

	</style>
</head>
<body>
	<!-- <div class="container-fluid" style="background-color: #c61f5f; color:#fff; height: 250px">
		<h1 align="center" style="margin-top: 60px; font-size: 80px">PRAKTIKUM 5</h1>
		<h2 align="center">SESSION & COOKIES</h2>
	</div>
	<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="251" style="border-radius: 0; background-color: #8c1554; border-color: #FFF">
		<ul class="nav navbar-nav">
			<li><a href="index.php">HOMESWEETHOME</a></li>
			<li class="active"><a href="#">REGISTRASI</a></li>
			<li><a href="login.php">LOGIN</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right" style="margin-right: 10px">
			<li><a href="logout.php">LOGOUT</a></li>
		</ul>
	</nav> -->
	<div class="container-fluid" align="center" style="margin: 50px auto">
		<?php
		session_start();
		require_once 'koneksi.php';

		if(isset($_SESSION['login'])){
			echo "<h1>ANDA SUDAH LOGIN</h1>";
			header("refresh:2; url=index.php");
		} else {
			?>
			<form action="" method="POST">
				<h3>SILAKAN REGISTRASI DAHULU</h3>
				<table border="1">
					<tr>
						<td>
							<table border="0" style="margin: 20px 40px;">
								<tr>
									<td width="90px">Username </td>
									<td> : <input type="text" name="username" required pattern="^[A-Za-z0-9 @._\-]{6,16}$" style="width: 250px"></td>
								</tr>
								<tr>
									<td></td>
									<td><span style="margin-left: 8px; font-size: 11px">Min 6 char alphanumeric. Boleh : "@._-"</span></td>
								</tr>
								<tr>
									<td width="90px">Password </td>
									<td> : <input type="password" name="password" required pattern="^[A-Za-z0-9 @]{8,}$" style="width: 250px"></td>
								</tr>
								<tr>
									<td></td>
									<td><span style="margin-left: 8px; font-size: 11px">Min 8 cahr alphanumeric. Boleh : "@"</span></td>
								</tr>
								<tr>
									<td width="90px">Full Name </td>
									<td> : <input type="text" name="full_name" required pattern="^[A-Za-z ]{1,50}$" style="width: 250px"></td>
								</tr>
								<tr>
									<td colspan="2"><br></td>
								</tr>
								<tr>
									<td width="90px">Email </td>
									<td> : <input type="text" name="email" required pattern="^[A-Za-z_.0-9]+[@]{1}[A-Za-z]+[.]{1}[A-Za-z.]+$" style="width: 250px"></td>
								</tr>
								<tr>
									<td width="90px">Phone </td>
									<td> : <input type="text" name="phone" required pattern="^[0-9]{10,13}$" style="width: 250px"></td>
								</tr>
								<tr>
									<td colspan="2" align="center"><input type="submit" name="registrasi" value="REGISTRATION" style="margin: 10px auto;"></td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</form>
			<?php
		}
		if(isset($_POST['registrasi'])){
			$username = $_POST['username'];
			$password = md5($_POST['password']);
			$full_name = $_POST['full_name'];
			$email = $_POST['email'];
			$phone = $_POST['phone'];
			$sql1 = mysqli_query($koneksi, "SELECT COUNT(*) from user where username = '$username'") or die (mysqli_error());
			if(mysqli_fetch_assoc($sql1)['COUNT(*)'] == 1){
				echo "USERNAME TELAH DIGUNAKAN<br>Silahkan Gunakan Username Lainnya<br>";
			} else{
				$sql2 = mysqli_query($koneksi, "INSERT INTO `user`(`username`, `password`, `full_name`, `email`, `phone`, `role`) VALUES ('$username','$password','$full_name','$email', '$phone', 'user')") or die ("REGISTRASI GAGAL COY");
				if($sql2){
					echo "ANDA BERHASIL REGISTRASI<br><br>";
					echo "ANDA AKAN DIALIHKAN KE HALAMAN PENGISIAN FORM<br>";
					$_SESSION['login'] = $username;
					header("refresh:3; url=index.php");
				} else{
					echo "GAGAL REGISTRASI";
				}
			}
		}
		?>
	</div>
</body>
</html>
<!-- registrasi untuk yang belum mempunyai akun login -->
<!DOCTYPE html>
<html>
<head>
	<title>Login &copy </title>
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
				<h3>SILAKAN LOGIN DAHULU</h3>
				<table border="1">
					<tr>
						<td>
							<table border="0" style="margin: 20px 40px;">
								<tr>
									<td width="90px">Username </td>
									<td> : <input type="text" name="username" required style="width: 250px"></td>
								</tr>
								<!-- <tr>
									<td></td>
									<td><span style="margin-left: 8px; font-size: 11px">Min 6 char alphanumeric. Boleh : "@._-"</span></td>
								</tr> -->
								<tr>
									<td width="90px">Password </td>
									<td> : <input type="password" name="password" required style="width: 250px"></td>
								</tr>
								<!-- <tr>
									<td></td>
									<td><span style="margin-left: 8px; font-size: 11px">Min 8 cahr alphanumeric. Boleh : "@"</span></td>
								</tr> -->
								<tr>
									<td colspan="2" align="center"><input type="submit" name="login" value="LOGIN" style="margin: 10px auto;"></td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</form>
			<?php
		}
		if(isset($_POST['login'])){
			$username = $_POST['username'];
			$password = md5($_POST['password']);
			$sql1 = mysqli_query($koneksi, "SELECT password from user where username = '$username'") or die (mysqli_error());
			$data = mysqli_fetch_assoc($sql1);
			$data1 = $data["password"];

			if($data1==$password){
				$_SESSION["login"] = $username;				
				header("Location: galang.php");
				echo "Anda Berhasil Login<br>";
			} else{
				echo "Gagal Login<br>";
			}
		}
		?>
	</div>
</body>
</html>
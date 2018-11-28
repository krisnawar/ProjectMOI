<!-- registrasi untuk yang belum mempunyai akun login -->
<!DOCTYPE html>
<html>
<head>
	<title>Login &copy </title>
	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
	<link rel="stylesheet" href="./assets/css/material-kit.css?v=2.0.2">
	<!-- Documentation extras -->
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="./assets/assets-for-demo/demo.css" rel="stylesheet" />
	<!-- iframe removal -->
</head>
<body>
	<div class="section section-signup page-header" style="background-image: url('assets/img/kit/free/city.jpg');">
			<div class="container">
					<div class="row">
							<div class="col-md-4 ml-auto mr-auto">
									<div class="card card-signup">
										<?php
										session_start();
										require_once 'koneksi.php';

										if(isset($_SESSION['login'])){
											echo "<h1>ANDA SUDAH LOGIN</h1>";
											header("refresh:2; url=index.php");
										} else {
											?>
											<form class="form" action="" method="POST">
													<div class="card-header card-header-success text-center">
															<h4>Sign In</h4>
															<div class="social-line">
																	<a href="https://www.facebook.com/" class="btn btn-link btn-just-icon">
																			<i class="fa fa-facebook-square"></i>
																	</a>
																	<a href="https://twitter.com/" class="btn btn-link btn-just-icon">
																			<i class="fa fa-twitter"></i>
																	</a>
																	<a href="https://mail.google.com" class="btn btn-link btn-just-icon">
																			<i class="fa fa-google-plus"></i>
																	</a>
															</div>
													</div>
													<p class="text-divider">Belum punya akun? <a href="register.php" class="text-success">Daftar di sini</a></p>
													<div class="card-body">
															<div class="input-group">
																	<span class="input-group-addon">
																			<i class="material-icons">face</i>
																	</span>
																	<input type="text" class="form-control" name="username" required placeholder="Username">
															</div>
															<div class="input-group">
																	<span class="input-group-addon">
																			<i class="material-icons">lock_outline</i>
																	</span>
																	<input type="password" class="form-control" name="password" required placeholder="Password">
															</div>
													</div>
													<div class="card-footer justify-content-center">
															<input class="btn btn-link btn-success btn-lg" type="submit" name="login" value="LOGIN">
													</div>
											</form>
									</div>
							</div>
					</div>
			</div>
	</div>
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
				$url = $_SESSION["url"];
				header("Location: $url");
				echo "Anda Berhasil Login<br>";
			} else{
				echo "Gagal Login<br>";
			}
		}
		?>
	</div>
</body>
</html>

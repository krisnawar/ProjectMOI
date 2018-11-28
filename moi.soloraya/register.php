<!-- registrasi untuk yang belum mempunyai akun login -->
<!DOCTYPE html>
<html>
<head>
	<title>Registrasi &copy </title>
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
							<div class="col-md-6 ml-auto mr-auto">
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
															<h4>Sign Up</h4>
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
													<p class="text-divider">Sudah punya akun? <a href="index.php" class="text-success">Kembali</a></p>
													<div class="card-body">
															<div class="input-group">
																	<span class="input-group-addon">
																			<i class="material-icons">face</i>
																	</span>
																	<input type="text" class="form-control" name="username" required pattern="^[A-Za-z0-9 @._\-]{1,16}$" placeholder="Username">
															</div>
															<div class="input-group">
																	<span class="input-group-addon">
																			<i class="material-icons">lock_outline</i>
																	</span>
																	<input type="password" class="form-control" name="password" required pattern="^[A-Za-z0-9 @]{1,}$" placeholder="Password">
															</div>
															<div class="input-group">
																	<span class="input-group-addon">
																			<i class="material-icons">accessibility</i>
																	</span>
																	<input type="text" class="form-control" name="full_name" required pattern="^[A-Za-z ]{1,50}$" placeholder="Full Name">
																	<!-- <input type="text" name="full_name" required pattern="^[A-Za-z ]{1,50}$" style="width: 250px"> -->
															</div>
															<div class="input-group">
																	<span class="input-group-addon">
																			<i class="material-icons">email</i>
																	</span>
																	<input type="text" class="form-control" name="email" required pattern="^[A-Za-z_.0-9]+[@]{1}[A-Za-z]+[.]{1}[A-Za-z.]+$" placeholder="Email">
															</div>
															<div class="input-group">
																	<span class="input-group-addon">
																			<i class="material-icons">phone</i>
																	</span>
																	<input type="text" class="form-control" name="phone" required pattern="^[0-9]{10,13}$" placeholder="Phone">
															</div>

													</div>
													<div class="card-footer justify-content-center">
															<input class="btn btn-link btn-success btn-lg" type="submit" name="registrasi" value="REGISTRATION">
													</div>
											</form>
									</div>
							</div>
					</div>
			</div>
	</div>
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

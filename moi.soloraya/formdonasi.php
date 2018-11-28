<?php
session_start();
if(isset($_SESSION['login'])){
	if(isset($_SESSION['url'])){
		unset($_SESSION['url']);
	}
	$username = $_SESSION['login'];
	if(isset($_GET['id']) && isset($_GET['hash'])){
		?>
		<!DOCTYPE html>
		<html>
		<head>
			<meta charset="UTF-8">
			<title>MOI Soloraya</title>
			<link rel="stylesheet" type="text/css" href="style.css">
			<link rel="shortcut icon" href="img_src/icon.ico">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		</head>
		<body>

			<nav class="navbar navbar-default" data-spy="affix" data-offset-top="116" style="height: 115px;">
				<div class="navbar-header">
					<a class="navbar-brand" href="#"><img src="img_src/header/left.png" height="80px" style="margin: 0 auto; margin-left: 130px;"></a>
				</div>
				<ul class="nav navbar-nav" style="margin: 25px auto;">
					<li><a href="index.php" style="margin-left: 50px;">Home</a></li>
					<li><a href="berita.php">Berita</a></li>
					<li><a href="tentangkami.php">Tentang Kami</a></li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Donasi<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="formdonasi.php?donasiumum=true">Donasi Umum</a></li>
							<li><a href="daftardonasi.php">Pilih Daftar Donasi</a></li>
						</ul>
					</li>
					<li class="active"><a href="galang.php">Galang Dana</a></li>
					<ul class="nav navbar-nav navbar-right" style="margin-right: 10px;">
						<li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome,
							<?php
							if(isset($_SESSION['login'])){
								echo $username;
							} else {
								echo "Guest";
							}
							?></a>
						</li>
						<li>
							<?php
							if(isset($_SESSION['login'])){
								echo "<a href=\"logout.php\"><span class=\"glyphicon glyphicon-log-out\"></span> Logout</a>";
							} else {
								echo "<a id=\"kliklogin\"href=\"#login\" style=\"margin-right: 50px\" data-toggle=\"modal\" data-target=\"#modal-login\"> Login</a>";
							}
							?>
						</li>
					</ul>
					<style>
					.navbar-nav li{
						padding: auto 1px;
					}
				</style>
			</ul>
		</nav>
		<?php
		if(isset($_POST['donation'])){
			require_once("koneksi.php");
			$id = $_GET['id'];
			$amount = $_POST['jumlahdonasi'];
			date_default_timezone_set("Asia/Jakarta");
			$tanggal = date("Y-m-d H:i:s");
			$sql = mysqli_query($koneksi, "INSERT INTO `donasi_master`(`username`, `amount`, `id_donasi_detail`, `tanggal_waktu`) VALUES ('$username', '$amount', '$id', '$tanggal')") or die (mysqli_error());
			if($sql){
				$expdate = date("d ", mktime(0, 0, 0, 0, date('d') + 2, 0));
				$expawal = date("F Y");
				$expakhir = date("H:i:s");
				$tempdata = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT terkumpul FROM donasi_detail WHERE id_donasi_detail = $id"));
				$terkumpulsebelum = $tempdata['terkumpul'];
				$terkumpulsesudah = $terkumpulsebelum + $amount;
				mysqli_query($koneksi, "UPDATE donasi_detail SET terkumpul = $terkumpulsesudah WHERE id_donasi_detail = $id") or die (mysqli_error());
				?>
				<div class="container-fluid" style="width: 80%">
					<div align="center">
						<h3><b>Berhasil Donasi</b></h3><br><br>
						<h4>Silakan kirimkan Donasi Anda <br> sejumlah Rp. <?php echo number_format($amount,2,",",".") ?><br>ke Rekening BNI 1407653247 Atas Nama MOI Soloraya</h4>
						<h4>Sebelum <?php echo $expdate.$expawal." pukul ".$expakhir; ?></h4>
						<p><h2 align="center"><a href="index.php" class="btn btn-primary">Kembali ke Halaman Utama</a></li></p></h2>
					</div>
				</div>
				<?php
			}

		}
		else{
			?>
			<div class="container-fluid" style="width: 80%">
				<div id="form">
					<div class="row">
						<div class="col-md-10 col-md-offset-1 animate-box">
							<h3>Ayo Donasi Sekarang!</h3>
							<form method="POST" id="jumlahdonasi">
								<div class="row form-group">
									<div class="col-md-12">
										<label for="jumlahdonasi">Jumlah Donasi</label>
										<input type="text" required name="jumlahdonasi" class="form-control" placeholder="Masukkan hanya angka. Misal : 12500">
									</div>
								</div>

								<div class="form-group text-center">
									<input type="submit" required name="donation" value="Submit" class="btn btn-primary">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>


			<?php
		}
		?>
		<footer class="footer" style="background-color: #dee2e8; height: 35%; margin-top: 100px;">
			<div class="container">
				<div class="body-content" style="width: 95%; margin: 30px auto;">
					<div class="row">
						<div class="col-lg-4">
							<h4>Sekretariat</h4>
							<p>Warung Wedangan Radjiman, Laweyan, Surakarta, 57148</p>
						</div>
						<div class="col-lg-4">
							<h4>Kontak</h4>
							<span class="glyphicon glyphicon-envelope"></span><a href="#"> solo@moi.com</a><br>
							<span class="glyphicon glyphicon-phone"></span><a href="#"> +62 856 0222-2747</a>
						</div>
						<div class="col-lg-4">
							<h4>Feedback</h4>
							<p>Mohon kirim saran, kritik, bug maupun laporan anda kepada kami. Segala bentuk feedback kami apresiasi</p>
						</div>
					</div>
					<hr style="border-color: black;">
					<div>
						<h4 class="pull-left">&copy; MOI Soloraya <?= date('Y') ?></h4>
						<span class="pull-right">
							<a href="https://www.facebook.com/" target="_blank" class="fa fa-facebook"></a>
							<a href="https://www.twitter.com/" target="_blank" class="fa fa-twitter"></a>
							<a href="https://www.instagram.com/" target="_blank" class="fa fa-instagram"></a>
							<a href="https://google.co.id/" target="_blank" class="fa fa-google"></a>
							<a href="https://youtube.com/" target="_blank" class="fa fa-youtube"></a>
						</span>
						<style>
						.fa {
							padding: 10px;
							font-size: 25px;
							text-align: center;
							text-decoration: none;
							margin: 5px auto;
						}

						.fa:hover {
							opacity: 0.7;
						}
						.fa-facebook {
							background: #3B5998;
							color: white;
						}

						.fa-twitter {
							background: #55ACEE;
							color: white;
						}

						.fa-google {
							background: #dd4b39;
							color: white;
						}
						.fa-youtube {
							background: #bb0000;
							color: white;
						}

						.fa-instagram {
							background: #125688;
							color: white;
						}
					</style>
				</div>
			</div>
		</div>
	</footer>
	<?php

}
elseif(isset($_GET['donasiumum']) && $_GET['donasiumum'] == "true") {
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="UTF-8">
		<title>MOI Soloraya</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="shortcut icon" href="img_src/icon.ico">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>

		<nav class="navbar navbar-default" data-spy="affix" data-offset-top="116" style="height: 115px;">
			<div class="navbar-header">
				<a class="navbar-brand" href="#"><img src="img_src/header/left.png" height="80px" style="margin: 0 auto; margin-left: 130px;"></a>
			</div>
			<ul class="nav navbar-nav" style="margin: 25px auto;">
				<li><a href="index.php" style="margin-left: 50px;">Home</a></li>
				<li><a href="#news">Berita</a></li>
				<li><a href="tentangkami.php">Tentang Kami</a></li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">Donasi<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">Donasi Umum</a></li>
						<li><a href="daftardonasi.php">Pilih Daftar Donasi</a></li>
					</ul>
				</li>
				<li class="active"><a href="#">Galang Dana</a></li>
				<ul class="nav navbar-nav navbar-right" style="margin-right: 10px;">
					<li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome,
						<?php
						if(isset($_SESSION['login'])){
							echo $username;
						} else {
							echo "Guest";
						}
						?></a>
					</li>
					<li>
						<?php
						if(isset($_SESSION['login'])){
							echo "<a href=\"logout.php\"><span class=\"glyphicon glyphicon-log-out\"></span> Logout</a>";
						} else {
							echo "<a id=\"kliklogin\"href=\"#login\" style=\"margin-right: 50px\" data-toggle=\"modal\" data-target=\"#modal-login\"> Login</a>";
						}
						?>
					</li>
				</ul>
				<style>
				.navbar-nav li{
					padding: auto 1px;
				}
			</style>
		</ul>
	</nav>
	<?php
	if(isset($_POST['donationumum'])){
		require_once("koneksi.php");
		$jumlahdon = $_POST['jumlahdonasi'];
		date_default_timezone_set("Asia/Jakarta");
		$tgldonasi = date("Y-m-d H:i:s");
		$sqltotal = mysqli_query($koneksi, "SELECT total from kas_donasi ORDER BY id_kas_donasi DESC") or die (mysqli_error());
		$data = mysqli_fetch_assoc($sqltotal);
		$totalsementara = $data['total'];
		$totalnya = 0;
		if($totalsementara == 0){
			$totalnya = $jumlahdon;
		}
		elseif($totalsementara != 0){
			$totalnya = $totalsementara + $jumlahdon;
		}
		$sql1 = mysqli_query($koneksi, "INSERT INTO `kas_donasi`(`donatur`, `tanggal_waktu`, `amount`, `total`) VALUES ('$username', '$tgldonasi', '$jumlahdon', '$totalnya')") or die (mysqli_error());
		if($sql1){
			$expdate = date("d ", mktime(0, 0, 0, 0, date('d') + 2, 0));
			$expawal = date("F Y");
			$expakhir = date("H:i:s");
				//$tempdata = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT terkumpul FROM donasi_detail WHERE id_donasi_detail = $id"));
				//$terkumpulsebelum = $tempdata['terkumpul'];
				//$terkumpulsesudah = $terkumpulsebelum + $amount;
				//mysqli_query($koneksi, "UPDATE donasi_detail SET terkumpul = $terkumpulsesudah WHERE id_donasi_detail = $id") or die (mysqli_error());
			?>
			<div class="container-fluid" style="width: 80%">
				<div align="center">
					<h3><b>Berhasil Donasi</b></h3><br><br>
					<h4>Silakan kirimkan Donasi Anda <br> sejumlah Rp. <?php echo number_format($jumlahdon,2,",",".") ?><br>ke Rekening BNI 1407653247 Atas Nama MOI Soloraya</h4>
					<h4>Sebelum <?php echo $expdate.$expawal." pukul ".$expakhir; ?></h4>
					<p><h2 align="center"><a href="index.php" class="btn btn-primary">Kembali ke Halaman Utama</a></li></p></h2>
				</div>
			</div>
			<?php
		}

	} else{
		?>
		<div class="container-fluid" style="width: 80%">
			<div id="form">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 animate-box">
						<h3>Ayo Donasi Sekarang!</h3>
						<form method="POST" id="jumlahdonasi">
							<div class="row form-group">
								<div class="col-md-12">
									<label for="jumlahdonasi">Jumlah Donasi</label>
									<input type="text" required name="jumlahdonasi" class="form-control" placeholder="Masukkan hanya angka. Misal : 12500">
								</div>
							</div>

							<div class="form-group text-center">
								<input type="submit" required name="donationumum" value="Submit" class="btn btn-primary">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<?php
	}
	?>
	
	
	<footer class="footer" style="background-color: #dee2e8; height: 35%; margin-top: 100px;">
		<div class="container">
			<div class="body-content" style="width: 95%; margin: 30px auto;">
				<div class="row">
					<div class="col-lg-4">
						<h4>Sekretariat</h4>
						<p>Warung Wedangan Radjiman, Laweyan, Surakarta, 57148</p>
					</div>
					<div class="col-lg-4">
						<h4>Kontak</h4>
						<span class="glyphicon glyphicon-envelope"></span><a href="#"> solo@moi.com</a><br>
						<span class="glyphicon glyphicon-phone"></span><a href="#"> +62 856 0222-2747</a>
					</div>
					<div class="col-lg-4">
						<h4>Feedback</h4>
						<p>Mohon kirim saran, kritik, bug maupun laporan anda kepada kami. Segala bentuk feedback kami apresiasi</p>
					</div>
				</div>
				<hr style="border-color: black;">
				<div>
					<h4 class="pull-left">&copy; MOI Soloraya <?= date('Y') ?></h4>
					<span class="pull-right">
						<a href="https://www.facebook.com/" target="_blank" class="fa fa-facebook"></a>
						<a href="https://www.twitter.com/" target="_blank" class="fa fa-twitter"></a>
						<a href="https://www.instagram.com/" target="_blank" class="fa fa-instagram"></a>
						<a href="https://google.co.id/" target="_blank" class="fa fa-google"></a>
						<a href="https://youtube.com/" target="_blank" class="fa fa-youtube"></a>
					</span>
					<style>
					.fa {
						padding: 10px;
						font-size: 25px;
						text-align: center;
						text-decoration: none;
						margin: 5px auto;
					}

					.fa:hover {
						opacity: 0.7;
					}
					.fa-facebook {
						background: #3B5998;
						color: white;
					}

					.fa-twitter {
						background: #55ACEE;
						color: white;
					}

					.fa-google {
						background: #dd4b39;
						color: white;
					}
					.fa-youtube {
						background: #bb0000;
						color: white;
					}

					.fa-instagram {
						background: #125688;
						color: white;
					}
				</style>
			</div>
		</div>
	</div>
</footer>
<?php
}
}
else{
	$_SESSION["url"] = "$_SERVER[REQUEST_URI]";
	header("Location:login4.php");
}
?>

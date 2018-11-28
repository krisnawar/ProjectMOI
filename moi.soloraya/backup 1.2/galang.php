<?php
session_start();
require_once("config.php");
if(isset($_SESSION['login'])){
	$username = $_SESSION['login'];
	if (isset($_POST['submit'])){
    	// $id_user = $_SESSION['user']['Id'];
		$judul = $_POST['judul'];
		$keterangan = $_POST['keterangan'];
		$isi = $_POST['isi'];
		$target_donasi = $_POST['target_donasi'];
		$campaigner = $_SESSION['login'];

    	// if(!empty($nm_barang) && !empty($posted) && !empty($lokasi)){
		$sql = "INSERT INTO temp_donasi (`judul`, `keterangan`, `isi`, `target_donasi`, `terkumpul`, `campaigner`)
		VALUES(:judul, :keterangan, :isi, :target_donasi, 0, :campaigner)";
    	  // $simpan = mysqli_query($conn, $sql);


		$stmt = $koneksi->prepare($sql);
		$params = array(
			":judul" => $judul,
			":keterangan" => $keterangan,
			":isi" => $isi,
			":target_donasi" => $target_donasi,
			":campaigner" => $campaigner
		);
		$saved = $stmt->execute($params);
		if($saved) {
			header("Location: index.php");
		}		
	}	
}
else{
	header("Location: login2.php");	
}
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
					<li><a href="#">Pilih Daftar Donasi</a></li>
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


<div class="container-fluid" style="width: 80%">
	<div id="form">
		<div class="row">
			<div class="col-md-10 col-md-offset-1 animate-box">
				<h3>Form Permintaan Penggalangan Dana</h3>
				<form method="POST" id="galang">
					<div class="row form-group">
						<div class="col-md-12">
							<label for="fname">Judul</label>
							<input type="text" required name="judul" class="form-control" placeholder="Your subject">
						</div>
					</div>

					<div class="row form-group">
						<div class="col-md-12">
							<label for="email">Target Donasi</label>
							<input type="text" required name="target_donasi" class="form-control" placeholder="Your target">
						</div>
					</div>

					<div class="row form-group">
						<div class="col-md-12">
							<label for="subject">Keterangan</label>
							<input type="text" required name="keterangan" class="form-control" placeholder="Keterangan">
						</div>
					</div>

					<div class="row form-group">
						<div class="col-md-12">
							<label for="message">Cerita Singkat</label>
							<textarea name="isi" required cols="30" rows="10" class="form-control" placeholder="Say something"></textarea>
						</div>
					</div>
					<div class="form-group text-center">
						<input type="submit" required name="submit" value="Submit" class="btn btn-primary">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

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
					<a href="https://www.facebook.com/krisna1711" target="_blank" class="fa fa-facebook"></a>
					<a href="https://www.twitter.com/krisna1711" target="_blank" class="fa fa-twitter"></a>
					<a href="https://www.instagram.com/krisna.war" target="_blank" class="fa fa-instagram"></a>
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

</body>
</html>
<?php
require_once("login.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>SOLORAYA - Mahasiswa Ojol Indonesia</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="shortcut icon" href="img_src/icon.ico">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<!-- <div class="container-fluid" style="height: 120px; background-color: white;">
		<img src="img_src/header/left.jpeg" height="100px" style="margin: 10px 0;">
		<img src="img_src/header/right.jpeg" height="100px" align="right" style="margin-top: 10px;">
	</div> -->
	<?php
	session_start();
	require_once("login.php");
	?>
	<nav class="navbar navbar-default" data-spy="affix" data-offset-top="116" style="height: 115px; margin-bottom: 0;">
		<div class="navbar-header">
			<a class="navbar-brand" href="#"><img src="img_src/header/left.png" height="80px" style="margin: 0 auto; margin-left: 130px;"></a>
		</div>
		<ul class="nav navbar-nav" style="margin: 25px auto;">
			<li><a href="index.php" style="margin-left: 50px;">Home</a></li>
			<li><a href="#news">Berita</a></li>
			<li class="active"><a href="#">Tentang Kami</a></li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Donasi<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="#">Donasi Umum</a></li>
					<li><a href="#">Pilih Daftar Donasi</a></li>
				</ul>
			</li>
			<li><a href="#campaign">Galang Dana</a></li>
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
						//echo "<a href=\"login.php\"><span class=\"glyphicon glyphicon-log-in\"></span> Login</a>";
						echo "<a href=\"#login\" style=\"margin-right: 50px\" data-toggle=\"modal\" data-target=\"#modal-login\"> Login</a>";
					}
					?>
				</li>
			</ul>
		</ul>
	</nav>
	<!-- <div class="container-fluid carousel" style="width: 70%">
		<div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin: auto;">
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
				<li data-target="#myCarousel" data-slide-to="3"></li>
			</ol>
			<div class="carousel-inner">
				<div class="item active">
					<img src="img_src/carousel/GO-RIDE.jpg" alt="GO-RIDE" style="width:100%;">
				</div>
				<div class="item">
					<img src="img_src/carousel/GO-SEND.jpg" alt="GO-SEND" style="width:100%;">
				</div>
				<div class="item">
					<img src="img_src/carousel/GO-MED.jpg" alt="GO-MED" style="width:100%;">
				</div>
				<div class="item">
					<img src="img_src/carousel/GO-MART.jpg" alt="GO-MART" style="width:100%;">
				</div>
			</div>
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div> -->
	<div class="container-fluid" id="quotes" style="margin-top: 0;">
		<div id="gambarmain"> </div>
		<h5 style="color : white; font-size: 35px; text-align: center;">Logo Organisasi MOI</h5>
		<h7><p style="color: white; text-align: center; font-size: 12pt; width: 600px;">Mahasiswa Ojek Online Indonesia, atau MOI merupakan suatu organisasi yang mewadahi para mahasiswa yang berprofesi sebagai driver ojek online dari seluruh Indonesia yang memiliki kemauan untuk bergerak di bidang sosial maupun pendidikan. Anggota organisasi ini hanya terbatas untuk mahasiswa yang berprofesi sebagai Driver Ojek Online. Semua orang dengan status mahasiswa dan berprofesi sebagai Ojek Online baik itu Gojek, Grab, maupun Uber dan yang lainnya bisa turut andil bergabung dalam organisasi ini. Kegiatan organisasi ini terfokus pada kegiatan penggalangan dana bagi mereka yang membutuhkan uluran tangan dan bantuan, baik secara moril maupun materil.<br>Ruang lingkup organisasi ini adalah seluruh Indonesia. Ada dua kepengurursan dalam organisasi ini, yaitu kepengurusan pusat yang menaungi semua anggota dari seluruh Indonesia, serta kepengurusan regional yang berada di bawah kepengurusan pusat. Adanya kepengurusan regional/daerah ini bertujuan untuk mempermudah pengumpulan massa, mempermudah penyampaian pengumuman secara mendetail dari pusat kepada seluruh anggota di tiap daerah serta untuk mempermudah koordinasi dan otonomi kegiatan maupun proker di tiap regional. Untuk saat ini, regional-regional yang ada di bawah kepengurusan MOI Pusat ada 3 regional, yaitu Regional Jabodetabek, Regional Yogyakarta, dan Regional Soloraya. Regional Jabodetabek meliputi Jakarta, Bogor, Depok, Tangerang dan Bekasi. Regional Yogyakarta meliputi wilayah Daerah Istimewa Yogyakarta. Dan Regional Soloraya meliputi Kota Surakarta, Sukoharjo, Boyolali, Klaten, Wonogiri, Karanganyar dan Sragen.
    </p></h7>
	</div>
	<div class="container-fluid" style="margin: 80px auto;">
		<div class="container" style="width: 85%;">
			<div class="row">
				<div class="col-md-4">
					<div class="inner-kotak">
						<img src="img_src/gallery/1.jpg" width="100%">
						<div class="keterangan">
							<p>Pengurus dan Angota MOI Soloraya di Stadion Sriwedari</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="inner-kotak">
						<img src="img_src/gallery/2.jpg" width="100%">
						<div class="keterangan">
							<p>Pengurus dan Angota MOI Soloraya di Wedangan Radjiman</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="inner-kotak">
						<img src="img_src/gallery/3.jpg" width="100%">
						<div class="keterangan">
							<p>Pengurus dan Angota MOI Soloraya di Wedangan Radjiman</p>
						</div>
					</div>
				</div>
				<style>
				.inner-kotak{
					border: 1px solid #888888;
					padding: 0px;
					box-shadow: 1px 1px 5px #888888;
					margin: 5px;
				}
				.keterangan{
					padding: 10px;
				}
				hr{
					border-color: #1c4587;
				}
				</style>
			</div>
		</div>
	</div>
	<div class="container-fluid" style="background-color: white;">
		<div class="container" style="width: 85%;">
			<h2 align="center" style="margin-top: 100px;"><b>Anda Mahasiswa? Anda Driver Ojek Online? Ingin berbagi dan bergabung? Ayo daftar untuk bergabung bersama kami sebagai bagian dari MOI Soloraya...!!!</b></h2>
			<p><h1 align="center"><a href="#gabungkomunitas">Klik Disini</a></li></p></h1>
			<!-- <h4 align="center" style="margin-top: 15px; margin-bottom: 60px; color: #888888">Berikut beberapa penggalangan dana yang mungkin relevan untukmu</h6> -->
			<style>
				.inner-kotak{
					border: 1px solid #888888;
					padding: 0px;
					box-shadow: 1px 1px 5px #888888;
					margin: 5px;
				}
				.keterangan{
					padding: 10px;
				}
				#gambarmain{
      				background-image: url('img_src/moii.png');
      				height: 500px;
     				width: 400px;
      				background-position: center;
      				background-size: 350px;
      				background-repeat: no-repeat;
      				margin-left: 450px;
      				border-radius: 30px; 
      			}
				hr{
					border-color: #1c4587;
				}
				</style>
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
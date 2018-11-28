<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>SOLORAYA - Mahasiswa Ojol Indonesia</title>

  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="shortcut icon" href="img_src/icon.ico">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
	<!-- <div class="container-fluid" style="height: 120px; background-color: white;">
		<img src="img_src/header/left.jpeg" height="100px" style="margin: 10px 0;">
		<img src="img_src/header/right.jpeg" height="100px" align="right" style="margin-top: 10px;">
	</div> -->
	<?php
	session_start();
	require_once("login.php");
	require_once("koneksi.php");
	?>

	<nav class="navbar navbar-default" data-spy="affix" data-offset-top="116" style="height: 115px; margin-bottom: 0px;">
		<div class="navbar-header">
			<a class="navbar-brand" href="#"><img src="img_src/header/left.png" height="80px" style="margin: 0 auto; margin-left: 130px;"></a>
		</div>
		<ul class="nav navbar-nav" style="margin: 25px auto;">
			<li><a href="index.php" style="margin-left: 50px;">Home</a></li>
			<li><a href="berita.php">Berita</a></li>
			<li><a href="tentangkami.php">Tentang Kami</a></li>
			<li class="dropdown active">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Donasi<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="formdonasi.php?donasiumum=true">Donasi Umum</a></li>
					<li><a href="daftardonasi.php">Pilih Daftar Donasi</a></li>
				</ul>
			</li>
			<li><a href="galang.php">Galang Dana</a></li>
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
			<style>
				.navbar-nav li{
					padding: auto 1px;
				}
			</style>
		</ul>
	</nav>

	<?php

	;

	$sql = mysqli_query($koneksi, "SELECT id_donasi_detail, judul, img_src, keterangan, isi, target_donasi, terkumpul, full_name FROM donasi_detail d, user u WHERE d.campaigner = u.username");
	$data_array = array();
	while ($data = mysqli_fetch_assoc($sql)) {
		$data_array[] = $data;
	}
	?>

	<div class="container-fluid" id="quotes" style="margin-top: 0px;">
		<div id="inner-quotes">
			<p>Seseorang yang kaya ialah ia yang mau dan mampu memaksa dirinya untuk memberi kepada mereka yang lebih membutuhkan tanpa pamrih serta dilandasi rasa ikhlas.<br>- Krisna | 2018 -</p>
		</div>
	</div>
	<div class="container-fluid" style="background-color: white;">
		<div class="container" style="width: 85%;">
			<h2 align="center" style="margin-top: 100px;"><b>Hai, Siap untuk berdonasi?</b></h2>
			<h4 align="center" style="margin-top: 15px; margin-bottom: 60px; color: #888888">Berikut beberapa penggalangan dana yang mungkin relevan untukmu</h4>
			<div class="row">
			<?php
			foreach ($data_array as $value) {
			?>
				<div class="col-md-4">
					<div class="inner-kotak">
						<a href="detaildonasi.php?id=<?php echo $value["id_donasi_detail"]; ?>"><img src="<?php echo $value["img_src"]; ?>" width="100%"></a>
						<div class="keterangan">
							<a href="detaildonasi.php?id=<?php echo $value["id_donasi_detail"]; ?>"><?php echo $value["judul"]; ?></a><br><br>
							<p><?php echo $value["full_name"]; ?></p><hr>
							<p>Terkumpul<br><?php echo "Rp. " . number_format($value["terkumpul"],2,",","."); ?></p>
						</div>
					</div>
				</div>
			<?php
			}
			?>
			</div>
			<!-- <div class="row">
				<div class="col-md-4">
					<div class="inner-kotak">
						<img src="img_src/1.png" width="100%">
						<div class="keterangan">
							<p>Bantu Pembebasan Tanah Pesantren ini</p><br>
							<p>Yayasan ISLAM</p><hr>
							<p>Terkumpul<br>Rp. 21.575.700,-</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="inner-kotak">
						<img src="img_src/2.jpg" width="100%">
						<div class="keterangan">
							<p>Bantu Peppy Berbagi</p><br>
							<p>Peppy</p><hr>
							<p>Terkumpul<br>Rp. 7.564.250,-</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="inner-kotak">
						<img src="img_src/3.png" width="100%">
						<div class="keterangan">
							<p>Dukung Mereka Memahami ISLAM</p><br>
							<p>Berbagi Kebahagiaan</p><hr>
							<p>Terkumpul<br>Rp. 1.575.700,-</p>
						</div>
					</div>
				</div> -->
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
			<!-- </div> -->
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
</body>
</html>

<?php
session_start();
require('koneksi.php');
if(isset($_GET['id'])){
	$id = $_GET['id'];
	$sql = mysqli_query($koneksi, "SELECT * FROM berita WHERE id_berita = $id");
	$data = mysqli_fetch_assoc($sql);
	?>
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
	<?php
	require_once('login.php');
	?>

  <nav class="navbar navbar-default" data-spy="affix" data-offset-top="116" style="height: 115px;">
		<div class="navbar-header">
			<a class="navbar-brand" href="#"><img src="img_src/header/left.png" height="80px" style="margin: 0 auto; margin-left: 130px;"></a>
		</div>
		<ul class="nav navbar-nav" style="margin: 25px auto;">
			<li><a href="index.php" style="margin-left: 50px;">Home</a></li>
			<li class="active"><a href="berita.php">Berita</a></li>
			<li><a href="tentangkami.php">Tentang Kami</a></li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Donasi<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="formdonasi.php?donasiumum=true">Donasi Umum</a></li>
					<li><a href="daftardonasi.php">Pilih Daftar Donasi</a></li>
				</ul>
			</li>
			<li><a href="galang.php">Galang Dana</a></li>
			<ul class="nav navbar-nav navbar-right" style="margin-right: 10px;">
				<li>
            <a href="#"><span class="glyphicon glyphicon-user"></span> Welcome,
      				<?php
      				if(isset($_SESSION['login'])){
      					echo $username;
      				} else {
      					echo "Guest";
      				}
      				?>
            </a>
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

	<div class="container-fluid" style="width: 80%;">
		<div class="container">
			<div class="row">
				<div class="col-md-8" style="background-color: white; padding-top: 10px;">
					<?php
					require('koneksi.php');
					$sql = mysqli_query($koneksi, "SELECT * from berita WHERE id_berita = $id");
					$data_array = array();
					while ($data = mysqli_fetch_assoc($sql)) {
						$data_array[] = $data;
					}
					// print_r($data_array);
					foreach ($data_array as $value) {
						//print_r($value);
						?>
					<div>
						<div class="row">
							<div class="col-md-12">
								<div class="blog-desc">
									<h2><a href="berita1.php"><?php echo $value["judul_berita"]; ?></a></h2>
									<div class="col-md-12">
										<img src="<?php echo $value["img"]; ?>" width="80%">
									</div>
									<div class="post-meta">
										<span><?php echo date_format(date_create($value["date_time"]), "j F Y, G:i") ?></span>
										<span><a href="berita1.php">3 Comments</a></span>
									</div>
									<?php echo($value["isi"])."..."; ?>
								</div>
							</div>
							<div class="col-md-12">
								<div class="comment-area">
									<h2>3 Comments</h2>
									<div class="row">
										<div class="comment-wrap">
											<div class="col-sm-1">
												<div class="thumbnail">
													<img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
												</div><!-- /thumbnail -->
											</div><!-- /col-sm-1 -->
											<div class="col-sm-11">
												<div class="panel panel-default">
													<div class="panel-heading">
														<strong>Louie Master</strong> <span class="text-muted">commented 5 days ago</span>
													</div>
													<div class="panel-body">
														<p>Very Nice Template.. Any Wordpress Version?</p>
													</div><!-- /panel-body -->
												</div><!-- /panel panel-default -->
											</div><!-- /col-sm-5 -->
										</div>
										<div class="comment-wrap">
											<div class="col-sm-1">
												<div class="thumbnail">
													<img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
												</div><!-- /thumbnail -->
											</div><!-- /col-sm-1 -->
											<div class="col-sm-11">
												<div class="panel panel-default">
													<div class="panel-heading">
														<strong>Mike Smith</strong> <span class="text-muted">commented 5 days ago</span>
													</div>
													<div class="panel-body">
														<p>Very Nice Template.. Any Wordpress Version?</p>
													</div><!-- /panel-body -->
												</div><!-- /panel panel-default -->
											</div><!-- /col-sm-5 -->
										</div>
										<div class="comment-wrap">
											<div class="col-sm-1">
												<div class="thumbnail">
													<img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
												</div><!-- /thumbnail -->
											</div><!-- /col-sm-1 -->
											<div class="col-sm-11">
												<div class="panel panel-default">
													<div class="panel-heading">
														<strong>John Doe</strong> <span class="text-muted">commented 5 days ago</span>
													</div>
													<div class="panel-body">
														<p>Very Nice Template.. Any Wordpress Version?</p>
													</div><!-- /panel-body -->
												</div><!-- /panel panel-default -->
											</div><!-- /col-sm-5 -->
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-12">
								<div class="comment-area">
									<h2>Leave a comment</h2>
									<form action="#">
										<div class="row form-group">
											<div class="col-md-6">
												<!-- <label for="fname">First Name</label> -->
												<input type="text" id="fname" class="form-control" placeholder="Your firstname">
											</div>
											<div class="col-md-6">
												<!-- <label for="lname">Last Name</label> -->
												<input type="text" id="phone" class="form-control" placeholder="Your phone">
											</div>
										</div>

										<div class="row form-group">
											<div class="col-md-12">
												<!-- <label for="email">Email</label> -->
												<input type="text" id="email" class="form-control" placeholder="Your email address">
											</div>
										</div>

										<div class="row form-group">
											<div class="col-md-12">
												<!-- <label for="message">Message</label> -->
												<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>
											</div>
										</div>
										<div class="form-group">
											<input type="submit" value="Post Comment" class="btn btn-primary">
										</div>

									</form>
								</div>
							</div>
						</div>
					</div>

					<?php
				}
				?>
				</div>
				<div class="col-md-4">
					<aside class="sidebar">
						<div class="side animate-box">
							<h2>Categories</h2>
							<ul class="list">
								<li><a href="#">Bencana <i class="icon-check"></i> <span class="badge badge-default badge-pill">10</span></a></li>
								<li><a href="#">Kesehatan <i class="icon-check"></i> <span class="badge badge-default badge-pill">10</span></a></li>
								<li><a href="#">Pendidikan <i class="icon-check"></i> <span class="badge badge-default badge-pill">10</span></a></li>
								<li><a href="#">Penyaluran Donasi <i class="icon-check"></i> <span class="badge badge-default badge-pill">10</span></a></li>
							</ul>
						</div>

						<div class="side">
							<h2><span>Recent</span> Posts</h2>
							<div class="post">
								<a href="blog.html">
									<div class="blog-img" style="background-image: url(images/blog-1.jpg);"></div>
									<div class="desc">
										<span>Aug 20, 2017</span>
										<h3>Far far away, behind the word mountains, far from the countries</h3>
									</div>
								</a>
							</div>
							<div class="post">
								<a href="blog.html">
									<div class="blog-img" style="background-image: url(images/blog-2.jpg);"></div>
									<div class="desc">
										<span>Aug 20, 2017</span>
										<h3>Far far away, behind the word mountains, far from the countries</h3>
									</div>
								</a>
							</div>
							<div class="post">
								<a href="blog.html">
									<div class="blog-img" style="background-image: url(images/blog-3.jpg);"></div>
									<div class="desc">
										<span>Aug 20, 2017</span>
										<h3>Far far away, behind the word mountains, far from the countries</h3>
									</div>
								</a>
							</div>
						</div>
						<div class="side">
							<h2><span>Para</span>graph</h2>
							<p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen.</p>
						</div>
					</aside>
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
<?php
}
else{
	header('Location:index.php');
}
?>

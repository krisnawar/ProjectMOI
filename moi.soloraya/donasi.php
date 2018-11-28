<?php
session_start();
if(isset($_SESSION['login'])){	//if dengan kondisi session telah di set dengan key login
	$username = $_SESSION['login'];	//menentukan isi variabel username
	echo $username;
}

require_once("config.php");

if(isset($_POST['login'])){

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = md5($_POST["password"]);

    $sql = "SELECT * FROM user WHERE username=:username OR email=:email";
    $stmt = $conn->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":username" => $username,
        ":email" => $username
    );

    $stmt->execute($params);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);
echo 1;
    // jika user terdaftar
    if($user){
      echo 2;
        // verifikasi password
        if($password == $user["password"]){
        // if(true){
            // buat Session
            session_start();
            echo 3;
            $_SESSION["user"] = $user;
            // login sukses, alihkan ke halaman timeline
            header("Location: index.php");
        }
        // var_dump($_SESSION);exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>MOI Soloraya</title>

  <!-- Bootstrap -->
  <link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> -->
  <!-- Font Awesome -->
  <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Fancy Box -->
  <link href="plugins/fancybox/jquery.fancybox.pack.css" rel="stylesheet">
  <link href="plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">
  <link href="plugins/seiyria-bootstrap-slider/css/bootstrap-slider.min.css" rel="stylesheet">

  <!-- CUSTOM CSS -->
  <link href="css/style.css" rel="stylesheet">


</head>
<body>
<div id="wrapper" class="behind">
<header>
	<div class="container">
			<div class="col-md-6 col-sm-12 wow animated fadeInUp">
				<div class="intro-book">
					<img src="img/book1.png" alt="">
				</div>
			</div>
			<div class="col-md-6 intro-text hidden-sm hidden-xs wow animated fadeInUp">
				<h2 class="heading">Donasi Buku</h2>
				<h4 class="subheading">Contoh buku yang dibagikan.</h4>
				<p>Sumbangkan buku kalian untuk saudara kita.</p>
				<a href="#book" class="scrollto btn btn-white">About The Book</a>
				<button class="btn btn-green" href="#" data-toggle="modal" data-target="#modal-login">Sign In/Register</button>
			</div>
	</div>
</header>


    <!-- Modal login -->
    <div class="modal fade bs-modal-sm" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">

        <div class="modal-content">
          <div class="modal-header">

            <h5 class="modal-title" id="modal-label">Sign In</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="panel-heading">
                <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>
            </div>

            <div>
                <p>Belum punya akun? <a href="register.php">Daftar di sini</a></p>

                <form action="" method="POST">

                <div class="form-group">
                    <label for="username">Username</label>
                    <input class="form-control" type="text" name="username" placeholder="Username atau email" />
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input class="form-control" type="password" name="password" placeholder="Password" />
                </div>
            </div>
          </div>

          <div class="modal-footer">
            <input type="submit" class="btn btn-green btn-block" name="login" value="Masuk" />
          </form>

          </div>
        </div>
      </div>
    </div>

      <!-- JAVASCRIPTS -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
      <script src="plugins/bootstrap/js/popper.min.js"></script>
      <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
      <script src="plugins/fancybox/jquery.fancybox.pack.js"></script>
      <script src="js/scripts.js"></script>

</body>
</html>

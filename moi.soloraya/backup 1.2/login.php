<?php

if(isset($_SESSION['login'])){	//if dengan kondisi session telah di set dengan key login
  $username = $_SESSION['login'];	//menentukan isi variabel username
}
require_once("config.php");

if(isset($_POST['login'])){

  $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
  $password = md5($_POST["password"]);

  $sql = "SELECT * FROM user WHERE username=:username OR email=:email";
  $stmt = $koneksi->prepare($sql);

  // bind parameter ke query
  $params = array(
    ":username" => $username,
    ":email" => $username
  );

  $stmt->execute($params);

  $user = $stmt->fetch(PDO::FETCH_ASSOC);

  // jika user terdaftar
  if($user){
      // verifikasi password
    if($password == $user["password"]){
          // buat Session
      $_SESSION['login'] = $username;
          // login sukses, alihkan ke halaman timeline
      //header("refresh:2");
    }
  }
  else{
    echo "GAGAL";
  }
}
?>

<div class="modal fade bs-modal-sm" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">

    <div class="modal-content">
      <div class="modal-header">
        <div class="col-md-4">

          <h5 class="modal-title" id="modal-label">Sign In</h5>
        </div>
        <div class="col-md-8">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
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
          <input type="submit" class="btn btn-success btn-block" name="login" value="Masuk" />
        </form>
      </div>
    </div>
  </div>
</div>
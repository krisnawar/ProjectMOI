<!-- memngoneksikan php dengan database -->
<?php
$host = "localhost";
$uname = "root";
$password = "";
$databasename = "moi_soloraya";

$koneksi = mysqli_connect($host, $uname, $password, $databasename) or die("<h1>Koneksi ke Database Error</h1>" .mysqli_error());
?>

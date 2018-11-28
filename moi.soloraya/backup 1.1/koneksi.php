<!-- memngoneksikan php dengan database -->
<?php
$host = "localhost";
$username = "root";
$password = "";
$databasename = "moi_soloraya";

$koneksi = mysqli_connect($host, $username, $password, $databasename) or die("<h1>Koneksi ke Database Error</h1>" .mysqli_error());
?>
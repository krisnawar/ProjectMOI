<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "moi_soloraya";

try {
    //create PDO connection
    $koneksi = new PDO("mysql:host={$db_host};dbname={$db_name}", $db_user, $db_pass, array(
	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
));
} catch(PDOException $e) {
    //show error
    die("Terjadi masalah: " . $e->getMessage());
}
?>

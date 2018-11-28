<?php

session_start();

if(isset($_SESSION['login'])) {
	unset($_SESSION);
	session_destroy();
	header("refresh:1; url=index.php");
}

?>
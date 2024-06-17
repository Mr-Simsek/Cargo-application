<?php
session_start();
if(!isset($_SESSION['kullanici'])){
	echo "<b> Önce giriş yapmalısınız.</b>";
	header("location:giris.php");
	//header("Refresh: 3; url=giris.php");
	exit();
}
?>
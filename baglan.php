<?php
try {
	$baglan = new PDO(
		"mysql:host=localhost;dbname=kargo;charset=utf8","root","usbw");
		$baglan->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $hata) {
	die($hata->getMessage());
}
?>
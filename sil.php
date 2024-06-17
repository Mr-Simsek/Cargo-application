<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>PDO</title>

</head>
<body>
    Kargo Silme Sonucu
<?php
include("kullanici_kontrol.php");

if(!isset($_SESSION['kullanici'])){
    die();
    //header("location:giris.php");
}

include('baglan.php');

$id=$_GET["id"];
$sorgu = $baglan->prepare("DELETE FROM kargodetay WHERE id=?");
$sil = $sorgu->execute(array($id));

if($sorgu->rowCount() > 0) {
    echo "<b>Kargo başarıyla silindi</b>";
	header("location:index.php");
    //header("Refresh: 3; url=index.php");
} else {
    echo "<b>Bir sorun oluştu</b>";
}

$baglan = null;
?>
<?php
include("footer.php");
?>
</body>
</html>

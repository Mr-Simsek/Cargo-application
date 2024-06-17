<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>PDO</title>

</head>
<body>
    Ürün Güncelleme Sonucu
<?php
include("baglan.php");
$id = $_POST["id"];
$gondericiadi = $_POST["gondericiadi"];
$gidecegiadres = $_POST["gidecegiadres"];
$tutar = $_POST["tutar"];
$sorgu = $baglan->prepare("UPDATE kargodetay SET gondericiadi=?,gidecegiadres=?, tutar=?  WHERE id=?");
$sorgu->execute(array($gondericiadi,$gidecegiadres, $tutar, $id));
if ($sorgu->rowCount() > 0) {
    echo  $sorgu->rowCount() . " kayıt güncellendi. <b>Güncelleme başarılı</b>";
    header("location:index.php");
	//header("Refresh: 3; url=index.php");
    exit();
} else {
    echo $sorgu->rowCount() . " kayıt güncellendi. <b>Bir sorun oluştu</b>";
}
$baglan = null;
?>
    <a href="index.php">Kargoları listelemek için tıklayın...</a>

</body>
</html>

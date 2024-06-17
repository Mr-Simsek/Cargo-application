<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>PDO</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<?php
include("baglan.php");
include("menu.html");
$sorgu = $baglan->prepare("SELECT * from kargodetay");
$sorgu->execute();
?>
<?php
include("banner.php");
?>

<div class="container">

    <table class="table table-striped table-bordered mt-5">
        <thead>
            <tr class="text-center align-middle">
                <th>Id</th>
                <th>Gönderici Adı Soyadı</th>
                <th>Gideceği Adres</th>
                <th>Tutar</th>
                <th>Resim</th>
                <th>Tarih</th>
                <th>Düzelt</th>
                <th>Sil</th>
            </tr>
        </thead>
    <tbody>
    <?php
    foreach($sorgu as $satir)
    {
    ?>
    <tr class="text-center align-middle">
        <td><?php echo $satir["id"]; ?></td>
        <td><?php echo $satir["gondericiadi"]; ?></td>
        <td><?php echo $satir["gidecegiadres"]; ?></td>
        <td><?php echo $satir["tutar"]; ?></td>
        <td><img src="<?php echo $satir["resim"]; ?>" width="150" height="100"></td>
        <td><?php echo $satir["tarih"]; ?></td>
        <td><a href="guncelle_form.php?id=<?php echo $satir["id"]; ?>" class="btn btn-primary">Güncelle</a></td>
        <td><a href="sil.php?id=<?php echo $satir["id"]; ?>" class="btn btn-danger">Sil</a></td>
    </tr>
    <?php
    }
    $baglan = null;
    ?>
    </tbody>
    </table>
</div>

<?php
include("footer.php");
?>

</body>
</html>

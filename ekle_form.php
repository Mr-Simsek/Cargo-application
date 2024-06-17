<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Kullanıcı Giriş</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .container{
            max-width: 500px;
        }
    </style>
</head>
<body>

<?php
include("menu.html");
?>

<div class="container">
    <h2 class="mt-5 mb-3" style="font-weight:bold; color:#008000;">Kargo Ekleme</h2>
    <?php include("kullanici_kontrol.php"); ?>
    <form method="post" action="ekle.php" enctype="multipart/form-data" class="mt-3">
        <div class="mb-3">
            <label for="gondericiadi" class="form-label">Gönderici Adı</label>
            <input type="text" class="form-control" id="gondericiadi" name="gondericiadi">
        </div>
        <div class="mb-3">
            <label for="gidecegiadres" class="form-label">Gideceği Adres</label>
            <input type="text" class="form-control" id="gidecegiadres" name="gidecegiadres">
        </div>
        <div class="mb-3">
            <label for="resim" class="form-label">Kargo Resmi</label>
            <input type="file" class="form-control" id="resim" name="resim">
        </div>
        <div class="mb-3">
            <label for="tutar" class="form-label">Kargo Tutarı</label>
            <input type="text" class="form-control" id="tutar" name="tutar">
        </div>
        <button type="submit" class="btn btn-primary">Kargo Ekle</button>
		<a href="index.php" class="btn btn-secondary float-end">Geri Dön</a>
    </form>
</div>
<?php
include("footer.php");
?>
</body>
</html>

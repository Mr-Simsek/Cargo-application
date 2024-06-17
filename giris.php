<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Kullanıcı Giriş</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<style>
	.container{
		max-width:500px;
	}
	</style>
</head>
<body>
<div class="container">
    <h2 class="mt-5 mb-3" style="font-weight:bold; color:#008000;">Kargo Gönderim Sistemi</h2>
    <form method="post" action="giris.php" class="mt-3">
        <div class="mb-3">
            <label for="kullanici" class="form-label">Kullanıcı Adı</label>
            <input type="text" class="form-control" id="kullanici" name="kullanici">
        </div>
        <div class="mb-3">
            <label for="sifre" class="form-label">Şifre</label>
            <input type="password" class="form-control" id="sifre" name="sifre">
        </div>
        <button type="submit" class="btn btn-primary">Giriş</button>
    </form>
    <?php
    session_start();
    if ($_POST) {
        include('baglan.php');
        $kullanici = $_POST["kullanici"];
        $sifre = $_POST["sifre"];
        $sorgu = $baglan->prepare("SELECT * FROM kullanicilar WHERE kullanici=? AND sifre=?");
        $sorgu->execute(array($kullanici, $sifre));
        if ($sorgu->rowCount() > 0) {
            echo "<p class='mt-3 alert alert-success'>Giriş Başarılı</p>";
            $_SESSION['kullanici'] = $kullanici;
            header("location:index.php");
            exit();
        } else {
            echo "<p class='mt-3 alert alert-warning'>Giriş Başarısız</p>";
        }
        $baglan = null;
    }
    ?>
	
</div>
</body>
</html>

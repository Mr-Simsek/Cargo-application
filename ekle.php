<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Ürün Ekleme Sonucu</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <?php
    date_default_timezone_set('Europe/Istanbul');
    $gondericiadi = $_POST["gondericiadi"];
    $gidecegiadres = $_POST["gidecegiadres"];
    $tutar = $_POST["tutar"];
    $tarih = date('Y-m-d H:i:s');
    $yukleme = "resimler/" . ($_FILES["resim"]["name"]);
    if ($_FILES["resim"]["size"] > 1024 * 2024 * 2) {
        echo '<div class="alert alert-danger" role="alert">Resim boyutu büyük.</div>';
        //header("Refresh: 3; url=index.php");
		header("location:index.php");
    } else {
        $uzanti = pathinfo($_FILES["resim"]["name"], PATHINFO_EXTENSION);
        if ($uzanti == "jpg" || $uzanti == "jpeg" || $uzanti == "png" || $uzanti == "gif") {
            move_uploaded_file($_FILES["resim"]["tmp_name"], $yukleme);

            include('baglan.php');
            $sorgu = $baglan->prepare("INSERT INTO kargodetay (gondericiadi, gidecegiadres, tutar, resim) VALUES(?, ?, ?, ?)");
            $ekle = $sorgu->execute(array($gondericiadi, $gidecegiadres, $tutar, $yukleme));

            if ($ekle) {
                echo '<div class="alert alert-success" role="alert"><b>Kargo başarıyla eklendi</b></div>';
                //header("Refresh: 3; url=index.php");
				header("location:index.php");
            } else {
                echo '<div class="alert alert-danger" role="alert"><b>Bir sorun oluştu</b></div>';
            }
            $baglan = null;
        } else {
            echo '<div class="alert alert-danger" role="alert">Dosyanız Resim formatında değil</div>';
        }
    }
    ?>

    <h2>Kargo Detayları</h2>
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Gönderici Adı</th>
                <th scope="col">Gideceği Adres</th>
                <th scope="col">Tutar</th>
                <th scope="col">Resim</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include('baglan.php');
            $sorgu = $baglan->query("SELECT * FROM kargodetay");
            while ($row = $sorgu->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['gondericiadi']) . "</td>";
                echo "<td>" . htmlspecialchars($row['gidecegiadres']) . "</td>";
                echo "<td>" . htmlspecialchars($row['tutar']) . "</td>";
                echo "<td><img src='" . htmlspecialchars($row['resim']) . "' alt='Resim' width='100'></td>";
                echo "</tr>";
            }
            $baglan = null;
            ?>
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<?php
include("footer.php");
?>
</body>
</html>

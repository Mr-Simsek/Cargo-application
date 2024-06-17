<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Oturum Sonlandırma</title>
    <style>
        .message {
			align-items: center;
            font-size: 24px; /* Yazı boyutu */
            font-weight: bold; /* Kalın yazı */
            color: #28a745; /* Yeşil renk */
            text-align: center; /* Ortala */
        }
    </style>
</head>
<body>
    <div class="message">
        Oturum Sonlandırıldı. Giriş sayfasına yönlendiriliyorsunuz
    </div>
    <?php
    header("Refresh: 3; url=giris.php");
    ?>

</body>
</html>

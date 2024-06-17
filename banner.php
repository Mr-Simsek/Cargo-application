<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Banner</title>
    <style>
        .banner {
            background-color: #3498db; /* Mavi arka plan */
            color: white; /* Beyaz yazı rengi */
            padding: 20px;
            text-align: center;
            font-family: Arial, sans-serif;
        }
        .banner h1 {
            margin: 0;
            font-size: 2.5em;
        }
        .banner p {
            margin: 10px 0 0;
            font-size: 1.2em;
        }
    </style>
</head>
<body>
    <?php
    $bannerTitle = "WEB SİTEME HOŞGELDİNİZ";
    $bannerSubtitle = "KARGO GÖNDERİM SİSTEMİ";
    ?>

    <div class="banner">
        <h1><?php echo $bannerTitle; ?></h1>
        <p><?php echo $bannerSubtitle; ?></p>
    </div>
</body>
</html>

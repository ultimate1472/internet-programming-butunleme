<?php
    session_start();
    include("ayar.php");

    if ($_SESSION["yönetici"] != sha1(md5("var")) || $_COOKIE["yönetici"] != "msb") {
        header("Location: cikis.php");
    }

?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Yönetim Paneli </title>
</head>
<body>

<div style="text-align:center;">
 <a href="adminyönetimi.php">ANA SAYFA</a> - <a href="liste.php"> KULLANICI LİSTELE</a> -<a href="katagori.php"> KATAGORİ OLUŞTUR</a> -<a href="özelliklersorgu.php">ÖZELLİKLERİ</a> - <a href="hakkimizdasorgu.php">HAKKIMIZDA</a>  - <a href="cikis.php" onclick="if (!confirm('Çıkış Yapmak İstediğinize Emin misiniz?')) return false;">ÇIKIŞ</a>
        <br><hr><br><br>

    <h2 style="text-align:center;"> Menüden Seçim Yapınız </h2>

    

</body>
</html>
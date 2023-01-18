<?php
    session_start();
    include("ayar.php");

    if ($_SESSION["yönetici"] != sha1(md5("var")) || $_COOKIE["yönetici"] != "msb") {
        header("Location: cikis.php");
    }

    if ($_POST) {
        $hakkımızda = $_POST["hakkımızda"];
        $sorgu = $baglan->query("delete from hakkımızda");
        $sorgu = $baglan->query("insert into hakkımızda (hakkımızda) values ('$hakkımızda')");
        echo "<script> window.location.href='hakkimizdasorgu.php'; </script>";
    }

    $sorgu = $baglan->query("select * from hakkımızda");
    $satir = $sorgu->fetch_object();

?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Yönetim Paneli Hakkımızda</title>
</head>
<body style="text-align:center;">

<div style="text-align:center;">
 <a href="adminyönetimi.php">ANA SAYFA</a> - <a href="liste.php"> KULLANICI LİSTELE</a> -<a href="katagori.php"> KATAGORİ OLUŞTUR</a> -<a href="özelliklersorgu.php">ÖZELLİKLERİ</a> - <a href="hakkimizdasorgu.php">HAKKIMIZDA</a>  - <a href="cikis.php" onclick="if (!confirm('Çıkış Yapmak İstediğinize Emin misiniz?')) return false;">ÇIKIŞ</a>
        <br><hr><br><br>
    </div>

    <form action="" method="post">
        <b>İçerik:</b><br><br>
        <textarea style="width:80%;height:300px;" name="hakkımızda"><?php echo $satir->hakkımızda; ?></textarea><br><br>
        <input type="submit" value="Kaydet">
    </form>

    

</body>
</html>
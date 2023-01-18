<?php
include "db.php";
?>
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
    <title>Kayıt Listesi </title>
</head>
<a href="arama.php">arama yap</a> 
<body>
<div style="text-align:center;">
 <a href="adminyönetimi.php">ANA SAYFA</a> - <a href="liste.php"> KULLANICI LİSTELE</a> -<a href="katagori.php"> KATAGORİ OLUŞTUR</a> -<a href="özelliklersorgu.php">ÖZELLİKLERİ</a> - <a href="hakkimizdasorgu.php">HAKKIMIZDA</a>  - <a href="cikis.php" onclick="if (!confirm('Çıkış Yapmak İstediğinize Emin misiniz?')) return false;">ÇIKIŞ</a>
        <br><hr><br><br>
    </div>
    <?php









        //$baglan = new mysqli("localhost","root","","db");
      //  $baglan->set_charset("utf8");

        $sorgu = $conn->query("SELECT * from users order by id asc");

        echo "<table width='100%' border='1'>
        <tr align='center'>
        <th>id</th>
        <th>kullanıcı adı</th>
        <th>isim soyisim</th>
        </tr>";
        
        while ($satir = $sorgu->fetch_object()) {
            echo "<tr align='center'>
            <td> $satir->id </td>
            <td> $satir->user_name </td>
            <td> $satir->name </td>
            <td>  <a href='sil.php?id=$satir->id'>sil</a> </td>
            </tr>";
        }

        echo "</table>";

        $toplam = $sorgu->num_rows;

        $sorgu->free_result();

        $conn->close();

        echo "<br><br>Toplam $toplam Kayıt Bulundu.";
    ?>
</body>
</html>
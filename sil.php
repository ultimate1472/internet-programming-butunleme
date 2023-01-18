<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Kayıt Silme </title>
</head>
<body>
    <div style="text-align:center;">
        <a href="index.html">ANA SAYFA</a> - <a href="liste.php">KAYIT LİSTESİ</a>
        <br><hr><br><br>
    </div>
    <?php
        $baglan = new mysqli("localhost","root","","db");
        $baglan->set_charset("utf8");

        $kayitno = $_GET["id"];

        $sorgu= $baglan->query("delete from users where id=$kayitno");

        if ($sorgu) {
            echo "<script>
            alert('Kayıt Silindi!');
            window.location.href = 'liste.php';
            </script>";
        } else {
            echo "Kayıt Silinemedi.";
        }
    ?>
</body>
</html>
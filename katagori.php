
<?php
    session_start();
    include("ayar.php");

    if ($_SESSION["yönetici"] != sha1(md5("var")) || $_COOKIE["yönetici"] != "msb") {
        header("Location: cikis.php");
    }
    ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Kategori / Alt Kategori İşlemleri</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
<div style="text-align:center;">
 <a href="adminyönetimi.php">ANA SAYFA</a> - <a href="liste.php"> KULLANICI LİSTELE</a> -<a href="katagori.php"> KATAGORİ OLUŞTUR</a> -<a href="özelliklersorgu.php">ÖZELLİKLERİ</a> - <a href="hakkimizdasorgu.php">HAKKIMIZDA</a>  - <a href="cikis.php" onclick="if (!confirm('Çıkış Yapmak İstediğinize Emin misiniz?')) return false;">ÇIKIŞ</a>
        <br><hr><br><br>
<?php 
include("lib/aa.php");
include("lib/db.php");

$category_list = $db->query("SELECT * from category", PDO::FETCH_OBJ)->fetchAll();
 ?>
<div class="container">
	<h3 class="text-center">Kategori / Alt Kategori İşlemleri</h3>
	<div class="row">
		<div class="col-md-6 well">
			<h4 class="text-center">Kategori Ekleme</h4>
			<hr>
			<form action="lib/category_db.php" method="post">
				<div class="form-group">
					<label>Kategori Adı</label>
					<input type="text" class="form-control" name="title">
				</div>
				<div class="form-group">
					<label>Varsa Üst Kategori</label>
					<select name="parent_id" class="form-control">
						<option selected value="0">Yok</option>
						<?php 
                            foreach ($category_list as $category) { ?>
                            	<option  value="<?php echo $category->id; ?>"><?php echo $category->title; ?></option>                             
                            <?php } ?>
					</select>
				</div>
				<button type="submit" class="btn btn-primary btn-sm">Kaydet</button>
				<button type="reset" class="btn btn-danger btn-sm">İptal</button>
			</form>
			</div>
			<div class="col-md-6">
				<div class="col-md-11 well">
					<h4 class="text-center">Kategori Hiyerarşisi</h4>
					<hr>
					<?php drawElements(buildTree($category_list));  ?>
				</div>
			</div>
		</div>	
</div>
</body>
</html>
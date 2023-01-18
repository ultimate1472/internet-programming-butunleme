<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
<?php 
include("lib/aa.php");
include("lib/db.php");

$category_list = $db->query("SELECT * from category", PDO::FETCH_OBJ)->fetchAll();
 ?>
<div class="container">
			<div class="col-md-6">
				<div class="col-md-11 well">
					<h4 class="text-center">Kategoriler</h4>
					<hr>
					<?php drawElements(buildTree($category_list));  ?>
				</div>
			</div>
		</div>	
</div>
</body>
</html>
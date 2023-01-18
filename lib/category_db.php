<?php 
include("db.php") ;
if (isset($_POST["title"]) && isset($_POST["parent_id"])) {
	 $query = $db->prepare("INSERT INTO category SET title = :title, parent_id = :parent_id");
	 $insert = $query->execute(
      array(

         "title"  => $_POST["title"],
         "parent_id"  => $_POST["parent_id"]
      )
    );
    if ($insert) {
    	header("Location:../katagori.php");
    }
    else {
    	echo "Ekleme Sırasında bir problem oluştı!!!";
    }
}
 else{
 	echo "Aradığınız sayfa bulunamadı!!!"; 	
    }
 ?>
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

<?php 

try {
	$baglan=new PDO("mysql:host=localhost;dbname=db;charset=utf8","root","");
	
} catch (PDOException $e) {
	echo $e->getMessage();
}
 ?>
<a href="liste.php"> KULLANICI LİSTELE</a>
<form action="" methot="GET">

 <input type="text" name="kelime" />
 <br>
 <input type="submit" value="Arama yap" />
<form>
<hr>
<?php
 if($_GET){

 $kelime=$_GET['kelime'];
 
 if(!$kelime){
  echo "Arama yapmak için birşey yazım";
 }else{
 
 $sorgu=$baglan->prepare("SELECT * FROM users WHERE name LIKE :baslik");
 $sorgu->execute(array(':baslik' => '%'.$kelime.'%'));

 if($sorgu->rowCount()){
  
  echo $kelime."Kelimesine ait(".$sorgu->rowCount().") adet sonuç bulundu";
 
  foreach($sorgu as $row){
   
   echo "<br>";

 }

 }else{
  echo "Aranan kelimeye ait bir veri bulunmadı";
 }  
 
 }


    }

?>


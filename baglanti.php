<?php
/*$host="localhost";
$kullanici="root";
$sifre="root";
$veritabani="susipor";
$tablo="susipor";
$baglanti=mysqli_connect($host,$kullanici,$sifre);
if($baglanti)
{
    echo"bağlantı sağlantı";

}
else
{

    echo"bağlantı sağlanmadı";
}
@mysqli_select_db($baglanti,$veritabani) or die("veri tabanına bağlanılmadı");*/

/*$host="localhost";
$kullanici="root";
$password="";
$veritabani="üyelik";

$baglanti=mysqli_connect($host,$kullanici,$password,$veritabani);
mysqli_set_charset($baglanti,"UTF8");*/
$baglanti = new mysqli("localhost","root","","üyelik");
$baglanti->set_charset("utf8");
?>
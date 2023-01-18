<?php

session_start();
session_destroy();
setcookie("yönetici","",time()-1);
header("location:yönetici giris.php");

?>
<?php

$dbhost  = "localhost";   
$dbkullanici = "root";  
$dbsifre  = "";
$dbadi = "netflix"; 
$baglan = mysqli_connect($dbhost,$dbkullanici,$dbsifre,$dbadi);

if(!$baglan)
  { ('MYSQL Bağlanamıyor..!!');}  
else
  { echo "bağlantı tamamdır"; }


//mysqli_set_charset("utf8");
?>
<html>
<head>
<title>Mehmet</title>
</head>
<body>

<?php 

$bugun_gelenler = 63;
$dun_gelenler = 21;

$toplam = $bugun_gelenler + $dun_gelenler;
$cikarma = $bugun_gelenler - $dun_gelenler;
$carpma = $bugun_gelenler * $dun_gelenler;
$bolme = $bugun_gelenler / $dun_gelenler;


$urunfiyat = 2500;
$kdv = 18;
$kdv_bul = ($urunfiyat * $kdv) /100;
$urunkdvli = $urunfiyat + $kdv_bul;

$sayimiz = 2;
$sayimiz += 2;

$yas = 16;
$cinsiyet = "Bay";
$kullanici_adi = "Mehmsadet";
$sifre = "kanbaz";

$secim = "C";
?>


<h1>Toplam : <?php echo $toplam ?></h1>
<h1>Çıkarma :<?php echo $cikarma ?></h1>
<h1>Çarpma : <?php echo $carpma ?></h1>
<h1>Bölme : <?php echo $bolme ?></h1>
<hr>
<h1>Ürün Fiyatı : <?php echo $urunfiyat ?></h1>
<h1>Ürünün Kdv'li Hali : <?php echo $urunkdvli ?></h1>
<hr>
<h1>Artırma : <?php echo $sayimiz ?></h1>
<?php

if($kullanici_adi=="Mehmet" && $sifre == "kanbaz"){ // || veya işareti , && ve işareti
    echo "Kullanıcı bilgileri doğru";
}
else if($kullanici_adi=="Mehmet" && $sifre != "kanbaz" ){
    echo "Kullanıcı Adı doğru ama şifre yanlış";
}
else if($kullanici_adi !="Mehmet" && $sifre == "kanbaz"){
    echo "Şifre doğru kullanıcı adı yanlış";
}
else{
    echo "kullanıcı bilgilerinin tümü yanlış!";
}  







echo "<hr>";
if($cinsiyet == "Bayan"){
    echo "Bayan olduğu için Askere gidemez";
}    
else if($yas>18 && $cinsiyet == "Bay"){
    echo "Bay vev Yaşı 18 den büyük olduğu için Askere Gidebilir";
}
else if($cinsiyet == "Bay" && $yas<18){
    echo "Cinsiyet Bay ama yaşı 18 den küçük olduğu için askere gidemez!";
}
else{
    echo "Askere Gidemez";
}

echo "<br>";

switch($secim){
    case "A":
        echo "Görüşmeyi Sonlandırın";
        break;
    case "B":
        echo "Müşteri temsilcisine bağlanıyorsunuz!";
        break;
    default:
        echo "Yanlış tuşlama yaptınız";
}

switch($secim){
    case "A":
        echo "Seçim a ";
        break;
    case "B":
        echo "Seçim b";
        break;
    case "C":
        echo "Seçim c";
        break;
    default:
        echo "Seçimler yanlış";
}

$yenisayimiz = 1;
while($yenisayimiz<=10){
    echo "MEHMET KANBAZ<br>";
    $yenisayimiz++;
}

for($yenidegisken = 1; $yenidegisken<=10; $yenidegisken++){
    echo $yenidegisken.". Mezopotamya Living Lab<br>";
}

    
?>
</body>
</html>
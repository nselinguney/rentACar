<?php
// Start the session
session_start();
?>
<?php 

$con = mysqli_connect("localhost:3308","root","","rentacar");

$aracAdi=$_POST["aracAdi"];
$aracSinifi=$_POST["aracSinifi"];
$yakitTipi=$_POST["yakitTipi"];
$vitesTipi=$_POST["vitesTipi"];
$aracFotograf=$_POST["aracFotograf"];

$kaydet = mysqli_query($con,"insert into arabalar (id, arac_adi, arac_sinifi, yakit_tipi, vites_tipi, arac_fotograf) values 
(NULL, '$aracAdi','$aracSinifi','$yakitTipi','$vitesTipi','$aracFotograf')") or die("Hata: kayıt işlemi gerçekleşemedi.");

?>
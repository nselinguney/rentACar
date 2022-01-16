<?php

    $carId = $_POST["carId"];
    $konum = $_POST["konum"];
    $aracAdi = $_POST["aracAdi"];
    $aracSinifi = $_POST["aracSinifi"];
    $yakitTipi = $_POST["yakitTipi"];
    $vitesTipi = $_POST["vitesTipi"];
    $gunlukUcret = $_POST["gunlukUcret"];
    $alisTarihi = $_POST["alisTarihi"];
    $iadeTarihi = $_POST["iadeTarihi"];

    $con=mysqli_connect("localhost:3308", "root", "", "rentacar");
    if(isset($_POST["satis"])) {
        $kaydet = mysqli_query($con,"insert into kiralanmis_arabalar (id, konum, alis_tarihi, iade_tarihi, vites_tipi, yakit_tipi, arac_sinifi, arac_adi, gunluk_ucret) values 
        ('$carId', '$konum','$alisTarihi', '$iadeTarihi', '$vitesTipi','$yakitTipi', '$aracSinifi','$aracAdi', '$gunlukUcret')") or die("Hata: kayıt işlemi gerçekleşemedi.");
        }
?>
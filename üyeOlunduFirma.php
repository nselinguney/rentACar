<?php
// Start the session
session_start();
ob_start();
?>

<html>

<head>
  <title>CSS Website Layout</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <style>
    body {
      margin: 0;
    }

    /* Style the header */
    .header {
      background-color: #000000;
      padding: 10px;
      text-align: center;
    }

    /* Create three unequal columns that floats next to each other */
    .column {
      float: left;
      padding: 10px;
    }

    /* Left and right column */
    .column.side {
      width: 25%;
    }

    /* Middle column */
    .column.middle {
      width: 50%;
    }

    /* Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }

    .topnav a {
      float: left;
      display: block;
      color: #f2f2f2;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    /* Change color on hover */
    .topnav a:hover {
      background-color: #ddd;
      color: black;
    }


    .form-style-3 {
      max-width: 450px;
      font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
    }

    .form-style-3 label {
      display: block;
      margin-bottom: 10px;
    }

    .form-style-3 label>span {
      float: left;
      width: 300px;
      color: black;
      font-weight: bold;
      font-size: 20px;
      text-shadow: 1px 1px 1px #fff;
    }

    .form-style-3 fieldset {
      border-radius: 0px;
      -webkit-border-radius: 0px;
      -moz-border-radius: 0px;
      margin: 0px 0px 10px 0px;
      border: 1px solid black;
      padding: 20px;
      width: 1000px;
      height: 500px;
      background: white;
      box-shadow: inset 0px 0px 15px #FFE5E5;
      -moz-box-shadow: inset 0px 0px 15px #FFE5E5;
      -webkit-box-shadow: inset 0px 0px 15px #FFE5E5;
    }

    .form-style-3 fieldset legend {
      color: black;
      border-top: 1px solid black;
      border-left: 1px solid black;
      border-right: 1px solid black;
      border-radius: 5px 5px 0px 0px;
      -webkit-border-radius: 5px 5px 0px 0px;
      -moz-border-radius: 5px 5px 0px 0px;
      background: white;
      padding: 0px 8px 3px 8px;
      box-shadow: -0px -1px 2px #F1F1F1;
      -moz-box-shadow: -0px -1px 2px #F1F1F1;
      -webkit-box-shadow: -0px -1px 2px #F1F1F1;
      font-weight: normal;
      font-size: 20px;
    }


    .form-style-3 input[type=text],
    .form-style-3 input[type=date],
    .form-style-3 input[type=datetime],
    .form-style-3 input[type=number],
    .form-style-3 input[type=search],
    .form-style-3 input[type=time],
    .form-style-3 input[type=url],
    .form-style-3 input[type=email],
    .form-style-3 select,
    .form-style-3 textarea {
      border-radius: 3px;
      -webkit-border-radius: 3px;
      -moz-border-radius: 3px;
      border: 1px solid black;
      outline: none;
      color: black;
      padding: 5px 8px 5px 8px;
      box-shadow: inset 1px 1px 4px black;
      -moz-box-shadow: inset 1px 1px 4px black;
      -webkit-box-shadow: inset 1px 1px 4px black;
      background: white;
      width: 50%;
    }

    .form-style-3 input[type=submit],
    .form-style-3 input[type=button] {
      background: black;
      border: 1px solid gray;
      padding: 15px 30px 15px 30px;
      color: white;
      box-shadow: inset -1px -1px 3px gray;
      -moz-box-shadow: inset -1px -1px 3px gray;
      -webkit-box-shadow: inset -1px -1px 3px gray;
      border-radius: 3px;
      border-radius: 3px;
      -webkit-border-radius: 3px;
      -moz-border-radius: 3px;
      font-weight: bold;
      float: right;
      margin-top: 50px;
      margin-right: 140px;
    }

    .required {
      color: red;
      font-weight: normal;
    }

    .header-text {
      color: white;
      size: 15px;
    }

    .user_img {

      margin: left: 100px;
      width: 30px;
      height: 30px;
    }

    .header_logout {
      margin-left: 1400px;
    }

    /* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
  </style>

</head>

<body>

  <div class="header">
    <div class="header-text">

      <div class="header_logout">
        <?php
       echo "
        <a href='logout.php'><img src='image2.png' class='user_img'></a>
        ";
        ?>
      </div>
      <h1 style="font-size:25px">Hoş Geldiniz</h1>

    </div>
  </div>

  <div class="row">
    <div class="column side">

    </div>

    <div class="column middle">
      <div class="form-style-3">
        <form  action="üyeOlunduFirma.php" method="post" enctype="multipart/form-data">
          <fieldset>
            <legend>Araba Özellikleri</legend>

                <label for="field5"><span>Konum</span>
                  <input type="text" name="konum"><br><br></label>

                <label for="field6"><span>Uygun Olduğu Tarih Aralıkları</span>
                  <input type="date" name="tarih1">
                  <input type="date" name="tarih2"><br><br></label>

                <label for="field"><span>Araç Adı, Markası ve Modeli</span>
                  <input type="text" name="aracAdi"><br><br></label>

                <label for="field6"><span>Günlük Kiralama Ücreti </span>
                  <input type="text" name="gunlukUcret"><br><br></label>

                <label for="field1"><span>Araç Sınıfı</span><br>
                  Ekonomik<input type="radio" id="aracSinifi" name="aracSinifi" value="Ekonomik">
                  Suv<input type="radio" id="aracSinifi2" name="aracSinifi" value="Suv">
                  Lüks<input type="radio" id="aracSinifi3" name="aracSinifi" value="Lüks">
                  Orta<input type="radio" id="aracSinifi4" name="aracSinifi" value="Orta">
                  Üst<input type="radio" id="aracSinifi5" name="aracSinifi" value="Üst"></label>

                <label for="field2"><span>Yakıt Tipi</span><br>
                  Benzin<input type="radio" id="yakitTipi" name="yakitTipi" value="Benzin">
                  Dizel<input type="radio" id="yakitTipi2" name="yakitTipi" value="Dizel">
                  Hybrid<input type="radio" id="yakitTipi3" name="yakitTipi" value="Hybrid">
                  Elektrikli<input type="radio" id="yakitTipi4" name="yakitTipi" value="Elektrikli"></label>

                <label for="field3"><span>Vites Tipi</span><br>
                  Otomatik<input type="radio" id="vitesTipi" name="vitesTipi" value="Otomatik">
                  Manüel<input type="radio" id="vitesTipi2" name="vitesTipi" value="Manüel"><br></label>

                <label for="field4"><span>Araç Fotoğrafı</span>
                  <input type="file" name="foto" value=""/>

                <input type="submit" name="submit" value="Kaydet" /></label>
              
              
                </fieldset>
                </form>
                </div>
                        <?php
                         
                          if(isset($_POST["submit"])) {
                            
                            
                            $con=mysqli_connect("localhost:3308", "root", "", "rentacar");
                           

                            if(!empty($_FILES["foto"]["name"])) {
                                                            
                              //$sql = mysqli_query($con,"INSERT into arabalar(arac_fotografi) VALUES ()'".$imgContent."')");
                              $fileName = basename($_FILES["foto"]["name"]);
                              $fileType = pathinfo($fileName,PATHINFO_EXTENSION);
                              
                              $allowTypes = array('jpg','png','jpeg','gif');

                              if(in_array($fileType, $allowTypes)) {

                                $image = $_FILES['foto']['tmp_name'];
                                $imgContent = addslashes(file_get_contents($image));

                              }
                              $konum = $_POST["konum"];
                              $aracAdi = $_POST["aracAdi"];
                              $aracSinifi = $_POST["aracSinifi"];
                              $yakitTipi = $_POST["yakitTipi"];
                              $vitesTipi = $_POST["vitesTipi"];
                              $gunlukUcret = $_POST["gunlukUcret"];
                              $alisTarihi = $_POST["tarih1"];
                              $iadeTarihi = $_POST["tarih2"];


                              $kaydet = mysqli_query($con,"insert into arabalar (id, konum, alis_tarihi, iade_tarihi, vites_tipi, yakit_tipi, arac_sinifi, arac_adi, arac_fotograf, gunluk_ucret) values 
                              (NULL, '$konum','$alisTarihi', '$iadeTarihi', '$vitesTipi','$yakitTipi', '$aracSinifi','$aracAdi','".$imgContent."', '$gunlukUcret')") or die("Hata: kayıt işlemi gerçekleşemedi.");
                              echo "Kayıt başarıyla gerçekleşti.";
                              
                            }
                            
                          }

                        ?>
    </div>

  </div>
</body>

</html>

<?php 
  ob_end_flush();
?>
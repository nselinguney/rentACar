<?php
// Start the session
session_start();
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
  background-color: #A9A9A9;
  text-align: right;
  padding: 20px;
}

.header-text {
  margin-left: 200px;
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

.button {
  border: none;
  color: white;
  padding: 10px 15px;
  text-align: center;
  text-decoration: none;
  font-size: 16px;
  margin: 4px 2px;
  margin-left: 1000px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button {
  background-color: white;
  color: black;
  border: 2px solid #8B0000;
}

.button:hover {
  background-color: #8B0000;
  color: white;
}

.user-info {

  font-family: Century Gothic;
  font-size: 20px;
  
}

.user_img {
  
  width:30px;
  height:30px;
}

/*---------------------------------------------------- */
details {
    border: 1px solid #aaa;
    border-radius: 4px;
    padding: .75em .75em 0;
}

summary {
    font-weight: bold;
    margin: -.75em -.75em 0;
    padding: .75em;
    background-color: black;
    color: white;
}

details[open] {
    padding: .75em;
}

details[open] summary {
    border-bottom: 1px solid #aaa;
    margin-bottom: .75em;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
.column-side input[type=submit]
{
      background: white;
      border: 1px solid gray;
      padding: 10px 25px 10px 25px;
      color: black;
      box-shadow: inset -1px -1px 3px gray;
      -moz-box-shadow: inset -1px -1px 3px gray;
      -webkit-box-shadow: inset -1px -1px 3px gray;
      border-radius: 3px;
      border-radius: 3px;
      -webkit-border-radius: 3px;
      -moz-border-radius: 3px;
      font-weight: bold;
      float: right;
    
}

.kirala input[type=submit]
{
      background: black;
      border: 1px solid gray;
      padding: 10px 25px 10px 25px;
      color: white;
      box-shadow: inset -1px -1px 3px gray;
      -moz-box-shadow: inset -1px -1px 3px gray;
      -webkit-box-shadow: inset -1px -1px 3px gray;
      border-radius: 3px;
      border-radius: 3px;
      -webkit-border-radius: 3px;
      -moz-border-radius: 3px;
      font-weight: bold;
      float: left;
    
}
</style>

</head>

<body>

<div class="header">
  <div class="header-text">
       <?php

      $adsoyad = $_SESSION['AD']." ".$_SESSION['SOYAD'];
      echo "
      
          
          <a class='user-info'> $adsoyad </a>

        <a href='logout.php'><img src='image.png' class='user_img'></a>
      ";
      ?>
      
      
</div>
</div>

<div class="row">
  <div class="column side">
  <form name="konum" action="üyeOlunduBireysel.php" method="post">
  
        <details>
          <summary>Konum</summary>
          <input type="text" name="konum"><br><br></label>
        </details>


        <details>
          <summary>Tarih</summary>
          Alış Tarihi: <input type="date" name="alisTarihi"><br><br>
          İade Tarihi: <input type="date" name="iadeTarihi"><br><br>
        </details>

        <details>
          <summary>Günlük Kiralama Ücreti</summary>
          <input type="text" name="kiralamaUcreti"><br><br></label>
        </details>

        <details>
          <summary>Araç Sınıfı</summary>

          Ekonomik<input type="radio" id="aracSinifi" name="aracSinifi" value="ekonomik">
          Suv<input type="radio" id="aracSinifi2" name="aracSinifi" value="Suv">
          Lüks<input type="radio" id="aracSinifi3" name="aracSinifi" value="Lüks">
          Orta<input type="radio" id="aracSinifi4" name="aracSinifi" value="Orta">
          Üst<input type="radio" id="aracSinifi5" name="aracSinifi" value="Üst">

        </details>

        <details>
          <summary>Yakıt Tipi</summary>

          Benzin<input type="radio" id="yakitTipi" name="yakitTipi" value="Benzin">
          Dizel<input type="radio" id="yakitTipi2" name="yakitTipi" value="Dizel">
          Hybrid<input type="radio" id="yakitTipi3" name="yakitTipi" value="Hybrid">
          Elektrikli<input type="radio" id="yakitTipi4" name="yakitTipi" value="Elektrikli">

        </details>

        <details>
          <summary>Vites Tipi</summary>

          Otomatik<input type="radio" id="vitesTipi" name="vitesTipi" value="Otomatik">
          Manüel<input type="radio" id="vitesTipi2" name="vitesTipi" value="Manüel">
          
        </details>
        <div class="column-side">
        <input type="submit" name="submit" value="Filtrele" />
        </div>
  </form>
  </div>
  
  <div class="column middle">
    
    <?php
      if(isset($_POST["submit"])) {
          
          $konum = $_POST["konum"];
          $alisTarih = $_POST["alisTarihi"];
          $iadeTarihi = $_POST["iadeTarihi"];
          $kiralamaUcreti = $_POST["kiralamaUcreti"];
          $aracSinifi = $_POST["aracSinifi"];
          $yakitTipi = $_POST["yakitTipi"];
          $vitesTipi = $_POST["vitesTipi"];

          $con=mysqli_connect("localhost:3308", "root", "", "rentacar");

          $query = mysqli_query($con, "SELECT * FROM arabalar where konum='{$konum}' AND arac_sinifi='{$aracSinifi}' AND yakit_tipi='{$yakitTipi}' AND alis_tarihi < '{$alisTarih}' 
          AND iade_tarihi > '{$iadeTarihi}' AND gunluk_ucret<'{$kiralamaUcreti}' || gunluk_ucret='{$kiralamaUcreti}' ");

          while($araba = mysqli_fetch_assoc($query)) {

            $available = 1;
            $available_query = mysqli_query($con, "SELECT * FROM kiralanmis_arabalar WHERE id='{$araba['id']}'");
            while($is_available = mysqli_fetch_assoc($available_query))
            {
                if(($alisTarih >= $is_available['alis_tarihi'] && $alisTarih <= $is_available['iade_tarihi']) || ($iadeTarihi >= $is_available['alis_tarihi'] && $iadeTarihi <= $is_available['iade_tarihi']))
                {
                  $available = 0;
                }
            }
            if($available == 1)
            {
                echo "
                <div class = 'arabalar'>
          
                <img src='data:image/jpg;charset=utf8;base64,".base64_encode($araba['arac_fotograf'])."'/><br>
                ".$araba['arac_adi']."
                <div class='kirala'>
                <form name='kirala' method='post' action='kiraladi.php'>
                <input type='hidden' name='carId' value='".$araba['id']."'>
                <input type='submit' name='sec' value='Seç'>
                </form>
                
                </div><br><br><br>
                ";
            }
          }
      }
    ?>
  </div>

</div>

</body>
</html>
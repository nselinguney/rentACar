<?php
// Start the session
session_start();
ob_start();
?>

<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="rentACar.css?v=<?php echo time(); ?>" media="screen">
</head>

<body>
  <div class="base">


    <div class="button">
      <a href="üyeOl.php" class="button">Üye Ol</a>
    </div>


    <div class="topnavnews">
      <div class="dropdown">
        <button class="dropbtn">Bireysel Üye Girişi</button>
        <div class="dropdown-content">



          <div class="form-style-5">
            <form name="uyeGirisForm" action="rentACar.php" method="post">
              <fieldset>
                <legend><span class="number"></span> Üye Bilgileri</legend>
                <input type="email" name="email" placeholder="Mail Adresiniz*">
                <input type="parola" name="parola" placeholder="Parolanız *">
              </fieldset>
              <input type="submit" value="Giriş Yap" name="gonder" />
            </form>
          </div>


          <?php
      
                if(isset($_POST["gonder"])) {
                  
                  $con=mysqli_connect("localhost:3308", "root", "", "rentacar");
                  $sorgu = mysqli_query($con,"SELECT * FROM bireysel_uyeler");

                  $email= $_POST["email"];
                  $parola = $_POST["parola"];
                  $control = 1;
                  
                  if($email=="admin@gmail.com" && $parola == "admin") {

                    header("Location: admin.php");
                  }
                  while($satir=mysqli_fetch_array($sorgu)) {

                    if($email==$satir['email'] && $parola == $satir['parola']) {
                      

                        $_SESSION['ID'] = $satir['id'];
                        $_SESSION['AD'] = $satir['ad'];
                        $_SESSION['SOYAD'] = $satir['soyad'];
                        $_SESSION['EMAIL'] = $satir['email'];
                        $_SESSION['PAROLA'] = $satir['parola'];
                        $_SESSION['PAROLA_TEKRAR'] = $satir['parola_tekrar'];

                        $control = 0;
                      
                    }
                    
                  }

                  if($control==0) {

                    header("Location: üyeOlunduBireysel.php");
                  }

                  else {
                    echo "Lütfen bilgilerinizi kontrol ediniz.";
                  }
              }
              ?>
        </div>
      </div>
    </div>

    <div class="topnavkurumsal">
      <div class="dropdown">
        <button class="dropbtn">Kurumsal Üye Girişi</button>
        <div class="dropdown-content">
          <div class="form-style-5">
            <form name="uyeGirisForm" action="rentACar.php" method="post">
              <fieldset>
                <legend><span class="number"></span> Üye Bilgileri</legend>
                <input type="email" name="email" placeholder="Mail Adresiniz*">
                <input type="parola" name="parola" placeholder="Parolanız *">
              </fieldset>
              <input type="submit" value="Giriş Yap" name="gonder2" />
            </form>
          </div>

          <?php
      
                if(isset($_POST["gonder2"])) {
                  
                  $con=mysqli_connect("localhost:3308", "root", "", "rentacar");
                  $sorgu = mysqli_query($con,"SELECT * FROM kurumsal_uyeler");

                  $email= $_POST["email"];
                  $parola = $_POST["parola"];
                  $control = 1;

                  while($satir=mysqli_fetch_array($sorgu)) {

                    if($email==$satir['email'] && $parola == $satir['parola']) {
                      

                      $_SESSION['ID'] = $satir['id'];
                      $_SESSION['FIRMA_ADI'] = $satir['firma_adi'];
                      $_SESSION['EMAIL'] = $satir['email'];
                      $_SESSION['TEL_NO'] = $satir['tel_no'];
                      $_SESSION['PAROLA'] = $satir['parola'];
                      $_SESSION['PAROLA_TEKRAR'] = $satir['parola_tekrar'];
                        
                      $control = 0;
                      
                    }
                    
                  }

                  if($control==0) {

                    header("Location: üyeOlunduFirma.php");
                  }

                  else {
                    echo "Lütfen bilgilerinizi kontrol ediniz.";
                  }
              }
              ?>

        </div>
      </div>
    </div>

    <div class="hero-image">

    </div>

    <div class="hero-text">

      <h1 class="h1" style="font-size:100px;">Araç Kiralayın</h1>
      <div class="form-style-4">
        <form name="aracBulForm" method="post" action="rentACar.php">
          <fieldset>
            <div class="text4">
              <div  class="text1"> <p> Aracı Alacağınız Konum: </p> <input type="text" name="konum" placeholder="Konum"></div>
              <div  class="text2"><p> Alış Tarihi: </p><input type="date" name="alisTarihi" placeholder="Alış Tarihi"></div>
              <div  class="text3"><p> İade Tarihi: </p><input type="date" name="iadeTarihi" placeholder="İade Tarihi"></div>
            </div>
          </fieldset>
          <input type="submit" value="Araç Bul" name="gonder3" />
        </form>
      </div>

      <?php
      
                if(isset($_POST["gonder3"])) {
                  $konum = $_POST['konum'];
                  $alisTarihi=$_POST["alisTarihi"];
                  $iadeTarihi=$_POST["iadeTarihi"];

                  if($konum=="" || $alisTarihi=="" || $iadeTarihi=="") {
                    echo "Lütfen tüm alanları doldurunuz.";
                  }

                  else {
                    $_SESSION['konum'] = $konum;
                    $_SESSION['alisTarihi'] = $alisTarihi;
                    $_SESSION['iadeTarihi'] = $iadeTarihi;
                    
                    header('Location: aracBul.php?konum='.$konum.'');
                  }
                  
              }
              ?>

    </div>

  </div>



</body>


</body>


</html>
<?php 
  ob_end_flush();
?>
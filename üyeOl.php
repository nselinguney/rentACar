<?php
// Start the session
session_start();
ob_start();
?>

<button class="tablink" onclick="openPage('Home', this, 'black')">Kurumsal Üye Ol</button>
<button class="tablink" onclick="openPage('News', this, '#979494')" id="defaultOpen">Bireysel Üye Ol</button>

<div id="Home" class="tabcontent">

  <div class="form-style-2">
    <div class="form-style-2-heading">Bilgilerinizi Giriniz</div>
    
    <form action="üyeOl.php" method="post">
      
    <label for="field1"><span>Firma Adı: <span class="required">*</span></span><input type="text" class="input-field"
          name="firmaAdi" value="" required="required" /></label>
      
          <label for="field2"><span>E-mail: <span class="required">*</span></span><input type="text" class="input-field"
          name="eMail" value="" required="required" /></label>
          
          <label for="field3"><span>Tel No: <span class="required">*</span></span><input type="text" class="input-field"
          name="telNo" value="" required="required" /></label>
    
          <label for="field4"><span>Parola: <span class="required">*</span></span><input type="password" class="input-field"
          name="parola" value="" required="required" /></label>

          <label for="field5"><span>Parola Tekrar: <span class="required">*</span></span><input type="password" class="input-field"
          name="parolaTekrar" value="" required="required" /></label>

      <label><span> </span><input type="submit" value="Üye Ol" name="gonder1" /></label>
    </form>

    <?php
          if(isset($_POST["gonder1"])) {
            
    
            $firmaAdi=$_POST["firmaAdi"];
            $email=$_POST["eMail"];
            $telNo = $_POST["telNo"];
            $parola=$_POST["parola"];
            $parolaTekrar=$_POST["parolaTekrar"];
            

           
            $_SESSION['FIRMA_ADI'] = $firmaAdi;
            $_SESSION['EMAIL'] = $email;
            $_SESSION['TEL_NO'] = $telNo;
            $_SESSION['PAROLA'] = $parola;
            $_SESSION['PAROLA_TEKRAR'] = $parolaTekrar;

            $con=mysqli_connect("localhost:3308", "root", "", "rentacar");
            
            $econtrol = 0;
            $control = 0;
            
            $sorgu = mysqli_query($con,"SELECT * FROM kurumsal_uyeler");
      
            while($satir=mysqli_fetch_array($sorgu)) {


              

              if($email==$satir["email"]) {
                $econtrol = 1;
                
              }
              
            }
            
            /*if($firmaAdi = " " || $email = " " || $telNo = " " || $parola = " " || $parolaTekrar = " ") {
              $control = 1;
              echo "Lütfen boş alanları doldurunuz";
            }*/

            if($econtrol==1) {
              echo "Kayıt gerçekleştirelemedi. Lütfen başka bir e-mail adresiyle kaydolmayı deneyiniz.";
            }
            else if($econtrol==0) {

              $kaydet = mysqli_query($con,"insert into kurumsal_uyeler (id, firma_adi, email, tel_no, parola, parola_tekrar) values 
              (NULL, '$firmaAdi','$email','$telNo', '$parola','$parolaTekrar')") or die("Hata: kayıt işlemi gerçekleşemedi.");

              header("Location: üyeOlunduFirma.php");
            }
          }
          ?>

  </div>
</div>

<div id="News" class="tabcontent">
<div class="form-style-2">
    <div class="form-style-2-heading">Bilgilerinizi Giriniz</div>
    
    <form action="üyeOl.php" method="post">
      
    <label for="field1"><span>Ad: <span class="required">*</span></span><input type="text" class="input-field"
          name="ad" value="" required="required"/></label>
      
          <label for="field2"><span>Soyad: <span class="required">*</span></span><input type="text" class="input-field"
          name="soyad" value="" required="required" /></label>
          
          <label for="field3"><span>E-Mail: <span class="required">*</span></span><input type="text" class="input-field"
          name="email" value="" required="required"/></label>

          <label for="field4"><span>Parola: <span class="required">*</span></span><input type="password" class="input-field"
          name="parola" value="" required="required"/></label>

          <label for="field5"><span>Parola Tekrar: <span class="required">*</span></span><input type="password" class="input-field"
          name="parolaTekrar" value="" required="required"/></label>

      <label><span> </span><input type="submit" value="Üye Ol" name="gonder" /></label>
    </form>
    <?php
          if(isset($_POST["gonder"])) {
            
    
            $ad=$_POST['ad'];
            $soyad=$_POST['soyad'];
            $email=$_POST['email'];
            $parola=$_POST['parola'];
            $parolaTekrar=$_POST['parolaTekrar'];

            
              $_SESSION['AD'] = $ad;
              $_SESSION['SOYAD'] = $soyad;
              $_SESSION['EMAIL'] = $email;
              $_SESSION['PAROLA'] = $parola;
              $_SESSION['PAROLA_TEKRAR'] = $parolaTekrar;
          
            $con=mysqli_connect("localhost:3308", "root", "", "rentacar");
            
            $econtrol = 0;
            $control = 0;
            
            $sorgu = mysqli_query($con,"SELECT * FROM bireysel_uyeler");
      
            while($satir=mysqli_fetch_array($sorgu)) {

              


              if($email==$satir["email"]) {
                $econtrol = 1;
                
              }
              
            }
            
            /*if($ad = " " || $soyad = " " || $email = " " || $parola = " " || $parolaTekrar = " ") {
              $control = 1;
              echo "Lütfen boş alanları doldurunuz";
            }*/

            if($econtrol==1) {
              echo "Kayıt gerçekleştirelemedi. Lütfen başka bir e-mail adresiyle kaydolmayı deneyiniz.";
            }
            if($econtrol==0) {

              $kaydet=mysqli_query($con, "insert into bireysel_uyeler (id, ad, soyad, email, parola, parola_tekrar) values 
              (NULL, '$ad', '$soyad', '$email', '$parola', '$parolaTekrar')") or die("Hata: kayıt işlemi gerçekleşemedi.");

              header("Location: üyeOlunduBireysel.php");
            }

          }
          ?>
  </div>
</div>
</div>

<style>
  body,
  html {
    height: 100%;
    margin: 0;
    font-family: Arial;
  }

  /* Style tab links */
  .tablink {
    background-color: #555;
    color: white;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    font-size: 17px;
    width: 50%;
  }

  .tablink:hover {
    background-color: black;
  }

  /* Style the tab content (and add height:100% for full page content) */
  .tabcontent {
    color: white;
    display: none;
    padding: 100px 20px;
    height: 100%;
  }

  #Home {
    background-color: black;
  }

  #News {
    background-color: #979494;
  }

  /*** Kurumsal Üye Kaydı Formu ***/

  < type="text/css">.form-style-2 {
    max-width: 500px;
    padding: 20px 12px 10px 20px;
    font: 13px Arial, Helvetica, sans-serif;
  }

  .form-style-2-heading {
    font-weight: bold;
    font-style: italic;
    border-bottom: 2px solid #ddd;
    margin-bottom: 20px;
    font-size: 15px;
    padding-bottom: 3px;
  }

  .form-style-2 label {
    display: block;
    margin: 0px 0px 15px 0px;
  }

  .form-style-2 label>span {
    width: 100px;
    font-weight: bold;
    float: left;
    padding-top: 8px;
    padding-right: 5px;
  }

  .form-style-2 span.required {
    color: red;
  }

  .form-style-2 .tel-number-field {
    width: 40px;
    text-align: center;
  }

  .form-style-2 input.input-field,
  .form-style-2 .select-field {
    width: 30%;
  }

  .form-style-2 input.input-field,
  .form-style-2 .tel-number-field,
  .form-style-2 .textarea-field,
  .form-style-2 .select-field {
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    border: 1px solid #C2C2C2;
    box-shadow: 1px 1px 4px #EBEBEB;
    -moz-box-shadow: 1px 1px 4px #EBEBEB;
    -webkit-box-shadow: 1px 1px 4px #EBEBEB;
    border-radius: 3px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    padding: 7px;
    outline: none;
  }

  .form-style-2 .input-field:focus,
  .form-style-2 .tel-number-field:focus,
  .form-style-2 .textarea-field:focus,
  .form-style-2 .select-field:focus {
    border: 1px solid #0C0;
  }

  .form-style-2 .textarea-field {
    height: 100px;
    width: 55%;
  }

  .form-style-2 input[type=submit],
  .form-style-2 input[type=button] {
    border: none;
    padding: 8px 15px 8px 15px;
    background: #FF8500;
    color: #fff;
    box-shadow: 1px 1px 4px #DADADA;
    -moz-box-shadow: 1px 1px 4px #DADADA;
    -webkit-box-shadow: 1px 1px 4px #DADADA;
    border-radius: 3px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
  }

  .form-style-2 input[type=submit]:hover,
  .form-style-2 input[type=button]:hover {
    background: #EA7B00;
    color: #fff;
  }

  /*** Kurumsal Üye Kaydı Formu Sonu ***/
</style>

<script>


  function openPage(pageName, elmnt, color) {
    // Hide all elements with class="tabcontent" by default */
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }

    // Remove the background color of all tablinks/buttons
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].style.backgroundColor = "";
    }

    // Show the specific tab content
    document.getElementById(pageName).style.display = "block";

    // Add the specific color to the button used to open the tab content
    elmnt.style.backgroundColor = color;
  }

  // Get the element with id="defaultOpen" and click on it
  document.getElementById("defaultOpen").click();

</script>
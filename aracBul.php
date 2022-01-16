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
  background-color: #491809;
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

.h1 {
    text-shadow: 5px 3px #694206;
    margin-left: 15px;
    margin-right: 700px;
    color: #ffffff;
    
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

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */

</style>

</head>

<body>

<div class="header">
  <div class="header-text">
        <h1 class="h1" style="font-size:20px;">Hoş Geldiniz</h1>
</div>
</div>

<div class="row">
  <div class="column side">
    <h2>Side</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
  </div>
  
  <div class="column middle">
    <h2>Main Content</h2>
    <?php
      $konum = $_SESSION['konum'];
      $alisTarihi = $_SESSION['alisTarihi'];
      $iadeTarihi = $_SESSION['iadeTarihi'];

      $con=mysqli_connect("localhost:3308", "root", "", "rentacar");
      $query = mysqli_query($con, "SELECT * FROM arabalar where konum='{$konum}' AND alis_tarihi < '{$alisTarihi}' AND iade_tarihi > '{$iadeTarihi}' ");

      while($araba = mysqli_fetch_assoc($query)) {

        $available = 1;
        $available_query = mysqli_query($con, "SELECT * FROM kiralanmis_arabalar WHERE konum='{$konum}'");

        while($is_available = mysqli_fetch_assoc($available_query))
        {
          
            if(($alisTarihi >= $is_available['alis_tarihi'] && $alisTarihi <= $is_available['iade_tarihi']) || ($iadeTarihi >= $is_available['alis_tarihi'] && $iadeTarihi <= $is_available['iade_tarihi']))
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

        else {

          echo "üçüncüde";
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
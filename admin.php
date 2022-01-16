<?php
session_start();
ob_start();

?>


<html>
<head>
<style>
.button {
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.buttonlar {
display: flex;
justify-content: center;

}
.button1 {background-color: black;} /* Green */
.button2 {background-color: black;} /* Blue */

.table {

    display: flex;
    align-items: center;
    justify-content: center;
}

.bireysel-uyeler-tr {

    display:grid;
    grid-template-columns:
        minmax(100px,max-content)
        repeat(4,200px)30%;

}


.kurumsal-uyeler-tr {

display:grid;
grid-template-columns:
    minmax(100px,max-content)
    repeat(4,200px)30%;

}

.araclar-tr {

display:grid;
grid-template-columns:
    minmax(100px,max-content)
    repeat(6,200px)20%;

}

td {

    border: 1px solid black;
    text-align: center;
    padding: 10px;
}
</style>
</head>
<body>

<div class="buttonlar">
    <form name="admin" method="post">
        <input type="submit" name="araclar" class="button button1" value="Araçlar"/>
        <input type="submit" name="bireyselUyeler" class="button button2" value="Bireysel Üyeler"/>
        <input type="submit" name="kurumsalUyeler" class="button button2" value="Kurumsal Üyeler"/>
        <input type="submit" name="kiralanmisAraclar" class="button button2" value="Kiralanmış Araçlar"/>
    </form>
    </div>
    <div class="table">

        <table>

    <?php


        if (array_key_exists('bireyselUyeler', $_POST)) {
            bireyselUyeler();
        } else if (array_key_exists('kurumsalUyeler', $_POST)) {
            kurumsalUyeler();
        }
        else if(array_key_exists('araclar', $_POST)) {
            araclar();
        }
        else if(array_key_exists('kiralanmisAraclar', $_POST)) {
            kiralanmisAraclar();

        }

        function bireyselUyeler()
        {
            $con=mysqli_connect("localhost:3308", "root", "", "rentacar");
            $query = mysqli_query($con, "SELECT * FROM bireysel_uyeler");

            echo ' 
            <tr class="bireysel-uyeler-tr">
                <td>ID</td> 
                <td>Email</td> 
                <td>Ad</td>    
                <td>Soyad</td>   
                <td>Sil</td>
            </tr>';

            while ($row = mysqli_fetch_assoc($query)) {
                if (is_array($row)) {
                    echo '
                    <tr class="bireysel-uyeler-tr">
                        <td>' . $row['id'] . ' </td> 
                        <td> ' . $row['email'] . '</td> 
                        <td>' . $row['ad'] . '</td>    
                        <td>' . $row['soyad'] . '</td>   
                        <td><a href="delete.php?bireysel=' . $row['id'] . '" style="font-style:italic">KULLANICIYI SİL</a></td>
                    </tr>';
                    $_SESSION["bireysel"] = $row['id'];
                    
                }
            }
        }

        function kurumsalUyeler()
        {
            $con=mysqli_connect("localhost:3308", "root", "", "rentacar");
            $query = mysqli_query($con, "SELECT * FROM kurumsal_uyeler");

            echo ' 
            <tr class="kurumsal-uyeler-tr">
                <td>ID</td> 
                <td>Email</td> 
                <td>Firma Adı</td>       
                <td>Sil</td>
            </tr>';

            while ($row = mysqli_fetch_assoc($query)) {
                if (is_array($row)) {
                    echo '
                    <tr class="kurumsal-uyeler-tr">
                        <td>' . $row['id'] . ' </td> 
                        <td> ' . $row['email'] . '</td> 
                        <td>' . $row['firma_adi'] . '</td>      
                        <td><a href="delete.php?kurumsal=' . $row['id'] . '" style="font-style:italic">KULLANICIYI SİL</a></td>
                    </tr>';
                    $_SESSION["kurumsal"] = $row['id'];
                    
                }
            }
        }

        function araclar()
        {
            $con=mysqli_connect("localhost:3308", "root", "", "rentacar");
            $query = mysqli_query($con, "SELECT * FROM arabalar");

            echo ' 
            <tr class="araclar-tr">
                <td>ID</td> 
                <td>Araç Adı</td> 
                <td>Araç Sınıfı</td>       
                <td>Yakıt Tipi</td>
                <td>Vites Tipi</td>
                <td>Günlük Ücret<//td>
                <td>Sil</td>
            </tr>';

            while ($row = mysqli_fetch_assoc($query)) {
                if (is_array($row)) {
                    echo '
                    <tr class="araclar-tr">
                        <td>' . $row['id'] . ' </td> 
                        <td> ' . $row['arac_adi'] . '</td> 
                        <td>' . $row['arac_sinifi'] . '</td>  
                        <td>' . $row['yakit_tipi'] . '</td>
                        <td>' . $row['vites_tipi'] . '</td>
                        <td>' . $row['gunluk_ucret'] . '</td>       
                    <td><a href="delete.php?arac=' . $row['id'] . '" style="font-style:italic">ARACI SİL</a></td>
                    </tr>';
                    $_SESSION["arac"] = $row['id'];
                    
                    
                }
            }
        }

    
        function kiralanmisAraclar()
        {
            $con=mysqli_connect("localhost:3308", "root", "", "rentacar");
            $query = mysqli_query($con, "SELECT * FROM kiralanmis_arabalar");

            echo ' 
            <tr class="kiralanmis-araclar-tr">
                <td>ID</td> 
                <td>Araç Adı</td> 
                <td>Araç Sınıfı</td>       
                <td>Yakıt Tipi</td>
                <td>Vites Tipi</td>
                <td>Günlük Ücret<//td>
                <td>Sil</td>
            </tr>';

            while ($row = mysqli_fetch_assoc($query)) {
                if (is_array($row)) {
                    echo '
                    <tr class="kiralanmis-araclar-tr">
                        <td>' . $row['id'] . ' </td> 
                        <td> ' . $row['arac_adi'] . '</td> 
                        <td>' . $row['arac_sinifi'] . '</td>  
                        <td>' . $row['yakit_tipi'] . '</td>
                        <td>' . $row['vites_tipi'] . '</td>
                        <td>' . $row['gunluk_ucret'] . '</td>       
                    <td><a href="delete.php?kiralanmis=' . $row['id'] . '" style="font-style:italic">İŞLEMİ SİL</a></td>
                    </tr>';
                    $_SESSION["kiralanmis"] = $row['id'];
                    
                }
            }
        }

    
    
    ?>
        </table>
    </div>

</body>
</html>
<?php
session_start();
ob_start();

$con=mysqli_connect("localhost:3308", "root", "", "rentacar");


$bireysel = $_GET['bireysel'];
$kurumsal = $_GET['kurumsal'];
$arac = $_GET['arac'];
$kiralanmis = $_GET['kiralanmis'];

if (isset($_SESSION["bireysel"])) {
    mysqli_query($con, "DELETE FROM bireysel_uyeler WHERE id=$bireysel");
    header("Location: admin.php");
}
if (isset($_SESSION["kurumsal"])) {
    mysqli_query($con, "DELETE FROM kurumsal_uyeler WHERE id=$kurumsal");
    header("Location: admin.php");
}

if (isset($_SESSION["arac"])) {
    mysqli_query($con, "DELETE FROM arabalar WHERE id=$arac");
    header("Location: admin.php");
}

if (isset($_SESSION["kiralanmis"])) {
    mysqli_query($con, "DELETE FROM kiralanmis_arabalar WHERE id=$kiralanmis");
    header("Location: admin.php");
}

mysqli_close($con);

ob_end_flush();
session_destroy();

?>

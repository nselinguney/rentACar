<?php

if(!isset($_SESSION)) {
    session_start();
}

unset($_SESSION['ID']);
unset($_SESSION['AD']);
unset($_SESSION['SOYAD']);
unset($_SESSION['EMAIL']);
unset($_SESSION['PAROLA']);
unset($_SESSION['PAROLA_TEKRAR']);

session_destroy();

header("Location: rentACar.php");

?>
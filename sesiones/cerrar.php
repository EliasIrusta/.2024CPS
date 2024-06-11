<?php

session_name("LOGIN");

session_start();
// session_unset(): solo elimina las variables de session
session_destroy(); // elimina toda la informacion de la session

if(headers_sent()){
    echo "<script> window.location.href='index.php' ;</script>";
}else{
    header("Location: index.php");
}
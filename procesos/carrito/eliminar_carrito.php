<?php
session_start();

if(!isset($_GET['coditem']) OR !is_numeric($_GET['coditem']))
    header('Location: carrito.php');

$coditem = $_GET['coditem'];

if(isset($_SESSION['carrito'])){
    unset($_SESSION['carrito'][$coditem]);   
    header('Location: carrito.php');
}else{
    header('Location: index.php');
}



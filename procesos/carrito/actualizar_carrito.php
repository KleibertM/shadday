<?php

session_start();

if($_SERVER['REQUEST_METHOD'] ==='POST'){
    require 'funciones.php';
    $coditem = $_POST['coditem'];
    $cantidad = $_POST['cantidad'];

    if(is_numeric($cantidad )){

        if(array_key_exists($coditem,$_SESSION['carrito']))
            actualizarProducto($coditem,$cantidad);
    }
  
    header('Location: carrito.php');
}
 
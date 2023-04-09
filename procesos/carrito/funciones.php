<?php


function agregarProducto($resultado, $coditem, $cantidad = 1){
    $_SESSION['carrito'][$coditem] = array(
        'coditem' => $resultado['coditem'],
        'nombre' => $resultado['nombre'],
        'precio' => $resultado['precio'],
        'cantidad' => $cantidad
   );
}


function actualizarProducto($coditem,$cantidad = FALSE){

    if($cantidad)
        $_SESSION['carrito'][$coditem]['cantidad'] = $cantidad;
    else
        $_SESSION['carrito'][$coditem]['cantidad']+=1;
}


function calcularTotal(){

    $total = 0;
    if(isset($_SESSION['carrito'])){
        foreach($_SESSION['carrito'] as $indice => $value){
            $total += $value['precio'] * $value['cantidad'];
        }
    }
    return $total;

}

function cantidadProducto(){
    $cantidad = 0;
    if(isset($_SESSION['carrito'])){
        foreach($_SESSION['carrito'] as $indice => $value){
           $cantidad++;
        }
    }

    return $cantidad;
}
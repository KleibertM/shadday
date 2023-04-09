<?php

session_start();

if($_SERVER['REQUEST_METHOD'] ==='POST'){

    require '../conexion.php';
    

    if(isset($_SESSION['carrito']) && !empty($_SESSION['carrito'])){
    
        $_params = array(
            ":nombre" => $_params['nombre'],
            ":apellidos" => $_params['apellido'],
            ":dni" => $_params['dni'],
            ":direccion" => $_params['direccion'],
            ":edad" => $_params['edad'],
            ":sexo" => $_params['sexo'],
            ":correo" => $_params['correo'],
            ":user" => $_params['user'],
            ":clave" => $_params['clave']
        );
    
        $idcliente = $cliente->registrar($_params);
    
        $_params = array(
            ":idcliente" => $_params['idcliente'],
            ":fecha_hora" => $_params['fecha_hora'],
            ":subtotal" => calcularTotal(),
            ":igv" => $_params['igv'],
            ":total" => $_params['total']
        );
        
        $venta_FK =  $venta->registrar($_params);

        foreach($_SESSION['carrito'] as $indice => $value){
            $_params = array(
                ":venta_FK" => $_params['venta_FK'],
                ":item_FK" => $_params['item_FK'],
                ":nombreItem" => $_params['nombreItem'],
                ":cantidad" => $_params['cantidad'],
                ":precio" => $_params['precio'],
                ":importe" => $_params['importe']
            );

            $venta->registrarDetalle($_params);
        }

        $_SESSION['carrito'] = array();

        header('Location: gracias.php');

    }

    

     




}
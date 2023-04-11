<?php  
     require_once '../conexion.php';

    $ruc = $_GET['ruc'];
    $nombre = $_GET['nombre'];
    $telefon = $_GET['telefon'];
    $direccion = $_GET['direccion'];
    $correo = $_GET['correo'];
    $stmt = $conexion->prepare("UPDATE provee SET (ruc=:ruc nombre=:nombre, telefon=:telefon, direccion=:direccion, correo=:correo) WHERE ideprovee = :ideprovee");

    $stmt->bindParam(':ruc', $ruc);
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':telefon', $telefon);
    $stmt->bindParam(':direccion', $direccion);
    $stmt->bindParam(':correo', $correo);

    if($stmt->execute()){
        echo "Datos modificados correctamente..";
        header("Location: ../../html/provee.php");
    exit();
    
    }else{
        echo "No se pudo modificar el registro..";
    }
?>
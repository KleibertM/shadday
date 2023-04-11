<?php 
require_once "../conexion.php";

$Nombre = $_GET['nombre'];
$Apellido = $_GET['apellido'];
$Telefono = $_GET['telefono'];
$Dni = $_GET['dni'];
$Direccion = $_GET['direccion'];
$Edad = $_GET['edad'];
$Sexo = $_GET['sexo'];
$Correo = $_GET['correo'];
$User = $_GET['user'];
$Clave = $_GET['clave'];

$stmt = $conexion->prepare("UPDATE cliente SET nombre=:nombre,	apellido= :apellido,	telefono= :telefono,	dni= :dni,	direccion = :direccion,	edad = :edad,	sexo = :sexo,	correo = :correo,	user = :user,	clave = :clave, admin = :admin  WHERE codcliente=:codcliente");

$stmt->bindParam(':nombre', $Nombre);
$stmt->bindParam(':apellido', $Apellido);
$stmt->bindParam(':telefono', $Telefono);
$stmt->bindParam(':dni', $Dni);
$stmt->bindParam(':direccion', $Direccion);
$stmt->bindParam(':edad', $Edad);
$stmt->bindParam(':sexo', $Sexo);
$stmt->bindParam(':correo',$Correo);
$stmt->bindParam(':user', $User);
$stmt->bindParam(':clave', $Clave);
$stmt->bindParam(':admin', $Admin);

if($stmt->execute()){
    echo "Datos modificados correctamente..";
    header("Location: ../../html/clientes.php");
exit();

}else{
    echo "No se pudo modificar el registro..";
}
?>
<?php 
require_once "../conexion.php";

$Nombre = $_POST['nombre'];
$Apellido = $_POST['apellido'];
$Telefono = $_POST['telefono'];
$Dni = $_POST['dni'];
$Direccion = $_POST['direccion'];
$Edad = $_POST['edad'];
$Sexo = $_POST['sexo'];
$Correo = $_POST['correo'];
$User = $_POST['user'];
$Clave = $_POST['clave'];

$stmt = $conexion->prepare("UPDATE cliente SET nombre=:nombre,	apellido= :apellido,	telefono= :telefono,	dni= :dni,	direccion = :direccion,	edad = :edad,	sexo =:sexo,	correo = :correo,	user = :user,	clave = :clave  WHERE codcliente=:codcliente");

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

if($sql->execute()){
    echo "Datos modificados correctamente..";
    header("Location: ../../html/clientes.php");
exit();

}else{
    echo "No se pudo modificar el registro..";
}
?>
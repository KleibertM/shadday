<?php 
require_once "../conexion.php";

$coditem= $_GET['coditem'];
$nombre = $_GET['nombre'];
$foto = $_GET['foto'];
$version = $_GET['version'];
$categoria = $_GET['categoria'];
$editorial = $_GET['editorial'];
$fecha = $_GET['fecha'];
$stock = $_GET['stock'];
$precio = $_GET['precio'];

$sql = $conexion->prepare("UPDATE item SET nombre=:nombre, foto=:foto, version=:version, categoria=:categoria, editorial=:editorial, fecha=:fecha, stock=:stock, precio=:precio WHERE coditem=:coditem");

$stmt->bindParam(":nombre", $nombre);
$stmt->bindParam(':foto', $foto);
$stmt->bindParam(':version', $version);
$stmt->bindParam(':categoria', $categoria);
$stmt->bindParam(':editorial', $editorial);
$stmt->bindParam(':fecha', $fecha);
$stmt->bindParam(':stock', $stock);
$stmt->bindParam(':precio', $precio);

if($sql->execute()){
    echo "Datos modificados correctamente..";
    header("Location: ../html/items.php");
exit();

}else{
    echo "No se pudo modificar el registro..";
}
?>

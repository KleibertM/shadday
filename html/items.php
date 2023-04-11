
<?php
include '../procesos/conexion.php';
$stmt = $conexion->prepare("SELECT * FROM item");
$stmt->execute();
$cont = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario Productos</title>
    <link rel="stylesheet" href="../css/tablas.css">
</head>
<body>
    <header>
        <nav class="main-nav">
            <ul>
                <li><a href="admin.php">Inicio</a></li>
                <li><a href="ventas.php">Ventas</a></li>
                <li><a href="clientes.php">Clientes</a></li>
                <li><a href="provee.php">Proveedores</a></li>
                <li><a href="../procesos/cerrar.php">Cerrar Seccion</a> </li>
            </ul>
        </nav>
    </header>
        <div class="tite-table" > 
            <h1>Productos en Almacen</h1>
            <a href="../procesos/producto/additem.php">Agregar Producto</a>
            <a href="../procesos/producto/modif.php">Editar Producto</a>
        </div>
    <table class="styled-table">
        <thead>
        <tr>
            <td class="table__header">Código</td>
            <td class="table__header">Nombre</td>
            <td class="table__header">Versión</td>
            <td class="table__header">Categoría</td>
            <td class="table__header">Editorial</td>
            <td class="table__header">Fecha</td>
            <td class="table__header">Stock</td>
            <td class="table__header">Precio</td>
            <td></td>
            <td></td>
        </tr>
        </thead>
        <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
        <tbody>
        <tr>
            <td class="table__item"><?php echo $row['coditem'];?></td>
            <td class="table__item"><?php echo $row['nombre'];?></td>
            <td class="table__item"><?php echo $row['version'];?></td>
            <td class="table__item"><?php echo $row['categoria'];?></td>
            <td class="table__item"><?php echo $row['editorial'];?></td>
            <td class="table__item"><?php echo $row['fecha'];?></td>
            <td class="table__item"><?php echo $row['stock'];?></td>
            <td class="table__item"><?php echo $row['precio'];?></td>
            
            
            <td ><a href="../procesos/producto/deletitem.php?id=<?php echo $row['coditem'];?>">eliminar</a></td>
        </tr>
        </tbody>
        <?php endwhile  ?>
    </table>
    

      <!----===== JS ===== -->
      <script src="../js/navbar.js"></script>
</body>
</html>
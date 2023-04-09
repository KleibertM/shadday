<?php
include '../procesos/conexion.php';
$stmt = $conexion->prepare("SELECT * FROM detalleventa");
$stmt->execute();
$cont = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de Ventas</title>
    <style>
		table {
			border-collapse: collapse;
			width: 100%;
		}
		td, th {
			border: 1px solid blue;
			text-align: left;
			padding: 8px;
		}
		td {
			background-color: #dddddd;
		}
	</style>

</head>
<body>
    <header>
        <nav class="main-nav">
            <ul>
                <li><a href="admin.php">Inicio</a></li>
                <li><a href="categoria/all.php">Productos</a></li>
                <li><a href="ventas.php">Ventas</a></li>
                <li><a href="factura.php">Facturas</a></li>
                <li><a href="clientes.php">Clientes</a></li>
                <li><a href="provee.php">Proveedores</a></li>
                <li><a href="../procesos/cerrar.php">Cerrar Seccion</a> </li>
            </ul>
        </nav>
    </header>
    <table border="1" >
        <tr>
            <td colspan="7" class="table__title">Detalles de Ventas</td>
        </tr>
        <tr>
            <td class="table__header">ID Detalle Venta</td>
            <td class="table__header">ID Venta</td>
            <td class="table__header">ID Item</td>
            <td class="table__header">Nombre del Item</td>
            <td class="table__header">Cantidad</td>
            <td class="table__header">Precio Unitario</td>
            <td class="table__header">Importe</td>
        </tr>
        <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
        <tr>
            <td class="table__item"><?php echo $row['idDetVenta']; ?></td>
            <td class="table__item"><?php echo $row['venta_FK']; ?></td>
            <td class="table__item"><?php echo $row['item_FK']; ?></td>
            <td class="table__item"><?php echo $row['nombreItem']; ?></td>
            <td class="table__item"><?php echo $row['cantidad']; ?></td>
            <td class="table__item"><?php echo $row['precio']; ?></td>
            <td class="table__item"><?php echo $row['importe']; ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
    <a href="../procesos/cerrar.php">Cerrar Seccion</a>


      <!----===== JS ===== -->
      <script src="../js/navbar.js"></script>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Factura de compra</title>
	<style>
		table {
			border-collapse: collapse;
			width: 100%;
		}
		td, th {
			border: 1px solid #dddddd;
			text-align: left;
			padding: 8px;
		}
		th {
			background-color: #dddddd;
		}
	</style>
</head>
<body>
    <?php
		// Conectar a la base de datos
        include '../procesos/conexion.php';
        // Obtener los datos de la venta
		$stmt = $conexion->prepare ("SELECT venta.idventa(s), detalleventa.venta_FK(s) FROM venta INNER JOIN detalleventa on venta.idventa = detalleventa.venta_FK");
        
		// Obtener los datos de los detalles de venta
		
    ?>
	<h1>Factura de compra</h1>
	<table border="1" >
        <tr>
            <td colspan="12" class="table__title">Factura</td>
        </tr>
        <tr>
            <td class="table__header">ID Venta</td>
            <td class="table__header">ID Detalle Venta</td>
            <td class="table__header">ID Cliente</td>
            <td class="table__header">Nombre Cliente</td>
            <td class="table__header">Fecha y Hora</td>

        </tr>
        <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
        <tr>
            >
            <td class="table__item"><?php echo $row['idventa']; ?></td>
            <td class="table__item"><?php echo $row['idDetVenta']; ?></td>
            <td class="table__item"><?php echo $row['idcliente']; ?></td>
            <td class="table__item"><?php echo $row['nombre']; ?></td>
            <td class="table__item"><?php echo $row['fecha_hora']; ?></td>

        </tr>
        <?php endwhile; ?>
        <tr>
            <td class="table__header">ID Producto</td>
            <td class="table__header">Nombre del Producto</td>
            <td class="table__header">Cantidad</td>
            <td class="table__header">Precio Unitario</td>
            <td class="table__header">Importe</td>
            <td class="table__header">Subtotal</td>
            <td class="table__header">IGV</td>
            <td class="table__header">Total</td>
        </tr>
        <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
        <tr>
            >
            <td class="table__item"><?php echo $row['item_FK']; ?></td>
            <td class="table__item"><?php echo $row['nombre']; ?></td>
            <td class="table__item"><?php echo $row['cantidad']; ?></td>
            <td class="table__item"><?php echo $row['precio']; ?></td>
            <td class="table__item"><?php echo $row['importe']; ?></td>
            <td class="table__item"><?php echo $row['subtotal']; ?></td>
            <td class="table__item"><?php echo $row['igv']; ?></td>
            <td class="table__item"><?php echo $row['total']; ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
    <a href="../procesos/cerrar.php">Cerrar Seccion</a>
		
	</table>

      <!----===== JS ===== -->
      <script src="../js/navbar.js"></script>
</body>
</html>

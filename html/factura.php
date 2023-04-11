<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Factura de compra</title>
    <link rel="stylesheet" href="../css/tablas.css">
</head>
<body>
    <?php
		// Conectar a la base de datos
        include '../procesos/conexion.php';
        // Obtener los datos de la venta
		$stmt = $conexion->prepare ("SELECT venta.idventa(s), detalleventa.venta_FK(s) FROM venta INNER JOIN detalleventa on venta.idventa = detalleventa.venta_FK");
        
		// Obtener los datos de los detalles de venta
		
    ?>
<header>
    <nav class="main-nav-venta">
        <ul>
            <li><a href="admin.php">Inicio</a></li>
            <li><a href="clientes.php">Clientes</a></li>
            <li><a href="../procesos/cerrar.php">Cerrar Seccion</a> </li>
        </ul>
    </nav>
</header>
	 <div class="tite-table" > 
        <h1>Facturas</h1>
    </div>
	<table class="styled-table" >
        <thead>
            <tr>
                <td class="table__header">ID Venta</td>
                <td class="table__header">ID Detalle Venta</td>
                <td class="table__header">ID Cliente</td>
                <td class="table__header">Nombre Cliente</td>
                <td class="table__header">Fecha y Hora</td>
                <td class="table__header">ID Producto</td>
                <td class="table__header">Nombre del Producto</td>
                <td class="table__header">Cantidad</td>
                <td class="table__header">Precio Unitario</td>
                <td class="table__header">Importe</td>
                <td class="table__header">Subtotal</td>
                <td class="table__header">IGV</td>
                <td class="table__header">Total</td>
            </tr>
        </thead>
        <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
        <tbody>
            <tr>
                <td class="table__item"><?php echo $row['idventa']; ?></td>
                <td class="table__item"><?php echo $row['idDetVenta']; ?></td>
                <td class="table__item"><?php echo $row['idcliente']; ?></td>
                <td class="table__item"><?php echo $row['nombre']; ?></td>
                <td class="table__item"><?php echo $row['fecha_hora']; ?></td>
                <td class="table__item"><?php echo $row['item_FK']; ?></td>
                <td class="table__item"><?php echo $row['nombre']; ?></td>
                <td class="table__item"><?php echo $row['cantidad']; ?></td>
                <td class="table__item"><?php echo $row['precio']; ?></td>
                <td class="table__item"><?php echo $row['importe']; ?></td>
                <td class="table__item"><?php echo $row['subtotal']; ?></td>
                <td class="table__item"><?php echo $row['igv']; ?></td>
                <td class="table__item"><?php echo $row['total']; ?></td>
            </tr>
        </tbody>
        <?php endwhile; ?>
    </table>

      <!----===== JS ===== -->
      <script src="../js/navbar.js"></script>
</body>
</html>

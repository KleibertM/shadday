
<?php
include '../procesos/conexion.php';
$stmt = $conexion->prepare("SELECT * FROM venta");
$stmt->execute();
$cont = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventas</title>
    <link rel="stylesheet" href="../css/tablas.css">
</head>
<body>
<header>
        <nav class="main-nav-venta">
            <ul>
                <li><a href="admin.php">Inicio</a></li>
                <li><a href="items.php">Productos</a></li>
                <li><a href="detVenta.php">Detalles Ventas</a></li>
                <li><a href="factura.php">Facturas</a></li>
                <li><a href="clientes.php">Clientes</a></li>
                <li><a href="../procesos/cerrar.php">Cerrar Seccion</a> </li>
            </ul>
        </nav>
    </header>
    <div class="tite-table" > 
            <h1>Ventas Totales</h1>
        </div>
  <table class="styled-table" >
   <thead>
    <tr>
        <td class="table__header">ID Venta</td>
        <td class="table__header">ID Cliente</td>
        <td class="table__header">Fecha y Hora</td>
        <td class="table__header">Subtotal</td>
        <td class="table__header">IGV</td>
        <td class="table__header">Total</td>
      </tr>
   </thead>
    <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
    <tbody>
      <tr>
        <td class="table__item"><?php echo $row['idventa']; ?></td>
        <td class="table__item"><?php echo $row['idcliente']; ?></td>
        <td class="table__item"><?php echo $row['fecha_hora']; ?></td>
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
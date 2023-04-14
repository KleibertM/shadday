<?php
include '../procesos/conexion.php';

$stmt = $conexion->prepare("SELECT * FROM detalleventa INNER JOIN item ON nombre = item.nombre");
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
    <link rel="stylesheet" href="../css/test.css">
    <link rel="stylesheet" href="../css/init.css">
    <link rel="stylesheet" href="../css/style.css">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<?php include 'navadmin.php'; ?>
   <div class="main-container" >
   <div class="tite-table" > 
        <h1>DEtalles de las Ventas</h1>
    </div> 
    <div class="edit">
        <a href="factura.php">Facturas</a>
     </div>

    <table class="styled-table"  >
        <thead>
            <tr>
                <td class="table__header">ID Detalle Venta</td>
                <td class="table__header">ID Venta</td>
                <td class="table__header">ID Item</td>
                <td class="table__header">Nombre del Item</td>
                <td class="table__header">Cantidad</td>
                <td class="table__header">Precio Unidad</td>
            </tr>
        </thead>
        <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
        <tbody>
            <tr>
                <td class="table__item"><?php echo $row['idDetVenta']; ?></td>
                <td class="table__item"><?php echo $row['venta_FK']; ?></td>
                <td class="table__item"><?php echo $row['item_FK']; ?></td>
                <td class="table__item"><?php echo $row['nombre']; ?></td>
                <td class="table__item"><?php echo $row['cantidad']; ?></td>
                <td class="table__item"><?php echo $row['precio']; ?></td>
            </tr>
        </tbody>
        <?php endwhile; ?>
    </table>
   </div>
      <!----===== JS ===== -->
      <script src="../js/navbar.js"></script>
</body>|
</html>


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
    <link rel="stylesheet" href="../css/test.css">
    <link rel="stylesheet" href="../css/init.css">
    <link rel="stylesheet" href="../css/style.css">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<?php include 'navadmin.php'; ?>
  <div  class="main-container">
    <div class="tite-table" > 
      <h1>Ventas Totales</h1>
    </div>
    <div class="edit">
        <a href="detVenta.php">Detalles de venta</a>
     </div>
  <table class="styled-table" >
   <thead>
    <tr>
        <td class="table__header">ID Venta</td>
        <td class="table__header">ID Cliente</td>
        <td class="table__header">Fecha y Hora</td>
        <td class="table__header">Total</td>
      </tr>
   </thead>
    <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
    <tbody>
      <tr>
        <td class="table__item"><?php echo $row['idventa']; ?></td>
        <td class="table__item"><?php echo $row['idcliente']; ?></td>
        <td class="table__item"><?php echo $row['fecha_hora']; ?></td>
        <td class="table__item"><?php echo $row['total']; ?></td>
      </tr>
    </tbody>
    <?php endwhile; ?>
  </table>  
  </div>

    <!----===== JS ===== -->
    <script src="../js/navbar.js"></script>
</body>
</html>

<?php
include '../procesos/conexion.php';
$stmt = $conexion->prepare("SELECT * FROM cliente");
$stmt->execute();
$cont = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Clientes</title>
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
                <li><a href="provee.php">Proveedores</a></li>
                <li><a href="../procesos/cerrar.php">Cerrar Seccion</a> </li>
            </ul>
        </nav>
    </header>
    <table border="1" >
        <tr>
            <td colspan="11" class="table__title">Clientes</td>
        </tr>
        <tr>
            <td class="table__header">Código Cliente</td>
            <td class="table__header">Nombre</td>
            <td class="table__header">Apellido</td>
            <td class="table__header">Teléfono</td>
            <td class="table__header">DNI</td>
            <td class="table__header">Dirección</td>
            <td class="table__header">Edad</td>
            <td class="table__header">Sexo</td>
            <td class="table__header">Correo</td>
            <td class="table__header">Usuario</td>
            <td class="table__header">Admin</td>
        </tr>
        <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
        <tr>
            <td class="table__item"><?php echo $row['codcliente']; ?></td>
            <td class="table__item"><?php echo $row['nombre']; ?></td>
            <td class="table__item"><?php echo $row['apellido']; ?></td>
            <td class="table__item"><?php echo $row['telefono']; ?></td>
            <td class="table__item"><?php echo $row['dni']; ?></td>
            <td class="table__item"><?php echo $row['direccion']; ?></td>
            <td class="table__item"><?php echo $row['edad']; ?></td>
            <td class="table__item"><?php echo $row['sexo']; ?></td>
            <td class="table__item"><?php echo $row['correo']; ?></td>
            <td class="table__item"><?php echo $row['user']; ?></td>
            <td class="table__item"><?php echo $row['admin']; ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
    <a href="../procesos/cliente/modifc.php">Modificar Datos</a>
    <a href="../procesos/cerrar.php">Cerrar Seccion</a>


      <!----===== JS ===== -->
      <script src="../js/navbar.js"></script>
</body>
</html>
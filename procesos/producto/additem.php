<?php
require '../conexion.php';

if (!empty($_POST['additem'])) {
    if (empty($_POST['nombre'])|| empty($_FILES['foto']) || empty($_POST['version']) || empty($_POST['categoria']) || empty($_POST['editorial']) || empty($_POST['fecha']) || empty($_POST['stock']) || empty($_POST['precio'])) {
        echo "<div class='alert alert_info'>Uno de los campos está vacío</div>";
    } else {
    
        $nombre = $_POST['nombre'];
        $foto = $_FILES['foto']['name'];
        $archivo = $_FILES['foto']['tmp_name'];
        $version = $_POST['version'];
        $categoria = $_POST['categoria'];
        $editorial = $_POST['editorial'];
        $fecha = $_POST['fecha'];
        $stock = $_POST['stock'];
        $precio = $_POST['precio'];

        $ruta = "../../imagen/" . $foto;
        $base = "../../imagen/" . $foto;

        move_uploaded_file($archivo, $ruta);

        $stmt = $conexion->prepare("SELECT * FROM item WHERE nombre = :nombre");
        $stmt->bindParam(':nombre', $nombre);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            echo '<div class="alert alert_error">Libro ya Registrado</div>';
        } else {
        $stmt = $conexion->prepare("INSERT INTO item (nombre, foto, version, categoria, editorial, fecha, stock, precio) VALUES ('$nombre', '$base', '$version', '$categoria', '$editorial', '$fecha', '$stock', '$precio')");
        

        if ($stmt->execute()) {

            header('Location: ../../html/items.php ');

            echo '<div class="alert alert_exitosa">Producto registrado correctamente</div>';
        } else {
            echo '<div class="alert alert_error">Error al registrar producto</div>';
        }
        
    }
    }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Producto</title>
</head>
<body>
    <div>
        <form action="additem.php" method="POST" enctype="multipart/form-data" >
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre"  required><br>

            <label for="foto">Foto:</label>
            <input type="file" id="foto" name="foto" required><br>

            <label for="version">Versión:</label>
            <input type="text" id="version" name="version" required><br><br>

            <label for="categoria">Categoría:</label>
            <select name="categoria" id="categoria" required>
                    <option disabled selected value="">Seleccione una opción</option>
                    <option value="9001">Damas</option>
                    <option value="9002">Caballeros</option>
                    <option value="9003">Niños</option>
                    <option value="9004">Bolsillo</option>
                </select> <br>

            <label for="editorial">Editorial:</label>
            <input type="text" id="editorial" name="editorial" required><br>

            <label for="fecha">Fecha:</label>
            <input type="date" id="fecha" name="fecha" required><br>

            <label for="stock">Stock:</label>
            <input type="number" id="stock" name="stock" required><br>

            <label for="precio">Precio:</label>
            <input type="number" id="precio" name="precio" required><br>

            <input type="submit" name="additem" value="Registrar">
            <button type="reset">Cancelar</button>
        </form>

    </div>
</body>
</html>
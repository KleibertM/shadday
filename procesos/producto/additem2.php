<?php
require '../conexion.php';

    if(isset($_POST["additem2"])) {
        // Obtener los datos del formulario
        $nombre = $_POST['nombre'];
        $version = $_POST['version'];
        $categoria = $_POST['categoria'];
        $editorial = $_POST['editorial'];
        $fecha = $_POST['fecha'];
        $stock = $_POST['stock'];
        $precio = $_POST['precio'];
        $imagen = $_FILES["foto"]["name"];
    
        // Directorio donde se guardarán las imágenes
        $target_dir = "uploads/";
    
        // Ruta completa del archivo de imagen
        $target_file = $target_dir . basename($_FILES["foto"]["name"]);
    
        // Obtener la extensión del archivo de imagen
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
        // Comprobar si el archivo de imagen es válido
        $check = getimagesize($_FILES["foto"]["tmp_name"]);
        if($check !== false) {
            // Mover el archivo de imagen al directorio de imágenes
            move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file);
    
            // Insertar los datos del producto en la base de datos
            $sql = "INSERT INTO item (nombre, foto, version, categoria, editorial, fecha, stock, precio) VALUES ( :nombre, :foto, :version, :categoria, :editorial, :fecha, :stock, :precio)";
            $stmt = $conn->prepare($sql);

            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':foto', $foto);
            $stmt->bindParam(':version', $version);
            $stmt->bindParam(':categoria', $categoria);
            $stmt->bindParam(':editorial', $editorial);
            $stmt->bindParam(':fecha', $fecha);
            $stmt->bindParam(':stock', $stock);
            $stmt->bindParam(':precio', $precio);
            $stmt->execute();
            
            header('Location: ../html/items.php');

            echo "El producto ha sido registrado correctamente.";
        } else {
            echo "El archivo no es una imagen válida.";
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
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" accept="image/*"  required><br>

            <label for="foto">Foto:</label>
            <input type="file" id="foto" name="foto" required><br>

            <label for="version">Versión:</label>
            <input type="text" id="version" name="version" required><br><br>

            <label for="categoria">Categoría:</label>
            <select name="categoria" id="categoria"required>
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

            <input type="submit" name="additem2" value="Registrar">
            <button type="reset">Cancelar</button>
        </form>

    </div>
</body>
</html>
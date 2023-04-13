
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Producto</title>
    <link rel="stylesheet" href="../../css/add.css">
</head>
<body>
    <div class="contenedor" >
        <h1 class="titulo" >Eliminar Un Producto</h1>
        <form action="delete.php"  method="GET">
            
            <input type="number" name="coditem" required placeholder="Ingresa el ID del Producto" ><br><br>
            
            <div class="btn" >
                <input class="btn-red" type="submit" name="eliminar" value="Eliminar">
            </div>
        </form>
    </div>
</body>
</html>
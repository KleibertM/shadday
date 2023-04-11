<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Producto</title>
    
    <link rel="stylesheet" href="../../css/modif.css">
</head>
<body>  
<div class="container">
    <form action="modifitem.php" name="modificar" method="GET">
        <h2 class="title">ID de Producto</h2>
        <input type="number" name="coditem" required=""><br><br>
        
        <h2>Datos a Modiicar</h2>
        
        <input type="text" name="nombre" placeholder="Nombre" ><br>

        <input type="text" id="version" name="version" placeholder="Version" ><br>

        <input type="text" id="categoria" name="categoria" placeholder="Categoria" ><br>

        <input type="text" id="editorial" name="editorial" placeholder="Editorial" ><br>

        <input type="date" id="fecha" name="fecha" placeholder="Fecha de F." ><br>

        <input type="number" id="stock" name="stock" placeholder="Stock" ><br>

        <input type="number" id="precio" name="precio" placeholder="Precio" ><br>

        <input type="submit" name="enviar" class="btn-modif" value="Remplazar">
    </form>
    </div> 
</body>
</html>
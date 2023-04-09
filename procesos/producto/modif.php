<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Producto</title>
</head>
<body>  
<div class="container">
    <form action="modifitem.php" name="modificar" method="GET">
        <label class="title">ID a Buscar</label><br>
        
        <input type="number" name="coditem" required=""><br><br>
        <label class="title">Datos a Remplazar</label><br>
        
        <label >Nombre</label><br>
        <input type="text" name="nombre"><br>
        
        
        <label for="foto">Foto:</label>
        <input type="file" id="foto" name="foto" ><br>

        <label for="version">Versión:</label>
        <input type="text" id="version" name="version" ><br>

        <label for="categoria">Categoría:</label>
        <input type="text" id="categoria" name="categoria" ><br>

        <label for="editorial">Editorial:</label>
        <input type="text" id="editorial" name="editorial" ><br>

        <label for="fecha">Fecha:</label>
        <input type="date" id="fecha" name="fecha" ><br>

        <label for="stock">Stock:</label>
        <input type="number" id="stock" name="stock" ><br>

        <label for="precio">Precio:</label>
        <input type="number" id="precio" name="precio" ><br>

        <input type="submit" name="enviar" value="Remplazar">
    </form>
    </div> 
</body>
</html>
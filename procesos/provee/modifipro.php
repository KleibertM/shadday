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
    <form action="modifprovee.php" name="modificar" method="GET">
        <label class="title">ID a Buscar</label><br>
        
        <input type="number" name="idprovee" required=""><br><br>
        <label class="title">Datos a Remplazar</label><br>
        
        <label for="ruc">RUC:</label>
            <input type="number" id="ruc" name="ruc" ><br>

            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" ><br>

            <label for="telefon">Teléfono:</label>
            <input type="number" id="telefon" name="telefon" ><br>

            <label for="direccion">Dirección:</label>
            <input type="text" id="direccion" name="direccion" ><br>

            <label for="correo">Correo electrónico:</label>
            <input type="email" id="correo" name="correo" ><br>

        <input type="submit" name="enviar" value="Remplazar">
    </form>
    </div> 
</body>
</html>
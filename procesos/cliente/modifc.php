<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Cliente</title>
</head>
<body>  
<div class="container">
    <form action="modifc.php" name="modificar" method="GET">
        <label class="title">ID de Cliente a Modificar</label><br>
        <input type="number" name="codcliente" required=""><br><br>

        <h2>Datos a Modiicar</h2>
        
        <label>Nombre:</label><br>
        <input type="text" name="nombre"><br>
        <label>Apellido:</label><br>
        <input type="text" name="apellido"><br>
        <label>Teléfono:</label><br>
        <input type="text" name="telefono"><br>
        <label>DNI:</label><br>
        <input type="text" name="dni"><br>
        <label>Dirección:</label><br>
        <input type="text" name="direccion"><br>
        <label>Edad:</label><br>
        <input type="text" name="edad"><br>
        <label for="sexo">Sexo:</label>
            <select name="sexo" id="sexo">
                <option disabled selected value="">Seleccione una opción</option>
                <option value="masculino">Masculino</option>
                <option value="femenino">Femenino</option>
            </select> <br>
        <label>Correo:</label><br>
        <input type="text" name="correo"><br>
        <label>Nombre de usuario:</label><br>
        <input type="text" name="user"><br>
        <label>Contraseña:</label><br>
        <input type="password" name="clave"><br><br>

        <input type="submit" name="enviar" value="Modificar">
    </form>
    </div> 
</body>
</html>
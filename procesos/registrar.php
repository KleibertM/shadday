<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <div class="container" >
        <?php
        include 'conexion.php';

        if (!empty($_POST['registrar'])) {
            if (empty($_POST['nombre']) || empty($_POST['apellido']) || empty($_POST['telefono']) || empty($_POST['dni']) || empty($_POST['direccion']) || empty($_POST['edad']) || empty($_POST['sexo']) || empty($_POST['correo']) || empty($_POST['user']) || empty($_POST['clave'])) {
                echo "<div class='alert alert_info'>Uno de los campos está vacío</div>";
            }elseif (strlen($_POST['dni']) != 8) {
                echo "<div class='alert alert_info'>El DNI debe tener 8 caracteres</div>";
                
            }elseif (strlen($_POST['clave']) < 8) {
                echo "<div class='alert alert_info'>La contraseña debe tener al menos 8 caracteres</div>";
            } else {
                $Nombre = $_POST['nombre'];
                $Apellido = $_POST['apellido'];
                $Telefono = $_POST['telefono'];
                $Dni = $_POST['dni'];
                $Direccion = $_POST['direccion'];
                $Edad = $_POST['edad'];
                $Sexo = $_POST['sexo'];
                $Correo = $_POST['correo'];
                $User = $_POST['user'];
                $Clave = $_POST['clave'];
               
            

                $stmt = $conexion->prepare("SELECT * FROM cliente WHERE dni = :dni");
                $stmt->bindParam(':dni', $Dni);
                $stmt->execute();
                if ($stmt->rowCount() > 0) {
                    echo '<div class="alert alert_error">El DNI ya está registrado</div>';
                } else {
                    $stmt = $conexion->prepare("SELECT * FROM cliente WHERE correo = :correo");
                    $stmt->bindParam(':correo', $Correo);
                    $stmt->execute();
                    if ($stmt->rowCount() > 0) {
                        echo '<div class="alert alert_error">El correo electrónico ya está registrado</div>';
                    } else {
                        $stmt = $conexion->prepare("INSERT INTO cliente (nombre,	apellido,	telefono,	dni,	direccion,	edad,	sexo,	correo,	user,	clave) VALUES (:nombre,	:apellido, :telefono,	:dni,	:direccion,	:edad,	:sexo,	:correo,	:user,	:clave)");

                        $stmt->bindParam(':nombre', $Nombre);
                        $stmt->bindParam(':apellido', $Apellido);
                        $stmt->bindParam(':telefono', $Telefono);
                        $stmt->bindParam(':dni', $Dni);
                        $stmt->bindParam(':direccion', $Direccion);
                        $stmt->bindParam(':edad', $Edad);
                        $stmt->bindParam(':sexo', $Sexo);
                        $stmt->bindParam(':correo',$Correo);
                        $stmt->bindParam(':user', $User);
                        $stmt->bindParam(':clave', $Clave);      
                                
                        
                        if ($stmt->execute()) {

                            header('Location: login.php');

                            echo '<div class="alert alert_exitosa">Usuario registrado correctamente</div>';
                        } else {
                            echo '<div class="alert alert_error">Error al registrar usuario</div>';
                        }
                    }
                }
            }
        }
        ?>
        <h2>Registro de usuario</h2>
        <form action="registrar.php" method="POST" >
            <label>Nombre:</label><br>
            <input type="text" name="nombre"required><br>
            <label>Apellido:</label><br>
            <input type="text" name="apellido"required><br>
            <label>Teléfono:</label><br>
            <input type="text" name="telefono"required><br>
            <label>DNI:</label><br>
            <input type="text" name="dni"required><br>
            <label>Dirección:</label><br>
            <input type="text" name="direccion"required><br>
            <label>Edad:</label><br>
            <input type="text" name="edad"required><br>
            <label for="sexo">Sexo:</label>
                <select name="sexo" id="sexo"required>
                    <option disabled selected value="">Seleccione una opción</option>
                    <option value="masculino">Masculino</option>
                    <option value="femenino">Femenino</option>
                </select> <br>
            <label>Correo:</label><br>
            <input type="text" name="correo"required><br>
            <label>Nombre de usuario:</label><br>
            <input type="text" name="user"required><br>
            <label>Contraseña:</label><br>
            <input type="password" name="clave"required><br>

            <input type="submit" name="registrar" value="Registrarse">
        </form>
        <p class="txt">¿Ya tienes una cuenta? <a href="login.php">Inicia sesión</a></p>
    </div>
</body>
</html>
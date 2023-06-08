<!DOCTYPE html>
<html lang="es" >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Pago</title>
    <link rel="stylesheet" href="cart.css">
</head>
<body>
    <h1>Página de Pago</h1>
    <div class="container" >
        <div class="payment-form">
            <h2 class="title-Pago" >Información de Pago</h2>
            <form action="procesar_pago.php" method="post">
                <label for="nombre_tarjeta">Nombre en la Tarjeta:</label>
                <input type="text" id="nombre_tarjeta" name="nombre_tarjeta" required>
                <label for="numero_tarjeta">Número de Tarjeta:</label>
                <input type="text" id="numero_tarjeta" name="numero_tarjeta" required>
                <label for="fecha_vencimiento">Fecha de Vencimiento:</label>
                <input type="date" id="fecha_vencimiento" name="fecha_vencimiento" required>
                <label for="cvv">CVV:</label>
                <input type="number" id="cvv" name="cvv" required>
                <input type="submit" value="Realizar Pago">
            </form>
        </div>
        <div class="payment-options">
            <h2>Opciones de Pago</h2>
            <p>Si no deseas pagar con tarjeta de crédito, puedes realizar un depósito utilizando las siguientes cuentas:</p>
            <p>Número de cuenta: XXXXXXXXX</p>
            <p>Banco: XXXX</p>
            <p>Nombre del titular de la cuenta: XXXX</p>
            <!-- Agrega aquí las instrucciones y detalles adicionales para los depósitos -->
        </div>
    </div>
</body>
</html>

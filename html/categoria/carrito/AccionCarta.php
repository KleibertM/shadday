<?php

date_default_timezone_set("America/Lima");
// Iniciamos la clase de la carta
include 'La-carta.php';
$cart = new Cart;

// include database configuration file
include 'conexion.php';

if(isset($_REQUEST['action']) && !empty($_REQUEST['action'])){
    if($_REQUEST['action'] == 'addToCart' && !empty($_REQUEST['coditem'])){
        $productID = $_REQUEST['coditem'];
        $cantidad = $_POST['cantidad'];
        // get product details
        $query = $db->query("SELECT * FROM item WHERE coditem = ".$productID);
        $item = $query->fetch_assoc();
        $itemData = array(
            'coditem' => $item['coditem'],
            'nombre' => $item['nombre'],
            'precio' => $item['precio'],
            'cantidad' => $cantidad
        );
        
        $insertItem = $cart->insert($itemData);
        $redirectLoc = $insertItem ? 'VerCarta.php' : 'index.php';
        header("Location: ".$redirectLoc);
    } elseif($_REQUEST['action'] == 'updateCartItem' && !empty($_REQUEST['coditem'])){
        $cantidad = $_POST['cantidad'];
        $itemData = array(
            'rowid' => $_REQUEST['coditem'],
            'cantidad' => $cantidad
        );
        $updateItem = $cart->update($itemData);
        echo $updateItem ? 'ok' : 'err';
        die;
    } elseif($_REQUEST['action'] == 'removeCartItem' && !empty($_REQUEST['coditem'])){
        $deleteItem = $cart->remove($_REQUEST['coditem']);
        header("Location: VerCarta.php");
    } elseif($_REQUEST['action'] == 'placeOrder' && $cart->total_items() > 0 && !empty($_SESSION['sessCustomerID'])){
        // insert order details into database
        $insertOrder = $db->query("INSERT INTO venta (idcliente, total, fecha_hora) VALUES ('".$_SESSION['sessCustomerID']."', '".$cart->total()."', '".date("Y-m-d H:i:s")."')");

        if($insertOrder){
            $orderID = mysqli_insert_id($db);
            $sql = '';
            // get cart items
            $cartItems = $cart->contents();
            foreach($cartItems as $item){
                $sql .= "INSERT INTO detalleventa (venta_FK, item_FK, cantidad) VALUES ('".$orderID."', '".$item['coditem']."', '".$item['cantidad']."');";
            }
            // insert order items into database
            $insertOrderItems = $db->multi_query($sql);
            if ($insertOrderItems) {
                // update inventory
                foreach ($cartItems as $item) {
                    $updateInventory = $db->query("UPDATE item SET stock = stock - " . $item['cantidad'] . " WHERE coditem = " . $item['coditem']);
                    if (!$updateInventory) {
                        die("Error updating inventory for item with ID " . $item['coditem']);
                    }
                }

                // destroy cart and redirect to success page
                $cart->destroy();
                header("Location: OrdenExito.php?coditem=$orderID");
            } else {
                // Ocurrió un error al insertar los elementos del pedido, revertir la transacción
                $db->rollback();
                header("Location: Pagos.php");
            }
        } else {
            header("Location: Pagos.php");
        }
    } else{
        header("Location: index.php");
    }
} else {
    header("Location: index.php");
}

/*date_default_timezone_set("America/Lima");
// Iniciamos la clase de la carta
include 'La-carta.php';
$cart = new Cart;

// include database configuration file
include 'conexion.php';
if(isset($_REQUEST['action']) && !empty($_REQUEST['action'])){
    if($_REQUEST['action'] == 'addToCart' && !empty($_REQUEST['coditem'])){
        $productID = $_REQUEST['coditem'];
        $cantidad = $_POST['cantidad'];
        // get product details
        $query = $db->query("SELECT * FROM item WHERE coditem = ".$productID);
        $item = $query->fetch_assoc();
        $itemData = array(
            'coditem' => $item['coditem'],
            'nombre' => $item['nombre'],
            'precio' => $item['precio'],
            'cantidad' => $cantidad
        );
        
        $insertItem = $cart->insert($itemData);
        $redirectLoc = $insertItem?'VerCarta.php':'index.php';
        header("Location: ".$redirectLoc);
    }elseif($_REQUEST['action'] == 'updateCartItem' && !empty($_REQUEST['coditem'])){
        $cantidad = $_POST['cantidad'];
        $itemData = array(
            'rowid' => $_REQUEST['coditem'],
            'cantidad' => $cantidad
        );
        $updateItem = $cart->update($itemData);
        echo $updateItem?'ok':'err';die;
    }elseif($_REQUEST['action'] == 'removeCartItem' && !empty($_REQUEST['coditem'])){
        $deleteItem = $cart->remove($_REQUEST['coditem']);
        header("Location: VerCarta.php");
    }elseif($_REQUEST['action'] == 'placeOrder' && $cart->total_items() > 0 && !empty($_SESSION['sessCustomerID'])){
        // insert order details into database
        $insertOrder = $db->query("INSERT INTO venta (idcliente, total, fecha_hora) VALUES ('".$_SESSION['sessCustomerID']."', '".$cart->total()."', '".date("Y-m-d H:i:s")."')");
        
        if($insertOrder){
            $orderID = $db->insert_id;
            $sql = '';
            // get cart items
            $cartItems = $cart->contents();
            foreach($cartItems as $item){
                $sql .= "INSERT INTO detalleventa (venta_FK, item_FK, cantidad) VALUES ('".$orderID."', '".$item['coditem']."', '".$item['cantidad']."');";
            }
            // insert order items into database
            $insertOrderItems = $db->multi_query($sql);
            if ($insertOrderItems) {
                // update inventory
                foreach ($cartItems as $item) {
                    $updateInventory = $db->query("UPDATE item SET cantidad = cantidad - " . $item['cantidad'] . " WHERE coditem = " . $item['coditem']);
                    if (!$updateInventory) {
                        die("Error updating inventory for item with ID " . $item['coditem']);
                    }
                }
                
                // destroy cart and redirect to success page
                $cart->destroy();
                header("Location: OrdenExito.php?coditem=$orderID");
            }
            
            if($insertOrderItems){
                $cart->destroy();
                header("Location: OrdenExito.php?coditem=$orderID");
            }else{
                header("Location: Pagos.php");
            }
        }else{
            header("Location: Pagos.php");
        }
    }else{
        header("Location: index.php");
    }
}else{
    header("Location: index.php");
}*/
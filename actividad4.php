<!DOCTYPE html>
<html>
<head>
    <title>Pedido Confirmado</title>
</head>
<body>
    <?php
    $ar = fopen("pedidos.txt", "a") or die("Problemas en la creación");
    fputs($ar, "Nombre: " . $_REQUEST['nombre'] . "\n");
    fputs($ar, "Dirección: " . $_REQUEST['direccion'] . "\n");
    if (isset($_REQUEST['jamon_queso'])) {
        fputs($ar, "Jamón y Queso: " . $_REQUEST['cantidad_jamon_queso'] . "\n");
    }
    if (isset($_REQUEST['napolitana'])) {
        fputs($ar, "Napolitana: " . $_REQUEST['cantidad_napolitana'] . "\n");
    }
    if (isset($_REQUEST['muzzarella'])) {
        fputs($ar, "Muzzarella: " . $_REQUEST['cantidad_muzzarella'] . "\n");
    }
    fputs($ar, "--------------------------------------------------------\n");
    fclose($ar);
    echo "El pedido se ha registrado correctamente.";
    ?>
</body>
</html>

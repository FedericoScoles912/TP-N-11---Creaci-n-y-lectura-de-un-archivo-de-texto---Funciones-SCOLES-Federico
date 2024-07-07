<!DOCTYPE html>
<html>
<head>
    <title>Resultado de Validación</title>
</head>
<body>
    <?php
    function validar_claves($clave1, $clave2) {
        if ($clave1 != $clave2) {
            echo "Las claves no coinciden.";
        } else {
            echo "Las claves coinciden.";
        }
    }

    validar_claves($_REQUEST['clave1'], $_REQUEST['clave2']);
    ?>
</body>
</html>

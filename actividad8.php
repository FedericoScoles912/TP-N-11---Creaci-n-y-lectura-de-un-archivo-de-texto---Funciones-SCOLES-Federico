<!DOCTYPE html>
<html>
<head>
    <title>Resultado de Verificación</title>
</head>
<body>
    <?php
    function es_par($numero) {
        return $numero % 2 == 0;
    }

    if (es_par($_REQUEST['numero'])) {
        echo "El número es par.";
    } else {
        echo "El número es impar.";
    }
    ?>
</body>
</html>

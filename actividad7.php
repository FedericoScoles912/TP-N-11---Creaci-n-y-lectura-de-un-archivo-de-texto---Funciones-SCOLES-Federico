<!DOCTYPE html>
<html>
<head>
    <title>Resultado de Suma</title>
</head>
<body>
    <?php
    function sumar($num1, $num2) {
        return $num1 + $num2;
    }

    $resultado = sumar($_REQUEST['numero1'], $_REQUEST['numero2']);
    echo "La suma de los números es: " . $resultado;
    ?>
</body>
</html>

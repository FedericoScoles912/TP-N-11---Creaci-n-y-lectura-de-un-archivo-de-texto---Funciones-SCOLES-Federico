<!DOCTYPE html>
<html>
<head>
    <title>Comprobantes de Inscripción</title>
</head>
<body>
    <h1>Comprobantes de Inscripción</h1>
    <?php
    $ar = fopen("comprobante.txt", "r") or die("No se pudo abrir el archivo");
    while (!feof($ar)) {
        $linea = fgets($ar);
        $lineasalto = nl2br($linea);
        echo $lineasalto;
    }
    fclose($ar);
    ?>
</body>
</html>

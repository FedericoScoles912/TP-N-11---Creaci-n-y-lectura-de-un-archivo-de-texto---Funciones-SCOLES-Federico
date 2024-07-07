<!DOCTYPE html>
<html>
<head>
    <title>Resultado de Suscripción</title>
</head>
<body>
<?php
echo "Nombre y Apellido: " . $_REQUEST['nombre'] . "<br>";
echo "Edad: " . $_REQUEST['edad'] . "<br>";
echo "DNI: " . $_REQUEST['dni'] . "<br>";
echo "Fecha de Nacimiento: " . $_REQUEST['fecha_nacimiento'] . "<br>";
echo "Género: " . $_REQUEST['genero'] . "<br>";
echo "Lugar de Nacimiento: " . $_REQUEST['lugar_nacimiento'] . "<br>";
echo "Dirección: " . $_REQUEST['direccion'] . "<br>";
echo "Intereses y/o Hobbies: " . $_REQUEST['intereses'] . "<br>";
echo "Comentarios: " . $_REQUEST['comentarios'] . "<br>";
?>
</body>
</html>

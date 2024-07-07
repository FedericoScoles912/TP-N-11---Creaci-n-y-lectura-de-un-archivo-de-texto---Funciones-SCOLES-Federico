<!DOCTYPE html>
<html>
<head>
    <title>Confirmación de Inscripción</title>
</head>
<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nombre = $_REQUEST['nombre'];
        $dni = $_REQUEST['dni'];
        $fecha_nacimiento = $_REQUEST['fecha_nacimiento'];
        $curso_actual = $_REQUEST['curso_actual'];
        $materias_adeudadas = $_REQUEST['materias_adeudadas'];
        $materia_inscripcion = $_REQUEST['materia_inscripcion'];
        $fecha_inscripcion = $_REQUEST['fecha_inscripcion'];
        
        $ar = fopen("comprobante.txt", "a") or die("Problemas en la creación del archivo");
        fputs($ar, "Apellidos y Nombres: $nombre\n");
        fputs($ar, "DNI: $dni\n");
        fputs($ar, "Fecha de Nacimiento: $fecha_nacimiento\n");
        fputs($ar, "Curso Actual: $curso_actual\n");
        fputs($ar, "Cantidad de Materias adeudadas: $materias_adeudadas\n");
        fputs($ar, "Materia y Curso de Inscripción: $materia_inscripcion\n");
        fputs($ar, "Fecha de Inscripción: $fecha_inscripcion\n");
        fputs($ar, "--------------------------------------------------------\n");
        fclose($ar);
        
        echo "La inscripción se realizó correctamente.";
    } else {
        echo "Por favor complete el formulario.";
    }
    ?>
</body>
</html>

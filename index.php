<?php
    require("alumnos.php");
    require("asignaturas.php");
    session_start();

  
    $alumnos = array();


    if (isset($_SESSION['arrayAlumnos']) == false) {
        $alumno = new Alumno('Dni1', 'Nombre1', 'Apellidos1', 'Correo1', 'Direccion1');
        array_push($alumnos, $alumno);
        $alumno = new Alumno('Dni2', 'Nombre2', 'Apellidos2', 'Correo2', 'Direccion2');
        array_push($alumnos, $alumno);
        $alumno = new Alumno('Dni3', 'Nombre3', 'Apellidos3', 'Correo3', 'Direccion3');
        array_push($alumnos, $alumno);

        $_SESSION['arrayAlumnos'] = $alumnos;
    }
    $asignaturas = array();


    if (isset($_SESSION['arrayAsignaturas']) == false) {
        $asignatura = new Asignatura('Codigo1', 'Descripcion1');
        array_push($asignaturas, $asignatura);
        $asignatura = new Asignatura('Codigo2', 'Descripcion2');
        array_push($asignaturas, $asignatura);
        $asignatura = new Asignatura('Codigo3', 'Descripcion3');
        array_push($asignaturas, $asignatura);

        $_SESSION['arrayAsignaturas'] = $asignaturas;
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instituto home</title>
</head>
<body>
    <h2>Instituto</h2>
    <button><a href="listadoAlumnos.php">Alumnos</a></button>
    <button><a href="listadoAsignaturas.php">Asignaturas</a></button>
</body>
</html>
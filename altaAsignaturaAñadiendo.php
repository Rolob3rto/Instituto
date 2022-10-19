<?php
    require 'asignaturas.php';

    if ($_POST) {
        session_start();

        $asignatura = new Asignatura($_POST['Codigo'], $_POST['Descripcion']);
        
        $Asignaturas = $_SESSION['arrayAsignaturas'];

        array_push($Asignaturas, $asignatura);

        $_SESSION['arrayAsignaturas'] = $Asignaturas;

        header("Location: listadoAsignaturas.php");
    }
?>
<?php
    require 'alumnos.php';

    if ($_POST) {
        session_start();

        $alumno = new Alumno($_POST['Dni'], $_POST['Nombre'], $_POST['Apellidos'], $_POST['Correo'] ,$_POST['Direccion']);
        
        $Alumnos = $_SESSION['arrayAlumnos'];

        array_push($Alumnos, $alumno);

        $_SESSION['arrayAlumnos'] = $Alumnos;

        header("Location: listadoAlumnos.php");
    }
?>
<?php
    require 'alumnos.php';
    if ($_POST) {
        session_start();

        $alumno = new Alumno($_POST['Dni'], $_POST['Nombre'], $_POST['Apellidos'],$_POST['Correo'] ,$_POST['Direccion']);
        
        $alumnos = $_SESSION['arrayAlumnos'];                

        for ($i=0; $i < count($alumnos); $i++) { 
            if ($alumnos[$i]->Dni == $_POST['Dni']) {
                $alumnos[$i] = $alumno;
                break;
            }
        }

        $_SESSION['arrayAlumnos'] = $alumnos;

        header("Location: listadoAlumnos.php");
    }
?>
<?php
    require 'asignaturas.php';
    if ($_POST) {
        session_start();

        $asignatura = new Asignatura($_POST['Codigo'], $_POST['Descripcion']);
        
        $asignaturas = $_SESSION['arrayAsignaturas'];                

        for ($i=0; $i < count($asignaturas); $i++) { 
            if ($asignaturas[$i]->Codigo == $_POST['Codigo']) {
                
                $asignaturas[$i] = $asignatura;
                
                break;
            }
        }

        $_SESSION['arrayAsignaturas'] = $asignaturas;

        //header("Location: listadoAsignaturas.php");
    }
?>
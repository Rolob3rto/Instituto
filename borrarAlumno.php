<?php
    require 'alumnos.php';
    if ($_POST) {
        session_start();
        
        
        $alumnos = $_SESSION['arrayAlumnos']; 

        for ($i=0; $i < count($alumnos); $i++) { 
            if ($alumnos[$i]->Dni == $_POST['Dni']) {
                array_splice($alumnos, $i, 1);                
                break;
                $alumnos = $_SESSION['arrayAlumnos'];                
        
            }
        }

        $_SESSION['arrayAlumnos'] = $alumnos;

        header("Location: listadoAlumnos.php");
    }
?>
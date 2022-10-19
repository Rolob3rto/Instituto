<?php
    require 'asignaturas.php';
    if ($_POST) {
        session_start();
        
        
        $asignaturas = $_SESSION['arrayAsignaturas']; 

        for ($i=0; $i < count($asignaturas); $i++) { 
            if ($asignaturas[$i]->Codigo == $_POST['Codigo']) {
                array_splice($asignaturas, $i, 1);                
                break;
                $asignaturas = $_SESSION['arrayAsignaturas'];                
        
            }
        }

        $_SESSION['arrayAsignaturas'] = $asignaturas;

        header("Location: listadoAsignaturas.php");
    }
?>
<?php
    require 'socios.php';
    if ($_POST) {
        session_start();

        $socio = new Socio($_POST['Dni'], $_POST['Nombre'], $_POST['Apellidos'],$_POST['Edad'] ,$_POST['Direccion']);
        
        $socios = $_SESSION['arraySocios'];                

        for ($i=0; $i < count($socios); $i++) { 
            if ($socios[$i]->Dni == $_POST['Dni']) {
                $socios[$i] = $socio;
                break;
            }
        }

        $_SESSION['arraySocios'] = $socios;

        header("Location: listadoSocios.php");
    }
?>
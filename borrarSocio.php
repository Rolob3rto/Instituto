<?php
    require 'socios.php';
    if ($_POST) {
        session_start();
        
        
        $socios = $_SESSION['arraySocios'];                

        for ($i=0; $i < count($socios); $i++) { 
            if ($socios[$i]->Dni == $_POST['Dni']) {
                array_splice($socios, $i, 1);                
                break;
                $socios = $_SESSION['arraySocios'];                
        
            }
        }

        $_SESSION['arraySocios'] = $socios;

        header("Location: listadoSocios.php");
    }
?>
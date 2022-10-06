<?php
    require 'libreria.php';
    if ($_POST) {
        session_start();
        
        
        $libros = $_SESSION['arrayLibros'];                

        for ($i=0; $i < count($libros); $i++) { 
            if ($libros[$i]->isbn == $_POST['isbn']) {
                array_splice($libros, $i, 1);                
                break;
            }
        }

        $_SESSION['arrayLibros'] = $libros;

        header("Location: https://localhost/app-php/biblioteca/listadoLibros.php");
    }
?>
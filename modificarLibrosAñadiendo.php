<?php
    require 'libreria.php';
    if ($_POST) {
        session_start();

        $libro = new Libro($_POST['isbn'], $_POST['titulo'], $_POST['autor']);
        
        $libros = $_SESSION['arrayLibros'];                

        for ($i=0; $i < count($libros); $i++) { 
            if ($libros[$i]->isbn == $_POST['isbn']) {
                $libros[$i] = $libro;
                break;
            }
        }

        $_SESSION['arrayLibros'] = $libros;

        header("Location: https://localhost/app-php/biblioteca/listadoLibros.php");
    }
?>
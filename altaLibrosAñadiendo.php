<?php
    require 'libreria.php';
    if ($_POST) {
        session_start();

        $libro = new Libro($_POST['isbn'], $_POST['titulo'], $_POST['autor']);
        
        $libros = $_SESSION['arrayLibros'];

        array_push($libros, $libro);

        $_SESSION['arrayLibros'] = $libros;

        header("Location: listadoLibros.php");
    }
?>
<?php
    require 'libreria.php';
    if ($_POST) {
        session_start();

        $libro = new Libro($_POST['isbn'], $_POST['titulo'], $_POST['autor']);

        /* $libro ->isbn = $_POST['isbn'];
        $libro ->titulo = $_POST['titulo'];
        $libro ->autor = $_POST['autor']; */
        
        $libros = $_SESSION['arrayLibros'];

        array_push($libros, $libro);

        $_SESSION['arrayLibros'] = $libros;

        header("Location: https://localhost/app-php/biblioteca/listadoLibros.php");
    }
?>
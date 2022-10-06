<?php

    session_start();

    $libros = array();


    if (isset($_SESSION['arrayLibros']) == false) {
        $_SESSION['arrayLibros'] = $libros;
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca home</title>
</head>
<body>
    
    <button><a href="listadoLibros.php">Libros</a></button>
    <button><a href="">Socios</a></button>
</body>
</html>
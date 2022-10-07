<?php

    session_start();

    $libros = array();
    $socios = array();


    if (isset($_SESSION['arrayLibros']) == false) {
        $_SESSION['arrayLibros'] = $libros;
    }

    if (isset($_SESSION['arraySocios']) == false) {
        $_SESSION['arraySocios'] = $socios;
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
    <h2>Biblioteca</h2>
    <button><a href="listadoLibros.php">Libros</a></button>
    <button><a href="listadoSocios.php">Socios</a></button>
</body>
</html>
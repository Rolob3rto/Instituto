<?php
    require("libreria.php");
    require("socios.php");
    session_start();

    $libros = array();
    $socios = array();


    if (isset($_SESSION['arrayLibros']) == false) {

        $libro = new Libro('isbn1','titulo1' ,'autor1');
        array_push($libros, $libro);
        $libro = new Libro('isbn2','titulo2' ,'autor2');
        array_push($libros, $libro);
        $libro = new Libro('isbn3','titulo3' ,'autor3');
        array_push($libros, $libro);

        $_SESSION['arrayLibros'] = $libros;
    }

    if (isset($_SESSION['arraySocios']) == false) {
        $socio = new Socio('Dni1', 'Nombre1', 'Apellidos1', 'Edad1', 'Direccion1');
        array_push($socios, $socio);
        $socio = new Socio('Dni2', 'Nombre2', 'Apellidos2', 'Edad2', 'Direccion2');
        array_push($socios, $socio);
        $socio = new Socio('Dni3', 'Nombre3', 'Apellidos3', 'Edad3', 'Direccion3');

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
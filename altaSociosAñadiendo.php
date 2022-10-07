<?php
    require 'socios.php';

    if ($_POST) {
        session_start();

        $socio = new Socio($_POST['Dni'], $_POST['Nombre'], $_POST['Apellidos'], $_POST['Edad'] ,$_POST['Direccion']);
        
        $Socios = $_SESSION['arraySocios'];

        array_push($Socios, $socio);

        $_SESSION['arraySocios'] = $Socios;

        header("Location: listadoSocios.php");
    }
?>
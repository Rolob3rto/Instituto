<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Alumnos</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        table,
        td {
            border: 1px solid black;
        }
        th{
            border: 1px solid black;
            padding: 1em;
            background-color: darkgray;
        }       
        tr:nth-child(2){
            color: white;
        }

        td {
            text-align: center;
            background-color: white;
            padding: 1em;
        }
        td:nth-child(6){
            display: flex;
            flex-direction: row;
        }

        table {
            background-color: gray;
        }

        button{
            margin: 0.5em;
        }
    </style>
</head>

<body>
    <h1>Listado Alumnos</h1>

    <table>
        <tr>
            <th>---</th>
            <th>---</th>
            <th>listado</th>
            <th>Alumnos</th>
            <th>---</th>
            <th>---</th>
        </tr>
        <tr>
            <th>Dni</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Correo</th>
            <th>Direccion</th>
            <th>
                <form action="altaAlumnos.php" method="post">
                    <button type="submit">Nuevo alumno</button>
                </form>
            </th>
        </tr>

        <?php
            require 'alumnos.php';

        session_start();

        $arrayAlumnos = $_SESSION['arrayAlumnos'];

        //print_r($arrayAlumnos);

        for ($i = 0; $i < count($arrayAlumnos); $i++) {
            $obj = $arrayAlumnos[$i];
            
            echo "<tr>"; 
            echo "<td>$obj->Dni</td>";
            echo "<td>$obj->Nombre</td>";
            echo "<td>$obj->Apellidos</td>";
            echo "<td>$obj->Correo</td>";
            echo "<td>$obj->Direccion</td>";
            echo "<td><form action='modificarAlumno.php' method='post'>";
            echo "<input type='hidden' name='Dni' value='$obj->Dni'>";
            echo "<input type='hidden' name='Nombre' value='$obj->Nombre'>";
            echo "<input type='hidden' name='Apellidos' value='$obj->Apellidos'>";
            echo "<input type='hidden' name='Correo' value='$obj->Correo'>";
            echo "<input type='hidden' name='Direccion' value='$obj->Direccion'>";
            echo "<button type='submit'>Editar</button>";
            echo "</form>";
            echo "<form action='borrarAlumno.php' method='post'>";
            echo "<input type='hidden' name='Dni' value='$obj->Dni'>";
            echo "<button type='submit'>Borrar</button>";
            echo "</form></td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>
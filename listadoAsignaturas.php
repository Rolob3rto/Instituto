<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Asignaturas</title>
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
    <h1>Listado Asignaturas</h1>

    <table>
        <tr>
            <th>---</th>
            <th>listado Asignaturas</th>
            <th>---</th>
        </tr>
        <tr>
            <th>Codigo</th>
            <th>Descripcion</th>           
            <th>
                <form action="altaAsignaturas.php" method="post">
                    <button type="submit">Nueva asignatura</button>
                </form>
            </th>
        </tr>

        <?php
            require 'asignaturas.php';

        session_start();

        $arrayAsignaturas = $_SESSION['arrayAsignaturas'];

        //print_r($arrayAsignaturas);

        for ($i = 0; $i < count($arrayAsignaturas); $i++) {
            $obj = $arrayAsignaturas[$i];

            echo "<tr>"; 
            echo "<td>$obj->Codigo</td>";
            echo "<td>$obj->Descripcion</td>";            
            echo "<td><form action='modificarAsignatura.php' method='post'>";
            echo "<input type='hidden' name='Codigo' value='$obj->Codigo'>";
            echo "<input type='hidden' name='Descripcion' value='$obj->Descripcion'>";            
            echo "<button type='submit'>Editar</button>";
            echo "</form>";
            echo "<form action='borrarAsignatura.php' method='post'>";
            echo "<input type='hidden' name='Codigo' value='$obj->Codigo'>";
            echo "<button type='submit'>Borrar</button>";
            echo "</form></td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>
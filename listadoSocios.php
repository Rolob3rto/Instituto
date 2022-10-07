<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Socios</title>
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
        }       
        tr:nth-child(2){
            color: white;
        }

        td {
            text-align: center;
            background-color: white;
            padding: 1em;
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
    <h1>Listado Libros</h1>

    <table>
        <tr>
            <th>---</th>
            <th>listado</th>
            <th>---</th>
            <th>Socios</th>
            <th>---</th>
            <th>---</th>
        </tr>
        <tr>
            <th>Dni</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Edad</th>
            <th>Direccion</th>
            <th>
                <form action="altaSocios.php" method="post">
                    <button type="submit">Nuevo socio</button>
                </form>
            </th>
        </tr>

        <?php
            require 'socios.php';

        session_start();

        $arraySocios = $_SESSION['arraySocios'];

        //print_r($arraySocios);

        for ($i = 0; $i < count($arraySocios); $i++) {
            $obj = $arraySocios[$i];
            /* echo "<tr>
                <td>ej-Nombre</td>
                <td>ej-tit</td>
                <td>ej-Dni</td>
                <td><button>editar</button>
                <button>borrar</button></td>
            </tr>"; */
            echo "<tr>"; 
            echo "<td>$obj->Dni</td>";
            echo "<td>$obj->Nombre</td>";
            echo "<td>$obj->Apellidos</td>";
            echo "<td>$obj->Edad</td>";
            echo "<td>$obj->Direccion</td>";
            echo "<td><form action='modificarSocios.php' method='post'>";
            echo "<input type='hidden' name='Dni' value='$obj->Dni'>";
            echo "<input type='hidden' name='Nombre' value='$obj->Nombre'>";
            echo "<input type='hidden' name='Apellidos' value='$obj->Apellidos'>";
            echo "<input type='hidden' name='Edad' value='$obj->Edad'>";
            echo "<input type='hidden' name='Direccion' value='$obj->Direccion'>";
            echo "<button type='submit'>Editar</button>";
            echo "</form>";
            echo "<form action='borrarSocio.php' method='post'>";
            echo "<input type='hidden' name='Dni' value='$obj->Dni'>";
            echo "<button type='submit'>Borrar</button>";
            echo "</form></td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>
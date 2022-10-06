<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de libros</title>
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
            <th>libros</th>
            <th>---</th>
        </tr>
        <tr>
            <th>isbn</th>
            <th>titulo</th>
            <th>autor</th>
            <th>
                <form action="altaLibros.php" method="post">
                    <button type="submit">Nuevo libro</button>
                </form>
            </th>
        </tr>

        <?php
            require 'libreria.php';

        session_start();

        $arrayLibros = $_SESSION['arrayLibros'];

        //print_r($arrayLibros);

        for ($i = 0; $i < count($arrayLibros); $i++) {
            $obj = $arrayLibros[$i];
            /* echo "<tr>
                <td>ej-isbn</td>
                <td>ej-tit</td>
                <td>ej-autor</td>
                <td><button>editar</button>
                <button>borrar</button></td>
            </tr>"; */
            echo "<tr>"; 
            echo "<td>$obj->isbn</td>";
            echo "<td>$obj->titulo</td>";
            echo "<td>$obj->autor</td>";
            echo "<td><form action='modificarLibros.php' method='post'>";
            echo "<input type='hidden' name='isbn' value='$obj->isbn'>";
            echo "<input type='hidden' name='titulo' value='$obj->titulo'>";
            echo "<input type='hidden' name='autor' value='$obj->autor'>";
            echo "<button type='submit'>Editar</button>";
            echo "</form>";
            echo "<form action='borrarLibros.php' method='post'>";
            echo "<input type='hidden' name='isbn' value='$obj->isbn'>";
            echo "<button type='submit'>Borrar</button>";
            echo "</form></td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>
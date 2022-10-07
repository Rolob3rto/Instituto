<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta de libro</title>
    <style>
        body, label, button{
            display: flex;
            align-items: center;
            justify-content: space-around;        
            padding: 0.5em;    
        }
    </style>
</head>
<body>
    <form action="altaSociosAñadiendo.php" method="post">
        <label>Dni: <input name="Dni" type="text"></label>
        <label>Nombre: <input name="Nombre" type="text"></label>
        <label>Apellidos: <input name="Apellidos" type="text"></label>
        <label>Edad: <input name="Edad" type="text"></label>
        <label>Dirección: <input name="Direccion" type="text"></label>
        <br/>
        <button type="submit">Dar de alta</button>
    </form>
</body>
</html>
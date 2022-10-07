<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificacion de Socio</title>
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
    <form action="modificarSociosAñadiendo.php" method="post">
        <label>Dni: <input name="Dni" type="text" value='<?= $_POST['Dni']?>' ></label>
        <label>Nombre: <input name="Nombre" type="text" value='<?= $_POST['Nombre']?>'></label>
        <label>Apellidos: <input name="Apellidos" type="text" value='<?= $_POST['Apellidos']?>'></label>
        <label>Edad: <input name="Edad" type="text" value='<?= $_POST['Edad']?>'></label>
        <label>Direccion: <input name="Direccion" type="text" value='<?= $_POST['Direccion']?>'></label>
        <br/>
        <button type="submit">Modificar</button>
    </form>
</body>
</html>
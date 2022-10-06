<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificacion de libro</title>
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
    <form action="modificarLibrosAñadiendo.php" method="post">
        <label>isbn: <input name="isbn" type="text" value='<?= $_POST['isbn']?>' ></label>
        <label>titulo: <input name="titulo" type="text" value='<?= $_POST['titulo']?>'></label>
        <label>autor: <input name="autor" type="text" value='<?= $_POST['autor']?>'></label>
        <br/>
        <button type="submit">Modificar</button>
    </form>
</body>
</html>
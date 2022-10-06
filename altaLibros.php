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
    <form action="altaLibrosAñadiendo.php" method="post">
        <label>isbn: <input name="isbn" type="text"></label>
        <label>titulo: <input name="titulo" type="text"></label>
        <label>autor: <input name="autor" type="text"></label>
        <br/>
        <button type="submit">Dar de alta</button>
    </form>
</body>
</html>
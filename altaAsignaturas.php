<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta de asignatura</title>
    <style>
        body, label, button, form{
            display: flex;
            align-items: center;
            justify-content: space-around;        
            padding: 0.5em;    
            flex-direction: column;
        }
        label{
            display: flex;
            flex-direction: row;            
        }
    </style>
</head>
<body>
    <form action="altaAsignaturaAñadiendo.php" method="post">
        <label>Codigo: <input name="Codigo" type="text"></label>
        <label>Descripcion: <input name="Descripcion" type="text"></label>
        <br/>
        <button type="submit">Dar de alta</button>
    </form>
</body>
</html>
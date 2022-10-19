<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificacion de Asignatura</title>
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
    <form action="modificarAsignaturaAñadiendo.php" method="post">
        <label>Codigo: <input name="Codigo" type="text" value='<?= $_POST['Codigo']?>'></label>
        <label>Descripcion: <input name="Descripcion" type="text" value='<?= $_POST['Descripcion']?>'></label>        
        <br/>
        <button type="submit">Modificar</button>
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal Form</title>
</head>
<body>
    <form action="index.php?controlador=animal&accion=guardar" method = "post">
        <input type="hidden" name="id" value="<?php echo $animal->id ?>">    
        <table>
            <tr>
                <td>Nombre</td>
                <td><input type="text" name="nombre" value="<?php echo $animal->nombre ?>"></td>
            </tr>
            <tr>
                <td>Raza</td>
                <td><input type="text" name="raza" value="<?php echo $animal->raza ?>"></td>
            </tr>
            <tr>
                <td>Sexo</td>
                <td><input type="text" name="sexo" value="<?php echo $animal->sexo ?>"></td>
            </tr>
            <tr>
                <td>Color</td>
                <td><input type="text" name="color" value="<?php echo $animal->color ?>"></td>
            </tr>
            <tr>
                <td>Edad</td>
                <td><input type="text" name="edad" value="<?php echo $animal->edad ?>"></td>
            </tr>       

            <tr>
                <td><input type="submit" name="guardar" value="Guardar"></td>
            </tr>                    
        </table>
    </form>    
    
</body>
</html>
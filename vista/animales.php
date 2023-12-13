<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animales</title>
</head>
<body>
   <a href="index.php?controlador=animal&accion=mostrarAnimal">Nuevo</a>    
    <table>
        <tr><?php require_once("core/constantes.php");
        foreach(animalColumns as $value): ?>
        <td><?php echo $value; ?></td>
        <?php endforeach; ?>
    </tr>
    <?php foreach($this->consultarTodo() as $animal):?>
    <tr>
        <td><?php echo $animal->nombre ?></td>
        <td><?php echo $animal->apellido?></td>
        <td><?php echo $animal->telefono ?></td>
        <td><?php echo $animal->edad ?></td>
        <td><a href="index.php?controlador=animal&accion=mostrarAnimal&id=<?php echo $animal->id?>">Editar</a></td>
        <td><a href="index.php?controlador=animal&accion=eliminar&&id=<?php echo $animal->id?>" onclick="javascript:return confirm('¿Seguro de eliminar este registro?')" >Eliminar</a></td>
    </tr>
    <?php endforeach; ?>    
    </table>
    
</body>
</html>
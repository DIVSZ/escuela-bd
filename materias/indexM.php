<?php

require_once("../lib/functions.php");
$users = get_all_materias ($connect);



?>

<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>materias - escuela-bd</title>
</head>
<body>
    <h1>MATERIAS<br><small> <a href = "../materias/formularioM.php">insertar materia</a></small></h1> <table><thead>
        <tr><th>ID</th>
        <th>NOMBRE</th>
        <th>CUATRIMESTRE</th>
        <th>LICENCIATURA</th>

        </tr>
    </thead>
    <tbody>
        <?php
        while ($fila = mysqli_fetch_array($users))
        {
        ?>
        <tr>
            <td><?php echo $fila["id"]?> </td>
            <td><?php echo $fila["nombre"]?> </td>
            <td><?php echo $fila["cuatrimestre"]?> </td>
            <td><?php echo $fila["licenciatura"]?> </td>
            <td><a href="detailM.php?id=<?php echo $fila['id']; ?>">Detalle</a></td>
            <td><a href="formularioM_update.php?id=<?php echo $fila['id']; ?>">Editar</a></td>
            <td><a href="formularioM_delete.php?id=<?php echo $fila['id']; ?>">Eliminar</a></td>
        </tr>
        <?php    
        }
        ?>
    </tbody>
    </table>
    
</body>
</html>
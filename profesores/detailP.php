<?php
$id = $_GET['id'];
require_once("../lib/functions.php");
$resultado = get_profesor($connect,$id);
$profesor = mysqli_fetch_array($resultado);



?>

<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profesores - escuela-bd</title>
</head>

<body>
    <h1>Detalle del profesor <?php echo $profesor['apellido']." ". $profesor['nombre']?> <small> <a href = "../profesores/indexP.php">Regresar</a></small></h1><table><thead>
        <tr><th>ID</th>
        <th>NOMBRE</th>
        <th>APELLIDOS</th>
        <th>TELÉFONO</th>
        <th>CORREO ELECTRÓNICO</th>
        <th>ESTATUS</th>


        </tr>
    </thead>
    <tbody>
        
        <tr>
        
            <td><?php echo $profesor ['id']; ?></td>
            <td><?php echo $profesor ['nombre']; ?></td>
            <td><?php echo $profesor ['apellido']; ?></td>
            <td><?php echo $profesor ['telefono']; ?></td>
            <td><?php echo $profesor ['correo']; ?></td>
            <td><?php echo $profesor ['estatus']; ?></td>

            

        </tr>
        
    </tbody>
    </table>

</body>
</html>
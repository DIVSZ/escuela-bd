<?php
require_once("../lib/functions.php");
$id = $_GET['id'];
$resultado = get_profesor($connect,$id);
$profesor = mysqli_fetch_array($resultado);
?>

<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
</head>

<body>

<h1>formulario delete profesores</h1>

<form action= "deleteP_query.php" method="post">
    

<class= "elem-group">

<label for="name">Nombre</label> <br>
<input type="text" id= "name" name= "name" placeholder = "introduzca su nombre" value ="<?php echo $profesor['nombre']; ?>">
<input type="hidden" id= "id" name= "id" value ="<?php echo $profesor['id']; ?>">
<br><br><br>

<label for="apellido">Apellido</label> <br>
<input type="text" id= "apellido" name= "apellido" placeholder = "introduzca su apellido"value ="<?php echo $profesor['apellido']; ?>">
<br><br><br>

<label for="telefono">Telefono</label> <br>
<input type="text" id= "telefono" name= "telefono" placeholder = "introduzca su telefono"value ="<?php echo $profesor['telefono']; ?>">
<br><br><br>

<label for="correo">Correo</label> <br>
<input type="text" id= "correo" name= "correo" placeholder = "introduzca su correo"value ="<?php echo $profesor['correo']; ?>">
<br><br><br>

<label for="estatus">Estatus</label> <br>
<input type="text" id= "estatus" name= "estatus" placeholder = "introduzca su estatus"value ="<?php echo $profesor['estatus']; ?>">
<br><br>

<input type="submit">

</form>

</body>
</html>
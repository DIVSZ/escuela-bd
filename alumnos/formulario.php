<?php
require_once("../lib/functions.php");
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

<h1>formulario insert alumnos</h1>

<form action= "insert.php" method="post">
    

<class= "elem-group">

<label for="name">Nombre</label> <br>
<input type="text" id= "name" name= "name" placeholder = "introduzca su nombre">
<br><br><br>

<label for="apellido">Apellido</label> <br>
<input type="text" id= "apellido" name= "apellido" placeholder = "introduzca su apellido">
<br><br><br>

<label for="telefono">Telefono</label> <br>
<input type="text" id= "telefono" name= "telefono" placeholder = "introduzca su telefono">
<br><br><br>

<label for="correo">Correo</label> <br>
<input type="text" id= "correo" name= "correo" placeholder = "introduzca su correo">
<br><br><br>

<label for="licenciatura">Licenciatura</label> <br>
<input type="text" id= "licenciatura" name= "licenciatura" placeholder = "introduzca su licenciatura">
<br><br><br>

<label for="cuatrimestre">Cuatrimestre</label> <br>
<input type="text" id= "cuatrimestre" name= "cuatrimestre" placeholder = "introduzca su cuatrimestre">
<br><br><br>

<label for="estatus">Estatus</label> <br>
<input type="text" id= "estatus" name= "estatus" placeholder = "introduzca su estatus">
<br><br>

<input type="submit">

</form>

</body>
</html>

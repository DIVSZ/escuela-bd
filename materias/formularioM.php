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

<h1>formulario insert materias</h1>

<form action= "insertM.php" method="post">
    

<class= "elem-group">



<label for="name">Nombre</label> <br>
<input type="text" id= "name" name= "name" placeholder = "introduzca su nombre">
<br><br><br>

<label for="cuatrimestre">Cuatrimestre</label> <br>
<input type="text" id= "cuatrimestre" name= "cuatrimestre" placeholder = "introduzca su cuatrimestre">
<br><br><br>

<label for="licenciatura">Licenciatura</label> <br>
<input type="text" id= "licenciatura" name= "licenciatura" placeholder = "introduzca su licenciatura">
<br><br><br>

<input type="submit">

</form>

</body>
</html>

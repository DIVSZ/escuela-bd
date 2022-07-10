<?php
require_once("../lib/functions.php");
$id = $_GET['id'];
$resultado = get_materia($connect,$id);
$materia = mysqli_fetch_array($resultado);

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

<h1>formulario delete materias</h1>

<form action= "deleteM_query.php" method="post">
    

<class= "elem-group">

<label for="name">Nombre</label> <br>
<input type="text" id= "name" name= "name" placeholder = "introduzca su nombre" value ="<?php echo $materia['nombre']; ?>">
<input type="hidden" id= "id" name= "id" value ="<?php echo $materia['id']; ?>">
<br><br><br>

<label for="cuatrimestre">Cuatrimestre</label> <br>
<input type="text" id= "cuatrimestre" name= "cuatrimestre" placeholder = "introduzca su cuatrimestre"value ="<?php echo $materia['cuatrimestre']; ?>">
<br><br><br>


<label for="licenciatura">Licenciatura</label> <br>
<input type="text" id= "licenciatura" name= "licenciatura" placeholder = "introduzca su licenciatura"value ="<?php echo $materia['licenciatura']; ?>">
<br><br><br>



<input type="submit">

</form>

</body>
</html>
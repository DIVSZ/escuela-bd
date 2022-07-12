<?php
//detalles alumnos//
require_once("../lib/connect.php");

function get_all_alumnos($connect)
{
$consulta = "SELECT * FROM alumnos";
$resultado = mysqli_query($connect, $consulta);
return $resultado;
}

function get_alumno($connect,$id)
{
$consulta = "SELECT * FROM alumnos WHERE id = $id";
$resultado = mysqli_query($connect, $consulta);
return $resultado;
}

//detalles profesores//


function get_all_profesores($connect)
{
$consulta = "SELECT * FROM profesores";
$resultado = mysqli_query($connect, $consulta);
return $resultado;
}

function get_profesor($connect,$id)
{
$consulta = "SELECT * FROM profesores WHERE id = $id";
$resultado = mysqli_query($connect, $consulta);
return $resultado;
}

//detalles materias//


function get_all_materias($connect)
{
$consulta = "SELECT * FROM materias";
$resultado = mysqli_query($connect, $consulta);
return $resultado;
}

function get_materia($connect,$id)
{
$consulta = "SELECT * FROM materias WHERE id = $id";
$resultado = mysqli_query($connect, $consulta);
return $resultado;
}

//formulario insert alumnos//

function
insertar_alumnos($name,$apellido,$telefono,$correo,$licenciatura,$cuatrimestre,$estatus){

    global $connect;

$consulta = "INSERT INTO alumnos(nombre,apellido,telefono,correo,licenciatura,cuatrimestre,estatus) VALUES ('$name','$apellido','$telefono','$correo','$licenciatura','$cuatrimestre','$estatus')";
if ($correo == $correo)
        {
        echo "<font color='red'>  ¡¡ERROR no se pudo insertar el correo!! este correo ya ha sido registrado";
        }
$resultado = mysqli_query($connect, $consulta);

       
}

//formulario insert materias//

function
insertar_materias($name,$cuatrimestre,$licenciatura){

global $connect;

$consulta = "INSERT INTO materias(nombre,cuatrimestre,licenciatura) VALUES ('$name','$cuatrimestre','$licenciatura')";


$resultado = mysqli_query($connect, $consulta);
}

//formulario insert profesores//

function
insertar_profesores($name,$apellido,$telefono,$correo,$estatus){


global $connect;

$consulta = "INSERT INTO profesores(nombre,apellido,telefono,correo,estatus) VALUES ('$name','$apellido','$telefono','$correo','$estatus')";
if ($correo == $correo)
        {
        echo "<font color='red'>  ¡¡ERROR no se pudo insertar el correo!! este correo ya ha sido registrado";
        }
    $resultado = mysqli_query($connect, $consulta);
}

//update alumnos
function
update_alumnos($name,$apellido,$telefono,$correo,$licenciatura,$cuatrimestre,$estatus,$id)
{
    global $connect;

    $consulta = "UPDATE alumnos SET nombre='$name',apellido='$apellido',telefono='$telefono',correo='$correo',licenciatura='$licenciatura',cuatrimestre='$cuatrimestre',estatus='$estatus' WHERE id= $id";
    if ($correo == $correo)
        {
        echo "<font color='red'>  ¡¡ERROR no se pudo insertar el correo!! este correo ya ha sido registrado";
        }
    $resultado = mysqli_query($connect, $consulta);
}

//update materias
function
update_materias($name,$cuatrimestre,$licenciatura,$id)
{
    global $connect;

    $consulta = "UPDATE materias SET nombre='$name',cuatrimestre='$cuatrimestre',licenciatura='$licenciatura' WHERE id= $id";
    
    $resultado = mysqli_query($connect, $consulta);
}

//update profesores
function
update_profesores($name,$apellido,$telefono,$correo,$estatus,$id)
{
    global $connect;

    $consulta = "UPDATE profesores SET nombre='$name',apellido='$apellido',telefono='$telefono',correo='$correo',estatus='$estatus' WHERE id= $id";
    if ($correo == $correo)
        {
        echo "<font color='red'>  ¡¡ERROR no se pudo insertar el correo!! este correo ya ha sido registrado";
        }
    $resultado = mysqli_query($connect, $consulta);
}

//delete alumnos
function
delete_alumnos($name,$apellido,$telefono,$correo,$licenciatura,$cuatrimestre,$estatus,$id)
{
    global $connect;

    $consulta = "DELETE FROM alumnos WHERE id = $id ";
    $resultado = mysqli_query($connect, $consulta);
}
//delete materias
function
delete_materias($name,$cuatrimestre,$licenciatura,$id)
{
    global $connect;

    $consulta = "DELETE FROM materias WHERE id = $id ";
    $resultado = mysqli_query($connect, $consulta);
}

//delete profesores
function
delete_profesores($name,$apellido,$telefono,$correo,$estatus,$id)
{
    global $connect;

    $consulta = "DELETE FROM profesores WHERE id = $id ";
    $resultado = mysqli_query($connect, $consulta);
}


?>

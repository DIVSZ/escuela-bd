<?php
$db="escuela";
$user="root";
$password="";
$host="localhost";

$connect=mysqli_connect($host, $user, $password, $db);

if($connect)
    {
    echo "conexión exitosa";
    }
    else
    {
    echo "conexión fallida";
    }
?>
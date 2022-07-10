<?php

require_once ("../lib/functions.php");



$name = $_POST ["name"];

$cuatrimestre = $_POST ["cuatrimestre"];

$licenciatura = $_POST ["licenciatura"];



insertar_materias($name,$cuatrimestre,$licenciatura);

header("Location: indexM.php");

?>
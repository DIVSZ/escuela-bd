<?php

require_once ("../lib/functions.php");


$name = $_POST ["name"];

$cuatrimestre = $_POST ["cuatrimestre"];

$licenciatura = $_POST ["licenciatura"];

$id = $_POST ["id"];

update_materias($name,$cuatrimestre,$licenciatura,$id);

header("Location: indexM.php");

?>
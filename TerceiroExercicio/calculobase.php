<?php

$bmaior = $_REQUEST['bmaior'];
$bmenor = $_REQUEST['bmenor'];
$altura = $_REQUEST['altura'];

$area = ($bmaior+$bmenor)/2*$altura;

echo"A Área do trapézio é de: ".$area;

?>
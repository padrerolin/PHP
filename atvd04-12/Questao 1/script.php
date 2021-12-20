<?php
$nome = $_REQUEST['nome'];
$idade = $_REQUEST['idade'];


setcookie("seunome",$nome,time()+3600);

setcookie("suaidade", $idade,time()+3600);

header("Location: id.php");







?>

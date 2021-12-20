<?php

$nome = @$_REQUEST['nome'];
$cidade = @$_REQUEST['cidade'];

setcookie("nome","$nome",time()+3600);

setcookie("cidade","$cidade",time()+3600);

header("location: mensagem.php");


?>
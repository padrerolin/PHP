<?php

$nome = $_GET['nome'];
$salario = $_GET['salario'];
$apurado =$_GET['apurado'];

$comissao = $apurado * (4/100);
$salariototal = $salario + $comissao;

echo" $nome você receberá a comissão de R$: $comissao  totalizando seu salário de: R$: $salariototal.";



?>  
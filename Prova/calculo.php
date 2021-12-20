<?php
$data = $_POST['nascimento'];

define("ANO_ATUAL","2021");

$idade = ANO_ATUAL - $data;
$diasvividos = $idade * 365;
$idade2022 = $idade +1;

// Elmano Neves Junior , P1 , 22/10/2021, 18:25 - Questão 3

echo "Sua idade de acordo com seu ano de nascimento: $idade anos </br>";
echo"Você viveu o total de $diasvividos dias </br>";
echo "Você terá $idade2022 anos em 2022";


?>
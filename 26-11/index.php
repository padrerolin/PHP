<?php

function somaNumeros($num1,$num2,$num3){
    $poder = ($num1+$num2)*$num3;

    if($poder > 8000){
        echo"Seu poder é maior que 8 mil ele é: ".$poder;
        

    }
    else{
        echo"Seu poder de luta é fraco é apenas: ".$poder;
    }
    

};

echo somaNumeros(100 ,100,5);



 


?>
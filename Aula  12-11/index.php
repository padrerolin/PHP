<?php

    $carros = ["Gol","Uno","Ferrari"];

    echo $carros[2];

    
    $idades = array("Mario"=>13, "Alino"=>30);

    $idades['Renato'] ='25';

    echo "A idade do individuo é: " .$idades["Alino"];

    $times = array(
        "PB"=>array("Botafogo-PB","Treze"),
        "PE"=>array("Sport","Santa"),
        "SP"=>array("Santos","Palmeiras")
    );
    echo $times["PE"][0];


    $estados =["Paraíba","Pernambuco","Ceará","Rio de Janeiro","São Paulo"];

    echo $estados[3];

    $numeros =array(5,6,8,16,32);

    echo $numeros[2]+$numeros[4];

?>
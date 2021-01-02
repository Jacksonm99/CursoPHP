<?php
    $suaIdade = 55;

    $idadeCrianca = 12;
    $idadeMaior = 18;
    $idadeMelhor= 65;
    if($suaIdade<$idadeCrianca){
        echo "criança";
    }
    else if($suaIdade<$idadeMaior){
        echo "adolescente";

    }
    else if($suaIdade<$idadeMelhor){
        echo" Adulto";

    }
    else 
        echo "idoso";



?>
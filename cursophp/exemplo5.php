<?php       
$nome = "Jackson";
function teste1(){
    global $nome;
    echo $nome;

}

function teste2(){
    global $nome;
    echo $nome ."teste 2";

}

teste1();

teste2();


?>
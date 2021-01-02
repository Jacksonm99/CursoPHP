<?php
$nome ="jackson da silva";

$nome2 = 'MANOEL';
//var_dump($nome,$nome2);

//transformar maiusculo em minusculo e vice-versa
echo strtoupper($nome);
echo "<br>";
echo strtolower($nome);
echo "<br>";
echo ucfirst($nome);
echo "<br>";
//relace
$nome = str_replace("a","@", $nome);
echo $nome;







?>
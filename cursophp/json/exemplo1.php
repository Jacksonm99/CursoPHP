<?php
$pessoas = array();

array_push($pessoas, array(
    'nome' => 'jackson', 
    'idade'=> '21',

));

array_push($pessoas, array(
    'nome' => 'talita', 
    'idade'=> '22',
   
));
 echo json_encode($pessoas);

?>
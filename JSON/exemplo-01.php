<?php

$pessoas = array();

array_push($pessoas, array(
	'nome'=>'Adriano',
	'idade'=>20
));

array_push($pessoas, array(
	'nome'=>'Roberta',
	'idade'=>19
));

echo json_encode($pessoas);

?>
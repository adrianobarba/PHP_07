<?php

$json = '[{"nome": "Adriano","idade": 20},{"nome": "Roberta","idade": 19}]';

$data = json_decode($json, true);

var_dump($data);

?>
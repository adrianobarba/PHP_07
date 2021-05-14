<?php

class Carro {

   private $modelo;
   private $motor;
   private $ano;

public function getModelo() {

   return $this->modelo;
}

public function setModelo($modelo) {

	$this->modelo = $modelo;
 }

public function getMotor():float{

	return $this->motor;
}

public function setMotor($motor) {

	$this->motor = $motor;
}

public function getAno():int{  // Esse int serve para trocar o tipo de string para inteiro 

	return $this->ano;
}

public function setAno($ano) {

	$this->ano = $ano;
}

public function exibir(){

	return array(
		"modelo"=>$this->getModelo(),
		"motor"=>$this->getMotor(),
		"ano"=>$this->getAno()

	);
  }

}

$gol = new carro();
$gol->setModelo("Gol GT");
$gol->setMotor("1.6");
$gol->setAno("2017");

print_r($gol->exibir());


?>
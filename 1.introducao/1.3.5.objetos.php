<?php
class Computador {
	var $cpu;
	public function ligar() {
		echo "Ligando computador a {$this->cpu}...";
	}
}
$obj = new Computador;
$obj->cpu = "500mhz";
$obj->ligar();
?>

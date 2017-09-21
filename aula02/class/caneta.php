<?php

	class Caneta{

		var $modelo;
		var $cor;
		var $ponta;
		var $carga;
		var $tampada;

		function rabiscar(){
			if ($this->tampada == true) {
				echo "<p>error! não posso rabiscar</p>";
			}
			else{
				echo "<p>estou rebiscando</p>";
			}
		}

		function tampar(){
			$this->tampada = true;
		}

		function destampar(){
			$this->tampada = false;
		}

	}

?>

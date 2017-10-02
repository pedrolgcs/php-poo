<?php
	require_once 'class/Lobo.php' ;
	/**
	* class Cachorro
	*/
	class Cachorro extends Lobo
	{
		// construtor
		function __construct($peso, $idade, $membros, $corPelo)
		{
			$this->setPeso($peso);
			$this->setIdade($idade);
			$this->setMembros($membros);
			$this->setCorPelo($corPelo);
		}

		// metodos
		public function emitirSom()
		{
			echo "<p>Au! Au! Au!</p>";
		}

		public function reagir($fase)
		{
			# code...
		}

		public function reagirHora($h, $m)
		{
			# code...
		}

		public function reagirDono($dono)
		{
			# code...
		}
	}
?>
<?php
	require_once 'class/Mamifero.php';
	/**
	* Lobo
	*/
	class Lobo extends Mamifero
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
			echo "<p>Auuuuuuuuuuuuu!</p>";
		}
	}
?>
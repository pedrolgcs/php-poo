<?php  
	require_once 'class/Mamifero.php';
	/**
	* Class Cachorro
	*/
	class Cachorro extends Mamifero
	{

		// construtor
		function __construct($idade, $peso, $membros, $corPelo)
		{
			$this->setPeso($peso);
			$this->setIdade($idade);
			$this->setMembros($membros);
			$this->setCorPelo($corPelo);
		}

		// metodos
		public function enterrarOsso()
		{
			echo "<p>Eterrando osso</p>";
		}

		public function abanarRabo()
		{
			echo "<p>Abanando rabo</p>";
		}

		public function emitirSom()
		{
			echo "<p>au au au au</p>";
		}

	}
?>
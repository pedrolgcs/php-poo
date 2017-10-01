<?php
	require_once 'class/Animal.php';
	/**
	* Class Peixe
	*/
	class Peixe extends Animal
	{
		// atributos
		private $corEscama;

		// construtor
		function __construct($peso, $idade, $membros, $corEscama)
		{
			$this->setPeso($peso);
			$this->setIdade($idade);
			$this->setMembros($membros);
			$this->setCorEscama($corEscama);
		}

		// metodos
		public function soltarBolha()
		{
			echo "<p>Blu blu blu blu</p>";
		}

		public function locomover()
		{
			echo "<p>Nadando</p>";
		}

		public function alimentar()
		{
			echo "<p>Comendo substancias</p>";
		}

		public function emitirSom()
		{
			echo "<p>Peixe não faz som</p>";
		}

		// getters e setters
	    /**
	     * @return mixed
	     */
	    public function getCorEscama()
	    {
	        return $this->corEscama;
	    }

	    /**
	     * @param mixed $corEscama
	     *
	     * @return self
	     */
	    public function setCorEscama($corEscama)
	    {
	        $this->corEscama = $corEscama;

	        return $this;
	    }
	}
?>
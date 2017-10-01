<?php  
	require_once 'class/Animal.php';
	/**
	* Class Reptil
	*/
	class Reptil extends Animal
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
		public function locomover()
		{
			echo "<p>Rastejando</p>";
		}

		public function alimentar()
		{
			echo "<p>Comendo vegetais</p>";
		}

		public function emitirSom()
		{
			echo "<p>Som de reptil</p>";
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
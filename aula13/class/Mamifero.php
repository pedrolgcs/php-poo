<?php  
	require_once 'class/Animal.php';
	/**
	* 
	*/
	class Mamifero extends Animal
	{
		// atributos
		private $corPelo;

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
			echo "<p>Som de mamífero</p>";
		}

		// getters e setters
	    /**
	     * @return mixed
	     */
	    public function getCorPelo()
	    {
	        return $this->corPelo;
	    }

	    /**
	     * @param mixed $corPelo
	     *
	     * @return self
	     */
	    public function setCorPelo($corPelo)
	    {
	        $this->corPelo = $corPelo;

	        return $this;
	    }
	}
?>
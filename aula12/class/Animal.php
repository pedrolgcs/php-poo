<?php  
	/**
	* Class Animal
	*/
	abstract class Animal
	{
		// atributos
		protected $peso;
		protected $idade;
		protected $membros;

		// metodos
		public abstract function locomover();

		public abstract function alimentar();
		
		public abstract function emitirSom();

		// getters e setters
	    /**
	     * @return mixed
	     */
	    public function getPeso()
	    {
	        return $this->peso;
	    }

	    /**
	     * @param mixed $peso
	     *
	     * @return self
	     */
	    public function setPeso($peso)
	    {
	        $this->peso = $peso;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getIdade()
	    {
	        return $this->idade;
	    }

	    /**
	     * @param mixed $idade
	     *
	     * @return self
	     */
	    public function setIdade($idade)
	    {
	        $this->idade = $idade;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getMembros()
	    {
	        return $this->membros;
	    }

	    /**
	     * @param mixed $membros
	     *
	     * @return self
	     */
	    public function setMembros($membros)
	    {
	        $this->membros = $membros;

	        return $this;
	    }
	}
?>
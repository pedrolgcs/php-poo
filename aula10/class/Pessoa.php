<?php  
	require_once 'interface/Controller.php';
	/**
	* Class Pessoa
	*/
	class Pessoa implements Controller
	{
		// atributos
		private $nome;
		private $idade;
		private $sexo;
		
		// construtor
		function __construct($nome, $idade, $sexo)
		{
			$this->setNome($nome);
			$this->setIdade($idade);
			$this->setSexo($sexo);
		}

		// métodos
		public function fazerAniversario()
		{
			$this->setIdade($this->getIdade() + 1);
		}
		
		// getters e setters
	    /**
	     * @return mixed
	     */
	    public function getNome()
	    {
	        return $this->nome;
	    }

	    /**
	     * @param mixed $nome
	     *
	     * @return self
	     */
	    public function setNome($nome)
	    {
	        $this->nome = $nome;

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
	    public function getSexo()
	    {
	        return $this->sexo;
	    }

	    /**
	     * @param mixed $sexo
	     *
	     * @return self
	     */
	    public function setSexo($sexo)
	    {
	        $this->sexo = $sexo;

	        return $this;
	    }
	}
?>
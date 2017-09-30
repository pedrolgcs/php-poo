<?php  
	/**
	* Class Pessoa
	*/
	abstract class Pessoa
	{
		// atributos
		private $nome;
		private $idade;
		private $sexo;

		// métodos
		public function fazerAniversario()
		{
			$this->setIdade($this->getIdade() + 1);
		}

		// getters e setters
	    /**
	     * @return mixed
	     */
	    protected function getNome()
	    {
	        return $this->nome;
	    }

	    /**
	     * @param mixed $nome
	     *
	     * @return self
	     */
	    protected function setNome($nome)
	    {
	        $this->nome = $nome;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    protected function getIdade()
	    {
	        return $this->idade;
	    }

	    /**
	     * @param mixed $idade
	     *
	     * @return self
	     */
	    protected function setIdade($idade)
	    {
	        $this->idade = $idade;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    protected function getSexo()
	    {
	        return $this->sexo;
	    }

	    /**
	     * @param mixed $sexo
	     *
	     * @return self
	     */
	    protected function setSexo($sexo)
	    {
	        $this->sexo = $sexo;

	        return $this;
	    }
	}
?>
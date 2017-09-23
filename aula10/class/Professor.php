<?php  
	require_once 'Pessoa.php';
	/**
	* Class Professor
	*/
	class Professor extends Pessoa
	{
		// atributos
		private $especialidade;
		private $salario;

		// construtor
		function __construct($nome, $idade, $sexo, $especialidade, $salario)
		{
			$this->setNome($nome);
			$this->setIdade($idade);
			$this->setSexo($sexo);
			$this->setEspecialidade($especialidade);
			$this->setSalario($salario);
		}

		// métodos
		public function receberAumento($aumento)
		{
			$this->setSalario($this->getSalario() + $aumento);
			echo "<p>Seu novo salário é: ".$this->getSalario()." </p>";
		}

		// getters e setters
	    /**
	     * @return mixed
	     */
	    public function getEspecialidade()
	    {
	        return $this->especialidade;
	    }

	    /**
	     * @param mixed $especialidade
	     *
	     * @return self
	     */
	    public function setEspecialidade($especialidade)
	    {
	        $this->especialidade = $especialidade;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getSalario()
	    {
	        return $this->salario;
	    }

	    /**
	     * @param mixed $salario
	     *
	     * @return self
	     */
	    public function setSalario($salario)
	    {
	        $this->salario = $salario;

	        return $this;
	    }
	}
?>
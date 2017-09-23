<?php  
	require_once 'Pessoa.php';
	/**
	* Class Aluno
	*/
	class Aluno extends Pessoa
	{
		// atributos
		private $matricula;
		private $curso;
		
		// construtor
		function __construct($nome, $idade, $sexo, $matricula, $curso)
		{
			$this->setNome($nome);
			$this->setIdade($idade);
			$this->setSexo($sexo);
			$this->setMatricula($matricula);
			$this->setCurso($curso);
		}

		// métodos
		public function cancelarMatricula()
		{
			echo "<p>Matricula será cancelada</p>";
		}

		// getters e setters
	    /**
	     * @return mixed
	     */
	    public function getMatricula()
	    {
	        return $this->matricula;
	    }

	    /**
	     * @param mixed $matricula
	     *
	     * @return self
	     */
	    public function setMatricula($matricula)
	    {
	        $this->matricula = $matricula;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getCurso()
	    {
	        return $this->curso;
	    }

	    /**
	     * @param mixed $curso
	     *
	     * @return self
	     */
	    public function setCurso($curso)
	    {
	        $this->curso = $curso;

	        return $this;
	    }
	}
?>
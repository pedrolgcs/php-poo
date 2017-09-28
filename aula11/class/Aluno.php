<?php  
	require_once 'class/Pessoa.php';
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

		// metodos
		public function pagarMensalidade()
		{
			echo "<p>Mensaldiade paga do aluno: ".$this->getNome()."</p>";
		}

		public final function expulsar()
		{
			echo "<p>O aluno foi expulso!</p>";
		}

		// getters e setters
	    /**
	     * @return mixed
	     */
	    protected function getMatricula()
	    {
	        return $this->matricula;
	    }

	    /**
	     * @param mixed $matricula
	     *
	     * @return self
	     */
	    protected function setMatricula($matricula)
	    {
	        $this->matricula = $matricula;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    protected function getCurso()
	    {
	        return $this->curso;
	    }

	    /**
	     * @param mixed $curso
	     *
	     * @return self
	     */
	    protected function setCurso($curso)
	    {
	        $this->curso = $curso;

	        return $this;
	    }
	}
?>
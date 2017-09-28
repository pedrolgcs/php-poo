<?php  
	require_once 'class/Aluno.php';
	/**
	* Class Bolsista
	*/
	final class Bolsista extends Aluno
	{
		// atributos
		private $bolsa;

		// construtor
		function __construct($nome, $idade, $sexo, $matricula, $curso, $bolsa)
		{
			$this->setNome($nome);
			$this->setIdade($idade);
			$this->setSexo($sexo);
			$this->setMatricula($matricula);
			$this->setCurso($curso);
			$this->setBolsa($bolsa);
		}

		// métodos
		public function renovarBolsa()
		{
			echo "<p>Bolsa do aluno ".$this->getNome()." renovada com sucesso</p>";
		}

		public function pagarMensalidade()
		{
			echo "<p>".$this->getNome()." é bolsista, então paga com desconto</p>";
		}

		// getters e setters
	    /**
	     * @return mixed
	     */
	    public function getBolsa()
	    {
	        return $this->bolsa;
	    }

	    /**
	     * @param mixed $bolsa
	     *
	     * @return self
	     */
	    public function setBolsa($bolsa)
	    {
	        $this->bolsa = $bolsa;

	        return $this;
	    }
	}
?>
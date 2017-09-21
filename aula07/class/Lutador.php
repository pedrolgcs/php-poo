<?php
	require_once 'interface/Controlador.php';
	/**
	* Class Lutador
	*/
	class Lutador implements Controlador
	{
		// attributes
		private $nome;
		private $nacionalidade;
		private $idade;
		private $altura;
		private $peso;
		private $categoria;
		private $vitoria;
		private $derrota;
		private $empate;

		// construct
		function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitoria, $derrota, $empate)
		{
			$this->setNome($nome);
			$this->setNacionalidade($nacionalidade);
			$this->setIdade($idade);
			$this->setAltura($altura);
			$this->setPeso($peso);
			$this->setVitoria($vitoria);
			$this->setDerrota($derrota);
			$this->setEmpate($empate);
		}

		// methods
		public function apresentar()
		{
			echo "--- Apresentação do Lutador ".$this->getNome()." ---";
			echo "<p>Lutador: ". $this->getNome()."</p>";
			echo "<p>Origem: ". $this->getNacionalidade()."</p>";
			echo "<p>Idade: ". $this->getIdade()." anos</p>";
			echo "<p>Altura: ". $this->getAltura()."m</p>";
			echo "<p>Peso: ". $this->getPeso()."kg</p>";
			echo "<p>Vitórias: ". $this->getVitoria()."</p>";
			echo "<p>Derrotas: ". $this->getDerrota()."</p>";
			echo "<p>Empates: ". $this->getEmpate()."</p>";
		}

		public function status()
		{
			echo "--- Status do Lutador ".$this->getNome()." ---";
			echo "<p>Lutador de categoria: ". $this->getCategoria()." | ganhou: ".$this->getVitoria()." | empatou: ".$this->getEmpate()." | perdeu: ".$this->getDerrota()."</p>";

		}

		public function ganharLuta()
		{
			$this->setVitoria($this->getVitoria() + 1	);
		}

		public function perderLuta()
		{
			$this->setDerrota($this->getDerrota() + 1);
		}

		public function empatarLuta()
		{
			$this->setEmpate($this->getEmpate() + 1);
		}

		// getters and setters
	    /**
	     * @return mixed
	     */
	    private function getNome()
	    {
	        return $this->nome;
	    }

	    /**
	     * @param mixed $nome
	     *
	     * @return self
	     */
	    private function setNome($nome)
	    {
	        $this->nome = $nome;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    private function getNacionalidade()
	    {
	        return $this->nacionalidade;
	    }

	    /**
	     * @param mixed $nacionalidade
	     *
	     * @return self
	     */
	    private function setNacionalidade($nacionalidade)
	    {
	        $this->nacionalidade = $nacionalidade;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    private function getIdade()
	    {
	        return $this->idade;
	    }

	    /**
	     * @param mixed $idade
	     *
	     * @return self
	     */
	    private function setIdade($idade)
	    {
	        $this->idade = $idade;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    private function getAltura()
	    {
	        return $this->altura;
	    }

	    /**
	     * @param mixed $altura
	     *
	     * @return self
	     */
	    private function setAltura($altura)
	    {
	        $this->altura = $altura;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    private function getPeso()
	    {
	        return $this->peso;
	    }

	    /**
	     * @param mixed $peso
	     *
	     * @return self
	     */
	    private function setPeso($peso)
	    {
	        $this->peso = $peso;

	        $this->setCategoria();

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    private function getCategoria()
	    {
	        return $this->categoria;
	    }

	    /**
	     * @param mixed $categoria
	     *
	     * @return self
	     */
	    private function setCategoria()
	    {
	        if ($this->getPeso() < 52.2) {
	        	$this->categoria = "Invalido";
	        }
	        elseif ($this->getPeso() <= 70.3) {
	        	$this->categoria = "Leve";
	        }
	        elseif ($this->getPeso() <= 83.9) {
	        	$this->categoria = "Médio";
	        }
	        elseif ($this->getPeso() <= 120.2) {
	        	$this->categoria = "Pesado";
	        }
	        else {
	        	$this->categoria = "Inválido";
	        }
	    }

	    /**
	     * @return mixed
	     */
	    private function getVitoria()
	    {
	        return $this->vitoria;
	    }

	    /**
	     * @param mixed $vitoria
	     *
	     * @return self
	     */
	    private function setVitoria($vitoria)
	    {
	        $this->vitoria = $vitoria;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    private function getDerrota()
	    {
	        return $this->derrota;
	    }

	    /**
	     * @param mixed $derrota
	     *
	     * @return self
	     */
	    private function setDerrota($derrota)
	    {
	        $this->derrota = $derrota;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    private function getEmpate()
	    {
	        return $this->empate;
	    }

	    /**
	     * @param mixed $empate
	     *
	     * @return self
	     */
	    private function setEmpate($empate)
	    {
	        $this->empate = $empate;

	        return $this;
	    }
	}
?>

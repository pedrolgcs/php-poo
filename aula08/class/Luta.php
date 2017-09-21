<?php 
	require_once 'interface/ControladorLuta.php';
	/**
	* Class Luta
	*/
	class Luta implements ControladorLuta
	{
		private $desafiado;
		private $desafiante;
		private $rounds;
		private $aprovado;
		
		function __construct()
		{
			# code...
		}

		public function marcarLuta($l1, $l2)
		{
			if ($l1->getCategoria() === $l2->getCategoria() && ($l1 != $l2)){
				$this->setAprovado(true);
				$this->setDesafiado($l1);
				$this->setDesafiante($l2);
				echo "<p>Luta aprovada</p>";
			}
			else {
				$this->setAprovado(false);
				$this->setDesafiado(null);
				$this->setDesafiante(null);
				echo "<p>error! Luta não pode ser marcada</p>";
			}
		}

		public function lutar()
		{
			if ($this->getAprovado(true)) {
				$this->getDesafiado()->apresentar();
				$this->getDesafiante()->apresentar();
				$vencedor = rand(0, 2);
				switch ($vencedor) {
					case 0: // empate
						echo "<p>Empate!</p>";
						$this->getDesafiado()->empatarLuta();
						$this->getDesafiante()->empatarLuta();
						$this->getDesafiado()->status();
						$this->getDesafiante()->status();
						break;
					case 1: // desafiado vence
						echo "<p>".$this->getDesafiado()->getNome()." venceu a luta</p>";
						$this->getDesafiado()->ganharLuta();
						$this->getDesafiante()->perderLuta();
						$this->getDesafiado()->status();
						$this->getDesafiante()->status();
						break;
					case 2: // desafiante vence
						echo "<p>".$this->getDesafiante()->getNome()." venceu a luta</p>";
						$this->getDesafiante()->ganharLuta();
						$this->getDesafiado()->perderLuta();
						$this->getDesafiado()->status();
						$this->getDesafiante()->status();
						break;
				}
			}
			else {
				echo "<p>error! A luta não foi aprovada</p>";
			}
		}

	    /**
	     * @return mixed
	     */
	    public function getDesafiado()
	    {
	        return $this->desafiado;
	    }

	    /**
	     * @param mixed $desafiado
	     *
	     * @return self
	     */
	    public function setDesafiado($desafiado)
	    {
	        $this->desafiado = $desafiado;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getDesafiante()
	    {
	        return $this->desafiante;
	    }

	    /**
	     * @param mixed $desafiante
	     *
	     * @return self
	     */
	    public function setDesafiante($desafiante)
	    {
	        $this->desafiante = $desafiante;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getRounds()
	    {
	        return $this->rounds;
	    }

	    /**
	     * @param mixed $rounds
	     *
	     * @return self
	     */
	    public function setRounds($rounds)
	    {
	        $this->rounds = $rounds;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getAprovado()
	    {
	        return $this->aprovado;
	    }

	    /**
	     * @param mixed $aprovado
	     *
	     * @return self
	     */
	    public function setAprovado($aprovado)
	    {
	        $this->aprovado = $aprovado;

	        return $this;
	    }
	}
?>
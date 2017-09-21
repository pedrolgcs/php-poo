<?php

	/**
	* Class da Conta Bancária
	*/
	class ContaBanco{

		private $numConta;
		private $tipo;
		private $dono;
		private $saldo;
		private $status;
		
		// Construct
		public function __construct($numConta, $tipo, $dono){
			$this->setNumConta($numConta);
			$this->setTipo($tipo);
			$this->setDono($dono);
		}

		// Methods
		public function abrirConta()
		{
			$this->setStatus(true);
			if ($this->getTipo() == 'cp') {
				$this->setSaldo($this->getSaldo() + 150);
			}
			elseif ($this->getTipo() == 'cc') {
				$this->setSaldo($this->getSaldo() + 50);
			}
		}

		public function fecharConta()
		{
			if ($this->getSaldo() < 0 or $this->getSaldo() > 0) {
				echo "<p>error! Não podemos fechar a sua conta de numero: ".$this->getNumConta()." </p>"; 
			}
			else {
				echo "<p>Conta fechada com sucesso</p>";
				$this->setStatus(false);
			}
		}

		public function depositar($deposito)
		{
			if ($this->getStatus()) {
				$this->setSaldo($this->getSaldo() + $deposito);
				echo "<p>Novo saldo: ".$this->getSaldo()."</p>";
			}
			else {
				echo "<p>error! O senhor não tem conta em aberto</p>";
			}
		}

		public function sacar($saque)
		{
			if ($this->getStatus() and $this->getSaldo() >= $saque) {
				$this->setSaldo($this->getSaldo() - $saque);
				echo "<p>Sacou: ".$saque.", restante em conta: ".$this->getSaldo()."</p>";
			}
			else {
				echo "<p>erro! Impossivel sacar esse valor</p>";
			}
		}

		public function pagarMensal()
		{
			if ($this->getTipo() == 'cc') {
				$this->setSaldo($this->getSaldo() - 12);
				echo "<p>Pagou: 12, restante em conta: ".$this->getSaldo()."</p>";
			}
			else {
				$this->setSaldo($this->getSaldo() - 20);
				echo "Pagou: 20, restante em conta: ".$this->getSaldo();
			}
		}

		// Getters and Setters
	    /**
	     * @return mixed
	     */
	    public function getNumConta()
	    {
	        return $this->numConta;
	    }

	    /**
	     * @param mixed $numConta
	     *
	     * @return self
	     */
	    public function setNumConta($numConta)
	    {
	        $this->numConta = $numConta;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getTipo()
	    {
	        return $this->tipo;
	    }

	    /**
	     * @param mixed $tipo
	     *
	     * @return self
	     */
	    public function setTipo($tipo)
	    {
	        $this->tipo = $tipo;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getDono()
	    {
	        return $this->dono;
	    }

	    /**
	     * @param mixed $dono
	     *
	     * @return self
	     */
	    public function setDono($dono)
	    {
	        $this->dono = $dono;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getSaldo()
	    {
	        return $this->saldo;
	    }

	    /**
	     * @param mixed $saldo
	     *
	     * @return self
	     */
	    public function setSaldo($saldo)
	    {
	        $this->saldo = $saldo;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getStatus()
	    {
	        return $this->status;
	    }

	    /**
	     * @param mixed $status
	     *
	     * @return self
	     */
	    public function setStatus($status)
	    {
	        $this->status = $status;

	        return $this;
	    }
}
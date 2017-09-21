<?php  
	require_once 'interface/Controlador.php';
	/**
	* Class do controle remoto
	*/
	class ControleRemoto implements Controlador{

		// atributs
		private $volume;
		private $ligado;
		private $tocando;
		
		// construct
		function __construct()
		{
			$this->setVolume(50);
			$this->setLigado(false);
			$this->setTocando(false);
		}

		// functions
		public function ligar()
		{
			$this->setLigado(true);
		}

		public function desligar()
		{
			$this->setLigado(false);
			$this->setTocando(false);
		}

		public function abrirMenu()
		{
			echo "<p>Está: ".($this->getLigado()?"Sim":"Não")."</p>";
			echo "<p>Tocando: ".($this->getTocando()?"Sim":"Não")."</p>";
			echo "<p>Volume: ".$this->getVolume()."</p>";
			for ($i=0; $i < $this->getVolume(); $i+=10) { 
				echo "|";
			}
			echo "<br>";
		}

		public function fecharMenu()
		{
			echo "<p>Fechando menu</p>";
		}

		public function maisVolume()
		{
			if ($this->getLigado()) {
				$this->setVolume($this->getVolume() + 5);
			}
		}

		public function menosVolume()
		{
			if ($this->getLigado()) {
				$this->setVolume($this->getVolume() - 5);
			}
		}

		public function ligarMudo()
		{
			if ($this->getLigado() && $this->getVolume() > 0) {
				$this->setVolume(0);
			}
		}

		public function desligarMudo()
		{
			if ($this->getLigado() && $this->getVolume() == 0) {
				$this->setVolume(50);
			}	
		}

		public function play()
		{
			if ($this->getLigado() && !($this->getTocando())) {
				$this->setTocando(true);
			}
		}

		public function pause()
		{
			if ($this->getLigado() && $this->getTocando()) {
				$this->setTocando(false);
			}
		}

		// getters and setters
	    /**
	     * @return mixed
	     */
	    private function getVolume()
	    {
	        return $this->volume;
	    }

	    /**
	     * @param mixed $volume
	     *
	     * @return self
	     */
	    private function setVolume($volume)
	    {
	        $this->volume = $volume;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    private function getLigado()
	    {
	        return $this->ligado;
	    }

	    /**
	     * @param mixed $ligado
	     *
	     * @return self
	     */
	    private function setLigado($ligado)
	    {
	        $this->ligado = $ligado;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    private function getTocando()
	    {
	        return $this->tocando;
	    }

	    /**
	     * @param mixed $tocando
	     *
	     * @return self
	     */
	    private function setTocando($tocando)
	    {
	        $this->tocando = $tocando;

	        return $this;
	    }
}
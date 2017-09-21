<?php

    class Caneta{

        // attributes
        private $modelo;
        private $ponta;
        private $cor;
        private $tampada;

        // construc
        public function __construct($modelo, $ponta, $cor)
        {
            $this->setModelo($modelo);
            $this->setPonta($ponta);
            $this->setCor($cor);
            $this->setTampada(true);
        }

        // functions
        public function tampar(){
			$this->setTampada(true);
		}

		public function destampar(){
			$this->setTampada(false);
		}

        // getters and setters
        public function getModelo()
        {
            return $this->modelo;
        }

        public function setModelo($modelo)
        {
            $this->modelo = $modelo;

            return $this;
        }

        public function getPonta()
        {
            return $this->ponta;
        }

        public function setPonta($ponta)
        {
            $this->ponta = $ponta;

            return $this;
        }

        public function getCor()
        {
            return $this->cor;
        }

        public function setCor($cor)
        {
            $this->cor = $cor;

            return $this;
        }

        public function getTampada()
        {
            return $this->tampada;
        }

        public function setTampada($tampada)
        {
            $this->tampada = $tampada;

            return $this;
        }

}

?>

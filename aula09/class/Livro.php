<?php  
	require_once 'interface/Publicacao.php';
	/**
	* Class Livro
	*/
	class Livro implements Publicacao
	{
		// atributos
		private $titulo;
		private $autor;
		private $totPaginas;
		private $pagAtual;
		private $aberto;
		private $leitor;
		
		// construtor
		function __construct($titulo, $autor, $totPaginas, $leitor)
		{
			$this->setTitulo($titulo);
			$this->setAutor($autor);
			$this->setTotPaginas($totPaginas);
			$this->setPagAtual(0);
			$this->setAberto(false);
			$this->setLeitor($leitor);
		}

		// métodos
		public function detalhes()
		{
			echo "----------------------";
			echo "<p>Livro: ".$this->getTitulo()."</p>";
			echo "<p>Autor: ".$this->getAutor()."</p>";
			echo "<p>Total de páginas: ".$this->getTotPaginas()."</p>";
			echo "<p>Pag. Atual: ".$this->getPagAtual()."</p>";
			echo "<p>Aberto: ".($this->getAberto()?"Sim":"Não")."</p>";
			echo "<p>Leitor: ".$this->getLeitor()->getNome()."</p>";
		}

		public function abrir()
		{
			$this->setAberto(true);
			if ($this->getPagAtual() == 0) {
				$this->setPagAtual(1);
			}
		}

		public function fechar()
		{
			$this->setAberto(false);
			$this->setPagAtual(0);
		}

		public function folhear()
		{
			if ($this->getAberto()) {
				$folha = rand(0, $this->getTotPaginas());
				$this->setPagAtual($folha);	
			}
			else {
				echo "<p>error! livro não esta aberto</p>";
			}
		}

		public function avancarPag(){
			if ($this->getAberto() && $this->getPagAtual() < $this->getTotPaginas()) {
				$this->setPagAtual($this->getPagAtual() + 1);
			}
			else {
				echo "<p>error! não podemos avançar</p>";
			}
		}

		public function voltarPag()
		{
			if ($this->getAberto() && $this->getPagAtual() > 0) {
				$this->setPagAtual($this->getPagAtual() - 1 );
			}
			else {
				echo "<p>erro! não podemos voltar a página</p>";
			}
		}

		// Getters e Setters
	    /**
	     * @return mixed
	     */
	    public function getTitulo()
	    {
	        return $this->titulo;
	    }

	    /**
	     * @param mixed $titulo
	     *
	     * @return self
	     */
	    public function setTitulo($titulo)
	    {
	        $this->titulo = $titulo;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getAutor()
	    {
	        return $this->autor;
	    }

	    /**
	     * @param mixed $autor
	     *
	     * @return self
	     */
	    public function setAutor($autor)
	    {
	        $this->autor = $autor;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getTotPaginas()
	    {
	        return $this->totPaginas;
	    }

	    /**
	     * @param mixed $totPaginas
	     *
	     * @return self
	     */
	    public function setTotPaginas($totPaginas)
	    {
	        $this->totPaginas = $totPaginas;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getPagAtual()
	    {
	        return $this->pagAtual;
	    }

	    /**
	     * @param mixed $pagAtual
	     *
	     * @return self
	     */
	    public function setPagAtual($pagAtual)
	    {
	        $this->pagAtual = $pagAtual;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getAberto()
	    {
	        return $this->aberto;
	    }

	    /**
	     * @param mixed $aberto
	     *
	     * @return self
	     */
	    public function setAberto($aberto)
	    {
	        $this->aberto = $aberto;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getLeitor()
	    {
	        return $this->leitor;
	    }

	    /**
	     * @param mixed $leitor
	     *
	     * @return self
	     */
	    public function setLeitor($leitor)
	    {
	        $this->leitor = $leitor;

	        return $this;
	    }
	}
?>
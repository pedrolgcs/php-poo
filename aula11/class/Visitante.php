<?php
	require_once 'class/Pessoa.php';
	/**
	* Class Visitante
	*/
	class Visitante extends Pessoa
	{
		// construtor
		function __construct($nome, $idade, $sexo)
		{
			$this->setNome($nome);
			$this->setIdade($idade);
			$this->setSexo($sexo);
		}
	}
?>
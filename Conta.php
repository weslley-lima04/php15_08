<?php


class Contas
{
 var $numAge;
 var $numConta;
 var $nome;
 var $saldo;
 var $dataDeCriacao;
 var $senha;
 var $saldo;
 var $cancelada;


	function ExibeDados()
	{

		echo "Número da Agência: ".$this->numAge."<br/>";
		echo "Número da Conta: ".$this->numConta."<br/>";
		echo "Nome: ".$this->nome."<br/>"; 
		echo "Conta: ".$this->saldo."<br/>"; 

	}

	function depositar($saldo)
	{
		this->saldo = $saldo;
		echo "Seu saldo é ".{$this->saldo};
	}


	function __construct($ag, $saldo, $codigo, $dataCriacao, $titular, $senha)
	{
		$this->numAge = $ag;
		$this->saldo = $saldo;
		$this->numConta = $codigo;
		$this->nome = $titular;
		$this->dataDeCriacao = $dataCriacao;
		$this->senha = $senha;

		$this->depositar($saldo);
		$this->cancelada = false;
	}

}
 
	


?>

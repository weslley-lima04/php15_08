<?php


class Contas
{
 var $numage;
 var $numConta;
 var $nome;
 var $conta;



	function ExibeDados()
	{

		echo "Número da Agência: ".$this->numage."<br/>";
		echo "Número da Conta: ".$this->numConta."<br/>";
		echo "Nome: ".$this->nome."<br/>"; 
		echo "Conta: ".$this->conta."<br/>"; 

	}

}
 
	


?>
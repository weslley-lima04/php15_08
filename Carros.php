<?php  

class Carros
{
	var $cor;
	var $ano;
	var $numeroPortas;
	var $peso;


	function InformarCor()
	{
		echo "Cor do Carro ".$this->cor;

	}

	function Acelerar()
	{
		echo "Acelerando...";
	}

}


?>
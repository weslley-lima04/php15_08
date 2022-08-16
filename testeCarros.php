<?php 

include_once "Carros.php";


$carro = new Carros();

$carro->cor = "Azul";
$carro->ano = 1997;
$carro->numeroPortas = 4;
$carro->peso = "900kg";


$carro->InformarCor();
$carro->Acelerar();


 ?>
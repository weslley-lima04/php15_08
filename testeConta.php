<?php 

include_once "Conta.php";

$conta = new Contas();

$conta->numAge = 0456;
$conta->saldo = 99.57;
$conta->nome = "Albercindo Belamar Casagrande";
$conta->numConta = 057;


$conta->ExibeDados();


?>
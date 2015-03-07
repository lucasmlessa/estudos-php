<?php

/*  carrega as classes  */
include_once 'classes/Pessoa.class.php';
include_once 'classes/Conta.class.php';

// criação do objeto $wade
$wade = new Pessoa(10, 'Wade Wilsom', 1.85, 25, '10/04/1976', 'Ensino Superior', 700.00);

echo "Manipulando o objeto {$wade->Nome}: <br/>";
echo "{$wade->Nome} é formado em: {$wade->Escolaridade} <br/>";
$wade->Formar('Mercenário Tagarela de Aluguel');
echo "{$wade->Nome} é formado em: {$wade->Escolaridade} <br/>";

echo "{$wade->Nome} tem {$wade->Idade} anos <br/>";
$wade->Envelhecer(1);
echo "{$wade->Nome} tem {$wade->Idade} anos <br/>";

// criação do objeto $conta_wade
$conta_wade = new Conta(6677, "CC.12345.56", "10/07/12", $wade, 9876, 700.99);

echo "<br/>";
echo "Manipulando conta de: {$conta_wade->Titular->Nome} <br/>";
echo "O saldo atual é R\$ {$conta_wade->ObterSaldo() }";
echo "<br/>";

$conta_wade->Depositar(20);
echo "O saldo atual é R\$ {$conta_wade->ObterSaldo() }";
echo "<br/>";

$conta_wade->Retirar(20);
echo "O saldo atual é R\$ {$conta_wade->ObterSaldo() }";
echo "<br/>";
?>

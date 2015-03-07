<?php

// carrega as classes
include_once 'classes/Pessoa.class.php';
include_once 'classes/Conta.class.php';

// criação do objeto $peter
$peter = new Pessoa;
$peter->Codigo = 10;
$peter->Nome = 'Peter Parker';
$peter->Altura = 1.85;
$peter->Idade = 25;
$peter->Nascimento = '29/06/1989';
$peter->Escolaridade = 'Ensino Médio Completo';

echo "Manipulando o objeto {$peter->Nome}: <br/>";
echo "{$peter->Nome} é formado em: {$peter->Escolaridade} <br/>";
$peter->Formar('Designer Gráfico');
echo "{$peter->Nome} é formado em: {$peter->Escolaridade} <br/>";

echo "{$peter->Nome} tem {$peter->Idade} anos <br/>";
$peter->Envelhecer(1);
echo "{$peter->Nome} tem {$peter->Idade} anos <br/>";

// criação do objeto $conta_peter

$conta_peter = new Conta;
$conta_peter->Agencia = 6677;
$conta_peter->Codigo = "CC.1234.56";
$conta_peter->DataDeCriacao = "10/07/02";
$conta_peter->Titular = $peter;
$conta_peter->Senha = 9876;
$conta_peter->Saldo = 576.89;
$conta_peter->Cancelada = false;

echo "<br/>";
echo "Manipulando conta de: {$conta_peter->Titular->Nome} <br/>";
echo "O saldo atual é R\$ {$conta_peter->ObterSaldo() }";
echo "<br/>";

$conta_peter->Depositar(20);
echo "O saldo atual é R\$ {$conta_peter->ObterSaldo() }";
echo "<br/>";

$conta_peter->Retirar(20);
echo "O saldo atual é R\$ {$conta_peter->ObterSaldo() }";
echo "<br/>";
?>
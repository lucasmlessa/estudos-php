<?php

/*  carrega as classes  */
include_once 'classes/Pessoa.class.php';
include_once 'classes/Conta.class.php';
include_once 'classes/ContaPoupanca.class.php';
include_once 'classes/ContaCorrente.class.php';

// criação do objeto $wade
$wade = new Pessoa(10, 'Wade Wilsom', 1.85, 25, '10/04/1976', 'Ensino Superior', 700.00);

echo "Manipulando o objeto {$wade->Nome}: <br/>";

// criação do objeto $conta_wade
$contas[1] = new ContaCorrente(6677, "CC.12345.56", "10/07/12", $wade, 9876, 700.99, 200.00);
$contas[2] = new ContaPoupanca(6678, "PP.12345.57", "11/08/13", $wade, 9876, 700.99, "10/07");

// percorremos as contas
foreach ($contas as $key => $conta) {
    echo "<br/>";
    echo "Manipulando conta de: {$conta->Titular->Nome} <br/>";
    echo "O saldo atual da conta $key é R\$ {$conta->ObterSaldo() }";
    echo "<br/>";
    
    $conta->Depositar(200);
    echo "O saldo atual da conta $key é R\$ {$conta->ObterSaldo() }";
    echo "<br/>";
    
    $conta->Retirar(100);
    echo "O saldo atual da conta $key é R\$ {$conta->ObterSaldo() }";
    echo "<br/>";
}
?>

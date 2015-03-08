<?php

/*  carrega as classes  */
include_once 'classes/Conta.class.php';
include_once 'classes/ContaCorrente.class.php';

class ContaCorrenteEscpecial extends ContaCorrente
{
    function Depositar($valor) {
        echo "sobrescrevendo método Dpositar. <br/>";
        parent::Depositar($Valor);
    }
    
    function Transferir($Conta, $valor) {
        echo "sobrescrevendo método Transferir. <br/>";
        parent::Transferir($Conta, $Valor);
    }
}
?>

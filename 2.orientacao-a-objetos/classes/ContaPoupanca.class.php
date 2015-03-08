<?php
class ContaPoupanca extends Conta
{
    var $Aniversario;
    
    /* Método Construtor (sobrescrito)
     * agora também inicializa a variável $Aniversário */
    function __construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo, $Aniversario) {
        
        parent::__construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo);
        $this->Aniversario = $Aniversario;
    }
    
    /* Método Retirar (sobrescrito)
     * Verifica se há saldo para retirar tal $quantia */
    
    function Retirar($quantia) {
        if ($this->Saldo >= $quantia) {
            
            // executa método da classe pai
            parent::Retirar($quantia);
        } 
        else {
            echo "Retirada não permitida...";
            return false;
        }
        
        // retirada permitida
        return true;
    }
    function Transferir($Conta, $valor) {
        if ($this->Retirar($valor_)) {
            $Conta->Depositar($valor);
        }
    }
}
?>
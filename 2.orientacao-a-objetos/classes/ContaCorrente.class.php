<?php
class ContaCorrente extends Conta
{
    var $Limite;
    var $TaxaTransferencia;
    
    /* Método Construtor (sobrescrito)
     * agora também inicializa a variável $Limite */
    function __construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo, $Limite) {
        
        parent::__construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo);
        $this->Limite = $Limite;
    }
    
    /* Método Retirar (sobrescrito)
     * Verifica se a $quantia de retirada está dentro do limite */
    
    function Retirar($quantia) {
        
        // impostos sobre movimentação financeira
        $cpmf = 0.05;
        if (($this->Saldo + $this->Limite) >= $quantia) {
            
            // executa método da classe pai
            parent::Retirar($quantia);
            
            // Debita o Imposto
            parent::Retirar($quantia * $cpmf);
        } 
        else {
            echo "Retirada não permitida...";
            return false;
        }
        
        // retirada permitida
        return true;
    }
    final function Transferir($Conta, $Valor) {
        if ($this->Retirar($Valor)) {
            $Conta->Depositar($Valor);
        }
        if ($this->Titular != $Conta->Titular) {
            $this->Retirar($this->TaxaTransferencia);
        }
    }
}
?>
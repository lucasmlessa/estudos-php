<?php
class Conta
{
    var $Agencia;
    var $Codigo;
    var $DataDeCriacao;
    var $Titular;
    var $Senha;
    var $Saldo;
    var $Cancelada;
    
    /* Método Construtor
     * inicializa propriedades */
    function __construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo) {
        $this->Agencia = $Agencia;
        $this->Codigo = $Codigo;
        $this->DataDeCriacao = $DataDeCriacao;
        $this->Titular = $Titular;
        $this->Senha = $Senha;
        $this->Saldo = $Saldo;
        
        // chama a outro método de classe
        $this->Depositar($Saldo);
        $this->Cancelada = false;
    }
    
    /* Método Destrutor
     * finaliza o objeto */
    function __destruct() {
        echo "<br/>";
        echo "A conta {$this->Codigo} de {$this->Titular->Nome} foi finalizada...";
    }
    
    /* Método Retirar
     * diminui o Saldo em $quantia */
    function Retirar($quantia) {
        if ($quantia > 0) {
            $this->Saldo-= $quantia;
        }
    }
    
    /* Método Depositar
     * aulmenta o Saldo em $quantia */
    function Depositar($quantia) {
        if ($quantia > 0) {
            $this->Saldo+= $quantia;
        }
    }
    
    /* Método ObterSaldo
     * retorna o Saldo atual */
    function ObterSaldo() {
        return $this->Saldo;
    }
}
?>
<?php
class Estagiario extends Funcionario
{
    
    /* Método GetSalario (sobrescrito) (
     * retorna o $Salario com 12% de bônus */
    function GetSalario() {
        return $this->Salario * 1.12;
    }
}

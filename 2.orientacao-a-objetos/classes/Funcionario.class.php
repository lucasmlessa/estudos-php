<?php
class Funcionario
{
    private $Codigo;
    public $Nome;
    private $Nascimento;
    protected $Salario;
    
    /* Método SetSalario (
     * atribui o parâmetro $Salario à propriedade $Salario */
    function SetSalario($Salario) {
        if (is_numeric($Salario) && ($Salario > 0)) {
            $this->Salario = $Salario;
        }
    }
    
    /* Método GetSalario (
     * retorna o valor da propriedade $Salario */
    function GetSalario() {
        return $this->Salario;
    }
}

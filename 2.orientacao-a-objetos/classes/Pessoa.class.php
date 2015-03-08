<?php
class Pessoa
{
    var $Codigo;
    var $Nome;
    var $Altura;
    var $Idade;
    var $Nascimento;
    var $Escolaridade;
    var $Salario;
    
    /* Método Construtor
     * inicializa propriedades */
    function __construct($Codigo, $Nome, $Altura, $Idade, $Nascimento, $Escolaridade, $Salario) {
        $this->Codigo = $Codigo;
        $this->Nome = $Nome;
        $this->Altura = $Altura;
        $this->Idade = $Idade;
        $this->Nascimento = $Nascimento;
        $this->Escolaridade = $Escolaridade;
        $this->Salario = $Salario;
    }
    
    /* Método Destrutor
     * finaliza o objeto */
    function __destruct() {
        echo "<br/>";
        echo "O objeto {$this->Nome} foi finalizado";
    }
    
    /* Método Crescer
     * aumenta a altura em $centimentros */
    function Crecer($centimentros) {
        $this->Altura+= $centimentros;
    }
    
    /* Método Formar
     * altera a Escolaridade para $titulacao */
    function Formar($titulacao) {
        $this->Escolaridade = $titulacao;
    }
    
    /* Método Envelhecer
     * aumenta a idade em $anos */
    function Envelhecer($anos) {
        
        if ($anos > 0) {
            $this->Idade+= $anos;
        }
    }
}
?>
<?php
class Aplicacao
{
    static $Quantidade;
    
    /* Método Construtor
     * implementa a $Quantidade de Aplicações */
    function __construct($Nome) {
        
        // incrementa propriedade estática
        self::$Quantidade++;
        $i = self::$Quantidade;
        echo "Nova Aplicação número $i: $Nome <br/>";
    }
}

// cria novos objetos
new Aplicacao('Dia');
new Aplicacao('Gimp');
new Aplicacao('Gnumeric');
new Aplicacao('Abiword');
new Aplicacao('Evolution');

echo 'Quantidade de Aplicações = ' . Aplicacao::$Quantidade . '<br/>';
?>


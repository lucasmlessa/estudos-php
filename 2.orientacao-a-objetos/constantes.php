<?php
class Biblioteca
{
    
    const Nome = "GTK ";
}

class Aplicacao extends Biblioteca
{
    
    //declaração de constantes
    const Ambiente = "Gnome Desktop ";
    const Versao = "3.8 ";
    
    /* Método Construtor
     * acessa as constantes internamente */
    function __construct($Nome) {
        echo parent::Nome . self::Ambiente . self::Versao . $Nome . "<br/>";
    }
}

// acessa as constantes internamente
echo Biblioteca::Nome . Aplicacao::Ambiente . Aplicacao::Versao . "<br/>";

new Aplicacao('Dia');
new Aplicacao('Gimp');
?>


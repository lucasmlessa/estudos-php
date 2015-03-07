<?php
class Produto
{
    var $Codigo;
    var $Descricao;
    var $Preco;
    var $Quantidade;
    function ImprimeEtiqueta() {
        echo 'Código: ' . $this->Codigo . "<br/>";
        echo 'Descrição: ' . $this->Descricao . "<br/>";
    }
}
?>

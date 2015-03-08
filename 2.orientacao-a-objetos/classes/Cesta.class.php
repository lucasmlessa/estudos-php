<?php
class Cesta
{
    
    private $itens;
    
    // adciona Itens na cesta
    function AdicionaItem(Produto $item) {
        $this->itens[] = $item;
    }
    
    // exibe a lista de produtos
    function ExibeLista() {
        foreach ($this->itens as $item) {
            $item->ImprimeEtiqueta();
        }
    }
    function CalculoTotal() {
        $total = 0;
        foreach ($this->itens as $item) {
            
            $total+= $item->Preco;
        }
        return 'R$ ' . $total;
    }
}
?>
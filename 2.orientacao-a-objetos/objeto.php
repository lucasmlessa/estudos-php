<?php
/*  insere a classe  */
include_once 'classes/Produto.class.php';
/* cria dois objeto */
$produto1 = new Produto;
$produto2 = new Produto;

/* atribui valores */
$produto1->Codigo = 4001;
$produto1->Descricao = 'CD - Daft Punk - Random Access Memories';

$produto2->Codigo = 4002;
$produto2->Descricao = 'CD - Daft Punk - Discovery';

/* imprime informações de etiqueta */
$produto1->ImprimeEtiqueta();
$produto2->ImprimeEtiqueta();

?>
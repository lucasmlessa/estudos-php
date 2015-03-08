<?php

/*  carrega as classes  */
include_once 'classes/Cesta.class.php';
include_once 'classes/Produto.class.php';

/*  cria os produtos  */
$produto1 = new Produto;
$produto2 = new Produto;
$produto3 = new Produto;
$produto4 = new Produto;

/*  define as propriedades  */
$produto1->Codigo = 1;
$produto1->Descricao = "Ameixa";
$produto1->Preco = 1.40;

$produto2->Codigo = 2;
$produto2->Descricao = "Morango";
$produto2->Preco = 2.24;

$produto3->Codigo = 3;
$produto3->Descricao = "Abacaxi";
$produto3->Preco = 2.86;

$produto4->Codigo = 4;
$produto4->Descricao = "Laranja";
$produto4->Preco = 1.14;

/*  adiciona na cesta  */
$cesta = new Cesta;
$cesta->AdicionaItem($produto1);
$cesta->AdicionaItem($produto2);
$cesta->AdicionaItem($produto3);
$cesta->AdicionaItem($produto4);

/*  exibe o total  */
echo $cesta->CalculoTotal();

// Quebra de linha
echo "<br/>";

/*  Exibe lista de produtos na Cesta  */
echo $cesta->ExibeLista();
?>
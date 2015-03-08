<?php

/*  carrega as classes  */
include_once'classes/Fornecedor.class.php';
include_once'classes/Produto.class.php';

// instancia Fornecedor
$fornecedor = new Fornecedor;
$fornecedor->Codigo = 845;
$fornecedor->RazaoSocial = 'Bom Gosto Alimentos S.A.';
$fornecedor->Endereco = 'Rua Ipiranga';
$fornecedor->Cidade = 'Poços de Caldas';

// instancia Produto
$produto = new Produto;
$produto->Codigo = 462;
$produto->Descricao - 'Doce de Pêssego';
$produto->Preco = 1.24;
$produto->Fornecedor = $fornecedor;

// imprime atributos
echo 'Código: ' . $produto->Codigo . "<br/>";
echo 'Descrição: ' . $produto->Descricao . "<br/>";
echo 'Código: ' . $produto->Fornecedor->Codigo . "<br/>";
echo 'Razão Social: ' . $produto->Fornecedor->RazaoSocial . "<br/>";
?>
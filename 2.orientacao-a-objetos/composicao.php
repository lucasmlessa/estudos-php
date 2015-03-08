<?php

/*  carrega as classes  */
include_once 'classes/Fornecedor.class.php';
include_once 'classes/Contato.class.php';

# instancia novo fornecedor
$fornecedor = new Fornecedor;
$fornecedor->RazaoSocial = 'Produtos Bom Gosto S. A.';

# atribui informações de contato
$fornecedor->SetContato('Mauro', '51 1234-5678', 'mauro@bomgosto.com.br');

#imprime informações
echo $fornecedor->RazaoSocial . "<br/>";
echo "Informações de Contato:" . "<br/>";
echo $fornecedor->getContato() . "<br/>";
?>
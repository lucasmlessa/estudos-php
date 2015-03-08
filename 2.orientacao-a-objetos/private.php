<?php

/*  carrega a classe  */
include_once 'classes/Funcionario.class.php';

/*  instancia novo Funcionario  */
$bruce = new Funcionario;

/*  atribui novo Salário  */
$bruce->SetSalario(800000);

/* obtém o Salário  */
echo 'Salário: R$ ' . $bruce->GetSalario();
?>

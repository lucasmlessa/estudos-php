<?php

/*  carrega as classes  */

include_once 'classes/Funcionario.class.php';
include_once 'classes/Estagiario.class.php';

/*  instancia novo Funcionario  */
$bruce = new Estagiario;

/*  atribui novo Salário  */
$bruce->SetSalario(800000);

/* obtém o Salário  */
echo 'Salário semanal de Bruce Wayne é: R$ ' . $bruce->GetSalario();
?>

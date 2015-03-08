<?php

/*  carrega as classes  */

include_once 'classes/Funcionario.class.php';
include_once 'classes/Estagiario.class.php';

/*  cria o objeto Funcionario  */
$bruce = new Funcionario;
$bruce->Nome = "Bruce Wayne";

/*  cria o objeto Estagiario  */
$jason = new Estagiario;
$jason->Nome = "Jason Todd";

echo $bruce->Nome;
echo "<br/>";
echo $jason->Nome;
?>

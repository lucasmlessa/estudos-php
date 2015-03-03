<?php
$diretorio = "./teste-diretorio/";

/* mkdir(local, permissão) - cria um diretório */
if (mkdir($diretorio, 0777)) {
    echo "$diretorio criado com sucesso! <br/>";
} 
else {
    echo "$diretorio não foi criado =/ <br/>";
}

/* getcwd() - retorna o diretório corrente */
echo "o diretório atual é " . getcwd() . "<br/>";
chdir("teste-diretorio");
echo "o novo diretório atual é " . getcwd() . "<br/>";
?>

<?php
$arquivo = "teste.xml";
$diretorio = "teste";

/* file_exists($arquivo); - Verifica a existência de um arquivo ou diretório */
if (file_exists($arquivo)) {
    echo "O arquivo existe! <br/>";
} 
else {
    echo "O arquivo não existe <br/>";
}

/* is_file($arquivo); - Verifica se corresponde a um arquivo */
if (is_file($arquivo)) {
    echo "$arquivo é um arquivo <br/>";
} 
else {
    echo "$arquivo não é um arquivo <br/>";
}

/* is_dir($arquivo); - Verifica se corresponde a um diretório */
if (is_dir($diretorio)) {
    echo "$diretorio é um diretório <br/>";
} 
else {
    echo "$diretorio não é um diretório <br/>";
}
?>

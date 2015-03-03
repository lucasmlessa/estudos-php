<?php

/* file(); - Lê o arquivo e atribui cada linha a um novo array */
$arquivo = file("texto.txt");
print_r($arquivo);

/* copy(); - Copia um arquivo para outro destino */
$origem = "texto.txt";
$destino = "./yaba/teste-copia.txt";
copy($origem, $destino);

/* rename(); - Renomeia um arquivo */
rename("texto.txt", "texto2.txt");

/* unlink(); - Apaga um arquivo */
unlink("texto2.txt");
?>

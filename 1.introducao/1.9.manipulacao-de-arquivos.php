<?php
/* abre o arquivo (ou cria) */
$fp = fopen( "teste1.md", "w" );
/* escreve no arquivo */
fwrite( $fp, "## linha 1 ##\n" );
fwrite( $fp, "linha 2\n" );
fwrite( $fp, "linha 3\n" );
fwrite( $fp, "linha 4\n" );
/* fecha o arquivo */
fclose( $fp );

/* Grava uma string em um arquivo e retorna a quantidade de bytes gravados */
echo file_put_contents('teste2.md', 'novo conteúdo do arquivo');

/* Lê o conteúdo do arquivo e retorna em forma de string */
echo file_get_contents('teste2.md');

?>

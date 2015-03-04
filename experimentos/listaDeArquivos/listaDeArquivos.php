<?php
/**
 * Função para listar arquivos de um diretório baseado em sua extensão
 */

function listaDeArquivos($extensao = "png", $numeroArquivos = 3, $diretorioArquivos = "arquivos") {
    $diretorio = "./$diretorioArquivos/";
    $arquivos = opendir($diretorio);
    
    while ($itens = readdir($arquivos)) {
        
        $extensaoItem = pathinfo($itens, PATHINFO_EXTENSION);
        $nome = strtr(pathinfo($itens, PATHINFO_BASENAME), array('.' => '', $extensaoItem => ''));
        
        if ($extensaoItem == $extensao) {
            $listaItens[] = array('nome' => $nome, 'extensao' => $extensaoItem);
        }
    }
    closedir($arquivos);
    ksort($listaItens);
    for ($i = 0; $i < count($listaItens) && $i < $numeroArquivos; $i++) {
        echo "<li><a href='$diretorio{$listaItens[$i]['nome']}.{$listaItens[$i]['extensao']}' target='_blank'>{$listaItens[$i]['nome']}</a></li>";
    }
}
?>
<h2>PNG</h2>
<ul>
    <?php
listaDeArquivos(); ?>
</ul>
<h2>JPG</h2>
<ul>
    <?php
listaDeArquivos('jpg'); ?>
</ul>
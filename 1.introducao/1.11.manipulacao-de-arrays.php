<?php

/* Criando arrays */

/* método 1 */
$rgb = array('vermelho', 'verde', 'azul');

/* método 2 */
$cmyk[] = 'ciano';
$cmyk[] = 'magenta';
$cmyk[] = 'amarelo';
$cmyk[] = 'preto';

/* imprime $rgb */
print_r($rgb);
echo "<br/>";

/* imprime $cmyk */
print_r($cmyk);
echo "<br/>";

/* string com ambos arrays */
echo "$cmyk[1] + $cmyk[2] = $rgb[0]";
echo "<br/><br/>";

/* Ordenação */

/* sort() - Ordena um array pelo seu valor não mantendo associação dos índices */
sort($rgb);
print_r($rgb);
echo "<br/><br/>";

/* rsort() - Ordena um array pela ordem reversa do seu valor não mantendo associação dos índices */
rsort($rgb);
print_r($rgb);
echo "<br/><br/>";

/* asort() - Ordena um array pelo seu valor mantendo associação dos índices */
asort($rgb);
print_r($rgb);
echo "<br/><br/>";

/* arsort() - Ordena um array pela ordem reversa do seu valor mantendo associação dos índices */
arsort($rgb);
print_r($rgb);
echo "<br/><br/>";

/* ksort() - Ordena um array pela ordem inversa de seus índices */
krsort($rgb);
print_r($rgb);
echo "<br/><br/>";

/* ksort() - Ordena um array pelos seus índices */
ksort($rgb);
print_r($rgb);
echo "<br/><br/>";

/* Arrays associativos */
$cores = array('vermelho' => '#ff0000', 'verde' => '#00ff00', 'azul' => '#0000ff');
$pessoa['nome'] = 'Maria';
$pessoa['rua'] = 'Alfredo Pujol';
$pessoa['bairro'] = 'Santana';
$pessoa['cidade'] = 'São Paulo';

/* imprime $cores */
print_r($cores);
echo "<br/>";

/* imprime $pessoa */
print_r($pessoa);
echo "<br/>";

echo '$cores[\'verde\'] é ' . $cores['verde'];
echo "<br/>";

echo '$pessoa[\'bairro\'] é ' . $pessoa['bairro'];
echo "<br/><br/>";

/* Iterações */
foreach ($cores as $escala => $cor) {
    echo "o código hexadecimal do $escala é $cor <br/>";
}

/* Acesso */

$minha_multa['carro'] = 'Pálio';
$minha_multa['valor'] = '178.00';

/* alterações de valores */
$minha_multa['carro'].= ' ED 1.0';
$minha_multa['valor']+= '20';
echo "<br/><br/>";

/* exibe o array */
var_dump($minha_multa);
echo "<br/><br/>";

/* Arrays multidimensionais */
$carros = array('Palio' => array('cor' => 'azul', 'potencia' => '1.0', 'opcionais' => 'Ar Cond.'), 'Corsa' => array('cor' => 'cinza', 'potencia' => '1.3', 'opcionais' => 'MP3 Player'), 'Gol' => array('cor' => 'branco', 'potencia' => '1.0', 'opcionais' => 'Dir. Hidráulica'));

/* cria a variável $carrosNomes com base nos índices da variável $carros utilizando a função array_keys */
$carrosNomes = array_keys($carros);

/* exibe o array */
var_dump($carros);
echo "<br/><br/>";

/* percorre os arrays de $carros utilizando a quantidade de índices de $carrosNomes */
for ($i = 0; $i < count($carrosNomes); $i++) {
    echo "Novo " . $carrosNomes[$i] . " " . $carros[$carrosNomes[$i]]['potencia'] . " " . date("Y") . " " . $carros[$carrosNomes[$i]]['cor'] . " com " . $carros[$carrosNomes[$i]]['opcionais'] . " de Fábrica <br/>";
}
echo "<br/>";

/* explode() - converte uma string em um array por meio de um separador  */
$string = "Lorem ipsum dolor sit amet, consectetuer adipiscing elit.";
$stringArray = explode(" ", $string);

/* explode() - converte uma string em um array por meio de um separador  */
$stringDeNovo = implode(" ", $stringArray);

/* exibe o array $stringArray */
var_dump($stringArray);
echo "<br/>";

/* exibe a string $stringDeNovo */
var_dump($stringDeNovo);
?>

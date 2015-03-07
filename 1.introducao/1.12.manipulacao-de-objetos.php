<?php

/* Manipulação de objetos */

/* Cria uma nova classe chamada Funcionario */
class Funcionario
{
    var $Codigo;
    var $Nome;
    var $Salario;
    var $Departamento = 'Estagiário';
    
    function SetSalario() {
    }
    function GetSalario() {
    }
    function SetNome() {
    }
    function GetNome() {
    }
}

/* get_class_methods - retorna um array com os métodos da classe */
print_r(get_class_methods('Funcionario'));
echo "<br/><br/>";

/* get_class_vars - retorna um array com os nomes e conteúdos das propriedades da classe */
print_r(get_class_vars('Funcionario'));
echo "<br/><br/>";

/* cria um novo objeto Funcionario */
$peter = new Funcionario;
$peter->Codigo = 44;
$peter->Nome = 'Peter Parker';
$peter->Salario+= 100;
$peter->Departamento = 'Fotografia';

/* get_object_vars - retorna um array com os nomes e conteúdos das propriedades do objeto */
print_r(get_object_vars($peter));
echo "<br/><br/>";

/* get_class - retorna a classe que o objeto pertence */
print_r(get_class($peter));
echo "<br/>";
?>
<?php
// Aqui teremos exemplos do aprendizado com variáveis em PHP!

$sum = 9 + 4; 
$txt = "descobrir";                       // Entre Aspas salva uma String.
$num = 2;                                 // Sem Aspas salva um Inteiro.

echo "Só há um jeito de $txt!". "<br>" ;  // O <br> serve para pular a linha e é necessário colocar '.' anteriormente.
echo "Há $num jeitos de descobrir!". "<br>" ;
echo "A soma de 4 e 9 é igual a $sum.";

var_dump($num);                           // Apresenta o tipo da variável que eu selecionei. Em STRINGS apresenta o número de caractéres.

// Var SCOPE

$one = "UM";                              // Variável definida em Global Scope. Fora das chaves da função.

function myTest() {
                                          // Nenhuma variável foi definida dentro da função.
  echo "Só há $one jeito de descobrir!";  // Logo, dentro da função 'myTest' a variável não retornará nada!
}

myTest();
echo "Só há $one jeito de descobrir!";    // Por estar fora da função a variável Global retornará o valor.

?>

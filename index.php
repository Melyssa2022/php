<?php
echo'Olá Ana... O ano está acabando... ';
echo'<br>';
echo'<h1>Partiu Hopi Hari</h1>';
/*
http://localhost/php/php/index.php
*/

print('<h2>Quinta-Feira</h2>');
print_r('<h2> Sexta-Feira</h2>');


/* Comando que exibe mansagem na tela:
echo 
print
print_r
*/

$nome = 'Melyssa';  //Tipo Variável: text
$idade = 16;    //Tipo Variável: number
$altura = 1.65;   //Tipo Variável: number
$fumante = false;   //Tipo Variável: boolean
// true - verdadeiro
// false - falso

echo '<br>';
echo$nome . '<br>';
echo$idade . '<br>';
echo$altura . '<br>';
echo$fumante . '<br>';
echo 'Olá ' . $nome . ' você tem ' . $idade . ' anos';


echo '<br>';
echo gettype($nome) . '<br>';
echo gettype($idade) . '<br>';
echo gettype($altura) . '<br>';
echo gettype($fumante) . '<br>';

// Comando gettype mostra o tipo de dados usado na variavel.


echo '<br>';
echo '<h1> Operações </h1>';

$n1 = 10;
$n2 = 2;

echo $n1 + $n2 . '<br>';
echo $n1 - $n2 . '<br>';
echo $n1 * $n2 . '<br>';
echo $n1 / $n2 . '<br>';
echo $n1 % $n2 . '<br>';  //sobra de valor
echo $n1 ** $n2 . '<br>';  // exponenciação























































?>
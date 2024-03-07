<?php

$nome = 'Marcos';
$escola = 'Senac Taubaté';
$turno = 'noite';

echo "<h1>Olá Mundo!</h1";
// Usando áspas duplas, não é necessario concatenar string cm variável
echo "<h3>Seja Bem-vindo $nome</H3>";
// Usando áspas simples, é necessário concatenar string e variável 
// utilizando 'ponto final" (.)
echo 'você está matriculado no '. $escola .', no turno da ' . $turno;





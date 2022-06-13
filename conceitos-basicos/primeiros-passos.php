<?php

$idade = 21; //declaração de variável a partir do $

$idadeDaqui10Anos = $idade + 10;

echo $idade;
echo $idadeDaqui10Anos;

echo 'Olá, mundo! Minha idade é ' . $idade;
echo "\r\n"; //para caracteres especiais, usar aspas duplas. 
echo 'Um exemplo de fim de linha ' . PHP_EOL; //assim como \r e \n, o PHP_EOL representa uma quebra de linha, sendo essa constante de carater geral 
echo "\t Olá, mundo! Minha idade é $idade"; //aspas duplas permitem a leitura de variáveis dentro da string. \t --> tab


/* a tag de fechamento "? >" só deve ser utilizada em caso de haver códigos que
não sejam php */
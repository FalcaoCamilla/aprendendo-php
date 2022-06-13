<?php

$idade = 16;
$acompanhantes = 2;

echo "Você só pode entrar caso tenha a partir de 18 anos ou " ;
echo "a partir de 16 anos acompanhado" . PHP_EOL;

if ($idade >= 18){
    echo "Você tem $idade anos. Pode entrar sozinho.";
} else if ($idade >= 16 && $acompanhantes >= 1){
        echo "Você tem $idade anos, está acompanhado(a), então pode entrar.";
    } else {
        echo "Você só tem $idade anos. Você não pode entrar.";
} //no caso de instruções contidas em apenas uma linha, não é necessário o uso de chaves

echo PHP_EOL;
echo "Adeus";
<?php

$contador = 1;

while ($contador <= 15){
    echo "$contador" . PHP_EOL;
    $contador ++;
}

for($contador = 1; $contador <= 15; $contador++){
    echo "$contador" . PHP_EOL;
}

for($contador = 1; $contador <= 15; $contador++){
    if ($contador == 13){
        continue; //pulando uma iteração
    }
    echo "$contador" . PHP_EOL;
}

for($contador = 1; $contador <= 15; $contador++){
    if ($contador == 13){
        break; //quebrar o loop
    }
    echo "$contador" . PHP_EOL;
}
<?php

$tabuada = readline("Qual número exibir a tabuada");

for($i=1;$i<=10;$i++){
    echo "$i x $tabuada = ";
    echo $i * $tabuada;
    echo "\n";
}

?>
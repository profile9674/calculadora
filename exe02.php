<?php 
//2. Leia um número N e exiba apenas os números pares de 1 até N usando while. 
// rcv

$nUm = readline("Informe um num: ");
$nUmimpar = $nUm-1;
if($nUm%2==0){
while($nUm>=1){
    echo "$nUm \n";
    $nUm-=2;
}
}elseif($nUm%2>0){
    while($nUmimpar>=1){
        echo "$nUmimpar \n";
        $nUmimpar-=2;
}
}


?>
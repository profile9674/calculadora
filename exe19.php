<?php 
$n1 = readline("Informe o primeiro número: ");
$n2 = readline("Informe o segundo número: ");
$ope = readline("Informe qual operação você precisa (1 = soma, 2 = subtração, 3 = multiplicação, 4 = divisão): ");

if($ope == 1){
    echo "O resultado é " . $n1+$n2;
}
elseif($ope == 2){
    echo "O resultado é " . $n1-$n2;
}
elseif($ope == 3){
    echo "O resultado é " . $n1*$n2;
}
elseif($ope == 4){
    echo "O resultado é " . $n1/$n2;
}



?>
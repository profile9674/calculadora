<?php 
$valor = readline("Informe um valor em reais:R$ ");
$moeda = readline("Informe a moeda, euro, dólar ou libra: ");

$dolar = $valor/5.76;
$euro = $valor/6.23;
$libra = $valor/7.45;

if($moeda=='dólar'){
    echo"Em dólares esse valor é de $" . $dolar . " dólares.";
}
elseif($moeda=='euro'){
    echo"Em euros esse valor é de €" . $euro . " Euros.";
}
elseif($moeda=='libra'){
    echo"Em Libras esse valor é de £" . $libra . " Libras.";
}


?>
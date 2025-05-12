<?php 
/*3. Peça um número N e calcule a soma de todos os números de 1 até N usando 
for. 
rcv
*/

$nUmero = readline("Informe um num: ");

$contador = 0;
for($i=1; $i<=$nUmero; $i++){
    $contador= $contador+$i; // 

}
echo "o valor é $contador"




?>
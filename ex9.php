<?php
/* O Maia adora vender figurinhas da copa
Ele tem 420 figurinhas repetidas
Ele esta vendendo cada figurinha por R$ 2,00 cada
Quanto ele vai ganhar se vender 305 figurinhas?
Quanto ele ainda pode lucrar com elas?
*/

$fig  = 420;
$vend = 305;
$lucro = $vend * 2;
$sobraram = ($fig - $vend) * 2;

echo 'Ele terá lucrado R$ ' . $lucro;
echo '<br>';
echo ' e ainda poderá lucrar R$ ' . $sobraram;













?>
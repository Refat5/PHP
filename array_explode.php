<?php 
$star='*';

$word=['ami','tomake','valo','vashi'];

$string = implode($star, $word);

$array = explode('_', $string);

print_r($array);
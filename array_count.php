<?php 

//We can count the number of things in an array
$company = [
    'Google',
    'Microsoft',
    'Apple',
    'Adobe',
    'Cisco',
    'Juniper',
    'Lenovo',
    'Samsung'
    
];
$employee
=[
    'refat',
    'tanvir',
    'ashik',
    'jubair',
    'komol'
       
];

$product

=[
    'movile',
    'tv',
    'table',
    'pen',
    'laptoop',
    'remove',
    'Lenovo',
    'remote'
    
];

$c1 = count($product);
$c2 = count($employee);
$c3 = count($company);

echo "is This total $c1 company total employee $c2 total product $c3";

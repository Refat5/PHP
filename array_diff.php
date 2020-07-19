
<?php

//compares one or more arrays and provides only the values present in array one, that are not in any other arrays

$arrayone = [
    'Google',
    'Microsoft',
    'Apple',
    'Adobe',
    'Cisco',
    'Juniper',
    'Lenovo',
    'Samsung',
    'Refat'
];
 
$arraytwo = [
    'Google',
    'Microsoft',
    'Apple',
    'Adobe',
    'Cisco',
    'Juniper',
    'Lenovo',
    'Samsung'
];
 
$diff = array_diff($arrayone, $arraytwo);
 
print_r($diff);
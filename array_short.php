<?php 
$mixed=[1,2,3,4,'refat','tanvir','jubair'];

$veggies=["tomatoes","Spinach","cprn","Tomatoes","Cucumbers"];

$compnay=[ 'Google',
    'Microsoft',
    'Apple',
    'Adobe',
    'Cisco',
    'Juniper',
    'Lenovo',
    'Samsung',
    'Red Hat'];

    $numbers = ['12', '234651', '234', '41', '89', '196583', '1', '86', '3', '5', '9'];

    echo "<pre>";

    sort($mixed);
    asort($veggies);
    rsort($compnay);
    arsort($numbers);

    



    print_r($mixed);
    print_r($veggies);
    print_r($compnay);
    print_r($numbers);


<?php
$array = [
    'How to build a website',
    'Design with Twitter Bootstrap',
    'Handle the backend with PHP',
    'Eat Veggies for good health',
    'The answers to all of your questions',
    'Racing in the Nascar Series'
];

$index = array_search('The answers to all of your questions', $array);

echo "The answers to all of your questions is located at index $index of the array."
?>

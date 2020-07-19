
	
<?php
//max - find out maximum vale in array
//min - find out minimum vale in array
//rand - return a random vale in array
 
$numbers = ['12', '3443', '34', '415', '89', '196583', '1', '865', '3', '59', '9'];
 
echo max($numbers) . '<br>';
 
echo min($numbers) . '<br>';
 
$rand = array_rand($numbers);
 
echo $rand;
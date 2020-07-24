<?php  
$array = [
	'phone'=>'samsung',
	'laptop' =>'hpg4',
	 'cycle'   =>'motor'
];

$true = array_key_exists('laptop', $array);

echo "Do you hap a laptop?";

if ($true) 
{
	echo "why yes,yes i do in fact";
}
else
{
	echo 'No i use my mobile insted';
}
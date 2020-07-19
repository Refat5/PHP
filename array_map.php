<?php  

//strtolowr mixed case strings into all lowercase.
//strtoupper mixed case strings into all uppercase.


$refat=[
	'he IS a GOOD boy',
	'he Eat EGGe'

];

function lower($refat)
{
	return strtolower($refat);
}
function upper($refat)
{
	return strtoupper($refat);
}

$upperV=array_map('upper',$refat);
foreach ($upperV as $u) {
	echo $u.'<br>';
}

$lowerV=array_map('lower',$refat);
foreach ($lowerV as $l) {
	echo $l.'<br>';
}
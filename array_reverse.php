<?php 
$ami=[
'ami valo chele',
'ami sudu tomar',
'tumi sudu amar',
'tumi  valo chele',

];

$ami1 = array_reverse($ami);
$ami2 = array_reverse($ami,true);

foreach ($ami1 as $a => $b) {
	echo $a.'--'.$b.'<br>';
}
echo "<br>";
foreach ($ami2 as $a => $b) {
	echo $a.'--'.$b.'<br>';
}
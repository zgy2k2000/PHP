<?php
echo "=========for=========".'<br />';
for($j=1;$j<=9;$j++){
	for($i=1;$i<=$j;$i++){
		// echo {$i}*{$j}=.($i*$j)." ";
		echo "{$i}*{$j}=".($i*$j)." ";
	}
	echo "<br />";
}

echo "=========while=========".'<br />';

$j=1;
while($j<=9){
	$i=1;
	while($i<=$j){
	echo "{$i}*{$j}=".($i*$j).' ';
	$i++;
	}
	echo "<br />";
$j++;
}

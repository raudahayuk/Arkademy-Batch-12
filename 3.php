<?php
function segitiga($baris){
	$odd=1;
	$space=$baris-1;
	for ($i=1; $i <= $baris ; $i++) { 
		$k=0;
		for ($j=1; $j <= $space; $j++) { 
			echo "-";
		}
		for ($j=1; $j <= $odd ; $j++) { 
			if ($j<$i) {
				$k+=1;
			}else{
				$k-=1;
			}
			echo "$k";
		}
	
	echo "<br>";
	$odd+=2;
	$space-=1;
}
}

segitiga(9);

?>
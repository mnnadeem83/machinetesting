<?php

function sumOfEven($a){
	$sum=0;
	
	foreach($a as $key=>$value){
		if($value%2==0){
			$sum+=$value;
		}	
	}
	
	echo $sum;
		
	
}


sumOfEven([2,1,7,4,6]);

?>
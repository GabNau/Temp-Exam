<?php  
//Author: Gabrielle Naubert
//March 6, 2020


//Initializing variables
$start1 = 0;
$start2 = 1;
$sum = 0;
$total = 0;
$sequence = [0,1];

//Generating Fibonacci numbers
while ( $total <= 5000000) {
	if ($start1 + $start2 >5000000) {
		break;
	}else if($start1 + $start2){
		$total = $start1 + $start2;
		//Store in array
		array_push($sequence, $total);
		$start1 = $start2;
		$start2 = $total;
		//echo "total ",$total;
		//echo "sum ",$sum;
	}
	
}
//Go through the array of answers and only sum up the odd numbers
foreach ($sequence as $value) {
	if ($value % 2 ==1) {
		$sum+=$value;
		echo $value,"\n";
	}
	
}
echo "The final sum is: ",$sum;

?>
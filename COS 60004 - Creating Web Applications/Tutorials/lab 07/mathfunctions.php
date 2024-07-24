<?php
/* mathfunctions.php
   Collection of user-defined maths functions
   Like any code you should start your file with a header comment
   Author: A. Tutor
*/
 

function isPostiveInteger($n){

	$result=false;

if(is_numeric($n)){

	if(floor($n)==$n){

		if($n>0)
			$result=true;
	}
}

return $result;

}


function factorial ($n) {	


	$result = 1;		
	$factor = $n;		
	while ($factor > 1) {	
	  $result = $result * $factor;
	  $factor--;	
	}				
	return $result;
}
?>

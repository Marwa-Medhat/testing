<?php

function add($a, $b) {
	return $a + $b;
}

function addArray($a, $b) {
	if(!is_array($b)) $b = [$b];
	if(!is_array($a)) $a = [$a];

	$s = [];
	for($i = 0; $i < count($a); $i++)
		$s[] = (isset($a[$i]) ? $a[$i] : 0) + (isset($b[$i]) ? $b[$i] : 0);
	return $s;
}

function calcfactorial($num)
{

	$factorial = 1; 
	//is_int (for all checks)
	if(is_numeric($num))
	{
		if($num < 0)
		{
			return null;	
		}
		else
		{
			if(!is_float($num))
			{
			for ($x=$num; $x>=1; $x--)   
			{  
			$factorial = $factorial * $x;  
			}  
				return $factorial;
			}
			else
		    {
			return null;
		    }
		}
        } 
		else
		{
			return null;
		}
	
}


/*
<?php  
$num = 4;  
$factorial = 1;  
for ($x=$num; $x>=1; $x--)   
{  
  $factorial = $factorial * $x;  
}  
echo "Factorial of $num is $factorial";  
?>  

*/

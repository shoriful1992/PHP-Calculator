<?php
$x = 0;
$y = 1;
for($i=1; $i<=100; $i++)
{
	$z = $x+$y;
	if($z%2!=0)
	{	
		echo $z.'<br/>';
	}	

	$x = $y;
	$y = $z;
}
?>
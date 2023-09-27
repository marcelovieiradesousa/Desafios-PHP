https://edabit.com/challenge/68iZhCgFi8dzq8tBo

<?php
function fib($num) {
    $a = 0;
    $b = 1;
	for($i=1; $i<$num; $i++){
	    $aux = $b;
	    $b = $a+$b;
	    $a = $aux;
	}
	return ($num > 0) ? $b : $a;
}
?>

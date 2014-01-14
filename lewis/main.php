<?php

function draw($top, $end, $total, $x = 0, $y = 0)
{
	$space = ($top - $end) * -1;

	$space = $space / $total;

	$returnVal = array();

	for($sum = 0; $sum <= $total; $sum++)
	{
		$charNum = $top + ($space * $sum);

		$spaceCharNum = ($end - $charNum) + $x;

		$line = "";

		for($d = 0; $d < $spaceCharNum / 2; $d++)
		{
			$line = $line . " ";
		}

		for($d = 0; $d < $charNum; $d++)
		{
			$line = $line . "*";
		}

		$returnVal[] = $line;
	}

	return $returnVal;
}

foreach(draw(2, 14, 6) as $val)
	echo $val . "\n";

foreach(draw(2, 14, 6) as $val)
	echo $val . "\n";

foreach(draw(4, 4, 2, 10) as $val)
	echo $val . "\n";

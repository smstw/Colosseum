<?php

$height= 15;
$color = 'red';
$basinwidth = 8;
str_repeat("&nbsp", 15);

echo "<p style='color:$color;'>";
for($e=0; $e<=2; $e++)
{

for($x=0; $x<=$height; $x++)
{

	for($j=0;$j<(15-$x);$j++)

	echo str_repeat("&nbsp", 3);
	echo str_repeat("***", $x);
    echo "<br />";
}

for($e=0; $e<=1; $e++)
{

		for($x=10; $x<=$height; $x++)
		{

			for($j=0;$j<(15-$x);$j++)

			echo str_repeat("&nbsp", 3);
			echo str_repeat("***", $x);
			echo "<br />";
		}

}

}
for($i=0; $i<=3; $i++)
{
    echo str_repeat("&nbsp", 19);
	echo str_repeat("***", $basinwidth);
	echo "<br />";

}

echo "<p>";
<html lang="en">
<body>
	<?php
//inits
$columncount = 5;
$rowcount = 10;
echo "HELLO WOW";
echo "<table>";
//build table rows
for ( $x = 0; $x < $rowcount; $x++)
{
	 echo "<tr>";
	//build table columns
	for ( $y = 0; $y < $columncount; $y++)
	{
		if ($x == 0)
		{
		echo "<th> Header no " . ($y+1) . "</th>";	
		}
	   	echo "<td>" . ($y+$x)/($x+1) . "</td>";
		
	}
	echo "</tr>";
}
echo "</table>";
?>
	
</body>
</html>

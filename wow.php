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
	   	echo "<td>" . ($y+1) . "</td>";
	}
	echo "</tr>";
}
echo "</table>";
?>
	
</body>
</html>

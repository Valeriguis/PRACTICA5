<html>
<head> <title>Tabla de multiplicar </title> </head>

<body>
<div id="formulario">
	<form method="POST" action="#">
		<label> Horizontal: </label>
		<input type="number" min="1" max="15" name="H" required><br>
		<label> Vertical: </label>
		<input type="number" min="1" max="15" name="V" required><br>
		
		<input type="submit" Value="Ver tabla"><br>	
	</form>
</div>
<div id="tabla">
<?php
if(isset($_POST['H']) && isset($_POST['V']))
{
$H=$_POST['H'];
$V=$_POST['V'];
echo "<table border='1'>";
	for($i=1; $i<=$V; $i++)
  {
	echo"<tr>";
	for($i2=1; $i2<=$H; $i2++)
	{
		echo"<td>";
		$Mul=$i*$i2;
		if (($Mul%5)==0)
			echo"<font color='red'> $Mul </font>";
		else
			echo $Mul;
		echo "</td>";
	}
	echo "</tr>";
   }
}

?>
</div>

</body>
</html>
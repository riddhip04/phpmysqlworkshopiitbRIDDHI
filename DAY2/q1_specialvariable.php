<html>
<form action="q1_specialvariable.php" method="GET">
enter 3 sides of triangle<br>
number 1:<br>
<input type="text" name="num1"><br>
number 2:<br>
<input type="text" name="num2"><br>
number 3: <br>
<input type="text" name="num3"><br>
<button type="submit">submit</button><br>
</form>
</html>
<?php
$num1=$_GET['num1'];
$num2=$_GET['num2'];
$num3=$_GET['num3'];
if($num1 && $num2 && $num3)
	{
	if($num1==$num2 && $num2==$num3)
		{
		echo "it is an equilateral triangle";
	}
	elseif($num1==$num2||$num2==$num3||$num3==$num1)
	{
	echo "it is a isoceles triangle";
	}
	else{
		if (($num1>$num2)&&($num1>$num3))
		{
			$orignalNum=$num1;
			$temp=(($num2*$num2)+($num3*$num3));
			$m= sqrt($temp);
		}
		if ((num2>$num1)&&($num2>$num3))
		{ 
			$orignalNum==$num2;
			$temp=(($num1*$num1)+($num3*$num3));
			$m= sqrt($temp);
		}
		if ((num3>$num2)&&($num3>$num1))
		{
			$orignalNum==$num3;
			$temp=(($num2*$num2)+($num1*$num1));
			$m= sqrt($temp);
		}
		if($orignalNum===$m)
		{
			echo"this is a right triangle";
		}
		else
		{
			echo"this is scalene triangle";
		}
	}
}		
?>
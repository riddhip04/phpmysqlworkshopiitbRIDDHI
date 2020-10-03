<html>
<form action="q2_specialvariables.php" method="POST">
Name of the student<br>
<input type="text" name="name"><br><br>
Marks in each subject - <br>
subject 1: <br>
<input type="text" name="num1"><br>
subject 2: <br>
<input type="text" name="num2"><br>
subject 3: <br>
<input type="text" name="num3"><br>
subject 4: <br>
<input type="text" name="num4"><br>
subject 5: <br>
<input type="text" name="num5"><br>
<button type="submit">submit</button><br>
</form>
</html>
<?php
$name = $_POST['name'];
$s1 = $_POST['num1'];
				$s2 = $_POST['num2'];
				$s3 = $_POST['num3'];
				$s4 = $_POST['num4'];
				$s5 = $_POST['num5'];
				$sum = ($s1+$s2+$s3+$s4+$s5);
				$ttl= 500 ;
				$perc = (($sum/500)*100);

				if($name){
					echo "submitted successfully!";
					echo "Name of student: $name<br>";
					echo "Subject 1 marks: $s1<br>";
					echo "Subject 2 marks: $s2<br>";
					echo "Subject 3 marks: $s3<br>";
					echo "Subject 4 marks: $s4<br>";
					echo "Subject 5 marks: $s5<br>";
					echo "Total marks obtained: $sum<br>";
					echo "Total marks: 500<br>";
					echo "Percentage: $perc%";

                }

?>

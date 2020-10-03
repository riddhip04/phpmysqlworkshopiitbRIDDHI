<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname= "result";
$conn = mysqli_connect($servername, $username, $password,$dbname);

if(isset($_POST['submit']))
	{
		if(!empty($_POST['name']) && !empty($_POST['num1']) && !empty($_POST['num2']) && !empty($_POST['num3']) && !empty($_POST['num4']) && !empty($_POST['num5']))
			{
				$name = $_POST['name'];
				$s1 = $_POST['num1'];
				$s2 = $_POST['num2'];
				$s3 = $_POST['num3'];
				$s4 = $_POST['num4'];
				$s5 = $_POST['num5'];
				$sum = ($s1+$s2+$s3+$s4+$s5);
				$ttl= 500 ;
				$perc = (($sum/500)*100);
				$query ="INSERT into class1(NAME,SUBJECT1,SUBJECT2,SUBJECT3,SUBJECT4,SUBJECT5,TOTAL_MARKS_OBTAINED,TOTAL_MARKS,PERCENTAGE) values('$name',$s1,$s2,$s3,$s4,$s5,$sum,$ttl,$perc)";
				$run = mysqli_query($conn,$query) or die(mysqli_error($conn));

				if($run){
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

             }

             else{
echo "all feilds required" ;
}
    }
else{ echo "Wrong";}

?>`
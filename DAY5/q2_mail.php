<html>
<form action='q2_mail.php' method='POST'>
	<h1>Enter the required details</h1><br>
	Enter your name: <input type='text' name='uname'><br><br>
	Enter email ID: <input type='text' name='email'><br><br>
	Enter your feedback:<br> <textarea name='feedback' rows='4' cols='50'>
		Max length is 100 characters...
	</textarea><br><br>
	<input type="submit" value="Submit"><br>
</form>


</html>
<?php
require("connect.php");

@$admin_id = "SOMEONE@EMAIL.COM";  //admin email ID here

@$user_name = $_POST['uname'];
@$user_id = $_POST['email'];
@$feed_back = $_POST['feedback'];


$write = "INSERT INTO feedback1 (name, email, feedback) VALUES ('$user_name', '$user_id', '$feed_back')";


if (($user_name||$user_id||$feed_back)==0) {
	echo "<br>Empty Fields";
} else{

	$exe = mysqli_query($conn,$write);
	if ($exe) {
		echo "<br>Feedback recieved";
	} else {
		echo "<br>Error: " . $write . "<br>" . $conn->error;
	}


	$subject = "Feedback recieved from the feedback page";
	$body = "Thank you <html><b>$user_name</b></html> for your feedback!";
	$header = "From:riddhi.panchale99@gmail.com \r\n";
         
	// $body_admin = "The feedback from <html><b>$user_name</b></html> is:    $feed_back";
	// $admin_id = "SOMEONE@EMAIL.COM";  //admin email ID here
	// $subject_admin = "Feedback recieved";
	// $header_admin = "From: $user_id";


	$user_mailed = mail($user_id, $subject, $body, $header);
	// $admin_mailed = mail($admin_id, $subject_admin, $body_admin, $header_admin);

	if($user_mailed)
	{
		echo "<br><br>Email has been sent";
	}
echo $user_mailed;

}

$conn->close();

?>
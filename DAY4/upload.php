<?php
$name= $_FILES["myfile"]["name"];
$type= $_FILES["myfile"]["type"];
$size= $_FILES["myfile"]["size"];
$temp= $_FILES["myfile"]["tmp_name"];
$error=$_FILES["myfile"]["error"];

if($error > 0)
{
	die(" error uploading file ! code $error.");
}	
	else
		{
		if ($type == "image/png" || $size > 2000000)
			{
			move_uploaded_file($temp,"uploaded/".$name);
			echo "upload complete !";
			}
		else
			{
			die("that format is not allowed! ");
		}
	}

?>
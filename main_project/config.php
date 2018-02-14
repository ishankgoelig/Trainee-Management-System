<?php
$con=mysqli_connect('localhost','root','','main_project')or die(mysqli_error());
if($con)
{
	echo "Database is connected";
}
else
{
	echo "Error in database";
}
?>
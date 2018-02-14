<?php
include 'config.php';
if(isset($_POST['login'])=='login')
{
	$query="select u_id ps from admin where admin_id='".$_POST['u_id']."' and password='".$_POST['ps']."'";
	$result=mysqli_query($con,$query);
	if (mysqli_num_rows($result)>0)
	{
		$msg=base64_encode("you have succesfuuly login");
		header("Location:index.php?msg=$msg");
	}
	else
	{
		$msg=base64_encode("wrong username or password");
		header("Location:index.php?msg=$msg");
	}
}
else
{
	$msg=base64_encode("Unable to Access this application");
	header("Location:index.php?msg=$msg");
}
?>
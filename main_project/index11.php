<?php
$link=mysql_connect("localhost","root","");
session_start();
mysql_select_db("main_project",$link);
?>
<html>
<head>
<title> login</title>
<link href="login.css" text="text/css" rel="stylesheet" media="all">
</head>
<body>
<div id="table1">
<form method="POST">
<table cellpadding="3px",cellspacing="3px" height="100%" width="100%" align="center">
<th colspan="2" align="center"><h1>login</h1></th>
<tr><td><input type="User Id" placeholder="Please enter your Id" name="uid" class="input" required /></td></tr>
<tr><td><input type="password" placeholder="password" name="ps" class="input" required/></td></tr>
<tr><td colspan="2" align="center"><input type="submit" name="submit"value="login" class="input" id="button" />
	&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
	<a href="signup.php">
	<input type="button" name="submit"value="signup" class="input" id="button" /></td>
	</a>
</tr>
</table>
</form>
</div>
<?php
if(isset($_POST["submit"]))
{
	$a=$_POST["uid"];
	$b=$_POST["ps"];
	$_SESSION['X']=$a;
	
	
$query="select * from tbl_admin where admin_id='$a'
 and password='$b'";
$row=mysql_query($query);
$data=mysql_fetch_array($row);
if($data > 0)
{
	echo "<script>alert('sucessfully login')</script>";
	header('location:home.php');
}
else
{
	echo "<script>alert('error in login')</script>";
}



}


?>
</body>
</html>
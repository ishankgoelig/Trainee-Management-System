<?php
$link=mysql_connect("localhost","root","");
mysql_select_db("main_project",$link);
?>
<html>
<head>
<title>signup page</title>
<link href="signup.css" text="text/css" rel="stylesheet" media="all">
</head>
<body>
<div id="table">
<form method="post" enctype="multipart/form-data">
<table cellpadding="3px" cellspacing="2px" width="100%" height="100%">
<th colspan="2" align="center"><h1>SIGNUP</h1></th>
<tr><td><input type="text" placeholder="name" name="na" class="input" required/></td> </tr>

<tr><td><input type="number" placeholder="contact no." class="input" name="cn"required/></td> </tr>
<tr><td><input type="email" placeholder="email-id" name="em"class="input" required/></td> </tr>
<tr><td><input type="password" placeholder="password"  name="pss"class="input" required/></td> </tr>
<tr><td><input type="file" name="image" />
		<img class="img-thumbnail" src="http://placehold.it/400x400" alt="" width="50px" height="50px"></td> </tr>
<tr><td colspan="2" align="center"><input type="submit" name="sub" value="sign up" class="input" id="button"  / ></td> </tr>

</table>
</form>
</div>
<?php
if(isset($_POST['sub']))
{
	$a=$_POST["na"];
	$c=$_POST["cn"];
	$d=$_POST["em"];
	$e=$_POST["pss"];
	$len=strlen($c);
	$tr1=substr($a,0,3);
	$tr2=substr($c,$len-4,$len);
	$m=$tr1.$tr2;
	//for image upload
	$img=$_FILES["image"]["name"];
	$type=$_FILES["image"]["type"];
	$size=$_FILES["image"]["size"];
	$store=$_FILES["image"]["tmp_name"];
	//for check image format
	$arr=explode('.',$img);
	$eb=end($arr);
	$format=array("jpg","png","jpeg");
	if(in_array("$eb",$format))
	{
		move_uploaded_file($store,"upload/".$img);
		$query="insert into tbl_admin set name='$a',photo='$img',contact='$c',email='$d',password='$e',admin_id='$m'";
		$row=mysql_query($query);
				if($row > 0)
				{
					echo "<script>alert('succesfully signup')</script>";
					echo "<script> window.location.href='index.php'</script>";
				}
				else
				{
					echo "<script>alert('error in signup')</script>";
				}
	}
	else
	{
		echo "<script>alert('wrong image format')</script>";
	}
}
?>
</body>
</html>

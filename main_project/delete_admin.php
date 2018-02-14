<?php
$link=mysql_connect("localhost","root","");
mysql_select_db("main_project",$link);
$id=$_GET["xyz"];
$query="delete from tbl_admin where id='$id'";
$data=mysql_query($query);
if($data > 0)
{
	echo "<script>alert('data is sucessfully deleted')</script>";
	echo "<script> window.location.href='display_admin.php'</script>";
	
}
else
{
	echo "<script>alert('please enter the valid values')</script>";
}

?>
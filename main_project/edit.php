<?php
$link=mysql_connect("localhost","root","");
mysql_select_db("murli",$link);
$id=$_GET["edi"];
?>
<?php
session_start();
?>
<?php
if($_SESSION["X"]=="")
{
	header('location:index.php');
}
?>
<html>
<head>
<link href="display.css" text="text/css" rel="stylesheet" media="all"/>
</head>
<body>
<div id="container">
<h1 align="center"><a href="logout.php">logout</a></h1>
	
	<form method="post">
	<table border="2px" cellpadding="5px" cellspacing="5px" align="center">
	<thead>
	<tr>
	<td>Name</td>
	<td>Father Name</td>
	<td>Email-Id</td>
	<td>Contact-No</td>
	<td>Admission Date</td>
	</tr>
	</thead>

<?php
$query="select * from tbl_signup1 where id='$id'";
$row=mysql_query($query);
$data=mysql_fetch_array($row);
?>
	<tbody>
	<tr>
	<td><?php echo $data["name"];?></td>
	<td><?php echo $data["fname"];?></td>
	<td><?php echo $data["email"];?></td>
	<td><?php echo $data["contact"];?></td>
	<td><?php echo $data["addmda"];?></td>
	</tr>
	</tbody>
</table>
</form>

<form method="post" >

<table  align="center" border=2px;>

		<th colspan="2" align="center">Update data </th>
		<tr> <td>name</td> <td> <input type="text"  name="na" class="input" value="<?php echo $data["name"];?>"> </td></tr>
		<tr> <td>father name</td> <td> <input type="text"  name="fna" class="input" value="<?php echo $data["fname"];?>"> </td></tr>
		<tr> <td>email-id</td> <td> <input type="email" name="em" class="input" value="<?php echo $data["email"];?>"> </td></tr>
		<tr> <td>mobile number</td> <td> <input type="number" name="num" class="input" value="<?php echo $data["contact"];?>"> </td></tr>
		<tr> <td>Date of admission</td> <td> <input type="date" name="sd" class="input" value="<?php echo $data["addmda"];?>"> </td></tr>
		<tr><td colspan="2" align="center"> <input type="submit" name="sub" class="input" value="update"> </td></tr>
</table>
</form>

<?php
if(isset($_POST['sub']))
{
	$a=$_POST["na"];
	$b=$_POST["fna"];
	$c=$_POST["em"];
	$d=$_POST["num"];
	$h=$_POST["sd"];
	$query="update tbl_signup1 set name='$a',fname='$b',email='$c', contact='$d' , addmda='$h' where id='$id'";
$row=mysql_query($query);
if($row > 0)
{
	echo "<script>alert(' update sucessfully ')</script>";
	echo "<script> window.location.href='display.php'</script>";
}
else
{
	echo "<script>alert('error')</script>";
}
}
?>
</div>
</body>
</html>
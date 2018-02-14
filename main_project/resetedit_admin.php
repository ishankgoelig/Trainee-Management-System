
<?php

$link=mysql_connect("localhost","root","");
mysql_select_db("main_project",$link);
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
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
<?php
include 'header.php';
?>

<?php
include 'slidemenu.php';
?>
        </nav>

        <div id="page-wrapper">
<div class="alert alert-success">
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header" align="center">
                           <u> Present admin detail</u>
                        </h1>
                    </div>
				</div>
          
								<!-- content -->
					<div class="panel panel-danger">
                            <div class="panel-heading">
                                <h2 class="panel-title">Present admin detail &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
								&nbsp &nbsp &nbsp &nbsp<button type="button" class="btn btn btn-info">Add new admin</button></h2>
                            </div>
						<div class="alert alert-info">
                            <div class="panel-body">
                                <!--  trainee display table-->
								
								<form method="post" enctype="multipart/form-data">
									<table class="table table-bordered table-hover table-striped">
									<thead>
										<tr class="success">
											
											<th>Name</th>
											<th>mobile no</th>
											<th>Email Id</th>
											<th>password</th>
											<th>photo</th>
										</tr>
									</thead>
									<?php
										$query="select * from tbl_admin where id='$id'";
										$row=mysql_query($query);
										$data=mysql_fetch_array($row);
									?>
									<tbody>
										<tr class="warning">
										
                                        <td><?php echo $data["name"];?></td>
                                        <td><?php echo $data["contact"];?></td>
										<td><?php echo $data["email"];?></td>
										<td><?php echo $data["password"];?></td>
										
										
                                        
                                        <td>
											<img src="upload/<?php echo $data["photo"];?>" width="150px" height="150px">
										</td>
                                        
										</tr>
									</tbody>
									</table>
									</form>	
										    <div class="col-lg-12">
												<h3 class="page-header" align="center" color="red">
													<u> Edit Admin</u>
												</h3>
											</div>
								<form method="post" enctype="multipart/form-data">		
									<!-- add new trainee details-->
								<div style='margin-left:270px;'>
									<div class="col-lg-8">
									<!--  name-->
										<div class="form-group">
											<label>Name</label>
											<input class="form-control" placeholder="Name of admin " name="na">
										</div>
									
									<!-- mobile no -->
										<div class="form-group">
											<label>contact no.</label>
											<input class="form-control" placeholder="contact number" type="number" name="num" >
										</div>
									<!-- email -->
										<div class="form-group">
											<label>Email-ID</label>
											<input class="form-control" placeholder="Email-Id of Admin" type="email" name="em" >
										</div>
									<!-- password -->
										<div class="form-group">
											<label>Password</label>
											<input class="form-control" placeholder="Password of Admin" type="password" name="pwd" >
										</div>
									
								

									<!--  image-->
										<div class="form-group">
											<input type="file" name="img"/>
											<img class="img-thumbnail" src="http://placehold.it/400x400" alt="" width="200px" height="200px">
										</div>
										
									
										
									<!--update or reset button  -->
										<div class="form-group">
											<button type="submit" name="sub" class="btn btn-lg btn-primary">Update</button>
											<a href="resetedit_admin.php?edi=<?php echo $data['id'];?>">
											<button type="button" class="btn btn-lg btn-warning">Reset</button>
											</a>
										</div>
										</div>
									</div>
								</div>
								</form>
<?php
if(isset($_POST['sub']))
{
	$a=$_POST["na"];
	$c=$_POST["num"];
	$d=$_POST["em"];
	$e=$_POST["pwd"];
	$len=strlen($c);
	$tr1=substr($a,0,3);
	$tr2=substr($c,$len-4,$len);
	$m=$tr1.$tr2;
	//uploade image
	$img=$_FILES["img"]["name"];
	$type=$_FILES["img"]["type"];
	$size=$_FILES["img"]["size"];
	$store=$_FILES["img"]["tmp_name"];
	$arr=explode('.',$img);
	$en=end($arr);
	$format=array("jpg","png","jpeg");
	if(in_array("$en",$format))
	{
	move_uploaded_file($store,"upload/".$img);
	$query="update tbl_admin set name='$a',contact='$c',email='$d',password='$e'
	,photo='$img',admin_id='$m' where id='$id' ";
		
		$row=mysql_query($query);
		if($row > 0)
		{
			echo "<script>alert(' data updated succesfully ')</script>";
			echo "<script> window.location.href='display_admin.php'</script>";
		}
		else
		{
			echo "<script>alert('error')</script>";
		}
	}
	else
	{
		echo "<script>alert(' wrong format ')</script>";
	}
}
?>
								</div>
						</div>
                    </div>
</div>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

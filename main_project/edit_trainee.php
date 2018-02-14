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

            <div class="container-fluid">
<div class="alert alert-danger">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header" align="center">
                           <u> Present trainee detail</u>
                        </h1>
                    </div>
				</div>
          
								<!-- content -->
					<div class="panel panel-info">
                            <div class="panel-heading">
                                <h2 class="panel-title">Present trainee detail &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
								&nbsp &nbsp &nbsp &nbsp<button type="button" class="btn btn btn-info">Add new trainee</button></h2>
                            </div>
						<div class="alert alert-success">
                            <div class="panel-body">
                                <!--  trainee display table-->
								
								<form method="post" enctype="multipart/form-data">
									<table class="table table-bordered table-hover table-striped">
									<thead>
										<tr class="danger">
											
											<th>Name</th>
											<th>father name</th>
											<th>mobile no</th>
											<th>Email Id</th>
											<th>Address</th>
											<th>course</th>
											<th>total fee</th>
											<th>photo</th>
										</tr>
									</thead>
									<?php
										$query="select * from tbl_trainee where id='$id'";
										$row=mysql_query($query);
										$data=mysql_fetch_array($row);
									?>
									<tbody>
										<tr class="alert">
										
                                        <td><?php echo $data["name"];?></td>
                                        <td><?php echo $data["father_name"];?></td>
                                        <td><?php echo $data["contact"];?></td>
										<td><?php echo $data["email"];?></td>
										<td><?php echo $data["address"];?></td>
										<td><?php echo $data["course"];?></td>
										<td><?php echo $data["fee"];?></td>
                                        
										
                                        
                                        <td>
											
												<img src="upload/<?php echo $data["image"];?>" width="150px" height="150px">
											
										</td>
                                        
										</tr>
									</tbody>
									</table>
									</form>	

										    <div class="col-lg-12">
												<h3 class="page-header" align="center" color="red">
													<u> Edit Trainee</u>
												</h3>
											</div>
								<form method="post" enctype="multipart/form-data">		
									<!-- add new trainee details-->
									<div class="col-lg-6">
									<!--  name-->
										<div class="form-group">
											<label>Name</label>
											<input class="form-control" placeholder="Name of new trainee" name="na"value="harish">
										</div>
									<!--  father name-->
										<div class="form-group">
											<label>Father Name</label>
											<input class="form-control" placeholder=" Father Name of new trainee" name="fna" value="<?php echo $data["father_name"];?>">
										</div>
									<!-- mobile no -->
										<div class="form-group">
											<label>contact no.</label>
											<input class="form-control" placeholder="contact number" type="number" name="num" value="<?php echo $data["contact"];?>">
										</div>
									<!-- email -->
										<div class="form-group">
											<label>Email-ID</label>
											<input class="form-control" placeholder="Email-Id of trainee" type="email" name="em" value="<?php echo $data["email"];?>">
										</div>
									<!-- address -->
										<div class="form-group">
											<label>Address</label>
											<textarea class="form-control" rows="3" name="ad" ><?php echo $data["address"];?></textarea>
										</div>
									<!--select course  -->
										<div class="form-group">
											<label>select course</label>
											<select multiple="" class="form-control" name="cou" value="<?php echo $data["course"];?>">
												<?php
													$query="select * from tbl_course";
													$row=mysql_query($query);
													
													while($data=mysql_fetch_array($row))
													{
												?>
													<option><?php echo $data["course_name"];?></option>
													<?php
														$count++;
														}
													?>
											</select>
										</div>
										
									</div>
									<div class="col-lg-6">
									<!--  gender-->
										<div class="form-group">
											<label>select gender</label>
											&nbsp &nbsp &nbsp &nbsp
											<label class="radio-inline">
												<input type="radio" name="ge" id="optionsRadiosInline1" value="male" checked="">male
											</label>
											<label class="radio-inline">
												<input type="radio" name="ge" id="optionsRadiosInline2" value="female">female
											</label>
											<label class="radio-inline">
												<input type="radio" name="ge" id="optionsRadiosInline3" value="other">other
											</label>
										</div>
									<!-- date of joining -->
										<div class="form-group">
											<label>Date of joining</label>
											<input class="form-control" name="doj" type="date" value="<?php echo $data["doj"];?>">
										</div>
									<!-- d.o.b -->
										<div class="form-group">
											<label>D.O.B</label>
											<input class="form-control" name="dob"  type="date" value="<?php echo $data["dob"];?>">
										</div>
										
									<div class="form-group">
											<label>Course Duration</label>
											<select class="form-control" name="dur">
													<?php
														$query="select * from tbl_duration";
														$row=mysql_query($query);
														
														while($data=mysql_fetch_array($row))
														{
													?>
												<option><?php echo $data["course_duration"];?></option>
													<?php
														$count++;
														}
													?>
											</select>
									</div>
									<!--  image-->
										<div class="form-group">
											<input type="file" name="image" />
											<img class="img-thumbnail" src="http://placehold.it/100x100" alt="">
										</div>
									<!--total fee  -->
										<div class="form-group">
											<label>Total fees</label>
											<div class="form-group input-group">
												<span class="input-group-addon">Rs.</span>
												<input type="text" class="form-control" name="fee" value="<?php echo $data["fee"];?>">
												<span class="input-group-addon">.00</span>
											</div>
										</div>
									<!--update or reset button  -->
										<div class="form-group">
											<button type="submit" name="sub" class="btn btn-lg btn-primary">Update</button>
											<a href="resetedit_trainee.php?edi=<?php echo $data['id'];?>">
											<button type="button" class="btn btn-lg btn-warning">Reset</button>
											</a>
										</div>
									</div>
								</form>
<?php
if(isset($_POST['sub']))
{
	$a=$_POST["na"];
	$b=$_POST["fna"];
	$c=$_POST["num"];
	$d=$_POST["em"];
	$e=$_POST["ad"];
	$f=$_POST["cou"];
	$g=$_POST["ge"];
	$h=$_POST["doj"];
	$i=$_POST["dob"];
	$j=$_POST["dur"];
	$k=$_POST["fee"];
	$len=strlen($c);
	$tr1=substr($a,0,3);
	$tr2=substr($c,$len-4,$len);
	$m=$tr1.$tr2;
	//upload a mage
	$img=$_FILES["image"]["name"];
	$type=$_FILES["image"]["type"];
	$size=$_FILES["image"]["size"];
	$store=$_FILES["image"]["tmp_name"];
	//select a fiel format
	
	$arr=explode('.',$img);
	$en=end($arr);
	$format=array("png","jpg","jpeg","gif");
	if(in_array("$en",$format))
	{
			move_uploaded_file($store,"upload/".$img);
			$query="update tbl_trainee set name='$a',father_name='$b',contact='$c',email='$d',address='$e',course='$f',gender='$g',doj='$h'
			,dob='$i',duration='$j',fee='$k',image='$img',trainee_id='$m' where id='$id' ";
		
			$row=mysql_query($query);
				if($row > 0)
				{
					echo "<script>alert(' data updated succesfully ')</script>";
					echo "<script> window.location.href='display_trainee.php'</script>";
				}
				else
				{
					echo "<script>alert('error')</script>";
				}
	}
	else
	{
		echo "<script>alert(' wrong file format ')</script>";
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

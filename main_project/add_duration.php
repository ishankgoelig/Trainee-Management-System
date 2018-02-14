<?php
include_once 'sqlquery.php';
$connection=new abc();
$table="tbl_duration";
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
				<form method="post">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                       <u> <h1 class="page-header" ALIGN="CENTER">
                            ADD COURSE DURATION
                        </h1></u>
                    </div>
                </div>
                <!-- /ADD TRAINEE DETAIL -->
				<div style='margin-left:300px;'>
				<div class="col-lg-8">
				<div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">Add Course Duration</h3>
                            </div>
                            <div class="panel-body">
                              	
									
									<!--  name-->
									
										<div class="form-group">
											<label>Course duration</label>
											<input class="form-control" placeholder="Enter the course duration" name="dur">
										</div>
									
									
									<!--update or reset button  -->
										<div class="form-group">
											<button type="submit" class="btn btn-lg btn-primary" name="sub">Add course duration</button>
											&nbsp &nbsp &nbsp &nbsp &nbsp
										<a href="add_duration.php">	<button type="button" class="btn btn-lg btn-warning" >Reset</button></a>
										</div>
									
								
                            </div>
                </div>
				</div>
				</div>

				</form>
<?php
if(isset($_POST['sub']))
{
	$a=$_POST["dur"];

$result=$connection->course_duration($table,$a);
if($result > 0)
{
	echo "<script>alert('  course duration is succesfully added ')</script>";
	echo "<script> window.location.href='display_duration.php'</script>";
}
else
{
	echo "<script>alert('error')</script>";
}
}
?>
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

<?php

$link=mysql_connect("localhost","root","");
mysql_select_db("main_project",$link);
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
<div class="alert alert-info">
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
					<!-- add new enquary button -->
					
					<div style='float:right;'>
					<a href="add_coursetype.php">
					<button type="button" class="btn btn-success">Add new Course Type</button>
					</a>
					</div>
                    <div class="col-lg-12">
                        <h1 class="page-header" align="center">
							Manage Course Type
                        </h1>

                    </div>
                </div>
                <!-- /.enquiry detail-->
				<form method="post">
								<div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr class="alert alert-danger">
										<th>s no.</th>
                                        <th> course Type</th>
                                        <th>Action</th>
												<?php
													$query="select * from tbl_coursetype";
													$row=mysql_query($query);
													$count=1;
													while($data=mysql_fetch_array($row))
													{
												?>
														
												
										
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="success">
										<td><?php echo $count ?></td>
                                        <td><?php echo $data["course_type"];?></td>
                                        
                                       
                                        <td><a href="delete_coursetype.php?xyz=<?php echo $data['id'];?>">delete</a>/
											<a href="edit_coursetype.php?edi=<?php echo $data['id'];?>"> edit</a></td>
                                    </tr>
                                    
                                    
                                </tbody>
												<?php
													$count++;
													}
												?>
                            </table>
                        </div>
				</form>

            </div>
            <!-- /.container-fluid -->
</div>
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

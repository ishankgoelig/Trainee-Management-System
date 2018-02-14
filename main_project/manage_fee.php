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

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

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
<script type="text/javascript">
  	 
  	
	function get_data(){
	
		var tag=$("#tid").val();
		$.post('feedata_fetch.php',
			{
				tag1:tag,
			},function(data){
				$("#test").html(data);
			}
		);

		
	}
</script>

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

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Welcome to our <small>institution</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Murli Global
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                
                <!-- /.main content -->
			<form method="post" id="test">
                <div class="row">
				<div class="alert alert-danger">
				<div class="panel panel-green">
                            <div class="panel-heading">
								
                                <h3 class="panel-title"> &nbsp &nbsp &nbsp &nbsp Select Trainee Id  </h3>
								<div style='margin-top:-18px; margin-left:450px; width:400px;'>
								
								
                                
                                <select class="form-control" id="tid" onchange="get_data()">
													<option>-Please Select Trainee Id-</option>
													<?php
														$query="select * from tbl_trainee";
														$row=mysql_query($query);
														
														while($data=mysql_fetch_array($row))
														{
													?>
												<option value="<?php echo $data["trainee_id"];?>"> <?php echo $data["trainee_id"];?></option>
													<?php
														$count++;
														}
													?>
                                </select>
								
								
								</div>
                            </div>
                            <div class="panel-body">
								
										<div class="col-sm-4">
											<div class="panel panel-yellow">
												<div class="panel-heading">
													<h3 class="panel-title" align="center">Trainee Information</h3>
												</div>
												<div class="panel-body">
												

													<table class="table table-bordered table-hover table-striped">
															
															<tbody>
																<tr class="active">
																	<td>Name</td>
																	<td></td>
																
																</tr>
																<tr class="success">
																	<td>D.O.B</td>
																	<td></td>
																	
																</tr>
																<tr class="warning">
																	<td>Course</td>
																	<td></td>
																
																</tr>
																<tr class="danger">
																	<td>doj</td>
																	<td></td>
														
																</tr>
																<tr class="active">
																	<td>Email</td>
																	<td></td>
																
																</tr>
																<tr class="success">
																	<td>Fee</td>
																	<td></td>
														
																</tr>
																<tr class="warning">
																	<td>Image</td>
																	<td><img src="Sample Pictures/Penguins.jpg" height="80" width="80"/></td>
																
																</tr>
																
																
																
															</tbody>
													</table>
													<div class="panel-heading" align="center">
													<button type="button" class="btn btn-success">Edit</button>
													</div>
											
												</div>
											</div>
										</div>
						
										<div class="col-sm-4">
											<div class="panel panel-primary">
												<div class="panel-heading">
													<h3 class="panel-title" align="center">Last Payement Detail</h3>
												</div>
												<div class="panel-body">
														<table class="table table-bordered table-hover table-striped">
															<thead class="btn-danger">
																<tr>
																	<th>Date</th>
																	<th>Amount(rs)</th>
																  
																</tr>
															</thead>
										
														</table>
												</div>
											</div>
										</div>
										
										<div class="col-sm-4">
											<div class="panel panel-green">
												<div class="panel-heading">
													<h3 class="panel-title" align="center">New Payment</h3>
												</div>
												<div class="panel-body">
													<div class="form-group">
														<label>Date</label>
														<input type="date" class="form-control" name="date">
													</div>
													<div class="form-group">
														<label>Amount</label>
														<input class="form-control" placeholder="Enter Amount" name="amt">
													</div>
													<div class="panel-heading" align="center">
													<button type="submit" class="btn btn-success" name="submit">Pay</button>
													</div>
													
													
												</div>
											</div>
										</div>
									
									
										
								
                            </div>
                </div>
                </div>    
                   
                </div>
			</form>
						<?php
		if(isset($_POST["submit"]))
			{
			$tid=$_POST["t_id"];
			$amt=$_POST["amt"];
			$date=$_POST["date"];
			$q="insert into fee_payment set trainee_id='$tid',amount='$amt',date='$date'";
			$da=mysql_query($q);
			if($da>0)
			{
			echo "<script>alert('Amount Save Sucessfully')</script>";
			}
			else
			{
			echo "<script>alert('Amount Not Save Sucessfully')</script>";
			}
			
			}
			?>

                <!-- /.row -->

               
                    
                    
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

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

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>

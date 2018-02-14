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



<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
<?php
include 'header.php'
?>
            
<?php
include 'slidemenu.php';
?>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">
<div class="alert alert-danger">
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

                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    
                                    <div class="col-xs-9 text-left">
                                        <div class="huge">Manage Trainee</div>
                                        
                                    </div>
                                </div>
                            </div>
                            <a href="display_trainee.php">
                                <div class="panel-footer">
                                    <span class="pull-left">click here to manage trainee</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    
                                    <div class="col-xs-9 text-left">
                                        <div class="huge">Manage Fees</div>
                                        
                                    </div>
                                </div>
                            </div>
                            <a href="manage_fee.php">
                                <div class="panel-footer">
                                    <span class="pull-left">click here to manage fee</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    
                                    <div class="col-xs-9 text-left">
                                        <div class="huge">Manage Enquiry</div>
                                        
                                    </div>
                                </div>
                            </div>
                            <a href="display_enquiry.php">
                                <div class="panel-footer">
                                    <span class="pull-left">click here to manage enquiry</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">

                                    <div class="col-xs-9 text-left">
                                        <div class="huge">Manage Admin</div>
                                        
                                    </div>
                                </div>
                            </div>
                            <a href="display_admin.php">
                                <div class="panel-footer">
                                    <span class="pull-left">click here to manage admin</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

               
                    
                    </div>
                                
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

<?php
session_start();
$_SESSION['secure']=rand(10000,99999);
if(!isset($_POST['secure']))
{
	
}
?>
<?php
error_reporting(0);
include('db.php');
if(isset($_POST['action']))
{          
    if($_POST['action']=="login")
    {
        $email = mysqli_real_escape_string($connection,$_POST['email']);
        $password = mysqli_real_escape_string($connection,$_POST['password']);
        $strSQL = mysqli_query($connection,"select name from tbl_admin where email='".$email."' and password='".$password."'");
        $Results = mysqli_fetch_array($strSQL);
		$_SESSION['X']=$email;
        if(count($Results)>=1)
        {
            $message = $Results['name']." Login Sucessfully!!";
			echo "<script>window.location.href='home.php'</script>";
        }
        else
        {
            $message = "Invalid email or password!!";
        }        
    }
    elseif($_POST['action']=="signup")
    {
		/*require("lib/fpdf.php");
		$showPdf=new FPDF();
		$showPdf->SetTitle('My Details');
		$showPdf->Addpage(1);
		$showPdf->Cell(0,10,'$name');
		$showPdf->Cell(0,10,'$email');
		$showPdf->Cell(0,10,'$password');
		$showPdf->Output();*/
        $name       = mysqli_real_escape_string($connection,$_POST['name']);
        $email      = mysqli_real_escape_string($connection,$_POST['email']);
        $password   = mysqli_real_escape_string($connection,$_POST['password']);
        $contact   = mysqli_real_escape_string($connection,$_POST['contact']);		
        $query = "SELECT email FROM tbl_admin where email='".$email."'";
        $result = mysqli_query($connection,$query);
        $numResults = mysqli_num_rows($result);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) // Validate email address
        {
            $message =  "Invalid email address please type a valid email!!";
        }
        elseif($numResults>=1)
        {
            $message = $email." Email already exist!!";
        }
        else
        {
         $link=mysqli_query($connection,"INSERT INTO tbl_admin(name,email,password,contact) VALUES('$name','$email','$password','$contact')");
		   if($link >0)
		   {
            $message = "Signup Sucessfully!!";
			}
			else
			{
			 $message = "Signup unSucessfully!!";
			}
        }
        
    }
}


echo '<script type="text/javascript" src="jquery-1.8.0.min.js"></script>
<link rel="stylesheet" href="jquery-ui.css" type="text/css" />
<script src="jquery-ui.js"></script>
<style type="text/css">
input[type=text]
{
  border: 1px solid #ccc;
  border-radius: 3px;
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  width:200px;
  min-height: 28px;
  padding: 4px 20px 4px 8px;
  font-size: 12px;
  -moz-transition: all .2s linear;
  -webkit-transition: all .2s linear;
  transition: all .2s linear;
}
input[type=text]:focus
{
  width: 300px;
  border-color: #51a7e8;
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1),0 0 5px rgba(81,167,232,0.5);
  outline: none;
}
input[type=password]
{
  border: 1px solid #ccc;
  border-radius: 3px;
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  width:200px;
  min-height: 28px;
  padding: 4px 20px 4px 8px;
  font-size: 12px;
  -moz-transition: all .2s linear;
  -webkit-transition: all .2s linear;
  transition: all .2s linear;
}
input[type=password]:focus
{
  width: 300px;
  border-color: #51a7e8;
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1),0 0 5px rgba(81,167,232,0.5);
  outline: none;
}
input[type=number]
{
  border: 1px solid #ccc;
  border-radius: 3px;
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  width:200px;
  min-height: 28px;
  padding: 4px 20px 4px 8px;
  font-size: 12px;
  -moz-transition: all .2s linear;
  -webkit-transition: all .2s linear;
  transition: all .2s linear;
}
input[type=number]:focus
{
  width: 300px;
  border-color: #51a7e8;
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1),0 0 5px rgba(81,167,232,0.5);
  outline: none;
}
body
{
	background-image:url(pic.jpg);
	background-size:100%;
	background-repeat:no-repeat;
	background-attachment:fixed;
}
#tabs
{	
	
	height:auto;
	width:300px;
	border-radius:12px;
	background-color:rgba(255,255,255,.8);
	margin:auto;
	margin-top:100px;
}
#tabs-1
{
	margin-left:-25px;
}
#tabs-2
{
	margin-left:-25px;
}
</style>  
  <script>
  $(function() {
    $( "#tabs" ).tabs();
  });
  </script>
</head>
<body>

<div id="tabs">
 <b>'.$message.'</b>
  <div >
  <ul>
    <li><a href="#tabs-1">Login</a></li>
    <li><a href="#tabs-2" class="active">Signup</a></li>
    
  </ul>
  </div>  
  <div id="tabs-1" >
  <form action="" method="post">
    <p><input id="email" name="email" type="text" placeholder="Email"></p>
    <p><input id="password" name="password" type="password" placeholder="Password">
    <input name="action" type="hidden" value="login" /></p>
    <p><input type="submit" value="Login" /></p>
  </form>
  </div>
  <div id="tabs-2" >
    <form action="" method="post">
    <p><input id="name" name="name" type="text" placeholder="Name"></p>
    <p><input id="email" name="email" type="text" placeholder="Email"></p>
	<p><input id="number" name="contact" type="number" placeholder="Contact. No"></p>
    <p><input id="password" name="password" type="password" placeholder="Password">
    <input name="action" type="hidden" value="signup" /></p>
	<p>
	<img src="generate.php"/>
	
	</p>
    <p><input id="name" name="secure" type="text" placeholder="please enter your capcha"></p>
    <p><input type="submit" value="Signup" /></p>
  </form>
  </div>
</div>';


?>

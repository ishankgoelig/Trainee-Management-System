<?php
session_start();
unset($_SESSION["X"]);
if($_SESSION["X"]=="")
{
	header('location:index.php');
}
?>
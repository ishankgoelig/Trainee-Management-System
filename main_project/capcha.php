<?php
session_start();
$_SESSION['secure']=rand(10000,99999);
?>
<img src="generate.php"/>
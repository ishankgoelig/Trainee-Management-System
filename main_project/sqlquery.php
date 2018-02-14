<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','main_project');

class abc
{
	function __construct()
	{
		$conn=mysql_connect(DB_SERVER,DB_USER,DB_PASS) or die('UNALBLE TO CONNECT TO SERVER'.mysql_error());
		mysql_select_db(DB_NAME,$conn);
	}
	public function add_trainee($table,$trainee_id,$name,$father_name,$contact,$email,$address,$course,$gender,$dob,$doj,$duration,$image,$fee)
	{
		$result=mysql_query("insert into $table set trainee_id='$trainee_id', name='$name',father_name='$father_name'
							,contact='$contact',email='$email',address='$address',course='$course',gender='$gender',
							dob='$dob',doj='$doj',duration='$duration',image='$image',fee='$fee'");
		return $result;
	}
	public function add_admin($table,$x,$y,$z,$p,$q,$r)
	{
		$result=mysql_query("insert into $table set admin_id='$x', name='$y',contact='$z',email='$p',password='$q',photo='$r'");
		return $result;
	}
	public function add_center($table,$x)
	{
		$result=mysql_query("insert into $table set center_name='$x'");
		return $result;
	}
	public function add_course($table,$x)
	{
		$result=mysql_query("insert into $table set course_name='$x'");
		return $result;
	}
	public function course_type($table,$x)
	{
		$result=mysql_query("insert into $table set course_type='$x'");
		return $result;
	}
	public function course_duration($table,$x)
	{
		$result=mysql_query("insert into $table set course_duration='$x'");
		return $result;
	}
	public function add_enquiry($table,$trainee_id,$name,$father_name,$contact,$email,$address,$course,$gender,$dob,$doj,$duration,$image,$fee)
	{
		$result=mysql_query("insert into $table set trainee_id='$trainee_id', name='$name',father_name='$father_name'
							,contact='$contact',email='$email',address='$address',course='$course',gender='$gender',
							doj='$doj',dob='$dob',duration='$duration',image='$image',fee='$fee'");
		return $result;
	}
}
?>
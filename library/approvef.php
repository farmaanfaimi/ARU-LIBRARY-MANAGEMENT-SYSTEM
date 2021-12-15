<?php
include("settingf.php");
session_start();
if(!isset($_SESSION['aid']))
{
	header("location:indexf.php");
}
$aid=$_SESSION['aid'];

$name = filter_input(INPUT_POST, 'name');
$author = filter_input(INPUT_POST, 'auth');
$studentid = filter_input(INPUT_POST, 'sid');
$studentdate = filter_input(INPUT_POST, 'date');
$sql=mysqli_query($set,"INSERT INTO issue(name,author,sid,date) VALUES('$name','$author','$studentid','$date')");
	if($sql)
	{
		$msg="Successfully Added";
	}
	else
	{
		$msg="Book Already Exists";
	}









?>
<?php
include("settingf.php");
session_start();
if(isset($_SESSION['sid']))
{
	header("location:homef.php");
}
$sid=mysqli_real_escape_string($set,$_POST['sid']); //_student-id details
$pass=mysqli_real_escape_string($set,$_POST['pass']); //_student-password details

if($sid==NULL || $_POST['pass']==NULL)
{
	//
}
else
{
	$p=sha1($pass);
	$sql=mysqli_query($set,"SELECT * FROM students WHERE sid='$sid' AND password='$p'"); //fetching student login details from students table
	if(mysqli_num_rows($sql)==1)
	{
		$_SESSION['sid']=$_POST['sid'];
		header("location:homef.php");
	}
	else
	{
		$msg="Incorrect Details";
	}
}
?>
<!DOCTYPE html>
<html >
<head>
<title>Anglia Ruskin University Library Management System</title>
<link href="stylesheet.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="banner">
<span class="head">Anglia Ruskin University Library Management System</span><br />

</div>
<br />

<div align="center">
<div id="wrapper">
<br />
<br />

<span class="SubHead">Student Sign In</span>
<br />
<br />
<form method="post" action="">
<table border="0" cellpadding="4" cellspacing="4" class="table">
<tr><td colspan="2" align="center" class="msg"><?php echo $msg;?></td></tr>
<tr><td class="labels">Student ID : </td><td><input type="text" name="sid" class="fields" size="25" placeholder="Enter Student ID" required="required" /></td></tr>
<tr><td class="labels">Password : </td><td><input type="password" name="pass" class="fields" size="25" placeholder="Enter Password" required="required" /></td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="Sign In" class="fields" /></td></tr>
</table>
</form>
<br />
<br />
<a href="registerf.php" class="link">Sign Up</a>
<br />
<a href="adminf.php" class="link">Admin Sign In</a>

<br />
<br />

</div>
</div>
</body>
</html>
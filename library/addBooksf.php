<?php
include("settingf.php");
session_start();
if(!isset($_SESSION['aid']))
{
	header("location:indexf.php");
}
$aid=$_SESSION['aid'];
$a=mysqli_query($set,"SELECT * FROM admin WHERE aid='$aid'");
$b=mysqli_fetch_array($a);
$name=$b['name'];
$bn=$_POST['name'];
$au=$_POST['auth'];
$qn=$_POST['quan'];
if($bn!=NULL && $au!=NULL)
{
	$sql=mysqli_query($set,"INSERT INTO books(name,author,quantity) VALUES('$bn','$au','$qn')");
	if($sql)
	{
		$msg="Successfully Added";
	}
	else
	{
		$msg="Book Already Exists";
	}
}
?>
<!DOCTYPE html >
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

<span class="SubHead">Add Books in Library</span>
<br />
<br />
<form method="post" action="">
<table border="0" class="table" cellpadding="10" cellspacing="10">
<tr><td class="msg" align="center" colspan="2"><?php echo $msg;?></td></tr> 
<tr><td class="labels">Book : </td><td><input type="text" name="name" placeholder="Enter Book Name" size="25" class="fields" required="required"  /></td></tr>
<tr><td class="labels">Author : </td><td><input type="text" name="auth" placeholder="Enter Author Name" size="25" class="fields" required="required"  /></td></tr>
<tr><td class="labels">Quantity : </td><td><input type="text" name="quan" placeholder="Enter Quantity" size="25" class="fields" required="required"  /></td></tr>

<tr><td colspan="2" align="center"><input type="submit" value="ADD BOOK" class="fields" /></td></tr>
</table>
</form>
<br />
<br />
<a href="adminhomef.php" class="link">Go Back</a>
<br />
<br />

</div>
</div>
</body>
</html>
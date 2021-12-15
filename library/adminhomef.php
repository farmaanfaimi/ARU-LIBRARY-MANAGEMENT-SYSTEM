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
?>
<!DOCTYPE html >
<html>
<head>

<title>Anglia Ruskin University Library Management System</title>
<link href="stylesheet.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="banner">
<span class="head">a.r.u|Anglia Ruskin University Library Management System</span><br />

</div>
<br />

<div align="center">
<div id="wrapper">
<br />
<br />

<span class="SubHead">Welcome <?php echo $name;?></span>
<br />
<br />
<table border="0" class="table" cellpadding="10" cellspacing="10">
<tr><td><a href="addBooksf.php" class="Command">Add Books</a></td>
<td><a href="bookRequestsf.php" class="Command">Books Requests</a></td></tr>
<tr><td><a href="issuef.php" class="Command">Book Issued</a></td><td><a href="changePasswordAdminf.php" class="Command">Change Password</a></td></tr>

<tr><td><a href="listf.php" class="Command">Student List</a></td><td><a href="logoutf.php" class="Command">Logout</a></td></tr>
<tr><td><a href="booklstf.php" class="Command">Book List</a></td></tr>

</table>
<br />
<br />

<br />
<br />

</div>
</div>
</body>
</html>
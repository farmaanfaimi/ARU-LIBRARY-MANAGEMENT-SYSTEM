<?php
include("settingf.php");
session_start();//starting the session
if(!isset($_SESSION['aid']))
{
	header("location:indexf.php");
}
$aid=$_SESSION['aid'];

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

<span class="SubHead">Books Issued to Students</span>
<br />
<br />

<table border="0" class="table" cellpadding="10" cellspacing="10">
<tr class="labels" style="text-decoration:underline;"><th>Book Name</th><th>Author</th><th>Issued By<br>Student ID</th><th>Date</th><th>Return</th></tr>
<?php
$x=mysqli_query($set,"SELECT * FROM issue");
while($y=mysqli_fetch_array($x))
{
	?>
<tr class="labels" style="font-size:14px;"><td><?php echo $y['name'];?></td><td><?php echo $y['author'];?></td><td><?php echo $y['sid'];?></td>
<td><?php echo $y['date'];?></td><td><a href="returnf.php?r=<?php echo $y['id'];?>" class="link">Return</a></td>
</tr>
<?php
}
?>
</table><br />
<br />
<a href="adminhomef.php" class="link">Go Back</a>
<br />
<br />

</div>
</div>
</body>
</html>
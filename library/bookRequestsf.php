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
if($bn!=NULL && $au!=NULL)
{
	$sql=mysqli_query($set,"INSERT INTO books(name,author) VALUES('$bn','$au')");
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

<span class="SubHead">Books Request From Students</span>
<br />
<br />

<table border="0" class="table" cellpadding="10" cellspacing="10">
<tr class="labels" style="text-decoration:underline;"><th>Book Name</th><th>Author</th><th>Requested by<br>(Student ID) </th></tr>
<?php
$x=mysqli_query($set,"SELECT * FROM request");
while($y=mysqli_fetch_array($x))
{
	?>
<tr class="labels" style="font-size:14px;"><td><?php echo $y['name'];?></td><td><?php echo $y['author'];?></td><td><?php echo $y['sid'];?></td><td><a href="issuedf.php?r=<?php echo $y['id'];?>" class="link">Issue</a></td></tr>
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
</html>
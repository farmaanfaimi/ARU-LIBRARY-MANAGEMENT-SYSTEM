<?php
include("settingf.php");
session_start();//initializing the session

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

<span class="SubHead">List of Students</span>
<br />
<br />

<table border="0" class="table" cellpadding="10" cellspacing="10">
<tr class="labels" style="text-decoration:underline;"><th>Student Id</th><th>Name</th><th>Email</th>
<?php
$x=mysqli_query($set,"SELECT * FROM students");//fetching details from student table
while($y=mysqli_fetch_array($x))
{
	?>
	
<tr class="labels" style="font-size:14px;"><td><?php echo $y['sid'];?></td><td><?php echo $y['name'];?></td><td>
<?php echo $y['email'];//printing student details ?></td><td><a href="stdeletef.php?r=<?php echo $y['sid'];?>" class="link">Delete</a></td>
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
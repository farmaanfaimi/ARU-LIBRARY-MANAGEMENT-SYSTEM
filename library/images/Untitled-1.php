
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
<tr class="labels" style="text-decoration:underline;"><th>Student Id</th><th>Name</th><th>email</th><th>Date</th>
<?php
$x=mysqli_query($set,"SELECT * FROM students");
while($y=mysqli_fetch_array($x))
{
	?>
<tr class="labels" style="font-size:14px;"><td><?php echo $y['sid'];?></td><td><?php echo $y['name'];?></td><td><?php echo $y['email'];?></td>

</tr>
<?php
}
?>
</table><br />
<br />
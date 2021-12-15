<?php
include("settingf.php");
session_start();
if(!isset($_SESSION['sid']))
{
	header("location:indexf.php");
}
$sid=$_SESSION['sid'];
$a=mysqli_query($set,"SELECT * FROM students WHERE sid='$sid'");//fetching_student-details
$b=mysqli_fetch_array($a);
$name=$b['name'];
$date=date('d/m/Y');
$bn=$_POST['name'];
if($bn!=NULL)
{
	$p=mysqli_query($set,"SELECT * FROM books WHERE id='$bn'");//fetching book-details
	$q=mysqli_fetch_array($p);
	$bk=$q['name'];
	$ba=$q['author'];
	$sql=mysqli_query($set,"INSERT INTO issue(sid,name,author,date) VALUES('$sid','$bk','$ba','$date')");
	//inserting issued details into issue table
	if($sql)
	{
		$msg="Successfully Issued";
	}
	else
	{
		$msg="Error Please Try Later";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Anglia Ruskin University Library Management System</title>
<link href="stylesheet.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="banner">
<span class="head">Anglia Ruskin University Library Management System</span><br/>

</div>
<br/>

<div align="center">
<div id="wrapper">
<br />
<br />

<span class="SubHead">Issued Book</span>
<br />
<br />
<form method="post" action="">
<table border="0" class="table" cellpadding="10" cellspacing="10">
<tr><td colspan="2" align="center" class="msg"><?php echo $msg;?></td></tr>
<tr><td class="labels">Book : </td><td><select name="name" class="fields" required >
<option value="" disabled="disabled" selected="selected"> - - Select Book - - </option>
<?php
$x=mysqli_query($set,"SELECT * FROM books");//selecting a book 
while($y=mysqli_fetch_array($x))//fetching-book details
{
	?>
<option value="<?php echo $y['id'];?>"><?php echo $y['name']." ".$y['author'];?></option>
<?php
}
?>
</select></td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="RETURN" class="fields" /></td></tr>
</table>
</form>
<br />
<br />
<a href="homef.php" class="link">Go Back</a>
<br />
<br />

</div>
</div>
</body>
</html>
<?php
include("settingf.php");
session_start();
if(!isset($_SESSION['aid']))
{
	header("location:indexf.php");
}
$aid=$_SESSION['aid'];

$r=$_GET['r'];
mysqli_query($set,"DELETE FROM books WHERE id='$r'");//deleting_entries
header("location:booklstf.php");
?>
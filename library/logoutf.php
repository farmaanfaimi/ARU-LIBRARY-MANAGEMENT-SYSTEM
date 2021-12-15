<?php
session_start();//starting session
unset($_SESSION['sid']);
session_destroy();//terminating the session
header("location:indexf.php");
?>
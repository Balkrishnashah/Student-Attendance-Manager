<?php
	session_start();
	unset($_SESSION["username"]);
	session_destroy();
	echo '<script language="javascript">';
	echo "alert('you logged out successfully')";
	echo "</script>";
	header('location: base.php');
?>
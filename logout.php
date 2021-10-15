<?php
session_start();
unset($_SESSION['name']);
unset($_SESSION['email']);
if (!isset($_SESSION['name']) && !isset($_SESSION['email'])) 
{
	header("Location: index.php");
}
else
{
	echo "Session don't destroy";
}

?>
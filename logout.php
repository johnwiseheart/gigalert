<?php
	include('define.php');
	session_start();
	session_destroy();
	
	header('Location: '.WWW_LINK.SUB_LINK.'user/home.php');
?>
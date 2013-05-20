<?php
	include "smarty_inc.php";
	
	session_start();
	if(isset($_SESSION['log'])){
		include "admin_add.tpl";
	}

	$log_name = $_POST['username'];
	$password = $_POST['password'];

	include "con_mysql.php";

	$result = select * from admin;
	$row = mysql_fetch_array($result);

	if($log_name == $row[username] && $password == $row[password]){
		session_register("log");
		$log = $log_name;
		echo "µÇÂ½³É¹¦";
		include "admin_add.tpl";
	else{
		echo "ÕÊºÅ»òÃÜÂë´íÎó";
		
	}
?>
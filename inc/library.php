<?php
	function db_conn($user, $pass, $host) {
		$con = mysql_connect($host, $user, $pass);
		if(!$con){
			die('Could not connected.'.mysql_error());
		}

		return $conn;
	}

	function check_login() {
		//foo..

		return $isLogin; //boolean
	}
?>

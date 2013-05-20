<?php
	function conn_db($db_user, $db_pass, $db_host) {
		$con = mysql_connect($db_host, $db_user, $db_pass);
		if(!$con){
			die('Could not connected.'.mysql_error());
		}

		return $conn;
	}


	function check_login() {
		//foo...

		return $isLogin; //boolean	
	}
?>

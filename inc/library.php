<?php
	function db_conn($user, $pass, $host) {
		$conn = mysql_connect($host, $user, $pass);
		if(!$con){
			die('Could not connected.'.mysql_error());
		}

		return $conn;
	}

	function check_login() {
		$isLogin = isset($_SESSTION['loged_in']);	

		return $isLogin; //boolean
	}

	function add_entry($article, $conn) {
		$sql = 'INSERT INTO article (title, content) VALUES ('.$article['title'].', '.$article['content'].')';
		mysql_query($sql, $conn);

		return true; //just for test..
	}
?>

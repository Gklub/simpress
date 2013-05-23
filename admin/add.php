<?php
	session_start();

	include '../inc/config.php';
	include '../inc/library.php';

	if(check_login()) {
		$title = $_POST['title'];
		$content = $_POST['article'];

		$article['title'] = $title;
		$article['content'] = $content;

		$conn = db_conn($db_host, $db_user, $db_pass);

		if(add_entry($content, $conn)) {
			mysql_close($conn);

			header(Location: '../index.php');
			exit;
		} else {
			echo "<script>alert('sorry, something went wrong, please try again.');</script>";
		}

	} else {
		header(Location: 'login.php');
		exit;
	}
?>

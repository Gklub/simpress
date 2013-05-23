<?php
	session_start();

	include '../inc/smarty.php';
	include '../inc/library.php';	

	$smarty = new Smarty();

	if(check_login()) {
		header(Location: 'index.php');
		exit;
	} else {
		$smarty->display('admin_header.tpl');
		$smarty->display('admin_login.tpl');
		$smarty->display('admin_footer.tpl');
	}

	$login_name = $_POST['username'];
	$login_pass = $_POST['password'];

	$conn = db_conn($db_host, $db_user, $db_pass);
	$sql = 'select * from admin';
	$result = mysql_query($sql, $conn);
	$row = mysql_fetch_array($result);

	mysql_close($conn);

	if ($login_name == $row['username'] && $login_pass == $row['password']) {
		session_register('loged_in');
		echo "success!";

		header(Location: 'index.php');
	} else {
		echo 'login failed';

		header(Location: 'login.php');	
	}
?>

<?php
	session_start();

	include '../inc/smarty.php';
	include '../inc/library.php';	

	$smarty = new Smarty();

	if(check_login()) {
		$smarty->display('admin_header.tpl');
		$smarty->display('admin_add.tpl');
		$smarty->display('admin_footer');
	} else {
		header(Location: 'login.php');
		exit;
	}
?>

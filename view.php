<?php
	$id = $_GET["id"];
	
	//$id = 1;
	
	$con = mysql_connect("localhost", "root", "geeklub!");
	
	if(!$con){
		die('Could not connect:'. mysql_error);
	}
	
	mysql_select_db("simpress", $con);
	
	$result = mysql_query("select * from article where id = '$id'");
	$row = mysql_fetch_array($result);
	
	$article = $row;
	
	mysql_close($con);
	
	//echo $article["content"];
	
	include "smarty.inc.php";
	
	$smarty = new Smarty();
	
	$smarty -> assign("content", $article[content]);
	$smarty -> display("article.tpl");
	
	
?>
<?php

	include "admin_index.php"
	
	mysql_select_db("simpress", $con);
	$result_links = mysql_query("SELECT * FROM links");
	$result_article = mysql_query("SELECT * FROM article");
	
	$j=0;
	$links=array();
	while($row_links=mysql_fetch_array($result_links)){
		$links[$j]=$row_links;
		$j++;
	}
	

	$i=0;
    $article=array();
    while($row_article=mysql_fetch_array($result_article)){//这一句，就是判断是否还有数据没有取完，如果取完，会由数据库返回false，停止while循环，如果有，则继续;
        $article[$i]=$row_article;
        $i++;
    }
	
	include"smarty_inc.php";
	
	$smarty = new Smarty();
	
	$smarty -> assign("links", $links);
	$smarty -> assign("article", $article);
	
	$smarty -> display("index.tpl");
	
	//print_r($article);
	//print_r($links);
	
	mysql_close($con);
?>
<html lang="en">
<head>
<title>博客首页后台修改页面</title>
<!-- Le styles -->
<style type="text/css">
h1{
position:absolute;
left:40%;
top:30px;
font-size:300%;
}
p.under{
position:absolute;
left:45%;
top:1200px;
}
textarea{
width:400px;height:100px;
font-size:150%;
border-radius:5px;
}
input[type="submit"]{
position:absolute;
	left: 40%;
width:100px;height:30px;
}

#articleList{
	position:absolute;
	left: 30%;
	top:150px;
	padding:10px;
	font-size:150%;
	line-height:30px;
	font-family:'helvetica neue',tahoma,arial,'hiragino sans gb','microsoft yahei',sans-serif;
}
</style>
</head> 

<body>
<section id="collapse">
<div class="page-header">
    <h1>博客Simpress</h1>
</div>
<div id="articleList">
    <P>about me:</p>
	<textarea name=""></textarea><br>
	<input type="submit" value="修改">
	<P>catogory：</p>
	<textarea name=""></textarea><br>
	<input type="submit" value="修改">
	<P>links：</p>
	<textarea name=""></textarea><br>
	<input type="submit" value="修改">
</div>
<footer><p class="under">&copy; GEEKLUB 极客部落</p></footer>

</script>
<script src="assets/js/jQuery.js"></script>
</body>  
</html>
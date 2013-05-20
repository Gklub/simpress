<!DOCTYPE HTML>
<html>
<head>
<title>article.html</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<link type="text/css" rel="stylesheet" href="personal_css.css"/>
</head>


<body>
<div style="padding-left: 280px;padding-top:80px;width: 800px;">
<div style="clear:both;">
	<div style="float:left;padding-left:20px;height:100px;width:100px;"> <a href="#"><img src="face.jpg"></a> </div>
	<div style="float:left;padding-left:50px;height:100px;width:600px;"><h3>Be geek, to hack!</h3></div>
</div>

<div style="width:800px;height:100px;"></div>
<div style="padding-top:20px;padding-bottom:30px;"><hr/></div>

<div>
    <div style="padding-left:10px;padding-bottom:20px;"><a class="btn" href="menu.html">Back</a></div>
	<div style="padding-left:30px;"><h2>GeeKlub介绍</h2></div>
	<div class="article"><p>{$content}</p></div>
<div style="padding-left: 600px;padding-top:30px;padding-bottom:40px;"><small>12/21/2012</small></div>
</div>

<hr/>

<div style="padding-top:20px; padding-bottom:10px;padding-left:20px;"><big>Please give some comments:</big></div>

<div style="padding-left: 80px;">
<textarea name="txtcom" id="comments" cols="30" rows="6" style="width:600px;">comments(^_^)</textarea>
</div>

<div style="padding-left: 600px;padding-top:10px;"><a class="btn" href="comments.html">Submit</a></div>
<p style="text-align:center;padding-top:60px;">BY GEEKLUB</p>
</div>


<script language="javascript" type="text/javascript" src="http://upcdn.b0.upaiyun.com/libs/jquery/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
$("#comments").click(function(){
	$(this).val("");
});
</script>
</body>
</html>
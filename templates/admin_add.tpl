  
<script type="text/javascript"> 
	CKEDITOR.replace("article");
</script> 


<body onload="returnonLoad();" style="width:800px;margin-left:280px;"> 
	<form action="add.php" method="post">
	<h3 style="text-align:center; padding:20px;">Welcome</h3> 
	
	<b>文章标题</b>
	<input type="text" name="title" value="请输入标题" style="width:300px;height:25px;margin:30px;color:#DFDFDF;" 
	onfocus="if(this.value=='请输入标题'){this.value='';this.style.color='#000000';}" 
	onblur="if(this.value==''||this.value=='请输入标题'){this.value='请输入标题';this.style.color='#DFDFDF';}"></input>
	
	<textarea id="article" name="article" class="ckeditor"></textarea>
	
	<button type="submit" style="margin:20px;float:right;height:30px;width:70px;" href="#">发布</button>
	</form>

{include file="header.tpl"}
<div class="container">
	<header>
		<div id="blogname"><h1>极客部落Simpress</h1></div>
		<p>pure as Chinese ancient art!</p>
	</header>

	<div id="main">
		<section id="sidebar">
			<div id="about">
				<h2>About Me</h2>
				<p>This is GeeKlub, we are freshman team!</p>
			</div>

			<div id="catagory">
				<h2>Catagory</h2>
				<ul>
					<li><a href="">foo</a></li>
					<li><a href="">bar</a></li>
				</ul>
			</div>

			<div id="links">
				<h2>Links</h2>
				<ul>
				
				{section name=i loop=$links}
				
					<li><a href="">{$links[i].name}</a></li>
					
				{/section}	
					
					
				<ul>
			</div>
		</section>

		<section id="articleList">
			
			
			{section name=line loop=$article}
			
			<div id="title">
				<a href="view.php?id={$article[line].id}"><span>{$article[line].title}</span></a>
			</div>
			
			
			{/section}
			
			
		</section>
	</div>
{include file="footer.tpl"}
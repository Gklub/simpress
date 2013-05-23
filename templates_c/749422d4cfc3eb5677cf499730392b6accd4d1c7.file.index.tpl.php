<?php /* Smarty version Smarty-3.1.13, created on 2013-05-16 10:51:08
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:173975194b61ac3f2f2-71891280%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1368700536,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '173975194b61ac3f2f2-71891280',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5194b61ad5d506_34015710',
  'variables' => 
  array (
    'links' => 0,
    'article' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5194b61ad5d506_34015710')) {function content_5194b61ad5d506_34015710($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
				
				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['links']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
				
					<li><a href=""><?php echo $_smarty_tpl->tpl_vars['links']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</a></li>
					
				<?php endfor; endif; ?>	
					
					
				<ul>
			</div>
		</section>

		<section id="articleList">
			
			
			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['line'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['line']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['line']['name'] = 'line';
$_smarty_tpl->tpl_vars['smarty']->value['section']['line']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['article']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['line']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['line']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['line']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['line']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['line']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['line']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['line']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['line']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['line']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['line']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['line']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['line']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['line']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['line']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['line']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['line']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['line']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['line']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['line']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['line']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['line']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['line']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['line']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['line']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['line']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['line']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['line']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['line']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['line']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['line']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['line']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['line']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['line']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['line']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['line']['total']);
?>
			
			<div id="title">
				<a href="view.php?id=<?php echo $_smarty_tpl->tpl_vars['article']->value[$_smarty_tpl->getVariable('smarty')->value['section']['line']['index']]['id'];?>
"><span><?php echo $_smarty_tpl->tpl_vars['article']->value[$_smarty_tpl->getVariable('smarty')->value['section']['line']['index']]['title'];?>
</span></a>
			</div>
			
			
			<?php endfor; endif; ?>
			
			
		</section>
	</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.13, created on 2013-05-18 14:26:40
         compiled from ".\templates\article.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1162151978f49a099b9-88401531%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a258164b56a279caa5204f5d224599d31ab77a07' => 
    array (
      0 => '.\\templates\\article.tpl',
      1 => 1368887199,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1162151978f49a099b9-88401531',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51978f49c239a4_23133160',
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51978f49c239a4_23133160')) {function content_51978f49c239a4_23133160($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div>
    <div style="margin-left:300px;width:80px;margin-top:60px;"><a class="btn" href="menu.html">&lt&ltBack</a></div>
	<h2 style="margin-left:300px;margin-right:300px;margin-top:35px;padding-left:30px;">GeeKlub介绍</h2>
	<p style="margin-left:300px;margin-right:300px;margin-top:30px;">
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

	</p>
<small style="float:right;margin-top:30px;margin-bottom:40px;margin-right:400px;">12/21/2012</small>
</div>


<!-- UY BEGIN -->
<div id="uyan_frame"></div>
<script type="text/javascript" id="UYScript" src="http://v1.uyan.cc/js/iframe.js?UYUserId=1777112" async=""></script>
<!-- UY END -->

<br/>
<p style="text-align:center;margin-top:100px;margin-bottom:50px;">BY GEEKLUB</p>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>
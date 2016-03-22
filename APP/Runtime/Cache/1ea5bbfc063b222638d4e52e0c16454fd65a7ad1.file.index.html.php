<?php /* Smarty version Smarty-3.1.6, created on 2016-03-06 19:32:50
         compiled from "./APP/Home/View\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:825756dc0d2b815da2-79942532%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ea5bbfc063b222638d4e52e0c16454fd65a7ad1' => 
    array (
      0 => './APP/Home/View\\Index\\index.html',
      1 => 1457263962,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '825756dc0d2b815da2-79942532',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56dc0d2be7878',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56dc0d2be7878')) {function content_56dc0d2be7878($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>乐购商店</title>
<link rel="stylesheet" type="text/css" href="./<?php echo @CSS_PATH;?>
style.css">
</head>
<body >
	<div class="header">
		<div class="logo">乐购商城</div>
		<div class="navBar">
			<ul>
				<li><a href="#">首页</a></li>
				<li><a href="#">手机</a></li>
				<li><a href="#">电脑</a></li>
				<li><a href="#">衣服</a></li>
				<li><a href="#">食品</a></li>
				<div class="clear"></div>
			</ul>
		</div>
		<div class="user">
			登陆 / 注册
		</div>
	</div>
	<div class="body">
		<div class="slidePic">
			<img src="<?php echo @IMG_PATH;?>
slidePic.jpg">
		</div>
		<div class="content">
			<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
			<div class="wareBox">
				<img src="<?php echo @IMG_PATH;?>
<?php echo $_smarty_tpl->tpl_vars['v']->value['pic'];?>
">
				<span><?php echo $_smarty_tpl->tpl_vars['v']->value['num'];?>
</span>
				<span><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</span>
			</div>
			<?php } ?>
			
			<div class="clear"></div>
		</div>
	</div>
	<div class="footer">
		欢迎光顾本商店
	</div>
</body>
</html>
<?php }} ?>
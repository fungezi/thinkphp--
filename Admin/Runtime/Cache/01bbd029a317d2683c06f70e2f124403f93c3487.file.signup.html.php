<?php /* Smarty version Smarty-3.1.6, created on 2016-03-09 20:11:08
         compiled from "./Admin/Home/View\User\signup.html" */ ?>
<?php /*%%SmartyHeaderCode:2461656e01227d7fa09-77095787%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01bbd029a317d2683c06f70e2f124403f93c3487' => 
    array (
      0 => './Admin/Home/View\\User\\signup.html',
      1 => 1457525457,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2461656e01227d7fa09-77095787',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56e012282aff2',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e012282aff2')) {function content_56e012282aff2($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>乐购商店后台</title>
<link rel="stylesheet" type="text/css" href="<?php echo @CSS_PATH;?>
/login.css">
</head>
<body >
<div class="bac">
	<div class="loginBox">
		<h3>乐购管理后台注册</h3>
		<form action="http://localhost/thinkphp2/admin.php?s=home/user/signup" method="POST">
			<div class="username">
				<label for="username">用户名</label>
				<input id="username" name="username" type="text" value="">
				<span class="clear"></span>
			</div>
			<div class="pwd">
				<label for="pwd">密码</label>
				<input id="pwd" type="password" name="pwd1" value="">
				<label id="pwd1" for="pwd1">再输一次密码</label>
				<input type="password" name="pwd1" value="">
				<span class="clear"></span>
			</div>
			<div class="login">
				<input class="login" type="submit" value="登陆">
			</div>
		</form>
	</div>
</div>
</body>
</html>
<?php }} ?>